<?php include'header.php'; ?>
 </br></br>

<section>
    <div class="container">
         </br></br>

        <div class="row">
            <div class="col-sm-12">
                <h3 class="text-center mb-3 mt-3">اسم الصنف</h3>
                </br></br>
            </div>
             <div class="col-sm-12 col-md-3">
              <div class=" text-center mr-1 ml-1  mb-2">
                  <div class="card">
                 <div style="height:auto ;" class="table-block ">
                    <img alt=""  src="app/assets/img/banner_gear-sport.png" style="height: 272px;" />
                 </div>
                <div class="card-body">
                    <h6>ساعه رياضيه ذكية</h6>
                    <h6>8000RY</h6>
                   <h6>
                            <input id="id1"  name="product_id" value="1" hidden="hidden">
                            <input id="qty"  name="qty" value="1" hidden="hidden">
                            <input id="user<?php echo $_GLOBALS['U']; ?>"  name="user" value="<?php echo $_GLOBALS['U']; ?>" hidden="hidden">
                        <button class="btn product_btn m-1" id="cart" onclick="cart()"><span class="ion-ios-cart-outline"></span></button>
                        <button class="btn product_btn m-1" id="dcart" onclick="dcart()"><span class="ion-ios-cart-outline"></span></button>
                        <button class="btn product_btn m-1" onclick="favorite()" name="favorite"><span class="ion-android-favorite-outline"></span></button>
                        <button class="btn product_btn m-1" onclick="filter()"  name="filter"><span class="ion-ios-color-filter-outline"></span></button>
                        <a class="btn product_btn m-1" href="product_details.php"><span class="ion-ios-more-outline"></span></a>
                    </h6>                     
                </div>
              </div> 
            </div>
            </div>

 <script>
    function cart(){
        document.getElementById('cart').style.display='none';
        document.getElementById('dcart').style.display='inline-block';
$.post("add/add_cart/addtocart",{product_id:$("#id1").val(),user:$("#user<?php echo $_GLOBALS['U']; ?>").val(),qty:$("#qty").val(),add:$("#cart").val()},function(data){
              var id='count1';
     var fi =document.getElementById(id).innerHTML;
             fi++
            document.getElementById(id).innerHTML = fi; 
           });
    
    }
      function dcart(){
        document.getElementById('cart').style.display='inline-block';
        document.getElementById('dcart').style.display='none';
$.post("add/add_cart/deletefromcart",{product_id:$("#id1").val(),user:$("#user<?php echo $_GLOBALS['U']; ?>").val(),qty:$("#qty").val(),add:$("#dcart").val()},function(data){
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
             <div class="col-sm-12 col-md-3">
              <div class=" text-center mr-1 ml-1  mb-2">
                  <div class="card">
                 <div style="height:auto ;" class="table-block ">
                    <img alt=""  src="app/assets/img/banner_gear-sport.png" style="height: 272px;" />
                 </div>
                <div class="card-body">
                    <h6>ساعه رياضيه ذكية</h6>
                    <h6>8000RY</h6>
                    <h6>
                       
                        <form action="add/add_cart/addtocart" method="post">
                            <input id="id1"  name="product_id" value="1" hidden="hidden">
                            <input id="qty"  name="qty" value="1" hidden="hidden">
                            <input id="user<?php echo $_GLOBALS['U']; ?>"  name="user" value="<?php echo $_GLOBALS['U']; ?>" hidden="hidden">
                        <button class="btn product_btn m-1" type="submit" name="card"><span class="ion-ios-cart-outline"></span></button>
                        <button class="btn product_btn m-1" type="submit" name="favorite"><span class="ion-android-favorite-outline"></span></button>
                        <button class="btn product_btn m-1" type="submit" name="filter"><span class="ion-ios-color-filter-outline"></span></button>
                        <button class="btn product_btn m-1" type="submit" name="more"><span class="ion-ios-more-outline"></span></button>
                        </form>
                    </h6>                    
                </div>
              </div> 
            </div>
            </div>
             <div class="col-sm-12 col-md-3">
              <div class=" text-center mr-1 ml-1  mb-2">
                  <div class="card">
                 <div style="height:auto ;" class="table-block ">
                    <img alt=""  src="app/assets/img/banner_gear-sport.png" style="height: 272px;" />
                 </div>
                <div class="card-body">
                    <h6>ساعه رياضيه ذكية</h6>
                    <h6>8000RY</h6>
                    <h6>
                      <form action="add/add_cart/deletefromcart" method="post">
                            <input id="id1"  name="product_id" value="1" hidden="hidden">
                            <input id="qty"  name="qty" value="1" hidden="hidden">
                            <input id="user<?php echo $_GLOBALS['U']; ?>"  name="user" value="<?php echo $_GLOBALS['U']; ?>" hidden="hidden">
                        <button class="btn product_btn m-1" type="submit" name="card"><span class="ion-ios-cart-outline"></span></button>
                        <button class="btn product_btn m-1" type="submit" name="favorite"><span class="ion-android-favorite-outline"></span></button>
                        <button class="btn product_btn m-1" type="submit" name="filter"><span class="ion-ios-color-filter-outline"></span></button>
                        <button class="btn product_btn m-1" type="submit" name="more"><span class="ion-ios-more-outline"></span></button>
                        </form>
                    </h6>                    
                </div>
              </div> 
            </div>
            </div>
             <div class="col-sm-12 col-md-3">
              <div class=" text-center mr-1 ml-1  mb-2">
                  <div class="card">
                 <div style="height:auto ;" class="table-block ">
                    <img alt=""  src="app/assets/img/banner_gear-sport.png" style="height: 272px;" />
                 </div>
                <div class="card-body">
                    <h6>ساعه رياضيه ذكية</h6>
                    <h6>8000RY</h6>
                    <h6>
                        <form action="" method="post">
                        <button class="btn product_btn m-1" type="submit" name="card"><span class="ion-ios-cart-outline"></span></button>
                        <button class="btn product_btn m-1" type="submit" name="favorite"><span class="ion-android-favorite-outline"></span></button>
                        <button class="btn product_btn m-1" type="submit" name="filter"><span class="ion-ios-color-filter-outline"></span></button>
                        <button class="btn product_btn m-1" type="submit" name="more"><span class="ion-ios-more-outline"></span></button>
                        </form>
                    </h6>                    
                </div>
              </div> 
            </div>
            </div>
             <div class="col-sm-12 col-md-3">
              <div class=" text-center mr-1 ml-1  mb-2">
                  <div class="card">
                 <div style="height:auto ;" class="table-block ">
                    <img alt=""  src="app/assets/img/banner_gear-sport.png" style="height: 272px;" />
                 </div>
                <div class="card-body">
                    <h6>ساعه رياضيه ذكية</h6>
                    <h6>8000RY</h6>
                    <h6>
                        <form action="" method="post">
                        <button class="btn product_btn m-1" type="submit" name="card"><span class="ion-ios-cart-outline"></span></button>
                        <button class="btn product_btn m-1" type="submit" name="favorite"><span class="ion-android-favorite-outline"></span></button>
                        <button class="btn product_btn m-1" type="submit" name="filter"><span class="ion-ios-color-filter-outline"></span></button>
                        <button class="btn product_btn m-1" type="submit" name="more"><span class="ion-ios-more-outline"></span></button>
                        </form>
                    </h6>                    
                </div>
              </div> 
            </div>
            </div>
             <div class="col-sm-12 col-md-3">
              <div class=" text-center mr-1 ml-1  mb-2">
                  <div class="card">
                 <div style="height:auto ;" class="table-block ">
                    <img alt=""  src="app/assets/img/banner_gear-sport.png" style="height: 272px;" />
                 </div>
                <div class="card-body">
                    <h6>ساعه رياضيه ذكية</h6>
                    <h6>8000RY</h6>
                    <h6>
                        <form action="" method="post">
                        <button class="btn product_btn m-1" type="submit" name="card"><span class="ion-ios-cart-outline"></span></button>
                        <button class="btn product_btn m-1" type="submit" name="favorite"><span class="ion-android-favorite-outline"></span></button>
                        <button class="btn product_btn m-1" type="submit" name="filter"><span class="ion-ios-color-filter-outline"></span></button>
                        <button class="btn product_btn m-1" type="submit" name="more"><span class="ion-ios-more-outline"></span></button>
                        </form>
                    </h6>                    
                </div>
              </div> 
            </div>
            </div>
             <div class="col-sm-12 col-md-3">
              <div class=" text-center mr-1 ml-1  mb-2">
                  <div class="card">
                 <div style="height:auto ;" class="table-block ">
                    <img alt=""  src="app/assets/img/banner_gear-sport.png" style="height: 272px;" />
                 </div>
                <div class="card-body">
                    <h6>ساعه رياضيه ذكية</h6>
                    <h6>8000RY</h6>
                    <h6>
                        <form action="" method="post">
                        <button class="btn product_btn m-1" type="submit" name="card"><span class="ion-ios-cart-outline"></span></button>
                        <button class="btn product_btn m-1" type="submit" name="favorite"><span class="ion-android-favorite-outline"></span></button>
                        <button class="btn product_btn m-1" type="submit" name="filter"><span class="ion-ios-color-filter-outline"></span></button>
                        <button class="btn product_btn m-1" type="submit" name="more"><span class="ion-ios-more-outline"></span></button>
                        </form>
                    </h6>                    
                </div>
              </div> 
            </div>
            </div>
             <div class="col-sm-12 col-md-3">
              <div class=" text-center mr-1 ml-1  mb-2">
                  <div class="card">
                 <div style="height:auto ;" class="table-block ">
                    <img alt=""  src="app/assets/img/banner_gear-sport.png" style="height: 272px;" />
                 </div>
                <div class="card-body">
                    <h6>ساعه رياضيه ذكية</h6>
                    <h6>8000RY</h6>
                    <h6>
                        <form action="" method="post">
                        <button class="btn product_btn m-1" type="submit" name="card"><span class="ion-ios-cart-outline"></span></button>
                        <button class="btn product_btn m-1" type="submit" name="favorite"><span class="ion-android-favorite-outline"></span></button>
                        <button class="btn product_btn m-1" type="submit" name="filter"><span class="ion-ios-color-filter-outline"></span></button>
                        <button class="btn product_btn m-1" type="submit" name="more"><span class="ion-ios-more-outline"></span></button>
                        </form>
                    </h6>                    
                </div>
              </div> 
            </div>
            </div>
             <div class="col-sm-12 col-md-3">
              <div class=" text-center mr-1 ml-1  mb-2">
                  <div class="card">
                 <div style="height:auto ;" class="table-block ">
                    <img alt=""  src="app/assets/img/banner_gear-sport.png" style="height: 272px;" />
                 </div>
                <div class="card-body">
                    <h6>ساعه رياضيه ذكية</h6>
                    <h6>8000RY</h6>
                    <h6>
                        <form action="" method="post">
                        <button class="btn product_btn m-1" type="submit" name="card"><span class="ion-ios-cart-outline"></span></button>
                        <button class="btn product_btn m-1" type="submit" name="favorite"><span class="ion-android-favorite-outline"></span></button>
                        <button class="btn product_btn m-1" type="submit" name="filter"><span class="ion-ios-color-filter-outline"></span></button>
                        <button class="btn product_btn m-1" type="submit" name="more"><span class="ion-ios-more-outline"></span></button>
                        </form>
                    </h6>                    
                </div>
              </div> 
            </div>
            </div>
             </div>
            </div>
    </div>
</section>
<?php include'footer.php'; ?>
