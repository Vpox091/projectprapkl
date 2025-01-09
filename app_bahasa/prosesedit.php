<?php
include "koneksi.php";
$id=$_GET['no'];
$nama=$_GET['nama'];
$pembuat=$_GET['pembuat'];
$tahun=$_GET['tahun'];
$sql="UPDATE SET id=$id,nama=$nama,pembuat=$pembuat,tahun=$tahun WHERE id='$id'";
$query=mysqli_query($koneksi,$sql);
if ($query){
    header("location:index.php?=sukses");
}else{
    header("location:index.php?=gagal");
}
?>