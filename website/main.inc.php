<?php
/* YOUR_NAME - DATE
   IT202 - SECTION - Phase 01
   main.inc.php - welcome page after login
*/
session_start();
if (!isset($_SESSION['login']) || $_SESSION['login'] !== true) {
    header("Location: index.php");
    exit;
}
$firstName = htmlspecialchars($_SESSION['firstName'] ?? '');
$lastName  = htmlspecialchars($_SESSION['lastName'] ?? '');
$pronouns  = htmlspecialchars($_SESSION['pronouns'] ?? '');
$email     = htmlspecialchars($_SESSION['emailAddress'] ?? '');
?>



<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>FidgetStore Homepage</title>
</head>

<body>

    <h1>FidgetStore Homepage</h1>
    <h4>
        Hello <?php echo "$firstName $lastName($pronouns)" ?> welcome to the FidgetStore Homepage!
    </h4>

    <p><a href="logout.inc.php">Logout</a></p>

</body>

</html>