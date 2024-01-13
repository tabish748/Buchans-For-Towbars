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
    $discountcode = $_POST['Discountcode']; // required
    $email = $_POST['Email']; // required
    $hometellno = $_POST['Hometellno']; // required
    $mobileno = $_POST['Mobileno']; // required
    $fittingcenter = $_POST['Fittingcenter']; // required
    $bookingdate = $_POST['Bookingdate']; // required
    $bookingtime = $_POST['Bookingtime']; // required
    $callrefcode = $_POST['Callrefcode']; // required
    $vehiclemake = $_POST['Vehiclemake']; // required
    $vehiclemodel = $_POST['Vehiclemodel']; // required
    $vehicletype = $_POST['vehicletype']; // required
    $vehicleyear = $_POST['Vehicleyear']; // required
    $regprefix = $_POST['Regprefix']; // required
    $towbartype = $_POST['Towbartype']; // required
    $towbar = $_POST['Towbar']; // required
    $towing = $_POST['Towing']; // required
    $radiobutton = $_POST['radiobutton']; // required
    $cardtype = $_POST['Cardtype']; // required
    $cardnumber = $_POST['Cardnumber']; // required
    $startdatebooking = $_POST['Startdatebooking']; // required
    $enddatebooking = $_POST['Enddatebooking']; // required
    $securityno = $_POST['Securityno']; // required
    $message = $_POST['Message']; // required
    $hunt = $_POST['bt']; // required
    //  $selected = $_POST['drop'];
    //   echo 'You have chosen: ' . $selected;
      
    $email_to = "enquiries@buchansfortowbars.co.uk";
    // $email_to = "";
    $email_subject = "Buchans For Towbars- Website- New Online Booking";
    
    
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
    <p>We have received your booking request and will contact you soon.</p>
    
    <p>Please make sure you entered your email address and details correctly, this ensures we can respond to your request effectively.
</p>
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
    <td>Discount code:  </td>
    <td>{$discountcode}</td>
    </tr>
    
     <tr>
    <td>Email:  </td>
    <td>{$email}</td>
    </tr>
    <tr>
    <td>Home Tel no:  </td>
    <td>{$hometellno}</td>
    </tr>
     <tr>
    <td>Mobile no:  </td>
    <td>{$mobileno}</td>
    </tr>
    
      <tr>
    <td>Fitting Center:  </td>
    <td>{$fittingcenter}</td>
    </tr>
    
    <tr>
    <td>Booking Date:  </td>
    <td>{$bookingdate}</td>
    </tr>
    <tr>
    <td>Booking Time:  </td>
    <td>{$bookingtime}</td>
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
    <td>{$regprefix}</td>
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
    <td>Card Type:  </td>
    <td>{$cardtype}</td>
    </tr>
    
    <tr>
    <td>Card Number:  </td>
    <td>{$cardnumber}</td>
    </tr>
    <tr>
    <td>Start Booking Date:  </td>
    <td>{$startdatebooking}</td>
    </tr>
    <tr>
    <td>End Booking Date:  </td>
    <td>{$enddatebooking}</td>
    </tr>
      <tr>
    <td>Security:  </td>
    <td>{$securityno}</td>
    </tr>
    <tr>
    <td>Message:  </td>
    <td>{$message}</td>
    </tr>
    </table>
    </body>
    </html>";

//   $email_message .= "Name: " . clean_string($name) . "<br>";
//     $email_message .= "Postal Code: " . clean_string($postal) . "<br>";
//      $email_message .= "Company: " . clean_string($company) . "<br>";
//      $email_message .= "Account no: " . clean_string($accno) . "<br>";
//      $email_message .= "Discount Code: " . clean_string($discountcode) . "<br>";
//      $email_message .= "Email: " . clean_string($email) . "<br>";
//      $email_message .= "Home Telephone No: " . clean_string($hometellno) . "<br>";
//      $email_message .= "Mobile No: " . clean_string($mobileno) . "<br>";
//      $email_message .= "Fitting Center: " . clean_string($fittingcenter) . "<br>";
//      $email_message .= "Booking Date: " . clean_string($bookingdate) . "<br>";
//      $email_message .= "Booking Time: " . clean_string($bookingtime) . "<br>";
//      $email_message .= "Call Ref Code: " . clean_string($callrefcode) . "<br>";
//     $email_message .= "Vehicle Make: " . clean_string($vehiclemake) . "<br>";
//     $email_message .= "Vehicle model: " . clean_string($vehiclemodel) . "<br>";
//     $email_message .= "Vehicle type: " . clean_string($vehicletype) . "<br>";
//     $email_message .= "Towbar: " . clean_string($towbar) . "<br>";
//     $email_message .= "Towing: " . clean_string($towing) . "<br>";
//     $email_message .= "Electrics : " . clean_string($radiobutton) . "<br>";
//     $email_message .= "Card type: " . clean_string($cardtype) . "<br>";
//     $email_message .= "Card number: " . clean_string($cardnumber) . "<br>";

//      $email_message .= "Start date booking: " . clean_string($startdatebooking) . "<br>";
//     $email_message .= "End date booking: " . clean_string($enddatebooking) . "<br>";
//     $email_message .= "Security no: " . clean_string($securityno) . "<br>";
//     $email_message .= "Message: " . clean_string($message) . "<br>";
    // create email headers
    // Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    
    // More headers
    $headers .= 'From: ' . $email . "\r\n";
    $headers .= "Cc:" . $email;

    if($hunt === ""){
    if(mail($email_to, $email_subject, $email_message, $headers)) {
    $_SESSION['bname']=  $name;
    $_SESSION['bpostal']=  $postal;
    $_SESSION['bcompany']=  $company;
    $_SESSION['bbaccno']=  $accno;
    $_SESSION['bdiscountcode']=  $discountcode; 
    $_SESSION['bemail']=  $email; 
    $_SESSION['bhometellno']=  $hometellno; 
    $_SESSION['bmobileno']=  $mobileno; 
    $_SESSION['bfittingcenter']=  $fittingcenter; 
    $_SESSION['bbookingdate']=  $bookingdate; 
    $_SESSION['bbookingtime']=  $bookingtime; 
    $_SESSION['bcallrefcode']=  $callrefcode; 
    $_SESSION['bvehiclemake']=  $vehiclemake; 
    $_SESSION['bvehiclemodel']=  $vehiclemodel; 
    $_SESSION['bvehicletype']=  $vehicletype; 
    $_SESSION['bvehicleyear']=  $vehicleyear; 
    $_SESSION['bregprefix']=  $regprefix; 
    
    $_SESSION['btowbar']=  $towbar; 
    $_SESSION['btowing']=  $towing;
    $_SESSION['bradiobutton']=  $radiobutton;
    $_SESSION['bcardtype']=  $cardtype; 
    $_SESSION['bcardnumber']=  $cardnumber; 
    $_SESSION['bstartdatebooking']=  $startdatebooking; 
    $_SESSION['benddatebooking']=  $enddatebooking; 
    $_SESSION['bsecurityno']=  $securityno; 


    $_SESSION['bmessage']=  $message; 
        header('Location: thankubooking.php');
        exit;
    }
    else {
        echo "mail error";
    }
    }
    ob_end_flush();
}