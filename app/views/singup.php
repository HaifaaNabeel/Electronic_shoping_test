<?php include'header.php'; ?>
<br><br><br><br><br><br>
 <?php  
$page=$_GET['page'];
?>
     <main>
<div class="container">
   <div class="row">
                <div class="col-md-6 col-sm-12 ">
                    <img class="img-fluid log-img" src="app/assets/img/user-login-illustration-with-key_108061-291.jpg">
</div>
        <div class="col-md-6 col-sm-12 ">
            <div class="pl-4 pr-4"  >
                     <h2 class="cont-h1"> انشاء حساب </h2>
              <form action="" method="post">
                  <p class="cont-h1" style="font-size:15px;"> اهلا بك في متجرنا لإنشاء حساب قم بإدخال بياناتك</p>
                  <div class="form-group text-right">
                        <label class="log-lab"  for="uname">اسم المستخدم </label>
                        <input type="text" class="form-control text-right " id="uname" placeholder="اسم المستخدم" name="user_name" required>
                    </div>
                    <div class="form-group text-right">
                        <label class="log-lab"  for="pass">كلمة المرور  </label>
                        <input type="password" class="form-control text-right" id="pass" placeholder="كلمة المرور " name="user_pass" required>
                    </div>
                    <div class="form-group text-right">
                        <label class="log-lab"  for="email">بريدك الالكتروني   </label>
                        <input type="email" class="form-control text-right" id="email" placeholder="بريدك الالكتروني  " name="user_email" required>
                    </div>                    
                         <input type="text" name="user_is_active" hidden="hidden" value="1" required>
                         <input type="text" name="user_roles" hidden="hidden" value="0" required>
                         <input type="text" name="date_added" hidden="hidden" value="<?php echo date('y-m-d'); ?>" required>
                         <input type="text" name="admin_who_added" hidden="hidden" value="0" required>
                                      <div class="form-group text-right">

                              <button type="submit" name="singup" class="btn  login"  id="submit">موافق </button>
                                <a href="login_google" class="icoGoogle btn sign-gog" title="Google +" >
                                    <i class="ion-social-google-outline"> للمتابعة على حساب جوجل </i></a>
                              <a class="log-link" href="./login?page=<?php  echo $page; ?>"> <span class="text-muted text-center">او للدخول الى حساب موجود  </span></a>
                  </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

<br><br><br><br>
<?php include'footer.php'; ?>