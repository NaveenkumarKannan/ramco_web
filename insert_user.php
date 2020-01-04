<?php

require_once('database/Database.php');
$db = new Database();

$name = $_POST['name'];
$email = $_POST['email'];
$mno = $_POST['mno'];
//$faceid = $_POST['faceid'];

//,faceid
$sql = "INSERT INTO users (name,email,mno)
				VALUES(?,?,?)";//,?
$saveChanges = $db->insertRow($sql, [$name, $email, $mno]);//, $faceid

if ($saveChanges) {
    $return['valid'] = true;
    $return['userid'] = $db->lastID();
}else{
    $return['valid'] = false;
    $return['userid'] = null;
}
echo json_encode($return);