<?php include'header.php'; ?>


 </br></br>
<section>
    <div class="container" >
         </br></br>

        <div class="row">
            <div class="col-sm-12">
                 <?php
                  $rows=$data['categories'];
                  foreach($rows as $row){
                    $rows1=$data['products'];
                    foreach($rows1 as $row1){
                        if($row1->category_id == $row->category_id ){
                      echo '
                <h3 class="text-center mb-3 mt-3">'.$row->category_name.'</h3>
                </br></br>'; break;}
                else{
                    continue;
                }}}
                
                ?>
            </div>
            
                  
            <?php
          $rows=$data['products'];
                foreach($rows as $row){
                    echo '
             <div class="col-sm-12 col-md-4 col-lg-3 ">
              <div class=" text-center mr-1 ml-1  mb-3">
                  <div class="card" style="margin:1px;width:100%;">
<a href="product_details?id='.$row->Product_id.'">
                 <div class="table-block " style="height:272px;padding-top:9px;" >
                    <img alt=""  src="'.$row->product_main_image.'" style="max-height: 100%;max-width: 100%;" />
                 </div></a>
                <div class="card-body">    <!--$row->product_date_added.<br>-->
<a href="product_details?id='.$row->Product_id.'">
 <h6 class=" text-center">'.$row->product_name.'</h6>
                      <h5 class=" text-center" style="font-weight: bold;">'.$row->product_price.' ريال يمني </h6>
                    </a>
                    <h6 class="text-center">
<input id="id';?><?php echo $row->Product_id; ?><?php echo'"  name="product_id" value="';?><?php echo $row->Product_id; ?><?php echo '" hidden="hidden">
<input id="qty"  name="qty" value="1" hidden="hidden">
<input id="pname';?><?php echo $row->Product_id; ?><?php echo'"  name="product_name" value="'.$row->product_name.'" hidden="hidden">
<input id="pimg';?><?php echo $row->Product_id; ?><?php echo'"  name="pimg" value="'.$row->product_main_image.'" hidden="hidden">
<input id="user';?><?php echo $_GLOBALS['U']; ?><?php echo'"  name="user" value="';?><?php echo $_GLOBALS['U']; ?><?php echo '" hidden="hidden">
<input id="price';?><?php echo $row->Product_id; ?><?php echo'"  name="price" value="';?><?php echo $row->product_price ?><?php echo '" hidden="hidden">
                        <button class="btn product_btn m-1 ';?><?php echo $row->Product_id; ?><?php echo '" id="cart';?><?php echo $row->Product_id; ?><?php echo'" onclick="cart';?><?php echo $row->Product_id;?><?php echo'()"><span class="ion-ios-cart-outline"></span></button>
                        <button class=" btn product_btn m-1 dcart "  id="dcart';?><?php echo $row->Product_id; ?><?php echo'" onclick="dcart';?><?php echo $row->Product_id;?><?php echo'()"><span class="ion-ios-cart-outline"></span></button>
                        <button class=" btn product_btn m-1" id="favorit';?><?php echo $row->Product_id; ?><?php echo'" onclick="favoor';?><?php echo $row->Product_id; ?><?php echo'()" name="favorite"><span class="ion-android-favorite-outline"></span></button>
                         <button class="  btn product_btn m-1 dcart" id="dfavorite';?><?php echo $row->Product_id; ?><?php echo'" onclick="dfavoor';?><?php echo $row->Product_id; ?><?php echo'()" name="dfavorite"><span class="ion-android-favorite-outline"></span></button>
                     
                        <button class=" btn product_btn m-1" id="filter';?><?php echo $row->Product_id; ?><?php echo'" onclick="filter';?><?php echo $row->Product_id; ?><?php echo'()" name="filter"><span class="ion-ios-color-filter-outline"></span></button>
                         <button class="  btn product_btn m-1 dcart" id="dfilter';?><?php echo $row->Product_id; ?><?php echo'" onclick="dfilter';?><?php echo $row->Product_id; ?><?php echo'()" name="dfilter"><span class="ion-ios-color-filter-outline"></span></button>                    </h6>                    
                </div>
              </div>          

            </div>
            </div>';?>
             
    <script>
        
function filter<?php echo $row->Product_id; ?>(){
    //  alert('hhhhh');
            document.getElementById('dfilter<?php echo $row->Product_id;?>').style.display='inline-block';
       document.getElementById('filter<?php echo $row->Product_id;?>').style.display='none';
          $.post("add/add_cart/addtofilter",{product_id:$("#id<?php echo $row->Product_id; ?>").val(),user:$("#user<?php echo $_GLOBALS['U']; ?>").val(),qty:$("#qty").val()},function(data){
              var id='count3';
     var fi =document.getElementById(id).innerHTML;
             fi++
            document.getElementById(id).innerHTML = fi; 
           });
      }
        function dfilter<?php echo $row->Product_id; ?>(){
    //  alert('hhhhh');
            document.getElementById('dfilter<?php echo $row->Product_id;?>').style.display='none';
       document.getElementById('filter<?php echo $row->Product_id;?>').style.display='inline-block';
          $.post("add/add_cart/deletefromfilter",{product_id:$("#id<?php echo $row->Product_id; ?>").val(),user:$("#user<?php echo $_GLOBALS['U']; ?>").val(),qty:$("#qty").val()},function(data){
              var id='count3';
     var fi =document.getElementById(id).innerHTML;
             fi--
            document.getElementById(id).innerHTML = fi; 
           });
      }
function favoor<?php echo $row->Product_id; ?>(){
    //  alert('hhhhh');
            document.getElementById('dfavorite<?php echo $row->Product_id;?>').style.display='inline-block';
       document.getElementById('favorit<?php echo $row->Product_id;?>').style.display='none';
          $.post("add/add_cart/addtofavorite",{product_id:$("#id<?php echo $row->Product_id; ?>").val(),user:$("#user<?php echo $_GLOBALS['U']; ?>").val(),qty:$("#qty").val()},function(data){
              var id='count2';
     var fi =document.getElementById(id).innerHTML;
             fi++
            document.getElementById(id).innerHTML = fi; 
           });
      }
        function dfavoor<?php echo $row->Product_id; ?>(){
    //  alert('hhhhh');
            document.getElementById('dfavorite<?php echo $row->Product_id;?>').style.display='none';
       document.getElementById('favorit<?php echo $row->Product_id;?>').style.display='inline-block';
          $.post("add/add_cart/deletefromfavorite",{product_id:$("#id<?php echo $row->Product_id; ?>").val(),user:$("#user<?php echo $_GLOBALS['U']; ?>").val(),qty:$("#qty").val()},function(data){
              var id='count2';
     var fi =document.getElementById(id).innerHTML;
             fi--
            document.getElementById(id).innerHTML = fi; 
           });
      }
        
        
        
     function cart<?php echo $row->Product_id;?>(){
        document.getElementById('cart<?php echo $row->Product_id;?>').style.display='none';
        document.getElementById('dcart<?php echo $row->Product_id;?>').style.display='inline-block';
$.post("add/add_cart/addtocart",{product_id:$("#id<?php echo $row->Product_id; ?>").val(),user:$("#user<?php  echo $_GLOBALS['U']; ?>").val(),price:$("#price<?php echo $row->Product_id; ?>").val(),qty:$("#qty").val(),pname:$("#pname<?php echo $row->Product_id; ?>").val(),pimg:$("#pimg<?php echo $row->Product_id; ?>").val(),add:$("#cart").val()},function(data){
              var id='count1';
     var fi =document.getElementById(id).innerHTML;
             fi++
            document.getElementById(id).innerHTML = fi; 
           });
    }
        
        function dcart<?php echo $row->Product_id;?>(){
document.getElementById('cart<?php echo $row->Product_id;?>').style.display='inline-block';
        document.getElementById('dcart<?php echo $row->Product_id;?>').style.display='none';
$.post("add/add_cart/deletefromcart",{product_id:$("#id<?php echo $row->Product_id; ?>").val(),user:$("#user<?php echo $_GLOBALS['U']; ?>").val(),qty:$("#qty").val(),add:$("#dcart").val()},function(data){
              var id='count1';
     var fi =document.getElementById(id).innerHTML;
             fi--
            document.getElementById(id).innerHTML = fi; 
           });
    
    }
      
        
    </script>
                
            <?php    }?>
<?php
$inorder=$data['color'];
foreach($inorder as $order){
    $item='cart'.$order;
echo"<script>
 document.getElementById('".$item."').style.backgroundColor='#ff6500';
 document.getElementById('".$item."').style.color='#fff';
</script>";

}
$infavraite=$data['fcolor'];
foreach($infavraite as $favorite){
    $item1='favorit'.$favorite;
echo"<script>
 document.getElementById('".$item1."').style.backgroundColor='#ff6500';
 document.getElementById('".$item1."').style.color='#fff';
</script>";

}
$infilter=$data['ficolor'];
foreach($infilter as $f){
    $item1='filter'.$f;
echo"<script>
 document.getElementById('".$item1."').style.backgroundColor='#ff6500';
 document.getElementById('".$item1."').style.color='#fff';
</script>";

}
?>


             </div>
            </div>
    </div>
</section>

<?php include'footer.php'; ?>
