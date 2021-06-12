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
        echo '<button type="button" class="collapsible mb-2">' . $command["command"] . '<span> - ' . $command["shortDescription"][0] . '</span></button>';
    } else {
        echo '<button type="button" class="collapsible mb-2">' . $command["command"] . '<span> - ' . $command["description"][0] . '</span></button>';
    }
    echo '<div class="content">';
    echo '<h4 style="color: #cccccc;">Description:</h4>';
    foreach ($command["description"] as $description) {
        echo '<p class="tab">' . $description . '</p>';
    }
    if (array_key_exists("syntax", $commandArray)) {
        echo '<h4 style="color: #cccccc;">Syntax:</h4>';
        foreach ($command["syntax"] as $syntax) {
            echo '<p class="tab">' . $syntax . '</p>';
        }
    }
    if (array_key_exists("options", $commandArray)) {
        echo '<h4 style="color: #cccccc;">Options:</h4>';
        foreach ($command["options"] as $options) {
            $entryArray = iterator_to_array($options["entries"]);
            echo '<p class="tab">' . $options["argument"] . ':<br/>' . implode("<br/>", $entryArray) . '</p>';
        }
    }
    if (array_key_exists("examples", $commandArray)) {
        echo '<h4 style="color: #cccccc;">Examples:</h4>';
        foreach ($command["examples"] as $examples) {
            echo '<p class="tab">' . $examples . '</p>';
        }
    }
    if (array_key_exists("aliasFor", $commandArray)) {
        echo '<h4 style="color: #cccccc;">Aliases:</h4>';
        $aliasArray = iterator_to_array($command["aliasFor"]);
        echo '<p class="tab">' . implode(", ", $aliasArray) . '</p>';
    }
    if (array_key_exists("permissions", $commandArray)) {
        echo '<h4 style="color: #cccccc;">Permissions:</h4>';
        $permissionArray = iterator_to_array($command["permissions"]);
        echo '<p class="tab">' . implode(", ", $permissionArray) . '</p>';
    }
    if (array_key_exists("types", $commandArray)) {
        echo '<h4 style="color: #cccccc;">Category:</h4>';
        $typeArray = iterator_to_array($command["types"]);
        echo '<p class="tab">' . implode(", ", $typeArray) . '</p>';
    }
    echo '</div>';
}

echo '</div>';
?>