<?php
include "koneksi.php";
$id=$_GET['no'];
$sql="SELECT*FROM bahasa WHERE id='$id'";
$query=mysqli_query($koneksi,$sql);
while($bahasa=mysqli_fetch_assoc($query)){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDIT</title>
</head>
<body>
    <h1>Edit</h1>
    <form action="prosesedit.php" method="get">
       <input type="hidden" value="id"><br><br>
       <label for="nama">Nama</label><br>
       <input type="text" value=""><br>
       <label for="pembuat">Pembuat</label><br>
       <input type="text" value=""><br>
       <label for="tahun">Tahun</label><br>
       <input type="number" value=""><br><br>
       <input type="submit" value="Save">
    </form>
</body>
</html>
<?php } ?>