<?php include'header.php'; ?>
<body>
    <main class="contact">
<div class="container-fluid">
    <div class="row">
       
            <!--<div class="col-md-12 col-xs-12  number_check"> 4</div><br>-->
            
<?php
$id=$_GET['id'];//$tootlecost=$_POST['tootlecost'];
//echo $id;
 $user=$_GET['user']; $cost=$_GET['cost'];$card_num=$_GET['card_num'];
 //$x=$_GLOBALS['U'];echo $x;
//echo $user;echo $user;echo $user;echo $user;echo $user;
if($id == 1)  //error in card data name ,num ,pass 
{ echo '
<div class="col-md-6 ">
        
  </br>
            <img class="ahood1" width="100%" alt="image" src="app/assets/img/concept-operating-system-error-404-error-web-page-illustration_126608-118.jpg"/>
        </div>
        <div class="col-md-6 ">
         </br> 
            <div class="" style="border-radius: 24px; padding:10px" >
    <h2 class="text-center cch-h1" style="color: #fa5c5c;"> لم تتم عمليه الشراء  <span class="ion-close-"></span></h2>
    </br>
    <h2 class="text-center cch-h1" style="color: #221446;">الرجاء ادخال بيانات البطاقة بشكل صحيح <span class="ion-sad-outline"></span></h2>
    <h4 class="text-center cch-h1" style="color: #221446;"></h4>

    <!--<br><a class="btn  number_check "  href="./checkout">للاعادة ادخال بيانات البطاقة  <span class="ion-ios-paper-outline"></span></a>-->
    <br><a class="btn  log-cont1 "   href="./cart">للعودة الى سلة المشتريات <span class="ion-ios-cart-outline"></span></a>
    <br><a class="btn  log-cont1 "   href="./home">للعودة الى المتجر <span class="ion-ios-home-outline"></a>
    </div>
 ';
}
else if  ($id == 3)   //error in card date 
 { echo '
 <div class="col-md-6 ">
        
  </br>
            <img class="ahood1" width="100%" alt="image" src="app/assets/img/concept-operating-system-error-404-error-web-page-illustration_126608-118.jpg"/>
        </div>
        <div class="col-md-6 ">
        </br> </br>
            <div class="" style="border-radius: 24px; padding:10px" >
    <h2 class="text-center cch-h1" style="color: #fa5c5c;"> لم تتم عمليه الشراء  <span class="ion-close-"></span></h2></br>
    <h2 class="text-center cch-h1" style="color: ##221446;">الرجاء التاكد من تاريخ صلاحية البطاقة <span class="ion-sad-outline"></span></h2>
    <h4 class="text-center" style="color: ##221446;">    </h4>

    <!--<br><a class="btn  number_check "  href="./checkout">للاعادة ادخال بيانات البطاقة  <span class="ion-ios-paper-outline"></span></a>-->
    <br><a class="btn  log-cont1 "   href="./cart">للعودة الى سلة المشتريات <span class="ion-ios-cart-outline"></span></a>
    <br><a class="btn  log-cont1 "   href="./home">للعودة الى المتجر <span class="ion-ios-home-outline"></a>
    </div>
 ';

 }
else if  ($id == 2)   ///error in card account or cost 
 {echo '
 <div class="col-md-6 ">
        
  </br>
            <img class="ahood1" width="100%" alt="image" src="app/assets/img/concept-operating-system-error-404-error-web-page-illustration_126608-118.jpg"/>
        </div>
        <div class="col-md-6 ">
        </br> </br>
            <div class="" style="border-radius: 24px; padding:10px" >
    <h2 class="text-center cch-h1" style="color: ##221446;"> لم تتم عمليه الشراء  <span class="ion-close-"></span></h2></br>
    <h2 class="text-center cch-h1" style="color: ##221446;">ان بطاقتك ليس لديها الرصيد الكافي للشراء الرجاء التاكد من طلباتك <span class="ion-sad-outline"></span> </h2>
    <h4 class="text-center" style="color: ##221446;">    </h4>

    <!--<br><a class="btn  number_check "  href="./checkout">للاعادة ادخال بيانات البطاقة  <span class="ion-ios-paper-outline"></span></a>-->
    <br><a class="btn  log-cont1 "   href="./cart">للعودة الى سلة المشتريات <span class="ion-ios-cart-outline"></span></a>
    <br><a class="btn  log-cont1 "   href="./home">للعودة الى المتجر <span class="ion-ios-home-outline"></a>
    </div>
 ';

 }
