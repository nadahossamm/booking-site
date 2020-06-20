
<?php
session_start();
session_unset();

session_destroy();
header("location:login.php");
//header("location:signup2.php");

//echo "All session variables are now removed, and the session is destroyed." ;
?>
