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

    // validation expected data exists
    if (
        !isset($_POST['Email']) 
    ) {
        problem('We are sorry, but there appears to be a problem with the form you submitted.');
    }

  $name = $_POST['Name']; // required
    $postal = $_POST['Postal']; // required
    $company = $_POST['Company']; // required
    $accno = $_POST['Accno']; // required
    $email = $_POST['Email']; // required
    $tellno = $_POST['Tellno']; // required
    $callrefcode = $_POST['Callrefcode']; // required
    $vehiclemake = $_POST['Vehiclemake']; // required
    $vehiclemodel = $_POST['Vehiclemodel']; // required
    $vehicletype = $_POST['Vehicletype']; // required
    $vehicleyear = $_POST['Vehicleyear']; // required
    $registrationno = $_POST['Registrationno']; // required
    $reversingsensor = $_POST['Reversingsensor']; // required
    $towbartype = $_POST['Towbartype']; // required
    $towbar = $_POST['Towbar']; // required
    $towing = $_POST['Towing']; // required
    $radiobutton = $_POST['radiobutton']; // required
    


    $message = $_POST['Message']; // required
     $hunt = $_POST['bt']; // required
    //  $selected = $_POST['drop'];
    //   echo 'You have chosen: ' . $selected;
      
    $email_to = "enquiries@buchansfortowbars.co.uk";
    // $email_to = "";
    $email_subject = "Buchans For Towbars- Towbar Quote Request";
    
    
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
    <p>Thank you {$name} </p>
    <p>We have received your towbar quotation request and will contact you soon.</p>
    
    <p>Please make sure you entered your email address and details correctly, this ensures we can respond to your request effectively.</p>
    <p>Regards</p> 
    <p>Sales Team</p> <br>
    
   <b> Buchans for Towbars</b> 

<p>Information posted as follows:</p>
    <table>
   <tr>
    <td>Name:  </td>
    <td>{$name}</td>
    </tr>
        <tr>
    <td>Post Code:  </td>
    <td>{$postal}</td>
    </tr>
        <tr>
    <td>Company:  </td>
    <td>{$company}</td>
    </tr>
     <tr>
    <td>Acc no:  </td>
    <td>{$accno}</td>
    </tr>
     <tr>
    <td>Email:  </td>
    <td>{$email}</td>
    </tr>
    <tr>
    <td>Tel no:  </td>
    <td>{$tellno}</td>
    </tr>
    
    <tr>
    <td>Call Ref Code:  </td>
    <td>{$callrefcode}</td>
    </tr>
    
    <tr>
    <td>Vehicle Make:  </td>
    <td>{$vehiclemake}</td>
    </tr>
    
    <tr>
    <td>Vehicle Model:  </td>
    <td>{$vehiclemodel}</td>
    </tr>
    
    <tr>
    <td>Vehicle Type:  </td>
    <td>{$vehicletype}</td>
    </tr>
    
    <tr>
    <td>Vehicle Year:  </td>
    <td>{$vehicleyear}</td>
    </tr>
   
   <tr>
    <td>Vehicle Registration Number:  </td>
    <td>{$registrationno}</td>
    </tr>

    <tr>
    <td>Reversing Sensor:  </td>
    <td>{$reversingsensor}</td>
    </tr>
    
    <tr>
    <td>Towbar Type:  </td>
    <td>{$towbartype}</td>
    </tr>
    
    <tr>
    <td>Towbar:  </td>
    <td>{$towbar}</td>
    </tr>
    
    <tr>
    <td>Towing:  </td>
    <td>{$towing}</td>
    </tr>
    <tr>
    <td>Electrics Required:  </td>
    <td>{$radiobutton}</td>
    </tr>
    
    <tr>
    <td>Message:  </td>
    <td>{$message}</td>
    </tr>
    </table>
    </body>
    </html>";

    
    // $email_message .= "Customers Name: " . clean_string($name) . "<br>";
    // $email_message .= "Post Code: " . clean_string($postal) . "<br>";
    // $email_message .= "Company: " . clean_string($company) . "<br>";
    // $email_message .= "Account No: " . clean_string($accno) . "<br>";
    // $email_message .= "Email Address: " . clean_string($email) . "<br>";
    // $email_message .= "Telephone No: " . clean_string($tellno) . "<br>";
    // $email_message .= "Call Ref Code: " . clean_string($callrefcode) . "<br>";
    // $email_message .= "Vehicle Make: " . clean_string($vehiclemake) . "<br>";
    // $email_message .= "Vehicle Model: " . clean_string($vehiclemodel) . "<br>";
    // $email_message .= "Vehicle Type: " . clean_string($vehicletype) . "<br>";
    // $email_message .= "Vehicle Year: " . clean_string($vehicleyear) . "<br>";
    // $email_message .= "Registration No: " . clean_string($registrationno) . "<br>";
    // $email_message .= "Reversing Sensors: " . clean_string($reversingsensor) . "<br>";
    // $email_message .= "Towbar Type: " . clean_string($towbartype) . "<br>";
    // $email_message .= "Towbar: " . clean_string($towbar) . "<br>";
    // $email_message .= "Towing: " . clean_string($towing) . "<br>";
    // $email_message .= "Electrics Required: " . clean_string($radiobutton) . "<br>";
    
    // $email_message .= "Message: " . clean_string($message) . "<br>";
    // create email headers
    // Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    
    // More headers
    $headers .= 'From: ' . $email . "\r\n";
    $headers .= "Cc:" . $email;

     if($hunt === ""){
    if(mail($email_to, $email_subject, $email_message, $headers)) {
       $_SESSION['qname']=  $name;
    $_SESSION['qpostal']=  $postal;
    $_SESSION['qcompany']=  $company;
    $_SESSION['qaccno']=  $accno; 
    $_SESSION['qemail']=  $email; 
    $_SESSION['qtellno']=  $tellno; 
    $_SESSION['qcallrefcode']=  $callrefcode; 
    $_SESSION['qvehiclemake']=  $vehiclemake; 
    $_SESSION['qvehiclemodel']=  $vehiclemodel; 
    $_SESSION['qvehicletype']=  $vehicletype; 
    $_SESSION['qvehicleyear']=  $vehicleyear; 
    $_SESSION['qregistrationno']=  $registrationno; 
    $_SESSION['qreversingsensor']=  $reversingsensor; 
    $_SESSION['qtowbartype']=  $towbartype; 
    $_SESSION['qtowbar']=  $towbar; 
    $_SESSION['qtowing']=  $towing;
    $_SESSION['qradiobutton']=  $radiobutton;
    $_SESSION['qmessage']=  $message; 
        header('Location: thanksquotes.php');
        exit;
    }
    else {
        echo "mail error";
    }
     }
    ob_end_flush();
}