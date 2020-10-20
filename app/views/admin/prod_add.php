<?php include'header.php';?>

        <div class="content-wrapper">
          <div class="content">							
		     <div class="row">
				<div class="col-lg-8">
					<div class="card card-default">
						<div class="card-header card-header-border-bottom">
							<h2>Add New Product</h2>
						</div>
						<div class="card-body">
						  <form method="post" action="./add_product">
				
						  <div class="form-group">
								<label for="product_name">Product Name:</label>
								<input class="form-control" type="text" id="product_name" name="product_name">
                            </div>
							<div class="form-group">
								<label for="product_english_name">Product English Name:</label>
								<input class="form-control" type="text" id="product_english_name" name="product_english_name">
                            </div>				
							<div class="form-group">
								<label for="product_price">Price:</label>
								<input class="form-control" type="text" id="product_price" name="product_price">
                            </div>
                                                
                            <div class="form-group">
								<label for="product_Quantity">Quantity:</label>
								<input class="form-control" type="text" id="product_Quantity" name="product_Quantity">
                            </div>
							
							<div class="form-group">
								<label for="product_details">Product details:</label>
								<textarea class="form-control" id="product_details" rows="3" name="product_details"></textarea>
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
								<input type="file" class="form-control-file" id="product_main_image" name="product_main_image">
							</div>

							<div class="form-group">
								<label for="product_main_image">Product images</label>
								<input type="file"  class="dropzone form-control-file" multiple id="product_branch_images"name="product_branch_images">
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
								  <option value=26>Parent</option>
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

							<input type="text" class="form-control"  placeholder="" name="product_date_added" hidden="hidden" readonly required value="<?php echo date('y-m-d'); ?>">
                            <input type="text"  value="1" name="admin_who_add" hidden="hidden" readonly required >

                            <div class="form-footer pt-4 pt-5 mt-4 border-top">
								<button type="submit" class="btn btn-primary btn-default">Add Product</button>
								<button type="submit" class="btn btn-secondary btn-default">Cancel</button>
                            </div>
                                                
						</form>
					</div>
				</div>

			</div>
		</div>
	<div>
</div>

                <?php include'footer.php';?>
