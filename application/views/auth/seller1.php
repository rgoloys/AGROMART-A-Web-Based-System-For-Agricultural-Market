<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
     integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
     crossorigin=""/>
     <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
     integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
     crossorigin=""></script>
  <title>Agromart</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link rel = "icon"   href = "<?php echo base_url('Impact/');?>assets/img/tlogo.png" 
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo base_url('Impact/'); ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url('Impact/'); ?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?php echo base_url('Impact/'); ?>assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="<?php echo base_url('Impact/'); ?>assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?php echo base_url('Impact/'); ?>assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo base_url('Impact/'); ?>assets/css/main.css" rel="stylesheet">
    <link href="<?php echo base_url('Impact/'); ?>assets/css/style.css" rel="stylesheet">




  <link rel="stylesheet" href="<?php echo base_url(); ?>https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
  <link rel="stylesheet" href="<?php echo base_url(); ?>https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../assetsss/css/message/messagestyle.css">
  <link href="<?php echo base_url(); ?>https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">
  <script src="<?php echo base_url(); ?>https://cdn.jsdelivr.net/npm/pace-js@latest/pace.min.js"></script>
  <script src="<?php echo base_url(); ?>https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>



  <link rel="stylesheet" href="<?php echo base_url('style.css'); ?> style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>


  <!-- ===== FOR LEAFLET MAPPING ===== -->
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js" integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>

   
      
</head>

<body>
  <!-- ======= Header ======= -->
  <section id="topbar" class="topbar d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">



        <?php if(!$this->session->has_userdata('authenticated')){ ?>
        <i class="bi d-flex align-items-center">
          <a href="<?php echo base_url('register'); ?>">Sign Up</a>
        </i>
        <i class="bi d-flex align-items-center ms-4">
            <a href="<?php echo base_url('login'); ?>"><span>Login</span></a>
        </i>
        <i class="bi d-flex align-items-center ms-4">
            <a href="<?php echo base_url('Seller'); ?>"><span>Be a Seller</span></a>
        </i>
      <?php } ?>
      </div>

      <div class="social-links d-none d-md-flex align-items-center">
        <a href="#" class="bi">Follow us on</a>
        <a href="register.php" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="register.php" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="register.php" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="register.php" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </section><!-- End Top Bar -->

  <header id="header" class="header d-flex align-items-center">

    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <a href="<?php echo base_url('index');?>" class="logo d-flex align-items-center">
        <h1>Agromart<span><img src="<?php echo base_url('Impact/');?>assets/img/Logoo.png" class="img-fluid" alt="" style="height: 200px; width:60px;"></span></h1>
      </a>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="<?php echo base_url('/');?>">Home</a></li>
          <li><a href="<?php echo base_url('About');?>">About</a></li>
          <li><a href="<?php echo base_url('Contacts');?>">Contacts</a></li>

          <li class="dropdown"><a href="#"><span>
            <!--img src="<?php echo base_url('Impact/');?>assets/img/user.png" alt="" style="width:30PX; height: 30px;"-->

            <!--Displaying user names-->
          <?php if($this->session->has_userdata('authenticated')){ ?>
            <span style="justify-content:space-between; margin:10px;"><strong>
            <?= $this->session->userdata('auth_user')['fname']; ?>
            <?= $this->session->userdata('auth_user')['lname']; ?>
            </strong></span>
          <?php } ?>

          </span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
             <!-- <li><a href="#">Profile</a></li> -->

        <!--inalis ko lng ung "!" na sign para ma reverse sa condition ket mag visible ung logout functioon sa interface-->
        <?php if($this->session->has_userdata('authenticated') == TRUE){ ?>
              <li><a href="<?= base_url('logout') ?>">Log out</a></li>
        <?php } ?>
            </ul>
        
          </li>
        </ul>
      </nav><!-- .navbar -->

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->
  <!-- End Header -->
  


<!-- ===== REGISTRATION VIEWS ===== -->


