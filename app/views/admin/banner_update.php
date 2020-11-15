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
                  
                  <input type="text"  name="category_name" id="search-input" class="form-control" placeholder="ابحث هنا"
                    autofocus autocomplete="off" />
                  
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
                        <a href="../../logout"> <i class="mdi mdi-logout"></i> تسجيل الخروج </a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </div>
            </nav>


          </header>
    <div class="content-wrapper">
          <div class="content">							
              <div class="row">
								<div class="col-lg-11">
									<div class="card card-default text-right">
										<div class="card-header card-header-border-bottom">
											<h2>تعديل واجهه</h2>
										</div>
										<div class="card-body">
											<form method="post" enctype="multipart/form-data" action="admin_banner/update_bann">
				<?php
$rows=$data['banner'];
foreach($rows as $row){  
?>
                                                
<div class="form-group">
													<label for="category_name"> العنوان</label>
<input class="form-control" type="text" value="<?php echo $row->banner_title;?>" id="banner_title" name="banner_title">
<input type="text" class="form-control"  placeholder="" name="banner_added_date" hidden="hidden" readonly required 
       value="<?php echo $row->banner_added_date;?>">
<input type="text" class="form-control"  placeholder="" name="banner_status" hidden="hidden" readonly required value="<?php echo $row->banner_status;?>">
<input type="text" class="form-control"  placeholder="" name="banner_id" hidden="hidden" readonly required value="<?php echo $row->banner_id;?>">
<input type="text" class="form-control" name="banner_imgs" hidden="hidden"  value="<?php echo $row->banner_img;?>">
												</div>
                                                <div class="form-group">
													<label for="category_name"> الصورة</label>
													<input class="form-control" accept="image/*" type="file" id="banner_title" name="banner_img">
												</div>                                            

                                                <div class="form-footer pt-4 pt-5 mt-4 border-top text-right">
													<button type="submit" class="btn btn-primary btn-default">تعديل الواجهه </button>
													<a type="submit" class="btn btn-secondary btn-default" href="banner">الغاء</a>
                                                </div>
<?php  }?>
											</form>
										</div>
									</div>

									

									
												


        </div>

<?php include'footer.php';?>
