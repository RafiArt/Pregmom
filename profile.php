<?php

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Pregmom</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins&amp;display=swap">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Basic-icons.css">
    <link rel="stylesheet" href="assets/css/untitled.css">
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-md sticky-top navbar-shrink py-3" id="mainNav">
        <div class="container"><a class="navbar-brand d-flex align-items-center" href="/"><span class="bs-icon-sm bs-icon-circle bs-icon-primary shadow d-flex justify-content-center align-items-center me-2 bs-icon"><img src="assets/img/1664268155719.png" width="114" height="229" style="width: 34px;height: 34px;"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-bezier">
                        <path fill-rule="evenodd" d="M0 10.5A1.5 1.5 0 0 1 1.5 9h1A1.5 1.5 0 0 1 4 10.5v1A1.5 1.5 0 0 1 2.5 13h-1A1.5 1.5 0 0 1 0 11.5v-1zm1.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1zm10.5.5A1.5 1.5 0 0 1 13.5 9h1a1.5 1.5 0 0 1 1.5 1.5v1a1.5 1.5 0 0 1-1.5 1.5h-1a1.5 1.5 0 0 1-1.5-1.5v-1zm1.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1zM6 4.5A1.5 1.5 0 0 1 7.5 3h1A1.5 1.5 0 0 1 10 4.5v1A1.5 1.5 0 0 1 8.5 7h-1A1.5 1.5 0 0 1 6 5.5v-1zM7.5 4a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1z"></path>
                        <path d="M6 4.5H1.866a1 1 0 1 0 0 1h2.668A6.517 6.517 0 0 0 1.814 9H2.5c.123 0 .244.015.358.043a5.517 5.517 0 0 1 3.185-3.185A1.503 1.503 0 0 1 6 5.5v-1zm3.957 1.358A1.5 1.5 0 0 0 10 5.5v-1h4.134a1 1 0 1 1 0 1h-2.668a6.517 6.517 0 0 1 2.72 3.5H13.5c-.123 0-.243.015-.358.043a5.517 5.517 0 0 0-3.185-3.185z"></path>
                    </svg></span><span style="font-family: Poppins, sans-serif;color: #49516f;">Pregmom</span></a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-2"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-2">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"></li>
                    <li class="nav-item"><a class="nav-link" href="home.php" style="font-family: Poppins, sans-serif;color: #000000;"><strong>Beranda</strong></a></li>
                    <li class="nav-item"><a class="nav-link" href="edukasi.php" style="font-family: Poppins, sans-serif;color: #000000;"><strong>Edukasi</strong></a></li>
                    <li class="nav-item"></li>
                    <li class="nav-item"><a class="nav-link" href="panel.php" style="font-family: Poppins, sans-serif;color: #000000;"><strong>E-Panel</strong><br></a></li>
                    <li class="nav-item"><a class="nav-link" style="font-family: Poppins, sans-serif;color: #000000;" href="ngidam.php"><strong>Ngidam</strong></a></li>
                    <li class="nav-item"><a class="nav-link" href="games.php" style="font-family: Poppins, sans-serif;color: #000000;"><strong>Games</strong><br></a></li>
                    <li class="nav-item"><a class="nav-link" href="emergencyCenter.php" style="font-family: Poppins, sans-serif;color: #000000;"><strong>Emergency Center</strong><br></a></li>
                    <li class="nav-item"><a class="nav-link" href="profile.php" style="font-family: Poppins, sans-serif;color: #FFFFFF;background: #FF2389;border-radius: 13.33px;"><strong>Profile</strong><br></a></li>
                </ul><a class="btn btn-primary ms-md-2" role="button" href="logout.php" style="background: #49516f;border-radius: 13.33px;border-style: none;font-family: Poppins, sans-serif;width: 91.5px;padding-left: 20px;">Keluar</a>
            </div>
        </div>
    </nav>
    <main class="page contact-us-page">
        <div class="container mx-auto" style="margin: 36px;margin-bottom: 50px;">
            <div>
                <h1 style="font-family: Poppins, sans-serif;font-size: 33.33px;font-weight: bold;margin-top: 30px;color: #49516F;">Profile</h1>
            </div>
        </div>
        <div class="container">
            <div class="row" style="border-radius: 5.56px;border: 1px solid #ff2391 ;border-right: 1px solid #ff2391 ;">
                <div class="col-md-6 col-xl-2 d-xl-flex justify-content-xl-center align-items-xl-center"><img src="assets/img/ellipse_2.png" width="125" height="125"></div>
                <div class="col-md-6 col-xl-9 d-xl-flex align-items-xl-center">
                    <div style="padding: 14px 0px 0px;padding-top: 13px;">
                        <h1 style="font-size: 27.78px;color: #ff2391;font-weight: bold;width: 196px;">Nama Bunda</h1>
                        <div style="width: 254px;"></div>
                        <form action="" method="POST" class="login-email"></form>
                        <p>Nama Pengguna :&nbsp;<?php echo " " . $_SESSION['username']; ?></p>
                        <p>Fase saat ini : <?php echo " " . $_SESSION['fase']; ?></p>
                    </div>
                </div>
            </div>
            <div class="row" style="border-radius: 5.56px;border: 1px solid #ff2391;border-right: 1px solid #ff2391;margin-top: 42px;margin-bottom: 62px;">
                <div class="col" style="height: 923.33px;">
                    <h1 style="font-size: 27.78px;font-weight: bold;color: #ff2391;text-align: center;margin-top: 28px;">Schedule</h1>
                    <h1 style="text-align: left;margin-top: 32px;font-size: 18px;font-weight: bold;padding-left: 32px;margin-bottom: 32px;">
                    <?php
                        include 'config.php';
                        error_reporting(0);
                        session_start();
                        $id_pengguna = $_SESSION['id'];

                        $sql = "SELECT * FROM jadwal WHERE id_pengguna='$id_pengguna'";
                        $result = mysqli_query($conn, $sql);
                        if (mysqli_num_rows($result) > 0) {
                            // output data of each row
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo $row["jadwal"] . "<br>"."<br>";
                            }
                        } else {
                            echo "0 results";
                        }

                        mysqli_close($conn);
                        ?>
                </h1> 
                </div>
            </div>
        </div>
    </main>
    <footer class="text-center py-4 position-sticky">
        <div style="color: rgb(255,255,255);font-weight: bold;font-family: Poppins, sans-serif;background: #ff2391;margin-bottom: -32px;">
            <p class="text-muted d-xxl-flex justify-content-xxl-center align-items-xxl-center my-2" style="padding-top: 23px;height: 49.2px;padding-bottom: 21px;"><span style="color: rgb(255, 255, 255);">Pregmom @2022</span><br><br></p>
        </div>
    </footer>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bold-and-bright.js"></script>
</body>

</html>