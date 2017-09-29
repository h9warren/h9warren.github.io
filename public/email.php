<?php

// use PHPMailer\PHPMailer\PHPMailer;
// require '../vendor/phpmailer/phpmailer/src/SMTP.php'; 
// require '../vendor/autoload.php';

// $mail = new PHPMailer;
// $mail->isSMTP();
// $mail->SMTPSecure = 'ssl';
// $mail->Host = 'smtp.gmail.com';
// $mail->SMTPDebug = 2;


// $mail->SMTPAuth = true;  
// $mail->Port = 465;
// $mail->CharSet = 'utf-8';

// $mail->Password = "72dDR_*L-z";
// $mail->setFrom('hunter.warren@hunterwarren.us', 'Yet Another name');
// $mail->addAddress('hunter.warren@gmail.com', 'My Friend');

// $mail->Body     = 'Hi! This is my first e-mail sent through PHPMailer.';
// if(!$mail->send()) {
//   echo 'Message was not sent.';
//   echo 'Mailer error: ' . $mail->ErrorInfo;
// } else {
//   echo 'Message has been sent.';
// }

/**
 * PHPMailer simple contact form example.
 * If you want to accept and send uploads in your form, look at the send_file_upload example.
 */
//Import the PHPMailer class into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
require '../vendor/autoload.php';
require '../vendor/phpmailer/phpmailer/src/SMTP.php'; 


echo('hello');
$_POST['to'] = 'hunter.warren@gmail.com';
$to = $_POST['to'];

if (array_key_exists('to', $_POST)) {
    
    $err = false;
    $msg = '';
    $email = '';
    //Apply some basic validation and filtering to the subject
    if (array_key_exists('subject', $_POST)) {
        $subject = substr(strip_tags($_POST['subject']), 0, 255);
    } else {
        $subject = 'No subject given';
    }
    //Apply some basic validation and filtering to the query
    if (array_key_exists('query', $_POST)) {
        //Limit length and strip HTML tags
        $query = substr(strip_tags($_POST['query']), 0, 16384);
    } else {
        $query = '';
        $msg = 'No query provided!';
        $err = true;
    }
    //Apply some basic validation and filtering to the name
    if (array_key_exists('name', $_POST)) {
        //Limit length and strip HTML tags
        $name = substr(strip_tags($_POST['name']), 0, 255);
    } else {
        $name = '';
    }
    //Validate to address
    //Never allow arbitrary input for the 'to' address as it will turn your form into a spam gateway!
    //Substitute appropriate addresses from your own domain, or simply use a single, fixed address
    // if (array_key_exists('to', $_POST) and in_array($_POST['to'], ['sales', 'support', 'accounts'])) {
    //     $to = $_POST['to'] . '@example.com';
    // } else {
    //     $to = 'support@example.com';
    // }
    //Make sure the address they provided is valid before trying to use it
    if (array_key_exists('email', $_POST) and PHPMailer::validateAddress($_POST['email'])) {
        $email = $_POST['email'];
    } else {
        $msg .= "Error: invalid email address provided";
        $err = true;
    }
    if (!$err) {
        $mail = new PHPMailer;
        $mail->isSMTP();
        $mail->SMTPSecure = 'ssl';
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPDebug = 2;
        echo("no error");
        // $mail->Host = gethostbyname('smtp.gmail.com');

        $mail->SMTPAuth = true;  
        $mail->Port = 465;
        $mail->CharSet = 'utf-8';
        $mail->Username = "hunter.warren@hunterwarren.us"; // SMTP account username example
        $mail->Password = "72dDR_*L-z";
        //It's important not to use the submitter's address as the from address as it's forgery,
        //which will cause your messages to fail SPF checks.
        //Use an address in your own domain as the from address, put the submitter's address in a reply-to
        $mail->setFrom('hunter.warren@hunterwarren.us', (empty($name) ? 'Contact form' : $name));
        $mail->addAddress($to);
        $mail->addReplyTo($email, $name);
        // $mail->Subject = 'Contact form: ' . $subject;
        $mail->Body = $query;
        if (!$mail->send()) {
            echo $msg .= "Mailer Error: " . $mail->ErrorInfo;
        } else {
            echo $msg .= "Message sent!";
        }
        header('Location:http://hunterwarren.us');
        exit;

    }

    }   

    ?>