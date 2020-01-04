<?php

require_once('database/Database.php');
$db = new Database();

$c_code = $_POST['c_code'];
$p_code = $_POST['code'];
$start_date = $_POST['sdate'];
$end_date = $_POST['edate'];
$discount_type = $_POST['discount'];
$dvalue = $_POST['dvalue'];
$link = mysqli_connect("localhost", "root", "", "ramco") or die("Error" . mysqli_error($link));
$sql = "INSERT INTO coupon (p_code,start_date,end_date,discount_type,dvalue,c_code)
				VALUES(?,?,?,?,?,?)";
$saveChanges = $db->insertRow($sql, [$p_code, $start_date, $end_date, $discount_type, $dvalue,$c_code]);

if ($saveChanges) {
    $return['valid'] = true;
}
echo json_encode($return);
