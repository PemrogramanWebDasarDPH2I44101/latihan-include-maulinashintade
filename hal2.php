<?php
//untuk admin
include 'header.php';
session_start();
$akses = $_SESSION["akses"];
if ($akses == "admin") {
	echo "halaman boleh diakses";
} else {
	header("Location: form.php");
}
?>
<br>
<a href="https://localhost/session/hal1.php">Home</a>
<?php
include 'footer.php';
?>