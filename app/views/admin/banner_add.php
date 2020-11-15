<?php include"header.php";?>
<style>
.form-input .xx {display:block;width:150px;height:auto;max-height:100px;;
            border-radius:10px;cursor:pointer;}
.form-input img {width:150px;height:110px;margin:2px;}
.ion-android-cancel{font-size: 2.5em;outline: none;
            margin:5px 8px;margin-top:-3em;color: red;position: static}
.ion-android-cancel::after{color:green;font-weight:900;border-radius: 8px;cursor:pointer;}
</style>
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
									<div class="card card-default "><!--text-right-->
										<div class="card-header card-header-border-bottom">
											<h2>اضافة واجهه</h2>
										</div>
										<div class="card-body">
											<form method="post"  enctype="multipart/form-data" action="admin_banner/add_bann">
                      <div class="form-group">
													<label for="category_name"> العنوان</label>
													<input class="form-control" type="text" id="banner_title" name="banner_title">
                          <input type="text" class="form-control"  placeholder="" name="banner_added_date" hidden="hidden" readonly required value="<?php echo date('y-m-d'); ?>"><input type="text" class="form-control"  placeholder="" name="banner_status" hidden="hidden" readonly required value="null">
												</div>
                        <div class="form-group">
                          <label for="category_name"> الصورة</label>
                          <div class="form-input">
                             <label for="file-ip-1" class="xx">
                               <img id="file-ip-1-preview" >
                               <button type="button" class="ion-android-cancel" onclick="myImgRemoveFunctionOne()" ></button>
                             </label>
													  <input class="form-control www" accept="image/*" type="file" id="banner_title" name="banner_img" onchange="showPreviewOne(event);">
                          </div>
                        </div>
                        
          <!--for show and delete this image-->
       <script>
            function showPreviewOne(event)
            {
              if(event.target.files.length > 0)
              {
                let src = URL.createObjectURL(event.target.files[0]);
                let preview = document.getElementById("file-ip-1-preview");
                preview.src = src;
                preview.style.display = "block";
              } 
            }
            function myImgRemoveFunctionOne() 
            {
              document.getElementById("file-ip-1-preview").src= "";
              resetFile();
            }
            function resetFile() 
            { 
              const file = document.querySelector('.www'); 
              file.value =''; 
            } 
          </script>
          <!--for show and delete this image-->
                                                
                                            
          <div class="form-footer pt-4 pt-5 mt-4 border-top text-right">
													<button type="submit" class="btn btn-primary btn-default">اضافة واجهه </button>
													<a type="submit" class="btn btn-secondary btn-default " href="banner">الغاء</a>
          </div>
                                                
											</form>
										</div>
									</div>

									

									
												


        </div>

<?php include'footer.php';?>
