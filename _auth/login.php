<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- CDN Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Indonesian Tourism - Beranda</title>

    <!-- Bootstrap Lokal (Backup-an CDN) -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- CSS Lokal -->
    <link rel="stylesheet" href="css/fontawesome.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/owl.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
</head>
<body>
<section class="vh-100">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-6 text-black">

        <div class="px-5 ms-xl-4" style="margin-top:70px;">
          <i class="fas fa-crow fa-2x me-3 pt-5 mt-xl-4" style="color: #709085;"></i>
          <span class="h1 fw-bold mb-0" style="margin-left:31%;">LOG IN</span>
        </div>

        <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">

          <form style="width: 23rem; margin-left:95px;">

            <div class="form-outline mb-4">
              <label class="form-label" for="form2Example18" style="margin-left:10px;">Username</label>
              <input type="text" id="username" class="form-control form-control-lg" placeholder="ex: Rusdisaputra" />  
            </div>

            <div class="form-outline mb-4">
              <label class="form-label" for="form2Example28" style="margin-left:10px;">Password</label>
              <input type="password" id="password" class="form-control form-control-lg" placeholder="" />
            </div>

            <div class="pt-1 mb-4">
              <!-- <a href="../index.php"> -->
              <button class="btn btn-warning btn-lg btn-block fw-medium" type="button" style="padding-right:159px; padding-left:159px;" onclick="login()">Login</button>
              <!-- </a> -->
            </div>

            <p class="small mb-5 pb-lg-2"><a class="text-muted" href="#!">Lupa password?</a></p>
            <p>Belum punya akun? <a href="#!" class="link-info">Registrasi</a></p>

          </form>

        </div>

      </div>
      <div class="col-sm-6 px-0 d-none d-sm-block">
        <img src="../images/loginbg2.jpg"
          alt="Login image" class="w-100 vh-100" style="object-fit: cover; object-position: left;">
      </div>
    </div>
  </div>
</section>

<script>
    function login(){
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;

    if(username === "mahasin" && password === "123"){
        window.location.href="../index.php";
        alert("Selamat Datang "+username);
    }
    else{
        alert("Gagal login, pastikan email dan password benar!");
    }
}
</script>
</body>
</html>