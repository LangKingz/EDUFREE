<?php

require('../function/function.php');

if(isset($_POST["register"])){

  if(registrasi($_POST) > 0){
    echo "<script>
            alert('user baru berhasil ditambahkan!');
          </script>";
    header("Location: ../index.html");
  } else {
    echo mysqli_error($conn);
  }
  

}


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Registrasi</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="../css/regis.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
  </head>
  <body>
    <header id="">
      <div class="container-fluid">
        <button onclick="location.href = '../index.html' " class="bg-transparent">
          <i
            ><svg width="20" height="16" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M2.5 7.99992H17.5M8.33333 3.33325L2.5 7.99992L8.33333 3.33325ZM2.5 7.99992L8.33333 12.6666L2.5 7.99992Z" stroke="#282938" stroke-opacity="0.8" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" /></svg
          ></i>
          Homepage
        </button>
      </div>
    </header>
    
    <section id="main">
      <div class="container-fluid">
        <div class="row">
          <div class="col-6">
            <img src="../asset/woman-writing-on-paper-3228878.jpg" alt="" />
            <div class="overlay"></div>
            <div class="row">
              <div class="col-4 text ms-5">
                <h2 class="Title">Selangkah Lebih</h2>
                <h2 class="Title">Dekat Dengan</h2>
                <h2 class="Title">Impianmu</h2>
                <p class="Caption col-9 mt-5">Sebuah layanan E-Learning gratis yang siap membantumu menjadi seorang ahli</p>
              </div>
            </div>
          </div>
          <div class="col-6 layer">
            <div class="row">
              <div class="col-10">
                <h4 class="title1">Register</h4>
                <p class="caption1">Persiapkan diri untuk masa depan yang penuh dengan bintang</p>
              </div>
              <form action="regis.php" method="post">
                <div class="row">
                  <div class="col-10 justify-content-center">
                   
                        <div class="mb-3">
                          <input type="text" name="username" class="form-control" id="exampleFormControlInput1" placeholder="Your name" />
                        </div>
                        <div class="mb-3">
                          <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="email" />
                        </div>
                        <div class="mb-3">
                          <input type="password" name="password" class="form-control" id="exampleFormControlInput1" placeholder="password" />
                        </div>
                      </div>
                   
                </div>
                <div class="col-10">
                  <button class="btn btn-primary mt-3" type="submit" name="register" >D A F T A R</button>
                  <p class="caption2 text-center">Sudah punya akun? <a href="../login/login.php">Login</a></p>
                  
                </div>
              </form>
              
            </div>
          </div>
        </div>
      </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
