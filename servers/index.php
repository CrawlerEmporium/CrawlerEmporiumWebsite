<?php
require $_SERVER['DOCUMENT_ROOT'] . "/includes/loads.php";

if (isset($_COOKIE['Access_token'])) {
    $authToken = $_COOKIE['Access_token'];
} else {
    redirect("../includes/login.php");
}
$title = "Server Index";
?>

<html>

<head>
    <title>Demo - Discord Oauth</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="../assets/favicon.png">
</head>

<body>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/navigation.php'; ?>

<div class="jumbotron text-center bg-transparent">
    <h1 class="display-3 htext">
        <?php
        echo 'Welcome ' . $user['username'] . '';
        ?>
    </h1>
    <p class="lead ltext">
        Below are all the servers you are currently in.
    </p>
    <p class="ltext">
        Check their settings, and make the bots join your server with the click of a button!
    </p>
</div>

<div class="bg-dark pb-5">
    <div class="row d-flex justify-content-center card-columns cardds">
        <?php
        $guilds = $client['guilds'];
        foreach ($guilds as $guild) {
            if ($guild['icon'] != null) {
                $extention = is_animated($guild['icon']);
                $icon = "<img src='https://cdn.discordapp.com/icons/" . $guild['id'] . "/" . $guild['icon'] . $extention . "' class='mini-image ml-1' alt='' />";
            } else {
                $icon = " ";
            }
            ?>
            <div class="card text-white bg-dark mb-3">
                <a href="../servers/server.php" class="text-decoration-none text-white">
                    <div class="card-header text-center">
                        <?php
                        echo $icon;
                        echo $guild['name'];
                        ?>
                    </div>
                    <div class="card-body card-body-height">
                        <p class="card-text">
                            <?php
                            echo $guild['id'];
                            ?>
                        </p>
                    </div>
                </a>
            </div>
            <?php
        }
        ?>
    </div>
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