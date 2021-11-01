<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans&family=Josefin+Sans&display=swap" rel="stylesheet"> 
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
  <title>Demo Bumdes</title>
  <style type="text/css">
    body{
      font-family: 'Josefin Sans', sans-serif;
    }
    .navbar .navbar-nav .nav-link {
      color: #000000;
      font-size: 1.1em;
      padding: 1.5rem;
      display: flex; 
      justify-content: center;
      text-align: center;
    }
    .navbar .navbar-nav .nav-link:hover{
      color: #808080;
    }
    .navbar-logo-centered{
      margin-top: -40px;
      border-radius: 20px;
      height: 3em;
      width: 1.5em;
    }
    .navbar-logo-real{            
      width: 100px;
      height: 120px;
      border-radius: 20px;
      background: transparent;
    }
    .carousel-item {
      height: 100vh;
      min-height: 300px;
      background: no-repeat center center scroll;
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      background-size: cover;
    }
    .corousel-text{
      top: 400px;
    }
    .navbarku{
      position:absolute;
      width:100%;
      z-index:9999;
      border-radius:0;
      border-color:transparent;
    }
    .navbarku .nav-item{
      align-items: center; 
      justify-content: center; 
      display: flex;
    }
    .navbarku .nav-item a{
      color: white !important;
      font-family: 
    }
    .navbar-bawah{
      max-height: 80px;
      height: 80px;
      display: flex; 
      justify-content: center;
      text-align: center;
    }
    .navbar-bawah .nav-item{
      align-items: center; 
      justify-content: center; 
      display: flex;
    }
    blockquote {
    font-size: 1.1em;
    line-height: 1.6em;
    padding: 20px 20px 20px 40px;
    border-left: none;
    position: relative;
    text-indent: -19px
}

section#block_content {
    min-height: 400px;
    padding-top: 40px;
    text-align: left
}

blockquote p {
    font-size: 1em
}

blockquote:before,
blockquote:after {
    font-family: Arial, serif;
    font-size: 2.5em;
    vertical-align: middle;
    line-height: 0
}

blockquote:before {
    content: open-quote;
    margin-right: 4px
}

blockquote:after {
    content: close-quote;
    margin-left: 3px
}

blockquote.blockstyle,
blockquote.style2 {
    background: #fff;
    font-style: italic
}

blockquote.blockstyle p,
blockquote.style2 p {
    display: inline
}

blockquote.blockstyle {
    border-left: 3px solid #f0715f;
    position: relative
}

blockquote.blockstyle>span.triangle:before {
    text-indent: 0;
    content: "\f0da";
    font-family: FontAwesome;
    color: #f0715f;
    position: absolute;
    left: -1px;
    top: 50%;
    margin-top: -11px;
    font-style: normal
}

blockquote.blockstyle:before,
blockquote.blockstyle:after {
    color: #f0715f
}

blockquote.blockstyle.border-color-blue {
    border-color: #01b7f2
}

blockquote.blockstyle.border-color-blue>span.triangle:before {
    color: #01b7f2
}

blockquote.blockstyle.border-color-yellow {
    border-color: #fdb714
}

