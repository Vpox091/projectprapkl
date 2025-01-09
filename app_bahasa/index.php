<?php
include "koneksi.php";
$sql="SELECT*FROM bahasa";
$query=mysqli_query($koneksi,$sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Data</h1>
    <a href="tambah.php"><button>Tambah</button></a>
    <table border="1">
        <tr>
            <td>Id</td>
            <td>Nama</td>
            <td>Pembuat</td>
            <td>Tahun</td>
            <td>Aksi</td>
        </tr>
        <?php while ($bahasa = mysqli_fetch_assoc($query)){
        ?>
        <tr>
            <td><?=$bahasa['id']?></td>
            <td><?=$bahasa['nama']?></td>
            <td><?=$bahasa['pembuat']?></td>
            <td><?=$bahasa['tahun']?></td>
            <td>
                <a href="edit.php?no=<?=$bahasa['id']?>">Edit</a>
                <a href="hapus.php?no=<?=$bahasa['id']?>">Hapus</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>