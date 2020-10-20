<?php include'header.php'; ?>
    

<body>
    <br><br><br><br><br><br>
<style>
    ul.social-network {
    list-style: none;
    display: inline;
    margin-left: 0 !important;
    padding: 0
}

ul.social-network li {
    display: inline;
    margin: 0 5px
}

.social-network a.icoFacebook:hover {
    background-color: #3B5998
}

.social-network a.icoTwitter:hover {
    background-color: #33ccff
}

.social-network a.icoGoogle:hover {
    background-color: #BD3518
}
.social-network a.icoGmail:hover {
    background-color: #922a13
}
.social-network a.icoFacebook:hover i,
.social-network a.icoTwitter:hover i,
.social-network a.icoGmail:hover i,
.social-network a.icoGoogle:hover i {
    color: black
}

a.socialIcon:hover,
.socialHoverClass {
    color: #44BCDD
}

.social-circle li a {
    display: inline-block;
    position: relative;
    margin: 0 auto 0 auto;
    border-radius: 50%;
    text-align: center;
    width: 50px;
    height: 50px;
    font-size: 20px
}

.social-circle li i {
    margin: 0;
    line-height: 50px;
    text-align: center
}

.social-circle li a:hover i,
.triggeredHover {
    transform: rotate(360deg);
    transition: all 0.2s
}

.social-circle i {
    color: black;
    transition: all 0.8s;
    transition: all 0.8s
}
.card button[type="submit"]{
    border-radius: 24px;
    cursor: pointer;
    text-align: center;



}

.card input, button[type="submit"],label {
    border: 0;
    background: none;
    display: block;
    margin: 10px ;
    outline: none;
    color: black;
    border-radius: 24px;
    transition: 0.25s;
    width: 400px;
    height: 50px;
}
.card input,button[type="submit"]{    border: 2px solid #2ecc71;}
.cadr button[type="submit"]:hover {
    background: #2ecc71
}

</style>
     <main>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4 "></div>
        <div class="col-md-4 ">
            <div class="card" style="border-radius: 24px; padding:10px" >
                <form class="" action="" method="POST">
                  <h2 class="text-center" style="color: #000;"> انشاء حساب </h2>
                  <p class="text-center"> اهلا بك في متجرنا لإنشاء حساب قم بإدخال بياناتك</p>
                  <div class="form-group text-right">
                        <label class="text-right" for="uname">اسم المستخدم </label>
                        <input type="text" class="form-control text-right " id="uname" placeholder="اسم المستخدم" name="uname" required>
                    </div>
                    <div class="form-group text-right">
                        <label class="text-right" for="pass">كلمة المرور  </label>
                        <input type="password" class="form-control text-right" id="pass" placeholder="كلمة المرور " name="pass" required>
                    </div>
                    <div class="form-group text-right">
                        <label class="text-right" for="email">بريدك الالكتروني   </label>
                        <input type="email" class="form-control text-right" id="email" placeholder="بريدك الالكتروني  " name="email" required>
                    </div>
<br>
                    <button type="submit" class="btn  btn-primary"  id="submit">التسجيل الان </button>
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