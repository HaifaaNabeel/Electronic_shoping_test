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
										  <li><img src="'.$rows->product_main_image.'"/></li>'?>
										  <?php
										   $branch_img=explode(',',$rows->product_branch_images);
										   for($i=0; $i<sizeof($branch_img)-2; $i++)
										   echo 
											'<li><img src="'.$branch_img[$i].'"/></li>
										   	
											'?>
											
										
											
										 <?php
										 echo' </ul>
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
												<div class="qtyplus ">+</div>
											</form><br>
											<!--<a href="cart?id=" class="round-black-btn">Add to Cart</a>-->
											';?>
           <!-- <button class="btn product_btn m-1 round-black-btn" onclick="favorite()" name="cart"><span class="ion-ios-cart-outline"></span></button>
                                            <button class="btn product_btn m-1 round-black-btn" onclick="favorite()" name="favorite"><span class="ion-android-favorite-outline"></span></button>
                                            <button class="btn product_btn m-1 round-black-btn" onclick="filter()"  name="filter"><span class="ion-ios-color-filter-outline"></span></button>-->
                    <input id="id<?php echo $rows->Product_id; ?>"  name="product_id" value="<?php echo $rows->Product_id; ?>" hidden="hidden">
                            <input id="qty"  name="qty" value="1" hidden="hidden">
                            <input id="user<?php echo $_GLOBALS['U']; ?>"  name="user" value="<?php echo $_GLOBALS['U']; ?>" hidden="hidden">
                        <button class="btn product_btn m-1" id="cart<?php echo $rows->Product_id; ?>" onclick="cart<?php echo $rows->Product_id;?>()"><span class="ion-ios-cart-outline"></span></button>
                        <button class="dcart btn product_btn m-1 "  id="dcart<?php echo $rows->Product_id; ?>" onclick="dcart<?php echo 
                                                $rows->Product_id;?>()"><span class="ion-ios-cart-outline"></span></button>
                        <button class=" btn product_btn m-1" id="favorit<?php echo $rows->Product_id; ?>" 
                                onclick="favoor<?php echo  $rows->Product_id; ?>()" name="favorite"><span class="ion-android-favorite-outline"></span></button>
                         <button class=" dcart btn product_btn m-1" id="dfavorite<?php echo $rows->Product_id; ?>" onclick="dfavoor<?php echo $rows->Product_id; ?>()" name="dfavorite"><span class="ion-android-favorite-outline"></span></button>
                     
                        <button class=" btn product_btn m-1" id="filter<?php echo $rows->Product_id; ?>" onclick="filter<?php echo $rows->Product_id; ?>()" name="filter"><span class="ion-ios-color-filter-outline"></span></button>
                         <button class=" dcart btn product_btn m-1" id="dfilter<?php echo $rows->Product_id; ?>" onclick="dfilter<?php echo $rows->Product_id; ?>()" name="dfilter"><span class="ion-ios-color-filter-outline"></span></button>
                       
										</div>
									</div>
								</div>
							</div>
 <script>
        
function filter<?php echo $rows->Product_id; ?>(){
    //  alert('hhhhh');
            document.getElementById('dfilter<?php echo $rows->Product_id;?>').style.display='inline-block';
       document.getElementById('filter<?php echo $rows->Product_id;?>').style.display='none';
          $.post("add/add_cart/addtofilter",{product_id:$("#id<?php echo $rows->Product_id; ?>").val(),user:$("#user<?php echo $_GLOBALS['U']; ?>").val(),qty:$("#qty").val()},function(data){
              var id='count3';
     var fi =document.getElementById(id).innerHTML;
             fi++
            document.getElementById(id).innerHTML = fi; 
           });
      }
        function dfilter<?php echo $rows->Product_id; ?>(){
    //  alert('hhhhh');
            document.getElementById('dfilter<?php echo $rows->Product_id;?>').style.display='none';
       document.getElementById('filter<?php echo $rows->Product_id;?>').style.display='inline-block';
          $.post("add/add_cart/deletefromfilter",{product_id:$("#id<?php echo $rows->Product_id; ?>").val(),user:$("#user<?php echo $_GLOBALS['U']; ?>").val(),qty:$("#qty").val()},function(data){
              var id='count3';
     var fi =document.getElementById(id).innerHTML;
             fi--
            document.getElementById(id).innerHTML = fi; 
           });
      }
function favoor<?php echo $rows->Product_id; ?>(){
    //  alert('hhhhh');
            document.getElementById('dfavorite<?php echo $rows->Product_id;?>').style.display='inline-block';
       document.getElementById('favorit<?php echo $rows->Product_id;?>').style.display='none';
          $.post("add/add_cart/addtofavorite",{product_id:$("#id<?php echo $rows->Product_id; ?>").val(),user:$("#user<?php echo $_GLOBALS['U']; ?>").val(),qty:$("#qty").val()},function(data){
              var id='count2';
     var fi =document.getElementById(id).innerHTML;
             fi++
            document.getElementById(id).innerHTML = fi; 
           });
      }
        function dfavoor<?php echo $rows->Product_id; ?>(){
    //  alert('hhhhh');
            document.getElementById('dfavorite<?php echo $rows->Product_id;?>').style.display='none';
       document.getElementById('favorit<?php echo $rows->Product_id;?>').style.display='inline-block';
          $.post("add/add_cart/deletefromfavorite",{product_id:$("#id<?php echo $rows->Product_id; ?>").val(),user:$("#user<?php echo $_GLOBALS['U']; ?>").val(),qty:$("#qty").val()},function(data){
              var id='count2';
     var fi =document.getElementById(id).innerHTML;
             fi--
            document.getElementById(id).innerHTML = fi; 
           });
      }
     function cart<?php echo $rows->Product_id;?>(){
        document.getElementById('cart<?php echo $rows->Product_id;?>').style.display='none';
        document.getElementById('dcart<?php echo $rows->Product_id;?>').style.display='inline-block';
$.post("add/add_cart/addtocart",{product_id:$("#id<?php echo $rows->Product_id; ?>").val(),user:$("#user<?php echo $_GLOBALS['U']; ?>").val(),qty:$("#qty").val(),add:$("#cart").val()},function(data){
              var id='count1';
     var fi =document.getElementById(id).innerHTML;
             fi++
            document.getElementById(id).innerHTML = fi; 
           });
    }
        function dcart<?php echo $rows->Product_id;?>(){
            document.getElementById('cart<?php echo $rows->Product_id;?>').style.display='inline-block';
        document.getElementById('dcart<?php echo $rows->Product_id;?>').style.display='none';
$.post("add/add_cart/deletefromcart",{product_id:$("#id<?php echo $rows->Product_id; ?>").val(),user:$("#user<?php echo $_GLOBALS['U']; ?>").val(),qty:$("#qty").val(),add:$("#dcart").val()},function(data){
              var id='count1';
     var fi =document.getElementById(id).innerHTML;
             fi--
            document.getElementById(id).innerHTML = fi; 
           });
    
    }
      
        
    </script>
<?php }
							 ?>
			
		</div>
	</div>
</div>	
			<div class="container ">
	       
	        <div class="row">
	        	<div class="col-md-12">
					<section>
					<br><br><br><br><br><br><br>
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




