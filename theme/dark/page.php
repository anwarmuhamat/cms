<?php echo $header; ?>
<style>
  header#navigation {
    background: #530150 !important;
    color: #fff !important;
  }
  header#navigation .container {
    width: 100% !important;
    /* padding: 0px !important; */
    margin: 0px;
    max-width: 100%;
}

a.left.brand-logo.menu-smooth-scroll img {
    width: 85px;
    height: auto;
    margin-top: 0px;
}
.brand {
    position: absolute;
    top: 19px;
    left: 92px;
    font-size: 26px;
    font-weight: 300;
}
.ambas {
    position: absolute;
    top: 46px;
    font-size: 25px;
    font-weight: 600;
    left: 91px;
}
img.profilemini {
    width: 35px;
    border-radius: 20px;
    margin-top: -5px;
}
.namamodel {
    font-size: 15px;
    font-weight: 600;
    color: #fff;
    padding: 10px;
    float: right;
    margin-top: -9px;
}
.side-nav li a {
    color: #ffffff;
    padding: 25px 0;
    border-bottom: 6px solid transparent;
    text-transform: uppercase;
    background-color: transparent;
    line-height: 24px;
    -webkit-transition: all 0.3s ease-out;
    transition: all 0.3s ease-out;
}
.fotoprofile img {
    border-radius: 50%;
}
.fotoprofile {
    width: 403px;
    float: right;
}
.brand-bg, .sweet-alert button {
    background-color: #00bcd4 !important;
    background: url(<?php echo BASE_URL; ?>/images/<?php echo $settings['siteProfile']; ?>);
    background-size: 100%;
}
.datadiri {
    margin-top: 65px;
}
.namanya {
    font-size: 50px;
    font-weight: 300;
}
.tebel{font-weight: 600;}
.kampusnya {
    font-size: 32px;
    text-decoration-line: overline;
}
.datadiri {
    width: 63%;
    margin-left: 20px;
}
.datalengkap p {
    font-size: 16px;
    text-align: left;
    line-height: 19px;
}
.datalengkap h1 {
    font-size: 20px;
    font-weight: 600;
    margin-top: 20px;
}
.jumlahpoin {
    background: #530150;
    text-align: center;
    width: 300px;
    height: 300px;
    padding: 30px;
    border-radius: 50%;
    position: absolute;
    top: -278px;
    left: 405px;
}
h2.judul {
    font-size: 35px;
    margin-top: 28px;
}
h2.poinnya {
    font-size: 109px;
    margin-top: -20px;
}
.tukarpoin {
    width: 80%;
    margin-left: 10%;
    background: #fff;
    padding: 10px 20px 10px 20px;
    color: #530150;
    font-size: 20px;
    font-weight: 600;
    border-radius: 30px;
}
.tukarpoin:hover {background: #9e5497;}
.jumlahpoin {
    background: #530150;
    text-align: center;
    width: 300px;
    height: 300px;
    padding: 30px;
    border-radius: 50%;
    position: absolute;
    top: -278px;
    left: 37%;
    /* right: auto; */
}
.rinciandata {
    color: #530150;
    text-align: center;
    margin-top: 70px;
}
.rinciandata {
    color: #530150;
    text-align: center;
    margin-top: 70px;
    font-weight: 600;
}
.rinciandata h1 {
    font-size: 40px;
}
p.text1 {
    font-weight: 300;
    font-size: 20px;
}
p.text2 {
    font-size: 59px;
    margin-top: 20px;
    margin-bottom: 20px;
}
span.atas {
    display: inline-block;
    vertical-align: text-bottom;
    font-size: 13px;
}
p.text4 {
    font-weight: 300;
    font-size: 20px;
}
footer#footer {
    background: #530150 !important;
}
p.judulfoot {
    font-size: 25px;
    padding: 10px;
    text-align: right;
    font-weight: 600;
    color: #fff;
}
p.judulfoot.kiri {
    text-align: left;
}
p.textkir {
    font-size: 15px;
    padding-left: 10px;
    line-height: 20px;
}
ul.left.social-icons li a i {
    font-size: 40px;
    color: #fff;
    margin-top: 20px;
    margin-right: -10px;
}
.infopont{display: none;}
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    max-height: 100%;
}

/* Modal Content */
.modal-content {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
}

