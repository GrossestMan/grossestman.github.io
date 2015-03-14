<?php 
/* [INFO 2300 Project 1] index.php 
 * Personal site of Noah Grossman- contact page
 */

$CURRENT_PAGE = 'Contact';

require("header.php");
?>

    <div class="section">
        <div class="chunk">
            <?php
            if (isset($_POST['email'])) {
                $name = $email = $subject = $message = "";
                $nameError = $emailError = $subjectError = $messageError = "";
                $noErrors = false;    
                 
                //Test input data
                function test($data) {
                    $data = strip_tags($data);
                    $data = trim($data);
                    $data = stripslashes($data);
                    $data = htmlspecialchars($data);
                    return $data;
                }
                
                //Check the database is not empty
                if(!empty($_POST)) {
                    $noErrors = true;
                    //Check name
                    if(empty($_POST['name'])) {
                        $nameError = "*Error: please enter a name*<br>";
                        $noErrors = false;
                    }
                    else {
                        $name = test($_POST['name']);
                        if (!ctype_alnum(preg_replace('/[[:space:]]/',"9", $name))) {
                            $name = "";
                            $nameError = "*Error: name must contain only letters and numbers (A-Z, a-z, 0-9)*<br>";
                            $noErrors = false;
                        };
                    };
                    //Check email
                    if(empty($_POST['email'])) {
                        $emailError = "*Error: please enter an email*<br>";
                        $noErrors = false;
                    }
                    else {
                        $email = test($_POST['email']);
                        if (strpos($email, "@") == false) {
                            $email = "";
                            $emailError = "*Error: email must be in correct format (...@example.com)*<br>";
                            $noErrors = false;
                        };
                    };
                    //Check subject
                    if(empty($_POST['subject'])) {
                        $subjectError = "*Error: please enter a subject*<br>";
                        $noErrors = false;
                    }
                    else {
                        $subject = test($_POST['subject']);
                        if (!ctype_alnum(preg_replace('/[[:space:]]/',"9", $subject))) {
                            $subject = "";
                            $subjectError = "*Error: subject must contain only letters and numbers (A-Z, a-z, 0-9)*<br>";
                            $noErrors = false;
                        };
                    };
                    //Check message
                    if(empty($_POST['message'])) {
                        $messageError = "*Error: please enter a message*<br>";
                        $noErrors = false;
                    };
                }
                if($noErrors) {
                    $name = $_POST['name'];
                    $email = $_POST['email'] ;
                    $subject = "$name - " . $_POST['subject'];
                    $message = $_POST['message'];
                    mail('nbg22@cornell.edu', "Subject: $subject", $message, "From: $email" ); ?>
                    <p>Thanks <?php echo $name ?> for the email! I will be in touch shortly.</p>
                <?php }
                else { ?>
                    <p><?php echo $nameError . $emailError . $subjectError . $messageError ?></p>
                <?php } 
            }
            else { ?>
            <form action="contact.php" method="post">
                Your name: <input type="text" name="name" required pattern="[A-Za-z ]+" title="Required field with alphanumeric characters only (A-Z, a-z)"><br>
                Your email: <input type="email" name="email" required title="Required field in email format (name@example.com)"><br>
                Subject: <input type="text" name="subject" required pattern="[A-Za-z0-9 ]+" title="Required field with alphanumeric characters and numbers only (A-Z, a-z, 0-9)."><br>
                Content: <textarea rows="8" cols="80" name="message" required title="Required field."></textarea><br><br>
                <input type="submit" value="Submit">  <input type="reset" value="Reset">
            </form>
            <?php } ?>
        </div>
    </div>

<?php require('footer.php'); ?>