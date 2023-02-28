<?php 
session_start();

if( !isset($_SESSION["login"]) ) {
    header("location: login.php");
    exit;
}

require 'functions.php';

// cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ) {

    
    // cek apakah data berhasil di tambahkan atau tidak
    if( tambah($_POST) > 0 ) {
        echo "
            <script>
                alert('data berhasil ditambahkan!');
                document.location.href = 'index.php';
            </script>
        ";
    }else {
        echo "
            <script>
                alert('data gagal ditambahkan!');
                document.location.href = 'index.php';
            </script>
        ";
    }

}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Tambah data siswa</title>
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
.tambah-form {
	width: 350px;
	margin: 0 auto;
	padding: 100px 0 30px;
}
.tambah-form form {
	color: #7a7a7a;
	border-radius: 2px;
	margin-bottom: 15px;
	font-size: 13px;
	background: #ececec;
	box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
	padding: 30px;
	position: relative;
}
.tambah-form h1 {
	font-size: 40px;
	margin: 35px 0 25px;
}
.tambah-form .avatar {
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
.tambah-form .avatar img {
	width: 100%;
}
.tambah-form input[type="checkbox"] {
	position: relative;
	top: 1px;
}
.tambah-form .btn, .tambah-form .btn:active {
	font-size: 16px;
	font-weight: bold;
	background: #70c5c0 !important;
	border: none;
	margin-bottom: 20px;
}
.tambah-form .btn:hover, .tambah-form .btn:focus {
	background: #50b8b3 !important;
}
.tambah-form a {
	color: #fff;
	text-decoration: underline;
}
.tambah-form a:hover {
	text-decoration: none;
}
.tambah-form form a {
	color: #7a7a7a;
	text-decoration: none;
}
.tambah-form form a:hover {
	text-decoration: underline;
}
.tambah-form .bottom-action {
	font-size: 14px;
}
</style>
</head>
<body class="text-center">
    <div class="tambah-form">
    <h1>Tambah data siswa</h1>

    <form action="" method="post" enctype="multipart/form-data">

            <div class="form-group">
                <input type="text" class="form-control" name="nama" id="nama" placeholder="NRP" required="required">
            </div>

            <div class="form-group">
                <input type="text" class="form-control" name="nrp" id="nrp" placeholder="Nama" required="required">
            </div>

            <div class="form-group">
                <input type="text" class="form-control" name="email" id="email" placeholder="Email" required="required">
            </div>

            <div class="form-group">
                <input type="text" class="form-control" name="jurusan" id="jurusan" placeholder="Jurusan" required="required">
            </div>

            <div class="form-group">
                <label for="gambar">Gambar : </label>
                <input type="file"  name="gambar" id="gambar" placeholder="Gambar" required="required">
            </div>

            <br>

            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-lg btn-block" name="submit">Tambah Data!</button>
            </div>

    </form>

    </div>
</body>
</html>