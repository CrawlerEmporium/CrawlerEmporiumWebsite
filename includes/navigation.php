<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid container">
        <a class="navbar-brand" href="../index.php">
            <?php
            if (isset($_COOKIE['Access_token'])) {
                $authToken = $_COOKIE['Access_token'];
                $client = $request->fetchData($authToken);
                $user = $client["identify"];
                $extention = is_animated($user['avatar']);
                echo '<img src="https://cdn.discordapp.com/avatars/' . $user['id'] . '/' . $user['avatar'] . $extention . '" class="rounded-circle mini-image"/>';
                $temp_title = $user['username'];
                echo '<span class="ml-2">' . $temp_title . '</span>';
            } else {
                if ($title != "Crawler Emporium") {
                    echo '<img src="../assets/' . $title . '.png" alt="" class="rounded-circle mini-image">';
                }
                echo '<span class="ml-2">' . $title . '</span>';
            }
            ?>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="../index.php">Home</a>
                </li>
                <?php
                if (isset($_COOKIE['Access_token'])) {
                    echo '<li class="nav-item">';
                    echo '<a class="nav-link" href="../servers/index.php">Manage Servers</a>';
                    echo '</li>';
                }
                ?>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="commandsdrop" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Commands </a>
                    <ul class="dropdown-menu bgn" aria-labelledby="commandsdrop">
                        <li><a class="dropdown-item text-muted font-weight-bold" href="../bots/5ecrawler.php">5eCrawler</a></li>
                        <li><a class="dropdown-item text-muted font-weight-bold" href="../bots/discordcrawler.php">DiscordCrawler</a></li>
                        <li><a class="dropdown-item text-muted font-weight-bold" href="../bots/issuecrawler.php">IssueCrawler</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="linksdrop" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Links
                    </a>
                    <ul class="dropdown-menu bgn" aria-labelledby="linksdrop">
                        <li><a class="dropdown-item text-muted font-weight-bold" href="https://discordapp.com/oauth2/authorize?client_id=559331529378103317&scope=bot&permissions=536977472" target="_blank">Invite 5eCrawler</a></li>
                        <li><a class="dropdown-item text-muted font-weight-bold" href="https://discordapp.com/oauth2/authorize?client_id=602774912595263490&scope=bot&permissions=805412928" target="_blank">Invite DiscordCrawler</a></li>
                        <li><a class="dropdown-item text-muted font-weight-bold" href="https://discord.com/oauth2/authorize?client_id=602779023151595546&scope=bot&permissions=388176=536977472" target="_blank">Invite IssueCrawler</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item text-muted font-weight-bold" href="https://discord.gg/HEY6BWj" target="_blank">Support Server</a></li>
                        <li><a class="dropdown-item text-muted font-weight-bold" href="https://www.patreon.com/LordDusk" target="_blank">Patreon</a></li>
                        <li><a class="dropdown-item text-muted font-weight-bold" href="https://github.com/CrawlerEmporium/" target="_blank">Github</a></li>
                    </ul>
                </li>
            </ul>
            <div class="d-flex ml-auto" id="headerlogin">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item" class="list-unstyled">
                        <?php
                        if (isset($_COOKIE['Access_token'])) {
                            echo '<a href="../includes/logout.php"><button class="log-in">LOGOUT</button></a>';
                        } else {
                            echo '<a class="nav-link btn btn-outline-secondary login" href="../includes/login.php">Login</a>';
                        }
                        ?>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>