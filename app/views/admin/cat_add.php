<?php include'header.php';?>
 <div class="content-wrapper">
          <div class="content">							
              <div class="row">
								<div class="col-lg-8">
									<div class="card card-default">
										<div class="card-header card-header-border-bottom">
											<h2>Add New Category</h2>
										</div>
										<div class="card-body">
											<form method="post" action="admin_cat/add">
				
												<div class="form-group">
													<label for="category_name">Category Name:</label>
													<input class="form-control" type="text" id="category_name" name="category_name">
												</div>
                                                <div class="form-group">
													<label for="category_name">Category english Name:</label>
													<input class="form-control" type="text" id="category_name" name="category_english_name">
												</div>
												
                                                 <div class="form-group">
													<label for="category_parent">status</label>
													<select class="form-control" name="category_is_active" id="category_is_active">
														<option value=1>active</option>
														<option value=0>no-active</option>
                           				</select>
                                                </div>
                                               <div class="form-group">
													<label for="category_parent">Parent</label>
													<select class="form-control" name="category_parent">
														<option value=0>Parent</option>
                                                          <?php
                                                      $rows=$data['categories_parent'];

                                                      foreach($rows as $row){
                                                         echo "
                                                         <option value=$row->category_id>$row->category_name</option>
                                                               ";
                                                        }
                                                    ?>
                                                 </select>
                                                   <input type="text" class="form-control"  placeholder="" name="date_added" hidden="hidden" readonly required value="<?php echo date('y-m-d'); ?>">
                                                      <input type="text"  value="<?php echo $_SESSION['id'];?>" name="admin_who_added" hidden="hidden" readonly required >
                                                </div>

                                                <div class="form-footer pt-4 pt-5 mt-4 border-top">
													<button type="submit" class="btn btn-primary btn-default">Add Category</button>
													<a type="submit" class="btn btn-secondary btn-default" href="categories">Cancel</a>
                                                </div>
                                                
											</form>
										</div>
									</div>

									

									
												


        </div>

<?php include'footer.php';?>
