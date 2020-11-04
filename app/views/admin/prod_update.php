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


   <div class="content-wrapper">
     <div class="content">							
	   <div class="row">
		<div class="col-lg-8">
		  <div class="card card-default">
			<div class="card-header card-header-border-bottom">
				<h2>Update Product</h2>
			</div>
			<div class="card-body">
			   <form method="post" action="admin_prod/update" enctype="multipart/form-data">
				 <?php
                    $rows=$data['products'];
				    foreach($rows as $row)
					{        
                 ?>
								<div class="form-group">
									<input value="<?php echo $row->Product_id;?>" class="form-control" type="text" id="Product_id" name="Product_id" hidden="hidden">
								</div>
							<div class="form-group">
								<label for="product_name">Product Name:</label>
								<input  value="<?php echo $row->product_name;?>" class="form-control" type="text" id="product_name" name="product_name">
                            </div>
							<div class="form-group">
								<label for="product_english_name">Product English Name:</label>
								<input value="<?php echo $row->product_english_name;?>" class="form-control" type="text" id="product_english_name" name="product_english_name">
                            </div>				
							<div class="form-group">
								<label for="product_price">Price:</label>
								<input value="<?php echo $row->product_price;?>" class="form-control" type="text" id="product_price" name="product_price">
                            </div>
                                                
                            <div class="form-group">
								<label for="product_Quantity">Quantity:</label>
								<input value="<?php echo $row->product_Quantity;?>"  class="form-control" type="text" id="product_Quantity" name="product_Quantity">
                            </div>
							
							<div class="form-group">
								<label for="product_details">Product details:</label>
								<textarea value="<?php echo $row->product_details;?>"  class="form-control" id="product_details" rows="3" name="product_details">
								<?php echo $row->product_details;?>
							   </textarea>
							</div>

							<div class="form-group">
								<label for="product_details">Product is offer</label>
								<select class="form-control" name="product_is_offer" id="product_is_offer">
									<option value=0>No</option>
									<option value=1>Yes</option>
                           		</select>
							</div>
							<div class="form-group">
								<label for="product_details">Product offer percent</label>
								<select class="form-control" name="product_offer_percent" id="product_offer_percent">
									<option value=0>No</option>
									<option value=1>Yes</option>
                           		</select>
							</div>
							<div class="form-group">
								<label for="product_details">Price after discount</label>
								<select class="form-control" name="product_price_after_discount" id="product_price_after_discount">
									<option value=0>No</option>
									<option value=1>Yes</option>
                           		</select>
							</div>
							<div class="form-group">
								<label for="product_details">Product is Gift</label>
								<select class="form-control" name="product_is_gift" id="product_is_offer">
									<option value=0>No</option>
									<option value=1>Yes</option>
                           		</select>
							</div>
							<div class="form-group">
								<label for="product_details"> Gift Product </label>
								<select class="form-control" name="gift_id" id="gift_id">
									<option value=0>No</option>
									<option value=1>Yes</option>
                           		</select>
							</div>

							<div style="float:right; padding-right:300px"><img src="<?php echo '../../'.$row->product_main_image;?>" width=100px hight=80px></div>
                            <div class="form-group">
								<label for="product_main_image">Product image:</label>
								<input type="file" value="<?php echo $row->product_main_image;?>"  class="form-control-file" id="product_main_image" name="product_main_image">
								print_r(<?php echo $row->product_main_image;?>)
								
							</div>

							<div class="form-group">
								<label for="product_branch_images">Product images</label>
								<input value="<?php echo $row->product_branch_images;?>" type="file"  class="dropzone form-control-file" multiple id="product_branch_images" name="product_branch_images[]">
							       print_r(<?php echo $row->product_branch_images;?>)
							</div>

							<div class="form-group">
								<label for="category_parent">status</label>
								<select class="form-control" name="product_is_active" id="product_is_active">
									<option value=1>active</option>
									<option value=0>no-active</option>
                           		</select>
                            </div>
                        
                            <div class="form-group">
								<label for="category_id">Category:</label>
								<select class="form-control" name="category_id">
									  <?php 
											$rows=$data['categories_parent'];
                                               foreach($rows as $row){
                                                   echo "
                                                     <option value=$row->category_id>$row->category_name</option>
															   ";
															}
                                         ?>
                                </select>
                            </div>

                            <input type="text"  value="1" name="admin_who_add" hidden="hidden" readonly required value="<?php echo $row->admin_who_add;?>">

                                               
				<?php 
					}
                ?>
                                                

                                                <div class="form-footer pt-4 pt-5 mt-4 border-top">
													<button type="submit" class="btn btn-primary btn-default">Update Product</button>
													<button type="submit" class="btn btn-secondary btn-default">Cancel</button>
                                                </div>
                                                
											</form>
										</div>
									</div>

									

									
												


        </div>
<?php include"footer.php";?>
