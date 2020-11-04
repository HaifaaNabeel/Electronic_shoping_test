<?php include'header.php';?>
 </br></br>
 <link rel="stylesheet" href= "app/assets/css/cartstyle.css">

 <!--Main layout-->
 <main>

<div class="jumbotron mt-70">
    <div class="d-flex align-items-center h-100">
        <div class="container text-center py-5">
            <h1 class="mb-0">سلة المشتريات</h1>
        </div>
    </div>
</div>



<div class="container" dir="rtl" style="text-align:right">

    <section class="mt-5 mb-4">

        <div class="row">

            <div class="col-lg-8">

                <div class="card mb-4">
                    <div class="card-body">
                        <h4 class="mb-4" style="color: #F27523;" id="counter4"> عناصر <span id="counter4">
                            <?php
                   $rows=$data['cartitem'];
                  foreach($rows as $row){
                  echo $row;
                  }
                 ?>
                            </span> </h4>
                  <?php
                    if($_GLOBALS['U']>0){
                   $items=$data['fetchcart'];
                  foreach($items as $item){
                 
                  
                 ?>
                        <div class="row mb-4" id="cartitem<?php echo $item->Product_id; ?>">
                            <div class="col-md-5 col-lg-3 col-xl-3">
                                <div class="mb-3 mb-md-0">
                                    <img src="<?php  echo $item->product_main_image;?>"
                                        class="img-fluid w-100" alt="">
                                </div>
                            </div>
                            <div class="col-md-7 col-lg-9 col-xl-9">
                                <div class="d-flex justify-content-between">

                                    <div>
                   
                                        <h4><?php  echo $item->product_name;?> </h4>

                                    </div>

                                    <div>
                                        <div class="handle-counter">
                                            <button id="erorr<?php echo $item->Product_id; ?>"
                                                    onclick="delete_qty<?php echo $item->Product_id; ?>()"
                                                    class="counter-minus btn"><span
                                                    class="ion-android-remove"></span></button>
 <input id="id<?php echo $item->Product_id; ?>"  name="product_id" value="<?php echo $item->Product_id; ?>" hidden="hidden">
 <input id="price<?php echo $item->Product_id; ?>"  name="price" value="<?php echo $item->product_price; ?>" hidden="hidden">
<input id="user<?php echo $_GLOBALS['U']; ?>"  name="user" value="<?php echo $_GLOBALS['U']; ?>" hidden="hidden">
<input class="quantity text-center" min="1" name="qty" id="qty<?php echo $item->Product_id; ?>"value="<?php echo $item->quantity; ?>" type="number">
                                            <button
                                                onclick="add_qty<?php echo $item->Product_id; ?>()"
                                                class="counter-plus btn "><span
                                                    class="ion-android-add"></span></button>
                                        </div>

                                    </div>


                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <p class="mb-0"><span ><strong class="qtypricforeone" id="priceq<?php echo $item->Product_id;?>"><?php  echo $item->product_price*$item->quantity ;?></strong>RY</span></p>
                                    <div>
         <a href="#" class="a-text" id="dcart<?php echo $item->Product_id; ?>" onclick="dcart<?php echo $item->Product_id;?>()">حذف من السلة
             <span class="ion-android-delete"></span></a>

                                    </div>
                                    <div>

                                   
                    <a href="#" class="a-text" id="favorit<?php echo $item->Product_id; ?>" onclick="favoor<?php echo $item->Product_id; ?>()" >إضافة إلى المفضلة<span class="ion-android-favorite"></span></a>
                                                 <a href="#" class="dcart a-text" id="dfavorit<?php echo $item->Product_id; ?>" onclick="dfavoor<?php echo $item->Product_id; ?>()" >حذف من المفضلة<span
                                                class="ion-android-favorite"></span></a>
                                    </div>


                                </div>

                            </div>
                        </div>
                        <hr class="mb-4">
                        
                         <script>
         var id='qty<?php echo $item->Product_id; ?>';
              if(document.getElementById(id).value <= 1){
                  document.getElementById('erorr<?php echo $item->Product_id; ?>').style.display ='none';
              } 
function add_qty<?php echo $item->Product_id; ?>(){
 $.post("add/add_cart/addtoqty",{product_id:$("#id<?php echo $item->Product_id; ?>").val(),user:$("#user<?php echo $_GLOBALS['U']; ?>").val(),qty:$("#qty<?php echo $item->Product_id; ?>").val()},function(data){
                  var id='qty<?php echo $item->Product_id;?>';
     var fi =document.getElementById(id).value;
             fi++
            document.getElementById(id).value = fi;
         var id2='price<?php echo $item->Product_id;?>';
        var m=document.getElementById(id2).value;
      if(document.getElementById(id).value > 1){
                  document.getElementById('erorr<?php echo $item->Product_id; ?>').style.display ='inline-block';
              } 
    document.getElementById('priceq<?php echo $item->Product_id;?>').innerHTML=fi*m;
           });
      var total=0;
$('.qtypricforeone').each(function(){

total +=parseInt($(this).text());
    console.log(total);
});
$('.tootale').text(total);
$('.tootale1').val(total);
      }
    function delete_qty<?php echo $item->Product_id; ?>(){
           
          $.post("add/add_cart/deletefromqty",{product_id:$("#id<?php echo $item->Product_id; ?>").val(),user:$("#user<?php echo $_GLOBALS['U']; ?>").val(),qty:$("#qty<?php echo $item->Product_id; ?>").val()},function(data){
                  var id='qty<?php echo $item->Product_id;?>';
     var fi =document.getElementById(id).value;
             fi--
            document.getElementById(id).value = fi;
         var id2='price<?php echo $item->Product_id;?>';
        var m=document.getElementById(id2).value;
 if(document.getElementById(id).value <= 1){
                  document.getElementById('erorr<?php echo $item->Product_id; ?>').style.display ='none';
              } 
              document.getElementById('priceq<?php echo $item->Product_id;?>').innerHTML=fi*m;
           });
          var total=0;
$('.qtypricforeone').each(function(){

total +=parseInt($(this).text());
    console.log(total);
});
$('.tootale').text(total);
$('.tootale1').val(total);
      }                         
function favoor<?php echo $item->Product_id; ?>(){
    //  alert('hhhhh');
            document.getElementById('dfavorit<?php echo $item->Product_id;?>').style.display='inline-block';
       document.getElementById('favorit<?php echo $item->Product_id;?>').style.display='none';
          $.post("add/add_cart/addtofavorite",{product_id:$("#id<?php echo $item->Product_id; ?>").val(),user:$("#user<?php echo $_GLOBALS['U']; ?>").val(),qty:$("#qty").val()},function(data){
              var id='count2';
     var fi =document.getElementById(id).innerHTML;
             fi++
            document.getElementById(id).innerHTML = fi; 
           });
      }
        function dfavoor<?php echo $item->Product_id; ?>(){
            document.getElementById('dfavorit<?php echo $item->Product_id;?>').style.display='none';
       document.getElementById('favorit<?php echo $item->Product_id;?>').style.display='inline-block';
          $.post("add/add_cart/deletefromfavorite",{product_id:$("#id<?php echo $item->Product_id; ?>").val(),user:$("#user<?php echo $_GLOBALS['U']; ?>").val(),qty:$("#qty").val()},function(data){
              var id='count2';
     var fi =document.getElementById(id).innerHTML;
             fi--
            document.getElementById(id).innerHTML = fi; 
           });
      }
        function dcart<?php echo $item->Product_id;?>(){
        document.getElementById('cartitem<?php echo $item->Product_id; ?>').style.display='none';
$.post("add/add_cart/deletefromcart",{product_id:$("#id<?php echo $item->Product_id; ?>").val(),user:$("#user<?php echo $_GLOBALS['U']; ?>").val(),qty:$("#qty").val(),add:$("#dcart").val()},function(data){
              var id='count1';
     var fi =document.getElementById(id).innerHTML;
             fi--
            document.getElementById(id).innerHTML = fi; 
            document.getElementById('counter4').innerHTML = fi; 
          
           });
    
    }
      
        
    </script>
<?php
                  }}
