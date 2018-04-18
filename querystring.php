<?php
$firstName = "John";
$age = "34";
$queryString = "firstName=$firstName&amp;age=$age";
echo '<p> <a href="moreinfo.php?' . $queryString . '"> Find out more info on
this person </a> </p> ';
$fields = array(
"firstName" => "John",
"homePage" => "http://www.example.com/",
"favoriteSport" => "Ice Hockey"
);
echo '<p> <a href="moreinfo.php?' . htmlspecialchars(http_build_query
($fields)) . '" > Find out more info on this person </a> </p> ';
/*$firstName = $_GET["firstName"];
$homePage = $_GET["homePage"];
$favoriteSport = $_GET["favoriteSport"];
echo "<dl>";
echo "<dt> First name: </dt> <dd> $firstName </dd> ";
echo "<dt> Home page: </dt> <dd> $homePage </dd>";
echo "<dt> Favorite sport: </dt> <dd> $favoriteSport </dd> ";
echo "</dl> ";*/
?>