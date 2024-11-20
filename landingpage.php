<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Landing Page</title>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <style>
      body {
        font-family: "Poppins", sans-serif;
      }
    </style>
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm py-1">
      <div class="container">
        <a href="." class="">
          <img src="./images/Logo.png" alt="Logo Lestari">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Tentang Kami</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Layanan</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Blog</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Kontak Kami</a></li>
            <a class="btn btn-success rounded-pill px-4 py-2 me-2" href="#">Sign In</a>
            <a class="btn btn-outline-dark rounded-pill px-4 py-2" href="#">Sign Up</a>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Hero Section -->
    <section class="bg-success text-white py-5 ">
      <div class="container text-center text-lg-start">
        <div class="row align-items-center">
          <div class="col-lg-6">
            <h1 class="display-5 fw-bold">Tukarkan Sampah, Dapatkan Hadiahnya</h1>
            <p class="lead">#TukarSampahUntukKebaikan</p>
          </div>
          <div class="col-lg-6 text-center ">
            <img src="./images/hero banner.png" alt="Hero Image" class="img-fluid rounded" />
          </div>
        </div>
      </div>
    </section>

    <!-- About Section -->
    <section class="py-5">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 text-center">
            <img src="https://placehold.co/400x300" alt="Drop Off" class="img-fluid" />
          </div>
          <div class="col-lg-6">
            <h2 class="fw-bold">Kelola Sampah dengan Drop Off, Dapatkan Poin Berharga</h2>
            <p class="text-justify">
                LESTARI mengajak kamu untuk melakukan Drop Off sampah di bank sampah terdekat dan mendapatkan hadiah menarik. Pilih sampahmu (plastik, kertas, logam, atau organik), bawa ke bank sampah, kumpulkan poin, dan tukarkan dengan
              hadiah ramah lingkungan.
            </p>

            <div class="row justify-content-start mb-3">
              <div class="col-md-10">
                <div class="p-4 border rounded shadow-sm bg-success text-white d-flex justify-content-between align-items-center">
                  <div>
                    <h5 class="text-center fw-bold mb-0">2jt Kg+</h5>
                    <p class="text-center mb-0">Sampah di Daur Ulang</p>
                  </div>
                  <div>
                    <h5 class="text-center fw-bold mb-0">15rb+</h5>
                    <p class="text-lg-start mb-0">Pengguna</p>
                  </div>
                </div>
              </div>
            </div>

            <div class="lihat-selengkapnya mt-2"><strong>Lihat Selengkapnya</strong> →</div>
          </div>
        </div>
      </div>
    </section>

    <!-- Services Section -->
    <section class="py-5 bg-light">
      <div class="container text-center">
        <h2 class="fw-bold mb-1 text-lg-start">Layanan</h2>
        <p class="text-lg-start">Revolusi daur ulang dari Mall Sampah untuk semua orang</p>
        <div class="row g-4 mt-4">
          <div class="col-md-4">
            <div class="p-4 border rounded shadow-sm">
              <h5>🎁 Rewards</h5>
              <p>LESTARI mengubah sampahmu menjadi poin yang bisa kamu kumpulkan dan tukarkan dengan hadiah ramah lingkungan.</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="p-4 border rounded shadow-sm">
              <h5>📺 Tutorial</h5>
              <p>LESTARI menyediakan tutorial untuk mengubah limbah menjadi barang bernilai dengan gaya hidup ramah lingkungan.</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="p-4 border rounded shadow-sm">
              <h5>🛍️ Marketplace</h5>
              <p>Marketplace LESTARI menyediakan produk berkualitas daur ulang. Dukungan nyata untuk gerakan ramah lingkungan.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Jenis sampah Section -->
    <section class="py-5">
        <div class="container text-center my-5">
            <h2 class="fw-bold mb-1 text-lg-start">Jenis Sampah</h2>
            <p class="text-lg-start">Lihat semua jenis sampah yang kami daur ulang.</p>
            <div class="row">
              <div class="col-md-3 col-sm-6 my-2">
                <div class="card p-3 border border rounded shadow-sm">
                  <div class="icon mb-2">📄</div>
                  <p>Kertas</p>
                </div>
              </div>
              <div class="col-md-3 col-sm-6 my-2">
                <div class="card p-3 border rounded shadow-sm">
                  <div class="icon mb-2">🛢️</div>
                  <p>Plastik</p>
                </div>
              </div>
              <div class="col-md-3 col-sm-6 my-2">
                <div class="card p-3 border rounded shadow-sm">
                  <div class="icon mb-2">🥫</div>
                  <p>Aluminium</p>
                </div>
              </div>
              <div class="col-md-3 col-sm-6 my-2">
                <div class="card p-3 border rounded shadow-sm">
                  <div class="icon mb-2">🔩</div>
                  <p>Besi & Logam</p>
                </div>
              </div>
              <div class="col-md-3 col-sm-6 my-2">
                <div class="card p-3 border rounded shadow-sm">
                  <div class="icon mb-2">💻</div>
                  <p>Elektronik</p>
                </div>
              </div>
              <div class="col-md-3 col-sm-6 my-2">
                <div class="card p-3 border rounded shadow-sm">
                  <div class="icon mb-2">🍾</div>
                  <p>Botol Kaca</p>
                </div>
              </div>
              <div class="col-md-3 col-sm-6 my-2">
                <div class="card p-3 border rounded shadow-sm">
                  <div class="icon mb-2">🏷️</div>
                  <p>Merek</p>
                </div>
              </div>
              <div class="col-md-3 col-sm-6 my-2">
                <div class="card p-3 border rounded shadow-sm">
                  <div class="icon mb-2">🍃</div>
                  <p>Khusus</p>
                </div>
              </div>
            </div>
          </div>
      </section>

    <!-- Footer -->
    <footer class="bg-success text-white py-4">
      <div class="container text-center">
        <p>&copy; 2024 LESTARI. All Rights Reserved.</p>
        <div class="mt-2">
          <a href="#" class="text-white me-3">Instagram</a>
          <a href="#" class="text-white me-3">Facebook</a>
          <a href="#" class="text-white me-3">Twitter</a>
          <a href="#" class="text-white">YouTube</a>
        </div>
      </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
