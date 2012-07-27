<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>mpG - Insert</title>
        <link href="css_mpg.css" title="styles for mpG" rel="stylesheet" type="text/css"/>
    </head>
<body>
<h3>MPG Tracker</h3>

<?php
$date = date('m-d-Y');
$time = date('H:i:s');
?>

<form id="insert_mpg" action="insert_mpg.php" method="get">
<table>
    <tr><td><label>Date</label></td><td><input type="text" name ="date" value="<?php echo $date ?>"/></td></tr>
    <tr><td><label>Time</label></td><td><input type="text" name="time" value="<?php echo $time ?>"/></td></tr>
    <tr><td><label>Gallons filled</label></td><td><input type="text" name="gallons_filled"/></td></tr>
    <tr><td><label>Miles Driven Since Last Refueling</label></td><td><input type="text" name="miles_driven"/></td></tr>
    <tr><td><label>Total Miles Driven (guests or first use)</label></td><td><input type="text" name="miles_driven"/></td></tr>
    <tr><td><input type="submit" value="Insert"/></td></tr>
</table>
</form>
<p id="tip">
Tip: Don't forget to refuel a "full tank" and then reset your miles counter
</p>
</body>
</html>