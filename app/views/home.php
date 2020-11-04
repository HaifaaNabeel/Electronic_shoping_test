<?php include'header.php'; //session_destroy();
?>
      <slider style="top: -56px;">
  <div class="layer1"></div>   
<div id="demo" class="carousel slide" data-ride="carousel">
 <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
    <li data-target="#demo" data-slide-to="3"></li>
  </ul>
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="app/assets/img/accessories_galaxy-note20_s.jpg" alt="Los Angeles" >
        <div class="carousel-caption animated fadeInLeft " style="animation-delay:2s;">
    <h3>Los Angeles</h3>
    <p>We had such a great time in LA!</p>
  </div>
    </div>
    
    <!-- /.Third slide -->
    <div class="carousel-item">
      <img src="app/assets/img/banner_galaxy-a8.png" alt="Chicago" >
           <div class="carousel-caption animated fadeInLeft " style="animation-delay:2s;">
    <h3>Los Angeles</h3>
    <p>We had such a great time in LA!</p>
  </div>
    </div>
    <div class="carousel-item">
      <img src="app/assets/img/banner_galaxy-note8.png" alt="New York">
        <div class="carousel-caption animated zoomIn " style="animation-delay:2s;">
    <h3>Los Angeles</h3>
    <p>We had such a great time in LA!</p>
  </div>
    </div>
</div>
  
</div>
    </slider>   
 </br></br> 
<section>
<!-- try for show category and its products -->



