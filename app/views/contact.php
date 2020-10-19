
<?php include'header.php'; ?>

   	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  
       <style>
       .form-control{font-size: 1.5em;color: #080808;}
       .content-header{font-family: 'Oleo Script', cursive;color:#fcc500;font-size:.90em;}
       .section-content{text-align: center;}
       .contact-section .col-md-6{width:50%;}
       .form-group{margin-top: 10px;text-align: right;}
       .form-control{ font-size: 1.3em;color: #080808;text-align: right;}
    </style>
    <br><br><br><br>

<section id="contact" class="container-fluid">
			<div class="section-content container">
				<h1 class="section-header">  <span class="content-header wow fadeIn " data-wow-delay="0.2s" data-wow-duration="2s">WepDev</span> ابقى على   <span class="content-header wow fadeIn " data-wow-delay="0.2s" data-wow-duration="2s"> تواصل </span> معنا </h1>
			</div>
			<div class="contact-section">
			<div class="container">
				<form style="" action="" method="POST">
          <div class="row">
          <div class="col-md-6 col-sm-12">
          <img class="" width="100%"  alt="image" src="app/assets/img/contactus.png"/>
			  		</div>
			  		<div class="col-md-6 col-xs-6">
			  			<div class="form-group">
			  				<label for="exampleInputUsername" class="text-labe">الاسم </label>
					    	<input type="text" class="form-control" id="" placeholder=" ادخل اسمك ">
				  		</div>
				  		<div class="form-group">
					    	<label for="exampleInputEmail" class="text-labe">البريد الالكتروني </label>
					    	<input type="email" class="form-control" id="exampleInputEmail" placeholder=" ادخل بريدك ">
					  	</div>	
					  	<!--<div class="form-group">
					    	<label for="countery" class="text-labe"> الدولة </label>
					    	<input type="countery" class="form-control" id="countery" placeholder=" ادخل اسم دولتك ">
              </div>-->
              <div class="form-group">
			  				<label for ="description" class="text-labe">  رسالتك الينا</label>
			  			 	<textarea  class="form-control" id="description" placeholder="اكتب ما تريد توصيله لنا " style="height: 6.1em;"></textarea>
			  			</div>
			  			<div>
			  				<button type="button" class="btn btn-default submit" ><i class="fa fa-paper-plane" aria-hidden="true"></i> ارسال الرسالة </button>
			  			</div>
			  			
          </div>
        </div>
				</form>
			</div>
    </section>
    <br> <br>

<?php include'footer.php'; ?>