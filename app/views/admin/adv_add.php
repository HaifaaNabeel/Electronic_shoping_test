<?php include'header.php';?>

        <div class="content-wrapper">
          <div class="content">							
		     <div class="row">
				<div class="col-lg-8">
					<div class="card card-default">
						<div class="card-header card-header-border-bottom">
							<h2>Add New Advertisement</h2>
						</div>
						<div class="card-body">
						  <form method="post" action="../admin_adv/add" enctype="multipart/form-data">
				
						  <div class="form-group">
								<label for="adds_name">Advertisement Name:</label>
								<input class="form-control" type="text" id="product_name" name="adds_name">
                            </div>

                            <div class="form-group">
								<label for="adds_img">Advertisement image:</label>
								<input type="file" class="form-control-file" id="adds_img" name="adds_img">
							</div>

					

							<div class="form-group">
								<label for="place_in_home">place_in_home</label>
								<input class="form-control" type="text" id="place_in_home" name="place_in_home">
                            </div>
                                                
                       

                           
                        
                         

							<input type="text" class="form-control"  placeholder="" name="date" hidden="hidden" readonly required value="<?php echo date('y-m-d'); ?>">
                          

                            <div class="form-footer pt-4 pt-5 mt-4 border-top">
								<button type="submit" class="btn btn-primary btn-default">Add Advertisement</button>
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
