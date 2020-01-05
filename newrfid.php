<?php
$mno = $_GET['kj'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Gradient Able bootstrap admin template by codedthemes</title>


<!--[if lt IE 11]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="Codedthemes">

<link rel="icon" href="assets\images\favicon.ico" type="image/x-icon">

<link rel="stylesheet" href="assets\css\style.css">
</head>
<div class="auth-wrapper">

<div class="auth-content">
<div class="card">
<div class="row align-items-center text-center">
<div class="col-md-12">
<div class="card-body">
<img src="assets\images\logo-dark.png" alt="" class="img-fluid mb-4">
<h4 class="mb-3 f-w-400">RFID NUMBER</h4>
  <form class="needs-validation" novalidate="" id="form-rfid">
                                              
<div class="input-group mb-4">
<div class="input-group-prepend">
<span class="input-group-text"><i class="fa fa-tag"></i></span>
</div>
    <input type="hidden"  id="mno" value="<?php echo $mno; ?>">

    <input type="number" class="form-control" placeholder="RFID NUMBER" id="rfid" required>
</div>
    <button class="btn btn-block btn-primary mb-4"  type="submit">Save</button>
</form>
</div>


  
</div>
</div>
</div>
</div>

</div>

<?php include_once 'model/msg.php'; ?>
    

<script src="assets\js\vendor-all.min.js"></script>
<script src="assets\js\plugins\bootstrap.min.js"></script>
<script src="assets\js\waves.min.js"></script>
<script src="assets\js\user.js"></script>

</html>
