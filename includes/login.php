<?php
require '../vendor/autoload.php';

# Including all the required scripts for demo
require "../includes/config.php";
require "../includes/functions.php";
?>

<?php

echo $oauth2->startRedirection([$scopes]);

?>