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
    background: url(<?php echo BASE_URL; ?>/images/<?php echo $settings['siteBackground']; ?>);
    background-size: 100%;
}
.logonya img{width: 100%;}
.logonya {
    width: 141px;
    margin-top: -76px;
    /* position: absolute; */
    margin-bottom: 86px;
}
.person-about p {
    color: #ffffff;
    font-size: 13px;
    line-height: 21px;
    margin-bottom: 35px;
    text-align: justify;
}
h1.about-subtitle {
    color: #fff;
    font-size: 39px;
margin-bottom: 0px !important;
}
.bordertang {
    background: #fff;
    height: 3px;
    width: 22%;
    margin-top: 20px;
    margin-bottom: 20px;
}
input#remember {
    /* left: 0; */
    position: relative;
    left: 0px;
}
form.formlogin h1.about-subtitle {
    text-transform: capitalize;
}
.forgot {
    width: 50%;
    text-align: right;
    float: right;
}
.remember {
    width: 50%;
    float: left;
}
.formfoot {
    width: 100%;
}
*::-webkit-input-placeholder {
    color: rgba(255, 255, 255, 0.64);
}
input[type="number"], input[type=password] {
    border-bottom: 2px solid #fff;
    margin-top: 0px;
    margin-bottom: 30px;
    /* line-height: 489px; */
}
form.formlogin h1.about-subtitle {
    text-transform: capitalize;
    margin-bottom: 8px !important;
}
span.psw a {
    color: #fff;
    font-weight: 600;
}
.remember {
    font-weight: 600;
}
.formfoot {
    margin-bottom: 40px;
}
form.formlogin {
    width: 90%;
    padding-left: 10%;
    padding-top: 73px;
}
button.btnsub {
    background: #fff;
    border: none;
    padding: 5px 10px 5px 10px;
    color: #8a2784;
    font-weight: 600;
    border-radius: 20px;
    float: right;
    margin-right: 10px;
}

.spanbtnsub {
    background: #fff;
    border: none;
    padding: 5px 10px 5px 10px;
    color: #8a2784;
    font-weight: 600;
    border-radius: 20px;
    float: right;
    margin-right: 10px;
    cursor: pointer;
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
body {
    background: #892886;
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
      <h2>HUBUNGI CS KAMI!</h2>
      <div class="kontenpoin">
        
      </div>
    </div>

  </div>

  <!-- Main Container -->
  <main id="app" class="main-section">

    <section id="about" class="scroll-section root-sec padd-tb-60 grey lighten-5 about-wrap">
      <div class="container">
        <div class="row">
          <div class="clearfix about-inner">

            <div class="col-sm-12 col-md-6">
              <div class="logonya">
                <img src="<?php echo BASE_URL; ?>/images/<?php echo $settings['siteLogo']; ?>">
              </div>
              <div class="person-about">
                  
                <?php echo $page['pageContentHTML']; ?>

              </div>
            </div>
            <div class="col-sm-6 col-md-6">
              <div class="person-info">
                <form class="formlogin" action="/action_page.php">
                  <h1 class="about-subtitle">Login</h1>


                    <input type="number" placeholder="Enter Phone Number" id="uname" name="uname" required>
                    <input type="password" placeholder="Enter Password" id="psw" name="psw" required>
                    <div class="formfoot">
                      <div class="remember">
                            <input type="radio" id="remember" > Remember me 
                      </div>
                      <div class="forgot">
                        <span class="psw" onclick="munculin();" style="cursor:pointer">Forgot password?</span>
                      </div>
                    </div>

                    <span type="submit" class="spanbtnsub" id="login">Login <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></span>



                </form>
              </div>


            </div>
            <!-- about me info -->

          </div>
        </div>
      </div>
      <!-- .container end -->
    </section>
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
