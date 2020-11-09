<?php
ob_start();
@session_start();
$_SESSION['page']=$_SERVER['REQUEST_URI'];
//echo '<br><br><br>'.$_SESSION['page'];
if(isset($_SESSION['uid'])){
    $_SESSION['cart']=array();
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
       
       
  <nav class="navbar navbar-expand-md fixed-top">
  <!-- Brand -->
  <a class="navbar-brand" href="#"><img src="app/assets/img/login_store_logos-2.png" width="144px"></a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="ion-navicon-round"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="./home" id="home">الرئيسية</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./aboutus">عن المتجر </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">أهم الاصناف</a>
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
      <li class="nav-item icons">
      <a class="ico" href="./login?page=<?php echo $_SESSION['page']; ?>"><span class="ion-ios-person-outline"></span></a>
        <ul class="submenu"> 
           <li class="nav-item ">
               <a class="ico" href="./login?page=<?php echo $_SESSION['page']; ?>"><span class="ion-ios-person-outline"></span></a>
            </li>
            <li class="nav-item ">
               <a class="ico" href="./logout" ><span class="ion-android-exit"></span></a>
            </li>
               </ul>
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
  
          <a class="ico" href=""><span class="ion-ios-search"></span></a>


      </li>
    </ul>
  </div>
      
</nav> 
</header>