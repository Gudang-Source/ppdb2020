<?php include "layouts/headerAwal.php";
$kata = "Nama : Muhammad Reza Kemal
TTL = 26 April 1999
Pekerjaan : IT Support
email : rezakemal24@gmail.com
Alamat : Jl H Kimah Gg Puring 6 Rt.09/01
No Telp : (021) - 77882517";
?>
<!-- Halaman Pendaftaran-->
<section class="contact" id="contact">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 text-center">
				<br>
				<br>
				<h2>KONTAK KAMI</h2>
				<hr>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-8 col-xs-offset-2">
				<center><img src="profile.jpeg" width="200px" height="200px"></center>
				<br>
				<br>
                <p><h4><?= nl2br($kata)?></h4></p>
				<br>
				<br>
			</div>
		</div>
	</div>
</section>
<!--Akhir Kontak-->
<!-- Footer-->
<br>
<br>
<footer>
	<?php include "layouts/footer.php"; ?>
</footer>
<!-- Akhir Footer-->
</body>

</html>