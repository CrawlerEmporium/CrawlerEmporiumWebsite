# CrawlerEmporiumWebsite

For this website to work for you, you need to create a `config.php` in the include folder.

And include the following code:
```php
<?php
    $user = "databaseUserNameHere";
    $password ="databasePasswordHere";
    $ip = "databaseIPHere";
    $mongoDB = new MongoDB\Client("mongodb://${user}:${password}@${ip}:27017/?authSource=${user}");
?>
```