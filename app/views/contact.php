
<?php include'header.php'; ?>

<section class="contact">
	<br> <br><br> <br>

<div class="container-fluid ">
    <div class="row">
        <div class="col-md-6 col-sm-12">
            </br>
  </br>
            <img class="" width="100%" alt="image" src="app/assets/img/contactus.png"/>
        </div> 
         <div class="col-md-6 col-sm-12 ">
               <div class="">
                  <h3 class="text-right" style="color: #000;"> تواصل معنا</h3>
  </br>
                <form  class="text-right" role="form" action=""  method="POST">
						<div class="form-group col-sm-12" style="float:right;">
						 <label class="text-labe">الاسم </label>
                          <input type="text" name="name" value="" class="form-control  rounded-0 p-3"   placeholder=" ادخل اسمك">   
                        </div>
                           <div class="form-group col-sm-12" style="float:right;"> 
                               <label class="text-labe">البريد الالكتروني </label>
  
                          <input type="email"  name="email" class="form-control text-right rounded-0 p-3" value="" placeholder="ادخل بريدك  ">   
                        </div>	   
					  	<!--<div class="form-group">
					    	<label for="countery" class="text-labe"> الدولة </label>
					    	<input type="countery" class="form-control" id="countery" placeholder=" ادخل اسم دولتك ">
						</div>-->
                      <div class="form-group col-sm-12" style="float:right;" >
			  				<label for ="description" class="text-labe">  رسالتك الينا</label>
			  			 	<textarea type="text" class="form-control text-right" id="description" name="message" placeholder="اكتب ما تريد توصيله لنا " style="height: 6.1em;"></textarea>
			  			</div>
			  			<div class="form-group" style="float:left; padding:3px 20px" >
			  				<button type="button" class="btn btn-default submit" ><i class="ion-ios-paperplane" ></i> ارسال الرسالة </button>
			  			</div>
			  			
          
				</form>
			</div>
		</div> 
	</div>
</div>
    </section>
    <br> <br>

<?php include'footer.php'; ?>