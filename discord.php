<?php
require './vendor/autoload.php';

# Including all the required scripts for demo
require "./includes/config.php";
require "./includes/functions.php";
?>

<html>

<head>
    <title>Demo - Discord Oauth</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="assets/favicon.png">
</head>

<body>
<header>
			<?php
            $ok = $oauth2->loadToken();
            if ($ok !== true) {
                echo $oauth2->startRedirection([$scopes]);
            } else {
                echo '<a href="includes/logout.php"><button class="log-in">LOGOUT</button></a>';
                $user = $oauth2->getUserInformation();
                if (array_key_exists("code", $user)) {
                    exit("An error occured: " . $user["message"]);
                }
            }
            ?>
</header>
<h1 class="text-center">PROOF OF CONCEPT WORK FOR THE LOGIN PAGE, EVERYTHING SEEN HERE IS ONLY SHOWN TO YOU AND NOTHING IS SAVED.</h1>
<div class="bg-dark pb-5">
    <h2 class="wh"> User Details :</h2>
    <p class="textt"> Name : <?php echo $user['username'] . '#' . $user['discriminator']; ?></p>
    <p class="textt"> ID : <?php echo $user['id']; ?></p>
    <?php
    if (isset($user['email'])) {
        echo '<p class="textt"> Email: ' . $user['email'] . '</p>';
    }
    ?>
    <?php $extention = is_animated($user['avatar']); ?>
    <?php echo '<p class="textt"> Profile Picture : <img src="https://cdn.discordapp.com/avatars/' . $user['id'] . '/' . $user['avatar'] . $extention . '"/></p>' ?>
    <br>

    <h2 class="wh"> User Guilds :</h2>
    <table border="1">
        <tr>
            <th class="textt">NAME</th>
            <th class="textt">ID</th>
            <th class="textt">SERVER ICON</th>
        </tr>
        <?php
        $guilds = $oauth2->getGuildsInformation();
        foreach ($guilds as $guild) {
            echo '<tr><td class="textt">';
            echo $guild['name'];
            echo "</td>";
            echo '<td class="textt">';
            echo $guild['id'];
            echo "</td>";
            echo '<td class="textt">';
            if ($guild['icon']) {
                $extention = is_animated($guild['icon']);
                echo "<img src='https://cdn.discordapp.com/icons/" . $guild['id'] . "/" . $guild['icon'] . $extention . "'/>";
            }
            echo "</td>";
            echo "</tr>";
        }
        ?>
    </table>
</div>
</body>
</html>