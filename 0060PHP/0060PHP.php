<!DOCTYPE html>
<html lang='ru'>
<head>
<title>Простейший сценарий</title>
<meta charset='utf-8'>
</head>
<body>
<h1>Здравствуйте!</h1>
<p>
<?php
  require 'parse-php-sdk/autoload.php';
  Parse\ParseClient::initialize('ozuldPbgHohaEiLI7mE66hYYlNeRItGU2ii7pvXu', 'emBeNkF8CJp6mZV3BMyYVbGyIjgKPmP1wMvLHWYy', 'sEtwy9Yl2vYqYMz2zUsR8JyUu21rOVFd2eaXJ1Lh');
  Parse\ParseClient::setServerURL('https://parseapi.back4app.com','/');


  $soccerPlayers = new Parse\ParseObject("SoccerPlayers");
$soccerPlayers->set("playerName", "A. Wed");
$soccerPlayers->set("yearOfBirth", 2005);
$soccerPlayers->set("emailContact", "a.wed@email.io");
$soccerPlayers->setArray("attributes", ["fast", "good conditioning"]);

try {
  $soccerPlayers->save();
  echo 'New object created with objectId: ' . $soccerPlayers->getObjectId();
} catch (ParseException $ex) {  
  // Execute any logic that should take place if the save fails.
  // error is a ParseException object with an error code and message.
  echo 'Failed to create new object, with error message: ' . $ex->getMessage();
}

?>
</p>
</body></html>
