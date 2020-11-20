<?php include'header.php'; ?>
    <?php  
$page=$_GET['page'];
?>   
     <main class="contact">
<div class="container">
    <div class="row">
                <div class="col-md-6 col-sm-12 ">
                    <img class="img-fluid log-img" src="app/assets/img/user-login-illustration-with-key_108061-291.jpg">
</div>
        <div class="col-md-6 col-sm-12 ">
            <div class="pl-4 pr-4"  >
             <h2 class=" cont-h1"> تسجيل الدخول </h2>
                <form class="" action="" method="POST">
                    </br>
                    <div class="form-group text-right">
                         <label class="log-lab" for="uname">اسم المستخدم </label>

                        <input type="text" class="form-control text-right " id="uname"  name="user_name" required>
                    </div>
                    <div class="form-group text-right">
                        <label class="log-lab" for="pass">كلمة المرور  </label>

                        <input type="password" class="form-control text-right" id="pass"  name="user_pass" required>

                    </div>
                    <div class="form-group text-right">

                     <button type="submit" name="Login" class="btn  login"  id="submit">الدخول </button>
                <a  href="#" style="display:none;"><p class="text-center">نسيت كلمة المرور ؟ </p></a> <br>
<a href="login_google" class="icoGoogle btn log-gog" title="Google +" ><i class="ion-social-google-outline"> للمتابعة على حساب جوجل </i></a>
             <a href="./singup?page=<?php  echo $page; ?>" class="log-link"> <span class="text-left"> أنشاء حساب والتسجيل الان  </span></a>

                </div>
                </form> 
                
            </div>
        </div>
    </div>
    
</div>


    </main>
<?php include'footer.php'; ?>