<?php

/* foreach ($_POST as $key => $value) {
    echo($key . " => " . $value);
    echo("<br>");
} */
    
function checkActive($checkThis) {    
    $currentUrl = $_SERVER['PHP_SELF'];    
    $checkThis = "/momath/" . $checkThis . ".php";    
    if ($currentUrl == $checkThis) {
        echo("active");
    }   
}

function sendMail() {
    echo("Sending Mail");
}

function checkMessagePost() {
    $messageControl = array(
        'firstVisit' => 'block',
        'htmlMessage' => '',
        'name' => '',
        'email' => '',
        'message' => '',
        'human' => ''     
    );
    if (!$_POST) {        
        $messageControl['firstVisit'] = "none";
    }   elseif ($_POST['aName'] && $_POST['email'] && $_POST['message'] && ($_POST['human'] == strval(12)) ) {
        $subject = "Query from More Math website";
        $sent = mail($_POST['email'], $subject, $_POST['message']);
        echo($sent);
        $messageControl['htmlMessage'] .= 'Message sent succesfully, I will respond as soon as possible';
    }   else    {
        if (!$_POST['aName']) {
            $messageControl['htmlMessage'] .= "Please enter your name!<br>";
        }   else {
            $messageControl['name'] = $_POST['aName'];
        }      
        if (!$_POST['email']) {
            $messageControl['htmlMessage'] .= "Please enter your email!<br>";
        }   else {
            $messageControl['email'] = $_POST['email'];
        }   
        if (!$_POST['message']) {
            $messageControl['htmlMessage'] .= "Please enter a message!<br>";
        }   else {
            $messageControl['message'] = $_POST['message'];
        }
        if (!$_POST['human'] || $_POST['human'] != strval(12)) {
            $messageControl['htmlMessage'] .= "Check your math human!";
        } else {
            $messageControl['human'] = $_POST['human'];
        }   
    }   
    
    
    return $messageControl;
}
?>