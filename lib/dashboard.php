<?php
require '../koneksi.php';
session_start(); 


$current_page = basename($_SERVER['PHP_SELF']);
$username = isset($_SESSION['username']) ? $_SESSION['username'] : '';
$email = isset($_SESSION['email']) ? $_SESSION['email'] : '';

$username = isset($_SESSION['username']) ? $_SESSION['username'] : '';
$email = isset($_SESSION['email']) ? $_SESSION['email'] : '';

$message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['pesan'])) {
  $pesan = $_POST['pesan'];

  $sql_insert = "INSERT INTO pesan (username, email, pesan) VALUES (?, ?, ?)";
  $stmt_insert = $conn->prepare($sql_insert);
  $stmt_insert->bind_param("sss", $username, $email, $pesan);

  if ($stmt_insert->execute()) {
      $_SESSION['message'] = "Pesan berhasil dikirim!";
  } else {
      $_SESSION['message'] = "Gagal mengirim pesan. Silakan coba lagi.";
  }

  $stmt_insert->close();
}

$message = '';
if (isset($_SESSION['message'])) {
  $message = $_SESSION['message'];
  unset($_SESSION['message']); 
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />

    <link rel="stylesheet" href="../style/styledasboard.css" />
    <title>HIKAM SIRRUL ARIFIN</title>
  </head>

  

  <body id="home">
    <!-- navbar start-->
<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm fixed-top">
    <div class="container">
        <a class="navbar-brand" href="https://www.telkom.co.id/sites">
            <img src="../image/logo_horizontal.svg" alt="Logo" style="height: 40px;">
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
                <a class="nav-link" href="#home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#program">Program</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#subsidiary">Subsidiary</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../loginregis/logout.php">Logout</a>
            </li>
          </ul>
        </div>
      </div>
</nav>
<!-- navbar end -->

    <!-- jumbotron -->
    <section class="jumbotron text-center position-relative" id="hom" style="padding-top: 60px">
  <img src="../image/bumn.png" alt="Logo BUMN" style="height: 20px; position: absolute; top: 90px; right: 40px;">
  <img src="../image/lg1.png" alt="Logo" class="lg1-animation" style="height: 200px; position: absolute; right: 200px; top: 170px">
  <h1 class="display-4" style="color: #black; font-weight: bold;">Selamat Datang di...</h1>
  <h1 class="display-4" style="color: #black; font-weight: bold; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);">Dashboard Telkom Indonesia</h1>
  <h1 class="disp" style="color: #black;">Kemudahan Dalam Genggaman untuk Dunia yang Terkoneksi</h1>
</section>
    <!-- akhir jumbotron -->

<!-- program -->
<section id="program" class="fadeIn">
  <div class="container">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item">
          <img src="../image/akhlak.webp">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

    <div class="row text-center mb-3">
      <div class="Program col">
        <h2>Program</h2>
      </div>
    </div>
    <div class="row justify-content-center fs-5 text-center">
      <div class="col-md-4">
        <p> Publikasi satelit merah putih</p>
        <p> Mobile World Congres (MWC 24)</p>
        <p> Media Engagement Bandung</p>
        <p> TelkomGroup WWF Bali</p>
      </div>
      <div class="col-md-4">
        <p> Road to Digiland 2024 Semarang</p>
        <p> Kick Off Dry Run Infraco</p>
        <p> Funtastic Day, Telkom 59th Anniversary</p>
        <p> Indonesia Brand Forum</p>
      </div>
    </div>
  </div>
</section>
<!-- program selesai -->

    <!-- subsidiary -->
    <section id="subsidiary">
      <div class="container">
        <div class="row text-center mb-3">
          <div class="col">
            <h2>Subsidiary</h2>
          </div>
        </div>
        <div class="row justify-content-center">
        <div class="col-md-4 mb-3">
    <div class="card">
        <a href="https://www.telkomsel.com" target="_blank"> <!-- Ganti URL dengan tujuan yang diinginkan -->
            <img 
                src="../image/telkomsel.jpg" 
                class="card-img-top"
                alt="subsidiary1"
            />
        </a>
              <div class="card-body">
              <h5 class="card-title direksi">PT Telekomunikasi Selular (Telkomsel)</h5>
                <p class="card-text">
                Telkomsel merupakan salah satu perusahaan telekomunikasi seluler terbesar di Indonesia. Perusahaan ini mengoperasikan berbagai teknologi jaringan seperti GSM, GPRS, WiFi, 3G, 4G LTE, dan 5G.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
    <div class="card">
        <a href="https://www.telkommetra.co.id/" target="_blank"> <!-- Ganti URL dengan tujuan yang diinginkan -->
            <img 
                src="../image/metra1.jpg" 
                class="card-img-top"
                alt="subsidiary1"
            />
        </a>

              <div class="card-body">
              <h5 class="card-title direksi">PT Multimedia Nusantara (TelkomMetra)</h5>
                <p class="card-text">
                Anak perusahaan Telkom Indonesia selanjutnya yakni TelkomMetra. TelkomMetra mengkhususkan diri dalam layanan multimedia, termasuk penyiaran digital, e-commerce, konten digital, dan iklan digital.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
          <div class="card">
        <a href="https://www.telkomsigma.com" target="_blank"> <!-- Ganti URL dengan tujuan yang diinginkan -->
            <img src="../image/sigma.jpg" class="card-img-top" alt="subsidiary1" />
        </a>
              <div class="card-body">
              <h5 class="card-title direksi">PT Sigma Cipta Caraka (TelkomSigma)</h5>
                <p class="card-text">
                TelkomSigma adalah anak perusahaan Telkom yang menawarkan layanan berbasis teknologi informasi dan komunikasi (TIK) untuk mendukung bisnis. Layanannya termasuk layanan data center, pengembangan perangkat lunak, integrasi sistem, dan lainnya.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- subsidiary selesai -->

    <!-- kontak mulai -->
    <section id="contact">
    <div class="container">
        <div class="row text-center mb-3">
            <div class="col">
                <h2>Contact</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="kontak col-md-7">
                <form method="POST">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" id="name" value="<?php echo htmlspecialchars($username); ?>" readonly />
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" value="<?php echo htmlspecialchars($email); ?>" readonly />
                    </div>
                    <div class="mb-3">
                        <label for="pesan" class="form-label">Pesan</label>
                        <textarea class="form-control" id="pesan" name="pesan" rows="3" required></textarea>
                    </div>
                    <div class="text-center">
                    <button type="submit" class="btn btn-primary">Kirim</button>
                    <?php if ($message): ?>
                    <div class="alert alert-info mt-3" id="message"><?php echo $message; ?></div>
                    <script>
                        // Menghapus pesan setelah 3 detik
                        setTimeout(function() {
                            document.getElementById('message').style.display = 'none';
                        }, 2000);
                    </script>
                <?php endif; ?>
                </form>
            </div>
        </div>
    </div>
</section>
    <!-- kontak selesai -->

    <!-- footer mulai -->
    <footer class="text-white text-center pb-3">
        <p>
            @Copyright by_22552011066_
            <a href="https://www.instagram.com/hikamsrl/" class="text-white">HIKAM SIRRUL ARIFIN</a>
            _TIF RP 22 CNS
        </p>
    </footer>
    <!-- footer selesai -->

    <script>
    document.querySelectorAll('.nav-link').forEach(link => {
    link.addEventListener('click', function(e) {
        if (this.getAttribute('href') === '../loginregis/logout.php') {
            return;
        }
        e.preventDefault();
            const targetId = this.getAttribute('href'); 
            const targetSection = document.querySelector(targetId); 

            document.querySelectorAll('section').forEach(section => {
                section.classList.remove('fadeIn', 'slideInUp');
            });

            targetSection.classList.add('fadeIn');

            targetSection.scrollIntoView({ behavior: 'smooth' });
        });
    });
</script>
    
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    >
    </script>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </body>
</html>