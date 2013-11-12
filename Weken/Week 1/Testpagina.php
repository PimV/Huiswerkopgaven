<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title><?php echo $_POST["title"]; ?></title>
    </head>
    <body bgcolor=" <?php echo $_POST["kleur"]; ?>">
        <h1 align="center"><?php echo $_POST["title"]; ?></h1>
        <?php
        //echo '<body bgcolor="' . $_POST["kleur"] . '">';
        // put your code here
        ?>
        <p align="center">
            <font face="<?php echo $_POST["font"]; ?>"
                  text-align="center"
                  size="<?php echo $_POST["size"]; ?>">
            
            Dit is de tekst met grootte: <?php echo $_POST["size"]; ?>
            </font>
        </p>
    </body>
</html>
