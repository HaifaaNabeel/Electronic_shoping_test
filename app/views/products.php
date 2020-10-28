<?php include'header.php'; ?>


 </br></br>
<section>
    <div class="container">
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
             <div class="col-sm-12 col-md-3">
              <div class=" text-center mr-1 ml-1  mb-2">
                  <div class="card">
                 <div style="height:auto ;" class="table-block ">
                    <img alt=""  src="'.$row->product_main_image.'" style="height:272px;width:240px" />
                 </div>
                <div class="card-body">    <!--$row->product_date_added.<br>-->
                    <h6>'.$row->product_name.'</h6>
                    <h6>'.$row->product_price.'</h6>
                    <h6>
                         <input id="id';?><?php echo $row->Product_id; ?><?php echo'"  name="product_id" value="';?><?php echo $row->Product_id; ?><?php echo '" hidden="hidden">
                            <input id="qty"  name="qty" value="1" hidden="hidden">
                            <input id="user';?><?php echo $_GLOBALS['U']; ?><?php echo'"  name="user" value="';?><?php echo $_GLOBALS['U']; ?><?php echo '" hidden="hidden">
                        <button class="btn product_btn m-1" id="cart';?><?php echo $row->Product_id; ?><?php echo'" onclick="cart';?><?php echo $row->Product_id;?><?php echo'()"><span class="ion-ios-cart-outline"></span></button>
                        <button class="dcart btn product_btn m-1 "  id="dcart';?><?php echo $row->Product_id; ?><?php echo'" onclick="dcart';?><?php echo $row->Product_id;?><?php echo'()"><span class="ion-ios-cart-outline"></span></button>
                        <button class="btn product_btn m-1" onclick="favorite()" name="favorite"><span class="ion-android-favorite-outline"></span></button>
                        <button class="btn product_btn m-1" onclick="filter()"  name="filter"><span class="ion-ios-color-filter-outline"></span></button>
                        <a class="btn product_btn m-1" href="product_details?id='.$row->Product_id.'"><span class="ion-ios-more-outline"></span></a>
                    </h6>                    
                </div>
              </div>          

            </div>
            </div>';?>
                
                <script>
    function cart<?php echo $row->Product_id;?>(){
        document.getElementById('cart<?php echo $row->Product_id;?>').style.display='none';
        document.getElementById('dcart<?php echo $row->Product_id;?>').style.display='inline-block';
$.post("add/add_cart/addtocart",{product_id:$("#id<?php echo $row->Product_id; ?>").val(),user:$("#user<?php echo $_GLOBALS['U']; ?>").val(),qty:$("#qty").val(),add:$("#cart").val()},function(data){
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
      function favorite(){
            $.post("getlike.php",{id:$("#id1").val(),like:$("#user<?php echo $_GLOBALS['U']; ?>").val(),add:$("#cart").val()},function(data){ $("#lo").html(data);
              var id='count2';
     var fi =document.getElementById(id).innerHTML;
             fi++
            document.getElementById(id).innerHTML = fi; 
           });
    
    }
      function filter(){
            $.post("add/add_cart/index",{id:$("#id1").val(),like:$("#user<?php echo $_GLOBALS['U']; ?>").val(),add:$("#cart").val()},function(data){ $("#lo").html(data);
              var id='count3';
     var fi =document.getElementById(id).innerHTML;
             fi++
            document.getElementById(id).innerHTML = fi; 
           });
    
    }
    </script>
                
            <?php    }?>




             </div>
            </div>
    </div>
</section>





















<?php include'footer.php'; ?>
