<?php
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
  header('Location: index.html');
  exit;
}

function clean($v){
  return htmlspecialchars($v ?? "");
}

$name    = clean($_POST['name']);
$email   = clean($_POST['email']);
$phone   = clean($_POST['phone']);
$gender  = clean($_POST['gender']);
$course  = clean($_POST['course']);
$address = nl2br(clean($_POST['address']));
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Registration Successful</title>
<link rel="stylesheet" href="css/style.css">

<style>
.success{text-align:center; animation:pop 0.8s}
.check{font-size:60px;color:#22c55e}
.details{text-align:left;margin-top:15px}
.details p{margin:5px 0}
.back{
  display:inline-block;
  margin-top:15px;
  padding:8px 15px;
  background:#22c55e;
  color:#000;
  text-decoration:none;
  border-radius:8px;
}
</style>
</head>
<body>

<div class="card success">
  <div class="check">✔</div>
  <h2>Registration Successful</h2>

  <div class="details">
    <p><b>Name:</b> <?=$name?></p>
    <p><b>Email:</b> <?=$email?></p>
    <p><b>Phone:</b> <?=$phone?></p>
    <p><b>Gender:</b> <?=$gender?></p>
    <p><b>Course:</b> <?=$course?></p>
    <p><b>Address:</b> <?=$address?></p>
  </div>

  <a class="back" href="thankyou.html">Continue</a>
</div>

</body>
</html>
