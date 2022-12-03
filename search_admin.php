<?php
$koneksi = mysqli_connect("localhost","root","","test");

if(!$koneksi){
    echo "Koneksi Gagal : ".mysqli_connect_errno();
}
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>$title</title>
		<link href="gaya.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	</head>
	<body>
    <nav class="navtop">
    	<div>
    		<h1>Halaman Pemesanan</h1>
            <a href="index.php"><i class="fas fa-home"></i>Home</a>
            <a href="index_admin.php"></i>Back</a>
    	</div>
    </nav>
    <div class="content read">
        <h2>Melihat Orders</h2>
        <tr >
            <td colspan = 8 align = center>
                <form action="" method="get">
                    <label>Cari Nama Pelanggan :</label>
                    <input type="text" name="cari">
                </form>
            </td>
        </tr>
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Jenis pesanan</th>
                    <th>Menu</th>
                    <th>Jumlah</th>
                    <th>Alamat</th>
                    <th>Email</th>
                    <th>No WA</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
            <?php
            $no = 1;
            $query = mysqli_query($koneksi, "SELECT * FROM pemesanan");

            if (isset($_GET['cari'])){
                $query = mysqli_query($koneksi, "SELECT * FROM pemesanan where nama like '%".
                    $_GET['cari']."%'");
            }
            while($row = mysqli_fetch_assoc($query)) {
            ?>
            <tr>
                <td><?php echo $no; ?></td>
                <td><?php echo $row['nama']; ?></td>
                <td><?php echo $row['pesanan']; ?></td>
                <td><?php echo $row['menu']; ?></td>
                <td><?php echo $row['jumlah']; ?></td>
                <td><?php echo $row['alamat']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['no_wa']; ?></td>
                <td><?php echo $row['status']; ?></td>
  
            <?php
                $no++; 
            }
            ?>
            </tbody>
        </table>
        </div>
    </div>
    </body>
</html>