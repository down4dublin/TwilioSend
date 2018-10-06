<?php
echo ("getsms page ");
// Update the path below to your autoload.php,
require_once 'vendor/autoload.php';

use Twilio\Rest\Client;

$sid    = "AC1ba67ccf30ea2fe309901290ea6937e3";//Put your own credentials
$token =  "e1d0f772142d3e7acd08fd2ead3af7f7";
$twilio = new Client($sid, $token);

$message = $twilio->messages
    ->create("+16312526048", 
        array(
            "from" => "+16312526048", 
            "body" => "Hello from Damina Townes CS 643 Fall 2018"
        )
    );

print($message->sid);
?>