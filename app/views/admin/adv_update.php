<?php include"header.php";?>

   <div class="content-wrapper">
     <div class="content">							
	   <div class="row">
		<div class="col-lg-8">
		  <div class="card card-default">
			<div class="card-header card-header-border-bottom">
				<h2>Update advertisement</h2>
			</div>
			<div class="card-body">
			   <form method="post" action="admin_adv/update" enctype="multipart/form-data">
				 <?php
                    $rows=$data['advertisements'];
				    foreach($rows as $row)
					{        
                 ?>
								<div class="form-group">
									<input value="<?php echo $row->adds_id;?>" class="form-control" type="text" id="adds_id" name="adds_id" hidden="hidden">
								</div>
							<div class="form-group">
								<label for="adds_name">advertisement Name:</label>
                                
								<input  value="<?php echo $row->adds_name;?>" class="form-control" type="text" id="adds_name" name="adds_name">
                            </div>
                           
                           
                           
							<div style="float:right; padding-right:300px"><img src="<?php echo '../../'.$row->adds_img;?>" width=100px hight=80px></div>
                            <div class="form-group">
								<label for="product_main_image">advertisement image:</label>
								<input type="file" value="<?php echo $row->adds_img;?>"  class="form-control-file" id="adds_img" name="adds_img">
								print_r(<?php echo $row->adds_img;?>)
								
							</div>
                            <div class="form-group">
													<label for="place_in_home">Place in home:</label>
													<input class="form-control" value="<?php echo $row->place_in_home;?>" type="text" id="place_in_home" name="place_in_home">
												</div>
                            <!-- <div class="form-group">
													<label for="category_parent">Place in home:</label>
													<select class="form-control" id="place_in_home">
														<option value=1>Active</option>
														<option value=0>No-active</option>
													</select>
                            </div>			 -->
						
                           
						
                            

							


                                               
				<?php 
					}
                ?>
                                                

                                                <div class="form-footer pt-4 pt-5 mt-4 border-top">
													<button type="submit" class="btn btn-primary btn-default">Update advertisement</button>
													<button type="submit" class="btn btn-secondary btn-default">Cancel</button>
                                                </div>
                                                
											</form>
										</div>
									</div>

									

									
												


        </div>
<?php include"footer.php";?>
