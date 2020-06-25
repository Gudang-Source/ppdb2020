<!-- <?php
session_start();
if (isset($_SESSION['nama'])) {
    //echo "Anda belum Logout Log out dulu <a href='keluar.php'>Keluar</a>" ;
    //echo "<br>";
    //echo "Kembali ke Halaman <a href='beranda.php'>Home</a>";

    header("location:if_logout.php");
} else {


    ?>
 -->
 <?php include "layouts/headerAwal.php"; ?>
<?php 
if (isset($_POST['kirim'])) { 
    include_once('koneksi.php');
    $nisn = $_POST['nisn'];
    $nama = $_POST['nama'];
    $tempatLahir = $_POST['tempatLahir'];
    $tanggalLahir = $_POST['tanggalLahir'];
    $jenisKelamin = $_POST['jenisKelamin'];
    $noTelp = $_POST['noTelp'];
    $alamat = $_POST['alamat'];
    $email = $_POST['email'];
    $asalSekolah = $_POST['asalSekolah'];
    //upload foto
    $foto = $_FILES['foto'] ['name'];   
    $lokasiFoto = $_FILES['foto'] ['tmp_name'];
    $lokasiTujuanFoto="./foto";  
    $uploadFoto=move_uploaded_file($lokasiFoto,$lokasiTujuanFoto."/".$foto); 
    // //upload ijazah
    $ijazah=$_FILES['ijazah'] ['name'];   
    $lokasiIjazah=$_FILES['ijazah'] ['tmp_name'];
    $lokasiTujuanIjazah="./ijazah";  
    $uploadIjazah=move_uploaded_file($lokasiIjazah,$lokasiTujuanIjazah."/".$ijazah);
    // //uploadskhun
    $skhun=$_FILES['skhun'] ['name'];   
    $lokasiSkhun=$_FILES['skhun'] ['tmp_name'];
    $lokasiTujuanSkhun="./skhun";  
    $uploadSkhun=move_uploaded_file($lokasiSkhun,$lokasiTujuanSkhun."/".$skhun);
    //upload kk
    $kk=$_FILES['kk'] ['name'];   
    $lokasiKk=$_FILES['kk'] ['tmp_name'];
    $lokasiTujuanKk="./kk";  
    $uploadKk=move_uploaded_file($lokasiKk,$lokasiTujuanKk."/".$kk);
    //upload Foto NISN
    $fotoNisn=$_FILES['fotoNisn'] ['name'];   
    $lokasiFotoNisn=$_FILES['fotoNisn'] ['tmp_name'];
    $lokasiTujuanFotoNisn="./fotoNisn";  
    $uploadFotoNisn=move_uploaded_file($lokasiFotoNisn,$lokasiTujuanFotoNisn."/".$fotoNisn);
    //upload ktpOrtu
    $ktpOrtu=$_FILES['ktpOrtu'] ['name'];   
    $lokasiKtpOrtu=$_FILES['ktpOrtu'] ['tmp_name'];
    $lokasiTujuanKtpOrtu="./ktpOrtu";  
    $uploadKtpOrtu=move_uploaded_file($lokasiKtpOrtu,$lokasiTujuanKtpOrtu."/".$ktpOrtu);

	$jurusan = $_POST['jurusan']; 
	$cekUsername = mysqli_num_rows(mysqli_query($conn,"SELECT nisn FROM datasiswa WHERE nisn='$_POST[nisn]'"));
	if ($cekUsername > 0){
		echo "<script>
			alert ('NISN sudah terdaftar');
			</script>";
	  }
	  else {
    $sql = "INSERT INTO datasiswa(nisn,nama,tempatLahir,tanggalLahir,jenisKelamin,noTelp,alamat,email,asalSekolah,foto,ijazah,skhun,kk,fotoNisn,ktpOrtu,jurusan)VALUES('$nisn','$nama','$tempatLahir','$tanggalLahir','$jenisKelamin','$noTelp','$alamat','$email','$asalSekolah','$foto','$ijazah','$skhun','$kk','$fotoNisn','$ktpOrtu','$jurusan')";
    // $sql = "INSERT INTO datasiswa(nisn,nama,tempatLahir,tanggalLahir,jenisKelamin,noTelp,alamat,email,asalSekolah,foto,ijazah,skhun,kk,fotoNisn,ktpOrtu,jurusan)VALUES('$12344','Muhammad Surya','Jakarta','2020-09-09','Laki-laki','$noTelp','$alamat','$email','$asalSekolah','$foto','$ijazah','$skhun','$kk','$fotoNisn','$ktpOrtu','$jurusan')";
	$result = mysqli_query($conn, $sql);
	
    if($result){
            header("location:daftarSukses.php");
        } else {
            echo "Error : <br>".mysqli_error($conn);
	}
}
}

?>



    <!-- Halaman Pendaftaran-->
    <section class="contact" id="contact">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 text-center">
				<br>
				<br>
				<h2>PPDB 2020</h2>
				<hr>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-8 col-xs-offset-2">
				<form action="daftarPpdb.php" method="post" enctype="multipart/form-data">
					<div class="form-group">
						<table for="nisn">NISN</table>
						<input type="text" id="nisn" class="form-control" placeholder="Masukkan NISN" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')" name="nisn">
					</div>
					<div class="form-group">
						<table for="name">Nama</table>
						<input type="text" id="nama" class="form-control" placeholder="Masukkan Nama" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')" name="nama">
					</div>
					<div class="form-group">
						<table for="tempatLahir">Tempat Lahir</table>
						<input type="text" id="tempatLahir" class="form-control" placeholder="Masukkan tempatLahir" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')" name="tempatLahir">
					</div>
					<div class="form-group">
						<table for="tanggalLahir">Tanggal Lahir</table>
						<input type="date" id="tanggalLahir" class="form-control" placeholder="Masukkan tempatLahir" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')" name="tanggalLahir">
					</div>
					<label for="jenisKelamin">Jenis Kelamin</label>
					<select class="form-control" id="jenisKelamin" name="jenisKelamin">
						<option value="Laki-laki">Laki-laki</option>
						<option value="Perempuan">Perempuan</option>
					</select>
					<div class="form-group">
						<table for="noTelp">No Telepon</table>
						<input type="text" id="noTelp" class="form-control" placeholder="Masukkan No. Telepon" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')" name="noTelp">
					</div>
					<div class="form-group">
						<table for="pesan">Alamat</table>
						<textarea class="form-control" rows="7" placeholder="Masukkan Pesan" name="alamat"></textarea>
					</div>
					<div class="form-group">
						<table for="email">Email</table>
						<input type="email" id="email" class="form-control" placeholder="Masukkan Email" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')" name="email">
					</div>
					<div class="form-group">
						<table for="asalSekolah">Asal Sekolah</table>
						<input type="text" id="asalSekolah" class="form-control" placeholder="Masukkan Asal Sekolah" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')" name="asalSekolah">
					</div>
					<div class="form-group">
						<label for="foto">Foto</label>
						<input type="file" class="form-control-file" id="foto" name="foto" accept=".png">
					</div>
					<div class="form-group">
						<label for="ijazah">Ijazah</label>
						<input type="file" class="form-control-file" id="ijazah" accept=".pdf" name="ijazah">
					</div>
					<div class="form-group">
						<label for="skhun">SKHUN</label>
						<input type="file" class="form-control-file" id="skhun" accept=".pdf" name="skhun">
					</div>
					<div class="form-group">
						<label for="kk">Kartu Keluarga</label>
						<input type="file" class="form-control-file" id="kk" accept=".pdf" name="kk">
					</div>
					<div class="form-group">
						<label for="fotoNisn">Foto NISN</label>
						<input type="file" class="form-control-file" id="fotoNisn" accept=".pdf" name="fotoNisn">
					</div>
					<div class="form-group">
						<label for="ktpOrtu">KTP Ortu</label>
						<input type="file" class="form-control-file" id="ktpOrtu" accept=".pdf" name="ktpOrtu">
					</div>
					<div></div>
					<div class="form-group">
						<label for="skhun">Jurusan</label>
						<select class="form-control" id="jurusan" name="jurusan">
							<option value="TKJ">TKJ</option>
							<option value="RPL">RPL</option>
							<option value="AKUNTANSI">AKUNTANSI</option>
							<option value="OTKP">OTKP</option>
							<option value="MULTIMEDIA">MULTIMEDIA</option>
							<option value="TKR">TKR</option>
						</select>
					</div>
					<button class="btn btn-primary" type="submit" name="kirim">Kirim</button>
				</form>
			</div>
		</div>
	</div>
</section>
    <!--Akhir Kontak-->

    <!-- Footer-->
    <br>
    <br>
    
    <?php include "layouts/footer.php"; ?>

    <!-- Akhir Footer-->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
</body>

</html>
<!-- <?php 
} ?>  -->