<?php
include "koneksi.php";
$nama=$_GET['nama'];
$pembuat=$_GET['pembuat'];
$tahun=$_GET['tahun'];
$sql="INSERT INTO bahasa (nama,pembuat,tahun) VALUES ('$nama','$pembuat','$tahun')";
$query=mysqli_query($koneksi,$sql);
if($query){
    header("location:index.php?=sukses");
}else{
    header("location:index.php?=gagal");
}
?>