<div class="container">
<?php
            $rows=$data['categories'];
            foreach($rows as $row){
            echo'

            
    <div class="row">
            <div class="col-sm-12">

                <h3 class="text-center mb-3 mt-3">'.$row->category_name.'</h3>
           </div>'?>
        <div class="col-sm-12">
          <div class="img-gallery  owl-carousel owl-theme" >
          <?php
            $rows1=$data['products'];
            //for($row1 = 0; $row1 < 8; $row1++){
                $x=1;
            foreach($rows1 as $row1){
                if($x < 9)
                {
                    if($row1->category_id == $row->category_id )
                 {
            echo'
            <div class=" text-center mr-1 ml-1  mb-2" >
              <div class="card">

                 <div style="height:auto ;" class="table-block ">
                    <img alt=""  src="'.$row1->product_main_image.'" style="height: 272px;" />
                 </div>
                <div class="card-body">
                    <h6>'.$row1->product_name.'</h6>
                    <h6>'.$row1->product_price.'</h6>';?>
                          <script>
        
function filter<?php echo $row1->Product_id; ?>(){
    //  alert('hhhhh');
            document.getElementById('dfilter<?php echo $row1->Product_id;?>').style.display='inline-block';
       document.getElementById('filter<?php echo $row1->Product_id;?>').style.display='none';
          $.post("add/add_cart/addtofilter",{product_id:$("#id<?php echo $row1->Product_id; ?>").val(),user:$("#user<?php echo $_GLOBALS['U']; ?>").val(),qty:$("#qty").val()},function(data){
              var id='count3';
     var fi =document.getElementById(id).innerHTML;
             fi++
            document.getElementById(id).innerHTML = fi; 
           });
      }
        function dfilter<?php echo $row1->Product_id; ?>(){
    //  alert('hhhhh');
            document.getElementById('dfilter<?php echo $row1->Product_id;?>').style.display='none';
       document.getElementById('filter<?php echo $row1->Product_id;?>').style.display='inline-block';
          $.post("add/add_cart/deletefromfilter",{product_id:$("#id<?php echo $row1->Product_id; ?>").val(),user:$("#user<?php echo $_GLOBALS['U']; ?>").val(),qty:$("#qty").val()},function(data){
              var id='count3';
     var fi =document.getElementById(id).innerHTML;
             fi--
            document.getElementById(id).innerHTML = fi; 
           });
      }
function favoor<?php echo $row1->Product_id; ?>(){
    //  alert('hhhhh');
            document.getElementById('dfavorite<?php echo $row1->Product_id;?>').style.display='inline-block';
       document.getElementById('favorit<?php echo $row1->Product_id;?>').style.display='none';
          $.post("add/add_cart/addtofavorite",{product_id:$("#id<?php echo $row1->Product_id; ?>").val(),user:$("#user<?php echo $_GLOBALS['U']; ?>").val(),qty:$("#qty").val()},function(data){
              var id='count2';
     var fi =document.getElementById(id).innerHTML;
             fi++
            document.getElementById(id).innerHTML = fi; 
           });
      }
        function dfavoor<?php echo $row1->Product_id; ?>(){
    //  alert('hhhhh');
            document.getElementById('dfavorite<?php echo $row1->Product_id;?>').style.display='none';
       document.getElementById('favorit<?php echo $row1->Product_id;?>').style.display='inline-block';
          $.post("add/add_cart/deletefromfavorite",{product_id:$("#id<?php echo $row1->Product_id; ?>").val(),user:$("#user<?php echo $_GLOBALS['U']; ?>").val(),qty:$("#qty").val()},function(data){
              var id='count2';
     var fi =document.getElementById(id).innerHTML;
             fi--
            document.getElementById(id).innerHTML = fi; 
           });
      }
     function cart<?php echo $row1->Product_id;?>(){
        document.getElementById('cart<?php echo $row1->Product_id;?>').style.display='none';
        document.getElementById('dcart<?php echo $row1->Product_id;?>').style.display='inline-block';
$.post("add/add_cart/addtocart",{product_id:$("#id<?php echo $row1->Product_id; ?>").val(),user:$("#user<?php echo $_GLOBALS['U']; ?>").val(),qty:$("#qty").val(),add:$("#cart").val()},function(data){
              var id='count1';
     var fi =document.getElementById(id).innerHTML;
             fi++
            document.getElementById(id).innerHTML = fi; 
           });
    }
        function dcart<?php echo $row1->Product_id;?>(){
            document.getElementById('cart<?php echo $row1->Product_id;?>').style.display='inline-block';
        document.getElementById('dcart<?php echo $row1->Product_id;?>').style.display='none';
$.post("add/add_cart/deletefromcart",{product_id:$("#id<?php echo $row1->Product_id; ?>").val(),user:$("#user<?php echo $_GLOBALS['U']; ?>").val(),qty:$("#qty").val(),add:$("#dcart").val()},function(data){
              var id='count1';
     var fi =document.getElementById(id).innerHTML;
             fi--
            document.getElementById(id).innerHTML = fi; 
           });
    
    }
      
        
    </script>
               <?php echo'
                    
                    <h6>
<input id="id';?><?php echo $row1->Product_id; ?><?php echo'"  name="product_id" value="';?><?php echo $row1->Product_id; ?><?php echo '" hidden="hidden">
<input id="qty"  name="qty" value="1" hidden="hidden">
<input id="pname';?><?php echo $row1->Product_id; ?><?php echo'"  name="product_name" value="'.$row1->product_name.'" hidden="hidden">
<input id="pimg';?><?php echo $row1->Product_id; ?><?php echo'"  name="pimg" value="'.$row1->product_main_image.'" hidden="hidden">
<input id="user';?><?php echo $_GLOBALS['U']; ?><?php echo'"  name="user" value="';?><?php echo $_GLOBALS['U']; ?><?php echo '" hidden="hidden">
<input id="price';?><?php echo $row1->Product_id; ?><?php echo'"  name="price" value="';?><?php echo $row1->product_price ?><?php echo '" hidden="hidden">
<button class="btn product_btn m-1" id="cart';?><?php echo $row1->Product_id; ?><?php echo'" onclick="cart';?><?php echo $row1->Product_id;?><?php echo'()"><span class="ion-ios-cart-outline"></span></button>
                        <button class="dcart btn product_btn m-1 "  id="dcart';?><?php echo $row1->Product_id; ?><?php echo'" onclick="dcart';?><?php echo $row1->Product_id;?><?php echo'()"><span class="ion-ios-cart-outline"></span></button>
                        <button class=" btn product_btn m-1" id="favorit';?><?php echo $row1->Product_id; ?><?php echo'" onclick="favoor';?><?php echo $row1->Product_id; ?><?php echo'()" name="favorite"><span class="ion-android-favorite-outline"></span></button>
                         <button class=" dcart btn product_btn m-1" id="dfavorite';?><?php echo $row1->Product_id; ?><?php echo'" onclick="dfavoor';?><?php echo $row1->Product_id; ?><?php echo'()" name="dfavorite"><span class="ion-android-favorite-outline"></span></button>
                     
                        <button class=" btn product_btn m-1" id="filter';?><?php echo $row1->Product_id; ?><?php echo'" onclick="filter';?><?php echo $row1->Product_id; ?><?php echo'()" name="filter"><span class="ion-ios-color-filter-outline"></span></button>
                         <button class=" dcart btn product_btn m-1" id="dfilter';?><?php echo $row1->Product_id; ?><?php echo'" onclick="dfilter';?><?php echo $row1->Product_id; ?><?php echo'()" name="dfilter"><span class="ion-ios-color-filter-outline"></span></button>
                        <a class="btn product_btn m-1" href="product_details?id='.$row1->Product_id.'"><span class="ion-ios-more-outline"></span></a>
                    </h6>                    
                </div>
              </div> 
            </div>
                   ';?>
                
    
                
                <?php    }
                   else
                   continue;

                }
                else
                {
                    break;
                }
                $x++; }?> 



            </div>
         </div>
    </div>

      <?php ;}?>
