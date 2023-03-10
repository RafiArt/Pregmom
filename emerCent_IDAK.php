<?php
session_start();
$_SESSION['query'] = $_POST['results'];

?> 
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Pregmom</title>
    <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css?h=025e67b8f0ef4e2a7f62f27bbc31c963">
    <link rel="stylesheet" href="/assets/css/styles.min.css?h=76bd7685a748273974ef3b1609e016c2">
</head>

<body>
    <!-- Start: Navbar Centered Links -->
    <nav class="navbar navbar-light navbar-expand-md sticky-top navbar-shrink py-3" id="mainNav">
        <div class="container"><a class="navbar-brand d-flex align-items-center" href="/"><span class="bs-icon-sm bs-icon-circle bs-icon-primary shadow d-flex justify-content-center align-items-center me-2 bs-icon"><img src="/assets/img/1664268155719.png?h=8d712739119881ce6b0b113c1a533e45" width="114" height="229" style="width: 34px;height: 34px;"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-bezier">
                        <path fill-rule="evenodd" d="M0 10.5A1.5 1.5 0 0 1 1.5 9h1A1.5 1.5 0 0 1 4 10.5v1A1.5 1.5 0 0 1 2.5 13h-1A1.5 1.5 0 0 1 0 11.5v-1zm1.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1zm10.5.5A1.5 1.5 0 0 1 13.5 9h1a1.5 1.5 0 0 1 1.5 1.5v1a1.5 1.5 0 0 1-1.5 1.5h-1a1.5 1.5 0 0 1-1.5-1.5v-1zm1.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1zM6 4.5A1.5 1.5 0 0 1 7.5 3h1A1.5 1.5 0 0 1 10 4.5v1A1.5 1.5 0 0 1 8.5 7h-1A1.5 1.5 0 0 1 6 5.5v-1zM7.5 4a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1z"></path>
                        <path d="M6 4.5H1.866a1 1 0 1 0 0 1h2.668A6.517 6.517 0 0 0 1.814 9H2.5c.123 0 .244.015.358.043a5.517 5.517 0 0 1 3.185-3.185A1.503 1.503 0 0 1 6 5.5v-1zm3.957 1.358A1.5 1.5 0 0 0 10 5.5v-1h4.134a1 1 0 1 1 0 1h-2.668a6.517 6.517 0 0 1 2.72 3.5H13.5c-.123 0-.243.015-.358.043a5.517 5.517 0 0 0-3.185-3.185z"></path>
                    </svg></span><span style="font-family: Poppins, sans-serif;color: #49516f;">Pregmom</span></a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-2"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-2">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"></li>
                    <li class="nav-item"><a class="nav-link" href="home.php" style="font-family: Poppins, sans-serif;color: #000000;"><strong>Beranda</strong></a></li>
                    <li class="nav-item"><a class="nav-link" href="edukasi.php" style="font-family: Poppins, sans-serif;color: #000000;font-weight: bold;">Edukasi</a></li>
                    <li class="nav-item"><a class="nav-link" href="panel.php" style="font-family: Poppins, sans-serif;color: #000000;"><strong>E-Panel</strong><br></a></li>
                    <li class="nav-item"><a class="nav-link" style="font-family: Poppins, sans-serif;color: #000000;" href="ngidam.php"><strong>Ngidam</strong></a></li>
                    <li class="nav-item"><a class="nav-link" href="games.php" style="font-family: Poppins, sans-serif;color: #000000;font-weight: bold;"><strong>Games</strong><br></a></li>
                    <li class="nav-item"><a class="nav-link" href="emergencyCenter.php" style="font-family: Poppins, sans-serif;background: #FF2391;color: #FFFFFF;border-radius: 13.34px;"><strong>Emergency Center</strong><br></a></li>
                    <li class="nav-item"><a class="nav-link" href="profile.php" style="font-family: Poppins, sans-serif;color: #000000;"><strong>Profile</strong><br></a></li>
                </ul><a class="btn btn-primary ms-md-2" role="button" href="logout.php" style="background: #49516f;border-radius: 13.33px;border-style: none;font-family: Poppins, sans-serif;width: 91.5px;padding-left: 20px;">Keluar</a>
            </div>
        </div>
    </nav><!-- End: Navbar Centered Links -->
    <main class="page contact-us-page">
        <!-- Start: 2 Rows 1+4 Columns -->
        <div class="container mx-auto" style="margin: 36px;margin-bottom: 50px;">
            <div>
                <h1 style="font-family: Poppins, sans-serif;font-size: 44.48x;margin-top: 30px;color: #49516f;font-weight: bold;">EmergencyCenter</h1>
            </div>
            <div class="row">
                <div class="col-md-12 mx-auto">
                    <form method="POST" action="emerCent.php">
                        <div class="d-xxl-flex align-items-xxl-center" style="padding-left: 118px;">
                            <input name="results" class="form-control d-xxl-flex justify-content-xxl-center align-items-xxl-center" type="text" style="text-align: left;background: #D9D9D9B2;border-radius: 27.8px;border-style: none;font-size: 20.02px;font-family: Poppins, sans-serif;color: #00000099;height: 80.06px;" placeholder="Masukkan Kota Anda" />
                            <button name="submit" class="btn btn-primary d-xl-flex justify-content-xl-center" type="submit" style="transform: translate(-135px);width: 130.1px;height: 62.27px;border-radius: 27.8px;background: #FF66C4;font-size: 20.02px;border-style: none;padding-left: 26px;padding-top: 13.6px;">Cari</button>
                        </div>
                    </form>
            </div>
        </div><!-- End: 2 Rows 1+4 Columns -->
        <!-- Start: 1 Row 2 Columns -->
        <div class="container" style="width: 1083.07px;">
            <div class="col">
                <div>
                    <h1 style="font-family: Poppins, sans-serif;font-size: 33.33px;font-weight: bold;margin-top: 30px;color: #49516f;text-align: center;">Maps</h1><iframe allowfullscreen="" frameborder="0" loading="lazy" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyCQ3IyJp-fqVfifKsE-vRsc5IajRTfIzRE&amp;q=RS+Ibu+dan+Anak+Kendangsari&amp;zoom=17" width="100%" height="400" style="height: 547px;"></iframe>
                </div>
            </div>
        </div><!-- End: 1 Row 2 Columns -->
    </main><!-- Start: Footer Clean -->
    <footer class="text-center py-4 position-sticky">
        <div style="color: rgb(255,255,255);font-weight: bold;font-family: Poppins, sans-serif;background: #ff2391;margin-bottom: -32px;">
            <p class="text-muted d-xxl-flex justify-content-xxl-center align-items-xxl-center my-2" style="padding-top: 23px;height: 49.2px;padding-bottom: 21px;"><span style="color: rgb(255, 255, 255);">Pregmom @2022</span><br><br></p>
        </div>
    </footer><!-- End: Footer Clean -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/js/script.min.js?h=5d7631d4a5cf6a4c93b982b7b62de8d9"></script>
</body>

</html>