<?php
require $_SERVER['DOCUMENT_ROOT'] . "/includes/loads.php";
$title = "Server Index";

if (!isset($_COOKIE['Access_token'])) {
    $code = $_GET['code'];
    $tokenRequest = $request->exchangeCode('authorization_code', $code); // Returns array
    $authToken = $tokenRequest['access_token'];
} else {
    $authToken = $_COOKIE['Access_token'];
}

redirect("../servers/index.php");
?>