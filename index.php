<?xml version="1.0" encoding="UTF-8"?>
<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <LINK href="css_mpg.css" title="styles for mpG" rel="stylesheet" type="text/css">
        <title></title>
    </head>
    <body>

    <h3>Welcome to mpG</h3>
    <p id="description">Keep track on miles per gallon<br />
    Know your vehicle's score by the miles per gallon analysis<br />
    Identify problems before they happen
    </p>
    
<table id="login">
    <form name="frm_login" method="post" action="register.php">

    <tr>
        <td><label for="username">User Name</label></td><td><input type="text" name="username" /></td>
    </tr>
    <tr>
        <td><label for="password">Password</label></td><td><input type="password" name="password" /></td>
    </tr>
<tr>
<td><input type="submit" value="Login" /></td>
</tr>
</table>
</form>
    
    <a href="mpg_register.xhtml">New? register here</a>
    
    <?php
    // put your code here
    ?>
    </body>
</html>
