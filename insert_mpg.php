<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <title>mpG - Insert mpG</title>
        <link href="css_mpg.css" title="styles for MPG Tracker" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <?php
echo "Date: " . $_GET["date"] . "<br/>";
echo "Time: " . $_GET["time"] . "<br/>";
echo "Gallons Filled: " . $_GET["gallons_filled"] . "<br/>";
echo "Miles Driven: " . $_GET["miles_driven"] . "<br/>";
        ?>
    </body>
</html>
