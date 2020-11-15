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
                  <form method="post" action="">
                <div class="input-group">
                  
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
                    <?php $rows=$data['user']; 
                      //print_r($rows);
                         foreach ($rows as $row){
                      ?>
                      <img src="../../app/assets/admin/img/user/u5.jpg" class="user-image" alt="User Image" />
                      <span class="d-none d-lg-inline-block"><?php echo  $row->user_name; ?></span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-right">
                      <!-- User image -->
                      <li class="dropdown-header">
                      
                        <img src="../../app/assets/admin/img/user/u5.jpg" class="img-circle" alt="User Image" />
                        <div class="d-inline-block">
                          <?php echo  $row->user_name.' <small class="pt-1">'.$row->user_email.'</small>';
                        }?>
                        </div>
                      </li>

                      
                      <li class="dropdown-footer">
                        <a href="../../logout"> <i class="mdi mdi-logout"></i> Log Out </a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </div>
            </nav>


          </header>
          
							<div class="row">
								<div class="col-12">
                  <!-- Recent Order Table -->
                  <div class="card card-table-border-none" id="recent-orders">
                    <div class="card-header justify-content-between">
                      <h2>الواجهه </h2>
                      <div class="date-range-report ">
                        <span></span>
                      </div>
                    </div>
                    <div class="card-body pt-0 pb-5">
                      <table class="table card-table table-responsive table-responsive-large " style="width:100%">
                        <thead>
                          <tr>
                            <th>#</th>
                            <th>عنوان الواجهه</th>
                            <th> صورة الواجهه</th>
                            <th>عمليات</th>
                          </tr>
                        </thead>
                            <tbody> 
                                <?php
 function buttons($status,$id){
               if($status=='active'){
               echo "<div class='btn-group' role='group' aria-label='Basic example'>
                <a type=button href='update_banner?id='.$id.'' class='btn btn-success'><span class='ion-edit'></span></a>
                                 </div>";
               }elseif($status != 'active'){
               echo "<div class='btn-group' role='group' aria-label='Basic example'>
                <a  href='update_banner?id=$id' class='btn btn-success'><span class='ion-edit'></span></a>
                <a  href='delete_banner?id=$id' class='btn btn-danger'><span class='ion-android-delete'></span></a>
                                 </div>";
               }    
                    }
             $rows=$data['banner'];
                foreach($rows as $row){
                  $status=  $row->banner_id;
                   
                    echo '                    
                            <tr>
                            <td >'.$row->banner_id.'</td>
                            <td >'.$row->banner_title.'</td>
                            <td ><img src="../../app/assets/img/banner_image/'.$row->banner_img.'" width="100px" height="100px"></td>
                            <td >
                               ';?>
                                <?php echo buttons($row->banner_status,$row->banner_id); ?>
                                <?php echo'
                                </td>
                            </tr>
               '; }?>
                            </tbody>
                          
                      
                      </table>
                    </div>
                  </div>
<?php include"footer.php";?>
