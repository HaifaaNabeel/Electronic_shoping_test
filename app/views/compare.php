<?php include'header.php';?>
<link rel="stylesheet" href= "app/assets/css/cartstyle.css">

 </br></br>
  <!--Main layout-->
 <main>

<div class="jumbotron mt-70">
    <div class="d-flex align-items-center h-100">
        <div class="container text-center py-5">
            <h1 class="mb-0">المقارنة  </h1>
        </div>
    </div>
</div>
<div class="container">

    <section class="mt-5 mb-4">

        <div class="row">

            <div class="col-lg-12">

               <div class="card mb-4">
                    <div class="card-body">
                        <h4 class="mb-4" style="color: #F27523;"> عناصر <span id="counter4">
                             <?php
                   $rows3=$data['filteritem'];
                  foreach($rows3 as $row){
                  echo $row;
                  }
                 ?>
                            </span> </h4>
                        
                                               <?php
                   $items=$data['fetchfilter'];
                  foreach($items as $item){
                 
                  
                 ?>
                        <div class="row mb-4" id="cartitem<?php echo $item->Product_id; ?>">
                            <div class="col-md-5 col-lg-3 col-xl-3">
                                <div class="mb-3 mb-md-0">
                                    <img src=<?php echo $item->product_main_image; ?>
                                        class="img-fluid w-100" alt="">
                                </div>
                            </div>
                            <div class="col-md-7 col-lg-9 col-xl-9">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <h4><?php echo $item->product_name; ?></h4>
                                    </div>
                                    <div>
                                    </div>
 <div class="handle-counter" style="display:none;">
                                            <button
                                                onclick="this.parentNode.querySelector(&#39;input[type=number]&#39;).stepDown()"
                                                class="counter-minus btn"><span
                                                    class="ion-android-remove"></span></button>
 <input id="id<?php echo $item->Product_id; ?>"  name="product_id" value="<?php echo $item->Product_id; ?>" hidden="hidden">
 <input id="id<?php echo $item->Product_id; ?>"  name="price" value="<?php echo $item->product_price; ?>" hidden="hidden">
<input id="user<?php echo $_GLOBALS['U']; ?>"  name="user" value="<?php echo $_GLOBALS['U']; ?>" hidden="hidden">
                                            <input class="quantity text-center" min="1" name="qty"
                                                value="<?php  echo $item->product_main_image;?>" type="number">
                                            <button
                                                onclick="this.parentNode.querySelector(&#39;input[type=number]&#39;).stepUp()"
                                                class="counter-plus btn "><span
                                                    class="ion-android-add"></span></button>
                                        </div>

                                </div>
                                 <div class="d-flex justify-content-between">
                                    <div>
                                        <h6 class="text-center"><?php //echo $item->product_details; ?></h6>
                                    </div>

                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <p class="mb-0"><span><strong><?php echo $item->product_price; ?>RY</strong></span></p>
                                    <div>
                                        <a href="product_details?id=<?php echo $item->Product_id; ?>" class="a-text">تفاصيل اكثر</a>

                                    </div>
                                    <div>
<a href="#" class=" a-text" id="dfavorit<?php echo $item->Product_id; ?>" onclick="dfavoor<?php echo $item->Product_id; ?>()" >حذف من المقارنة<span class="ion-android-favorite"></span></a>
                                    </div>
                                    <div>
                                        <a href="#" class=" a-text" id="cart<?php echo $item->Product_id; ?>" onclick="cart<?php echo $item->Product_id;?>()">  اضافة الى السلة
             <span class="ion-ios-cart-outline"></span></a>
                                        <a href="#" class="dcart a-text" id="dcart<?php echo $item->Product_id; ?>" onclick="dcart<?php echo $item->Product_id;?>()">حذف من السلة
             <span class="ion-android-delete"></span></a>

                                        
                                    </div>


               <script>
        
        function dfavoor<?php echo $item->Product_id; ?>(){
        document.getElementById('cartitem<?php echo $item->Product_id; ?>').style.display='none';
          $.post("add/add_cart/deletefromfilter",{product_id:$("#id<?php echo $item->Product_id; ?>").val(),user:$("#user<?php echo $_GLOBALS['U']; ?>").val(),qty:$("#qty").val()},function(data){
              var id='count3';
     var fi =document.getElementById(id).innerHTML;
             fi--
            document.getElementById(id).innerHTML = fi; 
                          document.getElementById('counter4').innerHTML = fi; 

           });
      }
        function cart<?php echo $item->Product_id;?>(){
        document.getElementById('cart<?php echo $item->Product_id;?>').style.display='none';
        document.getElementById('dcart<?php echo $item->Product_id;?>').style.display='inline-block';
$.post("add/add_cart/addtocart",{product_id:$("#id<?php echo $item->Product_id; ?>").val(),user:$("#user<?php echo $_GLOBALS['U']; ?>").val(),qty:$("#qty").val(),add:$("#cart").val()},function(data){
              var id='count1';
     var fi =document.getElementById(id).innerHTML;
             fi++
            document.getElementById(id).innerHTML = fi; 
           });
    }
   
        function dcart<?php echo $item->Product_id;?>(){
        document.getElementById('cart<?php echo $item->Product_id;?>').style.display='inline-block';
        document.getElementById('dcart<?php echo $item->Product_id;?>').style.display='none';
$.post("add/add_cart/deletefromcart",{product_id:$("#id<?php echo $item->Product_id; ?>").val(),user:$("#user<?php echo $_GLOBALS['U']; ?>").val(),qty:$("#qty").val(),add:$("#dcart").val()},function(data){
              var id='count1';
     var fi =document.getElementById(id).innerHTML;
             fi--
            document.getElementById(id).innerHTML = fi; 
           });
    
    }
      
        
    </script>                               </div>

                            </div>
                        </div>
                        <hr class="mb-4">
                        
                        
                      <?php 
                  }?>
                    </div>
                </div>

            </div>
            <!--<div class="col-lg-4">


                <div class="card mb-4">
                    <div class="card-body">
                        <h4 class="mb-4">الإجمالي الكلي</h4>
                        <ul class="list-group list-group-flush">
                            <li
                                class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                                الإجمالي
                                <span>$53.98</span>
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
                                <span><strong>$53.98</strong></span>
                            </li>
                        </ul>

                        <button type="button" class="btn check_btn">تأكيد الشراء</button>

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
            </div>-->







        </div>






</div>


</section>

</div>
</main>
<!--Main layout-->





 <?php include'footer.php';?>