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
<section for="nav">
  <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- Logo  -->
                    <a href="#" class="logo">
                        <h1>MAHASIN</h1>
                    </a>
                    <!-- ***** Menu Nav ***** -->
                    <ul class="nav">
                      <li><a href="index.php">Home</a></li>
                      <li><a href="#video">Cari Kamar</a></li>
                      <li><a href="#tentang-kami" class="active">Reservasi</a></li>
                      <li><a href="#hotel"><i class="fa fa-calendar"></i> Pesanan Saya</a></li>
                  </ul>   
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                </nav>
            </div>
        </div>
    </div>
  </header>
</section>

<section>
<div class="container d-lg-flex">
        <div class="box-1" >
            <div class="d-flex align-items-center mb-3">
                <img src="images/ayana-segara-bali.jpg"
                    style="border-radius:15px;" alt="">
            </div>
            <div>          
                <h3>AYANA Segara Bali</h3>
                <p>Ayana Segara Bali, sebuah persembahan eksklusif di pulau Bali yang terkenal dengan keindahan alamnya, adalah tempat di mana kemewahan bertemu dengan kehangatan budaya Bali. Terletak di tepi pantai yang menakjubkan, hotel ini memikat para tamu dengan pesona alam dan keindahan laut yang memukau.</p>
                    <p>Dengan arsitektur yang memadukan unsur tradisional dan modern, Ayana Segara Bali menawarkan atmosfer yang tenang dan akses langsung ke pantai yang indah. Setiap detailnya dirancang untuk menciptakan pengalaman menginap yang istimewa dan tak terlupakan.</p>
                <br><br>
                <h5>Fasilitas</h5>
                <br>
                    <ul>
                        <li><b>- Kamar dan Villa Mewah:</b> Kamar-kamar dan villa di Ayana Segara Bali menciptakan ruang santai yang elegan dan pribadi. Nikmati kenyamanan tempat tidur mewah dan fasilitas kelas dunia, sambil menikmati pemandangan alam yang memesona.</li>
                        <br>
                        <li><b>- Restoran Eksklusif:</b> Menyajikan pengalaman kuliner yang luar biasa, restoran hotel menghadirkan menu beragam dengan cita rasa lokal dan internasional. Suasana yang romantis dan pemandangan matahari terbenam menambah kesempurnaan hidangan Anda.</li>
                        <br>
                        <li><b>- Infinity Pool dan Pantai Pribadi:</b> Tenggelamkan diri Anda di kolam renang infinity yang terhampar luas atau jelajahi pantai pribadi yang tenang, tempat Anda dapat bersantai di tepi laut dengan pelayan pribadi yang siap memenuhi kebutuhan Anda.</li>
                        <br>
                        <li><b>- Spa dan Pusat Kesehatan:</b> Spa mewah hotel ini menawarkan perawatan tradisional Bali dan terapi modern untuk memanjakan dan menyegarkan tubuh Anda. Pusat kesehatan dengan peralatan terkini juga tersedia bagi mereka yang ingin menjaga kebugaran.</li>
                        <br>
                        <li><b>- Ruang Acara dan Pernikahan:</b>Dari kegiatan air, seperti selancar dan menyelam, hingga tur budaya dan perjalanan petualangan, Ayana Segara Bali menawarkan berbagai pilihan aktivitas untuk memenuhi keinginan tamu yang beragam.</li>
                        <br>
                        <li><b>- Aktivitas Wisata dan Rekreasi:</b> Beberapa hotel menawarkan fasilitas spa atau pusat kebugaran bagi tamu yang ingin bersantai atau menjaga kesehatan selama menginap.</li>
                        <br>
                        <li><b>- Layanan Prima dan Kenyamanan:</b> Dengan layanan kamar 24 jam, Wi-Fi gratis, dan staf yang ramah, Ayana Segara Bali menjamin tingkat kenyamanan yang tinggi untuk para tamu selama menginap.</li>
                    </ul>
            </div>
        </div>
        <div class="box-2" style="margin-left:20px;">
            <div class="box-inner-2">
                <div>
                    <p class="fw-bold">Payment Details</p>
                    <p class="dis mb-3">Selesaikan pembelian Anda dengan memberikan detail pembayaran Anda</p>
                </div>
                <form action="">
                    <div class="mb-3">
                        <p class="dis fw-bold mb-2">Check in</p>
                        <input class="form-control" type="date" value="" id="cin">
                    </div>
                    <div class="mb-3">
                        <p class="dis fw-bold mb-2">Check out</p>
                        <input class="form-control" type="date" value="" id="cout">
                    </div>
                    <div class="mb-3">
                        <p class="dis fw-bold mb-2">Jumlah Tamu</p>
                        <input class="form-control" type="number" value="" id="jtamu">
                    </div>
                        <!-- <div class="my-3 cardname">
                            <p class="dis fw-bold mb-2">Cardholder name</p>
                            <input class="form-control" type="text">
                        </div>
                        <div class="address">
                            <p class="dis fw-bold mb-3">Billing address</p>
                            <select class="form-select" aria-label="Default select example">
                                <option selected hidden>United States</option>
                                <option value="1">India</option>
                                <option value="2">Australia</option>
                                <option value="3">Canada</option>
                            </select>
                            <div class="d-flex">
                                <input class="form-control zip" type="text" placeholder="ZIP">
                                <input class="form-control state" type="text" placeholder="State">
                            </div>
                            <div class=" my-3">
                                <p class="dis fw-bold mb-2">VAT Number</p>
                                <div class="inputWithcheck">
                                    <input class="form-control" type="text" value="GB012345B9">
                                    <span class="fas fa-check"></span>

                                </div>
                            </div> -->
                            <div class="d-flex flex-column dis">
                                <div class="d-flex align-items-center justify-content-between mb-2">
                                    <p>Check in</p>
                                    <p id="outcin"></p>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mb-2">
                                    <p>Check out</p>
                                    <p id="outcout"></p>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mb-2">
                                    <p class="fw-bold">Total</p>
                                    <p class="fw-bold" id="outtotal"></p>
                                </div>
                                <div><button class="btn btn-warning mt-2" style="padding-right:98px; padding-left:98px;" onclick="proses()" type="button">Proses</button>
                                </div>
                                <div><button class="btn btn-primary mt-2" style="padding-right:101px; padding-left:101px;" onclick="bayar()" type="button">Bayar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<script>
    function proses(){
        var hargaHotel = 5454896;
        var cin = document.getElementById("cin").value;
        var cout = document.getElementById("cout").value;
        var jtamu = parseInt(document.getElementById("jtamu").value);

        // var durasinginep = cin - cout;

        var total = hargaHotel*jtamu;

       document.getElementById("outcin").innerHTML = cin;  
       document.getElementById("outcout").innerHTML = cout;
       document.getElementById("outtotal").innerHTML = total.toLocaleString("id-ID", { style: "currency", currency: "IDR" });

    }

    function bayar(){
        alert("Pembayaran Berhasil");
        alert("Kode Pesanan Anda #64359AD8");
    }
</script>
</body>
</html>