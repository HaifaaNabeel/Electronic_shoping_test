<?php include"header.php";?>
<div class="page-wrapper">
                  <!-- Header -->
                  <header class="main-header " id="header">
            <nav class="navbar navbar-static-top navbar-expand-lg">
              <!-- Sidebar toggle button -->
              <button id="sidebar-toggler" class="sidebar-toggle">
                <span class="sr-only">Toggle navigation</span>
              </button>
              <!-- search form -->
              <div class="search-form d-none d-lg-inline-block">
                  <form method="post" action="search_result">
                <div class="input-group">
                  
                  <!--<input type="text"  name="category_name" id="search-input" class="form-control" placeholder="ابحث هنا"
                    autofocus autocomplete="off" />
                    <button type="submit" name="search" value="search" id="search-btn" class="btn btn-flat" >
                    <i class="mdi mdi-magnify"></i> بحث 
                  </button>-->
                    </form>
                </div>
              
              </div>

              <div class="navbar-right ">
                <ul class="nav navbar-nav">
                 
                  <li class="dropdown notifications-menu" style="display:none">
                    <button class="dropdown-toggle" data-toggle="dropdown">
                      <i class="mdi mdi-bell-outline"></i>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-right">
                      <li class="dropdown-header">You have 5 notifications</li>
                      <li>
                        <a href="#">
                          <i class="mdi mdi-account-plus"></i> New user registered
                          <span class=" font-size-12 d-inline-block float-right"><i class="mdi mdi-clock-outline"></i> 10 AM</span>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="mdi mdi-account-remove"></i> User deleted
                          <span class=" font-size-12 d-inline-block float-right"><i class="mdi mdi-clock-outline"></i> 07 AM</span>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="mdi mdi-chart-areaspline"></i> Sales report is ready
                          <span class=" font-size-12 d-inline-block float-right"><i class="mdi mdi-clock-outline"></i> 12 PM</span>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="mdi mdi-account-supervisor"></i> New client
                          <span class=" font-size-12 d-inline-block float-right"><i class="mdi mdi-clock-outline"></i> 10 AM</span>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="mdi mdi-server-network-off"></i> Server overloaded
                          <span class=" font-size-12 d-inline-block float-right"><i class="mdi mdi-clock-outline"></i> 05 AM</span>
                        </a>
                      </li>
                      <li class="dropdown-footer">
                        <a class="text-center" href="#"> View All </a>
                      </li>
                    </ul>
                  </li>
                  <!-- User Account -->
                  <li class="dropdown user-menu">
                    <button href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                      <img src="../../app/assets/admin/img/user/u5.jpg" class="user-image" alt="User Image" />
                      <span class="d-none d-lg-inline-block">Alfalahy Shyma</span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-right">
                      <!-- User image -->
                      <li class="dropdown-header">
                        <img src="../../app/assets/admin/img/user/u5.jpg" class="img-circle" alt="User Image" />
                        <div class="d-inline-block">
                          Alfalahy Shyma <small class="pt-1">alfalahysh.com</small>
                        </div>
                      </li>

                      
                      <li class="dropdown-footer">
                        <a href="admin_sess/end_sess"> <i class="mdi mdi-logout"></i> Log Out </a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </div>
            </nav>


          </header> 


<!--////////////////////////////////end  header///////////////////////////////-->
         


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











































