<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="with=device-width, initial-scale=1.0">
    <title>Login</title>
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
<section class="sub-header">
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
     <img src="images/logo.png" style="width:130px; height:50px;">   
     <div class="navbar ms-auto">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="index.php">HOME</a>
            </li>
            <li class="nav-item ">
                 <a class="nav-link" href="jadwal.php">JADWAL</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="lokasi.html">LOKASI</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="booking.html">BOOKING</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="promo.html">PROMO</a>
            </li>
        </ul>
        </div>
    </nav>
</section>
 
<!----------Login----------->
 
<div class="container">
    <?php
      include 'alert.php';
    ?>
    <h1>LOGIN</h1>
        <form method="post" action="proseslogin.php">
                    <div class="form-group row my-4">
                        <label class="col-sm-2 col-form-label" for="email">E-Mail</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="email">
                        </div>
                    </div>

                    <div class="form-group row my-4">
                        <label class="col-sm-2 col-form-label" for="password">Password</label>
                        <div class="col-sm-4">
                            <input type="password" class="form-control" name="password">
                        </div>
                    </div>
                    
                    <div class="form-group row my-4">
                        <div class="col-sm-10">
                            <a href="jadwal.php" class="btn btn-danger">Kembali</a>
                            <button class="btn btn-primary" href="jadwal.php" type="submit" name="button">Login</button>
                        </div>
                </div>
        </form>
  </div> 

<!----------footer----------->
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