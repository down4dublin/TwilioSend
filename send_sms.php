<?php

// Update the path below to your autoload.php,
// see https://getcomposer.org/doc/01-basic-usage.md

require_once 'vendor/autoload.php';
use Twilio\Rest\Client;

// Find your Account Sid and Auth Token at twilio.com/console
$sid    = "AC1ba67ccf30ea2fe309901290ea6937e3";
$token  = "e1d0f772142d3e7acd08fd2ead3af7f7";
$twilio = new Client($sid, $token);

$message = $twilio->messages
->create("+16312526048", // to
    array(
        "body" => "Hello from Damina Townes CS 643 Fall 2018",
        "from" => "+12155443223"
    )
    );

print($message->sid);
?>
