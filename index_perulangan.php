<?php
//MENGGUNAKAN OBJECT

$penerima=array (
    (object) array(
        "phpto"=>"1.jpg",
        "title"=>"Penerima 1",
        "nama"=>"Zainal Arifin",
        "dusun"=>"Merembu Tengah",
        "desa"=>"Merembu",
        "kecamatan"=>"Zainal Arifin",
        "barang"=>"Kuota 15 GB",
        "jenjang"=>"SD"
    ),
    (object) array(
        "phpto"=>"2.jpg",
        "title"=>"Penerima 2",
        "nama"=>"Salmah",
        "dusun"=>"Lingsar Kelin",
        "desa"=>"Lingsar",
        "kecamatan"=>"Lingsar",
        "barang"=>"Ponsel",
        "jenjang"=>"SD"
    ),
    (object) array(
        "phpto"=>"3.jpg",
        "title"=>"Penerima 3",
        "nama"=>"Ramdi",
        "dusun"=>"Longserang Timur",
        "desa"=>"Merembu",
        "kecamatan"=>"Zainal Arifin",
        "barang"=>"Kuota 15 GB",
        "jenjang"=>"SD"
    ),
    (object) array(
        "phpto"=>"4.jpg",
        "title"=>"Penerima 4",
        "nama"=>"Fatur Ashaki",
        "dusun"=>"Bremi",
        "desa"=>"Jagaraga",
        "kecamatan"=>"Kuripan",
        "barang"=>"Kuota 15 GB",
        "jenjang"=>"SMP"
    ),
    (object) array(
        "phpto"=>"5.jpg",
        "title"=>"Penerima 5",
        "nama"=>"Rindu",
        "dusun"=>"Karang Rumak",
        "desa"=>"Kuripan",
        "kecamatan"=>"Kuripan",
        "barang"=>"Ponsel",
        "jenjang"=>"SMP"
    ),
    (object) array(
        "phpto"=>"6.jpg",
        "title"=>"Penerima 6",
        "nama"=>"Herman Felani",
        "dusun"=>"Karang Bucu Daye",
        "desa"=>"Merembu",
        "kecamatan"=>"Zainal Arifin",
        "barang"=>"Kuota 15 GB",
        "jenjang"=>"SMP"
    ),
    (object) array(
        "phpto"=>"7.jpg",
        "title"=>"Penerima 7",
        "nama"=>"Angga Maja",
        "dusun"=>"Peresak Timur",
        "desa"=>"Karang Bayan",
        "kecamatan"=>"Lingsar",
        "barang"=>"Ponsel",
        "jenjang"=>"SMA"
    ),
    (object) array(
        "phpto"=>"8.jpg",
        "title"=>"Penerima 8",
        "nama"=>"Bambang Hartoyo",
        "dusun"=>"Keru",
        "desa"=>"Keru",
        "kecamatan"=>"Narmada",
        "barang"=>"Kuota 15 GB",
        "jenjang"=>"SMA"
    ),
);
$crsl=array (
    (object) array(
        "g" =>"active",
        "pic"=>"c1.png",
    ),
    (object) array(
        "g" =>"",
        "pic"=>"c2.jpg",
    ),
    (object) array(
        "g" =>"",
        "pic"=>"c3.jpg",
    ),
);
/* 
    $penerima=(object) [
        'bagian_awal'=>(object)[
            'no_penerima'=>(object)[
                'no1'=>(object)[
                    'nama_penerima'=>'Zainal Arifin',
                    'dusun'=>'Merembu Tengah',
                    'desa'=>'Merembu',
                    'Kecamatan'=>'Labuapi',
                ],
                'no2'=>(object)[
                    'nama_penerima'=>'Salmah',
                    'dusun'=>'Lingsar Kelin',
                    'desa'=>'Lingsar',
                    'Kecamatan'=>'Lingsar',
                ],
                'no3'=>(object)[
                    'nama_penerima'=>'Ramdi',
                    'dusun'=>'Longserang Timur',
                    'desa'=>'Langko',
                    'Kecamatan'=>'Lingsar',
                ],
                'no4'=>(object)[
                    'nama_penerima'=>'Fatur Ashaki',
                    'dusun'=>'Bremi',
                    'desa'=>'Jagaraga',
                    'Kecamatan'=>'Kuripan',
                ],
                'no5'=>(object)[
                    'nama_penerima'=>'Rindu',
                    'dusun'=>'Karang Rumak',
                    'desa'=>'Kuripan',
                    'Kecamatan'=>'Kuripan',
                ],
                'no6'=>(object)[
                    'nama_penerima'=>'Herman Felani',
                    'dusun'=>'Karang Bucu Daye',
                    'desa'=>'Bagik Polak',
                    'Kecamatan'=>'Labuapi',
                ],
                'no7'=>(object)[
                    'nama_penerima'=>'Fuji Astuti',
                    'dusun'=>'Peresak Timur',
                    'desa'=>'Karang Bayan',
                    'Kecamatan'=>'Lingsar',
                ],
                'no8'=>(object)[
                    'nama_penerima'=>'Bambang Hartoyo',
                    'dusun'=>'Keru',
                    'desa'=>'Keru',
                    'Kecamatan'=>'Narmada',
                ],
                'no9'=>(object)[
                    'nama_penerima'=>'Lalu Ahmad',
                    'dusun'=>'Loang Balok',
                    'desa'=>'Sekotong Tengah',
                    'Kecamatan'=>'Sekotong',
                ],
                'no10'=>(object)[
                    'nama_penerima'=>'Akhmad Bayu',
                    'dusun'=>'Suranadi Barat',
                    'desa'=>'Suranadi',
                    'Kecamatan'=>'Narmada',
                ],
            ]
        ],
        'bagian_kedua'=>(object)[
            'barang_donasi'=>(object)[
                'b1'=>'Kuota 15 GB',
                'b2'=>'Telepon Gengam',
            ]
        ],
        'bagian_ketiga'=>(object)[
            'jenjang'=>(object)[
                'j1'=>'SD',
                'j2'=>'SMP',
                'j3'=>'SMA',
            ]
        ],
    ];
 */  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us |Donasi TaPe</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" 
    crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
    <link rel="stylesheet" href="dashboard.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <img src="logo2.png" alt="Gsmbar Tidak Tersedia" style="max-height:120px;">
            <a class="navbar-brand" href="#" style="font-family: 'Playfair Display', serif; font-size: 30px;" >Donasi TaPe</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">About Us</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      My Account
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="#">Log In</a></li>
                      <li><a class="dropdown-item" href="#">Sign In</a></li>
                    </ul>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Program Kegiatan
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="#">Berbagi Kuota</a></li>
                      <li><a class="dropdown-item" href="#">Berbagi Ponsel</a></li>
                      <li><a class="dropdown-item" href="#">Peduli Pendidikan</a></li>
                    </ul>
                  </li>
                  <li class="nav-item dropdown" >
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Keranjang Donasi
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="#">Bulan Ini</a></li>
                      <li><a class="dropdown-item" href="#">Langganan</a></li>
                    </ul>
                  </li>
                </ul>
            </div>
        </div>
    </nav>
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <?php foreach ($crsl as $karo) { ?>
                    <div class="carousel-item <?= $karo->g ?>">
                        <img src="./carrousel/<?= $karo->pic?>" class="d-block w-100" alt="...">
                    </div>
                <?php } ?>
            </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
                </button>
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-4 ">
                        <p style="margin-top: 150px;">Langkah kecil yang dapat
                        mewujudkan mimpi seseorang.
                        <p style="font-size: 18px;">Ayo berdonasi sekarang!</p>
                        <a href="donasii.html">
                            <button class="btn" style="align-items:center">DONASI</button>
                        </a>
                    </div>
                    <div class="col-lg-8">
                        <img src="B1.png" alt="">
                    </div>
                </div> 
            </div>            
            <div class="row no-gutters mt-5 ms-4 me-4">
            <h3>Penerima Bulan Mei 2021</h3><hr>
            <?php foreach ($penerima as $data_donasi) { ?>
                <div class="col pt-2">
                    <div class="row text-dark" style="margin-left: 5px;">
                        <div class="card" style="width: 18rem;">
                            <img src="./atribut/<?= $data_donasi->phpto?> " class="card-img-top"  style="width: 100%; height: 210px; margin-top: 5px; border-radius: 5px;" alt="..." >
                                <div class="card-body">
                                  <h5 class="card-title"><?=$data_donasi->title?></h5>
                                  <p class="card-text">
                                  <span style="font-weight: bold; color: black;">Nama Penerima : </span> <?=$data_donasi->nama?><br>
                                  <span style="font-weight: bold; color: black;">Dusun : </span><?=$data_donasi->dusun?> <br>
                                  <span style="font-weight: bold; color: black;">Desa : </span><?=$data_donasi->desa?><br>
                                  <span style="font-weight: bold; color: black;">Kecamatan : </span><?=$data_donasi->kecamatan?> <br>
                                  <span style="font-weight: bold; color: black;">Barang Donasi : </span><?=$data_donasi->barang?> <br>
                                  <span style="font-weight: bold; color: black;">Jenjang : </span><?=$data_donasi->jenjang?><br>
                                </p>
                                </div>
                          </div>
                    </div>
                </div>
                <?php } ?>
            </div>
          <!----------- Footer ------------>
          <footer class="footer-bs">
              <div class="row">
                <div class="col-md-3 footer-brand animated fadeInLeft">
                    <div class="footernya">
                        <img class="img-fluid" src="logo2.png" width="100" height="100" style="margin: left 10px;">
                        <h2>Donasi TaPe </h2>
                      <p>Donasi TaPe adalah wadah online untuk mempertemukan relawan/donatur yang ingin menyumbangkan bantuannya untuk diberikan kepada pelajar yang kurang mampu</p>
                      </div>
                  </div>
                <div class="col-md-4 footer-nav animated fadeInUp">
                    <h4>Menu —</h4>
                    <div class="col-md-6">
                          <ul class="list">
                            <li><a href="dashboard.html">Beranda</a></li>
                            <li><a href="tentang-kami-view.html">Tentang Kami</a></li>
                            <li><a href="hubungi-kami.html">Hubungi Kami</a></li>
                            <li><a href="FAQ.html">FAQ</a></li>
                          </ul>
                      </div>
                  </div>
                <div class="col-md-2 footer-social animated fadeInDown">
                    <h4>Follow Us</h4>
                    <ul>
                        <li><a href="https://www.facebook.com/donasi.tape">Facebook</a></li>
                        <li><a href="https://twitter.com/DonasiTape">Twitter</a></li>
                        <li><a href="https://www.instagram.com/donasi_tape/">Instagram</a></li>
                      </ul>
                  </div>
                <div class="col-md-3 footer-ns animated fadeInRight">
                    <h4>Donasi TaPe</h4>
                    <div class="alamat">
                        <i class="fas fa-home me-3"></i> Jl. Majapahit No. 62 Mataram
                    <div class="tlp">
                        <i class="fas fa-phone me-3"></i> 
                        + 62 877 321 9940
                    </div>
                    <br>
                    <h6>
                        Ayo bantu para generasi muda bangsa!
                    </h6>
                </div>
                </p>
            </div>
        </div>
    </footer>
</body>
</html>