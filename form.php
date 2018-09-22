<!DOCTYPE html>
<html>
<head>
	<title>form login</title>
</head>
<body>
<?php
include 'header.php';
?>
	<center><h1>LOGIN</h1></center>
	<form action="hal1.php" method="post">
		<center>Nama: <input type="text" name="nama"></center><br>
		<center>Akses: <input type="text" name="akses"></center><br>
		<center><input type="submit" value="kirim"></center>
	</form>
</body>
</html>
<?php
include 'footer.php';
?>