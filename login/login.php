<?php
session_start();
require '../function/function.php';

if(isset($_COOKIE['login'])){
  if($_COOKIE['login'] == 'true'){
    $_SESSION['login'] = true;
  }
}

if (isset($_SESSION["login"])) {
  header("Location: ../index.html");
  exit;
}

if(isset($_POST["login"])){

  $email = $_POST["email"];
  $password = $_POST["password"];
  //  hash data dari user

  $result = mysqli_query($conn, "SELECT * FROM user WHERE email = '$email'");
  // cek email
  if(mysqli_num_rows($result) === 1){
    // cek password
    $row = mysqli_fetch_assoc($result);
    if (password_verify($password,$row["password"])) {
      // set session
      $_SESSION["login"] = true;

      // cek remember me
      if(isset($_POST['remember'])){
        // buatcookie
          setcookie('login', 'true', time() + 10);
      }

      header("Location: ../dashboard/dash.php");
      exit;
    }
  }
  $error = true;
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/login.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
    <title>Login</title>
  </head>
  <body>
    <header id="">
      <div class="container-fluid">
        <button onclick="location.href ='../index.html' " class="bg-transparent">
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
          <div class="col-sm-6">
            <img src="../asset/2.svg" alt="" />
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
                <h4 class="title1">Login</h4>
                <p class="caption1">Persiapkan diri untuk masa depan yang penuh dengan bintang</p>
              </div>
              <form action="" method="post">
                <div class="row">
                  <div class="col-10">
                    <div class="mb-3">
                      <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="Email" />
                    </div>
                    <div class="mb-3">
                      <input type="password" name="password" class="form-control" id="exampleFormControlInput1" placeholder="Password" />
                    </div>
                  </div>
                  <div class="col-10">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="remember" id="gridCheck" />
                      <label class="form-check-label" for="gridCheck">simpan info masuk</label>
                    </div>
                  </div>
                </div>
                <div class="col-10">
                  <button class="btn btn-primary" type="submit" name="login">M A S U K</button>
                  <p class="caption2 text-center">Sudah punya akun? <a href="../register/regis.php">Daftar</a></p>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
