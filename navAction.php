<nav class="movie-container">
    <ol>
        <?php
        /* This sets the current page to not be a link. Repeat this if block for
         *  each menu item */
        if ($path_parts['filename'] == "actionIndex") {
            
//            print '<li class="activePage">UAM</li>';
            print '<div class="movie-item">';
            print '<li><a href="heartOfTheSea.php"><img src="images/action/heartOfTheSeaPoster.jpg"></a></li>';
            print '</div><div class="movie-item">';
    print '<li><a href="starWars.php"><img src="images/action/starWarsPoster.jpg"></a></li>';
            print '</div><div class="movie-item">';
            print '<li><a href="pointBreak.php"><img src="images/action/pointBreakPoster.jpg"></a></li>';
            print '</div><div class="movie-item">';
            print '<li><a href="13hours.php"><img src="images/action/13HoursPoster.jpg"></a></li>';
            print '</div><div class="movie-item">';
            print '<li><a href="londonHasFallen.php"><img src="images/action/londonPoster.jpg"></a></li>';
            print '</div>';
        }
        elseif ($path_parts['filename'] == "heartOfTheSea") {
            
//            print '<li><a href="actionIndex.php">UAM</a></li>';
            print '<div class="movie-item">';
            print '<li class="activePage"><img src="images/action/heartOfTheSeaPoster.jpg"></li>';
            print '</div><div class="movie-item">';
            print '<li><a href="starWars.php"><img src="images/action/starWarsPoster.jpg"></a></li>';
            print '</div><div class="movie-item">';
            print '<li><a href="pointBreak.php"><img src="images/action/pointBreakPoster.jpg"></a></li>';
            print '</div><div class="movie-item">';
            print '<li><a href="13hours.php"><img src="images/action/13HoursPoster.jpg"></a></li>';
            print '</div><div class="movie-item">';
            print '<li><a href="londonHasFallen.php"><img src="images/action/londonPoster.jpg"></a></li>';
            print '</div>';
        }
        elseif ($path_parts['filename'] == "starWars") {
//            print '<li><a href="actionIndex.php">UAM</a></li>';
            print '<div class="movie-item">';
            print '<li><a href="heartOfTheSea.php"><img src="images/action/heartOfTheSeaPoster.jpg"></a></li>';
            print '</div><div class="movie-item">';
            print '<li class="activePage"><img src="images/action/starWarsPoster.jpg"></li>';
            print '</div><div class="movie-item">';
            print '<li><a href="pointBreak.php"><img src="images/action/pointBreakPoster.jpg"></a></li>';
            print '</div><div class="movie-item">';
            print '<li><a href="13hours.php"><img src="images/action/13HoursPoster.jpg"></a></li>';
            print '</div><div class="movie-item">';
            print '<li><a href="londonHasFallen.php"><img src="images/action/londonPoster.jpg"></a></li>';
            print '</div>';
        }
        elseif ($path_parts['filename'] == "pointBreak") {
//            print '<li><a href="actionIndex.php">UAM</a></li>';
            print '<div class="movie-item">';
            print '<li><a href="heartOfTheSea.php"><img src="images/action/heartOfTheSeaPoster.jpg"></a></li>';
            print '</div><div class="movie-item">';
            print '<li><a href="starWars.php"><img src="images/action/starWarsPoster.jpg"></a></li>';
            print '</div><div class="movie-item">';
            print '<li class="activePage"><img src="images/action/pointBreakPoster.jpg"></li>';
            print '</div><div class="movie-item">';
            print '<li><a href="13hours.php"><img src="images/action/13HoursPoster.jpg"></a></li>';
            print '</div><div class="movie-item">';
            print '<li><a href="londonHasFallen.php"><img src="images/action/londonPoster.jpg"></a></li>';
            print '</div>';
        }
        elseif ($path_parts['filename'] == "13hours") {
//            print '<li><a href="actionIndex.php">UAM</a></li>';
            print '<div class="movie-item">';
            print '<li><a href="heartOfTheSea.php"><img src="images/action/heartOfTheSeaPoster.jpg"></a></li>';
            print '</div><div class="movie-item">';
            print '<li><a href="starWars.php"><img src="images/action/starWarsPoster.jpg"></a></li>';
            print '</div><div class="movie-item">';
            print '<li><a href="pointBreak.php"><img src="images/action/pointBreakPoster.jpg"></a></li>';
            print '</div><div class="movie-item">';
            print '<li class="activePage"><img src="images/action/13HoursPoster.jpg"></li>';
            print '</div><div class="movie-item">';
            print '<li><a href="londonHasFallen.php"><img src="images/action/londonPoster.jpg"></a></li>';
            print '</div>';
        }
        else {
//            print '<li><a href="actionIndex.php">UAM</a></li>';
            print '<div class="movie-item">';
            print '<li><a href="heartOfTheSea.php"><img src="images/action/heartOfTheSeaPoster.jpg"></a></li>';
            print '</div><div class="movie-item">';
            print '<li><a href="starWars.php"><img src="images/action/starWarsPoster.jpg"></a></li>';
            print '</div><div class="movie-item">';
            print '<li><a href="pointBreak.php"><img src="images/action/pointBreakPoster.jpg"></a></li>';
            print '</div><div class="movie-item">';
            print '<li><a href="13hours.php"><img src="images/action/13HoursPoster.jpg"></a></li>';
            print '</div><div class="movie-item">';
            print '<li class="activePage"><img src="images/action/londonPoster.jpg"></li>';
            print '</div>';
        }
      
        ?>
    </ol>
</nav>