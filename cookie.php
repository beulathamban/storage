<?php
setcookie("pageViews", 8, 0, "/", "", false, true);
//setcookie("fontSize", 3, time() + 60 * 60 * 24 * 365, "/", ".example.com",false, true ); // setting font size for site
echo isset($_COOKIE["pageViews"]);
//setcookie( “fontSize”, “”, time() - 3600, “/”, “.example.com”, false, true ); // removes after 1 hour
?>