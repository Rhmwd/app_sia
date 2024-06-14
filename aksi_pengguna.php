 <?php
 include_once "../../koneksi.php";
 session_start();
 if($_SERVER["REQUEST_METHOD"]=="POST"){
 if($_GET['act']=="insert"){
 $username = $_POST['username'];
 $nama_lengkap = $_POST['nama_lengkap'];
 $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
 $jabatan = $_POST['jabatan'];
 $email = $_POST['email'];
 $hak_akses = $_POST['hak_akses'];
 $query = "insert into tbl_pengguna (username, password, nama_lengkap, 
 jabatan, email, hak_akses) values ('$username', '$password', '$nama_lengkap',
'$jabatan', '$email', '$hak_akses')";
 $exc = mysqli_query($koneksi, $query);
 if($exc){
 $_SESSION['pesan'] = "Data pengguna berhasil ditambah";
 }else{
 $_SESSION['pesan'] = "Data pengguna gagal ditambah";
  }
 }elseif($_GET['act']=="update"){
 $username = $_POST['username'];
 $password = $_POST['password'];
 $nama_lengkap = $_POST['nama_lengkap'];
 $jabatan = $_POST['jabatan'];
 $email = $_POST['email'];
 $hak_akses = $_POST['hak_akses'];
 if(empty($password)){
 $query = "update tbl_pengguna set nama_lengkap = '$nama_lengkap', 
 jabatan = '$jabatan', email = '$email', hak_akses = '$hak_akses' where 
 username = '$username'";
 }else{
 $password = password_hash($password, PASSWORD_BCRYPT);
 $query = "update tbl_pengguna set password = '$password', nama_lengkap
= '$nama_lengkap', jabatan = '$jabatan', email = '$email', hak_akses = 
'$hak_akses' where username = '$username'";
 }
 $exc = mysqli_query($koneksi, $query);
 if($exc){
 $_SESSION['pesan'] = "Data pengguna berhasil diubah";
 header('location:../../dashboard.php?modul=pengguna');
}else{
 $_SESSION['pesan'] = "Data pengguna gagal diubah";
 header('location:../../dashboard.php?modul=pengguna');
 }
 }
 }else{
 if($_GET['act']=="delete"){
 $id = $_GET['id'];
 $query = "delete from tbl_pengguna where id = '$id'";
 $exc = mysqli_query($koneksi, $query); if($exc){
$_SESSION['pesan'] = "Data pengguna berhasil dihapus";
 header('location:../../dashboard.php?modul=pengguna');
 }else{
 $_SESSION['pesan'] = "Data pengguna gagal dihapus";
 header('location:../../dashboard.php?modul=pengguna');
 }
 }else{
 header('location:../../index.php');
 }
 }
 ?>
