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
                <img src="images/brits-hotel.jpg"
                    style="border-radius:15px;" alt="">
            </div>
            <div>          
                <h3>Brits Hotel Legian</h3>
                <p>Brits Hotel Legian adalah destinasi istimewa di kawasan Legian, Bali, yang menawarkan pengalaman menginap yang tak terlupakan. 
                    Dengan lokasinya yang strategis, hotel ini menyajikan keseimbangan sempurna antara kemewahan dan kenyamanan.</p>
                    <p>Dengan arsitektur modern yang memikat dan desain interior yang elegan, setiap sudut Brits Hotel Legian dirancang untuk memanjakan tamu dengan suasana yang santai dan mewah. Kamar-kamar yang dilengkapi dengan fasilitas modern dan pemandangan yang menakjubkan memastikan pengalaman menginap yang tak terlupakan.</p>
                <br><br>
                <h5>Fasilitas</h5>
                <br>
                    <ul>
                        <li><b>- Akses Pantai:</b> Beberapa hotel di Legian memiliki akses yang dekat dengan pantai, memungkinkan tamu untuk dengan mudah mengakses keindahan pantai Bali.</li>
                        <br>
                        <li><b>- Akses ke Tempat Wisata:</b> Daerah Legian biasanya terletak di antara Seminyak dan Kuta, yang memiliki akses yang mudah ke berbagai tempat wisata, restoran, toko, dan tempat hiburan.</li>
                        <br>
                        <li><b>- Kamar dan Suite:</b> Fasilitas kamar dan suite yang nyaman dengan berbagai pilihan tipe kamar sesuai kebutuhan tamu.</li>
                        <br>
                        <li><b>- Kolam Renang:</b> Sebagian besar hotel memiliki kolam renang untuk relaksasi dan bersantai.</li>
                        <br>
                        <li><b>- Restoran dan Layanan Kuliner: </b>Restoran atau layanan makanan yang menyajikan masakan lokal dan internasional.</li>
                        <br>
                        <li><b>- Spa dan Pusat Kebugaran:</b> Beberapa hotel menawarkan fasilitas spa atau pusat kebugaran bagi tamu yang ingin bersantai atau menjaga kesehatan selama menginap.</li>
                        <br>
                        <li><b>- Wi-Fi Gratis:</b> Biasanya tersedia akses internet gratis di area publik maupun kamar.
                            Resepsionis 24 Jam: Layanan resepsionis yang siap membantu tamu kapan pun.
                            Layanan Laundry: Fasilitas cuci dan setrika yang tersedia bagi tamu.</li>
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
                                <div><button class="btn btn-warning mt-2" style="padding-right:84px; padding-left:90px;" onclick="proses()" type="button">Proses</button>
                                </div>
                                <div><button class="btn btn-primary mt-2" style="padding-right:90px; padding-left:90px;" onclick="bayar()" type="button">Bayar</button>
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
        var hargaHotel = 683101;
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