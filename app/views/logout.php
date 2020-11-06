<?php include'header.php'; ?>
<link rel="stylesheet" href= "app/assets/css/loginstyle.css">


<body>
    <br><br><br><br><br><br>
<style>
</style>
     <main>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4 "></div>
        <div class="col-md-4 ">
        <img src="app/assets/img/login_store_logos-2.png" width="100%">
            <div class="card" style="border-radius: 24px; padding:10px " >
                <h2 class="text-center" style="color: #000;"> تم تسجيل الخروج   </h2>

                   <?php  //if(@session_start()){
                   session_destroy();
                   //header('location:logout');
                   //} ?>

                  <a href="" class="icoGoogle" title="Google +" style="font-size:5em;color:#221446;text-align:center"><span class="ion-android-exit"></span>  <i class="ion-android-walk"></i></a>
                  <br><a class="btn  number_check "   href="./login?page=home">لتسجيل الدخول من جديد <span class="ion-ios-person-outline"></span></a>
                  <br><a class="btn  number_check "   href="./home">للعودة الى المتجر <span class="ion-ios-home-outline"></a>

                  <?php//redirect page to index.php
                      // header('location:home');?>
                    </br>
            </div>
        </div>
        <div class="col-md-4 "></div>

    </div>
    
</div>


<br><br><br><br><br><br>
    </main>

<br><br><br><br>
<?php include'footer.php'; ?>