<div class="form-container">
   
      <form method="POST" action="<?= base_url() ?>SellerController/sellerimage" enctype="multipart/form-data">
      <!-- CODE TO DISPLAY MESSAGE -->
      <?php if($this->session->flashdata('status')): ?>
         <div class="form-btn" style="justify-content: center; height: 35px; display: flex; color: crimson; padding: 1%; font-weight: 500;">
            <?= $this->session->flashdata('status'); ?>
         </div>
      <?php endif; ?>
			<h3 class="text-center">Create Seller Account</h3>
			<div id="ruler" class=""><hr/>
         </div>
			<div class="field_container">
				<div class="row">
				   <div class="form-group col-lg-6">
						<input type="text" name="fname" id="fname" placeholder="First name" class="form-control"required>
                  
					</div>
					<div class="form-group col-lg-6">
						<input type="text" name="lname" id="lname" placeholder="Last name" class="form-control" required>
                 
					</div>
				</div>
				<div class="form-group">
					<input type="email" name="email" id="email_addr" placeholder="Email" class="form-control" required>
              
				</div>
        <div class="form-group">
					<input type="text" name="number" id="number" placeholder="Contact Number" class="form-control" required>
				</div>

				<div class="row">
					<div class="form-group col-lg-6">
					<input type="password" name="password" placeholder="Password" class="form-control" id="pass1" required>
               
				</div>
				<div class="form-group col-lg-6">
					<input type="Password" name="cpass" placeholder="Confirm Password" class="form-control" id="pass2" required>
               
				</div>
        <div class="row">
          <label>Address:</label>
            <div class="form-group col-lg-6">
                <input type="text" name="txt_Provice" id="Provice" placeholder="Provice" class="form-control" <?php echo set_value('txt_Provice'); ?> required>
                <small><?php echo form_error('txt_Provice');?></small>
            </div>
            <div class="form-group col-lg-6">
                <input type="text" name="txt_Municipality" id="Municipality" placeholder="Municipality" class="form-control" <?php echo set_value('txt_Municipality'); ?> required>
                <small><?php echo form_error('txt_Municipality');?></small>
            </div>
            <div class="form-group col-lg-6">
                <input type="text" name="txt_Barangay" id="Barangay" placeholder="Barangay" class="form-control" <?php echo set_value('txt_Barangay'); ?> required>
                <small><?php echo form_error('txt_Barangay');?></small>
            </div>
            <div class="form-group col-lg-6">
                <input type="text" name="txt_Street" id="Street" placeholder="Purok/Zone/Street" class="form-control" <?php echo set_value('txt_Street'); ?> required>
                <small><?php echo form_error('txt_Street');?></small>
            </div>
          
				</div>
        <div class="form-group">
					<input type="text" name="OtherAddress" id="OtherAddress" placeholder="Enter Other Address Details" <?php echo set_value('OtherAddress'); ?> class="form-control" required>
          <small><?php echo form_error('OtherAddress');?></small>
        </div>
        <div class="form-group col-lg-6">
                <input type="text" name="lat" id="lat" placeholder="Latitude" class="form-control" <?php echo set_value('txt_Barangay'); ?> required  >
                
            </div>
            <div class="form-group col-lg-6">
                <input type="text" name="lng" id="lng" placeholder="Longitude" class="form-control" <?php echo set_value('txt_Street'); ?> required >
               
            </div>

          <p><button type="button" class="fcc-btn" onclick="whereAmI()">Where am I</button></p>
          <div id="demo" hidden></div>
            <div id="map" style="width:1000px; height:300px;"></div>
				  </div><br>

					<div class="form-group" id="file_container">
            <div class="custom-file">
                     <label>Upload Valid ID:</label>
                     <input type="file" name="valid_id"  accept="image/*" class="form-control"  placeholder="Upload Photo" required>
                     <small><?php echo form_error('user_avtar');?></small>
						</div>
            <div class="custom-file">
                     <label>Upload Gcash QrCode:</label>
                     <input type="file" name="gcash"  accept="image/*" class="form-control" id="name" placeholder="Upload Photo" required>
                     <small><?php echo form_error('user_avtar');?></small>
						</div>

						<div class="custom-file">
                     <label>Upload Selfie:</label>
                     <div id="results" style="width: 700px;;"></div>
                     <button type="button" class="fcc-btn" id="myBtn">Take A selfie</button>
                     <input type="hidden" name="image" class="image-tag">

                     <small><?php echo form_error('user_avtar');?></small>
						</div>
					  </div>
            <br><hr> <h4> My Shop </h4>
        
          
				    <div class="form-group">
					    <input type="text" name="sname" id="sname" placeholder="Shop Name" class="form-control" required>
              
				    </div>
            <div class="form-group">
					    <input type="text" name="sdes" id="sdes" placeholder="Shop Description" class="form-control" required>
          
				    </div>
            <div class="form-group" id="file_container">
              <div class="custom-file">
                     <label>Upload Shop Photo:</label>
                     <input type="file" name="sphoto"  accept="image/*" class="form-control"  placeholder="Upload Photo" required>
                     <small><?php echo form_error('user_avtar');?></small>
						  </div>
          </div>
              <p style ="color:red; font-size: 14px; text-align: justify"><i>Please wait for an SMS message for confirmation of your account. Thank you!</i> </p>
               <input type="submit" name="submit" class="form-btn">
               

					<h6 class="text-center">Already have an account? <a href="<?php echo base_url('login');?>" style="text-decoration:none;">Login</a></h6>
				</div>
		</form>
      <?php echo form_close(); ?>
      <div id="myModal" class="modal">
        
        <!-- Modal content -->
        <div class="modal-content">
          <span class="close">&times;</span>
          <div id="my_camera"></div>

          <br/>

          <input type=button class="fcc-btn" value="Take Snapshot" onClick="take_snapshot()">

      </div>
        </div>

        



  

