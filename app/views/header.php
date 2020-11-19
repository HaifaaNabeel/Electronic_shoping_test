<?php
ob_start();
@session_start();
$_SESSION['page']=$_SERVER['REQUEST_URI'];
//echo $_SESSION['page'];
if(isset($_SESSION['uid'])){
    $_SESSION['cart']=array();
    $_SESSION['favore']=array();
    $_SESSION['filter']=array();
echo $_SESSION['uid'];
}else{

}
if(isset($_SESSION['cart'])){
}else{
    $_SESSION['cart']=array();    
}
if(isset($_SESSION['favore'])){
$_SESSION['favore'];
}else{
$_SESSION['favore']=array();
}
if(isset($_SESSION['filter'])){

}else{
    $_SESSION['filter']=array();
}
?>
 <?php 
if(isset($_SESSION['uid'])){
$_GLOBALS['U']=$_SESSION['uid'];
}else{
$_GLOBALS['U']=0;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>     
       <meta charset="utf-8">
<meta name='author' content=''>
<meta name='description' content=''>
<meta name='keywords' content=''>
    <link rel="icon" href="app/assets/img/login_store_logos-1.png">  

      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Ecomm</title>
      <!--fonts files-->
      <link href="app/assets/font/f/Tajawal-Medium.ttf" rel="stylesheet"> 
      <link rel="stylesheet" href="app/assets/font/ionicons/css/ionicons.min.css">
       <!--css files-->
      <link rel="stylesheet" href="app/assets/css/animated.css">
      <link rel="stylesheet" href="app/assets/css/owl.carousel.min.css">
      <link rel="stylesheet" href="app/assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="app/assets/css/style.css">
      <link rel="stylesheet" href="app/assets/css/response.css">
     <!--javascript files-->
       <script src="app/assets/js/jquery3.4.1.js"></script>
       <script src="app/assets/js/popper.min.js"></script>
       <script src="app/assets/js/owl.carousel.min.js"></script>
       <script src="app/assets/js/bootstrap.min.js"></script>
       <script src="app/assets/js/js.js"></script> 
       	<style>
	
  /* Make the image fully responsive */
  .carousel-inner img {
    width: 100vw;
    height: 100vh;
  }
         .carousel-inner .view {
    width: 100%;
    height: 100vh;
  }
  </style>
</head>
    
   <body>
  <!--start header-->
       
       
       <section class="newmenu fixed-top">
           <div class="container-fluid">
               <div class="row ">
                       <div class="col-md-4 col-sm-12">
                       <div class=" icons">
                             <i class="ico" id="userr" href="#">
              <span class="counter" id="mmo" style="position: absolute;
top:15%;
left: 46%;">
   <?php
                   $user=$data['user'];
                  foreach($user as $u){
                  echo $u->user_name;
                  }
                 ?></span>
              <span class="ion-ios-person-outline"></span>
              <ul class="submin">
                  
                  <li id="login"><a  href="./login?page=<?php echo $_SESSION['page']; ?>"><span class="ion-ios-person-outline"></span></a></li>
                  <li id="logout"><a   href="./logout" ><span class="ion-android-exit"></span></a></li>
                         <?php 
            if($_GLOBALS['U']===0){
            echo' <script>
            document.getElementById("logout").style.display="none";
            document.getElementById("mmo").style.display="none";
            </script>';
            }if($_GLOBALS['U'] > 0){
            echo' <script>
            document.getElementById("logout").style.display="block";
            document.getElementById("login").style.display="none";
            </script>';
            }
            
            ?>
            <script>
           // document.getElementById("logout").style.display="none";
            </script>
              </ul>
                  </i>
           
          <a class="ico" href="./cart"><span class="counter" id="count1">
               <?php
                   $rows=$data['cartitem'];
                  foreach($rows as $row){
                  echo $row;
                  }
                 ?>
              </span><span class="ion-ios-cart-outline"></span></a>
     
            <a class="ico" href="./favorite"><span class="counter" id="count2">
                 <?php
                   $rows1=$data['favoriteitem'];
                  foreach($rows1 as $row1){
                  echo $row1;
                  }
                 ?>
                </span><span class="ion-android-favorite-outline"></span></a>
   
          <a class="ico" href="./compare"><span class="counter" id="count3">
              <?php
                   $rows3=$data['filteritem'];
                  foreach($rows3 as $row){
                  echo $row;
                  }
                 ?>
              </span><span class="ion-ios-color-filter-outline"></span></a>
  
          <a class="ico" href=""  data-toggle="modal" id="moon" data-target="#myModal11"><span  class="ion-ios-search"></span></a>
        </div>
                   </div>
                       <div class="col-md-4 col-sm-12 small">
 <form action="search"  class="text-right" role="form" style="direction:rtl;"   method="get"  >
                       <div class="input-group mb-3">
  <input type="text" name="SEARCHW" value="<?php if(isset($_GET['SEARCHW'])){echo $_GET['SEARCHW'];}?>" class="form-control see" placeholder="البحث عن منتج">
  <div class="input-group-append">
    <button class="btn btn-light v" type="submit" name="SEARCH">بحث</button>
  </div>
</div>
                           </form>
                   </div>
                       <div class="col-md-4 col-sm-12 small">
                       <div class=" iconss">
     
          <a class="ico" href="#"><span class="ion-social-whatsapp-outline"></span></a>
          <a class="ico" href="#"><span class="ion-social-instagram-outline"></span></a>
          <a class="ico" href="#"><span class="ion-social-youtube-outline"></span></a>
          <a class="ico" href="#"><span class="ion-social-linkedin-outline"></span></a>
  
      </div>
                   </div>
               </div>
           </div>
       </section>
  <nav class="navbar navbar-expand-md fixed-top">
  <!-- Brand -->
  <a class="navbar-brand" href="#"><img src="app/assets/img/login_store_logos-2.png" width=""></a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" style="color: #e55d03;" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="ion-navicon-round"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="./home" id="home">الرئيسية</a>
      </li>
     
      <li class="nav-item">
        <a class="nav-link" href="#"> الاقسام</a>
          <ul class="submenu">
            <?php
          $rows=$data['categories'];
                foreach($rows as $row){
                    echo '
           <li class="nav-item">
        <a class="nav-link" href="products?id='.$row->category_id.'">'.$row->category_name.'</a>
                ';}?>
                
                
               <!--<ul class="">
               <li class="nav-item">
                  <a class="nav-link" href="#">العروض</a>
                  </li>
               <li class="nav-item">
                 <a class="nav-link" href="#">العروض</a>
                  </li>
              <li class="nav-item">
                  <a class="nav-link" href="#">العروض</a>
               </li>
            </ul>
      </li>
              <li class="nav-item">
        <a class="nav-link" href="#">العروض</a>
                     <ul class="submenu">
           <li class="nav-item">
        <a class="nav-link" href="#">1العروض</a>
      </li>
              <li class="nav-item">
        <a class="nav-link" href="#">1العروض</a>
      </li>
              <li class="nav-item">
        <a class="nav-link" href="#">1العروض</a>
      </li>
          </ul>
      </li>
              <li class="nav-item">
        <a class="nav-link" href="./products">العروض</a>
      </li>-->
          </ul>
      </li> 
        <li class="nav-item">
        <a class="nav-link" href="#">العروض</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./contact">تواصل معنا</a>
      </li>
         <li class="nav-item">
        <a class="nav-link" href="./aboutus">عن المتجر </a>
      </li>
         <li class="nav-item" style="display:none;">
        <a class="nav-link" href="#">عربي</a>
                     <ul class="submenu">
           <li class="nav-item">
        <a class="nav-link" href="#">عربي</a>
      </li>
              <li class="nav-item">
        <a class="nav-link" href="#">english</a>
      </li>
            
          </ul>
      </li>
     
    </ul>
  </div>
      
</nav> 
</header>
    
      <!-- The signup Modal -->
<div class="modal" id="myModal11">
  <div class="modal-dialog">
    <div class="modal-content" style="color: #402558;">

      <!-- Modal Header -->
      <div class="modal-header" >
        <h4 class="modal-title color-white "> البحث عن منتج </h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
 <form action="search"  class="text-right" role="form"   method="get"  >
                      <div class="form-group col-sm-12" style="float:right;">                                                                                        <label>  </label>

                        <input type="text" name="SEARCHW" value="<?php if(isset($_GET['SEARCHW'])){echo $_GET['SEARCHW'];}?>" class="form-control  rounded-0 p-3"   placeholder="اسم المنتج">   
                      </div>
                          
      <div class="form-group  col-sm-12" style="float:right;"> 
                      <button type="submit" name="SEARCH" style="width: 49%;color:#402558; border: 1px solid #402558;float:right;" class="btn p-2 rounded-0" >بحث</button>
                  
                     </div>
                    </form></div>

     
    </div>
  </div>
</div>
              <!--end The signup Modal -->