<?php
require $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';
require $_SERVER['DOCUMENT_ROOT'] . "/includes/functions.php";
require $_SERVER['DOCUMENT_ROOT'] . "/includes/config.php";
if (is_session_started() === FALSE) {
    session_start();
}
?>
