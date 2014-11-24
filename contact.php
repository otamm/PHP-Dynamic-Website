<?php

  define("TITLE","Contact Us | Frankle's Bom Jantando");

  include("includes/header.php");

?>

<div id="contact">

  <hr>

  <h1>Send a Message!</h1>

  <?php

  // check for header injection

  function has_header_injection($str){

    return preg_match("/[\r\n]/",$str);

  }

  if(isset($_POST['contact_submit'])){

    $name = trim($_POST['name']);

    $email = trim($_POST['email']);

    $message = $_POST['message'];

    // check to see if $name or $email have header injections.

    if (has_header_injection($name) || has_header_injection($email)){

      die(); // if it's the case, kill the script.

    }

    // check to see if any of the fields are empty.

    if (!$name || !$email || !$message){

      echo '<h4 class="error">All fields required, dumbass.</h4><a href="contact.php class="button block">Try Again.</a>';
      exit;

    }

    // add the recipient for the email, subject and message to a variable.

    $recipient = "my_very_very_very_cool@email.net";

    $subject = "$name sent you a message through Frankle's Bom Jantando contact form.";

    $r_message = "Name: $name\r\n"; //this in the end is a line break.
    $r_message.= "E-mail: $email\r\n"; //the '.=' has the purpose of concatenating this string to this variable.
    $r_message.= "Message: \r\n $message";

    //if the subscribe checkbox was checked...

    if(isset($_POST['subscribe']) && $_POST['subscribe'] == 'Subscribe') { //this last conditional will check the value of $_POST['subscribe'] pre-specified on the form.

      $r_message.= "\r\n\r\nPLIZ ADD MI 2 DA MAILING LIST ====DDDDDD";

    }

    $r_message = wordwrap($r_message,40); //the 'wordwrap' function will limit each line of the message length to 40 characters per line.

    //now, time to set the mail headers into a variable.

    $headers = "MIME-Version 1.0\r\n";
    $headers.= "Content-type: text/plain; charset=iso-8859-1\r\n";
    $headers.= "From: $name <$email> \r\n";
    $headers.= "X-Priority: 1\r\n";
    $headers.= "X-MSMail-Priority: High\r\n\r\n";

    //and finally, send the e-mail.

    mail($recipient,$subject,$r_message,$headers);



  ?>

  <!--show success message after e-mail has sent-->

  <h5>Thanks for wasting OUR time.</h5>
  <p>Please wait between 50 years to 3 millenium for a response.</p>
  <p><a href="index.php" class="button block">&laquo; Back to Home Page</a></p>

  <!--All of this above in case the $_POST array has some values (that is, a POST request was sent). Otherwise, just load the 'conventional' page.-->

  <?php

    }else{

  ?>

  <form method="post" action="" id="contact-form">

    <label for="name">Your Name</label>
    <input type="text" id="name" name="name">

    <label for="name">Your E-mail</label>
    <input type="email" id="email" name="email">

    <label for="message">Your Message</label>
    <textarea id="message" name="message"></textarea>

    <input type="checkbox" id="subscribe" name="subscribe" value="Subscribe">
    <label for="subscribe">Subscribe for More Spam</label>

    <input type="submit" class="button next" name="contact_submit" value="Send Message">

  </form>


</div><!--contact-->
  <?php

    }

  ?>


<?php

  include("includes/footer.php");

?>