</div>






<!--////////////////////////////////////////////////////-->
<!---
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h3 class="text-center mb-3 mt-3">ساعات</h3>
            </div>
             <div class="col-sm-12">
              <div class="img-gallery  owl-carousel owl-theme">
              <div class=" text-center mr-1 ml-1  mb-2">
                  <div class="card">
                 <div style="height:auto ;" class="table-block ">
                    <img alt=""  src="app/assets/img/banner_gear-360.png" style="height: 272px;" />
                 </div>
                <div class="card-body">
                    <h6>ساعه رياضيه ذكية</h6>
                    <h6>8000RY</h6>
                    <h6>
                        <form action="" method="post">
                        <button class="btn product_btn m-1" type="submit" name="card"><span class="ion-ios-cart-outline"></span></button>
                        <button class="btn product_btn m-1" type="submit" name="favorite"><span class="ion-android-favorite-outline"></span></button>
                        <button class="btn product_btn m-1" type="submit" name="filter"><span class="ion-ios-color-filter-outline"></span></button>
                        <a class="btn product_btn m-1" href="product_details.php"><span class="ion-ios-more-outline"></span></a>
                        </form>
                    </h6>                    
                </div>
              </div> 
            </div>
              <div class=" text-center mr-1 ml-1  mb-2">
                  <div class="card">
                 <div style="height:auto ;" class="table-block ">
                    <img alt=""  src="app/assets/img/banner_gear-s3.png" style="height: 272px;" />
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
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h3 class="text-center mb-3 mt-3">موبايلات</h3>
            </div>
             <div class="col-sm-12">
              <div class="img-gallery  owl-carousel owl-theme">
              <div class=" text-center mr-1 ml-1  mb-2">
                  <div class="card">
                 <div style="height:auto ;" class="table-block ">
                    <img alt=""  src="app/assets/img/accessories_galaxy-note20_s.jpg" style="height: 272px;" />
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
              <div class=" text-center mr-1 ml-1  mb-2">
                  <div class="card">
                 <div style="height:auto ;" class="table-block ">
                    <img alt=""  src="app/assets/img/banner_galaxy-a8.png" style="height: 272px;" />
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
              <div class=" text-center mr-1 ml-1  mb-2">
                  <div class="card">
                 <div style="height:auto ;" class="table-block ">
                    <img alt=""  src="app/assets/img/banner_galaxy-s9.png" style="height: 272px;" />
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
 </br></br>
