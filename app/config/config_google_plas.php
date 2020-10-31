<?php

//config.php

//Include Google Client Library for PHP autoload file
require_once 'app/assets/vendorgoogle/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('91023194517-qf738s85m30skojlm7barlc9r1ug9kdj.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('99XcykUneG96MnmHEc4GUS0J');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('http://localhost/Electronic_shoping_test/login_google');

//
$google_client->addScope('email');

$google_client->addScope('profile');

//start session on web page
//session_start();

?>
