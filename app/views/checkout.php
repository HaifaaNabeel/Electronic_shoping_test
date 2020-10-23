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
            <div class="col-md-12 col-xs-12  number_check"> 1 </div><br>
                <form class="col-md-12 col-xs-12" action="" method="POST">
                 <h2 class="text-center " style="color: #000;"> الشراء الان </h2>
                    <div class="form-group text-right ">
                        <label class="text-right" for="uname">اسم المستخدم </label>
                        <input type="text" class="form-control text-right " id="uname" placeholder="اسم المستخدم" name="uname" required>
                    </div>
                    <div class="form-group text-right">
                        <label class="text-right" for="email">البريد الالكتروني </label>
                        <input type="email" class="form-control text-right" id="email" placeholder="البريد الالكتروني" name="email" required>
                    </div>
                     <a  href="./login"><p class="text-muted text-center">تسجيل الدخول بمستخدم اخر </p></a> <br>


                     <button type="submit" class="btn  btn-primary"  id="submit">متابعة </button>
<br><br>
                     
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