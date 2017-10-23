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
    background: url(images/microsite_rev_1-01.jpg);
    background-size: 100%;
    font-family: 'Titillium Web', sans-serif !important;
}
.col-sm-12.col-md-8.tengahcuy {
    margin-left: auto;
    align-items: center;
    /* padding: 20px; */
    /* align-content: center; */
    float: none;
    margin-right: auto;
}
h1 {
    font-family: 'Roboto', sans-serif;
    font-family: 'Titillium Web', sans-serif !important;
}
.descript {
    font-size: 17px;
    line-height: 28px;
    padding-left: 10px;
    font-style: italic;
    font-family: 'Titillium Web', sans-serif !important;
}
.genpay {
    font-size: 40px;
    line-height: 34px;
    font-weight: 600;
    letter-spacing: 4px;
    margin-top: 7px;
    margin-left: -20px;
}
.person-info {
    background: rgba(0, 0, 0, 0.58);
    padding: 55px;
    border-radius: 20px;
}
h1.about-subtitle {
    text-align: center;
    color: #fff;
    margin-bottom: 3px;
    font-family: 'Titillium Web', sans-serif !important;
}
.person-info {
    background: rgba(0, 0, 0, 0.58);
    padding: 47px;
    border-radius: 20px;
}
input[type=text], input[type=password], input[type=email], input[type=url], input[type=date], input[type=tel], input[type=number], input[type=search], textarea.materialize-textarea {
    background-color: transparent;
    border: none;
    border: 1px solid #9e9e9e;
    outline: none;
    height: 1.5rem;
    width: 100%;
    font-size: 1rem;
    margin: 0 0 15px 0;
    padding: 4px;
    -webkit-box-shadow: none;
    -moz-box-shadow: none;
    box-shadow: none;
    -webkit-box-sizing: content-box;
    -moz-box-sizing: content-box;
    box-sizing: content-box;
    -webkit-transition: 0.3s;
    -moz-transition: 0.3s;
    -o-transition: 0.3s;
    -ms-transition: 0.3s;
    transition: 0.3s;
    border-radius: 20px;
    padding-left: 20px;
    width: 84%;
}
input#remember {
    position: relative;
    left: 0;
    top: 3px;
}
.person-info {
    background: rgba(0, 0, 0, 0.58);
    padding: 46px;
    border-radius: 20px;
}
.formfoot {
    font-size: 12px;
}
button.btnsub {
    width: 40%;
    margin-left: 30%;
    /* margin-right: auto; */
    /* float: none; */
    /* margin-top: 20px; */
    color: #511650;
    padding: 2px;
    /* position: relative; */
    border-radius: 5px;
}
.formfoot {
    margin-bottom: 40px;
}
.gambar1tempel {
    position: absolute;
    bottom: 0px;
    left: 309px;
    width: 790px;
}
.gambar2tempel {
    position: absolute;
    width: 160px;
    bottom: 0px;
    left: 169px;
}
.gambar3tempel {
    position: absolute;
    width: 160px;
    bottom: 0px;
    right: 61px;
}
.gambar4tempel {
    position: absolute;
    bottom: 190px;
    width: 140px;
    left: 443px;
}
.gambar6tempel {
    position: absolute;
    right: 35px;
    width: 229px;
    top: 34px;
}

.gambar5tempel {
    position: absolute;
    width: 300px;
    bottom: 0px;
    left: -110px;
}
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
.modal-content {
    width: 20%;
    background: #ffffff;
    /* padding: 50px !important; */
    color: #000;
    /* line-height: 10px; */
    border-radius: 20px;
}
h2.lupabro {
    font-size: 38px;
    text-align: center;
    margin-bottom: 15px;
    line-height: 35px;
    color: #721075;
}
.modal .modal-content p {
    color: #721075;
    font-size: 26px;
    line-height: 30px;
    text-transform: uppercase;
}

