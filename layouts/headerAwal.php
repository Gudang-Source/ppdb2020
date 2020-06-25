<!-- <?php
session_start();
if (isset($_SESSION['nama'])) {
    //echo "Anda belum Logout Log out dulu <a href='keluar.php'>Keluar</a>" ;
    //echo "<br>";
    //echo "Kembali ke Halaman <a href='beranda.php'>Home</a>";

    header("location:if_logout.php");
} 


    ?>
 -->
<html id="home">

<head>
	<title>PPDB 2020</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="style/assets/css/style.css" rel="stylesheet" />
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
	<script src="js/jquery-3.3.1.min.js"></script>
</head>

<body>
	<!--Navbar-->
	<header>
		<nav class="navbar navbar-inverse navbar-fixed-top">
			<div class="container-fluid " style="background-color : #1c1c1c">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" style="background-color : 1c1c1c;">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="masuk.php" class="page-scroll">Login</a>
						</li>
					</ul>
					<ul class="nav navbar-nav navbar-left">
						<li><a href="daftarPpdb.php" class="page-scroll">Daftar PPDB 2020</a>
						</li>
						<li><a href="contact.php" class="page-scroll">Kontak Kami</a>
						</li>
						<li><a href="index.php" class="page-scroll">Tentang Kami</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</header>