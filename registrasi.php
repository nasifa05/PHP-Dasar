<?php
require 'functions.php';

if( isset($_POST["register"]) ) {

    if( registrasi($_POST) > 0 ) {
        echo "<script>
                alert('user baru berhasil ditambahkan!');
            </script>";
    } else {
        echo mysqli_error($conn);
    }
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Halaman Registrasi</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
body {
	color: #fff;
	background: rgba(0, 0, 0, 0.3);
}
.form-action {
	min-height: 41px;
	background: #fff;
	box-shadow: none !important;
	border-color: #e3e3e3;
}
.form-control:focus {
	border-color: #70c5c0;
}
.form-control, .btn {
	border-radius: 2px;
}
.regis-form {
	width: 350px;
	margin: 0 auto;
	padding: 100px 0 30px;
}
.regis-form form {
	color: #7a7a7a;
	border-radius: 2px;
	margin-bottom: 15px;
	font-size: 13px;
	background: #ececec;
	box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
	padding: 30px;
	position: relative;
}
.regis-form h1 {
	font-size: 40px;
	margin: 35px 0 25px;
}
.regis-form .avatar {
	position: absolute;
	margin: 0 auto;
	left: 0;
	right: 0;
	top: -50px;
	width: 95px;
	height: 95px;
	border-radius: 50%;
    background: #70c5c0;
	z-index: 9;
	padding: 15px;
	box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
}
.regis-form .avatar img {
	width: 100%;
}
.regis-form input[type="checkbox"] {
	position: relative;
	top: 1px;
}
.regis-form .btn, .regis-form .btn:active {
	font-size: 16px;
	font-weight: bold;
	background: #70c5c0 !important;
	border: none;
	margin-bottom: 20px;
}
.regis-form .btn:hover, .regis-form .btn:focus {
	background: #50b8b3 !important;
}
.regis-form a {
	color: #fff;
	text-decoration: underline;
}
.regis-form a:hover {
	text-decoration: none;
}
.regis-form form a {
	color: #7a7a7a;
	text-decoration: none;
}
.regis-form form a:hover {
	text-decoration: underline;
}
.regis-form .bottom-action {
	font-size: 14px;
}
</style>
</head>
<body>
    <div class="regis-form">
    
<h1>Halaman Registrasi</h1>

<form action="" method="post">

        <div class="form-group">
            <input type="text" class="form-control" name="username" id="username" placeholder="Username " required="required">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" name="password" id="password" placeholder="Password " required="required">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" name="password2" id="password2" placeholder="Konfirmasi Password " required="required">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-lg btn-block" name="register">Register!</button>
        </div>

</form>

    </div>
</body>
</html>