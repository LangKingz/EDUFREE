<?php
session_start(); // memulai session
require '../function/function.php';


if (isset($_GET['logout'])) { // jika parameter logout diberikan
    // menghapus semua variabel session
    $_SESSION = array();

    // jika menggunakan cookies, hapus cookie session
    if (isset($_COOKIE[session_name()])) {
        setcookie(session_name(), '', time() - 42000, '/');
    }

    // akhiri session
    session_destroy();

    // redirect ke halaman login
    header("Location: ../index.html");
    exit();
}



// if(!isset($_SESSION['username'])) { // Redirect ke halaman login jika belum login
//     header("Location: login.php");
//     exit();
// }

// $username = registrasi($username); // Mendapatkan username dari session

?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Dashboard</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="../css/dash.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">[EDUFREE]</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto mt-3">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">HOME</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#about">TENTANG KAMI</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">KURSUS</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">FAQ</a>
              </li>
              <li class="nav-item bar">
                <a class="nav-link" href="#"
                  >BLOG
                  <svg class="mb-1 ms-2" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M6.33334 2.99992H3.00001C2.55798 2.99992 2.13406 3.17551 1.8215 3.48807C1.50894 3.80063 1.33334 4.22456 1.33334 4.66658V12.9999C1.33334 13.4419 1.50894 13.8659 1.8215 14.1784C2.13406 14.491 2.55798 14.6666 3.00001 14.6666H11.3333C11.7754 14.6666 12.1993 14.491 12.5119 14.1784C12.8244 13.8659 13 13.4419 13 12.9999V9.66658M9.66668 1.33325H14.6667M14.6667 1.33325V6.33325M14.6667 1.33325L6.33334 9.66658"
                      stroke="white"
                      stroke-width="1.5"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                    />
                  </svg>
                </a>
              </li>
              <div class="account d-flex">
                <img src="../asset/Ellipse 9.jpg" alt="" class="rounded-circle me-2" />
                <div class="name-acc">
                  <div class="row">
                    <div class="col-4">
                      <span class="name">Hi, </span>
                      <div class="row">
                        <div class="col">
                          <span class="caption">Frontend Developer</span>
                        </div>
                      </div>
                    </div>
                    
                    <div class="col-1">
                      <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            
                          </a>
                          <ul class="dropdown-menu dropdown-menu-dark">
                            <li><a class="dropdown-item" href="dash.php?logout=true">logout</a></li>
                          </ul>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </ul>
          </div>
          
        </div>
      </nav>
    </header>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
