
<?php include'header.php'; 

?>
   </br></br></br></br></br></br>
<section class="contact">
	


<div class="container ">
  <?php  
$do = isset($_GET['do']);
if($do==contact){
echo "llllllllllllllllllllllllllllllll";


}
?>
    <div class="row">
        <div class="col-md-6 col-sm-12">
            </br>
  </br>
            <img class="" width="100%" alt="image" src="app/assets/img/contact-us-concept-landing-page_52683-12759.jpg"/>
        </div> 
         <div class="col-md-6 col-sm-12 ">
               <div class="">
                   <h2 class="text-right" style="color: #221446;"> تواصل معنا</h2>
  </br>
                <form  class="text-right" role="form" action="?do=contact"  method="POST">
						<div class="form-group col-sm-12" style="float:right;">
						 <label class="log-lab">الاسم </label>
              <input type="text" name="name" value="" class="form-control text-right input-cont"   placeholder=" ادخل اسمك">   
            </div>
            <div class="form-group col-sm-12" style="float:right;"> 
                <label class="log-lab">البريد الالكتروني </label>
                <input type="email"  name="email" class="form-control text-right input-cont" value="" placeholder="ادخل بريدك  ">   
            </div>
                      <div class="form-group col-sm-12" style="float:right;" >
			  				<label for ="description" class="log-lab">  رسالتك الينا</label>
			  			 	<textarea type="text" class="form-control text-right input-cont" id="description" name="message" placeholder="اكتب ما تريد توصيله لنا " style="height: 6.1em;"></textarea>
			  			</div>
			  			<div class="form-group" style="float:left; padding:3px 20px" >
			  				<button type="submit" class="btn btn-default log-cont" ><i class="ion-ios-paperplane" ></i> ارسال الرسالة </button>
			  			</div>
			  			
          
				</form>
			</div>
		</div> 
	</div>
</div>

<?php include'footer.php'; ?>