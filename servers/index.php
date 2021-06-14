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

<div class="bg-dark pb-5 pt-5">
    <?php
    $guilds = $client['guilds'];
    $column = 1;
    $row = true;
    foreach ($guilds as $guild) {
        if ($row) {
            echo '<div class="row d-flex justify-content-center card-columns mt-5 mb-5">';
            $row = false;
        }
        if ($guild['owner'] || $guild['permissions'] == 2147483647 || ($guild['permissions'] & 0x20) != 0) {
            $column++;
            if ($guild['icon'] != null) {
                $extention = is_animated($guild['icon']);
                $icon = "<img src='https://cdn.discordapp.com/icons/" . $guild['id'] . "/" . $guild['icon'] . $extention . "' class='mini-image mr-2' alt='' />";
            } else {
                $icon = "<img src='../assets/CrawlerEmporium.png' class='mini-image mr-2' alt='' />";
            }
            ?>
            <div class="card text-white bg-dark mb-3 cards-width">
                <a href="../servers/server.php?id=<?php echo $guild['id'] ?>" class="text-decoration-none text-white">
                    <div class="card-header text-center">
                        <?php
                        echo $icon;
                        echo $guild['name'];
                        ?>
                    </div>
                    <div class="card-body card-body-height">
                        <p class="card-text">
                        </p>
                    </div>
                    <div class="card-footer text-center">
                        <?php
                        echo "ID: " . $guild['id'];
                        ?>
                    </div>
                </a>
            </div>
            <?php
        }
        if ($column == 6) {
            echo '</div>';
            $row = true;
            $column = 1;
        } else {
            $row = false;
        }
    }
    ?>
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