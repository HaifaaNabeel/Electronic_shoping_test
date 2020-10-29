<?php include'header.php';?>
 </br></br>
 <link rel="stylesheet" href="app/assets/css/jquery.exzoom.css"> 
 <link rel="stylesheet" href="app/assets/css/styleProduct_de.css">
 <link rel="stylesheet" href="app/assets/css/zoom.css">
 <script src="app/assets/js/jquery.exzoom.js"></script> 
 <script src="app/assets/js/script.js"></script> 




 <body>

		<!-- ggggggggggggggggggggggggggggg -->
		<div class="container ">
	        <div class="heading-section">
	            <h2>تفاصيل المنتج</h2>
			</div>
			<?php
				 $row=$data['products'];
				 foreach($row as $rows){
					 
                    
                        
				  
                  
							echo'
							<div class="row mb-4">
								<div class="col-md-2">
							  <a href="#"><img src="" class="img-thumbnail p-0 border-0" /></a>
							</div>
								<div class="col-md-6">
									<div class="input-group input-group-lg">
										
										
										
									</div>
								</div>
								<div class="col-md-1">
									
								</div>
								<div class="col-md-1">
									
								</div>
								<div class="col-md-2">
									
										</div>
									</div>
									<br>
							<div class="row mt-4">
								<div class="col-md-6 col-sm-6">
									<div class="exzoom" id="exzoom"><br>
										<!-- Images -->
										<div class="exzoom_img_box" style="background:white">
										  <ul class="exzoom_img_ul">
											<li><img src="'.$rows->product_main_image.'"/></li>
											<li><img src="'.$rows->product_main_image.'"/></li>
											<li><img src="'.$rows->product_main_image.'"/></li>
											<li><img src="'.$rows->product_main_image.'"/></li>
											<li><img src="'.$rows->product_main_image.'"/></li>
											...
										  </ul> 
										</div><hr>
										<!-- Thumbnail Nav-->
										<div class="exzoom_nav"></div>
									   
									  </div>
									 
							
								</div>
								<div class="col-md-6 col-sm-6">
									<div class="product-dtl">
										<div class="product-info">
											<div class="product-name"> '.$rows->product_name.'</div>
											
											<div class="product-price-discount"><span>'.$rows->product_price.'</span><span class="line-through">$29.00</span></div>
										</div>
										<p>'.$rows->product_details.'</p>
										
										<div class="product-count">
											<label for="size">Quantity</label>
											<form action="#" class="display-flex">
												<div class="qtyminus">-</div>
												<input type="text" name="quantity" value="1" class="qty">
												<div class="qtyplus">+</div>
											</form>
											<!--<a href="cart?id='.$rows->Product_id.'" class="round-black-btn">Add to Cart</a>-->
											<button class="btn product_btn m-1 round-black-btn" onclick="favorite()" name="cart"><span class="ion-ios-cart-outline"></span></button>
                                            <button class="btn product_btn m-1 round-black-btn" onclick="favorite()" name="favorite"><span class="ion-android-favorite-outline"></span></button>
                                            <button class="btn product_btn m-1 round-black-btn" onclick="filter()"  name="filter"><span class="ion-ios-color-filter-outline"></span></button>
                    
										</div>
									</div>
								</div>
							</div>';}
							 ?>
			
		</div>
	</div>
</div>	
			<div class="container ">
	       
	        <div class="row">
	        	<div class="col-md-12">
					<section>
					<br><br><br><br><br><br><br>
			
		
		<!-- <div style="text-align:center;font-size:14px;padding-bottom:20px;">Get free icon packs for your next project at <a href="http://iiicons.in/" target="_blank" style="color:#ff5e63;font-weight:bold;">www.iiicons.in</a></div> -->
	</section>
	</div>
		</div>
		</div>
	
	
	<script type="text/javascript">
	 $(function(){
 
	   $("#exzoom").exzoom({
		 // options here
	   });
 
	 });
	</script>
	<!-- partial -->
  <script  src="./script.js"></script>

</body>

<?php include'footer.php';?>




