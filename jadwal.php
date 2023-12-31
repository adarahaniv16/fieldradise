<!DOCTYPE html>
<?php 
session_start(); 
?>
<html>
<head>
    <meta name="viewport" content="with=device-width, initial-scale=1.0">
    <title>Fieldradise</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/e70eae7c8b.js" crossorigin="anonymous"></script> 
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">     
    <style>
    .footer{
        height: 25vh;
        width: 100%;
        background-color: black;
        margin-top: 225px;
        position:relative;
        text-align:center;
        margin-bottom: 0%;
        padding: 10px;
        font-family: "Arial";
    }
    .nav-links1{
        flex: 100;
    }
 
    </style>
</head>
<body>

<!----------Sub Header----------->
<section>
        <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><img src="images/logo.png" class="img-fluid"
                        style="width:130px; height:50px;"></a>
                <button class=" navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="jadwal.php">Jadwal</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="lokasi.html">Lokasi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="booking.html">Booking</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="promo.html">Promo</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>
<!----------login----------->
<div class="btn-log" style="margin-top: 40px; margin-right: 50px; text-align:right; float:center;">
<?php if (isset($_SESSION["email"])) : ?>
    <a href="logout.php" class="btn btn-dark">Logout</a>
<?php else : ?>
    <a href="login.php" class="btn btn-dark">Login</a>
<?php endif; ?>
</div>
<!----------Jadwal----------->
    <div class="container">
        <h1 >Data Penyewa</h1>
        <table class="table">
            <thead>
            <tr>
                <th>Nama Tim</th>
                <th>Nama Penyewa</th>
                <th>Alamat</th>
                <th>Tanggal</th>
                <th>Jam</th>
                <th>
                <a class="btn btn-success" href="tambah.php">Tambah</a>
                
                </th>
            </tr>
            </thead>
            <tbody>
                <?php
                include 'koneksi.php';
                $data=mysqli_query($koneksi, "SELECT * FROM user") or die (mysqli_error($koneksi));
                foreach ($data as $baris) { ?>
                    <tr>
                        <td><?php echo $baris['namaTim']?></td>
                        <td><?php echo $baris['nama']?></td>
                        <td><?php echo $baris['alamat']?></td>
                        <td><?php echo $baris['tgl']?></td>
                        <td><?php echo $baris['jam']?></td>
                        <td>
                        <a class="btn btn-warning" href="update.php?namaTim=<?php echo $baris['namaTim']?>">Update</a>
                        <a class="btn btn-danger" href="hapus.php?namaTim=<?php echo $baris['namaTim']?>">Hapus</a>
                        </td>
                    </tr>

                <?php }
                ?>
            </tbody>
        </table>
    </div> 
<br>

<!----------Footer----------->
<section class="footer text-white" style="text-align:center" >
            <h2 style="text-align:center">Book now for better reality</h2>
            <br>
            <br>
            <br>
            <div class="icons text-white" style="text-align:center" >
                <i class="fab fa-facebook offset-1"> &nbsp Fieldradise Booking Lapangan</i>
                <i class="fab fa-twitter offset-1"> &nbsp fieldradise_</i>
                <i class="fab fa-instagram offset-1">&nbsp fieldradise_</i>
            </div>
</section>    
</body>
</html>


