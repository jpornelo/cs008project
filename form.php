<?php
include "top.php"; 

//%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%
//
// SECTION: 1 Initialize variables
//
// SECTION: 1a.
// variables for the classroom purposes to help find errors.
$debug = false;
if (isset($_GET["debug"])) { // ONLY do this in a classroom environment
    $debug = true;
}
if ($debug)
    print "<p>DEBUG MODE IS ON</p>";
//%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%
//
// SECTION: 1b Security
//
// define security variable to be used in SECTION 2a.
$yourURL = $domain . $phpSelf;
//%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%
//
// SECTION: 1c form variables
//
// Initialize variables one for each form element
// in the order they appear on the form
$firstName = "";
$lastName = "";
$email = "jpornelo@uvm.edu";

$genre = "Comedy";

$medium="Netflix";

$movies=true;
$videoGames=false;
$party=false;
$boardGames=false;
$activities=false;

//%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%
//
// SECTION: 1d form error flags
//
// Initialize Error Flags one for each form element we validate
// in the order they appear in section 1c.
$firstNameERROR = false;
$lastNameERROR = false;
$emailERROR = false;
//%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%
//
// SECTION: 1e misc variables
//
// create array to hold error messages filled (if any) in 2d displayed in 3c.
$errorMsg = array();
// array used to hold form values that will be written to a CSV file
$dataRecord = array();
$mailed=false; // have we mailed the information to the user?
//@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
//
// SECTION: 2 Process for when the form is submitted
//
if (isset($_POST["btnSubmit"])) {
    //@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
    //
    // SECTION: 2a Security
    // 
    if (!securityCheck(true)) {
        $msg = "<p>Sorry you cannot access this page." ;
        $msg.= "Security breach detected and reported</p>";
        die($msg);
    }
    
    //@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
    //
    // SECTION: 2b Sanitize (clean) data 
    // remove any potential JavaScript or html code from users input on the
    // form. Note it is best to follow the same order as declared in section 1c.
    
    $firstName = htmlentities($_POST["txtFirstName"], ENT_QUOTES, "UTF-8");
    $dataRecord[] = $firstName;
    $lastName = htmlentities($_POST["txtLastName"], ENT_QUOTES, "UTF-8");
    $dataRecord[] = $lastName;
    $email = filter_var($_POST["txtEmail"], FILTER_SANITIZE_EMAIL);
    $dataRecord[] = $email;
    $genre = htmlentities($_POST["radGenre"], ENT_QUOTES, "UTF-8");
    $dataRecord[] = $genre;
    $medium = htmlentities($_POST["lstMedium"], ENT_QUOTES, "UTF-8");
    $dataRecord[] = $medium;
    
    if (isset($_POST["chkMovies"])) {
    $movies = true;
} else {
    $movies = false;
}
$dataRecord[] = $movies;

if (isset($_POST["chkVideoGames"])) {
    $videoGames = true;
} else {
    $videoGames = false;
}
$dataRecord[] = $videoGames;

if (isset($_POST["chkParty"])) {
    $party = true;
} else {
    $party = false;
}
$dataRecord[] = $party;

if (isset($_POST["chkBoardGames"])) {
    $boardGames = true;
} else {
    $boardGames = false;
}
$dataRecord[] = $boardGames;

if (isset($_POST["chkActivities"])) {
    $activities = true;
} else {
    $activities = false;
}
$dataRecord[] = $activities;
    //@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
    //
    // SECTION: 2c Validation
    //
    // Validation section. Check each value for possible errors, empty or
    // not what we expect. You will need an IF block for each element you will
    // check (see above section 1c and 1d). The if blocks should also be in the
    // order that the elements appear on your form so that the error messages
    // will be in the order they appear. errorMsg will be displayed on the form
    // see section 3b. The error flag ($emailERROR) will be used in section 3c.
    
        
    if ($firstName == "") {
        $errorMsg[] = "Please enter your first name";
        $firstNameERROR = true;
    } elseif (!verifyAlphaNum($firstName)) {
        $errorMsg[] = "Your first name appears to have extra character.";
        $firstNameERROR = true;
    }
    
    if ($lastName == "") {
        $errorMsg[] = "Please enter your last name";
        $lastNameERROR = true;
    } elseif (!verifyAlphaNum($lastName)) {
        $errorMsg[] = "Your last name appears to have extra character.";
        $lastNameERROR = true;
    }
    
    
    
    if ($email == "") { 
        $errorMsg[] = "Please enter your email address";
        $emailERROR = true;
    } elseif (!verifyEmail($email)) {
        $errorMsg[] = "Your email address appears to be incorrect.";
        $emailERROR = true;
    }
    
    //@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
    //
    // SECTION: 2d Process Form - Passed Validation
    //
    // Process for when the form passes validation (the errorMsg array is empty)
    //
    if (!$errorMsg) {
        if ($debug)
            print "<p>Form is valid</p>";
        //@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
        //
        // SECTION: 2e Save Data
        //
        // This block saves the data to a CSV file.
        $fileExt = ".csv";
        $myFileName = "data/registration";
        $filename = $myFileName . $fileExt;
        if ($debug) {
            print "\n\n<p>filename is " . $filename;
        }
        // now we just open the file for append
        $file = fopen($filename, 'a');
        // write the forms informations
        fputcsv($file, $dataRecord);
        // close the file
        fclose($file);
        //@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
        //
        // SECTION: 2f Create message
        //
        // build a message to display on the screen in section 3a and to mail
        // to the person filling out the form (section 2g).
        $message = '<h2>Your information.</h2>';
        foreach ($_POST as $key => $value) {
            if($key!="btnSubmit"){
            $message .= "<p>";
            $camelCase = preg_split('/(?=[A-Z])/', substr($key, 3));
            foreach ($camelCase as $one) {
                $message .= $one . " ";
            }
            $message .= " = " . htmlentities($value, ENT_QUOTES, "UTF-8") . "</p>";
        }
        }
        //@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
        //
        // SECTION: 2g Mail to user
        //
        // Process for mailing a message which contains the forms data
        // the message was built in section 2f.
        $to = $email; // the person who filled out the form
        $cc = "";
        $bcc = "";
        $from = "My site <noreply@yoursite.com>";
        // subject of mail should make sense to your form
        $todaysDate = strftime("%x");
        $subject = "Research Study: " . $todaysDate;
        $mailed = sendMail($to, $cc, $bcc, $from, $subject, $message);
        
    } // end form is valid
    
} // ends if form was submitted.
//#############################################################################
//
// SECTION 3 Display Form
//
?>
<body>
<article id="main">

    <?php
    //####################################
    //
    // SECTION 3a.
    //
    // 
    // 
    // 
    // If its the first time coming to the form or there are errors we are going
    // to display the form.
    if (isset($_POST["btnSubmit"]) AND empty($errorMsg)) { // closing of if marked with: end body submit
        print "<h1>Your Request has ";
        if (!$mailed) {
            print "not ";
        }
        print "been processed</h1>";
        print "<p>A copy of this message has ";
        if (!$mailed) {
            print "not ";
        }
        print "been sent</p>";
        print "<p>To: " . $email . "</p>";
        print "<p>Mail Message:</p>";
        print $message;
    } else {
        //####################################
        //
        // SECTION 3b Error Messages
        //
        // display any error messages before we print out the form
        if ($errorMsg) {
            print '<div id="errors">';
            print '<font color= "red"><h1> An error has occured with your submission</h1></font>';
            print "<ol>\n";
            foreach ($errorMsg as $err) {
                print '<font color= "red"><li>' . $err . '</li></n></font>';
            }
            print "</ol>\n";
            print '</div>';
        }
        //####################################
        //
        // SECTION 3c html Form
        //
        /* Display the HTML form. note that the action is to this same page. $phpSelf
          is defined in top.php
          NOTE the line:
          value="<?php print $email; ?>
          this makes the form sticky by displaying either the initial default value (line 35)
          or the value they typed in (line 84)
          NOTE this line:
          <?php if($emailERROR) print 'class="mistake"'; ?>
          this prints out a css class so that we can highlight the background etc. to
          make it stand out that a mistake happened here.
         */
        ?>

    

    <fieldset class="wrapper">
        <legend>Register Today</legend>

        <fieldset class="wrapperTwo">
            <legend>Please complete the following form</legend>

            <fieldset class="contact">

                <legend>Personal Information</legend>

                <div class="rain">
                    <div class="border start">
                        <form action="<?php print $phpSelf; ?>"
                              method="post"
                              id="frmRegister">
                            <fieldset class="personal">
                                <legend>Contact Information</legend>
                            <label for="txtFirstName" class="required">First Name
                            <input type="text" id="txtFirstName" name="txtFirstName"
                                   value="<?php print $firstName; ?>"
                                   tabindex="100" maxlength="45" placeholder="Enter your first name"
                                   <?php if ($firstNameERROR){
                                   print 'class="mistake"'; 
                                   }?>
                                   onfocus="this.select()"
                                   autofocus>
                            </label>
                            
                            <label for="txtLastName" class="required">Last Name
                            <input type="text" id="txtLastName" name="txtLastName"
                                   value="<?php print $lastName; ?>"
                                   tabindex="110" maxlength="45" placeholder="Enter your last name"
                                   <?php 
                                   if ($lastNameERROR) {
                                       print 'class="mistake"'; 
                                   }
                                   ?>
                                   onfocus="this.select()"
                                   >
                            </label>
                            <label for="txtEmail" class="required">Email
                                <input type="text" id="txtEmail" name="txtEmail"
                                       value="<?php print $email; ?>"
                                       tabindex="120" maxlength="45" placeholder="Enter a valid email address"
                                       <?php
                                       if ($emailERROR) {
                                           print 'class="mistake"';
                                       }
                                       ?>
                                       onfocus="this.select()" 
                                       >
                            </label>
                            </fieldset>
                            <fieldset class="intrests">
                                <legend>Interests</legend>
                            <p>
                                What is your favorite genre?
                                <br/>
                            <label class="rad"><input type="radio"
                                          class="radGenre"
                                          name="radGenre"
                                          value="Comedy"
                                          <?php if ($genre == "Comedy") print 'checked' ?>
                                          tabindex="330"/>Comedy</label>
                            <label class="rad"><input type="radio"
                                          class="radGenre"
                                          name="radGenre"
                                          value="Action"
                                          <?php if ($genre == "Action") print 'checked' ?>
                                          tabindex="340">Action</label>
                            <label class="rad"><input type="radio"
                                          class="radGenre"
                                          name="radGenre"
                                          value="Drama"
                                          <?php if ($genre == "Drama") print 'checked' ?>
                                          tabindex="350">Drama</label>
                       <br/>
                       <label class="rad"><input type="radio"
                                          class="radGenre"
                                          name="radGenre"
                                          value="Animation"
                                          <?php if ($genre == "Animation") print 'checked' ?>
                                      tabindex="360">Animation</label>
                       
                       <label class="rad"><input type="radio"
                                          class="radGenre"
                                          name="radGenre"
                                          value="Horror"
                                          <?php if ($genre == "Horror") print 'checked' ?>
                                          tabindex="370">Horror</label>
                                
                            <label class="rad"><input type="radio"
                                          class="radGenre"
                                          name="radGenre"
                                          value="Thriller"
                                          <?php if ($genre == "Thriller") print 'checked' ?>
                                          tabindex="380">Thriller</label>
                            
                            </p>
                            <br/>
                            
                            <p>Most Used Form of Movies
                                <br/>
                            <select id ="lstMedium"
                                    name="lstMedium"
                                    tabindex="400">
                                <option<?php if($medium=="Netflix")print " selected";?>
                                    value="Netflix">Netflix</option>
                                <option<?php if($medium=="DVD/BluRay")print " selected";?>
                                    value="DVD">DVD/BluRay</option>
                                <option<?php if($medium=="On Demand")print " selected";?>
                                    value="On Demand">On Demand</option>
                                <option<?php if($medium=="Other")print " selected";?>
                                    value="Other">Other</option>
                            </select>
                            </p>
                            
                            <p>Things you like to do?
                            <br/>
                            <label class="chk"><input type="checkbox"
                                    id="chkMovies"
                                    name="chkMovies"
                                    value="Movies"
                                    <?php if($movies) print'checked';?>
                                    tabindex="500">Movies</label>
                            
                            <label class="chk"><input type="checkbox"
                                    id="chkVideoGames"
                                    name="chkVideoGames"
                                    value="VideoGames"
                                    <?php if($videoGames) print'checked';?>
                                    tabindex="510">Video Games</label>
                            
                            <label class="chk"><input type="checkbox"
                                    id="chkParty"
                                    name="chkParty"
                                    value="Party"
                                    <?php if($party) print'checked';?>
                                    tabindex="520">Party</label>
                            
                            <label class="chk"><input type="checkbox"
                                    id="chkBoardGames"
                                    name="chkBoardGames"
                                    value="BoardGames"
                                    <?php if($boardGames) print'checked';?>
                                    tabindex="530">Board Games</label>
                            
                            <label class="chk"><input type="checkbox"
                                    id="chkActivities"
                                    name="chkActivities"
                                    value="Activities"
                                    <?php if($activities) print'checked';?>
                                    tabindex="540">Physical Activities</label>
                            </p>
                            
                            </fieldset>
                            
                            <input type="submit" id="btnSubmit" name="btnSubmit" value="Register" tabindex="900" class="button">
                        </form>
                    </div>


                </div>

            </fieldset>
        </fieldset>
    </fieldset>
<?php
    }
?>


</article>
<?php
include "footer.php";
?>
</body>
</html>