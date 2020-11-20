
<?php include'header.php'; 

?>
<section class="contact">
	


<div class="container "><br>
  <?php  
$do = isset($_GET['do']);
if($do==contact){
if(isset($_POST['btn-send']))
    {
       $UserName = $_POST['UName'];
       $Email = $_POST['Email'];
       $Msg = $_POST['msg'];

       if(empty($UserName) || empty($Email) || empty($Msg))
       {
           header('location:contact?error');
       }
       else
       {
           $to = "sd1.alwajeeh1@";

           if(mail($to,$Subject,$Msg,$Email))
           {
               echo"pp";
               header("location:contact?success");
           }
       }
    }
    else
    {
                       echo"phhhhhhhhhhhp";

     header("location:contact");
    }

}
?>
    <div class="row">
        <div class="col-md-6 col-sm-12">
            </br>
  </br>
            <img class="ahood" alt="image" src="app/assets/img/contact-us-concept-landing-page_52683-12759.jpg"/>
        </div> 
         <div class="col-md-6 col-sm-12 ">
               <div class="">
                   <h2 class=" cont-h1"> تواصل معنا</h2>
                   <?php 
      $Msg = "";
      if(isset($_GET['error']))
      {
          $Msg = " من فضلك املإ الفراغ ";
          echo '<div class="alert alert-danger">'.$Msg.'</div>';
      }

      if(isset($_GET['success']))
      {
          $Msg = " تم ارسال رسالتك ";
          echo '<div class="alert alert-success">'.$Msg.'</div>';
      }
  
  ?>
  </br>
                <form  class="text-right" role="form" action="?do=contact"  method="POST">
						<div class="form-group col-sm-12" style="float:right;">
						 <label class="log-lab">الاسم </label>
              <input type="text" name="UName" value="" class="form-control text-right input-cont"   >   
            </div>
            <div class="form-group col-sm-12" style="float:right;"> 
                <label class="log-lab">البريد الالكتروني </label>
                <input type="email"  name="Email" class="form-control text-right input-cont" value="" >   
            </div>
                      <div class="form-group col-sm-12" style="float:right;" >
			  				<label for ="description" class="log-lab">  رسالتك الينا</label>
			  			 	<textarea type="text" class="form-control text-right input-cont" id="description" name="msg"  style="height: 6.1em;"></textarea>
			  			</div>
			  			<div class="form-group" style="float:left; padding:3px 20px" >
			  				<button type="submit" class="btn log-cont"  name="btn-send" ><i class="ion-ios-paperplane" ></i> ارسال الرسالة </button>
			  			</div>
			  			
          
				</form>
			</div>
		</div> 
	</div>
</div>

<?php include'footer.php'; ?>