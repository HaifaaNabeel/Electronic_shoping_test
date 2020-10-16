
<style>
    /*Contact sectiom*/
.content-header{
  font-family: 'Oleo Script', cursive;
  color:#fcc500;
  font-size: 45px;
}

.section-content{
  text-align: center; 

}
#contact{
    
font-family: 'Teko', sans-serif;
  padding-top: 60px;
  width: 97%;
  width: 100vw;
  height: 550px;
  background: #3a6185; /* fallback for old browsers */
  background: -webkit-linear-gradient(to left,  rgb(20, 21, 134) , rgb(178, 54, 133)); /* Chrome 10-25, Safari 5.1-6 */
  background: linear-gradient(to left, rgb(20, 21, 134) , rgb(178, 54, 133)); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    color : #fff;    
}
.contact-section{
  padding-top: 40px;
}
.contact-section .col-md-6{
  width: 50%;
}

.form-line{
  border-right: 1px solid #B29999;
}

.form-group{
  margin-top: 10px;
}
.form-control{
  font-size: 1.3em;
  color: #080808;
}
textarea.form-control {
    height: 135px;
   /* margin-top: px;*/
}

.submit{
  font-size: 1.1em;
  float: right;
  width: 150px;
  background-color: transparent;
  color: #fff;

}

</style>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<?php include'header.php'; ?>

    <link href="https://fonts.googleapis.com/css?family=Oleo+Script:400,700" rel="stylesheet">
   	<link href="https://fonts.googleapis.com/css?family=Teko:400,700" rel="stylesheet">
   	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  
       <style>
       .form-control{font-size: 1.3em;color: #080808;}
       .text-labe{font-size: 1.3em;}
       
    </style>


<slider style="top: -56px;">
  <div class="layer1"></div>   
<div id="demo" class="carousel slide" data-ride="carousel">
 <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
    <li data-target="#demo" data-slide-to="3"></li>
  </ul>
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="app/assets/img/accessories_galaxy-note20_s.jpg" alt="Los Angeles" >
        <div class="carousel-caption animated fadeInLeft " style="animation-delay:2s;">
    <h3>Los Angeles</h3>
    <p>We had such a great time in LA!</p>
  </div>
    </div>
    
    <!-- /.Third slide -->
    <div class="carousel-item">
      <img src="app/assets/img/banner_galaxy-a8.png" alt="Chicago" >
           <div class="carousel-caption animated fadeInLeft " style="animation-delay:2s;">
    <h3>Los Angeles</h3>
    <p>We had such a great time in LA!</p>
  </div>
    </div>
    <div class="carousel-item">
      <img src="app/assets/img/banner_galaxy-note8.png" alt="New York">
        <div class="carousel-caption animated zoomIn " style="animation-delay:2s;">
    <h3>Los Angeles</h3>
    <p>We had such a great time in LA!</p>
  </div>
    </div>
      
  </div>
  
</div>
    </slider>   



<section id="contact" class="container-fluid">
			<div class="section-content container">
				<h1 class="section-header">Keep <span class="content-header wow fadeIn " data-wow-delay="0.2s" data-wow-duration="2s"> Touch</span> with <span class="content-header wow fadeIn " data-wow-delay="0.2s" data-wow-duration="2s">WepDev</span></h1>
				<h3>Lorem Ipsum is simply dummy text of the printing and typesetting industry</h3>
			</div>
			<div class="contact-section">
			<div class="container">
				<form style="" action="" method="POST">
					<div class="col-md-6 form-line col-xs-6">
			  			<div class="form-group">
			  				<label for="exampleInputUsername" class="text-labe">Your name</label>
					    	<input type="text" class="form-control" id="" placeholder=" Enter Name">
				  		</div>
				  		<div class="form-group">
					    	<label for="exampleInputEmail" class="text-labe">Email Address</label>
					    	<input type="email" class="form-control" id="exampleInputEmail" placeholder=" Enter Email ">
					  	</div>	
					  	<div class="form-group">
					    	<label for="countery" class="text-labe"> Countery.</label>
					    	<input type="countery" class="form-control" id="countery" placeholder=" Enter Countery ">
			  			</div>
			  		</div>
			  		<div class="col-md-6 col-xs-6">
			  			<div class="form-group">
			  				<label for ="description" class="text-labe">  Message</label>
			  			 	<textarea  class="form-control" id="description" placeholder="Enter Your Message" style="height: 6.1em;"></textarea>
			  			</div>
			  			<div>
			  				<button type="button" class="btn btn-default submit" style="font-size: 1.1em;color: #fff;"><i class="fa fa-paper-plane" aria-hidden="true"></i>  Send Message</button>
			  			</div>
			  			
					</div>
				</form>
			</div>
		</section>

<?php include'footer.php'; ?>