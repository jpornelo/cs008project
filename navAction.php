<nav>
    <ol>
        <?php
        /* This sets the current page to not be a link. Repeat this if block for
         *  each menu item */
        if ($path_parts['filename'] == "actionIndex") {
            print '<li class="activePage">UAM</li>';
            print '<li><a href="heartOfTheSea.php"><img src="images/action/heartOfTheSeaPoster.jpg" width="150px"></a></li>';
            print '<li><a href="starWars.php"><img src="images/action/starWarsPoster.jpg" width="150px"></a></li>';
            print '<li><a href="pointBreak.php"><img src="images/action/pointBreakPoster.jpg" width="150px"></a></li>';
            print '<li><a href="13hours.php"><img src="images/action/13HoursPoster.jpg" width="150px"></a></li>';
            print '<li><a href="londonHasFallen.php"><img src="images/action/londonPoster.jpg" width="150px"></a></li>';
        }
        elseif ($path_parts['filename'] == "heartOfTheSea") {
            
            print '<li><a href="actionIndex.php">UAM</a></li>';
            print '<li class="activePage"><img src="images/action/heartOfTheSeaPoster.jpg" width="150px"></li>';
            print '<li><a href="starWars.php"><img src="images/action/starWarsPoster.jpg" width="150px"></a></li>';
            print '<li><a href="pointBreak.php"><img src="images/action/pointBreakPoster.jpg" width="150px"></a></li>';
            print '<li><a href="13hours.php"><img src="images/action/13HoursPoster.jpg" width="150px"></a></li>';
            print '<li><a href="londonHasFallen.php"><img src="images/action/londonPoster.jpg" width="150px"></a></li>';
        }
        elseif ($path_parts['filename'] == "starWars") {
            print '<li><a href="actionIndex.php">UAM</a></li>';
            print '<li><a href="heartOfTheSea.php"><img src="images/action/heartOfTheSeaPoster.jpg" width="150px"></a></li>';
            print '<li class="activePage"><img src="images/action/starWarsPoster.jpg" width="150px"></li>';
            print '<li><a href="pointBreak.php"><img src="images/action/pointBreakPoster.jpg" width="150px"></a></li>';
            print '<li><a href="13hours.php"><img src="images/action/13HoursPoster.jpg" width="150px"></a></li>';
            print '<li><a href="londonHasFallen.php"><img src="images/action/londonPoster.jpg" width="150px"></a></li>';
        }
        elseif ($path_parts['filename'] == "pointBreak") {
            print '<li><a href="actionIndex.php">UAM</a></li>';
            print '<li><a href="heartOfTheSea.php"><img src="images/action/heartOfTheSeaPoster.jpg" width="150px"></a></li>';
            print '<li><a href="starWars.php"><img src="images/action/starWarsPoster.jpg" width="150px"></a></li>';
            print '<li class="activePage"><img src="images/action/pointBreakPoster.jpg" width="150px"></li>';
            print '<li><a href="13hours.php"><img src="images/action/13HoursPoster.jpg" width="150px"></a></li>';
            print '<li><a href="londonHasFallen.php"><img src="images/action/londonPoster.jpg" width="150px"></a></li>';
        }
        elseif ($path_parts['filename'] == "13hours") {
            print '<li><a href="actionIndex.php">UAM</a></li>';
            print '<li><a href="heartOfTheSea.php"><img src="images/action/heartOfTheSeaPoster.jpg" width="150px"></a></li>';
            print '<li><a href="starWars.php"><img src="images/action/starWarsPoster.jpg" width="150px"></a></li>';
            print '<li><a href="pointBreak.php"><img src="images/action/pointBreakPoster.jpg" width="150px"></a></li>';
            print '<li class="activePage"><img src="images/action/13HoursPoster.jpg" width="150px"></li>';
            print '<li><a href="londonHasFallen.php"><img src="images/action/londonPoster.jpg" width="150px"></a></li>';
        }
        else {
            print '<li><a href="actionIndex.php">UAM</a></li>';
            print '<li><a href="heartOfTheSea.php"><img src="images/action/heartOfTheSeaPoster.jpg" width="150px"></a></li>';
            print '<li><a href="starWars.php"><img src="images/action/starWarsPoster.jpg" width="150px"></a></li>';
            print '<li><a href="pointBreak.php"><img src="images/action/pointBreakPoster.jpg" width="150px"></a></li>';
            print '<li><a href="13hours.php"><img src="images/action/13HoursPoster.jpg" width="150px"></a></li>';
            print '<li class="activePage"><img src="images/action/londonPoster.jpg" width="150px"></li>';
        }
      
        ?>
    </ol>
</nav>


