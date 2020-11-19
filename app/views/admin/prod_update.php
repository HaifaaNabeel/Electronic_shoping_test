<?php include"header.php";?>
<style>
.form-input .xx {display:block;width:150px;height:auto;max-height:100px;;
            border-radius:10px;cursor:pointer;}
.form-input img {width:150px;height:110px;margin:2px;}
.ion-android-cancel{font-size: 2.5em;outline: none;
  margin:5px 8px;margin-top:-3em;color: black;position: static;background-color:white;;border-radius:55%}
.ion-android-cancel::after{color:green;font-weight:900;border-radius: 8px;cursor:pointer;}
</style>
<div class="page-wrapper">
                  <!-- Header -->
                  <header class="main-header " id="header" style="background-color:white;border:1px solid;">
            <nav class="navbar navbar-static-top navbar-expand-lg" >
              <!-- Sidebar toggle button -->
              <button id="sidebar-toggler" class="sidebar-toggle">
                <span class="sr-only">Toggle navigation</span>
              </button>
              <!-- search form -->
              <div class="search-form d-none d-lg-inline-block" style="background-color:white;border:1px solid;">
                  <form method="post" action="search_result">
                <div class="input-group">
                  
                  <!----><input type="text"  name="product_name" id="search-input" class="form-control" placeholder="ابحث هنا"
                    autofocus autocomplete="off" style=" width:48em;"/>
                    <button type="submit" name="search" value="search" id="search-btn" class="btn btn-flat" style="background-color:rgb(230, 223, 223);">
                    <i class="mdi mdi-magnify"></i> بحث 
                  </button>
                    </form>
                </div>
              
              </div>

              <div class="navbar-right " style="background-color:white;border:1px solid;">
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
				<h2> تعديل المنتج </h2>
			</div>
			<div class="card-body">
			   <form method="post" action="admin_prod/update" enctype="multipart/form-data">
				 <?php
                    $rows=$data['products'];
                    //print_r($rows);
				    foreach($rows as $row)
					{        
                 ?>
								<div class="form-group">
									<input value="<?php echo $row->Product_id;?>" class="form-control" type="text" id="Product_id" name="Product_id" hidden="hidden">
								</div>
							<div class="form-group">
								<label for="product_name">اسم المنتج :</label>
								<input  value="<?php echo $row->product_name;?>" class="form-control" type="text" id="product_name" name="product_name">
                            </div>
							<div class="form-group">
								<label for="product_english_name">اسم المنتج باللغة الانجليزية :</label>
								<input value="<?php echo $row->product_english_name;?>" class="form-control" type="text" id="product_english_name" name="product_english_name">
                            </div>				
							<div class="form-group">
								<label for="product_price">السعر بالريال اليمني :</label>
								<input value="<?php echo $row->product_price;?>" class="form-control" type="text" id="product_price" name="product_price">
                            </div>
                                                
                            <div class="form-group">
								<label for="product_Quantity">الكمية :</label>
								<input value="<?php echo $row->product_Quantity;?>"  class="form-control" type="text" id="product_Quantity" name="product_Quantity">
                            </div>
							
							<div class="form-group">
								<label for="product_details">تفاصيل المنتج :</label>
								<textarea value="<?php echo $row->product_details;?>"  class="form-control" id="product_details" rows="3" name="product_details">
								<?php echo $row->product_details;?>
							   </textarea>
							</div>

							<div class="form-group">
								<label for="product_details">يمتلك المنتج عرض : </label>
								<select class="form-control" name="product_is_offer" id="product_is_offer">
                <option value=<?php echo $row->product_is_offer;?>><?php  if( $row->product_is_offer==1)echo "يمتلك";else echo 'لا يمتلك';;?></option>
									<option value=0>لا يمتلك </option>
									<option value=1>يمتلك </option>
                           		</select>
							</div>
							<div class="form-group">
								<label for="product_details">يمتلك المنتج تخفيض بالسعر :</label>
								<select class="form-control" name="product_offer_percent" id="product_offer_percent">
                <option value=<?php echo $row->product_offer_percent;?>><?php if( $row->product_offer_percent==1)echo "يمتلك";else echo 'لا يمتلك';?></option>
									<option value=0>لا يمتلك </option>
									<!--<option value=1>يمتلك </option>-->
                           		</select>
							</div>
							<div class="form-group">
								<label for="product_details">السعر بعد التخفيض :</label>
                <input class="form-control" value="<?php echo $row->product_price_after_discount;?>" type="text" name="product_price_after_discount" id="product_price_after_discount" readonly>
							</div>
							<div class="form-group">
								<label for="product_details">يمتلك المنتج هدية </label>
								<select class="form-control" name="product_is_gift" id="product_is_gift">
                  <option value=<?php echo $row->product_is_gift;?>><?php if( $row->product_is_gift==1)echo "يمتلك";else echo 'لا يمتلك';?></option>
                  <option value=0>لا يمتلك </option>
									 <!--<option value=1>يمتلك </option>-->
                  </select>
              </div>
              <?php //echo $row->product_main_image; ?>
							<div class="form-group">
								<label for="product_details"> هدية المنتج : </label>
								<select class="form-control" name="gift_id" id="gift_id" disabled>
                <!--<option value=<?php echo $row->gift_id;?>>.....</option> -->
                <?php 
                     $rows2=$data['products1'];
                     $has_gift=0;
                     foreach($rows2 as $row1){
                          if($row1->Product_id == $row->gift_id  )
                          {echo "<option value=$row->gift_id>$row1->product_name</option>";
                            $has_gift=1;
                          }
                          else 
                          continue;
                     }
                      ?>
                <?php 
                echo' <option value=0>لا يمتلك هدية </option>';
											$rows2=$data['products1'];
                       foreach($rows2 as $row1){
                           echo "
                          <option value=$row1->Product_id>$row1->product_name</option>
															   ";
															}
                                         ?>
                           		</select>
              </div>
              
              <script>
                 var has_percent = '<option value=0> لا يمتلك </option> <option value=1> يمتلك </option>';
                 var has_gift = '<option value=0> لا يمتلك </option> <option value=1> يمتلك </option>';

                 var has_offer = document.getElementById("product_is_offer");
                 var is_gift = document.getElementById("product_is_gift");
                 var is_present = document.getElementById("product_offer_percent");
                 var percent_price=document.getElementById('product_price_after_discount');
                 var gift_prod=document.getElementById('gift_id');
                 var price=document.getElementById('product_price');
                 
                 /////////////////////// on onload
                 has_offer.addEventListener("onload",function()
                 {
                   if (has_offer.value == "1") 
                   {
                    is_gift.innerHTML = has_gift;
                    is_present.innerHTML= has_percent;
                    //percent_price.removeAttribute('readonly');
                   }
                   
                   else if(has_offer.value == "0") 
                    {
                      is_gift.innerHTML = '<option value=0>...</option>';
                      is_present.innerHTML= '<option value=0>...</option>';
                      percent_price.value = '';
                      percent_price.setAttribute('readonly', true);
                      gift_prod.value = 0;
                      gift_prod.setAttribute('disabled', true);
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
                 /////////////////// change the offer
                 has_offer.addEventListener("change",function()
                 {
                   if (has_offer.value == "1") 
                   {
                    is_gift.innerHTML = has_gift;
                    is_present.innerHTML= has_percent;
                    //percent_price.removeAttribute('readonly');
                   }
                   
                   else if(has_offer.value == "0") 
                    {
                      is_gift.innerHTML = '<option value=0>...</option>';
                      is_present.innerHTML= '<option value=0>...</option>';
                      percent_price.value = '';
                      percent_price.setAttribute('readonly', true);
                      gift_prod.value = 0;
                      gift_prod.setAttribute('disabled', true);
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
                  
                  /////////////////// change the present 
                  is_present.addEventListener("change",function()
                 {
                  if (is_present.value == "1") 
                   {
                    percent_price.removeAttribute('readonly');
                   }
                   
                   else 
                    {
                      percent_price.value =price.value;
                      percent_price.setAttribute('readonly', true);
                    }
                 });
                 /////////////////// change the gift 
                  is_gift.addEventListener("change",function()
                  {
                    if (is_gift.value == "1") 
                    {
                      gift_prod.removeAttribute('disabled');
                    }
                    else 
                    {
                      gift_prod.value = 0;
                      gift_prod.setAttribute('disabled', true);
                    }
                  });
              </script>
                
                
              

              <div class="form-group">
								<label for="product_main_image">صورة المنتج الاساسية :</label>
                <div class="form-input">
                  <label for="file-ip-1" class="xx">
                      <img id="file-ip-1-preview" src="../../<?php echo $row->product_main_image;?>">
                      <button type="button" class="ion-android-cancel" onclick="myImgRemoveFunctionOne()" id="cancel_b"></button>
                  </label>
                   <input type="file" class="form-control-file www" value="<?php echo $row->product_main_image;?>" name="product_main_image" id="file-ip-1" accept="image/*" onchange="showPreviewOne(event);">
                </div>
            </div>
          <!--for show and delete this image-->
          <script>
            function showPreviewOne(event){
              if(event.target.files.length > 0){
                let src = URL.createObjectURL(event.target.files[0]);
                let preview = document.getElementById("file-ip-1-preview");
                let cancel_b=document.getElementById("cancel_b");
                preview.src = src;
                preview.style.display = "block";
                cancel_b.removeAttribute('hidden');
              } 
            }
            function myImgRemoveFunctionOne() {
              document.getElementById("file-ip-1-preview").src = "";
              resetFile();
              cancel_b.setAttribute('hidden', true);
            }
        function resetFile() { 
            const file = document.querySelector('.www'); 
            file.value = ''; 
        } 
          </script>
          <!--for show and delete this image-->

							<!--<div class="form-group">
								<label for="product_branch_images">Product images</label>
								<input value="<?php echo $row->product_branch_images;?>" type="file"  class="dropzone form-control-file" multiple id="product_branch_images" name="product_branch_images[]">
							       print_r(<?php echo $row->product_branch_images;?>)
              </div>-->
              
                <!-- Multiple images preview in browser-->
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<div class="form-group" style="position: static;">
  <label for="product_branch_image">صور المنتج الفرعية :</label>
  <input type="file"  value="<?php echo $row->product_branch_images;?>" style="position: static;" class="dropzone wwww form-control-file"  multiple accept="image/*" id="gallery-photo-add" name="product_branch_images[]" >  
<?php
$count=0;
 $row1=explode(',',$row->product_branch_images);
 echo '<div class="gallery" id="gallery" style="margin-top:-7.2em;margin-right:3em;position: static;" height="4em">';

 for($i=0; $i<sizeof($row1)-1; $i++){
   //echo $i;
   if($count==0){
  echo '<img class="imgdiv" width="50" style="margin-right:1em" src="../../'.$row1[$i].'">';
} else
continue;
}
echo '</div>'; $count=0;
 ?>
<button type="button" class="ion-android-cancel" onclick="myImgRemoveFunctionMore()" style=";" hidden></button>
  <br><br><br><br><br><br>
</div>
<script>
////////////////////// start/////////////////////
$(function() {
var imagesPreview = function(input, placeToInsertImagePreview) {
if (input.files) {
var filesAmount = input.files.length;
for (i = 0; i < filesAmount; i++) {
  var reader = new FileReader();  <?php $count=1; ?>
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
})
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
                
                <!--<option value=<?php echo $row->category_id ;?>> <?php echo $row->category_id; ?> </option>-->
                <?php 
                     $rows2=$data['categories_parent'];
                     foreach($rows2 as $row1){
                          if($row1->category_id == $row->category_id  )
                          {echo "<option value=$row->category_id>$row1->category_name</option>";
                          }
                          else 
                          continue;
                     }
                      
											$rows3=$data['categories_parent'];
                                               foreach($rows3 as $row3){
                                                if($row3->category_id != $row->category_id )
                                                {echo "
                                                  <option value=$row3->category_id>$row3->category_name</option>
                              ";}
                                                else
                                                   {continue;}
															}
                                     ?>
                                </select>
                            </div>

                            <input type="text"  value="1" name="admin_who_add" hidden="hidden" readonly required value="<?php echo $row->admin_who_add;?>">

                                               
				<?php 
					}
                ?>
                   <div class="form-footer pt-4 pt-5 mt-4 border-top text-right">
													<button type="submit" class="btn btn-primary btn-default">تعديل المنتج </button>
													<button type="submit" class="btn btn-secondary btn-default">الغاء</button>
                                                </div>
                                                
											</form>
										</div>
									</div>

									

									
												


        </div>
<?php include"footer.php";?>
