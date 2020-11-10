<?php include'header.php'; ?>
<link rel="stylesheet" href= "app/assets/css/loginstyle.css">


<body>
    <br><br><br><br><br><br>
<style>

.social-circle li a {
    display: inline-block;
    position: relative;
    margin: 4px auto 4px auto;
    border-radius: 55px;
    text-align:center;
    width: 95%;
    height: 50px;
    font-size:1.5em;
    background-color: #BD3518;
    color:white;
}


</style>
     <main>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4 "></div>
        <div class="col-md-4 ">
        <img src="app/assets/img/login_store_logos-2.png" width="100%">
            <div class="card" style="border-radius: 24px; padding:10px " >

   

                <form class="" action="" method="POST">
                    <h2 class="text-center" style="color: #000;"> تسجيل الدخول </h2>
                    </br>
                    <div class="form-group text-right">
                                <label class="text-right" for="uname">اسم المستخدم </label>

                        <input type="text" class="form-control text-right " id="uname" placeholder="اسم المستخدم" name="user_name" required>
                    </div>
                    <div class="form-group text-right">
                                                <label class="text-right" for="pass">كلمة المرور  </label>

                        <input type="password" class="form-control text-right" id="pass" placeholder="كلمة المرور " name="user_pass" required>

                    </div>
                     <button type="submit" name="Login" class="btn  check_btn"  id="submit">الدخول </button>
<br><br>
                    <a  href="#" style="display:none;"><p class="text-muted text-center">نسيت كلمة المرور ؟ </p></a> <br>

                     <p class="text-muted text-center"> او لتسجيل الدخول بحسابات اخرى </p>
                     
                        <ul class="social-network social-circle navbar-nav" style="text-align:center;padding-left:27%">
       <?php  
$page=$_GET['page'];
?>                  
                            <br><!--<li><a href="#" class="icoFacebook" title="Facebook" style='background-color: #3B5998;'><i class="ion-social-facebook-outline"style='color:white;'>للمتابعة على حساب فيس بوك</i></a></li>
                            <li><a href="#" class="icoTwitter" title="Twitter" style='background-color: #33ccff;'><i class="ion-social-twitter-outline" style='color:white;'>للمتابعة على حساب تويتر </i></a></li>
                            --><li><a href="login_google?page=<?php  echo $page; ?>" class="icoGoogle" title="Google +" style='background-color: #BD3518'><i class="ion-social-google-outline" style='color:white;'> للمتابعة على حساب جوجل </i></a></li>
                        </ul><br><br>
                    <a href="./singup?page=<?php  echo $page; ?>"> <p class="text-muted text-center">او لإنشاء حساب والتسجيل الان  </p></a>

                    
                </form> <!--//';}?>-->
                
            </div>
        </div>
        <div class="col-md-4 "></div>

    </div>
    
</div>


<br><br><br><br><br><br>
    </main>

<br><br><br><br>
<?php include'footer.php'; ?>