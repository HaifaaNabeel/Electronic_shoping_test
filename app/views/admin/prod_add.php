<?php include'header.php';?>
<style>
.form-input .xx {display:block;width:150px;height:auto;max-height:100px;;
            border-radius:10px;cursor:pointer;}
.form-input img {width:150px;height:110px;margin:2px;}
.ion-android-cancel{font-size: 2.5em;outline: none;
            margin:5px 8px;margin-top:-3em;color: red;position: static}
.ion-android-cancel::after{color:green;font-weight:900;border-radius: 8px;cursor:pointer;}
</style>
<script data-require="jquery" data-semver="3.1.1" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="script.js"></script>
<div class="page-wrapper">
                  <!-- Header -->
                  <header class="main-header " id="header">
            <nav class="navbar navbar-static-top navbar-expand-lg">
              <!-- Sidebar toggle button -->
              <button id="sidebar-toggler" class="sidebar-toggle">
                <span class="sr-only">Toggle navigation</span>
              </button>
              <!-- search form -->
              <div class="search-form d-none d-lg-inline-block">
                  <form method="post" action="search_result">
                <div class="input-group">
                  
                  <!----><input type="text"  name="product_name" id="search-input" class="form-control" placeholder="ابحث هنا"
                    autofocus autocomplete="off" />
                    <button type="submit" name="search" value="search" id="search-btn" class="btn btn-flat" >
                    <i class="mdi mdi-magnify"></i> بحث 
                  </button>
                    </form>
                </div>
              
              </div>

              <div class="navbar-right ">
                <ul class="nav navbar-nav">
                 
                  <li class="dropdown notifications-menu" style="display:none">
                    <button class="dropdown-toggle" data-toggle="dropdown">
                      <i class="mdi mdi-bell-outline"></i>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-right">
                      <li class="dropdown-header">You have 5 notifications</li>
                      <li>
                        <a href="#">
                          <i class="mdi mdi-account-plus"></i> New user registered
                          <span class=" font-size-12 d-inline-block float-right"><i class="mdi mdi-clock-outline"></i> 10 AM</span>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="mdi mdi-account-remove"></i> User deleted
                          <span class=" font-size-12 d-inline-block float-right"><i class="mdi mdi-clock-outline"></i> 07 AM</span>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="mdi mdi-chart-areaspline"></i> Sales report is ready
                          <span class=" font-size-12 d-inline-block float-right"><i class="mdi mdi-clock-outline"></i> 12 PM</span>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="mdi mdi-account-supervisor"></i> New client
                          <span class=" font-size-12 d-inline-block float-right"><i class="mdi mdi-clock-outline"></i> 10 AM</span>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="mdi mdi-server-network-off"></i> Server overloaded
                          <span class=" font-size-12 d-inline-block float-right"><i class="mdi mdi-clock-outline"></i> 05 AM</span>
                        </a>
                      </li>
                      <li class="dropdown-footer">
                        <a class="text-center" href="#"> View All </a>
                      </li>
                    </ul>
                  </li>
                  <!-- User Account -->
                  <li class="dropdown user-menu">
                    <button href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                    <?php $rows=$data['user']; 
                      //print_r($rows);
                         foreach ($rows as $row){
                      ?>
                      <img src="../../app/assets/admin/img/user/u5.jpg" class="user-image" alt="User Image" />
                      <span class="d-none d-lg-inline-block"><?php echo  $row->user_name; ?></span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-right">
                      <!-- User image -->
                      <li class="dropdown-header">
                      
                        <img src="../../app/assets/admin/img/user/u5.jpg" class="img-circle" alt="User Image" />
                        <div class="d-inline-block">
                          <?php echo  $row->user_name.' <small class="pt-1">'.$row->user_email.'</small>';
                        }?>
                        </div>
                      </li>

                      
                      <li class="dropdown-footer">
                        <a href="../../logout"> <i class="mdi mdi-logout"></i> تسجيل الخروج </a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </div>
            </nav>


          </header> 


