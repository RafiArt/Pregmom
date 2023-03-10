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
  <link rel="stylesheet" href="/assets/css/styles.min.css?h=5ec0fce0a7e887158a0cd9f7aba66fb1">
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
          <li class="nav-item"><a class="nav-link" href="/home.php" style="font-family: Poppins, sans-serif;color: #000000;"><strong>Beranda</strong></a></li>
          <li class="nav-item"><a class="nav-link" href="/edukasi.php"style="font-family: Poppins, sans-serif;color: #000000;"><strong>Edukasi</strong></a></li>
          <li class="nav-item"><a class="nav-link" href="/panel.php" style="font-family: Poppins, sans-serif;color: #000000;"><strong>E-Panel</strong><br></a></li>
          <li class="nav-item"><a class="nav-link" href="/ngidam.php" style="font-family: Poppins, sans-serif;color: #FFFFFF;background: #FF2391;border-radius: 13.33px;">Ngidam</a></li>
          <li class="nav-item"><a class="nav-link" href="/games.php" style="font-family: Poppins, sans-serif;color: #000000;"><strong>Games</strong><br></a></li>
          <li class="nav-item"><a class="nav-link" href="/emergencyCenter.php" style="font-family: Poppins, sans-serif;color: #000000;"><strong>Emergency Center</strong><br></a></li>
          <li class="nav-item"><a class="nav-link" href="/profile.php" style="font-family: Poppins, sans-serif;color: #000000;"><strong>Profile</strong><br></a></li>
        </ul><a class="btn btn-primary ms-md-2" role="button" href="logout" style="background: #49516f;border-radius: 13.33px;border-style: none;font-family: Poppins, sans-serif;width: 91.5px;padding-left: 20px;">Keluar</a>
      </div>
    </div>
  </nav><!-- End: Navbar Centered Links -->
  <main class="page contact-us-page">
    <!-- Start: 2 Rows 1+4 Columns -->
    <div class="container mx-auto" style="margin: 36px;">
      <div class="row">
        <div class="col-md-12">
          <div>
            <h1 style="font-family: Poppins, sans-serif;font-size: 44.44px;font-weight: bold;">Ngidam</h1>
            <div>
              <h1 style="font-family: Poppins, sans-serif;font-size: 33.33px;font-weight: bold;margin-top: 30px;color: #ff2391;">Request Kebutuhan</h1>
              <form method="get" action="">
              <input name="results" type="text" style="width: 79%;height: 60px;margin-top: 30px;border-style: solid;border-color: #ff2391;border-top-color: rgb(0,;border-right-color: 0,;border-bottom-color: 0);border-left-color: 0,;border-radius: 22.22px;" placeholder="       Tuliskan Request Ngidammu Disini....."><span><button name="submit" class="btn btn-primary" type="submit" style="border-radius: 22.22px;width: 19%;height: 60px;background: #ff2391;margin-left: 16px;font-family: Poppins, sans-serif;font-size: 20px;border: 2px solid #ff2391;margin-bottom: 7px;">Pesan Sekarang</button></span>
              </form>
              
            </div>
          </div>
        </div>
      </div>
      <div>
        <h1 style="font-family: Poppins, sans-serif;font-size: 33.33px;font-weight: bold;margin-top: 30px;color: #ff2391;">Makanan Sehat</h1>
        <div class="row mx-auto" style="margin-top: 30px;">
          <div class="col mx-auto" style="text-align: center;margin-top: 12px;">
            <div class="mx-auto" style="border-radius: 5.56px;border: 3px solid #ff2391;padding-top: 12px;padding-bottom: 18px;width: 85%;"><img width="100" height="80" style="width: 232.22px;height: 152.22px;border-radius: 11.11px;border: 1px solid #ff2391;" src="/assets/img/rectangle_24_ek1.png?h=3bce9929161333fd440d8ac0e180a651">
              <p class="mx-auto" style="font-size: 12px;font-family: Poppins, sans-serif;text-align: left;width: 77%;margin-top: 8px;">#makanansehat</p>
              <p class="mx-auto" style="font-size: 22px;font-family: Poppins, sans-serif;text-align: left;width: 77%;font-weight: bold;margin-top: -15px;">Salad Buah</p>
              <p class="mx-auto" style="font-size: 12px;font-family: Poppins, sans-serif;text-align: left;width: 77%;margin-top: -15px;height: 46.67px;">jelaskan deskripsi produk disini...</p><a class="btn btn-primary" role="button" style="width: 175.56px;height: 48.56px;font-weight: bold;font-family: Poppins, sans-serif;font-size: 22.22px;border-radius: 55.56px;background: #ff2391;border-style: none;padding-top: 5.6px;" href="https://shopee.co.id/search?keyword=salad%20buah">BELI</a>
            </div>
          </div>
          <div class="col mx-auto" style="text-align: center;margin-top: 12px;">
            <div class="mx-auto" style="border-radius: 5.56px;border: 3px solid #ff2391;padding-top: 12px;padding-bottom: 18px;width: 85%;"><img width="100" height="80" style="width: 232.22px;height: 152.22px;border-radius: 11.11px;border: 1px solid #ff2391;" src="/assets/img/rectangle_27.png?h=c75641110cbdc5ce9a8d6a9fb9eea6fa">
              <p class="mx-auto" style="font-size: 12px;font-family: Poppins, sans-serif;text-align: left;width: 77%;margin-top: 8px;">#makanansehat</p>
              <p class="mx-auto" style="font-size: 22px;font-family: Poppins, sans-serif;text-align: left;width: 77%;font-weight: bold;margin-top: -15px;">Salad Sayur</p>
              <p class="mx-auto" style="font-size: 12px;font-family: Poppins, sans-serif;text-align: left;width: 77%;margin-top: -15px;height: 46.67px;">jelaskan deskripsi produk disini...</p><a class="btn btn-primary" role="button" style="width: 175.56px;height: 48.56px;font-weight: bold;font-family: Poppins, sans-serif;font-size: 22.22px;border-radius: 55.56px;background: #ff2391;border-style: none;padding-top: 5.6px;" href="https://shopee.co.id/search?keyword=salad%20sayur">BELI</a>
            </div>
          </div>
          <div class="col mx-auto" style="text-align: center;margin-top: 12px;">
            <div class="mx-auto" style="border-radius: 5.56px;border: 3px solid #ff2391;padding-top: 12px;padding-bottom: 18px;width: 85%;"><img width="100" height="80" style="width: 232.22px;height: 152.22px;border-radius: 11.11px;border: 1px solid #ff2391;" src="/assets/img/image_1.png?h=7a130b234717f699bb239e58499dd773">
              <p class="mx-auto" style="font-size: 12px;font-family: Poppins, sans-serif;text-align: left;width: 77%;margin-top: 8px;">#makanansehat</p>
              <p class="mx-auto" style="font-size: 22px;font-family: Poppins, sans-serif;text-align: left;width: 77%;font-weight: bold;margin-top: -15px;">Mangga</p>
              <p class="mx-auto" style="font-size: 12px;font-family: Poppins, sans-serif;text-align: left;width: 77%;margin-top: -15px;height: 46.67px;">jelaskan deskripsi produk disini...</p><a class="btn btn-primary" role="button" style="width: 175.56px;height: 48.56px;font-weight: bold;font-family: Poppins, sans-serif;font-size: 22.22px;border-radius: 55.56px;background: #ff2391;border-style: none;padding-top: 5.6px;" href="https://shopee.co.id/search?keyword=mangga">BELI</a>
            </div>
          </div>
          <div class="col mx-auto" style="text-align: center;margin-top: 12px;">
            <div class="mx-auto" style="border-radius: 5.56px;border: 3px solid #ff2391;padding-top: 12px;padding-bottom: 18px;width: 85%;"><img width="100" height="80" style="width: 232.22px;height: 152.22px;border-radius: 11.11px;border: 1px solid #ff2391;" src="/assets/img/image_2.png?h=38a2ca2f4ff7b30a6f55c30b6edea9c3">
              <p class="mx-auto" style="font-size: 12px;font-family: Poppins, sans-serif;text-align: left;width: 77%;margin-top: 8px;">#makanansehat</p>
              <p class="mx-auto" style="font-size: 22px;font-family: Poppins, sans-serif;text-align: left;width: 77%;font-weight: bold;margin-top: -15px;">Alpukat</p>
              <p class="mx-auto" style="font-size: 12px;font-family: Poppins, sans-serif;text-align: left;width: 77%;margin-top: -15px;height: 46.67px;">jelaskan deskripsi produk disini...</p><a class="btn btn-primary" role="button" style="width: 175.56px;height: 48.56px;font-weight: bold;font-family: Poppins, sans-serif;font-size: 22.22px;border-radius: 55.56px;background: #ff2391;border-style: none;padding-top: 5.6px;" href="https://shopee.co.id/search?keyword=alpukat">BELI</a>
            </div>
          </div>
        </div>
      </div>
    </div><!-- End: 2 Rows 1+4 Columns -->
  </main><!-- Start: Footer Clean -->
  <footer class="text-center py-4" style="margin-top: 44px;">
    <div style="color: rgb(255,255,255);font-weight: bold;font-family: Poppins, sans-serif;background: #ff2391;margin-bottom: -32px;">
      <p class="text-muted d-xxl-flex justify-content-xxl-center align-items-xxl-center my-2" style="padding-top: 23px;height: 49.2px;padding-bottom: 21px;"><span style="color: rgb(255, 255, 255);">Pregmom @2022</span><br><br></p>
    </div>
  </footer><!-- End: Footer Clean -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="/assets/js/script.min.js?h=2d5c83a0b230af4e0f7b277aff5d5fd7"></script>
</body>

</html>