</div>

<style type="text/css">
   @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600&display=swap');

*{
   font-family: 'Poppins', sans-serif;
   margin:0; padding:0;
   box-sizing: border-box;
   outline: none; border:none;
   text-decoration: none;
}

.form-container{
   min-height: 50vh;
   display: flex;
   align-items: center;
   justify-content: center;
   padding:20px;
   padding-bottom: 60px;
   background: #eee;
}

.form-container form{ 
   padding:20px;
   border-radius: 5px;
   box-shadow: 0 5px 10px rgba(0,0,0,.1);
   background: #fff;

   width: 500px;
}

.form-container form h3{
   font-size: 30px;
   text-transform: uppercase;
   margin-bottom: 10px;
   color:#333;
}

.form-container form input,
.form-container form select{ 
   width: 100%;
   padding:10px 15px;
   font-size: 17px;
   margin:8px 0;
   background: #eee;
   border-radius: 5px;
}

.form-container form select option{ 
   background: #fff;
}

.form-container form .form-btn{
   background: #04AA6D;
   color:black;
   text-transform: capitalize;
   font-size: 20px;
   cursor: pointer;
}

.form-container form .form-btn:hover{
   background: #04AA6D;
   color:#fff;
}

.form-container form p{
   margin-top: 10px;
   font-size: 20px;
   color:#333;
}

.form-container form p a{ 
   color:crimson;
}

.form-container form .error-msg{   outline: 1px solid red;
   margin:10px 0;
   display: block;
   background: crimson;
   color:#fff;
   border-radius: 5px;
   font-size: 20px;
   padding:10px;
}
@media (max-width: 430px) { /**768px */
  .form-container form{
    padding:20px;
    border-radius: 2px;
    box-shadow: 0 2px 5px rgba(0,0,0,.1);
    background: #fff;
    width: 500px;
  }
  .form-container form h3{
    font-size: 18px;
    text-transform: uppercase;
    margin-bottom: 5px;
    color:#333;
  }
  .form-container form input,
  .form-container form select{ 
    width: 100%;
    padding:7px 10px;
    font-size: 10px;
    margin:4px 4px;
    background: #eee;
    border-radius: 2px;
  }
  .form-container form .form-btn{ 
    background: #04AA6D;
    color:black;
    text-transform: capitalize;
    font-size: 12px;
    cursor: pointer;
    height: 30px;
  }
  .form-container form p{ 
    margin-top: 5px;
    font-size: 12px;
    color:#333;
  }
  .form-container form .error-msg{ 
    margin:10px 0;
    display: block;
    background: crimson;
    color:#fff;
    border-radius: 2px;
    font-size: 12px;
    padding: 5px;
  }
}
  /* The Modal (background) */
  #my_camera{
     
     margin: 0% auto; /* 15% from the top and centered */
    
   }
     
   .modal {
     display: none; /* Hidden by default */
     position: fixed; /* Stay in place */
    
     left: 0;
     top: 0;
     width: 100%; /* Full width */
     height: 100%; /* Full height */
     overflow: auto; /* Enable scroll if needed */
     background-color: rgb(0,0,0); /* Fallback color */
     background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
   }
   
   /* Modal Content/Box */
   .modal-content {
     background-color: #fefefe;
   
     margin: 5% auto; /* 15% from the top and centered */
     margin-top: 0%;
     padding: 20px;
     border: 1px solid #888;
     width: 530px; /* Could be more or less, depending on screen size */
     height: 100%;
   }
   
   /* The Close Button */
   .close {
     color: #aaa;
     float: right;
     font-size: 28px;
     font-weight: bold;
   }
   
   .close:hover,
   .close:focus {
     color: black;
     text-decoration: none;
     cursor: pointer;
   }
   .fcc-btn {
     background-color: #04AA6D;
     color: black;
     padding: 15px 25px;
     text-decoration: none;
   }
   .fcc-btn:hover {
    color: white;
   }
   
