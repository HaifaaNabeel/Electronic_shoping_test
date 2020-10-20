<?php include"header.php";?>

   <div class="content-wrapper">
     <div class="content">							
	   <div class="row">
		<div class="col-lg-8">
		  <div class="card card-default">
			<div class="card-header card-header-border-bottom">
				<h2>Update Product</h2>
			</div>
			<div class="card-body">
			   <form method="post" action="admin_prod/update">
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
								<textarea value="<?php echo $row->product_details;?>"  class="form-control" id="product_details" rows="3" name="product_details"></textarea>
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

                            <div class="form-group">
								<label for="product_main_image">Product image:</label>
								<input  value="<?php echo $row->product_main_image;?>" type="file" class="form-control-file" id="product_main_image" name="product_main_image">
							</div>

							<div class="form-group">
								<label for="product_main_image">Product images</label>
								<input value="<?php echo $row->product_branch_images;?>" type="file"  class="dropzone form-control-file" multiple id="product_branch_images"name="product_branch_images">
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
