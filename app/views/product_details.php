<?php include'header.php';?>
 </br></br>
 <link rel="stylesheet" href="app/assets/css/jquery.exzoom.css"> 
 <link rel="stylesheet" href="app/assets/css/styleProduct_de.css">
 <link rel="stylesheet" href="app/assets/css/zoom.css">
 <script src="app/assets/js/jquery.exzoom.js"></script> 
 <script src="app/assets/js/script.js"></script> 
 <style>
    
    .small-img-row{
        display: flex;
        justify-content: space-between;
        float: right;
    }
    
    .small-img-col{
        flex-basis: 24%;
        cursor: pointer;
    
    }
    
    h1,h4,h3,.det{
    text-align: right;
    }
    
    label{
        float: right;
    }
    
    .handle-counter{
        float: right;
    }
    
    .small-img:active {
        border: 1px #ffc700 solid;
        
        opacity: 50%;
    }
    
    
    
    .sh_img .small-img-row .small-img-col img{
        
        height: 100px;
        width: 100px;
    
    }
    
    h1,h4,h3,.det{
    text-align: right;
    }
    
    
    .sh_img img{
    height: 600px;
    }
    
    .sh_img .thump-btn {
        border:none;
    }
    
    .sh_img .thump-btn:active{
        border: 1px #ffc700 solid;
        
        opacity: 50%;
    }

    </style>
 <body>

		<!-- ggggggggggggggggggggggggggggg -->
		<div class="container-fluid sh_col" dir="rtl" >
	        <div class="heading-section">
	            <h2 style="color:#F27523;">تفاصيل المنتج</h2>
			</div>
			<?php
				 $row=$data['products'];
				 foreach($row as $rows){
					 
                  
                    echo'
							
                    <div class="row">
                        <div class="col-md-6 sh_img">
                            <img src="'.$rows->product_main_image.'" width="100%" id="productImg">
                            <br>
                            <br>
                            <div class="small-img-row">
                            <div class="small-img-col">
                            <button class="thump-btn"><img src="'.$rows->product_main_image.'"  class="small-img">
                                </div>'?>
                            <?php
                             $branch_img=explode(',',$rows->product_branch_images);
                             for($i=0; $i<sizeof($branch_img)-1; $i++)
                             echo 
                             ' <div class="small-img-col">
                             <button class="thump-btn"> <img src="'.$branch_img[$i].'"  class="small-img">
                                </div>'?>
                                
					<?php
					echo'    
                </div>
            </div>
            <div class="col-md-6">
            <h1>'.$rows->product_name.'</h1>
            <h4 style="font-weight: 900;"><span>$</span>'.$rows->product_price.'</h4>
                
                <br>
                <p class="det">'.$rows->product_details.'</p>
                <br>
                
                <div class="product-count mb-4">
                <h4>الكمية</h4>'
                ;?>
											
				<div class="handle-counter">
				<button
					onclick="this.parentNode.querySelector(&#39;input[type=number]&#39;).stepDown()"
					class="counter-minus btn"><span
						class="ion-android-remove"></span></button>
<input id="id<?php echo $rows->Product_id; ?>"  name="product_id" value="<?php echo $rows->Product_id; ?>" hidden="hidden">
<input id="id<?php echo $rows->Product_id; ?>"  name="price" value="<?php echo $rows->product_price; ?>" hidden="hidden">
<input id="user<?php echo $_GLOBALS['U']; ?>"  name="user" value="<?php echo $_GLOBALS['U']; ?>" hidden="hidden">
				<input class="quantity text-center" min="1" id="qty" name="qty"
					value="1" type="number">
				<button
					onclick="this.parentNode.querySelector(&#39;input[type=number]&#39;).stepUp()"
					class="counter-plus btn "><span
						class="ion-android-add"></span></button>

                        <br>
                        <br>
                        <br>
<input id="pname<?php echo $rows->Product_id; ?>"  name="product_name" value="<?php $rows->product_name;?>" hidden="hidden">
<input id="pimg<?php echo $rows->Product_id; ?>"  name="pimg" value="<?php echo $rows->product_main_image;?>" hidden="hidden">
<input id="user<?php echo $_GLOBALS['U']; ?>"  name="user" value="<?php echo $_GLOBALS['U']; ?>" hidden="hidden">
<input id="price<?php echo $rows->Product_id; ?>"  name="price" value="<?php echo $rows->product_price ?>" hidden="hidden">   
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
<hr>




<div class="col-md-12 mt-4 " dir="rtl" >
			<ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
				<li class="nav-item">
					<a class="nav-link lead active" role="tab" data-toggle="tab" href="#tabDescription">وصف</a>
				</li>
				<li class="nav-item">
					<a class="nav-link lead" role="tab" data-toggle="tab" href="#tabSpecification">مواصفات</a>
				</li>
				
			</ul>
			<div class="tab-content" id="myTabContent">
				<div class="tab-pane pt-4 active" role="tabpanel" id="tabDescription">
					<?php
                    echo '<p class="det">'.$rows->product_details.'</p>'
                    ?>
				</div>
				<div class="tab-pane pt-4" dir="rtl" role="tabpanel" id="tabSpecification">
					<table class="table table-bordered">
						<thead>
							<tr>
								<td colspan="2"><strong>الذاكره</strong></td>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>test 1</td>
								<td>16GB</td>
							</tr>
						</tbody>
						<thead>
							<tr>
								<td colspan="2"><strong>المعالج</strong></td>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>No. of Cores</td>
								<td>4</td>
							</tr>
						</tbody>
					</table>
				</div>
	
			
			
			
			</div>
		</div>
        </div>

        
       
       <!--      منتجات مشابهه       -->
        
        

       
       
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
$.post("add/add_cart/addtocart",{product_id:$("#id<?php echo $rows->Product_id; ?>").val(),user:$("#user<?php  echo $_GLOBALS['U']; ?>").val(),price:$("#price<?php echo $rows->Product_id; ?>").val(),qty:$("#qty").val(),pname:$("#pname<?php echo $rows->Product_id; ?>").val(),pimg:$("#pimg<?php echo $rows->Product_id; ?>").val(),add:$("#cart").val()},function(data){
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
                             


                            
			
		
	
                             <script>
    var productImg=document.getElementById("productImg");
    var smallImg=document.getElementsByClassName("small-img");

    smallImg[0].onclick=function(){
        productImg.src = smallImg[0].src;
    }
    smallImg[1].onclick=function(){
        productImg.src = smallImg[1].src;
        
    }
    smallImg[2].onclick=function(){
        productImg.src = smallImg[2].src;
        
    }
    smallImg[3].onclick=function(){
        productImg.src = smallImg[3].src;
        
    }
    smallImg[4].onclick=function(){
        productImg.src = smallImg[4].src;
        
    }
    smallImg[5].onclick=function(){
        productImg.src = smallImg[5].src;
        
    }
    smallImg[6].onclick=function(){
        productImg.src = smallImg[6].src;
        
    }
    smallImg[7].onclick=function(){
        productImg.src = smallImg[7].src;
        
    }


</script>


<script>

$('small-img').click(function () {
    $(this).css('border','1px solid black');
});
</script>
	<!-- partial -->
  <script  src="./script.js"></script>


</body>

<?php include'footer.php';?>









