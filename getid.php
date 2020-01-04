<?php

require_once('database/Database.php');
$db = new Database();
$sql = "select id from user";
$saveChanges = $db->getRows($sql);

$return['data'] = $saveChanges;

echo json_encode($return);
