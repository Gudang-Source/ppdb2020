<?php
include "layouts/header.php";

//hitung semua Pendaftar
$sqlSemuaPendaftar = "SELECT * FROM datasiswa";
$resultSemuaPendaftar = mysqli_query($conn,$sqlSemuaPendaftar);
$hitungSemuaPendaftar = mysqli_num_rows($resultSemuaPendaftar);

//hitung Jurusan RPL
$sqlRpl = "SELECT * FROM datasiswa WHERE jurusan='RPL'";
$resultRpl = mysqli_query($conn,$sqlRpl);
$hitungRpl = mysqli_num_rows($resultRpl);
if($hitungRpl>0){
	$hitungRpl = mysqli_num_rows($resultRpl);
}else{
	$hitungRpl = "Tidak ada yang mendaftar";
}


//hitung Jurusan TKJ
$sqlTkj = "SELECT * FROM datasiswa WHERE jurusan='TKJ'";
$resultTkj = mysqli_query($conn,$sqlTkj);
$hitungTkj = mysqli_num_rows($resultTkj);
if($hitungTkj>0){
	$hitungTkj = mysqli_num_rows($resultTkj);
}else{
	$hitungTkj = "Tidak ada yang mendaftar";
}

//hitung jurusan akuntansi
$sqlAkuntansi = "SELECT * FROM datasiswa WHERE jurusan='AKUNTANSI'";
$resultAkuntansi = mysqli_query($conn,$sqlAkuntansi);
$hitungAkuntansi = mysqli_num_rows($resultAkuntansi);
if($hitungAkuntansi>0){
	$hitungAkuntansi = mysqli_num_rows($resultAkuntansi);
}else{
	$hitungAkuntansi = "Tidak ada yang mendaftar";
}

//Hitung jurusan OTKP
$sqlOtkp = "SELECT * FROM datasiswa WHERE jurusan='OTKP'";
$resultOtkp = mysqli_query($conn,$sqlOtkp);
$hitungOtkp = mysqli_num_rows($resultOtkp);
if($hitungOtkp>0){
	$hitungOtkp = mysqli_num_rows($resultOtkp);
}else{
	$hitungOtkp = "Tidak ada yang mendaftar";
}

//hitung jurusan multimedia
$sqlMultimedia = "SELECT * FROM datasiswa WHERE jurusan='MULTIMEDIA'";
$resultMultimedia = mysqli_query($conn,$sqlMultimedia);
$hitungMultimedia = mysqli_num_rows($resultMultimedia);
if($hitungMultimedia>0){
	$hitungMultimedia = mysqli_num_rows($resultMultimedia);
}else{
	$hitungMultimedia = "Tidak ada yang mendaftar";
}

//hitung jurusan TKR
$sqlTkr = "SELECT * FROM datasiswa WHERE jurusan='TKR'";
$resultTkr = mysqli_query($conn,$sqlTkr);
$hitungTkr = mysqli_num_rows($resultTkr);
if($hitungTkr>0){
	$hitungTkr = mysqli_num_rows($resultTkr);
}else{
	$hitungTkr = "Tidak ada yang mendaftar";
}


?>
    <div class="content-wrapper">
	<div class="container" id="wadah">
		<div class="row">
			<div class="col-md-12">
				<h4><font color="#3498db" >BERANDA</h4>
				</font>
				<br>
			</div>
		</div>
		<!-- Code BERANDA PENGUMUMAN -->
		<!-- <div class="container"> -->
		<div class="col-md-12">
			<div class="panel panel-success">
				<div class="panel-heading">	<a href="dataSiswa.php" style="text-decoration: none; color: #3c763d;"><b>Semua Pendaftar</a>
					</b>
				</div>
				<div class="panel-body">
					<p>
						<?=$hitungSemuaPendaftar; ?>
					</p>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="panel panel-success">
				<div class="panel-heading">	<b>Jurusan TKJ</b>
				</div>
				<div class="panel-body">
					<p>
						<?=$hitungTkj; ?>
					</p>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="panel panel-success">
				<div class="panel-heading">	<b>Jurusan RPL</b>
				</div>
				<div class="panel-body">
					<p>
						<?= $hitungRpl; ?>
					</p>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="panel panel-success">
				<div class="panel-heading">	<b>AKUNTANSI</b>
				</div>
				<div class="panel-body">
					<p>
						<?= $hitungAkuntansi;?>
					</p>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="panel panel-success">
				<div class="panel-heading">	<b>OTKP</b>
				</div>
				<div class="panel-body">
					<p>
						<?= $hitungOtkp;?>
					</p>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="panel panel-success">
				<div class="panel-heading">	<b>MULTIMEDIA</b>
				</div>
				<div class="panel-body">
					<p>
						<?= $hitungMultimedia;?>
					</p>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="panel panel-success">
				<div class="panel-heading">	<b>TKR</b>
				</div>
				<div class="panel-body">
					<p>
						<?= $hitungTkr;?>
					</p>
				</div>
			</div>
		</div>
		</tr>
		</table>
	</div>
</div>


<?php include "layouts/footer.php"; ?>