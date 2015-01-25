<?php


if(isset($_POST['email'])) {



    // EDIT THE 2 LINES BELOW AS REQUIRED

    $email_to = "rperlste@gmail.com";

    $email_subject = "robbiep.com contact email";





    function died($error) {

        // your error code can go here

        echo "Something went wrong<br><br>";

        echo $error;

        die();

    }



    // validation expected data exists

    if( !isset($_POST['email']) ||

        !isset($_POST['message'])) {

        died('Missing required data!');

    }



    $name = $_POST['name']; // required

    $email_from = $_POST['email']; // required

    $phone = $_POST['phone']; // not required

    $message = $_POST['message']; // required



    $error_message = "";

    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

  if(!preg_match($email_exp,$email_from)) {

    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';

  }

  if(strlen($message) < 2) {

    $error_message .= 'The message is too short!<br />';

  }

  if(strlen($error_message) > 0) {

    died($error_message);

  }

    $email_message = "Message:\n";



    function clean_string($string) {

      $bad = array("content-type","bcc:","to:","cc:","href");

      return str_replace($bad,"",$string);

    }



    $email_message .= "Name: ".clean_string($name)."\n";

    $email_message .= "Email: ".clean_string($email)."\n";

    $email_message .= "Phone: ".clean_string($phone)."\n";

    $email_message .= "Message: \n".clean_string($message)."\n";





// create email headers

$headers = 'From: '.$email_from."\r\n".

'Reply-To: '.$email_from."\r\n" .

'X-Mailer: PHP/' . phpversion();

@mail($email_to, $email_subject, $email_message, $headers);


header("Location: /");
die();


}

?>
