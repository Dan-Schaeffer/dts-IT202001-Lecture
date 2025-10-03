<?php
/* Daniel Schaeffer (dts) - 10/3
   IT202 - 001 - Phase 01
   index.php - startup page, allows users to login
   currently doesn't contain a register button
*/
session_start();
if (isset($_SESSION['login']) && $_SESSION['login'] === true) {
    header("Location: main.inc.php");
    exit;
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>FidgetShop dts</title>
</head>

<body>
    <h2>Please Login to the Fidget Shop Inventory Website</h2>

    <form name="managers" action="validate.inc.php" method="post">
        <label>Email:</label>
        <input type="text" name="email">
        <br>
        <br>
        <label>Password:</label>
        <input type="text" name="password">
        <br>
        <br>
        <input type="submit">
    </form>

</body>

</html>