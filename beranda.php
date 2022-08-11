<!DOCTYPE html>
<html lang="en-US">
  <!-- Basic -->

  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Site Metas -->
    <title>TANIKOE</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/logotani.png" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/logotani.png" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css" />
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css" />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css" />
  <style>
#owl-demo .item{
  margin: 3px;
}
#owl-demo .item img{
  display: block;
  width: 100%;
  height: auto;
}
.tombol{
  background-color:#b0b435;
  padding:10px;
  border-color:white;
  color:white;
  border-radius:5px;
  transition: 0.5s;
  width:150px;
}
.tombol:hover{
  background-color:white;
  color:#b0b435;
}

  </style>
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <!-- Start Main Top -->
    <header class="main-header">
      <!-- Start Navigation -->
      <nav
        class="navbar navbar-expand-lg navbar-light bg-light navbar-default bootsnav"
      >
        <div class="container">
          <!-- Start Header Navigation -->
          <div class="navbar-header">
            <button
              class="navbar-toggler"
              type="button"
              data-toggle="collapse"
              data-target="#navbar-menu"
              aria-controls="navbars-rs-food"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="index.html"
              ><img src="images/logotani.png" class="logo" alt=""
            /></a>
          </div>
          <!-- End Header Navigation -->

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="navbar-menu">
            <ul
              class="nav navbar-nav ml-auto"
              data-in="fadeInDown"
              data-out="fadeOutUp"
            >
            <li class="nav-item active">
                <a class="nav-link" href="beranda.php">Beranda</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.php">Tentang Kami</a>
              </li>
              <li class="nav-item">
              <a class="nav-link" href="areamitra.php">Area Mitra</a>
              </li>
              <li class="nav-item ">
                <a class="nav-link" href="tanikoetv.php">Tanikoe-TV</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact-us.php">Kontak Kami</a>
              </li>
            </ul>
          </div>
          <!-- /.navbar-collapse -->

          <!-- Start Atribute Navigation -->

          <!-- End Atribute Navigation -->
        </div>
        <!-- Start Side Menu -->

        <!-- End Side Menu -->
      </nav>
      <!-- End Navigation -->
    </header>
    <!-- End Main Top -->

    <!-- Start Top Search -->

    <!-- Start Slider -->
    <div id="slides-shop" class="cover-slides">
      <ul class="slides-container">
        <li class="text-center">
          <img src="images/banner1.png" alt="" />
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <h1 class="m-b-20">
                  <strong
                    >Gudangnya<br />
                    Produk-Produk Segar
                  </strong>
                </h1>
              </div>
            </div>
          </div>
        </li>
        <li class="text-center">
          <img src="images/banner2.png" alt="" />
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <h1 class="m-b-20">
                  <strong
                    >Gudangnya<br />
                    Produk-Produk Segar
                  </strong>
                </h1>
                <p class="m-b-40"></p>
              </div>
            </div>
          </div>
        </li>
        <li class="text-center">
          <img src="images/banner4.png" alt="" />
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <h1 class="m-b-20">
                  <strong
                    >Gudangnya<br />
                    Produk-Produk Segar
                  </strong>
                </h1>
              </div>
            </div>
          </div>
        </li>
      </ul>
      <div class="slides-navigation">
        <a href="#" class="next"
          ><i class="fa fa-angle-right" aria-hidden="true"></i
        ></a>
        <a href="#" class="prev"
          ><i class="fa fa-angle-left" aria-hidden="true"></i
        ></a>
      </div>
    </div>
    <!-- End Slider -->

    <!-- Start Categories  -->
    
    <!-- End Categories -->
     <!-- Start Products  -->
    <div class="products-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-all text-center">
                        <h1>Produk Terbaik Kami</h1>
                        
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="special-menu text-center">
                        <div class="button-group filter-button-group">
                            <button class="active" data-filter="*">Semua</button>
                            <button data-filter=".sayuran">Sayuran</button>
                            <button data-filter=".buah">Buah-Buahan</button>
                            
                             <button data-filter=".rempah">Rempah-Rempahan</button>
                              <button data-filter=".perikanan">Perikanan</button>
                              <button data-filter=".peternakan">Peternakan</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row special-list">
                <div class="col-lg-3 col-md-6 special-grid sayuran">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <div class="type-lb">
                                <p class="sale">Sale</p>
                            </div>
                            <img src="images/produkkentang.png" class="img-fluid" alt="Image">
                            
                        </div>
                        <center><h1><strong>Kentang Bastagi</strong></h1>
                      <button class="tombol"><strong>Pesan Sekarang</strong></button>
                      </center>
                    </div>
                </div>

               
                <div class="col-lg-3 col-md-6 special-grid sayuran">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <div class="type-lb">
                                <p class="sale">Sale</p>
                            </div>
                            <img src="images/produkterong.png" class="img-fluid" alt="Image">
                            
                        </div>
                        <center><h1><strong>Terong</strong></h1>
                      <button class="tombol"><strong>Pesan Sekarang</strong></button>
                      </center>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 special-grid sayuran">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <div class="type-lb">
                                <p class="sale">Sale</p>
                            </div>
                            <img src="images/produksawi.png" class="img-fluid" alt="Image">
                            
                        </div>
                        <center><h1><strong>Sawi</strong></h1>
                      <button class="tombol"><strong>Pesan Sekarang</strong></button>
                      </center>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 special-grid sayuran">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <div class="type-lb">
                                <p class="sale">Sale</p>
                            </div>
                            <img src="images/produkcabai.png" class="img-fluid" alt="Image">
                            
                        </div>
                        <center><h1><strong>Cabai Keriting</strong></h1>
                      <button class="tombol"><strong>Pesan Sekarang</strong></button>
                      </center>
                    </div>
                </div>

                 <div class="col-lg-3 col-md-6 special-grid sayuran">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <div class="type-lb">
                                <p class="sale">Sale</p>
                            </div>
                            <img src="images/produkcabai1.png" class="img-fluid" alt="Image">                            
                        </div>
                        <center><h1><strong>Cabai Rawit Merah</strong></h1>
                      <button class="tombol"><strong>Pesan Sekarang</strong></button>
                      </center>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 special-grid sayuran">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <div class="type-lb">
                                 <p class="sale">Sale</p>
                            </div>
                            <img src="images/produkselada.png" class="img-fluid" alt="Image">                           
                        </div>
                        <center><h1><strong>Selada Keriting</strong></h1>
                      <button class="tombol"><strong>Pesan Sekarang</strong></button>
                      </center>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 special-grid sayuran">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <div class="type-lb">
                                 <p class="sale">Sale</p>
                            </div>
                            <img src="images/produkjamur.png" class="img-fluid" alt="Image">
                        </div>
                        <center><h1><strong>Jamur</strong></h1>
                      <button class="tombol"><strong>Pesan Sekarang</strong></button>
                      </center>
                    </div>
                </div>
                 <div class="col-lg-3 col-md-6 special-grid buah">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <div class="type-lb">
                                 <p class="sale">Sale</p>
                            </div>
                            <img src="images/apelproduk.png" class="img-fluid" alt="Image">
                        </div>
                        <center><h1><strong>Apel</strong></h1>
                      <button class="tombol"><strong>Pesan Sekarang</strong></button>
                      </center>
                    </div>
                </div>
                 <div class="col-lg-3 col-md-6 special-grid buah">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <div class="type-lb">
                                 <p class="sale">Sale</p>
                            </div>
                            <img src="images/produknaga.png" class="img-fluid" alt="Image">
                        </div>
                        <center><h1><strong>Buah Naga</strong></h1>
                      <button class="tombol"><strong>Pesan Sekarang</strong></button>
                      </center>
                    </div>
                </div>
                 <div class="col-lg-3 col-md-6 special-grid rempah">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <div class="type-lb">
                                 <p class="sale">Sale</p>
                            </div>
                            <img src="images/produkkunyit.png" class="img-fluid" alt="Image">
                        </div>
                        <center><h1><strong>Kunyit</strong></h1>
                      <button class="tombol"><strong>Pesan Sekarang</strong></button>
                      </center>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 special-grid rempah">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <div class="type-lb">
                                 <p class="sale">Sale</p>
                            </div>
                            <img src="images/produktemulawak.png" class="img-fluid" alt="Image">
                        </div>
                        <center><h1><strong>Temulawak</strong></h1>
                      <button class="tombol"><strong>Pesan Sekarang</strong></button>
                      </center>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6 special-grid perikanan">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <div class="type-lb">
                                 <p class="sale">Sale</p>
                            </div>
                            <img src="images/ikanproduk.png" class="img-fluid" alt="Image">
                        </div>
                        <center><h1><strong>Ikan</strong></h1>
                      <button class="tombol"><strong>Pesan Sekarang</strong></button>
                      </center>
                    </div>
                </div>
                 <div class="col-lg-3 col-md-6 special-grid perikanan">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <div class="type-lb">
                                 <p class="sale">Sale</p>
                            </div>
                            <img src="images/produkkepiting.png" class="img-fluid" alt="Image">
                        </div>
                        <center><h1><strong>Kepiting</strong></h1>
                      <button class="tombol"><strong>Pesan Sekarang</strong></button>
                      </center>

                    </div>
                </div>
                 <div class="col-lg-3 col-md-6 special-grid peternakan">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <div class="type-lb">
                                 <p class="sale">Sale</p>
                            </div>
                            <img src="images/ayamproduk.png" class="img-fluid" alt="Image">
                        </div>
                        <center><h1><strong>Ayam Broiler Potong</strong></h1>
                      <button class="tombol"><strong>Pesan Sekarang</strong></button>
                      </center>
                    </div>
                </div>

  

  
            </div>
        </div>
    </div>
    <!-- End Products  -->
   

    <!-- Start Products  -->
    <div class="products-box">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="title-all text-center">
              <h1>Mitra Tanikoe</h1>
            </div>
          </div>
        </div>
      

        <div class="row special-list">
                <div class="col-lg-2 col-md-6 special-grid sayuran peternakan perikanan rempah buah sayuran">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <div class="type-lb">
                            
                            </div>
                            <img src="images/logomed1.png" class="img-fluid" alt="Image">
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 special-grid sayuran peternakan perikanan rempah buah sayuran">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <div class="type-lb">
                            
                            </div>
                            <img src="images/logomed2.png" class="img-fluid" alt="Image">
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 special-grid sayuran peternakan perikanan rempah buah sayuran">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <div class="type-lb">
                            
                            </div>
                            <img src="images/logomed3.png" class="img-fluid" alt="Image">
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 special-grid sayuran peternakan perikanan rempah buah sayuran">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <div class="type-lb">
                            
                            </div>
                            <img src="images/logomed4.png" class="img-fluid" alt="Image">
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 special-grid sayuran peternakan perikanan rempah buah sayuran">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <div class="type-lb">
                            
                            </div>
                            <img src="images/logomed5.png" class="img-fluid" alt="Image">
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 special-grid sayuran peternakan perikanan rempah buah sayuran">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <div class="type-lb">
                            
                            </div>
                            <img src="images/logomed6.png" class="img-fluid" alt="Image">
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 special-grid sayuran peternakan perikanan rempah buah sayuran">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <div class="type-lb">
                            
                            </div>
                            <img src="images/logomed7.png" class="img-fluid" alt="Image">
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 special-grid sayuran peternakan perikanan rempah buah sayuran">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <div class="type-lb">
                            
                            </div>
                            <img src="images/logomed8.png" class="img-fluid" alt="Image">
                            
                        </div>
                    </div>
                </div>
                <center>
                <div class="col-lg-2 col-md-6 special-grid sayuran peternakan perikanan rempah buah sayuran">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <div class="type-lb">
                            
                            </div>
                            <img src="images/logomed9.png" class="img-fluid" alt="Image">
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 special-grid sayuran peternakan perikanan rempah buah sayuran">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <div class="type-lb">
                            
                            </div>
                            <img src="images/logomed10.png" class="img-fluid" alt="Image">
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 special-grid sayuran peternakan perikanan rempah buah sayuran">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <div class="type-lb">
                            
                            </div>
                            <img src="images/logomed11.png" class="img-fluid" alt="Image">
                            
                        </div>
                    </div>
                </div>
