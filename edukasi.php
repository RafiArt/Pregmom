<?php
error_reporting(0);
session_start();
$results = $_GET['results'];
if (isset($_GET['submit'])) {
  header('Location: https://www.google.com/search?q=' . $results);
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
  <link rel="stylesheet" href="/assets/css/styles.min.css?h=fd7e8d8a8e97ef344853a3070007d919">
</head>

<body>
  <!-- Start: Navbar Centered Links -->
  <nav class="navbar navbar-light navbar-expand-md sticky-top navbar-shrink py-3" id="mainNav">
    <div class="container"><a class="navbar-brand d-flex align-items-center" href="/"><span class="bs-icon-sm bs-icon-circle bs-icon-primary shadow d-flex justify-content-center align-items-center me-2 bs-icon"><img src="/assets/img/1664268155719.png?h=8d712739119881ce6b0b113c1a533e45" width="114" height="229" style="width: 34px;height: 34px;"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-bezier">
            <path fill-rule="evenodd" d="M0 10.5A1.5 1.5 0 0 1 1.5 9h1A1.5 1.5 0 0 1 4 10.5v1A1.5 1.5 0 0 1 2.5 13h-1A1.5 1.5 0 0 1 0 11.5v-1zm1.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1zm10.5.5A1.5 1.5 0 0 1 13.5 9h1a1.5 1.5 0 0 1 1.5 1.5v1a1.5 1.5 0 0 1-1.5 1.5h-1a1.5 1.5 0 0 1-1.5-1.5v-1zm1.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1zM6 4.5A1.5 1.5 0 0 1 7.5 3h1A1.5 1.5 0 0 1 10 4.5v1A1.5 1.5 0 0 1 8.5 7h-1A1.5 1.5 0 0 1 6 5.5v-1zM7.5 4a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1z">
            </path>
            <path d="M6 4.5H1.866a1 1 0 1 0 0 1h2.668A6.517 6.517 0 0 0 1.814 9H2.5c.123 0 .244.015.358.043a5.517 5.517 0 0 1 3.185-3.185A1.503 1.503 0 0 1 6 5.5v-1zm3.957 1.358A1.5 1.5 0 0 0 10 5.5v-1h4.134a1 1 0 1 1 0 1h-2.668a6.517 6.517 0 0 1 2.72 3.5H13.5c-.123 0-.243.015-.358.043a5.517 5.517 0 0 0-3.185-3.185z">
            </path>
          </svg></span><span style="font-family: Poppins, sans-serif;color: #49516f;">Pregmom</span></a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-2"><span class="visually-hidden">Toggle
          navigation</span><span class="navbar-toggler-icon"></span></button>
      <div class="collapse navbar-collapse" id="navcol-2">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"></li>
          <li class="nav-item"><a class="nav-link" href="home.php" style="font-family: Poppins, sans-serif;color: #000000;"><strong>Beranda</strong></a></li>
          <li class="nav-item"><a class="nav-link" href="edukasi.php" style="font-family: Poppins, sans-serif;color: rgba(255,255,255,0.9);background: #ff2391;border-radius: 13.34px;">Edukasi</a>
          </li>
          <li class="nav-item"><a class="nav-link" href="panel.php" style="font-family: Poppins, sans-serif;color: #000000;"><strong>E-Panel</strong><br></a></li>
          <li class="nav-item"><a class="nav-link" style="font-family: Poppins, sans-serif;color: #000000;" href="ngidam.php"><strong>Ngidam</strong></a></li>
          <li class="nav-item"><a class="nav-link" href="games.php" style="font-family: Poppins, sans-serif;color: #000000;"><strong>Games</strong><br></a></li>
          <li class="nav-item"><a class="nav-link" href="emergencyCenter.php" style="font-family: Poppins, sans-serif;color: #000000;"><strong>Emergency Center</strong><br></a></li>
          <li class="nav-item"><a class="nav-link" href="profile.php" style="font-family: Poppins, sans-serif;color: #000000;"><strong>Profile</strong><br></a></li>
        </ul><a class="btn btn-primary ms-md-2" role="button" href="logout.php" style="background: #49516f;border-radius: 13.33px;border-style: none;font-family: Poppins, sans-serif;width: 91.5px;padding-left: 20px;">Keluar</a>
      </div>
    </div>
  </nav><!-- End: Navbar Centered Links -->
  <main class="page contact-us-page">
    <!-- Start: 1 Row 2 Columns -->
    <div class="container" style="margin-top: 45px;">
      <div class="row">
        <div class="col-md-6 col-xxl-6">
          <h1 style="font-family: Poppins, sans-serif;font-size: 44.44px;font-weight: bold;color: #49516F;">Edukasi</h1>
        </div>
        <div class="col-md-6 d-xxl-flex align-items-xxl-center">
          <div style="width: 844.875px;text-align: right;">

            <form method="get" action="">
              <input name="results" type="text" style="border-radius: 22.22px;border: 2.22px solid #ff2391;width: 43%;height: 40px;padding-left: 27px;" placeholder="cari edukasi disini...">
              <button name="submit" class="btn btn-primary" type="submit" style="height: 36px;padding-top: 3.6px;margin-left: 23px;background: #ff2391;border-style: none;font-family: Poppins, sans-serif;"><span style="font-weight: normal !important;">cari</span></button>
            </form>



          </div>
        </div>
      </div>
    </div><!-- End: 1 Row 2 Columns -->
    <!-- Start: 2 Rows 1+4 Columns -->
    <div class="container mx-auto" style="margin: 36px;">
      <div class="row">
        <div class="col-md-12" style="margin-top: -40px;">
          <div>
            <div>
              <h1 style="font-family: Poppins, sans-serif;font-size: 33.33px;font-weight: bold;margin-top: 30px;color: #ff2391;">
                Kategori</h1><a class="btn btn-primary" role="button" style="width: 151.11px;height: 45.56px;border-radius: 55.56px;font-family: Poppins, sans-serif;background: rgba(13,110,253,0);color: rgb(0,0,0);font-size: 20px;border-color: #ff2391;margin-right: 20px;padding-top: 4.6px;" href="https://www.youtube.com/results?search_query=edukasi+ibu+hamil">Video</a><a class="btn btn-primary" role="button" style="width: 151.11px;height: 45.56px;border-radius: 55.56px;font-family: Poppins, sans-serif;background: rgba(13,110,253,0);color: rgb(0,0,0);font-size: 20px;border-color: #ff2391;margin-right: 20px;padding-top: 4.6px;" href="https://www.google.com/search?q=artikel+ibu+hamil&amp;rlz=1C1ONGR_enID1013ID1013&amp;oq=artikel+ibu+&amp;aqs=chrome.0.0i512l2j69i57j0i512j0i22i30l6.5383j0j7&amp;sourceid=chrome&amp;ie=UTF-8">Artikel</a><a class="btn btn-primary" role="button" style="width: 151.11px;height: 45.56px;border-radius: 55.56px;font-family: Poppins, sans-serif;background: rgba(13,110,253,0);color: rgb(0,0,0);font-size: 20px;border-color: #ff2391;margin-right: 20px;padding-top: 4.6px;" href="https://www.google.com/search?q=tips+ibu+hamil&amp;rlz=1C1ONGR_enID1013ID1013&amp;sxsrf=ALiCzsbgyoUlrXglVDBsEy0E1KxW6o0Qzw%3A1667020661341&amp;ei=dbdcY_KzFJGYseMPpe-KqAs&amp;ved=0ahUKEwiywujy14T7AhURTGwGHaW3ArUQ4dUDCBA&amp;uact=5&amp;oq=tips+ibu+hamil&amp;gs_lcp=Cgxnd3Mtd2l6LXNlcnAQAzIECCMQJzIFCAAQgAQyBggAEAcQHjIGCAAQBxAeMgYIABAHEB4yBggAEAcQHjIGCAAQBxAeMgUIABCABDIGCAAQBxAeMgYIABAHEB46CggAEEcQ1gQQsANKBAhBGABKBAhGGABQ4ANYywRgjwZoAXABeACAAWWIAb4BkgEDMS4xmAEAoAEByAEIwAEB&amp;sclient=gws-wiz-serp">Tips</a>
            </div>
          </div>
        </div>
      </div>
      <div>
        <h1 style="font-family: Poppins, sans-serif;font-size: 33.33px;font-weight: bold;margin-top: 30px;color: #ff2391;">
          Top Trending Video</h1>
        <div class="row" style="margin-top: 30px;">
          <div class="col"><img width="100" height="80" style="width: 275.56px;height: 132.22px;border-radius: 16.67px;border: 1px solid #ff2391;margin-top: 15px;" src="/assets/img/rectangle_37.png?h=6596975fc62532d2f94e759bade81f77">
            <h1 style="width: 251px;height: 25px;font-size: 20px;text-align: left;font-weight: bold;line-height: 28.33px;margin-top: -94px;margin-left: 20px;font-family: Poppins, sans-serif;">
              <a href="https://www.orami.co.id/magazine/minuman-yang-baik-untuk-ibu-hamil"><br><strong><span style="color: rgb(45, 45, 45);">Rekomendasi minuman ibu hamil</span></strong><br><br></a>
            </h1>
          </div>
          <div class="col"><img width="100" height="80" style="width: 275.56px;height: 132.22px;border-radius: 16.67px;border: 1px solid #ff2391;margin-top: 15px;" src="/assets/img/rectangle_35.png?h=92b6267f14a0d0d33a4aa0752c9a61b5">
            <h1 style="width: 251px;height: 25px;font-size: 20px;text-align: left;font-weight: bold;line-height: 28.33px;margin-top: -94px;margin-left: 20px;font-family: Poppins, sans-serif;">
              <a href="https://www.halodoc.com/artikel/10-tips-menjaga-kehamilan-di-trimester-pertama"><br><strong><span style="color: rgb(45, 45, 45);">Cara menjaga kandungan</span></strong><br><br></a>
            </h1>
          </div>
          <div class="col"><img width="100" height="80" style="width: 275.56px;height: 132.22px;border-radius: 16.67px;border: 1px solid #ff2391;margin-top: 15px;" src="/assets/img/rectangle_36.png?h=5cf387efcc620f5e7a8a884a6c6a9404">
            <h1 style="width: 251px;height: 25px;font-size: 20px;text-align: left;font-weight: bold;line-height: 28.33px;margin-top: -94px;margin-left: 20px;font-family: Poppins, sans-serif;">
              <a href="https://herminahospitals.com/id/articles/mual-muntah-pada-kehamilan#:~:text=Mual%20atau%20nausea%2C%20pada%20bulan,dengan%20makan%20pagi%20cukup%20panjang."><br><strong><span style="color: rgb(45, 45, 45);">Penyebab mual ibu hamil</span></strong><br><br></a>
            </h1>
          </div>
          <div class="col"><img width="100" height="80" style="width: 275.56px;height: 132.22px;border-radius: 16.67px;border: 1px solid #ff2391;margin-top: 15px;" src="/assets/img/rectangle_34_ek1.png?h=0b6292c5aa167f98735dc707c81aa365">
            <h1 style="width: 251px;height: 25px;font-size: 20px;text-align: left;font-weight: bold;line-height: 28.33px;margin-top: -94px;margin-left: 20px;font-family: Poppins, sans-serif;">
              <a href="https://www.halodoc.com/artikel/10-tips-menjaga-kehamilan-di-trimester-pertama"><br><strong><span style="color: rgb(45, 45, 45);">Cara menjaga ibu hamil</span></strong><br><br></a>
            </h1>
          </div>
        </div>
      </div>
      <div class="mx-auto" style="text-align: center;">
        <h1 style="font-family: Poppins, sans-serif;font-size: 33.33px;font-weight: bold;margin-top: 89px;color: #ff2391;text-align: left;">
          Top Trending Artikel</h1>
        <div class="row" style="margin-top: 30px;">
          <div class="col">
            <div class="mx-auto" style="background: #D9D9D980;height: 191.11px;width: 382.22px;border-radius: 16.67px;margin-top: 15px;">
              <img width="382" height="191" style="width: 138.89px;height: 138.89px;border-radius: 16.67px;margin-left: -207px;margin-top: 15px;border-width: 1px;border-color: #ff2391;" src="/assets/img/rectangle_38.png?h=32df6dca8fcba0c83680b4aff1aa7922">
              <h1 style="width: 211px;height: 56px;font-size: 19px;text-align: left;font-weight: bold;line-height: 28.33px;margin-top: -142px;margin-left: 176px;color: #ff2391;font-family: Poppins, sans-serif;">
                Manfaat Minyak Ikan untuk Ibu Hamil, Baik untuk...</h1>
              <h1 style="width: 195px;height: 56px;font-size: 12px;text-align: justify;margin-top: 28px;margin-left: 176px;color: #000000;font-family: Poppins, sans-serif;">
                Minyak ikan untuk ibu hamil baik dikonsumsi sejak trimester dua kehamilan....<br><br><br></h1>
              <h1 style="width: 156px;height: 56px;font-size: 12px;text-align: justify;margin-top: -35px;margin-left: 176px;color: #828282;font-family: Poppins, sans-serif;">
                <br><a href="https://www.halodoc.com/artikel/3-manfaat-minyak-ikan-bagi-kesehatan-ibu-hamil"><br><span style="color: rgb(130, 130, 130);">Baca Selengkapnya -&gt;</span><br><br><br></a>
              </h1>
            </div>
          </div>
          <div class="col">
            <div class="mx-auto" style="background: #D9D9D980;height: 191.11px;width: 382.22px;border-radius: 16.67px;margin-top: 15px;">
              <img width="382" height="191" style="width: 138.89px;height: 138.89px;border-radius: 16.67px;margin-left: -207px;margin-top: 15px;border-width: 1px;border-color: #ff2391;" src="/assets/img/image_3.png?h=b10a8d085016554c25505bcbd8d08e99">
              <h1 style="width: 211px;height: 56px;font-size: 19px;text-align: left;font-weight: bold;line-height: 28.33px;margin-top: -142px;margin-left: 176px;color: #ff2391;font-family: Poppins, sans-serif;">
                3 Manfaat Kalsium untuk Ibu Hamil dan Tips..</h1>
              <h1 style="width: 195px;height: 56px;font-size: 12px;text-align: justify;margin-top: 28px;margin-left: 176px;color: #000000;font-family: Poppins, sans-serif;">
                Kalsium untuk ibu hamil berguna untuk menjaga kepadatan tulang....<br><br><br></h1>
              <h1 style="width: 156px;height: 56px;font-size: 12px;text-align: justify;margin-top: -35px;margin-left: 176px;color: #828282;font-family: Poppins, sans-serif;">
                <br><a href="https://www.nutriclub.co.id/article-kehamilan/nutrisi/gizi/pentingnya-manfaat-kalsium-di-masa-kehamilan#:~:text=5%20Manfaat%20Kalsium%20pada%20Ibu%20Hamil,-Ibu%20hamil%20sebaiknya&amp;text=Membuat%20memperlancar%20peredaran%20darah%20dan,terjadinya%20komplikasi%20di%20masa%20kehamilan."><br><span style="color: rgb(130, 130, 130);">Baca Selengkapnya -&gt;</span><br><br><br></a>
              </h1>
            </div>
          </div>
          <div class="col">
            <div class="mx-auto" style="background: #D9D9D980;height: 191.11px;width: 382.22px;border-radius: 16.67px;margin-top: 15px;">
              <img width="382" height="191" style="width: 138.89px;height: 138.89px;border-radius: 16.67px;margin-left: -207px;margin-top: 15px;border-width: 1px;border-color: #ff2391;" src="/assets/img/image_4.png?h=a01beb04e3dd06eca06067891cc6ba1f">
              <h1 style="width: 211px;height: 56px;font-size: 19px;text-align: left;font-weight: bold;line-height: 28.33px;margin-top: -142px;margin-left: 176px;color: #ff2391;font-family: Poppins, sans-serif;">
                6 Jenis Imunisasi Ibu Hamil serta Manfaatnya...</h1>
              <h1 style="width: 195px;height: 56px;font-size: 12px;text-align: justify;margin-top: 28px;margin-left: 176px;color: #000000;font-family: Poppins, sans-serif;">
                Imunisasi adalah hal yang wajib untuk dilakukan....<br><br><br></h1>
              <h1 style="width: 156px;height: 56px;font-size: 12px;text-align: justify;margin-top: -35px;margin-left: 176px;color: #828282;font-family: Poppins, sans-serif;">
                <br><a href="https://www.generasimaju.co.id/jenis-imunisasi-ibu-hamil"><br><span style="color: rgb(130, 130, 130);">Baca Selengkapnya -&gt;</span><br><br><br></a>
              </h1>
            </div>
          </div>
        </div>
      </div>
      <div>
        <h1 style="font-family: Poppins, sans-serif;font-size: 33.33px;font-weight: bold;margin-top: 30px;color: #ff2391;">
          Top Trending Tips</h1>
        <div class="row mx-auto" style="margin-top: 30px;">
          <div class="col ml-auto d-flex align-items-center mt-4 mt-md-0">
            <div id="helllo-container-2" style="margin-right: 30px;margin-left: 30px;background: #D9D9D980;border-radius: 16.67px;height: 113.89px;width: 334.22px;margin-top: 15px;">
              <h1 class="mx-auto" style="font-family: Poppins, sans-serif;font-weight: bold;font-size: 20px;color: #ff2391;width: 282.219px;text-align: left;padding-top: 22px;">
                7 Langkah Mencapai Hamil Sehat </h1>
              <p style="font-size: 12px;font-family: Poppins, sans-serif;text-align: center;color: #828282;background: #d9d9d900;margin-top: -23px;">
                <br><a href="https://www.alodokter.com/hamil-sehat-bisa-dicapai-dengan-7-langkah-ini">Baca
                  Selengkapnya-&gt;</a>
              </p>
            </div>
          </div>
          <div class="col ml-auto d-flex align-items-center mt-4 mt-md-0">
            <div id="helllo-container-3" style="margin-right: 30px;margin-left: 30px;background: #D9D9D980;border-radius: 16.67px;height: 113.89px;width: 334.22px;margin-top: 15px;">
              <h1 class="mx-auto" style="font-family: Poppins, sans-serif;font-weight: bold;font-size: 20px;color: #ff2391;width: 300.219px;text-align: left;padding-top: 22px;">
                9 Tips Menjaga Kesehatan Ibu dan Janin dalam Kandungan</h1>
              <p style="font-size: 12px;font-family: Poppins, sans-serif;text-align: center;color: #828282;background: #d9d9d900;margin-top: -23px;">
                <br><a href="https://hellosehat.com/kehamilan/kandungan/prenatal/tips-menjaga-kesehatan-ibu-hamil/">Baca
                  Selengkapnya-&gt;</a>
              </p>
            </div>
          </div>
          <div class="col ml-auto d-flex align-items-center mt-4 mt-md-0">
            <div id="helllo-container-1" style="margin-right: 30px;margin-left: 30px;background: #D9D9D980;border-radius: 16.67px;height: 113.89px;width: 334.22px;margin-top: 15px;">
              <h1 class="mx-auto" style="font-family: Poppins, sans-serif;font-weight: bold;font-size: 20px;color: #ff2391;width: 282.219px;padding-top: 22px;">
                Kenali Tips Gaya Hidup Sehat untuk Ibu Hamil</h1>
              <p style="font-size: 12px;font-family: Poppins, sans-serif;text-align: center;color: #828282;background: #d9d9d900;margin-top: -23px;">
                <br><a href="https://www.nutriclub.co.id/article-kehamilan/gaya-hidup/perilaku/kenali-tips-gaya-hidup-sehat-untuk-ibu-hamil">Baca
                  Selengkapnya-&gt;</a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div><!-- End: 2 Rows 1+4 Columns -->
  </main><!-- Start: Footer Clean -->
  <footer class="text-center py-4 position-sticky">
    <div style="color: rgb(255,255,255);font-weight: bold;font-family: Poppins, sans-serif;background: #ff2391;margin-bottom: -32px;">
      <p class="text-muted d-xxl-flex justify-content-xxl-center align-items-xxl-center my-2" style="padding-top: 23px;height: 49.2px;padding-bottom: 21px;"><span style="color: rgb(255, 255, 255);">Pregmom
          @2022</span><br><br></p>
    </div>
  </footer><!-- End: Footer Clean -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="/assets/js/script.min.js?h=2d5c83a0b230af4e0f7b277aff5d5fd7"></script>
</body>

</html>