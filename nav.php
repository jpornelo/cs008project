<nav class="movie-container">
    <ol>
        <?php
        /* This sets the current page to not be a link. Repeat this if block for
         *  each menu item */
        if ($path_parts['filename'] == "superheroIndex") {
//            print '<li class="activePage">USM</li>';
            print '<div class="movie-item">';
            print '<li><a href="suicideSquad.php"><img src="images/suicideSquadCover copy.png"></a></li>';
            print '</div><div class="movie-item">';
            print '<li><a href="batmanSuperman.php"><img src="images/batmanSupermanCover copy.jpg"></a></li>';
            print '</div><div class="movie-item">';
            print '<li><a href="captainAmerica.php"><img src="images/captainAmericaCover copy.png"></a></li>';
            print '</div><div class="movie-item">';
            print '<li><a href="deadpool.php"><img src="images/deadpoolCover copy.jpg"></a></li>';
            print '</div>';
        } elseif ($path_parts['filename'] == "suicideSquad") {

//            print '<li><a href="superheroIndex.php">USM</a></li>';
            print '<div class="movie-item">';
            print '<li class="activePage"><img src="images/suicideSquadCover copy.png"></li>';
            print '</div><div class="movie-item">';
            print '<li><a href="batmanSuperman.php"><img src="images/batmanSupermanCover copy.jpg"></a></li>';
            print '</div><div class="movie-item">';
            print '<li><a href="captainAmerica.php"><img src="images/captainAmericaCover copy.png"></a></li>';
            print '</div><div class="movie-item">';
            print '<li><a href="deadpool.php"><img src="images/deadpoolCover copy.jpg"></a></li>';
            print '</div>';
        } elseif ($path_parts['filename'] == "batmanSuperman") {
//            print '<li><a href="superheroIndex.php">USM</a></li>';

            print '<div class="movie-item">';
            print '<li><a href="suicideSquad.php"><img src="images/suicideSquadCover copy.png"></a></li>';
            print '</div><div class="movie-item">';
            print '<li class="activePage"><img src="images/batmanSupermanCover copy.jpg"></li>';
            print '</div><div class="movie-item">';
            print '<li><a href="captainAmerica.php"><img src="images/captainAmericaCover copy.png"></a></li>';
            print '</div><div class="movie-item">';
            print '<li><a href="deadpool.php"><img src="images/deadpoolCover copy.jpg"></a></li>';
            print '</div>';
        } elseif ($path_parts['filename'] == "captainAmerica") {
//            print '<li><a href="superheroIndex.php">USM</a></li>';

            print '<div class="movie-item">';
            print '<li><a href="suicideSquad.php"><img src="images/suicideSquadCover copy.png"></a></li>';
            print '</div><div class="movie-item">';
            print '<li><a href="batmanSuperman.php"><img src="images/batmanSupermanCover copy.jpg"></a></li>';
            print '</div><div class="movie-item">';
            print '<li class="activePage"><img src="images/captainAmericaCover copy.png"></li>';
            print '</div><div class="movie-item">';
            print '<li><a href="deadpool.php"><img src="images/deadpoolCover copy.jpg"></a></li>';
            
            print '</div>';
        } else {
//            print '<li><a href="superheroIndex.php">USM</a></li>';
            print '<div class="movie-item">';
            print '<li><a href="suicideSquad.php"><img src="images/suicideSquadCover copy.png"></a></li>';
            print '</div><div class="movie-item">';
            print '<li><a href="batmanSuperman.php"><img src="images/batmanSupermanCover copy.jpg"></a></li>';
            print '</div><div class="movie-item">';
            print '<li><a href="captainAmerica.php"><img src="images/captainAmericaCover copy.png"></a></li>';
            print '</div><div class="movie-item">';
            print '<li class="activePage"><img src="images/deadpoolCover copy.jpg"></li>';
            print '</div>';
        } 
        ?>
    </ol>
</nav>


