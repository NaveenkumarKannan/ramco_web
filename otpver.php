<?php

require_once('database/Database.php');
$db = new Database();
//$otp = $_POST['otpnum']; 
        
$sql = "select * from users ";
$saveChanges = $db->getRow($sql);

if ($saveChanges) { 
    $return['valid'] = true;
}else{
    $return['valid'] = false;
}
echo json_encode($return);
