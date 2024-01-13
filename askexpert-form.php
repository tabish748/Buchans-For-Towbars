<?php
ob_start();
session_start();

function clean_string($string)
{
    $bad = array("content-type", "bcc:", "to:", "cc:", "href");
    return str_replace($bad, "", $string);
}
    
function problem($error)
{
    echo "We are very sorry, but there were error(s) found with the form you submitted. ";
    echo "These errors appear below.<br><br>";
    echo $error . "<br><br>";
    echo "Please go back and fix these errors.<br><br>";
    die();
}
    
if (isset($_POST['Email'])) {

  

    $email = $_POST['Email']; // required
     $hunt = $_POST['bt']; // required
    $message = $_POST['Message']; // required
    //  $selected = $_POST['drop'];
    //   echo 'You have chosen: ' . $selected;
      
    $email_to = "enquiries@buchansfortowbars.co.uk";
    // $email_to = "";
    $email_subject = "Buchans For Towbars- Ask The Experts";
    
    
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

    if (!preg_match($email_exp, $email)) {
        $error_message .= 'The Email address you entered does not appear to be valid.<br>';
    }

    $string_exp = "/^[A-Za-z .'-]+$/";

   

    if (strlen($message) < 2) {
        $error_message .= 'The Message you entered do not appear to be valid.<br>';
    }

  
    $email_message = "<html>
    <head>
    <title>HTML email</title>
    </head>
    <body>
    <p>Thank you {$email} </p>
    <p>We have received your question and will contact you soon.</p>
    
    <p>Please make sure you entered your email address and details correctly, this ensures we can respond to your query as soon as possible.</p>
    <p>Regards</p> 
   
    
   <b> Buchans for Towbars</b> 

<p>Information posted as follows:</p>
    <table>
   
    <tr>
    <td>Email:  </td>
    <td>{$email}</td>
    </tr>
    
    <tr>
    <td>Message:  </td>
    <td>{$message}</td>
    </tr>
    </table>
    </body>
    </html>";

    

    // $email_message .= "Email: " . clean_string($email) . "<br>";
    // $email_message .= "Message: " . clean_string($message) . "<br>";
   

    // create email headers
    // Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    
    // More headers
    $headers .= 'From: ' . $email . "\r\n";
    $headers .= "Cc:" . $email;


    if($hunt === "")
    {
    if(mail($email_to, $email_subject, $email_message, $headers)) {
        $_SESSION['aemail'] =  $email;
        $_SESSION['amessage'] =  $message;
        header('Location: thankstoask.php');
        exit;
    }
    else {
        echo "mail error";
    }
    }
    ob_end_flush();
}