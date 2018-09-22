<?php
include 'header.php';
session_start();
$_SESSION['nama'] = isset($_POST["nama"]) ? $_POST["nama"]:$_POST["nama"];//bisa muncul ketika tidak mengisi di halaman form
$_SESSION['akses'] = isset($_POST["akses"]) ? $_POST["akses"]:$_POST["akses"];//bisa muncul ketika tidak mengisi di halaman form
// $_SESSION['nama'] = $_POST["nama"];//hanya muncul ketika memasukan data di form
// $_SESSION['akses'] = $_POST["akses"];//hanya muncul ketika memasukan dta di form
setcookie("user", "budi", time() + 10, "/");
if ($_POST) {
	$hour = time() + 3600 * 24 *30;
	setcookie('username', $_SESSION['nama'], $hour);
	setcookie('password', $_SESSION['akses'], $hour);
}
@$_SESSION['iduser'] = $_POST["1234"];
print_r(@$_SESSION);

?>
<br>
<a href="http://localhost/session/hal2.php">Link ke halaman 2</a>
<br>
<a href="http://localhost/session/hal3.php">Link ke halaman 3</a>
<?php
include 'footer.php';
?>
