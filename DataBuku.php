<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="DefaultCSS.css">
    <link rel="stylesheet" type="text/css" href="styleCSS.css">
    <script src="https:/kit.fontawesome.com/a076d05399.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Do+Hyeon&family=Montserrat&display=swap" rel="stylesheet"> 
    <title>Data Buku</title>
</head>
<body>
    <div id="logo">
        <h4>Perpustakaan</h4>
    </div>
    <nav>
        <ul>
            <div class="menu"></div>
            <li><a href="#"><i class="fas fa-home"></i><span>Dashboard</span></a></li>
            <li><a href="DataAnggota.php"><i class="fas fa-user"></i><span>Data Anggota</span></a></li>
            <li><a href="DataBuku.php"><i class="fas fa-book"></i><span>Data Buku</span></a></li>
            <li><a href="TransaksiAdmin.php"><i class="fas fa-pen"></i><span>Transaksi</span></a></li>
        </ul>
    </nav>
    <script src="script.js"></script>
    
    <div class="container">
        <br>
        <div class="list-table">
            <table class="table1">
                <tr>
                    <th>No</th>
                    <th>Kode Buku</th>
                    <th>Judul</th>                    
                    <th>Pengarang</th>
                    <th>Penerbit</th>
                    <th>Tahun Terbit</th>
                    <th></th>
                </tr>
                <?php
                    include "koneksiDB.php";

                    // query tampil data buku
                    $query=mysqli_query($connect,"SELECT * FROM buku");                
                if (mysqli_num_rows($query)) {         
                    while ($row=mysqli_fetch_array($query)) {                                            
                ?>
                        <tr class="tb">
                            <td><?php echo $row['idBuku']?></td>
                            <td><?php echo $row['kode_buku']?></td>
                            <td><?php echo $row['judul']?></td>
                            <td><?php echo $row['pengarang']?></td>
                            <td><?php echo $row['penerbit']?></td>
                            <td><?php echo $row['tahun_terbit']?></td>                        
                            <td>
                                <a class="edit" href="editBukuFormAdmin.php?id=<?php echo $row['idBuku'];?>">Edit</a>
                                <a class="hapus" href="hapusBuku.php?id=<?php echo $row['idBuku'];?>">Hapus</a>
                            </td>
                        </tr>                        
                <?php
                    }
                }                 
                ?>
            </table>           
            <a href="addBuku.php">Tambah Buku</a>
        </div>
    </div>
</body>
</html>
