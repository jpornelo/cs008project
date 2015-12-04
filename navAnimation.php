<nav>
    <ol>
        <?php
        /* This sets the current page to not be a link. Repeat this if block for
         *  each menu item */
        if ($path_parts['filename'] == "animationIndex") {
            print '<li class="activePage">UAM</li>';
            print '<li><a href="chipmunks.php"><img src="images/animation/chipmunksPoster.jpg" width="150px"></a></li>';
            print '<li><a href="kungFuPanda.php"><img src="images/animation/kungFuPandaPoster.jpg" width="150px"></a></li>';
            print '<li><a href="ratchetandClank.php"><img src="images/animation/ratchetAndClankPoster.jpg" width="150px"></a></li>';
            print '<li><a href="angryBirds.php"><img src="images/animation/angryBirdsPoster.jpg" width="150px"></a></li>';
            
        }
        elseif ($path_parts['filename'] == "chipmunks") {
            
            print '<li><a href="animationIndex.php">UAM</a></li>';
            print '<li class="activePage"><img src="images/animation/chipmunksPoster.jpg" width="150px"></li>';
            print '<li><a href="kungFuPanda.php"><img src="images/animation/kungFuPandaPoster.jpg" width="150px"></a></li>';
            print '<li><a href="ratchetandClank.php"><img src="images/animation/ratchetAndClankPoster.jpg" width="150px"></a></li>';
            print '<li><a href="angryBirds.php"><img src="images/animation/angryBirdsPoster.jpg" width="150px"></a></li>';
        }
        elseif ($path_parts['filename'] == "kungFuPanda") {
            print '<li><a href="animationIndex.php">UAM</a></li>';
            print '<li><a href="chipmunks.php"><img src="images/animation/chipmunksPoster.jpg" width="150px"></a></li>';
            print '<li class="activePage"><img src="images/animation/kungFuPandaPoster.jpg" width="150px"></li>';
            print '<li><a href="ratchetandClank.php"><img src="images/animation/ratchetAndClankPoster.jpg" width="150px"></a></li>';
            print '<li><a href="angryBirds.php"><img src="images/animation/angryBirdsPoster.jpg" width="150px"></a></li>';
        }
        elseif ($path_parts['filename'] == "ratchetandClank") {
            print '<li><a href="animationIndex.php">UAM</a></li>';
            print '<li><a href="chipmunks.php"><img src="images/animation/chipmunksPoster.jpg" width="150px"></a></li>';
            print '<li><a href="kungFuPanda.php"><img src="images/animation/kungFuPandaPoster.jpg" width="150px"></a></li>';
            print '<li class="activePage"><img src="images/animation/ratchetAndClankPoster.jpg" width="150px"></li>';
            print '<li><a href="angryBirds.php"><img src="images/animation/angryBirdsPoster.jpg" width="150px"></a></li>';
        }
        else {
            print '<li><a href="animationIndex.php">UAM</a></li>';
            print '<li><a href="chipmunks.php"><img src="images/animation/chipmunksPoster.jpg" width="150px"></a></li>';
            print '<li><a href="kungFuPanda.php"><img src="images/animation/kungFuPandaPoster.jpg" width="150px"></a></li>';
            print '<li><a href="ratchetandClank.php"><img src="images/animation/ratchetAndClankPoster.jpg" width="150px"></a></li>';
            print '<li class="activePage"><img src="images/animation/angryBirdsPoster.jpg" width="150px"></li>';
            
        }
      
        ?>
    </ol>
</nav>