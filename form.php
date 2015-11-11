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
// 
//%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%
//
// SECTION: 1c form variables
//
// Initialize variables one for each form element
// in the order they appear on the form
$email = "jpornelo@uvm.edu";
//%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%
//
// SECTION: 1d form error flags
//
//
//
//%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%
//
// SECTION: 1e misc variables
//
// 
//@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
//
// SECTION: 2 Process for when the form is submitted
//
//@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
//
// SECTION: 2a Security
// 
//@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
//
// SECTION: 2b Sanitize (clean) data 
// 
// 
//@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
//
// SECTION: 2c Validation
//
// 
// 
// 
//  
// 
// 
//@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
//
// SECTION: 2d Process Form - Passed Validation
//
// 
//
//@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
//
// SECTION: 2e Save Data
//
// 
//@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
//
// SECTION: 2f Create message
//
// 
// 
//@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
//
// SECTION: 2g Mail to user
//
// 
// 
//#############################################################################
//
// SECTION 3 Display Form
//
?>

<article id="main">


<!--//####################################
//
// SECTION 3a.
//
// 
// 
// 
// 
// 
//####################################
//
// SECTION 3b Error Messages
//
// 
//####################################
//
// SECTION 3c html Form
//
    /* Display the HTML form. note that the action is to this same page. $phpSelf
      is defined in top.php */-->


<fieldset class="wrapper">
                <legend>Register Today</legend>
                <p class="parWrapper">You information will greatly help us with our research.</p>

    <fieldset class="wrapperTwo">
        <legend>Please complete the following form</legend>

        <fieldset class="contact">

            <legend>Contact Information</legend>
           
                <div class="rain">
                    <div class="border start">
                        <form action="<?php print $phpSelf; ?>"
                              method="post"
                              id="frmRegister">

                            <label for="txtEmail" class="required">Email</label>
                            <input type="text" id="txtEmail" name="txtEmail"
                                   value="<?php print $email; ?>"
                                   tabindex="120" maxlength="45" placeholder="Enter a valid email address"

                                   onfocus="this.select()" 
                                   autofocus>

                            <input type="submit" id="btnSubmit" name="btnSubmit" value="Register" tabindex="900" class="button">
                        </form>
                    </div>


                </div>

        </fieldset>
    </fieldset>
    </fieldset>



</article>
<?php include "footer.php"; 



