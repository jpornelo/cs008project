<nav>
    <ol>
        <?php
        /* This sets the current page to not be a link. Repeat this if block for
         *  each menu item */
        if ($path_parts['filename'] == "dramaIndex") {
            print '<li class="activePage">UDM</li>';
            print '<li><a href="creed.php"><img src="images/drama/creedPoster.jpg" width="150px"></a></li>';
            print '<li><a href="victorFrankenstein.php"><img src="images/drama/frankensteinPoster.jpg" width="150px"></a></li>';
            print '<li><a href="macbeth.php"><img src="images/drama/macbethPoster.jpg" width="150px"></a></li>';
            print '<li><a href="finestHours.php"><img src="images/drama/finestHoursPoster.jpg" width="150px"></a></li>';
            
        }
        elseif ($path_parts['filename'] == "creed") {
            
            print '<li><a href="dramaIndex.php">UDM</a></li>';
            print '<li class="activePage"><img src="images/drama/creedPoster.jpg" width="150px"></li>';
            print '<li><a href="victorFrankenstein.php"><img src="images/drama/frankensteinPoster.jpg" width="150px"></a></li>';
            print '<li><a href="macbeth.php"><img src="images/drama/macbethPoster.jpg" width="150px"></a></li>';
            print '<li><a href="finestHours.php"><img src="images/drama/finestHoursPoster.jpg" width="150px"></a></li>';
        }
        elseif ($path_parts['filename'] == "victorFrankenstein") {
            print '<li><a href="dramaIndex.php">UDM</a></li>';
            print '<li><a href="creed.php"><img src="images/drama/creedPoster.jpg" width="150px"></a></li>';
            print '<li class="activePage"><img src="images/drama/frankensteinPoster.jpg" width="150px"></li>';
            print '<li><a href="macbeth.php"><img src="images/drama/macbethPoster.jpg" width="150px"></a></li>';
            print '<li><a href="finestHours.php"><img src="images/drama/finestHoursPoster.jpg" width="150px"></a></li>';
        }
        elseif ($path_parts['filename'] == "macbeth") {
            print '<li><a href="dramaIndex.php">UDM</a></li>';
            print '<li><a href="creed.php"><img src="images/drama/creedPoster.jpg" width="150px"></a></li>';
            print '<li><a href="victorFrankenstein.php"><img src="images/drama/frankensteinPoster.jpg" width="150px"></a></li>';
            print '<li class="activePage"><img src="images/drama/macbethPoster.jpg" width="150px"></li>';
            print '<li><a href="finestHours.php"><img src="images/drama/finestHoursPoster.jpg" width="150px"></a></li>';
        }
        else {
            print '<li><a href="dramaIndex.php">UDM</a></li>';
            print '<li><a href="creed.php"><img src="images/drama/creedPoster.jpg" width="150px"></a></li>';
            print '<li><a href="victorFrankenstein.php"><img src="images/drama/frankensteinPoster.jpg" width="150px"></a></li>';
            print '<li><a href="macbeth.php"><img src="images/drama/macbethPoster.jpg" width="150px"></a></li>';
            print '<li class="activePage"><img src="images/drama/finestHoursPoster.jpg" width="150px"></li>';
            
        }
      
        ?>
    </ol>
</nav>


