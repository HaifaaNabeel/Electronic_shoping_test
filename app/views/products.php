<?php include'header.php'; ?>


 </br></br>
<section>
    <div class="container">
         </br></br>

        <div class="row">
            <div class="col-sm-12">
                 <?php
                  $rows=$data['categories'];
                  foreach($rows as $row){
                    $rows1=$data['products'];
                    foreach($rows1 as $row1){
                        if($row1->category_id == $row->category_id ){
                      echo '
                <h3 class="text-center mb-3 mt-3">'.$row->category_name.'</h3>
                </br></br>'; break;}
                else{
                    continue;
                }}}
                
                ?>
            </div>
            <?php
          $rows=$data['products'];
                foreach($rows as $row){
                    echo '
             <div class="col-sm-12 col-md-3">
              <div class=" text-center mr-1 ml-1  mb-2">
                  <div class="card">
                 <div style="height:auto ;" class="table-block ">
                    <img alt=""  src="'.$row->product_main_image.'" style="height:272px;width:240px" />
                 </div>
                <div class="card-body">    <!--$row->product_date_added.<br>-->
                    <h6>'.$row->product_name.'</h6>
                    <h6>'.$row->product_price.'</h6>
                    <h6>
                        <form action="" method="post">
                        <a class="btn product_btn m-1" href="" name="card"><span class="ion-ios-cart-outline"></span></a>
                        <a class="btn product_btn m-1" href="" name="favorite"><span class="ion-android-favorite-outline"></span></a>
                        <a class="btn product_btn m-1" href="" name="filter"><span class="ion-ios-color-filter-outline"></span></a>
                        <a class="btn product_btn m-1" href="product_details?id='.$row->Product_id.'"><span class="ion-ios-more-outline"></span></a>
                        </form>
                    </h6>                    
                </div>
              </div>          

            </div>
            </div>';}?>




             </div>
            </div>
    </div>
</section>





















<?php include'footer.php'; ?>
