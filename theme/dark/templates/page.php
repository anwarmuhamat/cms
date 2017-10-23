<?php echo $header; ?>
<style>
  .grey.lighten-5 {
  background-color: rgba(250, 250, 250, 0) !important;
}
body {
    font-family: 'Roboto', sans-serif;
    font-size: 16px;
    color: #fff;
    font-weight: 400;
    background-color: #fafafa;
    background: url(<?php echo BASE_URL; ?>/images/<?php echo $settings['siteProfile']; ?>);
    background-size: 100%;
}
.jmlpoindiv {
    width: 322px;
    height: 322px;
    background: #666;
    /* vertical-align: middle; */
    text-align: center;
    /* padding: 20%; */
    padding-top: 25%;
	 background: url(<?php echo THEME_FOLDER; ?>/css/assets/images/buletan.png);
    background-size: 100%;
}
img.profilemini {
    width: 58%;
    border-radius: 50%;
    float: right;
    margin-top: 89px;
}
.jmlpoindiv {
    width: 377px;
    height: 322px;
    background: #666;
    /* vertical-align: middle; */
    text-align: center;
    /* padding: 20%; */
    padding-top: 19%;
    padding-right: 60px;
    background: url(<?php echo THEME_FOLDER; ?>/css/assets/images/buletan.png);
    background-size: 90%;
    margin-top: 87px;
    background-repeat: no-repeat;
    font-size: 26px;
    font-weight: 600;
    color: #882788;
}
.poin {
    font-size: 80px;
    margin-top: -12px;
}
.datalengkap {
    width: 60%;
    /* height: 300px; */
    /* background: #555; */
    margin-left: auto;
    margin-right: auto;
	    margin-top: -50px;

}
.namanya {
    font-size: 48px;
    font-weight: 300;
    text-transform: uppercase;
}
.alamat {
    padding-top: 8px;
}
span.almt.tebel, span.tlp.tebel {
    font-size: 20px;
    /* padding-top: 14px; */
}
.alamat p {
    font-size: 14px;
    text-align: justify;
    line-height: 19px;
}
.hp {
    padding-top: 8px;
}
.kampusnya {
    font-size: 20px;
}
h1.headpointer {
    text-align: center;
    padding-top: 50px;
    font-size: 30px;
    font-weight: 600;
}
.juara1 {
    text-align: center;
}
.pemenangke {
    text-align: right;
    padding-right: 10px;
    padding: 7px;
}
.juara1 {
    text-align: center;
    width: 151px;
}
.juara1 {
    text-align: center;
    width: 151px;
    margin-left: auto;
    margin-right: auto;
}
.hadiah {
    background: #511650;
    width: 159px;
    padding: 5px;
    border-radius: 20px;
    padding-left: 54px;
    /* margin-left: auto; */
    /* margin-right: auto; */
    margin-left: -10px;
}
.piala {
    width: 56px;
    position: absolute;
    margin-left: -10px;
    margin-top: -10px;
}
.juara1 {
    margin-top: 50px;
    margin-bottom: 35px;
}
.juara2 {
    text-align: center;
    width: 151px;
    margin-left: auto;
	margin-right: 35px;
}
.juara3 {
    text-align: center;
    width: 151px;
    margin-left: auto;
	margin-left: 35px;
}
span.poinkanan {
    float: right;
}
.infopoin {
    width: 40%;
    background: rgba(0, 0, 0, 0.65);
    border-radius: 30px;
    margin-left: auto;
    margin-right: auto;
    margin-top: 30px;
}
.kontenpoin {
    width: 100%;
    padding: 30px;
}
.clearfix.about-inner .col-sm-12.col-md-6 {
    margin-top: -50px;
}
footer {
    background: #511650;
    width: 100%;
    height: 65px;
    padding: 20px;
}
.right.copyright {
    margin-top: -5px;
}
.social-icons li a {
    color: #ffffff;
    font-size: 33px;
    /* margin-top: 10px !important; */
}
.gambar1tempel {
    position: absolute;
    bottom: 0px;
}
.gambar1tempel {
    position: absolute;
    bottom: -3px;
    width: 480px;
    left: -61px;
}
.gambar4tempel {
    position: absolute;
    width: 120px;
    bottom: 242px;
    left: 140px;
}
.gambar2tempel {
    position: absolute;
    width: 215px;
    bottom: 0px;
    right: 246px;
}
.gambar3tempel {
    position: absolute;
    width: 238px;
    bottom: 0px;
    right: 0px;
}
.logout {
    font-weight: 600;
    margin-top: 40px;
    text-align: center;
}
.tebel{font-weight:600}
.jmlpoindivmobile{display:none;}

