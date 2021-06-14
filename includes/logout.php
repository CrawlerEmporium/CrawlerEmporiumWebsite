<?php

require $_SERVER['DOCUMENT_ROOT'] . "/includes/functions.php";

# Starting the session
session_start();

# Closing the session and deleting all values associated with the session
session_destroy();

unset($_COOKIE['Access_token']);
setcookie('Access_token', null, -1, '/');

# Redirecting the user back to login page
redirect("../index.php");
?>