<?php

require_once('database/Database.php');
$db = new Database();
$mno = $_POST['mno'];
$rfid = $_POST['rfid'];
$sql = "UPDATE users SET rfid = '$rfid' where mno = '$mno'";
$saveChanges = $db->updateRow($sql);

if ($saveChanges) {
    $return['valid'] = true;
} else {
    $return['valid'] = false;
}
echo json_encode($return);
