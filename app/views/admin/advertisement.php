


<?php include"header.php";?>

          
<div class="row">
    <div class="col-12">
<!-- Recent Order Table -->
<div class="card card-table-border-none" id="recent-orders">
<div class="card-header justify-content-between">
<h2>الاعلانات </h2>

<div class="date-range-report ">
<span></span>
</div>
</div>
<div class="card-body pt-0 pb-5">
<table class="table card-table table-responsive table-responsive-large " style="width:100%">
<thead>
<tr>

                          
<th>#</th>
<th class="d-none d-md-table-cell"> صورة الاعلان</th>
<th>اسم لاعلان </th>
<th>مكان الاعلان</th>
<th>تاريخ الاعلان</th>
<th>عمليات</th>
</tr>
</thead>
<tbody> 


<?php

   $rows=$data['advertisements']; 
       foreach($rows as $row)
       { 
        echo '
<tr>
<td >'.$row->adds_id.'</td>
<td ><img src="'.'../../'.$row->adds_img.'" class="img-thumbnail img-fluid" width=60px hight=60px></td>
<td >'.$row->adds_name.'</td>
<td >'.$row->place_in_home.'</td>
<td >'.$row->date.'</td>
<td >
    <div class="btn-group" role="group" aria-label="Basic example">
        <a type="button" href="../admin_adv/update_adv?id='.$row->adds_id.'" class="btn btn-success"><span class="ion-edit"></span></a>
        <a type="button" href="" class="btn btn-info"><span class="">%</span></a>
       <a type="button" href="" class="btn btn-warning"><span class="ion-ribbon-b"></span></a>
       <a type="button" href="" class="btn btn-primary"><span class="ion-ios-photos-outline"></span></a>
       <a type="button" href="../admin_adv/delete_adv?id='.$row->adds_id.'" class="btn btn-danger"><span class="ion-android-delete"></span></a>


       
     </div>
    </td>
</tr>

 ';
}
?>
</tbody>

</table>
</div>
</div>



<?php include"footer.php";?>











































