 <?php
    session_start();
    include_once ("koneksi.php");
    include_once ("update.php");

    if(isset($_GET['cari'])){
        $cari = $_GET['cari'];
    }

    if(!isset($_SESSION['nama'])){
        header('location:masuk.php');
    }

    
?>

<html>

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<title>PPDB 2020 ADMIN</title>
	<!-- CSS Style Code -->
	<link href="css/bootstrap.min.css" rel="stylesheet" />
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
	<link href="style/assets/css/style.css" rel="stylesheet" />
	<script src="js/jquery-3.3.1.min.js"></script>
</head>
<!-- Code Body Anti Klik kanan -->

<body>
	<!-- Code JavaScripts -->
	<script src="style/assets/js/jquery-1.11.1.js"></script>
	<script src="style/assets/js/bootstrap.js"></script>
	<!-- header Akun -->
	<header>
		<div class="container">
			<div class="row">
				<div class="col-md-12">	<font color="#000000">
                    Selamat Datang, 
					<b><?php echo $data['nama'] ?>&nbsp; </b></font>
					<a href="keluar.php" class="btn btn-xs btn-danger">Logout</a>
				</div>
			</div>
		</div>
	</header>
	<!-- HEADER END-->
	<div class="navbar navbar-inverse set-radius-zero">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<h1>PPDB 2020</h1>
			</div>
		</div>
	</div>
	<!-- Code MENU -->
	<section class="menu-section">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="navbar-collapse collapse ">
						<ul id="menu-top" class="nav navbar-nav navbar-right">
							<li>
                                <a href="beranda.php">Beranda</a>
							</li>
							<li>
                                <a href="datasiswa.php">Data Siswa</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>