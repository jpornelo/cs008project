<nav>
    <ol>
        <?php
        /* This sets the current page to not be a link. Repeat this if block for
         *  each menu item */
        if ($path_parts['filename'] == "index") {
            print '<li class="activePage">USM</li>';
            print '<li><a href="suicideSquad.php"><img src="images/suicideSquadCover copy.png" width="150px"></a></li>';
            print '<li><a href="batmanSuperman.php"><img src="images/batmanSupermanCover copy.jpg" width="150px"></a></li>';
            print '<li><a href="captainAmerica.php"><img src="images/captainAmericaCover copy.png" width="150px"></a></li>';
            print '<li><a href="deadpool.php"><img src="images/deadpoolCover copy.jpg" width="150px"></a></li>';
            print '<li><a href="xMen.php"><img src="images/xMenCover copy.jpg" width="150px"></a></li>';
            print '<li><a href="form.php">Subscribe Now</a></li>';
        }
        elseif ($path_parts['filename'] == "suicideSquad") {
            
            print '<li><a href="index.php">USM</a></li>';
            print '<li class="activePage"><img src="images/suicideSquadCover copy.png" width="150px"></li>';
            print '<li><a href="batmanSuperman.php"><img src="images/batmanSupermanCover copy.jpg" width="150px"></a></li>';
            print '<li><a href="captainAmerica.php"><img src="images/captainAmericaCover copy.png" width="150px"></a></li>';
            print '<li><a href="deadpool.php"><img src="images/deadpoolCover copy.jpg" width="150px"></a></li>';
            print '<li><a href="xMen.php"><img src="images/xMenCover copy.jpg" width="150px"></a></li>';
            print '<li><a href="form.php">Subscribe Now</a></li>';
        }
        elseif ($path_parts['filename'] == "batmanSuperman") {
            print '<li><a href="index.php">USM</a></li>';
            print '<li><a href="suicideSquad.php"><img src="images/suicideSquadCover copy.png" width="150px"></a></li>';
            print '<li class="activePage"><img src="images/batmanSupermanCover copy.jpg" width="150px"></li>';
            print '<li><a href="captainAmerica.php"><img src="images/captainAmericaCover copy.png" width="150px"></a></li>';
            print '<li><a href="deadpool.php"><img src="images/deadpoolCover copy.jpg" width="150px"></a></li>';
            print '<li><a href="xMen.php"><img src="images/xMenCover copy.jpg" width="150px"></a></li>';
            print '<li><a href="form.php">Subscribe Now</a></li>';
        }
        elseif ($path_parts['filename'] == "captainAmerica") {
            print '<li><a href="index.php">USM</a></li>';
            print '<li><a href="suicideSquad.php"><img src="images/suicideSquadCover copy.png" width="150px"></a></li>';
            print '<li><a href="batmanSuperman.php"><img src="images/batmanSupermanCover copy.jpg" width="150px"></a></li>';
            print '<li class="activePage"><img src="images/captainAmericaCover copy.png" width="150px"></li>';
            print '<li><a href="deadpool.php"><img src="images/deadpoolCover copy.jpg" width="150px"></a></li>';
            print '<li><a href="xMen.php"><img src="images/xMenCover copy.jpg" width="150px"></a></li>';
            print '<li><a href="form.php">Subscribe Now</a></li>';
        }
        elseif ($path_parts['filename'] == "deadpool") {
            print '<li><a href="index.php">USM</a></li>';
            print '<li><a href="suicideSquad.php"><img src="images/suicideSquadCover copy.png" width="150px"></a></li>';
            print '<li><a href="batmanSuperman.php"><img src="images/batmanSupermanCover copy.jpg" width="150px"></a></li>';
            print '<li><a href="captainAmerica.php"><img src="images/captainAmericaCover copy.png" width="150px"></a></li>';
            print '<li class="activePage"><img src="images/deadpoolCover copy.jpg" width="150px"></li>';
            print '<li><a href="xMen.php"><img src="images/xMenCover copy.jpg" width="150px"></a></li>';
            print '<li><a href="form.php">Subscribe Now</a></li>';
        }
        elseif ($path_parts['filename'] == "xMen") {
            print '<li><a href="index.php">USM</a></li>';
            print '<li><a href="suicideSquad.php"><img src="images/suicideSquadCover copy.png" width="150px"></a></li>';
            print '<li><a href="batmanSuperman.php"><img src="images/batmanSupermanCover copy.jpg" width="150px"></a></li>';
            print '<li><a href="captainAmerica.php"><img src="images/captainAmericaCover copy.png" width="150px"></a></li>';
            print '<li><a href="deadpool.php"><img src="images/deadpoolCover copy.jpg" width="150px"></a></li>';
            print '<li class="activePage"><img src="images/xMenCover copy.jpg" width="150px"></li>';
            print '<li><a href="form.php">Subscribe Now</a></li>';
        }
        else{
            print '<li><a href="index.php">USM</a></li>';
            print '<li><a href="suicideSquad.php"><img src="images/suicideSquadCover copy.png" width="150px"></a></li>';
            print '<li><a href="batmanSuperman.php"><img src="images/batmanSupermanCover copy.jpg" width="150px"></a></li>';
            print '<li><a href="captainAmerica.php"><img src="images/captainAmericaCover copy.png" width="150px"></a></li>';
            print '<li><a href="deadpool.php"><img src="images/deadpoolCover copy.jpg" width="150px"></a></li>';
            print '<li><a href="xMen.php"><img src="images/xMenCover copy.jpg" width="150px"></a></li>';
            print '<li class="activePage">Subscribe Now</li>';
         
        }
        
    
        
        ?>
    </ol>
</nav>


