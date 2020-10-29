<?php include"header.php";?>

          
							<div class="row">
								<div class="col-12">
                  <!-- Recent Order Table -->
                  <div class="card card-table-border-none" id="recent-orders">
                    <div class="card-header justify-content-between">
                      <h2>عروض الخصم </h2>
                      
                      <div class="date-range-report ">
                        <span></span>
                      </div>
                    </div>
                    <div class="card-body pt-0 pb-5">
                      <table class="table card-table table-responsive table-responsive-large " style="width:100%">
                        <thead>
                          <tr>
                            <th>#</th>
                            <th class="d-none d-md-table-cell">صورة</th>
                            <th>اسم المنتج </th>
                            <th>الصنف</th>
                            <th class="d-none d-md-table-cell">السعر القديم</th>
                            <th class="d-none d-md-table-cell">السعر بعد الخصم</th>
                            <th class="d-none d-md-table-cell">الكميه</th>
                            <th>عمليات</th>
                          </tr>
                        </thead>
                            <tbody> 
                            <!--<tr>
                            <td >1</td>
                            <td ><img src='../../$row[product_main_image]' class='img-thumbnail img-fluid'></td>
                            <td >موبايل</td>
                            <td >mobiles</td>
                            <td >50000</td>
                            <td >15</td>
                            <td >
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <a type="button" href="" class="btn btn-success"><span class="ion-edit"></span></a>
                                    <a type="button" href="" class="btn btn-info"><span class="">%</span></a>
                                   <a type="button" href="" class="btn btn-warning"><span class="ion-ribbon-b"></span></a>
                                   <a type="button" href="" class="btn btn-primary"><span class="ion-ios-photos-outline"></span></a>
                                   <a type="button" href="" class="btn btn-danger"><span class="ion-android-delete"></span></a>



                                   
                                 </div>
                                </td>
                            </tr>-->

                          <?php

                               $rows=$data['products']; 
                               
                                   foreach($rows as $row)
                                   {
                                    if($row->product_offer_percent == '1' ){
                                       
                                   
                                    echo '
                            <tr>
                            <td >1</td>
                            <td ><img src="'.'../../'.$row->product_main_image.'" class="img-thumbnail img-fluid" width=60px hight=60px></td>
                            <td >'.$row->product_name.'</td>
                            <td >'.$row->category_id.'</td><!-- we want to add category name not id-->
                            <td >'.$row->product_price.'</td>
                            <td >'.$row->product_price_after_discount.'</td>
                            <td >'.$row->product_Quantity.'</td>
                            <td >
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <a type="button" href="../admin_prod/update_prod?id='.$row->Product_id.'" class="btn btn-success"><span class="ion-edit"></span></a>
                                    <a type="button" href="" class="btn btn-info"><span class="">%</span></a>
                                   <a type="button" href="" class="btn btn-warning"><span class="ion-ribbon-b"></span></a>
                                   <a type="button" href="" class="btn btn-primary"><span class="ion-ios-photos-outline"></span></a>
                                   <a type="button" href="../admin_prod/delete_prod?id='.$row->Product_id.'" class="btn btn-danger"><span class="ion-android-delete"></span></a>


                                   
                                 </div>
                                </td>
                            </tr>

                             ';continue;}
                             else{
                            break;
                            }}
                          ?>
                            </tbody>
                            
                      </table>
                    </div>
                  </div>



<?php include"footer.php";?>