else if  ($id == 0) //// error in process payment 
 {
    echo '
    <div class="col-md-6 ">
        
  </br>
            <img class="ahood1" width="100%" alt="image" src="app/assets/img/concept-operating-system-error-404-error-web-page-illustration_126608-118.jpg"/>
        </div>
        <div class="col-md-6 ">
        </br> </br>
            <div class="" style="border-radius: 24px; padding:10px" >
    <h2 class="text-center cch-h1" style="color: #fa5c5c;"> لم تتم عمليه الشراء  <span class="ion-close-"></span></h2></br>
    <h2 class="text-center cch-h1" style="color: ##221446;">وجهتنا بعض المشاكل في عملية الشراء الرجاء المحاولةمرة اخرى <span class="ion-sad-outline"></span> </h2>
    <h4 class="text-center" style="color: ##221446;">    </h4>

    <!--<br><a class="btn  number_check "  href="./checkout">للاعادة ادخال بيانات البطاقة  <span class="ion-ios-paper-outline"></span></a>-->
    <br><a class="btn  log-cont1 "   href="./cart">للعودة الى سلة المشتريات <span class="ion-ios-cart-outline"></span></a>
    <br><a class="btn  log-cont1 "   href="./home">للعودة الى المتجر <span class="ion-ios-home-outline"></a>
    </div>
 ';
 }
else if  ($id == 4) //// the payment is done 
 { /*echo '
    <h2 class="text-center" style="color: ##221446;"> رقم طلبك  </h2>
    <h2 class="text-center" style="color: ##221446;">.............</h2>
    <h4 class="text-center" style="color: ##221446;"> لقد تمت عمليةالشراء بنجاح  <span class="ion-android-checkmark-circle">  </span><span class="ion-happy-outline"></span> </h4>

    <br><a class="btn  number_check "  href="./bill_sale?id='.$user.'">لعرض الفاتورة <span class="ion-ios-paper-outline"></span></a>
    <!--<br><a class="btn  number_check "   href="./">للعودة الى سلة المشتريات <span class="ion-ios-cart-outline"></span></a>-->
    <br><a class="btn  number_check "   href="./home">للعودة الى المتجر <span class="ion-ios-home-outline"></a>
 ';*/

}
 else        ////error in process payment 
 {
    echo '
    <div class="col-md-6 ">
        
  </br>
            <img class="ahood1" width="100%" alt="image" src="app/assets/img/concept-operating-system-error-404-error-web-page-illustration_126608-118.jpg"/>
        </div>
        <div class="col-md-6 ">
        </br> </br>
            <div class="" style="border-radius: 24px; padding:10px" >
    <h2 class="text-center cch-h1" style="color: #fa5c5c;"> لم تتم عمليه الشراء  <span class="ion-android-checkmark-circle"></span></h2></br>
    <h2 class="text-center cch-h1" style="color: ##221446;">وجهتنا بعض المشاكل في عملية الشراء الرجاء المحاولةمرة اخرى </h2>
    <h4 class="text-center cch-h1" style="color: ##221446;">    </h4>

    <!--<br><a class="btn  number_check "  href="./checkout">للاعادة ادخال بيانات البطاقة  <span class="ion-ios-paper-outline"></span></a>-->
    <br><a class="btn  log-cont1 "   href="./cart">للعودة الى سلة المشتريات <span class="ion-ios-cart-outline"></span></a>
    <br><a class="btn  log-cont1 "   href="./home">للعودة الى المتجر <span class="ion-ios-home-outline"></a>
    </div>
 ';
 }
?>
                    
                </form>
                
        </div>

    </div>
    
</div>
    </main>

<?php include'footer.php'; ?>