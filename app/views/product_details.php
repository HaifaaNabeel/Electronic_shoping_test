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
	            <h2>Product Details</h2>
			</div>
			<div class="row mb-4">
				<div class="col-md-2">
			  <a href="#"><img src="" class="img-thumbnail p-0 border-0" /></a>
			</div>
				<div class="col-md-6">
					<div class="input-group input-group-lg">
						<input type="text" id="" name="" class="form-control" placeholder="What search?" />
						<select class="form-control form-control-lg rounded-0">
							<option>Categories</option>
							<option>Electronics</option>
							<option>Decoration</option>
							<option>Computers</option>
							<option>Sports</option>
						</select>
						<div class="input-group-append">
							<button class="btn btn-outline-secondary" type="button"><i class="fas fa-search"></i></button>
						</div>
					</div>
				</div>
				<div class="col-md-1">
					<button class="btn btn-outline-secondary btn-block btn-lg" type="button">
						<i class="fas fa-sync-alt"></i>
					</button>
				</div>
				<div class="col-md-1">
					<button class="btn btn-outline-secondary btn-block btn-lg" type="button">
						<i class="fas fa-heart"></i>
					</button>
				</div>
				<div class="col-md-2">
					<div class="dropdown">
						<button class="btn btn-outline-secondary btn-block btn-lg dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<i class="fas fa-shopping-bag"></i>
							<span>Cart</span>
						</button>
						</div>
						</div>
					</div>
					<br>
	        <div class="row mt-4">
	        	<div class="col-md-6 col-sm-6">
					<div class="exzoom" id="exzoom">
						<!-- Images -->
						<div class="exzoom_img_box" style="background:white">
						  <ul class='exzoom_img_ul'>
							<li><img src="app/assets/img/banner_gear-360.png"/></li>
							<li><img src="app/assets/img/banner_gear-360.png"/></li>
							<li><img src="app/assets/img/banner_gear-360.png"/></li>
							<li><img src="app/assets/img/banner_gear-360.png"/></li>
							<li><img src="app/assets/img/banner_gear-360.png"/></li>
							...
						  </ul>
						</div>
						<!-- Thumbnail Nav-->
						<div class="exzoom_nav"></div>
					   
					  </div>
					 
			
	        	</div>
	        	<div class="col-md-6 col-sm-6">
	        		<div class="product-dtl">
        				<div class="product-info">
		        			<div class="product-name"> Product Name</div>
		        			<div class="reviews-counter">
								<div class="rate">
								    <input type="radio" id="star5" name="rate" value="5" checked />
								    <label for="star5" title="text">5 stars</label>
								    <input type="radio" id="star4" name="rate" value="4" checked />
								    <label for="star4" title="text">4 stars</label>
								    <input type="radio" id="star3" name="rate" value="3" checked />
								    <label for="star3" title="text">3 stars</label>
								    <input type="radio" id="star2" name="rate" value="2" />
								    <label for="star2" title="text">2 stars</label>
								    <input type="radio" id="star1" name="rate" value="1" />
								    <label for="star1" title="text">1 star</label>
								  </div>
								<span>3 Reviews</span>
							</div>
		        			<div class="product-price-discount"><span>$39.00</span><span class="line-through">$29.00</span></div>
		        		</div>
	        			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
	        			
	        			<div class="product-count">
	        				<label for="size">Quantity</label>
	        				<form action="#" class="display-flex">
							    <div class="qtyminus">-</div>
							    <input type="text" name="quantity" value="1" class="qty">
							    <div class="qtyplus">+</div>
							</form>
							<a href="#" class="round-black-btn">Add to Cart</a>
							
	        			</div>
	        		</div>
	        	</div>
			</div>
		</div>
	</div>
</div>	
			<div class="container ">
	       
	        <div class="row">
	        	<div class="col-md-12">
					<section>
					<br><br><br><hr>
			<h1>dececrtion</h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

			
		
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