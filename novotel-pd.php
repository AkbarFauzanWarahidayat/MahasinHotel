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
                <img src="images/novotel.jpg"
                    style="border-radius:15px;" alt="">
            </div>
            <div>          
                <h3>Novotel Balikpapan</h3>
                <p>Novotel Balikpapan, sebuah destinasi keindahan tropis di tepi pantai Balikpapan, menghadirkan pengalaman menginap yang tak terlupakan. Terletak di pusat kota, hotel ini memadukan kemewahan dan kenyamanan dengan sentuhan kehangatan budaya lokal.</p>
                    <p>Dengan arsitektur modern yang mencerminkan keindahan alam sekitarnya, Novotel Balikpapan menawarkan akomodasi yang elegan dan fasilitas terbaik. Kamar-kamar yang luas dan dilengkapi dengan fasilitas modern menciptakan suasana santai dan nyaman bagi para tamu.</p>
                <br><br>
                <h5>Fasilitas</h5>
                <br>
                    <ul>
                        <li><b> - Kamar & Suite Berkelas:</b> Kamar-kamar dan suite Novotel Balikpapan dirancang dengan gaya kontemporer dan dilengkapi dengan fasilitas tingkat tinggi. Nikmati kenyamanan tempat tidur mewah dan pemandangan indah dari balkon pribadi.</li>
                        <br>
                        <li><b> - Restoran dan Layanan Kuliner:</b> Pengalaman kuliner di Novotel Balikpapan tidak kalah memukau. Restoran hotel menawarkan beragam menu lokal dan internasional, memanjakan lidah Anda dengan cita rasa yang lezat.</li>
                        <br>
                        <li><b> - Kolam Renang Infinity:</b> Bersantailah di tepi kolam renang infinity yang menakjubkan, nikmati pemandangan laut yang memukau sambil menikmati minuman segar dari bar kolam renang.</li>
                        <br>
                        <li><b> - Spa dan Pusat Kebugaran:</b>Temukan keseimbangan dan relaksasi di spa hotel yang eksklusif atau pilih untuk menjaga kebugaran di pusat kebugaran modern yang dilengkapi dengan peralatan terkini.</li>
                        <br>
                        <li><b> - Ruang Pertemuan dan Acara: </b>Novotel Balikpapan menyediakan ruang pertemuan dan ballroom yang ideal untuk konferensi bisnis, perayaan pribadi, atau acara sosial. Fasilitas audio-visual canggih mendukung berbagai jenis acara.</li>
                        <br>
                        <li><b> - Wi-Fi Gratis dan Layanan Kamar 24 Jam:</b> Dengan layanan kamar 24 jam, akses Wi-Fi gratis, dan staf yang ramah siap memberikan pelayanan terbaik, Novotel Balikpapan memberikan kenyamanan dan kemudahan selama Anda menginap.</li>
                        <br>
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
                                <div><button class="btn btn-warning mt-2" style="padding-right:120px; padding-left:147px;" onclick="proses()" type="button">Proses</button>
                                </div>
                                <div><button class="btn btn-primary mt-2" style="padding-right:117px; padding-left:154px;" onclick="bayar()" type="button">Bayar</button>
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
        var hargaHotel = 1180000;
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