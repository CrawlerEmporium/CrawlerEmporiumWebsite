<?php
require $_SERVER['DOCUMENT_ROOT'] . "/includes/loads.php";

if (isset($mongoDB)) {
    $db = $mongoDB->lookup->help;
}

$commands = $db->find(['bots' => '5e', "disabled" => null]);

$title = "5eCrawler";
$prefix = "!";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="../assets/favicon.png">
    <title>Crawler Emporium - <?php echo $title; ?></title>
</head>

<body>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/navigation.php'; ?>

<div class="jumbotron text-center bg-transparent">
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/commands.php'; ?>
</div>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="../js/main.js"></script>
</body>

</html>