</center>
      </div>
    </div>
    <!-- End Products  -->
    <div id="google_translate_element"></div>
    <!-- Start Footer  -->
    <footer>
      <div class="footer-main">
        <div class="container">
          <hr />
          <div class="row">
            <div class="col-lg-4 col-md-12 col-sm-12">
              <div class="footer-widget">
                <h4>About Tanikoe</h4>
                <p>
                  Perusahaan, Kami Fokus Menyediakan Produk – Produk Segar
                  (Sayuran, Buah-Buahan, Hasil Perkebunan,Perikanan,Pertenakan)
                  Untuk Memenuhi Kebutuhan Mitra Perusahaan Atau Pedagang
                  (Buyer, Akan Produk-Produk Segar Tersebut).
                </p>
                <p>
                  Kami Juga Membantu Dan Memfasiltasi Mitra Petani Dan Petambak
                  Serta Peternak Dalam Akses Pasar.
                </p>
              </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12">
              <div class="footer-link">
                <h4>Accessing Market & Trading</h4>
                <ul>
                  <li><a href="#"> - Produk Pertanian.</a></li>
                  <li><a href="#"> - Produk Pekebunan.</a></li>
                  <li><a href="#"> - Produk Peikanan Tambak Dan Laut.</a></li>
                  <li><a href="#"> - Produk Perternakan - On Progress.</a></li>
                  <li>
                    <a href="#">
                      - Fasilitas Investasi Sektor Pertanian Tanaman Horti Dan
                      Buah-Buahan, Perikanan Tambak Dan Perternakan - On
                      Planning.</a
                    >
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12">
              <div class="footer-link-contact">
                <h4>Contact Us</h4>
                <ul>
                  <li>
                    <p>
                      <i class="fas fa-map-marker-alt"></i>Plaza MR21 - Graha
                      Jasindo, Fl. 11, Jl. Menteng Raya, Jakarta
                    </p>
                  </li>
                  <li>
                    <p>
                      <i class="fas fa-phone-square"></i>Phone:
                      <a href="tel:+1-888705770">+6285156765648</a>
                    </p>
                  </li>
                  <li>
                    <p>
                      <i class="fas fa-envelope"></i>Email:
                      <a href="mailto:contactinfo@gmail.com"
                        >contactofficial@tanikoe.com</a
                      >
                    </p>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- End Footer  -->

    <!-- Start copyright  -->
    <div class="footer-copyright">
      <p class="footer-company">
        All Rights Reserved. &copy; 2022 <a href="#">Tanikoe</a>
      </p>
    </div>
    <!-- End copyright  -->

    <a href="#" id="back-to-top" title="Back to top" style="display: none"
      >&uarr;</a
    >

    <!-- ALL JS FILES -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.VERTICAL}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/jquery.superslides.min.js"></script>
    <script src="js/bootstrap-select.js"></script>
    <script src="js/inewsticker.js"></script>
    <script src="js/bootsnav.js."></script>
    <script src="js/images-loded.min.js"></script>
    <script src="js/isotope.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/baguetteBox.min.js"></script>
    <script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/custom.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script>
$(document).ready(function() {
 
 $("#owl-demo").owlCarousel({

     autoPlay: 3000, //Set AutoPlay to 3 seconds

     items : 4,
     itemsDesktop : [1199,3],
     itemsDesktopSmall : [979,3]

 });

});
</script>
  </body>
</html>
