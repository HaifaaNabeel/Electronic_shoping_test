<?php include'header.php'; ?>
<link rel="stylesheet" href= "app/assets/css/loginstyle.css">
<body>
    <br><br><br><br><br><br>
<style>
</style>
                   <?php
                    $tootlecost=$_POST['tootlecost'];
                   //echo $tootlecost=$_POST['tootlecost'];
                   //echo"hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh";


                    ?>
     <main>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4 "></div>
        <div class="col-md-4 ">
            <div class="card" style="border-radius: 24px; padding:10px" >
            <!---<div class="col-md-12 col-xs-12  number_check"> 2 </div><br>-->
                <form class="" action="http://localhost/bank_new_api/api/take_card.php" method="POST">
                    <h2 class="text-center" style="color: #000;"> الدفع </h2>
                    <div class="form-group text-right ">
                        <label class="text-right" for="card_type">نوع البطاقة </label>
                        <input type="text" class="form-control text-right " id="card_name" name="card_name" required>
                    </div>
                    <div class="form-group text-right ">
                        <label class="text-right" for="card_num">رقم البطاقة </label>
                        <input type="text" class="form-control text-right " id="card_num" name="card_num" required>
                    </div>
                    <div class="form-group text-right">
                        <label class="text-right" for="card_name">الاسم الموجود على البطاقة</label>
                        <input type="text" class="form-control text-right" id="name" name="name" required>
                    </div>
                    <div class="form-group text-right ">
                        <label class="text-right" for="card_pass">الرقم السري </label>
                        <input type="password" class="form-control text-right " id="card_pass" name="card_pass" required>
                    </div>
                    <div class="form-group text-right">
                        <label class="text-right" for="address">تاريخ انتهاء الصلاحية </label>
                        <input type="date" class="form-control text-right" id="Expired_date" name="Expired_date" required>
                    </div>

                    
                    <input type="text"  id="url" name="url"value="<?php echo 'http://localhost/Electronic_shoping_test/done_pay_or_not'?>" hidden="hidden" readonly required>
                    <input type="text"  id="cost" name="cost"value="<?php echo $tootlecost;?>" hidden="hidden" readonly required>

                     
                        <button type="submit" class="btn  check_btn"  id="submit">الدفع الان  </button>
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