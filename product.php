<?php

require_once('database/Database.php');
$db = new Database();
$name = $_POST['name'];
$code = $_POST['code'];
$mrp = $_POST['mrp'];
$sell = $_POST['sell'];
$link = mysqli_connect("localhost", "root", "", "ramco") or die("Error" . mysqli_error($link));
if ($_FILES['file_data']['name'] != '') {
    $file_path = $_FILES['file_data']['tmp_name'];
    $file_type = $_FILES['file_data']['type'];
    $file_size = $_FILES['file_data']['size'];
    $file_name = $_FILES['file_data']['name'];
    $ImageExt = substr($file_name, strrpos($file_name, '.'));
    if (($ImageExt == '.jpeg') || ($ImageExt == '.jpg') || ($ImageExt == '.png') || ($ImageExt == '.pdf') || ($ImageExt == '.doc') || ($ImageExt == '.docx')) {
        $data = mysqli_real_escape_string($link, file_get_contents($file_path));
        $des = "upload_pic/" . time() . $ImageExt;
        $file_path = "upload_pic/" . time() . $ImageExt;
        move_uploaded_file($file_path = $_FILES['file_data']['tmp_name'], $des);
    }
} else {
    $file_path = 0;
}
$sql = "INSERT INTO product (name,code,amt,sp,path)
				VALUES(?,?,?,?,?)";
$saveChanges = $db->insertRow($sql, [$name, $code, $mrp, $sell, $file_path]);

if ($saveChanges) {
    $return['valid'] = true;
}
echo json_encode($return);
