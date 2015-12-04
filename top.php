
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Upcoming Movies</title>
        <meta charset="utf-8">
        <meta name="author" content="Jonathan Pornelos">
        <link rel="stylesheet"
              href="style.css"
              type="text/css"
              media="screen">
        <link rel="shortcut icon" type="image/x-icon" href="images/icon.png" >

        <meta name="viewport" content="width=device-width, initial-scale=1">


<?php
// parse the url into htmlentites to remove any suspicous vales that someone
// may try to pass in. htmlentites helps avoid security issues.

        $phpSelf = htmlentities($_SERVER['PHP_SELF'], ENT_QUOTES, "UTF-8");

// break the url up into an array, then pull out just the filename
        $path_parts = pathinfo($phpSelf);
        ?>	

    </head>

    <?php
// giving each body tag an id really helps with css later on
            print '<body id="' . $path_parts['filename'] . '">';
            include "mainNav.php";
            include "header.php";
            
    ?>


