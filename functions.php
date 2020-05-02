<?php

/* foreach ($_SERVER as $key => $value) {
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
?>