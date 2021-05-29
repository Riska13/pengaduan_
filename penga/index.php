<!DOCTYPE html>
<html>

<head>
	<title>Aplikasi Pengaduan Masyarakat</title>
	<link rel="shortcut icon" href="https://cepatpilih.com/image/logo.png">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

	<link href="//cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

	<link rel="stylesheet" type="text/css" href="css/style.css">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">

</head>

<body style="background: url(img/dashadmin.png); background-size: cover;">
<a href="https://drive.google.com/file/d/1eN9je-yac1ZxRaKlfTp1KmqxcHa5Ubz4/view?usp=sharing">
</a>
	<div class="container">


		<?php
		include 'conn/koneksi.php';
		if (@$_GET['p'] == "") {
			include_once 'login.php';
		} elseif (@$_GET['p'] == "login") {
			include_once 'login.php';
		} elseif (@$_GET['p'] == "daftarakun") {
			include_once 'daftarakun.php';
		} elseif (@$_GET['p'] == "logout") {
			include_once 'logout.php';
		}
		?>

	</div>
</body>

</html>