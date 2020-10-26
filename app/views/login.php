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
            <div class="card" style="border-radius: 24px; padding:10px" >
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
                     <button type="submit" name="Login" class="btn  btn-primary"  id="submit">الدخول </button>
<br><br>
                                                             <a  href="#" style="display:none;"><p class="text-muted text-center">نسيت كلمة المرور ؟ </p></a> <br>

                     <p class="text-muted text-center"> او لتسجيل الدخول بحسابات اخرى </p>
                     
                    
                        <ul class="social-network social-circle navbar-nav" style="text-align:center;padding-left:27%">
                        <br>
                            <li><a href="#" class="icoFacebook" title="Facebook"><i class="ion-social-facebook-outline"></i></a></li>
                            <li><a href="#" class="icoTwitter" title="Twitter"><i class="ion-social-twitter-outline"></i></a></li>
                            <li><a href="#" class="icoGoogle" title="Google +"><i class="ion-social-google-outline"></i></a></li>
                        </ul><br>
                    <a href="./singup"> <p class="text-muted text-center">او لإنشاء حساب والتسجيل الان  </p></a>

                    
                </form>
                
            </div>
        </div>
        <div class="col-md-4 "></div>

    </div>
    
</div>


<br><br><br><br><br><br>
    </main>

<br><br><br><br>
<?php include'footer.php'; ?>