<nav class="movie-container">
    <ol>
        <?php
        /* This sets the current page to not be a link. Repeat this if block for
         *  each menu item */
        if ($path_parts['filename'] == "animationIndex") {
//            print '<li class="activePage">UAM</li>';

            print '<div class="movie-item">';
            print '<li><a href="chipmunks.php"><img src="images/animation/chipmunksPoster.jpg"></a></li>';
            print '</div><div class="movie-item">';
            print '<li><a href="kungFuPanda.php"><img src="images/animation/kungFuPandaPoster.jpg"></a></li>';

            print '</div><div class="movie-item">';
            print '<li><a href="ratchetandClank.php"><img src="images/animation/ratchetAndClankPoster.jpg"></a></li>';
            print '<li><a href="angryBirds.php"><img src="images/animation/angryBirdsPoster.jpg" ></a></li>';
            print '</div>';
        } elseif ($path_parts['filename'] == "chipmunks") {

//            print '<li><a href="animationIndex.php">UAM</a></li>';
            print '<div class="movie-item">';
            print '<li class="activePage"><img src="images/animation/chipmunksPoster.jpg" ></li>';
            print '</div><div class="movie-item">';
            print '<li><a href="kungFuPanda.php"><img src="images/animation/kungFuPandaPoster.jpg"></a></li>';
            print '</div><div class="movie-item">';
            print '<li><a href="ratchetandClank.php"><img src="images/animation/ratchetAndClankPoster.jpg" ></a></li>';
            print '<li><a href="angryBirds.php"><img src="images/animation/angryBirdsPoster.jpg"></a></li>';
            print '</div>';
        } elseif ($path_parts['filename'] == "kungFuPanda") {
//            print '<li><a href="animationIndex.php">UAM</a></li>';
            print '<div class="movie-item">';
            print '<li><a href="chipmunks.php"><img src="images/animation/chipmunksPoster.jpg"></a></li>';
            print '</div><div class="movie-item">';
            print '<li class="activePage"><img src="images/animation/kungFuPandaPoster.jpg"></li>';
            print '</div><div class="movie-item">';
            print '<li><a href="ratchetandClank.php"><img src="images/animation/ratchetAndClankPoster.jpg"></a></li>';
            print '</div><div class="movie-item">';
            print '<li><a href="angryBirds.php"><img src="images/animation/angryBirdsPoster.jpg"></a></li>';
            print '</div>';
        } elseif ($path_parts['filename'] == "ratchetandClank") {
//            print '<li><a href="animationIndex.php">UAM</a></li>';
            print '<div class="movie-item">';
            print '<li><a href="chipmunks.php"><img src="images/animation/chipmunksPoster.jpg" ></a></li>';
            print '</div><div class="movie-item">';
            print '<li><a href="kungFuPanda.php"><img src="images/animation/kungFuPandaPoster.jpg" ></a></li>';
            print '</div><div class="movie-item">';
            print '<li class="activePage"><img src="images/animation/ratchetAndClankPoster.jpg"></li>';
            print '</div><div class="movie-item">';
            print '<li><a href="angryBirds.php"><img src="images/animation/angryBirdsPoster.jpg"></a></li>';
            print '</div>';
        } else {
//            print '<li><a href="animationIndex.php">UAM</a></li>';
            print '<div class="movie-item">';
            print '<li><a href="chipmunks.php"><img src="images/animation/chipmunksPoster.jpg"></a></li>';
            print '</div><div class="movie-item">';
            print '<li><a href="kungFuPanda.php"><img src="images/animation/kungFuPandaPoster.jpg"></a></li>';
            print '</div><div class="movie-item">';
            print '<li><a href="ratchetandClank.php"><img src="images/animation/ratchetAndClankPoster.jpg"></a></li>';
            print '</div><div class="movie-item">';
            print '<li class="activePage"><img src="images/animation/angryBirdsPoster.jpg"></li>';
            print '</div>';
        }
        ?>
    </ol>
</nav>