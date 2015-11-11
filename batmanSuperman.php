<?php
include "top.php";
?>

    <body id="batVsSup">
        <figure class="img-left">
            <img alt="Batman vs Superman Movie Poster" src="images/batmanSupermanCover.jpg" width="200">
            <figcaption>Batman vs Superman</figcaption>
        </figure>
    <object>
    <video id="video" src="videos/batmanSupermanVideo.mp4"
           poster="images/batmanSupermanScreen.JPG"
           width="600px"
           controls="controls">
    </video>
    </object>    

<style type="text/css">
    html{
        background: url(images/batmanSupermanBackground.png) no-repeat center center fixed;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
    }
    video{
        alignment-baseline: middle;
       
    }
    
    </style>
</body>