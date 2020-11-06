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
          <img src="app/assets/img/login_store_logos-2.png" width="100%">  
            <div class="card" style="border-radius: 24px; padding:10px" >
            <!--<div class="col-md-12 col-xs-12  number_check"> 4</div><br>-->
            
<?php
$id=$_GET['id'];//$tootlecost=$_POST['tootlecost'];
//echo $id;
 $user=$_GET['user']; $cost=$_GET['cost'];$card_num=$_GET['card_num'];
 $result=$data['bill_sale'];
 $date=date('y-m-d');
 //print_r($x);
 
 foreach($result as $r)
    { if( $r->user_id == $user && $r->total_cost ==$cost) //&& $r->checkout_date == $date
     {
         $checkout_num= $r->checkout_id;
        break;
    
    }
     else
     continue;
    }
     //$checkout_num;
 //$x=$_GLOBALS['U'];echo $x;
//echo $user;echo $user;echo $user;echo $user;echo $user;

 //// the payment is done 
  echo '
    <h2 class="text-center" style="color: ##221446;"> رقم طلبك  </h2>
    <h2 class="text-center" style="color: ##221446;">.............</h2>
    <h4 class="text-center" style="color: ##221446;"> لقد تمت عمليةالشراء بنجاح  <span class="ion-android-checkmark-circle">  </span><span class="ion-happy-outline"></span> </h4>

    <br><a class="btn  number_check "  href="./bill_sale?id='.$user.'&bill='.$checkout_num.'">لعرض الفاتورة <span class="ion-ios-paper-outline"></span></a>
    <!--<br><a class="btn  number_check "   href="./">للعودة الى سلة المشتريات <span class="ion-ios-cart-outline"></span></a>-->
    <br><a class="btn  number_check "   href="./home">للعودة الى المتجر <span class="ion-ios-home-outline"></a>
 ';


 






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