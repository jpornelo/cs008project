<nav>
    <ol>
        <?php
        /* This sets the current page to not be a link. Repeat this if block for
         *  each menu item */
        if ($path_parts['filename'] == "comedyIndex") {
            print '<li class="activePage">UCM</li>';
            print '<li><a href="daddysHome.php"><img src="images/comedy/daddysHomePoster.jpg" width="150px"></a></li>';
            print '<li><a href="rideAlong2.php"><img src="images/comedy/rideAlong2Poster.jpg" width="150px"></a></li>';
            print '<li><a href="zoolander2.php"><img src="images/comedy/zoolander2Poster.jpg" width="150px"></a></li>';
            print '<li><a href="brothersGrimsby.php"><img src="images/comedy/brothersGrimsbyPoster.jpg" width="150px"></a></li>';
            print '<li><a href="dirtyGrandpa.php"><img src="images/comedy/dirtyGrandpaPoster.jpg" width="150px"></a></li>';
        }
        elseif ($path_parts['filename'] == "daddysHome") {
            
            print '<li><a href="comedyIndex.php">UCM</a></li>';
            print '<li class="activePage"><img src="images/comedy/daddysHomePoster.jpg" width="150px"></li>';
            print '<li><a href="rideAlong2.php"><img src="images/comedy/rideAlong2Poster.jpg" width="150px"></a></li>';
            print '<li><a href="zoolander2.php"><img src="images/comedy/zoolander2Poster.jpg" width="150px"></a></li>';
            print '<li><a href="brothersGrimsby.php"><img src="images/comedy/brothersGrimsbyPoster.jpg" width="150px"></a></li>';
            print '<li><a href="dirtyGrandpa.php"><img src="images/comedy/dirtyGrandpaPoster.jpg" width="150px"></a></li>';
        }
        elseif ($path_parts['filename'] == "rideAlong2") {
            print '<li><a href="dramaIndex.php">UCM</a></li>';
            print '<li><a href="daddysHome.php"><img src="images/comedy/daddysHomePoster.jpg" width="150px"></a></li>';
            print '<li class="activePage"><img src="images/comedy/rideAlong2Poster.jpg" width="150px"></li>';
            print '<li><a href="zoolander2.php"><img src="images/comedy/zoolander2Poster.jpg" width="150px"></a></li>';
            print '<li><a href="brothersGrimsby.php"><img src="images/comedy/brothersGrimsbyPoster.jpg" width="150px"></a></li>';
            print '<li><a href="dirtyGrandpa.php"><img src="images/comedy/dirtyGrandpaPoster.jpg" width="150px"></a></li>';
        }
        elseif ($path_parts['filename'] == "zoolander2") {
            print '<li><a href="dramaIndex.php">UDM</a></li>';
            print '<li><a href="daddysHome.php"><img src="images/comedy/daddysHomePoster.jpg" width="150px"></a></li>';
            print '<li><a href="rideAlong2.php"><img src="images/comedy/rideAlong2Poster.jpg" width="150px"></a></li>';
            print '<li><a href="zoolander2.php"><img src="images/comedy/zoolander2Poster.jpg" width="150px"></a></li>';
            print '<li><a href="brothersGrimsby.php"><img src="images/comedy/brothersGrimsbyPoster.jpg" width="150px"></a></li>';
            print '<li><a href="dirtyGrandpa.php"><img src="images/comedy/dirtyGrandpaPoster.jpg" width="150px"></a></li>';
        }
        elseif ($path_parts['filename'] == "brothersGrimsby"){
            print '<li><a href="dramaIndex.php">UDM</a></li>';
            print '<li><a href="daddysHome.php"><img src="images/comedy/daddysHomePoster.jpg" width="150px"></a></li>';
            print '<li><a href="rideAlong2.php"><img src="images/comedy/rideAlong2Poster.jpg" width="150px"></a></li>';
            print '<li><a href="zoolander2.php"><img src="images/comedy/zoolander2Poster.jpg" width="150px"></a></li>';
            print '<li class="activePage"><img src="images/comedy/brothersGrimsbyPoster.jpg" width="150px"></li>';
            print '<li><a href="dirtyGrandpa.php"><img src="images/comedy/dirtyGrandpaPoster.jpg" width="150px"></a></li>';
        }
        else {
            print '<li><a href="dramaIndex.php">UDM</a></li>';
            print '<li><a href="daddysHome.php"><img src="images/comedy/daddysHomePoster.jpg" width="150px"></a></li>';
            print '<li><a href="rideAlong2.php"><img src="images/comedy/rideAlong2Poster.jpg" width="150px"></a></li>';
            print '<li><a href="zoolander2.php"><img src="images/comedy/zoolander2Poster.jpg" width="150px"></a></li>';
            print '<li><a href="brothersGrimsby.php"><img src="images/comedy/brothersGrimsbyPoster.jpg" width="150px"></a></li>';
            print '<li class="activePage"><img src="images/comedy/dirtyGrandpaPoster.jpg" width="150px"></li>';
        }
      
        ?>
    </ol>
</nav>