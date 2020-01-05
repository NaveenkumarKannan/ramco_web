<?php
require_once('database/Database.php');
$db = new Database();
$id = $_POST['userid'];
$sql = "SELECT * FROM users where id = '$id'";
$q = $db->getRow($sql);
$email = $q['email'];
$mno = $q['mno'];
$message = 'Today Offers \n Check the url: ';
//post
$url = "https://www.sms4india.com/api/v1/sendCampaign";
$message = urlencode("Today Offers \n Check the url:"); // urlencode your message
$curl = curl_init();
curl_setopt($curl, CURLOPT_POST, 1); // set post data to true
curl_setopt($curl, CURLOPT_POSTFIELDS, "apikey=EIJZRW02NGVOYX7IUGRGI84JRXD7IL43&secret=11EO72EMX89GPIN7&usetype=stage&phone=$mno&senderid=kjdd&message=$message"); // post data
// query parameter values must be given without squarebrackets.
// Optional Authentication:
curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
$result = curl_exec($curl);
curl_close($curl);
echo $result;

require_once('PHPMailer/_lib/class.phpmailer.php');
$mail = new PHPMailer();

$mail->IsSMTP(); // telling the class to use SMTP
$mail->SMTPDebug = 1;                     // enables SMTP debug information (for testing)
// 1 = errors and messages
// 2 = messages only
$mail->SMTPAuth = true;                  // enable SMTP authentication
$mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
$mail->Host = "smtp.gmail.com";      // sets GMAIL as the SMTP server
$mail->Port = 465;                   // set the SMTP port for the GMAIL server
$mail->Username = "helloarcus@gmail.com";  // GMAIL username
$mail->Password = "itsanewp@ssw0rd";  // GMAIL password
$x = $id;
$arr = array("bYr'A12,F5c6u8il2.djzxc8w120rt45azx", "$x");
$z = implode("_", $arr);
$mail->Subject = "Today's Offer";
$mail->Body = "Check the URL: http://arcus.co.in/rk/ppbr.php?xse=$z"; // optional, comment out and test
$mail->AltBody = "Check the URL: http://arcus.co.in/rk/ppbr.php?xse=$z"; // optional, comment out and test
$address = $email; // add your address here 
$mail->AddAddress($address, "Gmail Test");

if (!$mail->Send()) {
//    echo "Mailer Error: " . $mail->ErrorInfo;
    $return['valid'] = false;
    $return['msg'] = 'Password not accepted! ';
    // echo json_encode($mail);
} else {

    echo "Message sent!";
}
 $return['valid'] = true;
echo json_encode($return);
?>  