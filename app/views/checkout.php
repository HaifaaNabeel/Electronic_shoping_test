<?php include'header.php'; ?>
<body>

                   <?php
                    $tootlecost=$_POST['tootlecost'];
                    $user=$_POST['user'];

                    ?>
     <main>
         <section class="contact">
<div class="container">
    <div class="row">
        <div class="col-md-6 ">
        
  </br>
            <img class="ahood" width="100%" alt="image" src="app/assets/img/happy-tiny-man-woman-with-big-open-wallet_74855-5869.jpg"/>
        </div>
        <div class="col-md-6 ">
            <div class="">
                <form class="" action="http://localhost/bank_new_api/api/take_put_checkout.php" method="POST">
                    <h2 class="cont-h1"> ادفع الان </h2>
                    <br>
                    <div class="form-group text-right ">
                        <label class="log-lab" for="card_type">نوع البطاقة </label>
                        <input type="text" class="form-control text-right " id="uname" name="card_name" required>
                    </div>
                    <div class="form-group text-right ">
                        <label class="log-lab" for="card_num">رقم البطاقة </label>
                        <input type="text" class="form-control text-right " id="uname" name="card_num" required>
                    </div>
                    
                    <div class="form-group text-right ">
                        <label class="log-lab" for="card_pass">الرقم السري </label>
                        <input type="password" class="form-control text-right " id="uname" name="card_pass" required>
                    </div>
                    <div class="form-group text-right">
                        <label class="log-lab" for="address">تاريخ انتهاء الصلاحية </label>
                        <input type="date" class="form-control text-right" id="uname" name="Expired_date" required>
                    </div>

                    <input type="text"   name="url"      value="<?php echo 'http://localhost/Electronic_shoping_test/done_pay_or_not'?>" hidden="hidden" readonly required>
                    <input type="text"   name="user_id"     value="<?php echo $user; ?>" hidden="hidden" readonly required>
                    <input type="text"   name="cost"     value="<?php echo $tootlecost;?>" hidden="hidden" readonly required>
                    <input type="text"   name="web_id"   value="123456789" hidden="hidden" readonly required>
                    <input type="text"   name="web_pass" value="123456789" hidden="hidden" readonly required>                     
                        <button type="submit" style="    width: 100%;" class="btn log-cont"  id="submit">الدفع الان  </button>
<br><br>
                    
                </form>
                
            </div>
        </div>
    </div>
    
</div>

         </section>
<br><br>
    </main>

<?php include'footer.php'; ?>