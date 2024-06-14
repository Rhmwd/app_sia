<?php
 include_once "../../koneksi.php";
 session_start();
 if($_SERVER["REQUEST_METHOD"] == "POST"){
 if($_GET['act'] == "insert"){
 $invoice = $_POST['invoice'];
 $tanggal = $_POST['tanggal'];
 $id_suplier = $_POST['id_suplier'];
 $jumlah = $_POST['jumlah'];
 $harga = $_POST['harga'];
 $total = $_POST['total'];
 $keterangan = $_POST['keterangan'];
 $query = "INSERT INTO tbl_pembelian (invoice, tanggal, id_suplier, 
 jumlah, harga, total, keterangan) VALUES
 ('$invoice','$tanggal','$id_suplier','$jumlah','$harga','$total','$keterangan
 ')";
 $exec = mysqli_query($koneksi, $query);
 if($exec){
 $_SESSION['pesan'] = "Data pembelian telah ditambahkan";
 header('location:../../dashboard.php?modul=pembelian');
 }else{
 $_SESSION['error'] = "Data pembelian gagal ditambahkan";
 header('location:../../dashboard.php?modul=pembelian');
 }
 }elseif($_GET['act'] == "update"){
 $id = $_GET['id'];
 $invoice = $_POST['invoice'];
 $tanggal = $_POST['tanggal'];
 $id_suplier = $_POST['id_suplier']; $jumlah = $_POST['jumlah'];
 $harga = $_POST['harga'];
 $total = $_POST['total'];
 $keterangan = $_POST['keterangan'];
 $query = "UPDATE tbl_pembelian SET invoice='$invoice', 
 tanggal='$tanggal', id_suplier='$id_suplier', jumlah='$jumlah', 
 harga='$harga', total='$total', keterangan='$keterangan' WHERE id='$id'";
 $exec = mysqli_query($koneksi, $query);
 if($exec){
 $_SESSION['pesan'] = "Data pembelian telah diubah";
 header('location:../../dashboard.php?modul=pembelian');
 }else{
 $_SESSION['error'] = "Data pembelian gagal diubah";
 header('location:../../dashboard.php?modul=pembelian');
 }
 }
 }else{
 if($_GET['act'] == "delete"){
 $id = $_GET['id'];
 $query = "DELETE FROM tbl_pembelian WHERE id='$id'";
 $exec = mysqli_query($koneksi, $query);
 if($exec){
 $_SESSION['pesan'] = "Data pembelian telah dihapus";
 header('location:../../dashboard.php?modul=pembelian');
 }else{
 $_SESSION['error'] = "Data pembelian gagal dihapus";
 header('location:../../dashboard.php?modul=pembelian');
 }
 }
}
