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
    width: 90%;
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
            <div class="card" style="border-radius: 24px; padding:10px" >
              <form action="" method="post">
                  <h2 class="text-center" style="color: #000;"> انشاء حساب </h2>
                  <p class="text-center"> اهلا بك في متجرنا لإنشاء حساب قم بإدخال بياناتك</p>
                  <div class="form-group text-right">
                        <label class="text-right" for="uname">اسم المستخدم </label>
                        <input type="text" class="form-control text-right " id="uname" placeholder="اسم المستخدم" name="user_name" required>
                    </div>
                    <div class="form-group text-right">
                        <label class="text-right" for="pass">كلمة المرور  </label>
                        <input type="password" class="form-control text-right" id="pass" placeholder="كلمة المرور " name="user_pass" required>
                    </div>
                    <div class="form-group text-right">
                        <label class="text-right" for="email">بريدك الالكتروني   </label>
                        <input type="email" class="form-control text-right" id="email" placeholder="بريدك الالكتروني  " name="user_email" required>
                    </div>
<br>
                    
                         <input type="text" name="user_is_active" hidden="hidden" value="1" required>
                         <input type="text" name="user_roles" hidden="hidden" value="0" required>
                         <input type="text" name="date_added" hidden="hidden" value="<?php echo date('y-m-d'); ?>" required>
                         <input type="text" name="admin_who_added" hidden="hidden" value="0" required>
                    <button type="submit" name="singup" class="btn  check_btn"  id="submit">التسجيل الان </button>
                    
                    <p class="text-muted text-center"> او لتسجيل الدخول بحسابات اخرى </p>
                    <ul class="social-network social-circle navbar-nav" style="text-align:center;padding-left:27%">
                        
                        <br><!--<li><a href="#" class="icoFacebook" title="Facebook" style='background-color: #3B5998;'><i class="ion-social-facebook-outline"style='color:white;'>للمتابعة على حساب فيس بوك</i></a></li>
                        <li><a href="#" class="icoTwitter" title="Twitter" style='background-color: #33ccff;'><i class="ion-social-twitter-outline" style='color:white;'>للمتابعة على حساب تويتر </i></a></li>
                        --><li><a href="login_google" class="icoGoogle" title="Google +" style='background-color: #BD3518'><i class="ion-social-google-outline" style='color:white;'> للمتابعة على حساب جوجل </i></a></li>
                    </ul><br><br>
                 <a href="./login"> <p class="text-muted text-center">او للدخول الى حساب موجود  </p></a>
                    </form>
                </div>
            </div>
        </div>
    </div>

<br><br><br><br>
<?php include'footer.php'; ?>