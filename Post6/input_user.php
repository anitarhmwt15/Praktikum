<?php
SESSION_START();
if ($_POST["captcha_code"] == $_SESSION["captcha_code"]){
include "koneksi.php";
$id_user = $_POST['id_user'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$nohp = $_POST['nohp'];
$pass = md5($_POST['password']);
$sql = "INSERT INTO users(id_user,password, nama, email, nohp) VALUES ('$id_user', '$pass', '$nama','$email','$nohp')";
$query=mysqli_query($con, $sql);
mysqli_close($con);
header('location:tampil_user.php');
}
else{
    echo "<center>Login gagal! username & password tidak benar<br>";
    echo "<a href=form_login.php><b>ULANGILAGI</b></a></center>";
}
?>