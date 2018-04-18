
<?php
echo ini_get("session.save_path");
session_start();
//ini_get();
echo "<br>";
$_SESSION["firstName"]="John";
echo $_SESSION["firstName"];
echo "<br>";
class WebUser{
public $firstName;
public $lastName;
}
if (isset($_SESSION["user"])){
// Make sure the WebUser class is defined by this point
print_r($_SESSION["user"]);
} else {
echo "<br> Creating user...";
$user = new WebUser;
$user->firstName = "John";
$user->lastName = "Smith";
$_SESSION["user"] = $user;
}
?>