<!--////////////////////////////////end  header///////////////////////////////-->


        <div class="content-wrapper">
          <div class="content">							
		     <div class="row">
				<div class="col-lg-11">
					<div class="card card-default">
						<div class="card-header card-header-border-bottom">
							<h2>اضافة منتج جديد </h2>
						</div>
						<div class="card-body">
						  <form method="post" action="../admin_prod/add_product" enctype="multipart/form-data">
				
						  <div class="form-group">
								<label for="product_name">اسم المنتج :</label>
								<input class="form-control" type="text" id="product_name" name="product_name">
                            </div>
							<div class="form-group">
								<label for="product_english_name">اسم المنتج باللغة الانجليزية :</label>
								<input class="form-control" type="text" id="product_english_name" name="product_english_name">
                            </div>				
							<div class="form-group">
								<label for="product_price">السعر بالريال اليمني </label>
								<input class="form-control" type="text" id="product_price" name="product_price">
                            </div>
                                                
                            <div class="form-group">
								<label for="product_Quantity">الكمية :</label>
								<input class="form-control" type="text" id="product_Quantity" name="product_Quantity">
                            </div>
							
							<div class="form-group">
								<label for="product_details">تفاصيل المنتج : </label>
								<textarea class="form-control" id="product_details" rows="3" name="product_details"></textarea>
							</div>

							<div class="form-group">
								<label for="product_details">يمتلك المنتج عرض :</label>
								<select class="form-control" name="product_is_offer" id="product_is_offer">
                <option value=0>.....</option>
                <option value=0>لا يمتلك </option>
								<option value=1>يمتلك </option>
                           		</select>
							</div>
							<div class="form-group">
								<label for="product_details">يمتلك المنتج تخفيض في السعر :</label>
								<select class="form-control" name="product_offer_percent" id="product_offer_percent">
									<option value=0>.....</option>
									<!--<option value=1>يمتلك </option>-->
                           		</select>
							</div>
							<div class="form-group">
								<label for="product_details">السعر بعد التخفيض :</label>
								<input class="form-control" type="text" name="product_price_after_discount" id="product_price_after_discount" readonly>
							</div>
							<div class="form-group">
								<label for="product_details">يمتلك المنتج هدية :</label>
								<select class="form-control" name="product_is_gift" id="product_is_gift">
									<option value=0>...</option>
									<!--<option value=1>يمتلك </option>-->
                           		</select>
							</div>
							<div class="form-group">
								<label for="product_details"> هدية المنتج  </label>
								<select class="form-control" name="gift_id" id="gift_id" disabled>
                   <option value=0> لا يمتلك هدية  </option>
                   <?php 
											$rows=$data['products1'];
                       foreach($rows as $row){
                           echo "
                          <option value=$row->Product_id>$row->product_name</option>
															   ";
															}
                                         ?>
                           		</select>
              </div>
              
              <script>
                 var has_percent = '<option value=0> لا يمتلك </option> <option value=1> يمتلك </option>';
                 var has_gift = '<option value=0> لا يمتلك </option> <option value=1> يمتلك </option>';

                 //var gifts=<?php 	$rows=$data['products1'];foreach($rows as $row){echo "<option value=$row->Product_id>$row->product_name</option>";}?>;

                 var has_offer = document.getElementById("product_is_offer");
                 var is_gift = document.getElementById("product_is_gift");
                 var is_present = document.getElementById("product_offer_percent");
                 var percent_price=document.getElementById('product_price_after_discount');
                 var gift_prod=document.getElementById('gift_id')
                 
                 has_offer.addEventListener("change",function()
                 {
                   if (has_offer.value == "1") 
                   {
                    is_gift.innerHTML = has_gift;
                    is_present.innerHTML= has_percent;
                    //percent_price.removeAttribute('readonly');
                   }
                   
                   else 
                    {
                      is_gift.innerHTML = '<option value=0>...</option>';
                      is_present.innerHTML= '<option value=0>...</option>';
                      percent_price.value = '';
                      percent_price.setAttribute('readonly', true);
                      gift_prod.value = 0;
                      gift_prod.setAttribute('disabled', true);
                    }
                  });
                  
                  is_present.addEventListener("change",function()
                 {
                  if (is_present.value == "1") 
                   {
                    percent_price.removeAttribute('readonly');
                   }
                   
                   else 
                    {
                      percent_price.value = '';
                      percent_price.setAttribute('readonly', true);
                    }
                 });
                  is_gift.addEventListener("change",function()
                  {
                    if (is_gift.value == "1") 
                    {
                      gift_prod.removeAttribute('disabled');
                      //gift_prod.innerHTML=gifts;
                    }
                    else 
                    {
                      //gift_prod.innerHTML= '<option value=0>لا يمتلك هدية </option>';
                      gift_prod.value = 0;
                      gift_prod.setAttribute('disabled', true);
                    }
                  });
              </script>



              <div class="form-group">
								<label for="product_main_image">صورة المنتج الاساسية :</label>
                <div class="form-input">
                  <label for="file-ip-1" class="xx">
                      <img id="file-ip-1-preview" >
                      <button type="button" class="ion-android-cancel" onclick="myImgRemoveFunctionOne()" ></button>
                  </label>
                   <input type="file" class="form-control-file www" name="product_main_image" id="file-ip-1" accept="image/*" onchange="showPreviewOne(event);">
                </div>
            </div>
          <!--for show and delete this image-->
       <script>
            function showPreviewOne(event){
              if(event.target.files.length > 0){
                let src = URL.createObjectURL(event.target.files[0]);
                let preview = document.getElementById("file-ip-1-preview");
                preview.src = src;
                preview.style.display = "block";
              } 
            }
            function myImgRemoveFunctionOne() {
              document.getElementById("file-ip-1-preview").src = "";
              resetFile();
            }
        function resetFile() { 
            const file = document.querySelector('.www'); 
            file.value = ''; 
        } 
          </script>
          <!--for show and delete this image-->

          <!-- Multiple images preview in browser-->
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

							<div class="form-group" style="position: static;">
								<label for="product_branch_image">صور المنتج الفرعية :</label>
								<input type="file" style="position: static;" class="dropzone wwww form-control-file"  multiple accept="image/*" id="gallery-photo-add" name="product_branch_images[]" >
                <div class="gallery" id="gallery" style="margin-top:-6em;margin-right:3em;position: static;" height="4em"></div>
                <button type="button" class="ion-android-cancel" onclick="myImgRemoveFunctionMore()" style="margin-top:-.5em;"></button>
                <br><br><br><br><br><br>
              </div>
              <script>
              ////////////////////// start/////////////////////
   $(function() {
      var imagesPreview = function(input, placeToInsertImagePreview) {
        if (input.files) {
            var filesAmount = input.files.length;
            for (i = 0; i < filesAmount; i++) {
                var reader = new FileReader();
                reader.onload = function(event) {
                    $($.parseHTML('<img class="imgdiv" width="50" style="margin-right:1em">')).attr('src', event.target.result).appendTo(placeToInsertImagePreview);
                }
                reader.readAsDataURL(input.files[i]);
            }
        }
    };
 
    $('#gallery-photo-add').on('change', function() {
      $('.gallery').empty();
        imagesPreview(this, 'div.gallery');
    });
});
function myImgRemoveFunctionMore() {
  $('.gallery').empty();
    resetFile2();
           }
        function resetFile2() { 
            const file = document.querySelector('.wwww'); 
            file.value = ''; 
        } 
        ////////////////////end /////////////////
</script>





							<div class="form-group">
								<label for="category_parent">حالة المنتج :</label>
								<select class="form-control" name="product_is_active" id="product_is_active">
									<option value=1>متوفر </option>
									<option value=0>غير متوفر </option>
                           		</select>
                            </div>
                        
                            <div class="form-group">
								<label for="category_id">الصنف :</label>
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

							<input type="text" class="form-control"  placeholder="" name="product_date_added" hidden="hidden" readonly required value="<?php echo date('y-m-d'); ?>">
                            <input type="text"  value="1" name="admin_who_add" hidden="hidden" readonly required >

                            <div class="form-footer pt-4 pt-5 mt-4 border-top text-right">
								<button type="submit" class="btn btn-primary btn-default">اضافة منتج </button>
								<button type="submit" class="btn btn-secondary btn-default">الغاء </button>
                            </div>
                                                
						</form>
					</div>
				</div>

			</div>
		</div>
	<div>
</div>

                <?php include'footer.php';?>
