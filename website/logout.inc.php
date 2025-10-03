<?php
/* Daniel Schaeffer (dts) - 10/3
   IT202 - 001 - Phase 01
   lougout.inc.php - clears session data and 
   returns user back to login
*/

session_start();
$_SESSION = array();

if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

session_destroy();

header("Location: index.php");
exit;
?>