elseif($_GLOBALS['U']==0){
    
    foreach($_SESSION['cart'] as $index=>$column){
    foreach($column as $key=>$value){
            
    } ?>
         <div class="row mb-4" id="cartitem<?php echo $_SESSION['cart'][$index]['p_id']; ?>">
                            <div class="col-md-5 col-lg-3 col-xl-3">
                                <div class="mb-3 mb-md-0">
                                    <img src="<?php echo $_SESSION['cart'][$index]['p_img'];?>"
                                        class="img-fluid w-100" alt="">
                                </div>
                            </div>
                            <div class="col-md-7 col-lg-9 col-xl-9">
                                <div class="d-flex justify-content-between">

                                    <div>
                   
                                        <h4><?php  echo $_SESSION['cart'][$index]['p_name'];?> </h4>

                                    </div>

                                    <div>
                                        <div class="handle-counter">
                                            <button id="erorr<?php echo $_SESSION['cart'][$index]['p_id'];?>"
                                                    onclick="delete_qty<?php echo  $_SESSION['cart'][$index]['p_id']; ?>()"
                                                    class="counter-minus btn"><span
                                                    class="ion-android-remove"></span></button>
 <input id="id<?php echo $_SESSION['cart'][$index]['p_id']; ?>"  name="product_id" value="<?php echo $_SESSION['cart'][$index]['p_id']; ?>" hidden="hidden">
 <input id="price<?php echo $_SESSION['cart'][$index]['p_id']; ?>"  name="price" value="<?php echo $_SESSION['cart'][$index]['p_price']; ?>" hidden="hidden">
<input id="user<?php echo $_GLOBALS['U']; ?>"  name="user" value="<?php echo $_GLOBALS['U']; ?>" hidden="hidden">
<input class="quantity text-center" min="1" name="qty" id="qty<?php echo $_SESSION['cart'][$index]['p_id']; ?>"value="<?php echo $_SESSION['cart'][$index]['p_qty']; ?>" type="number">
                                            <button
                                                onclick="add_qty<?php echo $_SESSION['cart'][$index]['p_id']; ?>()"
                                                class="counter-plus btn " ><span
                                                    class="ion-android-add"></span></button>
                                        </div>

                                    </div>


                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <p class="mb-0"><span ><strong class="qtypricforeone" id="priceq<?php echo $_SESSION['cart'][$index]['p_id']; ?>"><?php   echo $_SESSION['cart'][$index]['p_price']*$_SESSION['cart'][$index]['p_qty']; ;?></strong>RY</span></p>
                                    <div>
         <a href="#" class="a-text" id="dcart<?php echo $_SESSION['cart'][$index]['p_id']; ?>" onclick="dcart<?php echo $_SESSION['cart'][$index]['p_id'];?>()">حذف من السلة
             <span class="ion-android-delete"></span></a>

                                    </div>
                                    <div>

                                   
                    <a href="#" class="a-text" id="favorit<?php echo $_SESSION['cart'][$index]['p_id']; ?>" onclick="favoor<?php echo $_SESSION['cart'][$index]['p_id']; ?>()" >إضافة إلى المفضلة<span class="ion-android-favorite"></span></a>
                                                 <a href="#" class="dcart a-text" id="dfavorit<?php echo $_SESSION['cart'][$index]['p_id']; ?>" onclick="dfavoor<?php echo $_SESSION['cart'][$index]['p_id']; ?>()" >حذف من المفضلة<span
                                                class="ion-android-favorite"></span></a>
                                    </div>


                                </div>

                            </div>
                        </div>
                        <hr class="mb-4">
                        
                         <script>
       
              var id='qty<?php echo $_SESSION['cart'][$index]['p_id'];?>';
              if(document.getElementById(id).value <= 1){
                  document.getElementById('erorr<?php echo $_SESSION['cart'][$index]['p_id'];?>').style.display ='none';
              }            
function add_qty<?php echo $_SESSION['cart'][$index]['p_id']; ?>(){
 $.post("add/add_cart/addtoqty",{product_id:$("#id<?php echo $_SESSION['cart'][$index]['p_id']; ?>").val(),user:$("#user<?php echo $_GLOBALS['U']; ?>").val(),qty:$("#qty<?php echo $_SESSION['cart'][$index]['p_id']; ?>").val()},function(data){
                  var id='qty<?php echo $_SESSION['cart'][$index]['p_id'] ;?>';
     var fi =document.getElementById(id).value;
             fi++
            document.getElementById(id).value = fi;
     if(document.getElementById(id).value > 1){document.getElementById('erorr<?php echo $_SESSION['cart'][$index]['p_id'];?>').style.display ='inline-block';}
                 
         var id2='price<?php echo $_SESSION['cart'][$index]['p_id'] ; ?>';
        var m=document.getElementById(id2).value;
    document.getElementById('priceq<?php echo $_SESSION['cart'][$index]['p_id'];?>').innerHTML=fi*m;
           });
        var total=0;
$('.qtypricforeone').each(function(){
total +=parseInt($(this).text());
    console.log(total);
});
$('.tootale').text(total);
$('.tootale1').val(total);
      }
    function delete_qty<?php echo $_SESSION['cart'][$index]['p_id']; ?>(){
           
          $.post("add/add_cart/deletefromqty",{product_id:$("#id<?php echo $_SESSION['cart'][$index]['p_id']; ?>").val(),user:$("#user<?php echo $_GLOBALS['U']; ?>").val(),qty:$("#qty<?php echo $_SESSION['cart'][$index]['p_id']; ?>").val()},function(data){
                  var id='qty<?php echo $_SESSION['cart'][$index]['p_id'];?>';
              if(fi==1){document.getElementById('erorr<?php echo $_SESSION['cart'][$index]['p_id'];?>').style.display ='none';}
     var fi =document.getElementById(id).value;
             fi--
            document.getElementById(id).value = fi;
               if(document.getElementById(id).value <= 1){
                  document.getElementById('erorr<?php echo $_SESSION['cart'][$index]['p_id'];?>').style.display ='none';
              }  
         var id2='price<?php echo $_SESSION['cart'][$index]['p_id'];?>';
        var m=document.getElementById(id2).value;
    document.getElementById('priceq<?php echo $_SESSION['cart'][$index]['p_id'];?>').innerHTML=fi*m;
           });
            var total=0;
$('.qtypricforeone').each(function(){

total +=parseInt($(this).text());
    console.log(total);
});
$('.tootale').text(total);
$('.tootale1').val(total);
      } 
function favoor<?php echo $_SESSION['cart'][$index]['p_id']; ?>(){
    //  alert('hhhhh');
            document.getElementById('dfavorit<?php echo $_SESSION['cart'][$index]['p_id'];?>').style.display='inline-block';
       document.getElementById('favorit<?php echo $_SESSION['cart'][$index]['p_id'];?>').style.display='none';
          $.post("add/add_cart/addtofavorite",{product_id:$("#id<?php echo $_SESSION['cart'][$index]['p_id']; ?>").val(),user:$("#user<?php echo $_GLOBALS['U']; ?>").val(),qty:$("#qty").val()},function(data){
              var id='count2';
     var fi =document.getElementById(id).innerHTML;
             fi++
            document.getElementById(id).innerHTML = fi; 
           });
      }
        function dfavoor<?php echo $_SESSION['cart'][$index]['p_id']; ?>(){
            document.getElementById('dfavorit<?php echo $_SESSION['cart'][$index]['p_id'];?>').style.display='none';
       document.getElementById('favorit<?php echo $_SESSION['cart'][$index]['p_id'];?>').style.display='inline-block';
          $.post("add/add_cart/deletefromfavorite",{product_id:$("#id<?php echo $_SESSION['cart'][$index]['p_id']; ?>").val(),user:$("#user<?php echo $_GLOBALS['U']; ?>").val(),qty:$("#qty").val()},function(data){
              var id='count2';
     var fi =document.getElementById(id).innerHTML;
             fi--
            document.getElementById(id).innerHTML = fi; 
           });
      }
        function dcart<?php echo $_SESSION['cart'][$index]['p_id'];?>(){
        document.getElementById('cartitem<?php echo $_SESSION['cart'][$index]['p_id']; ?>').style.display='none';
$.post("add/add_cart/deletefromcart",{product_id:$("#id<?php echo $_SESSION['cart'][$index]['p_id']; ?>").val(),user:$("#user<?php echo $_GLOBALS['U']; ?>").val(),qty:$("#qty").val(),add:$("#dcart").val()},function(data){
              var id='count1';
     var fi =document.getElementById(id).innerHTML;
             fi--
            document.getElementById(id).innerHTML = fi; 
            document.getElementById('counter4').innerHTML = fi; 
          
           });
    
    }
      
    
    </script>
    <?php 
    }
}else{
    echo "no thing here";
                         }
 ?>
                    </div>
                </div>

            </div>
            <div class="col-lg-4">


                <div class="card mb-4">
                    <div class="card-body">
                        <h4 class="mb-4">الإجمالي الكلي</h4>
                        <ul class="list-group list-group-flush">
                            <li
                                class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                                الإجمالي
                                <span class="tootale">    
                      </span> RY
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                تكاليف الشحن
                                <span>مجاني</span>
                            </li>
                            <li
                                class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
                                <div>
                                    <strong>الإجمالي الكلي</strong>
                                    <strong>
                                        <p class="mb-0">(بالإضافة إلى تكاليف الشحن)</p>
                                    </strong>
                                </div>
                                <span><strong class="tootale">
                      RY</strong></span>
                            </li>
                        </ul><?php
                        if($_GLOBALS['U'] == 0)
                         {echo'
                            <form class="" action="./login" method="POST">
                            <!--<input class="tootale1"   name="tootlecost" value=" " hidden="hidden">-->
                            <input   name="user_login" value="" hidden="hidden">
                             <button type="submit" class="btn check_btn"  id="submit">تأكيد الشراء  </button>

                            </form>';
                          }
                         else{ 
                            //echo $T->sumcollll ."<br>";
                             echo'
                             <form class="" action="./checkout" method="POST">
                            <input class="tootale1"   name="tootlecost" value="" hidden="hidden">
                            <input   name="user" value="'. $_GLOBALS['U'].'" hidden="hidden">
                            <button type="submit" class="btn check_btn"  id="submit">تأكيد الشراء </button>
                            </form>'
                            ; 
                             }?>
                        <!-- <a href="./checkout?cost=".<?php echo $T->sumcollll ?> ><button type="button" class="btn check_btn">تأكيد الشراء</button>
                        <?php/* if($_GLOBALS['U'] != 0){echo '
                        <form class="" action="./checkout" method="POST">
                        <input   name="cost" value="'. $T->sumcollll.' " hidden="hidden">
                        <button type="submit" class="btn check_btn"  id="submit">تأكيد الشراء  </button>
                        </form>';}*/?>-->

                        
                    </div>

                    <div class="card-body">
                        <h6 class="text-center mb-4">:طرق الدفع المسموح بها </h6>
                        <div class="align-items-center">
                            <img class="mr-2" width="45px" src="app/assets/img/mastercard.svg" alt="Mastercard">
                            <img class="mr-2" width="45px" src="app/assets/img/visa.svg" alt="Visa">
                            <img class="mr-2" width="45px" src="app/assets/img/amex.svg" alt="American Express">
                            <img class="mr-2" width="45px" src="app/assets/img/visa.svg" alt="Visa">
                            <img class="mr-2" width="45px" src="app/assets/img/amex.svg" alt="American Express">
                        </div>
                    </div>
                </div>
            </div>







        </div>






</div>
  <script>
       var total=0;
$('.qtypricforeone').each(function(){
total +=parseInt($(this).text());
    console.log(total);
});
$('.tootale').text(total);
$('.tootale1').val(total);
      </script>
  
      
      

</section>

</div>
</main>
<!--Main layout-->





 <?php include'footer.php';?>