/* The Close Button */
.close {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}
.modal-content {
    width: 40%;
    background: #530150;
}
.modal-content h2 {
    margin-top: 20px;
    margin-bottom: -10px;
    font-weight: 600;
}
.modal {
    display: none;
    position: fixed;
    z-index: 9999;
    padding-top: 100px;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgb(0,0,0);
    background-color: rgba(0, 0, 0, 0.8);
    max-height: 100%;
}
.kontenpoin {
    margin-top: 50px;
    background: #fff;
    width: 108%;
    margin-left: -4%;
    /* color: #fff; */
    /* height: 100%; */
    margin-bottom: -30px;
}
span.poinkanan {
    color: #000;
    text-align: right;
    float: right;
    padding-right: 20px;
}
span.poinkiri {
    color: #000;
    text-align: left;
    padding-left: 20px;
}
.rowpoin {
    height: 40px;
    padding-top: 10px;
    border-bottom: 1px solid #000;
}
.kontenpoin {
    margin-top: 28px;
    background: #fff;
    width: 108%;
    margin-left: -4%;
    /* color: #fff; */
    /* height: 100%; */
    margin-bottom: -31px;
}
.modal .modal-content {
    padding: 0 20px 30px;
    border-bottom: 1px solid #eeeeee;
    border-radius: 20px;
}
.kontenpoin {
    margin-top: 28px;
    background: #fff;
    width: 108%;
    margin-left: -4%;
    /* color: #fff; */
    /* height: 100%; */
    margin-bottom: -31px;
    border-bottom-left-radius: 20px;
    border-bottom-right-radius: 20px;
}
@media (max-width: 600px) {
  .fotoprofile {
    width: 100%;
    margin-top: 50px;
  }
  .datadiri {
    width: 100%;
    margin-left: 0px;
}
.kampusnya {
    font-size: 26px;
    text-decoration-line: overline;
}
.jumlahpoin {
    position: relative;
    top: -147px;
    /* width: 100%; */
}
.rinciandata {
    color: #530150;
    text-align: center;
    margin-top: -104px;
    font-weight: 600;
}
.brand-bg {
    background: #8a2784 !important;
}
i.mdi-navigation-menu {
    display: none;
}
.primary-nav .brand-logo {
    display: block;
    float: left;
    /* width: 131px; */
    position: absolute;
    left: -24px;
    width: 100px;
}
a.left.brand-logo.menu-smooth-scroll img {
    width: 60px;
    height: auto;
    margin-top: 13px;
}
.brand {
    position: absolute;
    top: 26px;
    left: 78px;
    font-size: 19px;
    font-weight: 300;
}
.ambas {
    position: absolute;
    top: 46px;
    font-size: 17px;
    font-weight: 600;
    left: 78px;
}
.infopont{display: block;}
.infopont {
    position: absolute;
    width: 50%;
    font-size: 10px;
    font-weight: 600;
    text-align: right;
    right: 0;
    top: 65px;
    background: #fff;
    padding: 2px;
    color: #530150;
    text-align: center;
    border-radius: 20px;
}
p.judulfoot {
    text-align: center !important;
}
div#myModal {
    max-width: 100%;
}
.modal-content {
    width: 100%;
    background: #530150;
}
.modal-content {
    padding: 12px !important;
}
.jumlahpoin {
    position: relative;
    top: -147px;
    left: 0;
    /* width: 100%; */
    margin-left: auto;
    margin-right: auto;
}
header.root-sec.white.nav.hide-menu {
    display: block;
        top: 0px;
}
}
@media (max-width: 400px) {
  .jumlahpoin {
    background: #530150;
    text-align: center;
    width: 270px;
    height: 270px;
    padding: 30px;
    border-radius: 50%;
    position: absolute;
    top: -278px;
    left: 37%;
    /* right: auto; */
}
h2.judul {
    font-size: 32px;
    margin-top: 26px;
}
h2.poinnya {
    font-size: 104px;
    margin-top: -20px;
}
.tukarpoin {
    width: 80%;
    margin-left: 10%;
    background: #fff;
    padding: 10px 20px 10px 20px;
    color: #530150;
    font-size: 18px;
    font-weight: 600;
    border-radius: 30px;
}
.ambas {
    position: absolute;
    top: 46px;
    font-size: 16px;
    font-weight: 600;
    left: 78px;
}
.brand {
    position: absolute;
    top: 26px;
    left: 78px;
    font-size: 16px;
    font-weight: 300;
}
.static-menu li a {
    line-height: 27px;
    padding: 12px 0;
    font-size: 25px;
    color: #727272;
    border-bottom: 6px solid transparent;
    background-color: transparent;
    margin-right: -14px;
}
.infopont {
    position: absolute;
    width: 50%;
    font-size: 10px;
    font-weight: 600;
    text-align: right;
    right: 0;
    top: 48px;
    background: #fff;
    padding: 2px;
    color: #530150;
    text-align: center;
    border-radius: 20px;
    margin-right: -10px;
}
.jumlahpoin {
    background: #530150;
    text-align: center;
    width: 270px;
    height: 270px;
    padding: 30px;
    border-radius: 50%;
    position: relative;
    top: -135px;
    left: 0;
    /* right: auto; */
}
.kampusnya {
    font-size: 24px;
    text-decoration-line: overline;
}
.namanya {
    font-size: 46px;
    font-weight: 300;
}
.ambas {
    position: absolute;
    top: 40px;
    font-size: 16px;
    font-weight: 600;
    left: 78px;
}
.brand {
    position: absolute;
    top: 20px;
    left: 78px;
    font-size: 16px;
    font-weight: 300;
}
a.left.brand-logo.menu-smooth-scroll img {
    width: 60px;
    height: auto;
    margin-top: 5px;
}
}
  </style>
