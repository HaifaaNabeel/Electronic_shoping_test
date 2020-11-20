
<?php include'header.php'; ?>
  

    <main>
<div class="container">
    <div class="row">
     <div class="col-md-6 ">
        
  </br>
            <img class="ahood1" width="100%" alt="image" src="app/assets/img/successful-purchase-concept-illustration_114360-1003.jpg"/>
        </div>
        <div class="col-md-6 ">
         </br> </br>
            <div class="" style="border-radius: 24px; padding:10px " >
                <h2 class="text-center" style="color: #000;"> تم تسجيل الخروج   </h2>

                   <?php  //if(@session_start()){
                   session_destroy();
                   //header('location:logout');
                   //} ?>

                 
                  <br><a class="btn  log-cont1  "   href="./login?page=home">لتسجيل الدخول من جديد <span class="ion-ios-person-outline"></span></a>
                  <br><a class="btn  log-cont1  "   href="./home">للعودة الى المتجر <span class="ion-ios-home-outline"></a>

                  <?php//redirect page to index.php
                      // header('location:home');?>
                    </br>
            </div>
        </div>

    </div>
    
</div>


<br><br><br><br><br><br>
    </main>

<br><br><br><br>
<?php include'footer.php'; ?>