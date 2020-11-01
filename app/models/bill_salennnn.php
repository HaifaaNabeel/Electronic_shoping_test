<?php include'header.php'; ?>
 </br></br>
 </br></br>


<section class="bill mt-4">
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6 bill-sale">
                <div class="row">
                   <div class="col-12 s1">
                        <img class=" lo m-2" src="app/assets/img/login_store_logos-1.png"/> 
                       <h1 class="text-center"><span style="color: #362f90;">فاتورة</span><span style="color: #f26f23;">بيع</span></h1>
                    </div>
                      <div class="col-12  s2">
                        <table class="table table-borderless text-center">
    <thead>
      <tr>
        <th>بيانات المشتري</th>
      </tr>
    </thead>
    <tbody>
         <?php
                   $items=$data['uuser'];
                  foreach($items as $item){
                 
                  
                 ?>
      <tr>
        <td>الاسم</td>
        <td><?php echo $item->user_name; ?></td>
      </tr>
      <tr>
        <td>الايميل</td>
        <td><?php echo $item->user_email; ?></td>
      </tr>
      <tr>
        <td>تاريخ الدفع</td>
        <td><?php echo date('yy-m-d'); ?></td>
      </tr>
        <tr>
        <td>طريقة الدفع</td>
        <td>البنك الوهمي</td>
      </tr>
        <?php }?>
    </tbody>
  </table>
                    </div>
                   <div class="col-12  s2">
                        <table class="table table-borderless text-center">
    <thead>
         <tr>
        <th> المشتريات</th>
      </tr>
      <tr>
        <th>اسم المنتج</th>
        <th>الكميه</th>
        <th>سعر القطعه</th>
      </tr>
    </thead>
    <tbody>
          <?php
                   $items=$data['userorder'];
                  foreach($items as $item){
                 
                  
                 ?>
      <tr>
        <td><?php echo $item->product_name; ?></td>
        <td><?php echo '1'; ?></td>
        <td><?php echo $item->product_price; ?></td>
      </tr>
     
        <?php } ?>
    </tbody>
  </table>
                    </div>
                    
                   <div class="col-12  s4">
                        <table class="table table-borderless text-center">
    <thead>
         <tr>
        <th> اجمالي السعر</th>
      </tr>
    </thead>
    <tbody>
        
      <tr>
        <td>السعر الكلي</td>
        <td><?php
                   $TOTALE=$data['checkout'];
                  foreach($TOTALE as $T){
                  echo $T->sumcollll;
                  } ?>RY</td>
      </tr>
      <tr>
        <td>سعر الشحن</td>
        <td>0RY</td>
      </tr>
        <tr>
        <td> الاجمالي</td>
        <td><?php
                   $TOTALE=$data['checkout'];
                  foreach($TOTALE as $T){
                  echo $T->sumcollll;
                  }?>RY</td>
      </tr>
    </tbody>
  </table>
                    </div>
                    
                   <div class="col-12 ">
                       <h4 class="text-center">شكرا لزيارتكم</h4>
                       <h5 class="text-center">خدمة العملاء</h5>
                       <h6 class="text-center"> order.webdev@gmail.com</h6>
                       <h6 class="text-center"> 777 777 777</h6>

                    </div>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
    
</section>
 </br></br>
 </br></br>

<?php include'footer.php'; ?>
