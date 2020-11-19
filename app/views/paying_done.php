<?php include'header.php'; ?>
    <br><br><br><br><br><br>

    <main>
<div class="container-fluid">
    <div class="row">
            
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
  <div class="col-md-6 ">
        
  </br>
            <img class="" width="100%" alt="image" src="app/assets/img/successful-purchase-concept-illustration_114360-1003.jpg"/>
        </div>
        <div class="col-md-6 ">
         </br> </br>
    <h2 class="text-center" style="color: ##221446;"> رقم طلبك  </h2>
    <h2 class="text-center" style="color: ##221446;">'.$checkout_num.'</h2>
    <h4 class="text-center" style="color: ##221446;"> لقد تمت عمليةالشراء بنجاح  <span class="ion-android-checkmark-circle">  </span><span class="ion-happy-outline"></span> </h4>
 
    <br><a class="btn  log-cont1 "  href="./bill_sale?id='.$user.'&bill='.$checkout_num.'">لعرض الفاتورة <span class="ion-ios-paper-outline"></span></a>
    <!--<br><a class="btn  log-cont1 "   href="./">للعودة الى سلة المشتريات <span class="ion-ios-cart-outline"></span></a>-->
    <br><a class="btn  log-cont1 "   href="./home">للعودة الى المتجر <span class="ion-ios-home-outline"></a>
 ';
 
 





 
?>
 
   <br><br>
                    
                </form>
                
            </div>
        </div>
        <div class="col-md-4 "></div>
 
    </div>
    
</div>
 
<br><br><br><br><br><br>
    </main>
 
<?php include'footer.php'; ?>