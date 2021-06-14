<?php
require $_SERVER['DOCUMENT_ROOT'] . "/includes/loads.php";
$title = "Crawler Emporium"
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="assets/favicon.png">
    <title><?php echo $title; ?></title>
</head>

<body>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/navigation.php'; ?>

<div class="jumbotron text-center bg-transparent">
    <h1 class="display-3 htext"><?php echo $title; ?></h1>
    <p class="lead ltext">
        All bots for your discord server, created by LordDusk
    </p>
    <p class="ltext">
        Slightly work-in-progress, but you can find invitation links and all commands for all my bots for now.
    </p>
    <a class="btn btn-dark" href="https://discord.gg/HEY6BWj">Join Support Server</a>
</div>

<div class="bg-dark pb-5">
    <div class="text-center">
        <h3 class="wh">Why pick the bots from <span class="Hbot">Crawler Emporium</span>?</h3>
    </div>
    <h5 class="text-center textt">We provide you the best features!</h5>
    <div class="row d-flex justify-content-center card-columns cardds">
        <div class="card text-white bg-dark mb-3 cards-width">
            <a href="./bots/5ecrawler.php" class="text-decoration-none text-white">
                <div class="card-header text-center"><img src="./assets/5eCrawler.png" class="mini-image" alt=""/>
                    5eCrawler
                </div>
                <div class="card-body card-body-height">
                    <p class="card-text">
                        A verified Discord bot, included in over 2000 server.
                        <br/><br/>
                        Which lets you easily and quickly lookup your D&D 5th edition (SRD Only) information, right inside Discord.
                    </p>
                </div>
            </a>
            <div class="card-footer text-center">
                <a class="btn btn-dark add_to_discord text-center" href="https://discordapp.com/oauth2/authorize?client_id=559331529378103317&scope=bot&permissions=536977472">Invite 5eCrawler</a>
            </div>
        </div>

        <div class="card text-white bg-dark mb-3 cards-width">
            <a href="./bots/discordcrawler.php" class="text-decoration-none text-white">
                <div class="card-header text-center"><img src="./assets/DiscordCrawler.png" class="mini-image" alt=""/>
                    DiscordCrawler
                </div>
                <div class="card-body card-body-height">
                    <p class="card-text">
                        Moderation tools<br/>
                        Anonymous reports for staff<br/>
                        Nudging of messages to channels<br/><br/>
                        And other cool features for your Discord server.
                    </p>
                </div>
            </a>
            <div class="card-footer text-center">
                <a class="btn btn-dark add_to_discord" href="https://discordapp.com/oauth2/authorize?client_id=602774912595263490&scope=bot&permissions=805412928">Invite DiscordCrawler </a>
            </div>
        </div>

        <div class="card text-white bg-dark mb-3 cards-width">
            <a href="./bots/issuecrawler.php" class="text-decoration-none text-white">
                <div class="card-header text-center"><img src="./assets/IssueCrawler.png" class="mini-image" alt=""/>
                    IssueCrawler
                </div>
                <div class="card-body card-body-height">
                    <p class="card-text">A fully featured issue and/or feature tracking for Discord, packed with features for you project!<br/><br/>Optionally linked to your Github Repo.</p>
                </div>
            </a>
            <div class="card-footer text-center">
                <a class="btn btn-dark add_to_discord" href="https://discord.com/oauth2/authorize?client_id=602779023151595546&scope=bot&permissions=388176=536977472">Invite IssueCrawler</a>
            </div>
        </div>
    </div>
</div>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="./js/main.js"></script>
</body>

</html>