<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="style/styledasboard.css" />

    <title>HIKAM SIRRUL ARIFIN</title>
    <style>
        #about, #direction {
            display: none;
        }
        #additionalLinks {
            display: none; 
        }
    </style>
</head>
<body id="home">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm fixed-top">
        <div class="container">
            <a class="navbar-brand" href="https://www.telkom.co.id/sites">
                <img src="image/logo_horizontal.svg" alt="Logo" style="height: 40px;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div id="additionalLinks">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#direction">Directors</a></li>
                    <li class="nav-item"><a class="nav-link" href="loginregis/register.php">Register</a></li>
                    <li class="nav-item"><a class="nav-link" href="loginregis/login.php">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Jumbotron -->
    <section class="jumbotron text-center position-relative" id="dash" style="padding-top: 60px;">
        <img src="image/bumn.png" alt="Logo BUMN" style="height: 20px; position: absolute; top: 90px; right: 40px;">
        <h1 class="disp" style="color: #black; font-weight: bold;" >Telkom Indonesia</h1>
        <h1 class="display-4" style="color: #black; font-weight: bold;" >Kami Menghadirkan...</h1>
        <h1 class="display-4" style="color: #black; font-weight: bold;" >Dunia Dalam Genggaman</h1>
        <h1 id="toggleDetails" style="cursor: pointer;">Detail Information</h1>
    </section>

    <!-- About Section -->
    <section id="about">
        <div class="container">
            <div class="row text-center mb-3">
            <img src="image/tlkm.jpg" alt="telkom" style="height: auto;">
                <div class="col"><h2 class="fadeIn">About</h2></div>
            </div>
            <div class="row justify-content-center fs-5 text-center">
                <div class="col-md-4">
                    <p class="fadeIn">
                        PT Telkom Indonesia (Persero) Tbk (Telkom) adalah Badan Usaha Milik Negara (BUMN) yang bergerak di bidang jasa layanan teknologi informasi dan komunikasi (TIK) dan jaringan telekomunikasi di Indonesia.
                    </p>
                </div>
                <div class="col-md-4">
                    <p class="fadeIn">
                        Dalam upaya bertransformasi menjadi digital telecommunication company, TelkomGroup mengimplementasikan strategi bisnis dan operasional perusahaan yang berorientasi kepada pelanggan (customer-oriented).
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Direction Section -->
    <section id="direction" style="padding-top: 100px; margin-bottom: 50px;">
        <div class="container">
            <div class="row text-center mb-3">
                <div class="col"><h2 class="fadeIn">Direksi</h2></div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-4 mb-3">
                    <div class="card fadeIn">
                        <img src="image/Ririek.jpg" class="card-img-top" alt="Ririek Adriansyah" />
                        <div class="card-body text-center">
                            <h5 class="card-title direksi">Ririek Adriansyah</h5>
                            <p class="card-text">Direktur Utama</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card fadeIn">
                        <img src="image/Heri.jpg" class="card-img-top" alt="Heri Supriadi" />
                        <div class="card-body text-center">
                            <h5 class="card-title direksi">Heri Supriadi</h5>
                            <p class="card-text">Direktur Keuangan dan Manajemen Risiko</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card fadeIn">
                        <img src="image/Venus.jpg" class="card-img-top" alt="FM Venusiana R" />
                        <div class="card-body text-center">
                            <h5 class="card-title direksi">FM Venusiana R</h5>
                            <p class="card-text">Direktur Enterprise & Business Service</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="text-white text-center pb-3">
        <p>
            @Copyright by_22552011066_
            <a href="https://www.instagram.com/hikamsrl/" class="text-white">HIKAM SIRRUL ARIFIN</a>
            _TIF RP 22 CNS
        </p>
    </footer>

    <!-- JavaScript -->
    <script>
        document.getElementById("toggleDetails").addEventListener("click", function () {
            const aboutSection = document.getElementById("about");
            const directionSection = document.getElementById("direction");
            const additionalLinks = document.getElementById("additionalLinks");

            const isHidden = aboutSection.style.display === "none" || !aboutSection.style.display;

            aboutSection.style.display = isHidden ? "block" : "none";
            directionSection.style.display = isHidden ? "block" : "none";
            additionalLinks.style.display = isHidden ? "block" : "none";

            this.textContent = isHidden ? "Hide Detail Information" : "Detail Information";
        });
    </script>
</body>
</html>