@media (max-width: 600px) {
body {
    background: #892886;
}

img.profilemini {
    width: 100%;
    border-radius: 50%;
    float: right;
    margin-top: -1px;
}
.jmlpoindiv {
    display: none;
}
.datalengkap {
    width: 100%;
    /* height: 300px; */
    /* background: #555; */
    margin-left: auto;
    margin-right: auto;
    margin-top: -40px;
}
.namanya {
    font-size: 39px;
    font-weight: 300;
    text-transform: uppercase;
}
span.almt.tebel, span.tlp.tebel {
    font-size: 17px;
    /* padding-top: 14px; */
}
.juara3 {
    text-align: center;
    width: 151px;
    margin-left: auto;
    margin-right: auto;
    margin-top: 30px;
}
.infopoin {
    width: 100%;
    background: rgba(0, 0, 0, 0.65);
    border-radius: 30px;
    margin-left: auto;
    margin-right: auto;
    margin-top: 30px;
}
h1.headpointer {
    text-align: center;
    padding-top: 10px;
    font-size: 20px;
    font-weight: 600;
    border-top: 1px solid #fff;
    margin-top: 50px;
    border-bottom: 1px solid #fff;
    padding-bottom: 10px;
}
footer {
    background: #511650;
    width: 100%;
    height: 126px;
    padding: 20px;
}
.gambar1tempel, .gambar2tempel, .gambar3tempel, .gambar4tempel {
    display: none;
}
.jmlpoindivmobile{display:block;
	background: url(<?php echo THEME_FOLDER; ?>/css/assets/images/buletan.png);
    background-size: 100%;
}
.jmlpoindivmobile {
    display: block;
    background: url(<?php echo THEME_FOLDER; ?>/css/assets/images/buletan.png);
    background-size: 100%;
    width: 100%;
    height: 230px;
    background-repeat: no-repeat;
    margin-top: 30px;
    text-align: center;
    background-position-x: 7px;
    padding-top: 69px;
    font-size: 19px;
    font-weight: 600;
    color: #892886;
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

  <!-- Main Container -->
  <main id="app" class="main-section">
	<div class="col-md-12">
		<div class="col-md-6">
		</div>
		<div class="col-md-6">
			<div class="logout"><span>LOG OUT</span></div>
		</div>
	</div>
    <section id="about" class="scroll-section root-sec padd-tb-60 grey lighten-5 about-wrap">
      <div class="container">
        <div class="row">
          <div class="clearfix about-inner">

            <div class="col-sm-12 col-md-6">
              <img class="profilemini" src="<?php echo THEME_FOLDER; ?>/css/assets/images/image5.jpg">
            </div>
            <div class="col-sm-12 col-md-6">
              <div class="jmlpoindiv">
				<div class="jml"><span>JUMLAH POIN</span></div>
				<div class="poin"><span>200</span></div>
			  </div>


            </div>
            <!-- about me info -->

          </div>
		  <div class="datalengkap">
			<div class="col-sm-12 col-md-6">
				<div class="namanya"><span class="tebel">Dewi </span>Sartika</div>
				<div class="kampusnya"><span class="tebel">Bina </span>Sarana Informatika</div>
            </div> 
			<div class="col-sm-12 col-md-6">
				<div class="alamat">
					<span class="almt tebel">Alamat</span>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
				</div>
				<div class="hp">
					<span class="tlp tebel">Handphone</span>
					<p>081512345678</p>
				</div>
            </div>          
		  </div>
		  <div class="col-md-12">
			 <div class="jmlpoindivmobile">
				<div class="jml"><span>JUMLAH POIN</span></div>
				<div class="poin"><span>200</span></div>
			  </div>
		  
			<h1 class="headpointer">HADIAH POIN TERTINGGI</h1>
			<div class="juara1">
				<div class="piala"><img src="<?php echo THEME_FOLDER; ?>/css/assets/images/gambar4.png"></div>
				<div class="pemenangke">
					<span>Pemenang 1</span>
				</div>
				<div class="hadiah">
					<span>Rp 2,500,000</span>
				</div>
				
			</div>
		  </div>
		  <div class="col-md-12">
			<div class="col-md-6">
				<div class="juara2">
					<div class="piala"><img src="<?php echo THEME_FOLDER; ?>/css/assets/images/gambar4.png"></div>
					<div class="pemenangke">
						<span>Pemenang 2</span>
					</div>
					<div class="hadiah">
						<span>Rp 2,000,000</span>
					</div>
					
				</div>
			</div>
			<div class="col-md-6">
				<div class="juara3">
					<div class="piala"><img src="<?php echo THEME_FOLDER; ?>/css/assets/images/gambar4.png"></div>
					<div class="pemenangke">
						<span>Pemenang 3</span>
					</div>
					<div class="hadiah">
						<span>Rp 1,000,000</span>
					</div>
					
				</div>

			</div>
			
		  </div>
		  <div class="col-md-12">
			<h1 class="headpointer">CARA MENDAPATKAN POIN</h1>
			
			<div class="infopoin">
				<div class="kontenpoin">
					<div class="rowpoin"><span class="poinkiri">Pembayaran PLN</span><span class="poinkanan">10 Poin</span></div>
					<hr/>
					<div class="rowpoin"><span class="poinkiri">Pembelian Pulsa (Indosat) Rp 5000</span><span class="poinkanan">3 Poin</span></div>
					<hr/>
					<div class="rowpoin"><span class="poinkiri">Pembelian Pulsa (Indosat) Rp 10,000</span><span class="poinkanan">4 Poin</span></div>
					<hr/>
					<div class="rowpoin"><span class="poinkiri">Pembelian Pulsa (Indosat) Rp 25,000</span><span class="poinkanan">5 Poin</span></div>
					<hr/>
					<div class="rowpoin"><span class="poinkiri">Pembelian Pulsa (Indosat) Rp 50,000</span><span class="poinkanan">10 Poin</span></div>
					<hr/>
					<div class="rowpoin"><span class="poinkiri">Pembelian Pulsa (Indosat) Rp 100,000</span><span class="poinkanan">20 Poin</span></div>
					<hr/>
					<div class="rowpoin"><span class="poinkiri">Transaksi Lain di Merchant PayPro</span><span class="poinkanan">1 Poin</span></div>
					<hr/>
				  </div>
			</div>
		  </div>
        </div>
      </div>
	  <div class="gambar1tempel">
		<img src="<?php echo THEME_FOLDER; ?>/css/assets/images/gambar1.png">
	  </div>
	  <div class="gambar2tempel">
		<img src="<?php echo THEME_FOLDER; ?>/css/assets/images/gambar2.png">
	  </div>
	  <div class="gambar3tempel">
		<img src="<?php echo THEME_FOLDER; ?>/css/assets/images/gambar3.png">
	  </div>
	  <div class="gambar4tempel">
		<img src="<?php echo THEME_FOLDER; ?>/css/assets/images/gambar5.png">
	  </div>
      <!-- .container end -->
    </section>
  </main>
  
  <footer>
	<div class="footer">
		<div class="col-md-6">
			<div class="left copyright">
				<?php echo $settings['siteFooter']; ?>
			</div>
		</div>
		<div class="col-md-6">
		 <div class="right copyright">
                  <ul class="left social-icons">
                    <?php getSocial(); ?>
                  </ul> <!-- ./social icons end -->
                </div>
		</div>
		
	</div>
  </footer>
  <!-- Main Container end-->
  
<?php echo $footer; ?>