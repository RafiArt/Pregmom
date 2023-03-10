<?php
error_reporting(0);
session_start();
$results = $_GET['results'];
if (isset($_GET['submit'])) {
  header('Location: https://shopee.co.id/search?keyword=' . $results);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <title>Pregmom</title>
  <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css?h=63c49130f916e8761302328c73ff1917">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="/assets/css/styles.min.css?h=19730f77d8c97811515f589dd850bd1e">
</head>

<body>
  <!-- Start: Navbar Centered Links -->
  <nav class="navbar navbar-light navbar-expand-md sticky-top navbar-shrink py-3" id="mainNav">
    <div class="container"><a class="navbar-brand d-flex align-items-center" href="/"><span
          class="bs-icon-sm bs-icon-circle bs-icon-primary shadow d-flex justify-content-center align-items-center me-2 bs-icon"><img
            src="/assets/img/1664268155719.png?h=8d712739119881ce6b0b113c1a533e45" width="114" height="229"
            style="width: 34px;height: 34px;"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
            fill="currentColor" viewBox="0 0 16 16" class="bi bi-bezier">
            <path fill-rule="evenodd"
              d="M0 10.5A1.5 1.5 0 0 1 1.5 9h1A1.5 1.5 0 0 1 4 10.5v1A1.5 1.5 0 0 1 2.5 13h-1A1.5 1.5 0 0 1 0 11.5v-1zm1.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1zm10.5.5A1.5 1.5 0 0 1 13.5 9h1a1.5 1.5 0 0 1 1.5 1.5v1a1.5 1.5 0 0 1-1.5 1.5h-1a1.5 1.5 0 0 1-1.5-1.5v-1zm1.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1zM6 4.5A1.5 1.5 0 0 1 7.5 3h1A1.5 1.5 0 0 1 10 4.5v1A1.5 1.5 0 0 1 8.5 7h-1A1.5 1.5 0 0 1 6 5.5v-1zM7.5 4a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1z">
            </path>
            <path
              d="M6 4.5H1.866a1 1 0 1 0 0 1h2.668A6.517 6.517 0 0 0 1.814 9H2.5c.123 0 .244.015.358.043a5.517 5.517 0 0 1 3.185-3.185A1.503 1.503 0 0 1 6 5.5v-1zm3.957 1.358A1.5 1.5 0 0 0 10 5.5v-1h4.134a1 1 0 1 1 0 1h-2.668a6.517 6.517 0 0 1 2.72 3.5H13.5c-.123 0-.243.015-.358.043a5.517 5.517 0 0 0-3.185-3.185z">
            </path>
          </svg></span><span style="font-family: Poppins, sans-serif;color: #49516f;">Pregmom</span></a><button
        data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-2"><span class="visually-hidden">Toggle
          navigation</span><span class="navbar-toggler-icon"></span></button>
      <div class="collapse navbar-collapse" id="navcol-2">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"></li>
          <li class="nav-item"><a class="nav-link" href="home.php"
              style="font-family: Poppins, sans-serif;color: #000000;"><strong>Beranda</strong></a></li>
          <li class="nav-item"><a class="nav-link" style="font-family: Poppins, sans-serif;color: #000000;"
              href="edukasi.php"><strong>Edukasi</strong></a></li>
          <li class="nav-item"><a class="nav-link" href="panel.php"
              style="font-family: Poppins, sans-serif;color: #000000;"><strong>E-Panel</strong><br></a></li>
          <li class="nav-item"><a class="nav-link" href="ngidam.php"
              style="font-family: Poppins, sans-serif;color: rgba(255,255,255,0.9);border-radius: 13.33px;background: #ff2391;">Ngidam</a>
          </li>
          <li class="nav-item"><a class="nav-link" href="games.php"
              style="font-family: Poppins, sans-serif;color: #000000;"><strong>Games</strong><br></a></li>
          <li class="nav-item"><a class="nav-link" href="emergencyCenter.php"
              style="font-family: Poppins, sans-serif;color: #000000;"><strong>Emergency Center</strong><br></a></li>
          <li class="nav-item"><a class="nav-link" href="profile.php"
              style="font-family: Poppins, sans-serif;color: #000000;"><strong>Profile</strong><br></a></li>
        </ul><a class="btn btn-primary ms-md-2" role="button" href="logout.php"
          style="background: #49516f;border-radius: 13.33px;border-style: none;font-family: Poppins, sans-serif;width: 91.5px;padding-left: 20px;">Keluar</a>
      </div>
    </div>
  </nav><!-- End: Navbar Centered Links -->
  <main class="page contact-us-page">
    <!-- Start: 2 Rows 1+4 Columns -->
    <div class="container mx-auto" style="margin: 36px;">
      <div class="row">
        <div class="col-md-12">
          <div>
            <h1 style="font-family: Poppins, sans-serif;font-size: 44.44px;font-weight: bold;color: #49516F;">Ngidam
            </h1>
            <div>
              <h1
                style="font-family: Poppins, sans-serif;font-size: 33.33px;margin-top: 30px;color: #ff2391;font-weight: bold;">
                Request Kebutuhan</h1>
                <form method="get" action="">
                <input name="results"  type="text"
                style="width: 79%;height: 60px;margin-top: 30px;border-style: solid;border-color: #ff2391;border-top-color: rgb(0,;border-right-color: 0,;border-bottom-color: 0);border-left-color: 0,;border-radius: 22.22px;font-family: Poppins, sans-serif;color: #C4C4C4;padding-left: 3px;"
                placeholder="       Tuliskan Request Ngidammu Disini....."><span><button name="submit" class="btn btn-primary"
                  type="submit"
                  style="border-radius: 22.22px;width: 19%;height: 60px;background: #ff2391;margin-left: 16px;font-family: Poppins, sans-serif;font-size: 20px;border: 2px solid #ff2391;margin-bottom: 7px;">Pesan
                  Sekarang</button></span>
                  </form>
            </div>
          </div>
        </div>
      </div>
      <div>
        <h1
          style="font-family: Poppins, sans-serif;font-size: 33.33px;font-weight: bold;margin-top: 30px;color: #ff2391;">
          Kategori</h1>
        <div class="row" style="margin-top: 30px;height: 175.2188px;">
          <div class="col" style="text-align: center;"><img width="100" height="80"
              style="width: 275.56px;height: 132.22px;border-radius: 16.67px;border: 1px solid #ff2391;margin-top: 16px;"
              src="/assets/img/rectangle_23.png?h=0b18168f572747af4d1b6e190bffc97c">
            <div style="margin-top: -116px;margin-left: -76px;"><a href="menuNgidam.php"
                style="font-size: 20px;font-family: Poppins, sans-serif;"
                data-bs-target="https://shopee.co.id/search?keyword=makanan%20sehat"><strong><span
                    style="color: rgb(0, 0, 0);">Makanan sehat</span></strong></a></div>
          </div>
          <div class="col" style="text-align: center;"><img width="100" height="80"
              style="width: 275.56px;height: 132.22px;border-radius: 16.67px;border: 1px solid #ff2391;margin-top: 16px;"
              src="/assets/img/rectangle_17.png?h=a3c2e0e4ad3918b68dbc2042347d5c64">
            <div style="margin-top: -116px;margin-left: -76px;"><a
                href="https://shopee.co.id/search?keyword=minumam%20sehat"
                style="font-size: 20px;font-family: Poppins, sans-serif;"><strong><span
                    style="color: rgb(0, 0, 0);">Minuman sehat</span></strong></a></div>
          </div>
          <div class="col" style="text-align: center;"><img width="100" height="80"
              style="width: 275.56px;height: 132.22px;border-radius: 16.67px;border: 1px solid #ff2391;margin-top: 16px;"
              src="/assets/img/rectangle_18.png?h=bdcc124cff547e4676339b8d116805df">
            <div style="margin-top: -116px;margin-left: -76px;"><a
                href="https://shopee.co.id/search?keyword=camilan%20sehat"
                style="font-size: 20px;font-family: Poppins, sans-serif;"><strong><span
                    style="color: rgb(0, 0, 0);">Camilan sehat</span></strong></a></div>
          </div>
          <div class="col" style="text-align: center;"><img width="100" height="80"
              style="width: 275.56px;height: 132.22px;border-radius: 16.67px;border: 1px solid #ff2391;margin-top: 16px;"
              src="/assets/img/rectangle_22.png?h=85dbe4b489cccb2af4cef5f4bb6bcb2a">
            <div style="margin-top: -116px;margin-left: -76px;"><a
                href="https://shopee.co.id/search?keyword=suplemen%20sehat%20ibu%20hamil"
                style="font-size: 20px;font-family: Poppins, sans-serif;"><strong><span
                    style="color: rgb(0, 0, 0);">Suplemen</span></strong></a></div>
          </div>
        </div>
      </div>
      <div>
        <h1
          style="font-family: Poppins, sans-serif;font-size: 33.33px;font-weight: bold;margin-top: 30px;color: #ff2391;">
          Rekomendasi</h1>
        <div class="row" style="margin-top: 30px;height: 185.2188px;">
          <div class="col" style="text-align: center;"><img width="100" height="80"
              style="width: 275.56px;height: 132.22px;border-radius: 16.67px;border: 1px solid #ff2391;margin-top: 16px;opacity: 1;"
              src="/assets/img/rectangle_22.png?h=85dbe4b489cccb2af4cef5f4bb6bcb2a">
            <div style="margin-top: -116px;margin-left: -76px;"><a
                href="https://shopee.co.id/search?keyword=suplemen%20sehat%20ibu%20hamil"
                style="font-size: 20px;font-family: Poppins, sans-serif;"><strong><span
                    style="color: rgb(0, 0, 0);">Suplemen</span></strong></a></div>
          </div>
          <div class="col" style="text-align: center;"><img width="100" height="80"
              style="width: 275.56px;height: 132.22px;border-radius: 16.67px;border: 1px solid #ff2391;margin-top: 16px;"
              src="/assets/img/rectangle_23.png?h=0b18168f572747af4d1b6e190bffc97c">
            <div style="margin-top: -116px;margin-left: -76px;"><a href="menuNgidam.php"
                style="font-size: 20px;font-family: Poppins, sans-serif;"
                data-bs-target="https://shopee.co.id/search?keyword=makanan%20sehat"><strong><span
                    style="color: rgb(0, 0, 0);">Makanan sehat</span></strong></a></div>
          </div>
          <div class="col" style="text-align: center;"><img width="100" height="80"
              style="width: 275.56px;height: 132.22px;border-radius: 16.67px;border: 1px solid #ff2391;margin-top: 16px;"
              src="/assets/img/rectangle_17.png?h=a3c2e0e4ad3918b68dbc2042347d5c64">
            <div style="margin-top: -116px;margin-left: -76px;"><a
                href="https://shopee.co.id/search?keyword=minumam%20sehat"
                style="font-size: 20px;font-family: Poppins, sans-serif;"><strong><span
                    style="color: rgb(0, 0, 0);">Minuman sehat</span></strong></a></div>
          </div>
          <div class="col" style="text-align: center;"><img width="100" height="80"
              style="width: 275.56px;height: 132.22px;border-radius: 16.67px;border: 1px solid #ff2391;margin-top: 16px;"
              src="/assets/img/rectangle_18.png?h=bdcc124cff547e4676339b8d116805df">
            <div style="margin-top: -116px;margin-left: -76px;"><a
                href="https://shopee.co.id/search?keyword=camilan%20sehat"
                style="font-size: 20px;font-family: Poppins, sans-serif;"><strong><span
                    style="color: rgb(0, 0, 0);">Camilan sehat</span></strong></a></div>
          </div>
        </div>
      </div>
    </div><!-- End: 2 Rows 1+4 Columns -->
  </main><!-- Start: Footer Clean -->
  <footer class="text-center py-4">
    <div
      style="color: rgb(255,255,255);font-weight: bold;font-family: Poppins, sans-serif;background: #ff2391;margin-bottom: -32px;">
      <p class="text-muted d-xxl-flex justify-content-xxl-center align-items-xxl-center my-2"
        style="padding-top: 23px;height: 49.2px;padding-bottom: 21px;"><span style="color: rgb(255, 255, 255);">Pregmom
          @2022</span><br><br></p>
    </div>
  </footer><!-- End: Footer Clean -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="/assets/js/script.min.js?h=2d5c83a0b230af4e0f7b277aff5d5fd7"></script>
</body>

</html>