<section style="">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h3 class="text-center mb-3 mt-3">  عروض جديدة</h3>
                </br>
            </div>
             <div class="col-sm-12 col-md-3">
              <div class=" text-center mr-1 ml-1  mb-2">
                  <div class="card">
                 <div style="height:auto ;" class="table-block ">
                     <img src="app/assets/img/gift-box.png" class="gift">
                    <img alt=""  src="app/assets/img/banner_gear-sport.png" style="height: 272px;" />
                 </div>
                <div class="card-body">
                    <?php $name="ساعه رياضيه ذكية"; $wordjoin="مع"; $giftname="سماعات جالكسي";?>
                    <h6><?php echo $name.' '.$wordjoin.' '.$giftname?></h6>
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
                     <img src="app/assets/img/gift-box.png" class="gift">
                    <img alt=""  src="app/assets/img/banner_gear-sport.png" style="height: 272px;" />
                 </div>
                <div class="card-body">
                    <?php $name="ساعه رياضيه ذكية"; $wordjoin="مع"; $giftname="سماعات جالكسي";?>
                    <h6><?php echo $name.' '.$wordjoin.' '.$giftname?></h6>
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
                     <img src="app/assets/img/gift-box.png" class="gift">
                    <img alt=""  src="app/assets/img/banner_gear-sport.png" style="height: 272px;" />
                 </div>
                <div class="card-body">
                    <?php $name="ساعه رياضيه ذكية"; $wordjoin="مع"; $giftname="سماعات جالكسي";?>
                    <h6><?php echo $name.' '.$wordjoin.' '.$giftname?></h6>
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
                     <img src="app/assets/img/gift-box.png" class="gift">
                    <img alt=""  src="app/assets/img/banner_gear-sport.png" style="height: 272px;" />
                 </div>
                <div class="card-body">
                    <?php $name="ساعه رياضيه ذكية"; $wordjoin="مع"; $giftname="سماعات جالكسي";?>
                    <h6><?php echo $name.' '.$wordjoin.' '.$giftname?></h6>
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
</section>
</br></br>
<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h3 class="text-center mb-3 mt-3">أحدث التخفيضات</h3>
                </br>
            </div>
             <div class="col-sm-12 col-md-3">
              <div class=" text-center mr-1 ml-1  mb-2">
                  <div class="card">
                 <div style="height:auto ;" class="table-block ">
                     <img src="app/assets/img/ribbon.png" class="gift2">
                    <img alt=""  src="app/assets/img/banner_gear-sport.png" style="height: 272px;" />
                 </div>
                <div class="card-body">
                    <h6>ساعة رياضية ذكية</h6>
                    <h6>8000RY<span class="off">------</span></h6>
                    <h6>4000RY</h6>
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
                     <img src="app/assets/img/ribbon.png" class="gift2">
                    <img alt=""  src="app/assets/img/banner_gear-sport.png" style="height: 272px;" />
                 </div>
                <div class="card-body">
                    <h6>ساعة رياضية ذكية</h6>
                    <h6>8000RY<span class="off">------</span></h6>
                    <h6>4000RY</h6>
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
                     <img src="app/assets/img/ribbon.png" class="gift2">
                    <img alt=""  src="app/assets/img/banner_gear-sport.png" style="height: 272px;" />
                 </div>
                <div class="card-body">
                    <h6>ساعة رياضية ذكية</h6>
                    <h6>8000RY<span class="off">------</span></h6>
                    <h6>4000RY</h6>
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
</section>-->
</br></br>
<section class="points">
<h1 class="">   علامات تجاريه</h1>
<svg id="mesvg" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1400 197.72"><path class="cls-1" d="M0,262.71S322.94-46.71,686.47,108.59,1182.94,245.06,1400,118V262.71Z" transform="translate(0 -64.98)"/></svg>
</section>
<section class="points2">

    <div class="container">
        <div class="row">
              <div class="col-sm-12">
            <h1 class="text-center">   علامات تجاريه</h1>
                  </br></br>
</div>
            <div class="col-sm-6 col-md-3 p-1">
                <div class="">
                <img class="img-fluid" src="app/assets/img/Download-Lenovo-Logo-PNG-Transparent-Image-420x186.png">
                </div>
            </div>
            
             <div class="col-sm-6 col-md-3 p-1">
                <div class="">
                <img class="img-fluid" src="app/assets/img/Huawei-Symbol.png">
                </div>
            </div>
             <div class="col-sm-6 col-md-3 p-1">
                <div class="">
                <img class="img-fluid" src="app/assets/img/Sony-Logo-1961%E2%80%931962.png">
                </div>
            </div>
             <div class="col-sm-6 col-md-3 p-1">
                <div class="">
                <img class="img-fluid" src="app/assets/img/samsung_logo_PNG16.png">
                </div>
            </div>
             </br></br>
        </div>
    </div>
</section>

<?php include'footer.php'; ?>