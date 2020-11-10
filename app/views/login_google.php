<br><br><br><br><br><br>
<br><br><br><br><br><br>
<?php include'header.php';?>
<link rel="stylesheet" href= "app/assets/css/loginstyle.css">

<?php

//index.php

//Include Configuration File
include('app/config/config_google_plas.php');
$page=$_GET['page'];
$login_button = '';

//This $_GET["code"] variable value received after user has login into their Google Account redirct to PHP script then this variable value has been received
if(isset($_GET["code"]))
{
 //It will Attempt to exchange a code for an valid authentication token.
 $token = $google_client->fetchAccessTokenWithAuthCode($_GET["code"]);

 //This condition will check there is any error occur during geting authentication token. If there is no any error occur then it will execute if block of code/
 if(!isset($token['error']))
 {
  //Set the access token used for requests
  $google_client->setAccessToken($token['access_token']);

  //Store "access_token" value in $_SESSION variable for future use.
  $_SESSION['access_token'] = $token['access_token'];

  //Create Object of Google Service OAuth 2 class
  $google_service = new Google_Service_Oauth2($google_client);

  //Get user profile data from google
  $data = $google_service->userinfo->get();

  //Below you can find Get profile data and store into $_SESSION variable
  if(!empty($data['given_name']))
  {
   $_SESSION['user_first_name'] = $data['given_name'];
  }

  if(!empty($data['family_name']))
  {
   $_SESSION['user_last_name'] = $data['family_name'];
  }

  if(!empty($data['email']))
  {
   $_SESSION['user_email_address'] = $data['email'];
  }

  if(!empty($data['gender']))
  {
   $_SESSION['user_gender'] = $data['gender'];
  }

  if(!empty($data['picture']))
  {
   $_SESSION['user_image'] = $data['picture'];
  }
 }
}

//This is for check user has login into system by using Google account, if User not login into system then it will execute if block of code and make code for display Login link for Login using Google account.
if(!isset($_SESSION['access_token']))
{
 //Create a URL to obtain user authorization
 echo'<div class="row">
 <div class="col-md-4 "></div>
 <div class="col-md-4 ">
 <img src="app/assets/img/login_store_logos-2.png" width="100%">  
   
  <h3 align="center">سوف يتم تسجيل دخولك بحساب جوجل </h3>';
 $login_button = '<a href="'.$google_client->createAuthUrl().'" class="icoGoogle" title="Google +" style="font-size:5em;color:red"><i class="ion-social-google-outline"></i></a>';

}

?>
<html>
 <head>
 <div class="container">

 <?php
   if($login_button == '')
   {
    echo '<div class="panel-heading">Welcome User</div><div class="panel-body">';
    echo '<img src="'.$_SESSION["user_image"].'" class="img-responsive img-circle img-thumbnail" />';
    echo '<h3><b>Name :</b> '.$_SESSION['user_first_name'].' '.$_SESSION['user_last_name'].'</h3>';
    echo '<h3><b>Email :</b> '.$_SESSION['user_email_address'].'</h3>';
    $name=$_SESSION['user_first_name'].' '.$_SESSION['user_last_name'];
    //echo $name."   hyhhghghghghgh";
    $email=$_SESSION['user_email_address'];
    //echo '<h3><a href="logout.php">Logout</h3></div>';header()
    //echo '<meta http-equiv = "refresh" content = "05.5; url = http://localhost/Electronic_shoping_test/return_google?name="'.'name'.'" />';
    //echo '<meta http-equiv = "refresh" content = "05.5; url = http://localhost/Electronic_shoping_test/return_google?name="'.$name.' />';

    header('location:return_google?name='.$name.'&email='.$email.'&page='.$page);
   }
   else
   {
    echo '<div align="center">'.$login_button . '</div>';
   }
   ?>
   </div></div></div>

 </body>
</html>

<?php include'footer.php';?>
