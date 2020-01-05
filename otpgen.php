<?php

require_once('database/Database.php');
$db = new Database();
$mno = $_POST['mno']; 


  function generatePassword($length, $strength) {
            $vowels = 'aeuy';
            $consonants = 'BDGHJLMNPQRSTVWXZ';
            if ($strength & 1) {
                $consonants .= 'bdghjmnpqrstvz';
            }
            if ($strength & 2) {
                $vowels .= "AEUY";
            }
            if ($strength & 4) {
                $consonants .= '23456789';
            }
            if ($strength & 8) {
                $consonants .= '@#$%';
            }
            $password = '';
            $alt = time() % 2;
            for ($i = 0; $i < $length; $i++) {
                if ($alt == 1) {
                    $password .= $consonants[(rand() % strlen($consonants))];
                    $alt = 0;
                } else {
                    $password .= $vowels[(rand() % strlen($vowels))];
                    $alt = 1;
                }
            }
            return $password;
        }

        $otp = generatePassword(6, 4);
       
$sql = "UPDATE users SET otp = '$otp' where mno = '$mno'";
$saveChanges = $db->updateRow($sql);

if ($saveChanges) {
    
//post
$url = "https://www.sms4india.com/api/v1/sendCampaign";
$message = urlencode("Your OTP is : ".$otp); // urlencode your message
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

    $return['valid'] = true;
}else{
    $return['valid'] = false;
}
echo json_encode($return);
