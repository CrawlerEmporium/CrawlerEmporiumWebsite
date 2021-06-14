<?php
require $_SERVER['DOCUMENT_ROOT'] . "/includes/loads.php";

try  {
    $authorizationLink = $request->getAuthorizationUrl(); // Generate Authorization link
    redirect($authorizationLink); // redirects to auth link
} catch (Exception $e) {
    die("Error : " . $e->getMessage()); // Die to errors
}
?>