<!DOCTYPE html>
<html>
<head>
<title>Unit 5 In-Class Exercise dts</title>
</head>
<body>
<h1>My Golfing Team</h1>
<h4>Name: Daniel Schaeffer</h4>
<h4>UCID: dts</h4>
<h4>Course and Section: IT-202-001 Internet Applications</h4>
<form name="games" action="Unit05Exercise_action_dts.php" method="post">
   <label>Golfer ID:</label>
   <input type="text" name="golferid">
   <br>
   <br>
   <label>Score:</label>
   <input type="text" name="score">
   <br>
   <br>
   <input type="submit">
</form>
<br>
<?php
date_default_timezone_set("America/New_York");
echo "The date and time is " . date("D M j h:i:sa T Y");
?>
</body>
</html>