</style>

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-info">
          <a href="index.html" class="logo d-flex align-items-center">
            <span>Agromart</span>
          </a>
          <p>A web-based system for agricultural market.</p>
          <div class="social-links d-flex mt-4">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

        <div class="col-lg-5 col-md-12 footer-info">
            <h4>Contact Us</h4>
          </a>
          <div class="social-links d-flex mt-4">
           <p><strong>Address: </strong>Mangatarem, Pangasinan<br><br>
            <strong>Number: </strong>+63 951 0598 340<br><br>
            <strong>Emails: </strong>agromart@gmail.com</p>
          </div>
        </div>
      </div>
    </div>

    <div class="container mt-4">
      <div class="copyright">
        &copy; Copyright <strong><span>Impact</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/impact-bootstrap-business-website-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>

  </footer><!-- End Footer -->
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <script language="JavaScript">

// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

  
    Webcam.set({

      width: 490,
        height: 390,
        image_format: 'jpeg',
        jpeg_quality: 90
    });

  

    Webcam.attach( '#my_camera' );

  

    function take_snapshot() {

        Webcam.snap( function(data_uri) {

            $(".image-tag").val(data_uri);
            modal.style.display = "none";

            document.getElementById('results').innerHTML = '<img src="'+data_uri+'"/>';

        } );

    }
    const key = 'WXaPr09ZJq6ZSNOFofJS';
const map = L.map('map').setView([15.686141, 120.413924], 10);

L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 30,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
}).addTo(map);

var popup = L.popup();

function onMapClick(e) {
    popup
        .setLatLng(e.latlng)
        .setContent("Is this your exact location? " + e.latlng.toString())
        .openOn(map);

    document.getElementById("lng").value = e.latlng.lng.toString();
    document.getElementById("lat").value = e.latlng.lat.toString();
}

map.on('click', onMapClick);

function whereAmI() {
    var myresult = document.getElementById("demo");
    if (!navigator.geolocation) {
        myresult.innerHTML = "<p>Geolocation is not supported by your browser</p>";
        return;
    }

    function success(position) {
        var latitude = position.coords.latitude;
        var longitude = position.coords.longitude;
        
      document.getElementById("lng").value = longitude;
      document.getElementById("lat").value = latitude ;
        myresult.innerHTML = '<p>Latitude is ' + latitude + '° <br>Longitude is ' + longitude + '°</p';
        makeMyMap(latitude, longitude);
    }

    function error() {
        myresult.innerHTML = "Unable to retrieve your location";
    }

    myresult.innerHTML = "<p>Locating…</p>";
    navigator.geolocation.getCurrentPosition(success, error);
}

function makeMyMap(mylat, mylong) {
    map.setView([mylat, mylong], 10); // Pan to the user's location
    L.marker([mylat, mylong]).addTo(map)
        .bindPopup("<b>You are here!</b>").openPopup();

    L.circle([mylat, mylong], 10, {
        color: 'red',
        fillColor: '#f2d5df',
        fillOpacity: 0.2
    }).addTo(map).bindPopup("");
}


/*   dito na ung sa map ng products */



</script>
 
  <!-- Vendor JS Files -->
  <script src="<?php echo base_url('Impact/'); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url('Impact/'); ?>assets/vendor/aos/aos.js"></script>
  <script src="<?php echo base_url('Impact/'); ?>assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="<?php echo base_url('Impact/'); ?>assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="<?php echo base_url('Impact/'); ?>assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="<?php echo base_url('Impact/'); ?>assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?php echo base_url('Impact/'); ?>assets/vendor/php-email-form/validate.js"></script>


  <script src="<?php echo base_url(); ?>https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url(); ?>https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/message/main.js"></script>

        
  <!-- Para sa GRAPH -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js@4.3.0/dist/chart.umd.min.js"></script>
  <script src="<?php echo base_url('Impact/');?>chart.js"></script>
  <script src="<?php echo base_url('Impact/');?>chart1.js"></script>
  <script src="<?php echo base_url('Impact/');?>chart2.js"></script>


  <script src="<?php echo base_url('Impact/');?>assets/js/script.js"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo base_url('Impact/'); ?>assets/js/main.js"></script>


  <!-- ===== Mga folder na galing sa chat box===== -->
  <script src="<?php echo base_url(); ?>javascript/pass-show-hide.js"></script>
  <script src="<?php echo base_url(); ?>javascript/login.js"></script>
  <script src="<?php echo base_url(); ?>javascript/users.js"></script>
  <script src="<?php echo base_url(); ?>javascript/signup.js"></script>
  

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/leaflet.locatecontrol@0.79.0/dist/L.Control.Locate.min.css" />
<script src="https://cdn.jsdelivr.net/npm/leaflet.locatecontrol@0.79.0/dist/L.Control.Locate.min.js" charset="utf-8"></script>
</body>
</html>