</head>

<body>


  <!-- Preloader -->
    <div id="preloader">
      <div class="loader">
            <svg class="circle-loader" height="50" width="50">
              <circle class="path" cx="25" cy="25" r="20" fill="none" stroke-width="6" stroke-miterlimit="10" />
            </svg>
        </div>
    </div><!--preloader end-->

  <!-- The Modal -->
  <div id="myModal" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
      <span class="close" onclick="bantai();">&times;</span>
      <h2>CARA MENDAPATKAN POIN</h2>
      <div class="kontenpoin">
        <div class="rowpoin"><span class="poinkiri">Pembayaran PLN</span><span class="poinkanan">10 Poin</span></div>
        <div class="rowpoin"><span class="poinkiri">Pembelian Pulsa (Indosat) Rp 5000</span><span class="poinkanan">3 Poin</span></div>
        <div class="rowpoin"><span class="poinkiri">Pembelian Pulsa (Indosat) Rp 10,000</span><span class="poinkanan">4 Poin</span></div>
        <div class="rowpoin"><span class="poinkiri">Pembelian Pulsa (Indosat) Rp 25,000</span><span class="poinkanan">5 Poin</span></div>
        <div class="rowpoin"><span class="poinkiri">Pembelian Pulsa (Indosat) Rp 50,000</span><span class="poinkanan">10 Poin</span></div>
        <div class="rowpoin"><span class="poinkiri">Pembelian Pulsa (Indosat) Rp 100,000</span><span class="poinkanan">20 Poin</span></div>
        <div class="rowpoin"><span class="poinkiri">Transaksi Lain di Merchant PayPro</span><span class="poinkanan">1 Poin</span></div>
      </div>
    </div>

  </div>


  <!-- Main Container -->
  <main id="app" class="main-section">
    <!-- header navigation start -->
    <header id="navigation" class="root-sec white nav">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="nav-inner">
              <nav class="primary-nav">
                <div class="clearfix nav-wrapper">
                  <a href="<?php echo BASE_URL; ?>" class="left brand-logo menu-smooth-scroll" data-section="#home"><img src="<?php echo BASE_URL; ?>/images/<?php echo $settings['siteLogo']; ?>" alt="<?php echo $settings['siteTitle']; ?>">
                  <div class="brand">
                    <h2>Brand</h2>
                  </div>
                  <div class="ambas">
                    <h2>Ambassador</h2>
                  </div>
                  </a>
                  <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
                  <ul class="right static-menu">

                    <li>
                      <a class="dropdown-button blog-submenu-init" href="#!" data-activates="dropdown1">
                        <img class="profilemini" src="<?php echo THEME_FOLDER; ?>/css/assets/images/image5.jpg"><div class="namamodel">Dewi Sartika <i class="mdi-hardware-keyboard-arrow-down"></i></div>
                      </a>
                    </li>
                  </ul>
                  <div class="infopont" onclick="munculin();">CARA MENDAPATKAN POINT</div>
                  <ul class="inline-menu side-nav" id="mobile-demo">

                  <!-- Mini Profile // only visible in Tab and Mobile -->
                    <li class="mobile-profile">
                     <div class="profile-inner">
                        <div class="pp-container">
                            <img src="<?php echo THEME_FOLDER; ?>/css/assets/images/person.png" alt="">
                        </div>
                        <h3>John Doe</h3>
                        <h5>Creative UI/UX Expert</h5>
                      </div>
                    </li><!-- mini profile end-->


                    <li><a href="" onclick="munculin();" data-section="#about" class="menu-smooth-scroll"><i class="fa fa-user fa-fw"></i>CARA MENDAPATKAN POINT</a>
                    </li>

                  </ul>
                  <ul id="dropdown1" class="inline-menu submenu-ul dropdown-content">
                    <li>Home</li>
                    <li><a href="blog.html">All Blog</a>
                    </li>
                    <li><a href="blog-with-sidebar.html">Blog with Sidebar</a>
                    </li>
                    <li><a href="single.html">Single Blog</a>
                    </li>
                  </ul>

                </div>
              </nav>
            </div>
          </div>
        </div>
      </div>
      <!-- .container end -->
    </header>
    <!-- #header  navigation end -->

    <!-- Home Section start -->

    <!-- Contact Section end -->
    <section id="contact" class="scroll-section root-sec brand-bg padd-tb-120 contact-wrap">
      <div class="container">
        <div class="row">
          <div class="contact-inner">
            <div class="col-sm-12 card-box-wrap">
              <div class="row">


                <div class="clearfix contact-form">

                <!-- Map Start -->
                  <div class="col-sm-6">
                    <div class="fotoprofile">
                      <img src="<?php echo THEME_FOLDER; ?>/css/assets/images/image5.jpg">
                    </div>
                  </div> <!-- Map end -->

                <!-- Contact Form start -->
                  <div class="col-sm-6">
                    <div class="datadiri">
                      <div class="namanya"><span class="tebel">Dewi </span>Sartika</div>
                      <div class="kampusnya"><span class="tebel">Bina </span>Sarana Informatika</div>
                      <div class="datalengkap">
                        <h1>Handphone</h1>
                        <p>081512345678</p>
                        <h1>Alamat</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                      </div>
                    </div>

                  </div> <!-- ./contact form end -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> <!-- ./container end -->

    </section>
    <section id="contact" class="scroll-section root-sec detilsprice padd-tb-120 contact-wrap">
      <div class="container">
        <div class="row">
          <div class="contact-inner">
            <div class="col-sm-12 card-box-wrap tengah">
              <div class="row">
                <div class="jumlahpoin">
                  <h2 class="judul">JUMLAH POIN</h2>
                  <h2 class="poinnya">200</h2>
                  <div class="tukarpoin">TUKAR POIN</div>
                </div>
                <div class="rinciandata">
                  <h1>WINNING PRICE</h1>
                  <p class="text1">lorem ipsum dolor sit amet</p>
                  <p class="text2"><i class="fa fa-trophy" aria-hidden="true"></i></p>
                  <p class="text3">BRAND AMBASSADOR</p>
                  <p class="text4"><span class="tebel">1</span><span class="atas">st</span> 2,5 mio <span class="tebel">| 2</span><span class="atas">nd</span> 2 mio <span class="tebel"> |3</span><span class="atas">rd</span> 1 mio</p>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div> <!-- ./container end -->
      <div class="section-call-to-area">
        <div class="container">
          <div class="row">
            <a href="#home" class="btn-floating btn-large button-middle call-to-home section-call-to-btn animated btn-up btn-hidden" data-section="#home">
              <i class="mdi-navigation-expand-less"></i>
            </a>
          </div>
        </div>
      </div>
    </section>
    <!-- #contact Section end -->

    <!-- Footer Section end -->
    <footer id="footer" class="root-sec white root-sec footer-wrap">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="clearfix footer-inner">
              <div class="col-sm-6 fottkir">
                <?php echo $settings['siteFooter']; ?>
              </div>
              <div class="col-sm-6">
                <div class="right copyright">
                  <p class="judulfoot">FIND US</p>
                  <ul class="left social-icons">
                    <?php getSocial(); ?>
                  </ul> <!-- ./social icons end -->
                </div>
              </div>


            </div>
          </div>
        </div>
      </div> <!-- ./container end-->
    </footer>
    <!-- #footer end -->

  </main>
  <!-- Main Container end-->

<script>

  function munculin() {
    /*  var x = document.getElementById("myDIV");
      if (x.style.display === "none") {
          x.style.display = "block";
      } else {
          x.style.display = "none";
      }*/
    var modal = document.getElementById('myModal');
    modal.style.display = "block";
  }
  function bantai() {
    /*  var x = document.getElementById("myDIV");
      if (x.style.display === "none") {
          x.style.display = "block";
      } else {
          x.style.display = "none";
      }*/
    var modal = document.getElementById('myModal');
    modal.style.display = "none";
  }

</script>

<?php echo $footer; ?>
