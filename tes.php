<!DOCTYPE html>
<html>
<head>
	<title>tes</title>
</head>
<body>
	<form action="tes.php" method="post">
		id : <input type="text" name="id"> <br>
		nama : <input type="text" name="nama"> <br>
		<button type="submit" name="kirim">kirim</button>
	</form>
</body>
</html>
<?php 
	include_once('koneksi.php');
	if(isset($_POST['kirim'])){
		$id = $_POST['id'];
		$nama = $_POST['nama'];
		$query = "INSERT INTO tes(id,nama)VALUES('$id','$nama')";
		$result = mysqli_query($conn,$query);
		if($result){
			echo "Data berhasil di insert!";
		} else {
			echo "Error : <br>".mysqli_error($conn);
	}
	}
?>