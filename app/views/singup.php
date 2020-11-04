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
                         
                         <li><a href="#" class="icoFacebook" title="Facebook"><i class="ion-social-facebook-outline"></i></a></li>
                         <li><a href="#" class="icoTwitter" title="Twitter"><i class="ion-social-twitter-outline"></i></a></li>
                         <li><a href="#" class="icoGoogle" title="Google +"><i class="ion-social-google-outline"></i></a></li>
                     </ul><br>
                 <a href="./login"> <p class="text-muted text-center">او للدخول الى حساب موجود  </p></a>
                    </form>
                </div>
            </div>
        </div>
    </div>

<br><br><br><br>
<?php include'footer.php'; ?>