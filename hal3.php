<?php
//untuk user
include 'header.php';
session_start();
$akses = $_SESSION["akses"];
if ($akses == "admin") {
	header("Location: form.php");
} else {
	echo "halaman boleh diakses";
}
?>
<br>
<a href="https://localhost/session/hal1.php">Home</a>
<?php
include 'footer.php';
?>