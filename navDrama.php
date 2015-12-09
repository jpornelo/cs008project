<nav class="movie-container">
    <ol>
        <?php
        /* This sets the current page to not be a link. Repeat this if block for
         *  each menu item */
        if ($path_parts['filename'] == "dramaIndex") {
//            print '<li class="activePage">UDM</li>';

            print '<div class="movie-item">';
            print '<li><a href="creed.php"><img src="images/drama/creedPoster.jpg"></a></li>';
            print '</div><div class="movie-item">';
            print '<li><a href="victorFrankenstein.php"><img src="images/drama/frankensteinPoster.jpg"></a></li>';
            print '</div><div class="movie-item">';
            print '<li><a href="macbeth.php"><img src="images/drama/macbethPoster.jpg" width=></a></li>';
            print '</div><div class="movie-item">';
            print '<li><a href="finestHours.php"><img src="images/drama/finestHoursPoster.jpg"></a></li>';
            print '</div>';
        } elseif ($path_parts['filename'] == "creed") {

//            print '<li><a href="dramaIndex.php">UDM</a></li>';
            print '<div class="movie-item">';

            print '<li class="activePage"><img src="images/drama/creedPoster.jpg"></li>';
            print '</div><div class="movie-item">';
            print '<li><a href="victorFrankenstein.php"><img src="images/drama/frankensteinPoster.jpg"></a></li>';
            print '</div><div class="movie-item">';
            print '<li><a href="macbeth.php"><img src="images/drama/macbethPoster.jpg"></a></li>';
            print '</div><div class="movie-item">';
            print '<li><a href="finestHours.php"><img src="images/drama/finestHoursPoster.jpg"></a></li>';
            print '</div>';
        } elseif ($path_parts['filename'] == "victorFrankenstein") {
//            print '<li><a href="dramaIndex.php">UDM</a></li>';
//             print '<div class="movie-item">';

            print '<div class="movie-item">';
            print '<li><a href="creed.php"><img src="images/drama/creedPoster.jpg"></a></li>';
            print '</div><div class="movie-item">';
            print '<li class="activePage"><img src="images/drama/frankensteinPoster.jpg"></li>';
            print '</div><div class="movie-item">';
            print '<li><a href="macbeth.php"><img src="images/drama/macbethPoster.jpg"></a></li>';
            print '</div><div class="movie-item">';
            print '<li><a href="finestHours.php"><img src="images/drama/finestHoursPoster.jpg"></a></li>';
            print '</div>';
        } elseif ($path_parts['filename'] == "macbeth") {
//            print '<li><a href="dramaIndex.php">UDM</a></li>';
            print '<div class="movie-item">';
            print '</div><div class="movie-item">';
            print '<li><a href="creed.php"><img src="images/drama/creedPoster.jpg"></a></li>';
            print '</div><div class="movie-item">';
            print '<li><a href="victorFrankenstein.php"><img src="images/drama/frankensteinPoster.jpg"></a></li>';
            print '</div><div class="movie-item">';
            print '<li class="activePage"><img src="images/drama/macbethPoster.jpg"></li>';
            print '</div><div class="movie-item">';
            print '<li><a href="finestHours.php"><img src="images/drama/finestHoursPoster.jpg"></a></li>';
            print '</div>';
        } else {
//            print '<li><a href="dramaIndex.php">UDM</a></li>';
            print '<div class="movie-item">';
            print '<li><a href="creed.php"><img src="images/drama/creedPoster.jpg"></a></li>';
            print '</div><div class="movie-item">';
            print '<li><a href="victorFrankenstein.php"><img src="images/drama/frankensteinPoster.jpg"></a></li>';
            print '</div><div class="movie-item">';
            print '<li><a href="macbeth.php"><img src="images/drama/macbethPoster.jpg"></a></li>';
            print '</div><div class="movie-item">';
            print '<li class="activePage"><img src="images/drama/finestHoursPoster.jpg"></li>';
            print '</div>';
        }
        ?>
    </ol>
</nav>

