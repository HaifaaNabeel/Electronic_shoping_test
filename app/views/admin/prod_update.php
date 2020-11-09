<?php include"header.php";?>
<style>
.form-input .xx {display:block;width:150px;height:auto;max-height:100px;;
            border-radius:10px;cursor:pointer;}
.form-input img {width:150px;height:110px;margin:2px;}
.ion-android-cancel{position: relative;bottom: 114px;left: 70%;font-size: 2.5em;outline: none;
            margin:5px 8px;color: red;}
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
                  
                  <!----><input type="text"  name="product_name" id="search-input" class="form-control" placeholder="ابحث هنا"
                    autofocus autocomplete="off" />
                    <button type="submit" name="search" value="search" id="search-btn" class="btn btn-flat" >
                    <i class="mdi mdi-magnify"></i> بحث 
                  </button>
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
                    //print_r($rows);
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
                <option value=<?php echo $row->product_is_offer;?>><?php echo $row->product_is_offer;?></option>
									<option value=0>No</option>
									<option value=1>Yes</option>
                           		</select>
							</div>
							<div class="form-group">
								<label for="product_details">Product offer percent</label>
								<select class="form-control" name="product_offer_percent" id="product_offer_percent">
                <option value=<?php echo $row->product_offer_percent;?>><?php echo $row->product_offer_percent;?></option>
									<option value=0>No</option>
									<option value=1>Yes</option>
                           		</select>
							</div>
							<div class="form-group">
								<label for="product_details">Price after discount</label>
                <input class="form-control" value="<?php echo $row->product_price_after_discount;?>" type="text" name="product_price_after_discount" id="product_price_after_discount">
							</div>
							<div class="form-group">
								<label for="product_details">Product has Gift</label>
								<select class="form-control" name="product_is_gift" id="product_is_offer">
                  <option value=<?php echo $row->product_is_gift;?>><?php echo $row->product_is_gift;?></option>
                  <option value=0>No</option>
									<option value=1>Yes</option>
                  </select>
              </div>
              <?php //echo $row->product_main_image; ?>
							<div class="form-group">
								<label for="product_details"> Gift Product </label>
								<select class="form-control" name="gift_id" id="gift_id">
                <option value=<?php echo $row->gift_id;?>>.....</option>  
								<?php 
											$rows2=$data['products1'];
                       foreach($rows2 as $row1){
                           echo "
                          <option value=$row1->Product_id>$row1->product_name</option>
															   ";
															}
                                         ?>
                           		</select>
							</div>

              <!--<div class="form-group">
								<label for="product_main_image">Product image:</label>
								<input type="file" value="<?php echo $row->product_main_image;?>"  class="form-control-file" id="product_main_image" name="product_main_image">
								print_r(<?php echo $row->product_main_image;?>)
              </div>-->
              

              <div class="form-group">
								<label for="product_main_image">Product image:</label>
                <div class="form-input">
                  <label for="file-ip-1" class="xx">
                      <img id="file-ip-1-preview" src="../../<?php echo $row->product_main_image;?>">
                      <button type="button" class="ion-android-cancel" onclick="myImgRemoveFunctionOne()" ></button>
                  </label>
                   <input type="file" class="form-control-file www" value="<?php echo $row->product_main_image;?>" name="product_main_image" id="file-ip-1" accept="image/*" onchange="showPreviewOne(event);">
                </div>
            </div>
          <!--for show and delete this image-->
       <script>
            function showPreviewOne(event){
              if(event.target.files.length > 0){
                let src = URL.createObjectURL(event.target.files[0]);
                let preview = document.getElementById("file-ip-1-preview");
                preview.src = src;
                preview.style.display = "block";
              } 
            }
            function myImgRemoveFunctionOne() {
              document.getElementById("file-ip-1-preview").src = "";
              resetFile();
            }
        function resetFile() { 
            const file = document.querySelector('.www'); 
            file.value = ''; 
        } 
          </script>
          <!--for show and delete this image-->

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
