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
                    <p class="text-center"> ادخل اسمك وكلمة المرور للتمكن من الوصول الى حسابك</p>
                    <div class="form-group text-right">
                        <label class="text-right" for="uname">اسم المستخدم </label>
                        <input type="text" class="form-control text-right " id="uname" placeholder="اسم المستخدم" name="uname" required>
                    </div>
                    <div class="form-group text-right">
                        <label class="text-right" for="uname">كلمة المرور  </label>
                        <input type="password" class="form-control text-right" id="uname" placeholder="كلمة المرور " name="uname" required>
                    </div>
                     <a  href="#"><p class="text-muted text-center">نسيت كلمة المرور ؟ </p></a> <br>


                     <button type="submit" class="btn  btn-primary"  id="submit">الدخول </button>
<br><br>
                     <p class="text-muted text-center"> او لتسجيل الدخول بحسابات اخرى </p>
                     
                    
                        <ul class="social-network social-circle navbar-nav" style="text-align:center;padding-left:27%">
                            
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