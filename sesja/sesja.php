<?php
/*session_start();
ini_set('session.gc_maxlifetime',10);

$_SESSION['Uzytkownik']='Pierwszy użytkownik';
$_SESSION['USerID']='010101';

$Uzytkownik = $_SESSION['Uzytkownik'];

session_destroy();

echo $Uzytkownik;*/
/*
$cookie_name = "user";
$cookie_value = "John Doe";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
*/


// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Set session variables
$_SESSION["favcolor"] = "green";
$_SESSION["favanimal"] = "cat";
echo "Session variables are set.";
?>

</body>
</html>


