<?php
$idURL = "https://support.discord.com/hc/en-us/articles/206346498-Where-can-I-find-my-User-Server-Message-ID-";
$search = array("{/prefix}", "{/roleID}", "{/channelID}", "{/messageID}", "{/userID}");
$replace = array($prefix, "<a href='${idURL}' target=_blank>How to get a Role ID?</a>", "<a href='${idURL}' target=_blank>How to get a Channel ID?</a>", "<a href='${idURL}' target=_blank>How to get a Message ID?</a>", "<a href='${idURL}' target=_blank>How to get a User ID?</a>");
?>
    <h1 class="commandstitle">Commands</h1>
<?php
echo '<p class="lead commandssub">View the commands for ' . $title . '.</p>';
?>
    <input id="myInput" type="text" class="searchbox" placeholder="Search"/>
    <br/>
    <br/>
    <div class="border"></div>
<?php
foreach ($commands as $command) {
    $commandArray = iterator_to_array($command);
    echo '<div id="myCmd">';
    $shortDescription = "";
    if (array_key_exists("shortDescription", $commandArray)) {
        echo '<button type="button" class="collapsible">' . $command["command"] . '<span> - ' . $command["shortDescription"][0] . '</span></button>';
    } else {
        echo '<button type="button" class="collapsible">' . $command["command"] . '<span> - ' . $command["description"][0] . '</span></button>';
    }
    echo '<div class="content mb-2">';
    echo '<h4 class="text-gray">Description:</h4>';
    foreach ($command["description"] as $description) {
        echo '<p class="tab">' . $description . '</p>';
    }
    if (array_key_exists("syntax", $commandArray)) {
        echo '<h4 class="text-gray">Syntax:</h4>';
        foreach ($command["syntax"] as $syntax) {
            echo '<p class="tab">' . str_replace($search, $replace, $syntax) . '</p>';
        }
    }
    if (array_key_exists("options", $commandArray)) {
        echo '<h4 class="text-gray">Options:</h4>';
        foreach ($command["options"] as $options) {
            $entryArray = iterator_to_array($options["entries"]);
            echo '<p class="tab">' . $options["argument"] . ':<br/>' . str_replace($search, $replace, implode("<br/>", $entryArray)) . '</p>';
        }
    }
    if (array_key_exists("examples", $commandArray)) {
        echo '<h4 class="text-gray">Examples:</h4>';
        foreach ($command["examples"] as $examples) {
            echo '<p class="tab">' . str_replace($search, $replace, $examples) . '</p>';
        }
    }
    if (array_key_exists("aliasFor", $commandArray)) {
        echo '<h4 class="text-gray">Aliases:</h4>';
        $aliasArray = iterator_to_array($command["aliasFor"]);
        echo '<p class="tab">' . str_replace($search, $replace, implode(", ", $aliasArray)) . '</p>';
    }
    if (array_key_exists("permissions", $commandArray)) {
        echo '<h4 class="text-gray">Permissions:</h4>';
        $permissionArray = iterator_to_array($command["permissions"]);
        echo '<p class="tab">' . str_replace($search, $replace, implode(", ", $permissionArray)) . '</p>';
    }
    if (array_key_exists("types", $commandArray)) {
        echo '<h4 class="text-gray">Category:</h4>';
        $typeArray = iterator_to_array($command["types"]);
        echo '<p class="tab">' . str_replace($search, $replace, implode(", ", $typeArray)) . '</p>';
    }
    echo '</div>';
}
?>