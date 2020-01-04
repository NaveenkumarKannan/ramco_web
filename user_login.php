<?php

require_once('database/Database.php');
$db = new Database();
if (isset($_POST['un']) && isset($_POST['pw'])) {
    $username = $_POST['un'];
    $password = $_POST['pw'];
    $password = md5($password);
    $return['valid'] = false;
    $sql = "SELECT * FROM admin
				WHERE username = ?
				AND password = ?
				LIMIT 1";
    $saveChanges = $db->getRow($sql, [$username, $password]);
    if ($saveChanges > 0) {
        $return['valid'] = true;
        $return['url'] = "index.html";
    }
    echo json_encode($return);
}