blockquote.blockstyle.border-color-yellow>span.triangle:before {
    color: #fdb714
}
    .card{
      margin-top: -150px;
      border-radius: 4px;
      background: #fff;
      z-index: 999;
      box-shadow: 0 6px 10px rgba(0,0,0,.08), 0 0 6px rgba(0,0,0,.05);
      transition: .3s transform cubic-bezier(.155,1.105,.295,1.12),.3s box-shadow,.3s -webkit-transform cubic-bezier(.155,1.105,.295,1.12);
      padding: 14px 80px 18px 36px;
      cursor: pointer;
      margin-bottom: 10px;
      height: 150px;
    }

    .card:hover{
      transform: scale(1.05);
      box-shadow: 0 10px 20px rgba(0,0,0,.12), 0 4px 8px rgba(0,0,0,.06);
    }

    .card h3{
      font-weight: 600;
    }
    .card h1{
      font-weight: 900;
      position: flex;
      justify-content: center;
      align-items: center;
    }

    .card-1{
      background-image: url(https://ionicframework.com/img/getting-started/ionic-native-card.png);
      background-repeat: no-repeat;
      background-position: right;
      background-size: 80px;
    }

    .card-2{
      background-image: url(https://ionicframework.com/img/getting-started/components-card.png);
      background-repeat: no-repeat;
      background-position: right;
      background-size: 80px;
    }

    .card-3{
      background-image: url(https://ionicframework.com/img/getting-started/theming-card.png);
      background-repeat: no-repeat;
      background-position: right;
      background-size: 80px;
    }

    .cardku{
      margin-top: 40px;
      border-radius: 4px;
      background: #fff;
      z-index: 999;
      box-shadow: 0 6px 10px rgba(0,0,0,.08), 0 0 6px rgba(0,0,0,.05);
      transition: .3s transform cubic-bezier(.155,1.105,.295,1.12),.3s box-shadow,.3s -webkit-transform cubic-bezier(.155,1.105,.295,1.12);
      padding: 14px 80px 18px 36px;
      cursor: pointer;
      margin-bottom: 50px;
      height:400px;
    }

    .cardku:hover{
      transform: scale(1.05);
      box-shadow: 0 10px 20px rgba(0,0,0,.12), 0 4px 8px rgba(0,0,0,.06);
    }

    .card-kepala{
      background-image: url(https://diskominfotik.lampungprov.go.id/uploads//photos/1/DARI%20WA/WA%20dinas/WhatsApp%20Image%202021-05-27%20at%2014.44.22.jpeg);
      background-repeat: no-repeat;
      background-position: center;
      border-radius: 20px;
      background-size: 300px;
    }

    .cardquote{
      margin-top: 100px;
      border-radius: 10px;
      background: #fff;
      z-index: 999;
      box-shadow: 0 6px 10px rgba(0,0,0,.08), 0 0 6px rgba(0,0,0,.05);
      transition: .3s transform cubic-bezier(.155,1.105,.295,1.12),.3s box-shadow,.3s -webkit-transform cubic-bezier(.155,1.105,.295,1.12);
      padding: 14px 80px 18px 36px;
      cursor: pointer;
      margin-bottom: 50px;
      height:250px;
    }

    .card-berita{
      border-radius: 10px;
      background: #fff;
      z-index: 999;
      box-shadow: 0 6px 10px rgba(0,0,0,.08), 0 0 6px rgba(0,0,0,.05);
      transition: .3s transform cubic-bezier(.155,1.105,.295,1.12),.3s box-shadow,.3s -webkit-transform cubic-bezier(.155,1.105,.295,1.12);
      padding: 14px 80px 18px 36px;
      cursor: pointer;
      margin-bottom: 50px;
    }

    .card-quote{
      background-image: url(https://ionicframework.com/img/getting-started/ionic-native-card.png);
      border-radius: 20px;
      background-repeat: no-repeat;
      background-position: right;
      background-size: 300px;
    }

    .containerku{
      background-image: url('https://img.freepik.com/free-vector/modern-blue-abstract-stylish-wave-background-design_1017-25929.jpg?size=626&ext=jpg');
      background-repeat: no-repeat;
      background-position: left;
      background-size: 600px;  
    }

    .wrapper {
        margin-top: 30px
    }

    .wrapper-artikel {
        padding-top: 50px; 
        margin-top: 100px;
    }

    .card-product {
        border-radius: 10px;
        border: 1px solid #e2dede;
        cursor: pointer;
        margin: 5px;
    }

    .card-product img{
         width: 100%;
        height: 15vw;
        object-fit: cover;
    }

        .weight {
            margin-top: -65px;
            transition: all 0.5s
        }

        .weight small {
            color: #e2dede
        }

        .buttons {
            padding: 10px;
            background-color: #d6d4d44f;
            border-radius: 4px;
            position: relative;
            margin-top: 7px;
            opacity: 0;
            transition: all 0.8s
        }

        .dot {
            height: 14px;
            width: 14px;
            background-color: green;
            border-radius: 50%;
            position: absolute;
            left: 27%;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 8px;
            color: #fff;
            opacity: 0
        }

        .cart-button {
            height: 48px
        }

        .cart-button:focus {
            box-shadow: none
        }

        .cart {
            position: relative;
            height: 48px !important;
            width: 50px;
            margin-right: 8px;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #fff;
            padding: 11px;
            border-radius: 5px;
            font-size: 14px;
            transition: 1s ease-in-out;
            overflow: hidden
        }

        .cart-button.clicked span.dot {
            animation: item 0.3s ease-in forwards
        }

        @keyframes item {
            0% {
                opacity: 1;
                top: 30%;
                left: 30%
            }

            25% {
                opacity: 1;
                left: 26%;
                top: 0%
            }

            50% {
                opacity: 1;
                left: 23%;
                top: -22%
            }

            75% {
                opacity: 1;
                left: 19%;
                top: -18%
            }

            100% {
                opacity: 1;
                left: 14%;
                top: 28%
            }
        }

        .card-product:hover .buttons {
            opacity: 1
        }

        .card-product:hover .weight {
            margin-top: 10px
        }

        .card-product:hover {
            transform: scale(1.04);
            z-index: 2;
            overflow: hidden
        }

         .garis{
            border-left: 10px green solid;
            height: 30px;
            width: auto;
            padding: 5px;
            }
        .isi{
            margin-top: 5px;
            position: flex;
            justify-content: justify;
            align-items: justify;
            text-align: justify;
        }
        .berita{
            width: 100%;
            object-fit: cover;
            height: auto;
            border-radius: 20px;
            margin-left: 30px;
        }

    @media(max-width: 990px){
      .card{
        margin: 20px;
      }
    }

    @media only screen and (max-width: 600px) , screen and (max-height: 768px) {
      .py-5{
        margin-bottom: 100px;
        margin-top: -250px;
      }
      .card{
        height: 170px;
      }
      .containerku{
        margin-top: -100px;
        background-size: 800px;  
        height: 400px;
      }
      .apalah{
        margin-bottom: 100px;
      }
      .cardquote{
        margin-top: -10px;
        height:700px;
      }
      .corousel-text{
        top: 400px;
      }
      .py-4{
        margin-top: 800px;
      }
        .card-product img{
            width: 100%;
            height: 50vw;
            object-fit: cover;
        }

        .isi{
            margin-top: 5px;
            position: flex;
            font-size: 15px;
        }
        .garis{
            border-left: 5px green solid;
            height: 20px;
            width: auto;
            padding: 5px;
            font-size: 10px;
        }
        .berita{
            width: 0%;
            object-fit: fill;
            height: auto;
            border-radius: 10px;
        }
        h1{
            font-size: 18px;
        }
        h5{
            margin-top: -5px;
            font-size: 18px;   
        }
        footer{
            margin-bottom: 40px;
        }
    } 
  </style>
</head>
<body >
  <nav class="navbar navbarku navbar-expand-lg d-none d-lg-block">
    <div class="container-fluid">
      <a class="navbar-brand d-lg-none" href="#"><img src="https://codingyaar.com/wp-content/uploads/logo.png"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item">
          <b><a class="nav-link" href="#">Beranda</a></b>
        </li>
        <li class="nav-item">
          <b><a class="nav-link" href="#">Data UMKM</a></b>
        </li>
        <a class="d-none d-lg-block" href="#"><img class="navbar-logo-real" src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/bc/Coat_of_arms_of_East_Kalimantan.svg/1200px-Coat_of_arms_of_East_Kalimantan.svg.png"></a>
        <li class="nav-item">
          <b><a class="nav-link" href="#">Produk Kami</a></b>
        </li>
        <li class="nav-item">
          <b><a class="nav-link" href="#">Kontak Kami</a></b>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- Bottom Navbar -->
<nav class="navbar navbar-bawah navbar-light bg-light border-top navbar-expand d-md-none d-lg-none d-xl-none fixed-bottom mx-auto">
  <ul class="navbar-nav nav-justified w-100 h-50">
    <li class="nav-item">
      <a href="#" class="nav-link">
        <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
          <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
        </svg>
      </a>
    </li>
    <li class="nav-item">
      <a href="#" class="nav-link">
        <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
          <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
        </svg>
      </a>
    </li>
    <li class="nav-item">
      <a href="#" class="nav-link">
        <img class="navbar-logo-centered" src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/bc/Coat_of_arms_of_East_Kalimantan.svg/1200px-Coat_of_arms_of_East_Kalimantan.svg.png">
      </a>
    </li>
    <li class="nav-item">
      <a href="#" class="nav-link">
        <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" fill="currentColor" class="bi bi-bag" viewBox="0 0 16 16">
          <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z"/>
        </svg>
      </a>
    </li>
    <li class="nav-item">
      <a href="#" class="nav-link">
        <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
          <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
          <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
        </svg>
      </a>
    </li>
  </ul>
</nav>
<!-- Content -->
<header>
  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active" style="background-image: url('https://source.unsplash.com/LAaSoL0LrYs/1920x1080')">
        <div class="carousel-caption corousel-text">
          <h5>First slide label</h5>
          <p>Some representative placeholder content for the first slide.</p>
        </div>
      </div>
      <div class="carousel-item" style="background-image: url('https://source.unsplash.com/bF2vsubyHcQ/1920x1080')">
        <div class="carousel-caption corousel-text">
          <h5 style="justify-content: center; align-items: center; display: flex;">Second slide label</h5>
          <p>Some representative placeholder content for the second slide.</p>
        </div>
      </div>
      <div class="carousel-item" style="background-image: url('https://source.unsplash.com/szFUQoyvrxM/1920x1080')">
        <div class="carousel-caption corousel-text">
          <h5>Third slide label</h5>
          <p>Some representative placeholder content for the third slide.</p>
        </div>
      </div>
    </div>
  </div>
</header>

<section class="py-5">
  <div class="container mt-5">
    <div class="row">
      <div class="col-md-4">
        <div class="card card-1">
          <h3><b>Kabupaten / Kota</b></h3>
          <p>Kaltim Memiliki Beberapa Kabupaten / Kota dengan Jumlah <strong><bold> 10 </bold></strong> </p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card card-2">
          <h3><b>UMKM</b></h3>
          <p>Layanan Kami Menanaungi Seluruh UMKM Yang terdaftar di daerah Kaltim</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card card-3">
          <h3><b>Produk</b></h3>
          <p>Produk yang ditampilkan telah di seleksi dengan baik sebelum di Publish Ke Masyarakat</p>
        </div>
      </div>
    </div>
  </div>
</section>

  <div class="containerku mb-1">
    <div class="container apalah">
      <div class="row">
      <div class="col-md-4">
        <div class="cardku card-kepala">
        </div>
      </div>

      <div class="col-md-8">
        <div class="cardquote card-quote">
          <h3 class="mt-3"><b>Sambutan Kepala Dinas</b></h3>
          <blockquote>Membangun UMKM Kaltim Menjadi Terdepan dan Dapat Di Kenal Oleh Indonesai Khusunya Masyarakat Kaltim Sendiri. Agar Lebih Mengenal Produk Produk Lokal Yang dimana Dalam Kualitas Kita Bisa Menjamin Tidak Kalah dengan Daerah Luar Pulau , Seperti Jawa Misalnya.</blockquote>
        </div>
      </div>
    </div>
    </div>
  </div>

<section class="py-4">
  <div class="wrapper">
    <div class="container">
        <div class="row g-0">
            <div class="col">
                <h1 class="text-left"><b>Produk UMKM Kaltim</b></h1>        
            </div>
            <div class="col text-end">
                <a href="#" class="btn text-end" style="color: #c58529"><h5><strong>Selengkapnya ></strong></h5></a>   
            </div>
        </div>
        
        <div class="row g-1">
            <div class="col-md-3">
                <div class="card-product p-3">
                    <div class="text-center"> <img src="https://i.imgur.com/w2rCsEw.jpg" width="200"> </div>
                    <div class="product-details"> <span class="font-weight-bold d-block">Rp. 7.000</span> <span>Lobak Merah</span>
                        <div class="buttons d-flex flex-row">
                            <div class="cart"><i class="fa fa-shopping-cart"></i></div> <button class="btn btn-success cart-button btn-block"><span class="dot">1</span>Masukan Keranjang </button>
                        </div>
                        <div class="weight"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card-product p-3">
                    <div class="text-center"> <img src="https://i.imgur.com/ZRUetRF.jpg" width="200"> </div>
                    <div class="product-details"> <span class="font-weight-bold d-block">Rp. 2.500</span> <span>Jagung</span>
                        <div class="buttons d-flex flex-row">
                            <div class="cart"><i class="fa fa-shopping-cart"></i></div> <button class="btn btn-success cart-button btn-block"><span class="dot">1</span>Masukan Keranjang </button>
                        </div>
                        <div class="weight"> </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card-product p-3">
                    <div class="text-center"> <img src="https://setc.id/res/images/umkm/1_20201117_212735_0000.jpg" width="200"> </div>
                    <div class="product-details"> <span class="font-weight-bold d-block">Rp. 30.000</span> <span>Brownis Kukus</span>
                        <div class="buttons d-flex flex-row">
                            <div class="cart"><i class="fa fa-shopping-cart"></i></div> <button class="btn btn-success cart-button btn-block"><span class="dot">1</span>Masukan Keranjang</button>
                        </div>
                        <div class="weight"> </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card-product p-3">
                    <div class="text-center"> <img src="https://setc.id/res/images/umkm/foto%206.jpg" width="200"> </div>
                    <div class="product-details"> <span class="font-weight-bold d-block">Rp. 75.000 </span> <span>Tas Kain Batik</span>
                        <div class="buttons d-flex flex-row">
                            <div class="cart"><i class="fa fa-shopping-cart"></i></div> <button class="btn btn-success cart-button btn-block"><span class="dot">1</span>Masukan Keranjang</button>
                        </div>
                        <div class="weight"> </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card-product p-3">
                    <div class="text-center"> <img src="https://i.imgur.com/w2rCsEw.jpg" width="200"> </div>
                    <div class="product-details"> <span class="font-weight-bold d-block">Rp. 7.000</span> <span>Lobak Merah</span>
                        <div class="buttons d-flex flex-row">
                            <div class="cart"><i class="fa fa-shopping-cart"></i></div> <button class="btn btn-success cart-button btn-block"><span class="dot">1</span>Masukan Keranjang </button>
                        </div>
                        <div class="weight"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card-product p-3">
                    <div class="text-center"> <img src="https://i.imgur.com/ZRUetRF.jpg" width="200"> </div>
                    <div class="product-details"> <span class="font-weight-bold d-block">Rp. 2.500</span> <span>Jagung</span>
                        <div class="buttons d-flex flex-row">
                            <div class="cart"><i class="fa fa-shopping-cart"></i></div> <button class="btn btn-success cart-button btn-block"><span class="dot">1</span>Masukan Keranjang </button>
                        </div>
                        <div class="weight"> </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card-product p-3">
                    <div class="text-center"> <img src="https://setc.id/res/images/umkm/1_20201117_212735_0000.jpg" width="200"> </div>
                    <div class="product-details"> <span class="font-weight-bold d-block">Rp. 30.000</span> <span>Brownis Kukus</span>
                        <div class="buttons d-flex flex-row">
                            <div class="cart"><i class="fa fa-shopping-cart"></i></div> <button class="btn btn-success cart-button btn-block"><span class="dot">1</span>Masukan Keranjang</button>
                        </div>
                        <div class="weight"> </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card-product p-3">
                    <div class="text-center"> <img src="https://setc.id/res/images/umkm/foto%206.jpg" width="200"> </div>
                    <div class="product-details"> <span class="font-weight-bold d-block">Rp. 75.000 </span> <span>Tas Kain Batik</span>
                        <div class="buttons d-flex flex-row">
                            <div class="cart"><i class="fa fa-shopping-cart"></i></div> <button class="btn btn-success cart-button btn-block"><span class="dot">1</span>Masukan Keranjang</button>
                        </div>
                        <div class="weight"> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="wrapper-artikel">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="text-left"><b>Artikel Terkait</b></h1>        
            </div>
            <div class="col text-end">
                <a href="#" class="btn text-end" style="color: #c58529"><h5><strong>Selengkapnya > </strong></h5></a>   
            </div>
        </div>
        <div class="row g-1">
            <div class="col-md-12">
                <div class="card-berita">
                    @for($i=1; $i<=3; $i++)
                    <div class="row mt-5">
                        <div class="col-md-8">
                            <h4 class="mt-3 isi"><b>Siaran Pers : Menparekraf Dorong Pengembangan Wisata Edukasi Kebencanaan di Desa Wisata Nusa Aceh Besar</b></h4>
                            <div class="garis"> 2021-10-20 Posted by Kemenparekraf/Baparekraf RI</div>
                            <div class="isi">
                                <p class="isi">SIARAN PERS KEMENTERIAN PARIWISATA DAN EKONOMI KREATIF/BADAN PARIWISATA DAN EKONOMI KREATIF Menparekraf Dorong Pengembangan Wisata Edukasi Kebencanaan di Desa Wisata Nusa Aceh Besar Aceh Besar, 20 Oktober 2021 - Selain wisata alam dan budaya, Menteri Pariwisata dan Ekonomi Kreatif/Kepala Badan Pa...</p>
                            </div>
                        </div>
                        <div class="col-md-4 ml-auto">
                            <img src="https://s3-kemenparekraf.s3.ap-southeast-1.amazonaws.com/COVER_b4930059d1.jpeg" class="berita" src="">
                        </div>
                    </div>
                    @endfor
                </div>
            </div>
        </div>
        </div>
    </div>

</section>

<footer class="bg-dark text-center text-white">
    <div class="container">
     <!--  <div class="row">
        <div class="col-md-9">
          <div class="row">
            <div class="col-md-6 mb-5 mb-lg-0 col-lg-3">
              <h2 class="footer-heading mb-4">Quick Links</h2>
              <ul class="list-unstyled">
                <li><a href="#">About Us</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Testimonials</a></li>
                <li><a href="#">Contact Us</a></li>
              </ul>
            </div>
            <div class="col-md-6 mb-5 mb-lg-0 col-lg-3">
              <h2 class="footer-heading mb-4">Products</h2>
              <ul class="list-unstyled">
                <li><a href="#">About Us</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Testimonials</a></li>
                <li><a href="#">Contact Us</a></li>
              </ul>
            </div>
            <div class="col-md-6 mb-5 mb-lg-0 col-lg-3">
              <h2 class="footer-heading mb-4">Features</h2>
              <ul class="list-unstyled">
                <li><a href="#">About Us</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Testimonials</a></li>
                <li><a href="#">Contact Us</a></li>
              </ul>
            </div>
            <div class="col-md-6 mb-5 mb-lg-0 col-lg-3">
              <h2 class="footer-heading mb-4">Follow Us</h2>
              <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
              <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
              <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
              <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <h2 class="footer-heading mb-4">Subscribe Newsletter</h2>
          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
          <form action="#" method="post">
            <div class="input-group mb-3">
              <input type="text" class="form-control bg-transparent" placeholder="Enter Email" aria-label="Enter Email" aria-describedby="button-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary text-white" type="button" id="button-addon2">Send</button>
              </div>
            </div>
          </form>
        </div>
      </div> -->
      <div class="row pt-5 mt-5">
        <style>
           .center {
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 10%;
            margin-bottom: 10px;
          }
        </style>

        <img src="http://2.bp.blogspot.com/-XFQd83G5McA/Uxu9V3SG9PI/AAAAAAAAMlU/Wn2xM9Q30uY/s1600/Logo+Provinsi+Kalimantan+Timur.png" width="80" class="center" >
        <div class="col-12 text-md-center text-left">
          <h2 class="chubby">UPTD. PSBTPH</h2>
          <hr/>
          <div class="row">
              <div class="col text-start">
                <p class="poppins">
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright&copy;<script>document.write(new Date().getFullYear());</script> Support By Samantha
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </p>
              </div>
              <div class="col text-end">
                <style>
                    .social-menu {
                            display: flex;
                            list-style-type: none;
                            align-items: right;
                            justify-content: right;
                        }

                        .social-menu i {
                            width: 40px;
                            height: 40px;
                            border-radius: 50%;
                            font-size: 25px;
                            margin-right: 10px;
                            transition: all 0.2s ease-in-out;
                            display: flex;
                            justify-content: right;
                        }

                        .social-menu i:before {
                            display: flex;
                            flex-flow: row nowrap;
                            align-items: right;
                            font-weight: 400;
                        }

                        .social-menu a {
                            text-decoration: none;
                        }
                </style>
                <ul class="social-menu">
                    <li><a href="https://facebook.com/"><i class="fab fa-facebook" style="color:#8b9dc3;"></i></a></li>
                    <li><a href="https://twitter.com/"><i class="fab fa-twitter" style="color:#1DA1F2;"></i></a></li>
                    <li><a href="https://twitter.com/"><i class="fab fa-instagram" style="color: #dd2a7b;"></i></a></li>
                </ul>
              </div>
          </div>
        </div>
      </div>
    </div>
</footer>





<!-- Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>