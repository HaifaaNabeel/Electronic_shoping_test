<?php include'header.php'; ?>
<link rel="stylesheet" href= "app/assets/css/loginstyle.css">
<body>
    <br><br><br><br><br><br>
<style>.number_check{
    border-radius:55px;background-color: #F27523 ;color:white;font-size:1.5em;
    text-align:center;height: 50px;

}</style>
    <main>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4 "></div>
        <div class="col-md-4 ">
            <div class="card" style="border-radius: 24px; padding:10px" >
            <!--<div class="col-md-12 col-xs-12  number_check"> 4</div><br>-->
            
<?php
$id=$_GET['id'];//$tootlecost=$_POST['tootlecost'];
//echo $id;
echo $user=$_GET['user'];//$x=$_GLOBALS['U'];echo $x;
//echo $user;echo $user;echo $user;echo $user;echo $user;
if($id == 1)  //error in card data name ,num ,pass 
{ echo '
    <h2 class="text-center" style="color: #221446;"> لم تتم عمليه الشراء  <span class="ion-close-round"></span></h2>
    <h2 class="text-center" style="color: #221446;">الرجاء ادخال بيانات البطاقة بشكل صحيح <span class="ion-sad-outline"></span></h2>
    <h4 class="text-center" style="color: #221446;">    </h4>

    <!--<br><a class="btn  number_check "  href="./checkout">للاعادة ادخال بيانات البطاقة  <span class="ion-ios-paper-outline"></span></a>-->
    <br><a class="btn  number_check "   href="./cart">للعودة الى سلة المشتريات <span class="ion-ios-cart-outline"></span></a>
    <br><a class="btn  number_check "   href="./home">للعودة الى المتجر <span class="ion-ios-home-outline"></a>
 ';
}
else if  ($id == 3)   //error in card date 
 { echo '
    <h2 class="text-center" style="color: ##221446;"> لم تتم عمليه الشراء  <span class="ion-close-round"></span></h2>
    <h2 class="text-center" style="color: ##221446;">الرجاء التاكد من تاريخ صلاحية البطاقة <span class="ion-sad-outline"></span></h2>
    <h4 class="text-center" style="color: ##221446;">    </h4>

    <!--<br><a class="btn  number_check "  href="./checkout">للاعادة ادخال بيانات البطاقة  <span class="ion-ios-paper-outline"></span></a>-->
    <br><a class="btn  number_check "   href="./cart">للعودة الى سلة المشتريات <span class="ion-ios-cart-outline"></span></a>
    <br><a class="btn  number_check "   href="./home">للعودة الى المتجر <span class="ion-ios-home-outline"></a>
 ';

 }
else if  ($id == 2)   ///error in card account or cost 
 {echo '
    <h2 class="text-center" style="color: ##221446;"> لم تتم عمليه الشراء  <span class="ion-close-round"></span></h2>
    <h2 class="text-center" style="color: ##221446;">ان بطاقتك ليس لديها الرصيد الكافي للشراء الرجاء التاكد من طلباتك <span class="ion-sad-outline"></span> </h2>
    <h4 class="text-center" style="color: ##221446;">    </h4>

    <!--<br><a class="btn  number_check "  href="./checkout">للاعادة ادخال بيانات البطاقة  <span class="ion-ios-paper-outline"></span></a>-->
    <br><a class="btn  number_check "   href="./cart">للعودة الى سلة المشتريات <span class="ion-ios-cart-outline"></span></a>
    <br><a class="btn  number_check "   href="./home">للعودة الى المتجر <span class="ion-ios-home-outline"></a>
 ';

 }
else if  ($id == 0) //// error in process payment 
 {
    echo '
    <h2 class="text-center" style="color: ##221446;"> لم تتم عمليه الشراء  <span class="ion-close-round"></span></h2>
    <h2 class="text-center" style="color: ##221446;">وجهتنا بعض المشاكل في عملية الشراء الرجاء المحاولةمرة اخرى <span class="ion-sad-outline"></span> </h2>
    <h4 class="text-center" style="color: ##221446;">    </h4>

    <!--<br><a class="btn  number_check "  href="./checkout">للاعادة ادخال بيانات البطاقة  <span class="ion-ios-paper-outline"></span></a>-->
    <br><a class="btn  number_check "   href="./cart">للعودة الى سلة المشتريات <span class="ion-ios-cart-outline"></span></a>
    <br><a class="btn  number_check "   href="./home">للعودة الى المتجر <span class="ion-ios-home-outline"></a>
 ';
 }
else if  ($id == 4) //// the payment is done 
 { echo '
    <h2 class="text-center" style="color: ##221446;"> رقم طلبك  </h2>
    <h2 class="text-center" style="color: ##221446;">.............</h2>
    <h4 class="text-center" style="color: ##221446;"> لقد تمت عمليةالشراء بنجاح  <span class="ion-android-checkmark-circle">  </span><span class="ion-happy-outline"></span> </h4>

    <br><a class="btn  number_check "  href="./bill_sale?id="'.$user.'">لعرض الفاتورة <span class="ion-ios-paper-outline"></span></a>
    <!--<br><a class="btn  number_check "   href="./">للعودة الى سلة المشتريات <span class="ion-ios-cart-outline"></span></a>-->
    <br><a class="btn  number_check "   href="./home">للعودة الى المتجر <span class="ion-ios-home-outline"></a>
 ';
}
 else        ////error in process payment 
 {
    echo '
    <h2 class="text-center" style="color: ##221446;"> لم تتم عمليه الشراء  <span class="ion-android-checkmark-circle"></span></h2>
    <h2 class="text-center" style="color: ##221446;">وجهتنا بعض المشاكل في عملية الشراء الرجاء المحاولةمرة اخرى </h2>
    <h4 class="text-center" style="color: ##221446;">    </h4>

    <!--<br><a class="btn  number_check "  href="./checkout">للاعادة ادخال بيانات البطاقة  <span class="ion-ios-paper-outline"></span></a>-->
    <br><a class="btn  number_check "   href="./cart">للعودة الى سلة المشتريات <span class="ion-ios-cart-outline"></span></a>
    <br><a class="btn  number_check "   href="./home">للعودة الى المتجر <span class="ion-ios-home-outline"></a>
 ';
 }






?>

     <!--<main>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4 "></div>
        <div class="col-md-4 ">
            <div class="card" style="border-radius: 24px; padding:10px" >
            <div class="col-md-12 col-xs-12  number_check"> 4</div><br>


                    <h2 class="text-center" style="color: ##221446;"> رقم طلبك  </h2>
                    <h2 class="text-center" style="color: ##221446;">.............</h2>
                    <h4 class="text-center" style="color: ##221446;"> لقد تمت عمليةالشراء بنجاح  <span class="ion-android-checkmark-circle"></span> </h4>

                    <br><a class="btn  number_check "  href="">لعرض الفاتورة <span class="ion-ios-paper-outline"></span></a>
                    <br><a class="btn  number_check "   href="">للعودة الى سلة المشتريات <span class="ion-ios-cart-outline"></span></a>
                    <br><a class="btn  number_check "   href="">للعودة الى المتجر <span class="ion-ios-home-outline"></a>-->
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