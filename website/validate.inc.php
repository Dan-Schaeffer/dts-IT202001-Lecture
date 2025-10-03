<?php
/* Daniel Schaeffer (dts) - 10/3
   IT202 - 001 - Phase 01
   validate.php - Checks user email and password using database
   then stores user values for later use
*/
session_start();
error_log("\$_POST " . print_r($_POST, true));

require_once('database.php');

$emailAddress = trim($_POST['email'] ?? '');
$password = trim($_POST['password'] ?? '');

$db = getDB();

$query = "SELECT emailAddress,firstName, lastName, pronouns FROM FidgetManagers " .
    "WHERE emailAddress = ? AND password = SHA2(?,256)";


$stmt = $db->prepare($query);
$stmt->bind_param("ss", $emailAddress, $password);
$stmt->execute();
$stmt->store_result();

if ($stmt->num_rows === 1) {

    $stmt->bind_result($emailDb, $firstName, $lastName, $pronouns);
    $stmt->fetch();

    $_SESSION['login'] = true;
    $_SESSION['emailAddress'] = $emailDb;
    $_SESSION['firstName'] = $firstName;
    $_SESSION['lastName'] = $lastName;
    $_SESSION['pronouns'] = $pronouns;

    header("Location: main.inc.php");
} else {
    echo "<h2>Sorry, login for FidgetShop incorrect</h2>\n";
    echo "<a href=\"index.php\">Please try again</a>\n";
}
