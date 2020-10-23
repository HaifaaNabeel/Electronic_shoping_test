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
            <div class="col-md-12 col-xs-12  number_check"> 2 </div><br>
                <form class="" action="" method="POST">
                    <h2 class="text-center" style="color: #000;"> اتمام عملية الشراء </h2>
                    <p class="text-center"> اسم المستخدم وبريدك الالكتروني</p>
                    <p class="text-center"> ............................</p>
                    <div class="form-group text-right ">
                        <label class="text-right" for="uname">اسم الشخص </label>
                        <input type="text" class="form-control text-right " id="uname" name="uname" required>
                    </div>
                    <div class="form-group text-right ">
                        <label class="text-right" for="uname">اسم العائلة </label>
                        <input type="text" class="form-control text-right " id="uname" name="uname" required>
                    </div>
                    <div class="form-group text-right">
                        <label class="text-right" for="phone">رقم الهاتف </label>
                        <input type="number" class="form-control text-right" id="phone" name="phone" required>
                    </div>
                    <div class="form-group text-right">
                        <label class="text-right" for="address">طريقة التسليم </label>
                        <label class="text-right" for="address">العنوان </label>
                        <input type="text" class="form-control text-right" id="address" name="address" required>
                    </div>
                    <div class="form-group text-right"> 
                      <label class="text-right" for="city">المدينة </label>
                      <select name="" id="" class="form-control text-right">
                      <option value=""></option>
                      </select>
                    </div>
                    <div class="form-group text-right"> 
                      <label class="text-right" for="">المنطقة</label>
                      <select name="" id="" class="form-control text-right">
                      <option value=""></option>
                      </select>
                    </div>
                    
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="customCheck" name="example1">
                      <label class="custom-control-label" for="customCheck">اوافق على جميع الشروط واللوائح التابعه للمحل </label>
                    </div>
                
                     <button type="submit" class="btn  btn-primary"  id="submit">متابعة </button>
<br><br>
                    
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