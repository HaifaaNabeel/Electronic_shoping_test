<?php include"header.php";?>

        <div class="content-wrapper">
          <div class="content">							<div class="row">
								<div class="col-lg-8">
									<div class="card card-default">
										<div class="card-header card-header-border-bottom">
											<h2>Update Product</h2>
										</div>
										<div class="card-body">
											<form method="post" action="admin_categoryController/add">
				
												<div class="form-group">
													<label for="product_name">Product Name:</label>
													<input class="form-control" type="text" id="product_name" name="product_name">
                                                </div>
                                                <form method="post" action="admin_categoryController/add">
				
												<div class="form-group">
													<label for="product_price">Price:</label>
													<input class="form-control" type="text" id="product_price" name="product_price">
                                                </div>
                                                
                                                <div class="form-group">
													<label for="product_Quantity">Quantity:</label>
													<input class="form-control" type="text" id="product_Quantity" name="product_Quantity">
                                                </div>

                                                <div class="form-group">
													<label for="product_main_image">Product image:</label>
													<input type="file" class="form-control-file" id="product_main_image" name="product_main_image">
												</div>
                                                
                                                <div class="form-group">
													<label for="product_details">Product details:</label>
													<textarea class="form-control" id="product_details" rows="3" name="product_details"></textarea>
												</div>
												
                                                <div class="col-12 col-md-9">
														<label class="control control-checkbox">Active
															<input type="checkbox" name="product_is_active" />
															<div class="control-indicator"></div>
														</label>
													</div>
                                                
                                                <div class="form-group">
													<label for="category_id">Category:</label>
													<select class="form-control" id="id">
														<option value=0>Parent</option>
                            <?php

                            
                            ?>
													</select>
                                                </div>

                                               
                                                

                                                <div class="form-footer pt-4 pt-5 mt-4 border-top">
													<button type="submit" class="btn btn-primary btn-default">Update Product</button>
													<button type="submit" class="btn btn-secondary btn-default">Cancel</button>
                                                </div>
                                                
											</form>
										</div>
									</div>

									

									
												


        </div>
<?php include"footer.php";?>
