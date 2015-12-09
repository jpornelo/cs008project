<nav class="movie-container">
    <ol>
        <?php
        /* This sets the current page to not be a link. Repeat this if block for
         *  each menu item */
        if ($path_parts['filename'] == "comedyIndex") {
//            print '<li class="activePage">UCM</li>';

            print '<div class="movie-item">';
            print '<li><a href="daddysHome.php"><img src="images/comedy/daddysHomePoster.jpg"></a></li>';
            print '</div><div class="movie-item">';
            print '<li><a href="rideAlong2.php"><img src="images/comedy/rideAlong2Poster.jpg"></a></li>';
            print '</div><div class="movie-item">';
            print '<li><a href="zoolander2.php"><img src="images/comedy/zoolander2Poster.jpg"></a></li>';
            print '</div><div class="movie-item">';
            print '<li><a href="brothersGrimsby.php"><img src="images/comedy/brothersGrimsbyPoster.jpg"></a></li>';

            print '</div><div class="movie-item">';
            print '<li><a href="dirtyGrandpa.php"><img src="images/comedy/dirtyGrandpaPoster.jpg"></a></li>';
            print '</div><div class="movie-item">';
        } elseif ($path_parts['filename'] == "daddysHome") {

//            print '<li><a href="comedyIndex.php">UCM</a></li>';

            print '<div class="movie-item">';

            print '<li class="activePage"><img src="images/comedy/daddysHomePoster.jpg"></li>';
            print '</div><div class="movie-item">';
            print '<li><a href="rideAlong2.php"><img src="images/comedy/rideAlong2Poster.jpg"></a></li>';
            print '</div><div class="movie-item">';
            print '<li><a href="zoolander2.php"><img src="images/comedy/zoolander2Poster.jpg"></a></li>';
            print '</div><div class="movie-item">';
            print '<li><a href="brothersGrimsby.php"><img src="images/comedy/brothersGrimsbyPoster.jpg"></a></li>';
            print '</div><div class="movie-item">';
            print '<li><a href="dirtyGrandpa.php"><img src="images/comedy/dirtyGrandpaPoster.jpg"></a></li>';
            print '</div>';
        } elseif ($path_parts['filename'] == "rideAlong2") {
//            print '<li><a href="dramaIndex.php">UCM</a></li>';

            print '<div class="movie-item">';
            print '<li><a href="daddysHome.php"><img src="images/comedy/daddysHomePoster.jpg"></a></li>';
            print '</div><div class="movie-item">';
            print '<li class="activePage"><img src="images/comedy/rideAlong2Poster.jpg"></li>';
            print '</div><div class="movie-item">';
            print '<li><a href="zoolander2.php"><img src="images/comedy/zoolander2Poster.jpg"></a></li>';
            print '</div><div class="movie-item">';
            print '<li><a href="brothersGrimsby.php"><img src="images/comedy/brothersGrimsbyPoster.jpg"></a></li>';
            print '</div><div class="movie-item">';
            print '<li><a href="dirtyGrandpa.php"><img src="images/comedy/dirtyGrandpaPoster.jpg"></a></li>';
            print '</div>';
        } elseif ($path_parts['filename'] == "zoolander2") {
//            print '<li><a href="dramaIndex.php">UDM</a></li>';

            print '<div class="movie-item">';
            print '<li><a href="daddysHome.php"><img src="images/comedy/daddysHomePoster.jpg"></a></li>';
            print '</div><div class="movie-item">';
            print '<li><a href="rideAlong2.php"><img src="images/comedy/rideAlong2Poster.jpg"></a></li>';
            print '</div><div class="movie-item">';
            print '<li class="activePage"><img src="images/comedy/zoolander2Poster.jpg"></a></li>';
            print '</div><div class="movie-item">';
            print '<li><a href="brothersGrimsby.php"><img src="images/comedy/brothersGrimsbyPoster.jpg"></a></li>';
            print '</div><div class="movie-item">';
            print '<li><a href="dirtyGrandpa.php"><img src="images/comedy/dirtyGrandpaPoster.jpg"></a></li>';
            print '</div>';
        } elseif ($path_parts['filename'] == "brothersGrimsby") {
//            print '<li><a href="dramaIndex.php">UDM</a></li>';

            print '<div class="movie-item">';
            print '<li><a href="daddysHome.php"><img src="images/comedy/daddysHomePoster.jpg"></a></li>';
            print '</div><div class="movie-item">';
            print '<li><a href="rideAlong2.php"><img src="images/comedy/rideAlong2Poster.jpg"></a></li>';
            print '</div><div class="movie-item">';
            print '<li><a href="zoolander2.php"><img src="images/comedy/zoolander2Poster.jpg"></a></li>';
            print '</div><div class="movie-item">';
            print '<li class="activePage"><img src="images/comedy/brothersGrimsbyPoster.jpg"></li>';
            print '</div><div class="movie-item">';
            print '<li><a href="dirtyGrandpa.php"><img src="images/comedy/dirtyGrandpaPoster.jpg"></a></li>';
            print '</div>';
        } else {
//            print '<li><a href="dramaIndex.php">UDM</a></li>';

            print '<div class="movie-item">';
            print '<li><a href="daddysHome.php"><img src="images/comedy/daddysHomePoster.jpg"></a></li>';
            print '</div><div class="movie-item">';
            print '<li><a href="rideAlong2.php"><img src="images/comedy/rideAlong2Poster.jpg"></a></li>';
            print '</div><div class="movie-item">';
            print '<li><a href="zoolander2.php"><img src="images/comedy/zoolander2Poster.jpg"></a></li>';
            print '</div><div class="movie-item">';
            print '<li><a href="brothersGrimsby.php"><img src="images/comedy/brothersGrimsbyPoster.jpg"></a></li>';
            print '</div><div class="movie-item">';
            print '<li class="activePage"><img src="images/comedy/dirtyGrandpaPoster.jpg"></li>';
            print '</div>';
        }
        ?>
    </ol>
</nav>