@media (max-width: 600px) {
body {
    background: #892886;
    overflow-x: hidden;
    width: 100%;
}
.genpay {
    font-size: 61px;
    line-height: 54px;
    font-weight: 600;
    letter-spacing: 4px;
    margin-top: -2px;
    margin-bottom: 38px;
    margin-left: 0px;
}
p.descript {
    font-size: 15px;
    line-height: 15px;
    padding-left: 10px;
    margin-bottom: 25px;
    text-align: justify;
}
section#about .container {
    padding: 0 0px;
    margin: 0 auto;
    max-width: 1170px;
    width: 90%;
}
.person-info {
    background: rgba(0, 0, 0, 0.58);
    padding: 20px;
    border-radius: 20px;
}
.formfoot .col-md-6 {
    width: 50%;
    float: left;
    font-size: 15px;
}
input[type=text], input[type=password], input[type=email], input[type=url], input[type=date], input[type=tel], input[type=number], input[type=search], textarea.materialize-textarea {
    background-color: transparent;
    border: none;
    border: 1px solid #9e9e9e;
    outline: none;
    height: 1.5rem;
    width: 100%;
    font-size: 1rem;
    margin: 0 0 15px 0;
    padding: 4px;
    -webkit-box-shadow: none;
    -moz-box-shadow: none;
    box-shadow: none;
    -webkit-box-sizing: content-box;
    -moz-box-sizing: content-box;
    box-sizing: content-box;
    -webkit-transition: 0.3s;
    -moz-transition: 0.3s;
    -o-transition: 0.3s;
    -ms-transition: 0.3s;
    transition: 0.3s;
    border-radius: 20px;
    padding-left: 20px;
    width: 90%;
}
.gambar1tempel, .gambar2tempel, .gambar3tempel, .gambar4tempel, .gambar5tempel, .gambar6tempel {
    display:none;
}
button.btnsub {
    width: 40%;
    margin-left: 30%;
    /* margin-right: auto; */
    /* float: none; */
    /* margin-top: 20px; */
    color: #511650;
    padding: 2px;
    /* position: relative; */
    border-radius: 5px;
    font-size: 20px;
}
.gambar1tempel {
    display: block;
    width: 100%;
    left: 0px;
    bottom: -460px;
}
.gambar3tempel {
    display: block;
    z-index: -1;
    right: -80px;
    opacity: 0.7;
}
.formfoot .col-md-6 {
    width: 50%;
    float: left;
    font-size: 12px;
}
.modal-content {
    width: 95%;
    background: #ffffff;
    /* padding: 50px !important; */
    color: #000;
    /* line-height: 10px; */
    border-radius: 20px;
}
div#myModal {
    max-width: 100%;
}
.gambar2tempel {
    display: block;
    left: 0px;
    z-index: -1;
    left: -76px;
    opacity: 0.7;
}
.gambar1tempel {
    display: block;
    width: 100%;
    left: 0px;
    bottom: -590px;
}
}

@media (max-width: 400px) {
body {
    background: #892886;
    overflow-x: hidden;
    width: 100%;
}
.genpay {
    font-size: 51px;
    line-height: 44px;
    font-weight: 600;
    letter-spacing: 4px;
    margin-top: -2px;
    margin-bottom: 38px;
    margin-left: 0px;
}
button.btnsub {
    width: 50%;
    margin-left: 25%;
    /* margin-right: auto; */
    /* float: none; */
    /* margin-top: 20px; */
    color: #511650;
    padding: 2px;
    /* position: relative; */
    border-radius: 5px;
    font-size: 17px;
}
.formfoot .col-md-6 {
    width: 50%;
    float: left;
    font-size: 10px;
}
.person-info {
    background: rgba(0, 0, 0, 0.58);
    padding: 15px;
    border-radius: 20px;
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

	
	  <div id="myModal" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
      <span class="close" onclick="bantai();">&times;</span>
      <h2 class="lupabro">FORGOT PASSWORD</h2>
	  <P class="desclupa">forgot password, please contact our customer service</P>
    </div>

  </div>
  <!-- Main Container -->
  <main id="app" class="main-section">

    <section id="about" class="scroll-section root-sec padd-tb-60 grey lighten-5 about-wrap">
      <div class="container">
        <div class="row">
          <div class="clearfix about-inner">
			
			<div class="col-sm-12 col-md-8 tengahcuy">
				<div class="col-md-6">
					<div class="col-md-4">
						<div class="logonya">
							<img src="<?php echo BASE_URL; ?>/images/<?php echo $settings['siteLogo']; ?>">
						  </div>
					</div>
					<div class="col-md-8">
						<div class="genpay">
						<h1><?php echo $page['pageTitle']; ?></h1>
						</div>
					</div>
					<div class="col-md-12">
						<p class="descript"><?php echo $page['pageDescription']; ?></p>
					</div>
					
				</div>
				<div class="col-md-6">
					<div class="person-info">
                <form class="formlogin" action="/action_page.php">
                  <h1 class="about-subtitle">Login</h1>


                    <input type="text" placeholder="User ID" name="uname" required>
                    <input type="password" placeholder="Enter Password" name="psw" required>
                    <div class="formfoot">
                      <div class="col-md-6">
                            <input type="radio" id="remember" > Remember me
                      </div>
                      <div class="col-md-6">
                        <span class="psw" onclick="munculin();">  Forgot password?</span>
                      </div>
                    </div>
				<div class="col-md-12">
                    <button type="submit" class="btnsub">Login <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></button>
				</div>


                </form>
              </div>
				</div>
				
			
			<div>
			
            <!-- about me info -->

          </div>
        </div>
      </div>
      <!-- .container end -->
	  
	  
    </section>
	
  </main>
  <!-- Main Container end-->
<div class="gambar1tempel">
		<img src="<?php echo THEME_FOLDER; ?>/css/assets/images/gambar10.png">
	  </div>
	  <div class="gambar2tempel">
		<img src="<?php echo THEME_FOLDER; ?>/css/assets/images/gambar6.png">
	  </div>
	<div class="gambar3tempel">
		<img src="<?php echo THEME_FOLDER; ?>/css/assets/images/gambar7.png">
	  </div>
	<div class="gambar4tempel">
		<img src="<?php echo THEME_FOLDER; ?>/css/assets/images/gambar9.png">
	  </div>
	  <div class="gambar5tempel">
		<img src="<?php echo THEME_FOLDER; ?>/css/assets/images/gambar2.png">
	  </div>
	  <div class="gambar6tempel">
		<img src="<?php echo THEME_FOLDER; ?>/css/assets/images/gambar3.png">
	  </div>
	  
	
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
