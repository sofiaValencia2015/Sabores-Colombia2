<?php

//start session on web page
session_start();

//config.php

//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('947201008132-9pp3222nmje6tp4bhqgqr4v09bt4bsl1.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('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');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('http://localhost:3000/test-login-sofia/login-register/login-register/SABORES%20COLOMBIA/pantallaInicio.php');

// to get the email and profile 
$google_client->addScope('email');

$google_client->addScope('profile');

?>