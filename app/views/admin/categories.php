<?php include"header.php";?>

          
							<div class="row">
								<div class="col-12">
                  <!-- Recent Order Table -->
                  <div class="card card-table-border-none" id="recent-orders">
                    <div class="card-header justify-content-between">
                      <h2>الاصناف </h2>
                      <div class="date-range-report ">
                        <span></span>
                      </div>
                    </div>
                    <div class="card-body pt-0 pb-5">
                      <table class="table card-table table-responsive table-responsive-large " style="width:100%">
                        <thead>
                          <tr>
                            <th>#</th>
                            <th>اسم الصنف </th>
                            <th>تاريخ الاضافة</th>
                            <th>عمليات</th>
                          </tr>
                        </thead>
                            <tbody> 
                                <?php

             $rows=$data['categories'];
                foreach($rows as $row){
                    echo '                    
                            <tr>
                            <td >'.$row->category_id.'</td>
                            <td >'.$row->category_name.'</td>
                            <td >'.$row->date_added.'</td>
                            <td >
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <a type="button" href="update_cat?id='.$row->category_id.'" class="btn btn-success"><span class="ion-edit"></span></a>
                                   <a type="button" href="delete_cat?id='.$row->category_id.'" class="btn btn-danger"><span class="ion-android-delete"></span></a>
                                 </div>
                                </td>
                            </tr>
               '; }?>
                            </tbody>
                          
                      
                      </table>
                    </div>
                  </div>
<?php include"footer.php";?>
