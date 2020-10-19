<?php include'header.php'; ?>
    
<head>
    <link rel="stylesheet" href="app/assets/css/loginstyle.css">
</head>
    
<br><br><br><br><br>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-6 ">
                <div class="card">
                <form class="box">
                        <h1>انشاء حساب </h1>
                        <p class="text-muted"> اهلا بك في متجرنا لإنشاء حساب قم بإدخال بياناتك</p>
                         <input type="text" name="" placeholder="اسم المستخدم " required>
                         <input type="password" name="" placeholder="كلمة المرور " required>
                         <input type="email" name="" placeholder="بريدك الالكتروني " required>

                         
                         <input type="submit" name="" value="التسجيل الان " href="#">
                         <div class="col-md-12 col-sm-12 col-xs-12 ">
                         <p class="text-muted"> او لتسجيل الدخول بحسابات اخرى </p>
                         <ul class="social-network social-circle">
                                <li><a href="#" class="icoFacebook" title="Facebook"><i class="ion-social-facebook-outline"></i></a></li>
                                <li><a href="#" class="icoTwitter" title="Twitter"><i class="ion-social-twitter-outline"></i></a></li>
                                <li><a href="#" class="icoGoogle" title="Google +"><i class="ion-social-google-outline"></i></a></li>
                            </ul><br>
                        <a class="forgot text-muted" href="./login"> او للدخول الى حساب موجود س </a>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

<br><br><br><br>
<?php include'footer.php'; ?>