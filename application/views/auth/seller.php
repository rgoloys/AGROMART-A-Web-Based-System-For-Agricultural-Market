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
 <a href="https://www.facebook.com/profile.php?id=61552519156175&mibextid=ZbWKwL" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="https://instagram.com/agromart2023?igshid=NGVhN2U2NjQ0Yg==" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="https://www.linkedin.com/in/agromart-website-996268299?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app&fbclid=IwAR02p6L2PwdwnATuDQrpNdaPYhi6wHKQQ90zyeLSt_Q_bKeW6mg_8zGBPgQ" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </section><!-- End Top Bar -->

  
  <header id="header" class="header d-flex align-items-center">

    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <a href="<?php echo base_url();?>" class="logo d-flex align-items-center">
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
      </nav><!-- .navbar

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i> -->

    </div>
  </header><!-- End Header -->
  <!-- End Header -->
  


<!-- ===== REGISTRATION VIEWS ===== -->


<div class="form-container">
   
      <form method="POST" action="<?= base_url() ?>SellerController/sellerimage" enctype="multipart/form-data">
      <!-- CODE TO DISPLAY MESSAGE -->
      <?php if($this->session->flashdata('Email_Alert')): ?>
          <div style="justify-content: center; height: 35px; display: flex; color: crimson; padding: 1%; font-weight: 500; border:2px solid crimson;">
          <?= $this->session->flashdata('Email_Alert'); ?>
          </div>
        <?php endif; ?><hr>
			<h3 class="text-center">Create Seller Account</h3>
			<div id="ruler" class=""><hr/></div>

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
					<input type="number" name="number" id="number" placeholder="Contact Number" class="form-control" required>
				</div>

				<div class="row">
            <div class="form-group col-lg-6">
              <input type="password" name="password" placeholder="Password" class="form-control" id="pass1" required>
            </div>

            <div class="form-group col-lg-6">
              <input type="Password" name="cpass" placeholder="Confirm Password" class="form-control" id="pass2" required>    
            </div>
        </div>

        <div class="row">
          
          <label>Address:</label>

            <div class="form-group col-lg-6">
              <select id="Shipping" class="form-control" name="txt_Provice" >
                <option value="<?php echo set_value('txt_Provice'); ?>">Select Province</option>
                <option value="Tarlac">Tarlac</option>
               
              </select>
            </div>

            <div class="form-group col-lg-6">
              <select id="Shipping" class="form-control" name="txt_Municipality" >
                <option value="<?php echo set_value('txt_Municipality'); ?>">Select Municipality</option>
                <option value="SanClemente">San Clemente</option>
                <option value="Camiling">Camiling</option>
              </select>
            </div>

            <div class="form-group col-lg-6">
              <select id="Shipping" class="form-control" name="txt_Barangay" >
                <option value="<?php echo set_value('txt_Barangay'); ?>">Select Barangay</option>
                  
                  <option value="Balloc">Balloc</option>
                  <option value="Bamban">Bamban</option>
                  <option value="Casipo">Casipo</option>
                  <option value="Catagudingan">Catagudingan</option>
                  <option value="Daldalayap">Daldalayap</option>
                  <option value="Doclong 1">Doclong 1</option>
                  <option value="Doclong 2">Doclong 2</option>
                  <option value="Maasin">Maasin</option>
                  <option value="Nagsabaran">Nagsabaran</option>
                  <option value="Pit-ao">Pit-ao</option>
                  <option value="Poblacion Norte">Poblacion Norte</option>
                  <option value="Poblacion Sur">Poblacion Sur</option>
                  <option value=""></option>
                  <option value="Anoling 1st">Anoling 1st</option>
                  <option value="Anoling 2nd">Anoling 2nd</option>
                  <option value="Anoling 3rd">Anoling 3rd</option>
                  <option value="Bacabac">Bacabac</option>
                  <option value="Bacsay">Bacsay</option>
                  <option value="Bancay 1st">Bancay 1st</option>
                  <option value="Bilad">Bilad</option>
                  <option value="Birbira">Birbira</option>
                  <option value="Bobon 1st Casarratan">Bobon 1st Casarratan</option>
                  <option value="Bobon 2nd">Bobon 2nd</option>
                  <option value="Bobon Caarosipan">Bobon Caarosipan</option>
                  <option value="Cabanabaan">Cabanabaan</option>
                  <option value="Cacamilingan Norte (with Kipping village)">Cacamilingan Norte (with Kipping village)</option>
                  <option value="Cacamilingan Sur">Cacamilingan Sur</option>
                  <option value="Caniag">Caniag</option>
                  <option value="Carael">Carael</option>
                  <option value="Cayaoan">Cayaoan</option>
                  <option value="Cayasan">Cayasan</option>
                  <option value="Florida">Florida</option>
                  <option value="Lasong">Lasong</option>
                  <option value="Libueg (with sitio Pugo)">Libueg (with sitio Pugo)</option>
                  <option value="Malacampa (With sitio Cacelestinuan and Sitio Camartinisan)">Malacampa (With sitio Cacelestinuan and Sitio Camartinisan)</option>
                  <option value="Manaquem">Manaquem</option>
                  <option value="Manupeg">Manupeg</option>
                  <option value="Marawi">Marawi</option>
                  <option value="Matubog">Matubog</option>
                  <option value="Nagrambacan">Nagrambacan</option>
                  <option value="Nagserialan">Nagserialan</option>
                  <option value="Palimbo Proper">Palimbo Proper</option>
                  <option value="Palimbo Caarosipan">Palimbo Caarosipan</option>
                  <option value="Pao 1st">Pao 1st</option>
                  <option value="Pao 2nd">Pao 2nd</option>
                  <option value="Pao 3rd">Pao 3rd</option>
                  <option value="Papaac">Papaac</option>
                  <option value="Pindangan 1st">Pindangan 1st</option>
                  <option value="Pindangan 2nd">Pindangan 2nd</option>
                  <option value="Pob. A">Pob. A</option>
                  <option value="Pob. B">Pob. B</option>
                  <option value="Pob. C">Pob. C</option>
                  <option value="Pob. D">Pob. D</option>
                  <option value="Pob. E">Pob. E</option>
                  <option value="Pob. F">Pob. F</option>
                  <option value="Pob. G">Pob. G</option>
                  <option value="Pob. H">Pob. H</option>
                  <option value="Pob. I">Pob. I</option>
                  <option value="Pob. J">Pob. J</option>
                  <option value="San Isidro (Bancay 2nd)">San Isidro (Bancay 2nd)</option>
                  <option value="Santa Maria">Santa Maria</option>
                  <option value="Sawat">Sawat</option>
                  <option value="Sinilian 1st (with Sitio Cabalaongan and Nangalisan)">Sinilian 1st (with Sitio Cabalaongan and Nangalisan)</option>
                  <option value="Sinilian 2nd (with Sitio Barikir)">Sinilian 2nd (with Sitio Barikir)</option>
                  <option value="Sinilian 3rd (Northern, Bitawa, Centro)">Sinilian 3rd (Northern, Bitawa, Centro)</option>
                  <option value="Sinilian Cacalibosuan">Sinilian Cacalibosuan</option>
                  <option value="Sinulatan 1st">Sinulatan 1st</option>
                  <option value="Sinulatan 2nd">Sinulatan 2nd</option>
                  <option value="Surgui 1st">Surgui 1st</option>
                  <option value="Surgui 2nd">Surgui 2nd</option>
                  <option value="Surgui 3rd">Surgui 3rd</option>
                  <option value="Tambugan">Tambugan</option>
                  <option value="Telbang">Telbang</option>
                  <option value="Tuec">Tuec</option>
                  <option value="">Others</option>
              </select>
            </div>
            
            <div class="form-group col-lg-6">
                <input type="text" name="txt_Street" id="Street" placeholder="Purok/Zone/Street" class="form-control" <?php echo set_value('txt_Street'); ?> required>
                <small><?php echo form_error('txt_Street');?></small>
            </div>

            <div class="form-group">
              <input type="text" name="OtherAddress" id="OtherAddress" placeholder="Enter Other Address Details" <?php echo set_value('OtherAddress'); ?> class="form-control" required>
              <small><?php echo form_error('OtherAddress');?></small>
            </div>
          
				</div>
      
        <p class="lfind "><button type="button"  onclick="whereAmI()">Find my location</button></p>
        <div id="demo" hidden></div>
          <div id="map" style=" height:200px;"></div>
        </div><br>

        <div class="row">
            <div class="form-group col-lg-6">
                  <input type="text" name="lat" id="lat" placeholder="Location latitude"  <?php echo set_value('txt_Barangay'); ?> required  readonly>
              </div>
              
              <div class="form-group col-lg-6">
                  <input type="text" name="lng" id="lng" placeholder="Location longitude"  <?php echo set_value('txt_Street'); ?> required readonly>
              </div>
        </div>

				<div class="form-group" id="file_container">
          <div class="custom-file">
              <label>Valid ID: </label>
              <input type="file" name="valid_id"  accept="image/*" class="form-control"  placeholder="Upload Photo" required>
              <small><?php echo form_error('user_avtar');?></small>
          </div>

          <div class="custom-file">
              <label>Gcash QrCode:</label>
              <input type="file" name="gcash"  accept="image/*" class="form-control" id="name" placeholder="Upload Photo" required>
              <small><?php echo form_error('user_avtar');?></small>
          </div><br>

          <div class="custom-files">
              <label>Take a Selfie:</label>
              <div id="results"></div>
              <button type="button" class="fcc-btn" id="myBtn">Selfie</button>
              <input type="hidden" name="image" class="image-tag">

              <small><?php echo form_error('user_avtar');?></small>
          </div>
				</div>

        <hr>

        <h4> My Shop </h4>
        
          
        <div class="form-group">
          <input type="text" name="sname" id="sname" placeholder="Shop Name" class="form-control" required>
        </div>

        <div class="form-group">
          <input type="text" name="sdes" id="sdes" placeholder="Shop Description" class="form-control" required>
        </div>


          <div class="form-group">
              <label>Shop Logo:</label>
              <input type="file" name="sphoto"  accept="image/*" class="form-control"  placeholder="Upload Photo" required>
              <small><?php echo form_error('user_avtar');?></small>

              
            <div class="agreement">
              
              <div class="terms" style="max-width: 800px; margin: 0 auto; padding: 20px;">

                <div id="targetDiv" style="display: none;">
                  <h1 style="width:100%; display:flex; justify-content:center;">Terms and Conditions</h1>
                  
                  <p class="par">Welcome to AGROMART! We're delighted to have you on board. Before you dive into the world of the agricultural market, please take a moment to review our Terms and Conditions outlined below.</p>

                  <h2>Introduction and Acceptance of Terms</h2>
                  <p class="par">By using Agromart, you agree to comply with and be bound by these Terms and Conditions. If you do not agree, please do not use the website.</p>

                  <h2>Purpose of Information Collection</h2>
                  <p class="par">Agromart is designed to be an online market that facilitates accurate agricultural products. To achieve this, we collect and display the personal information of users for the purpose of connecting buyers with sellers. As you engage with our platform, we may gather certain types of personal information, including but not limited to your name, contact information, location, and specific details related to your agricultural practices. This information is collected with the sole purpose of enhancing your experience and facilitating accurate agricultural exchange on our platform. Rest assured, we take the security and privacy of your data seriously.</p>

                  <h2>Visibility of Personal Information</h2>
                  <p class="par">Your personal information will be visible to other users of Agromart to facilitate accurate information exchange. It is essential for creating a reliable platform for the agricultural market.</p>

                  <h2>User Responsibilities</h2>
                  <p class="par">You are responsible for the accuracy of the information you provide. False or misleading information may lead to account suspension or termination.</p>

                  <h2>Security Measures</h2>
                  <p class="par">We employ industry-standard security measures to protect your personal information. However, it's important to note that no system is completely foolproof.</p>

                  <h2>Third-Party Access</h2>
                  <p class="par">We may engage third-party service providers for various purposes, including but not limited to data analysis, customer support, and marketing efforts. These third parties will have limited access to your personal information.</p>

                  <h2>Tracking Location</h2>
                  <p class="par">Agromart may use tracking technologies to enhance the user experience. By using our website, you consent to the use of these technologies.</p>

                  <h2>Opt-Out and Deletion of Information</h2>
                  <p class="par">You have the right to request the deletion of your personal information from our database. Please contact us for further assistance.</p>

                  <h2>Legal Compliance</h2>
                  <p class="par">We will cooperate with law enforcement agencies and comply with legal obligations to disclose personal information if required by law.</p>

                  <h2>Updates to Terms and Conditions</h2>
                  <p class="par">Agromart reserves the right to update these Terms and Conditions at any time. We will notify users of any significant changes via email or through a prominent notice on our website.</p>

                  <h2>Contact Us</h2>
                  <p class="par">If you have any questions or concerns about these Terms and Conditions, please contact us at agromart@agromart.tech / +63 951 0598 340.</p>

                  <p class="par">Thank you for being a part of AGROMART! We're excited to have you as a valued member of our agricultural community. Happy trading!</p>

                </div>        
                  <!--div class="termscheckbox">
                    <div class="checkB">
                      <input type="checkbox" name="agree1" id="acceptTerms1" value="agree">
                    </div>
                    <div class="label">
                      <label for="acceptTerms">I have read and agree to the Terms and Conditions</label>
                    </div>
                  </div>

                  <div class="termscheckbox">
                    <div class="checkB">
                      <input type="checkbox" name="agree1"  id="acceptTerms2" value="agree">
                    </div>
                    <div class="label">
                      <label for="acceptTerms">I agree to share my information as part of <span style="font-weight:500;color:#04AA6D;">Data Sharing Agreement</span></label>
                    </div>
                  </div-->
                  <div class="termscheckbox">
                    <div class="checkB">
                      <input type="checkbox" name="agree1" id="acceptTerms1" value="agree">
                    </div>
                    <div class="label">
                      <label for="acceptTerms">I have read and agree to the <a href="#" id="openLink">Terms and Conditions</a></label>
                    </div>
                  </div>

                  <input type="submit" name="submit" id="submitButton" value="submit" class="form-btn" disabled>
                  <h6 class="text-center">Already have an account? <a href="<?php echo base_url('login');?>" style="text-decoration:none;">Login</a></h6>
              </div>
            </div>

          </div>
          
       <!-- <div class="hasAcc">
          <p><i>Please wait for an SMS message for confirmation of your account. Thank you!</i> </p>
					
				</div> -->
		</form>
    <?php echo form_close(); ?>
    <div id="myModal" class="modal">
      
      <!-- Modal content -->
      <div class="modal-content">
        <span class="close">&times;</span>
        <div id="my_camera"></div>
          
        <br/>
        
        <input type="button" class="fcc-btn" value="Take Snapshot" onClick="take_snapshot()">

    </div>
</div>

        



  

</div>
<script>
  // Select the <a> tag and the div
const openLink = document.getElementById("openLink");
const targetDiv = document.getElementById("targetDiv");

// Add a click event listener to the <a> tag
openLink.addEventListener("click", function (e) {
  e.preventDefault();
  toggleDiv();

});
function toggleDiv() {
  if (targetDiv.style.display === "none") {
    targetDiv.style.display = "block"; // Open the div
  } else {
    targetDiv.style.display = "none"; // Close the div
  }
}
    const acceptTerms1 = document.getElementById('acceptTerms1');
   // const acceptTerms2 = document.getElementById('acceptTerms2');
    const submitButton = document.getElementById('submitButton');

    acceptTerms1.addEventListener('change', toggleSubmitButton);
    acceptTerms2.addEventListener('change', toggleSubmitButton);

    function toggleSubmitButton() {
        if (acceptTerms1.checked ) {
            submitButton.disabled = false;
        } else {
            submitButton.disabled = true;
            
        }
    }
    // Alert when submitting without checking checkboxes
    submitButton.addEventListener('click', function (event) {
        if (!acceptTerms1.checked ) {
            alert('Please check the required checkboxes before submitting.');
            event.preventDefault(); // Prevent form submission
        }
    });
</script>
<style type="text/css">
   @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600&display=swap');
/* TO OPEN A DIV */
#targetDiv {
  display: none;
  background-color: white;
  padding: 10px;
  border: 1px solid #008374;
  margin-top: 10px;
}
h1, h2{
  color: #008374;
}
*{
   font-family: 'Poppins', sans-serif;
   margin:0; padding:0;
   box-sizing: border-box;
   outline: none; border:none;
   text-decoration: none;
}
/* Chrome, Safari, Edge, Opera /////////////////////////////////////////////////////////////*/
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

/* Firefox */
input[type=number] {
  -moz-appearance: textfield;
}
.lfind button{
  color: #008374;
  border: 1px solid #008374;
  background-color: none;
  padding: 0;
  width: 100%;
}
.lfind button:hover{
  color: white;
  border: none;
  background-color: #008374;
}

.agreement h4{
  display: flex;
  justify-content: center;
  font-size: 14px;
  background-color: #dddd;
  width: 100%;
  padding: 1%;
  margin: 10px 0px 0px 0px;
}
.terms h1, .terms h2{
  font-size: 12px;
  margin:3px 0px 3px 0px;
  padding: 0;
}
.terms .par{
  font-size: 8px;
}
.termscheckbox{
  display: flex;
  width: 100%;

}
.checkB{  
  width: 10%;
  height: 30px;
  padding: 0;
  margin: 0px 0px 20px 0px ;
}
.label{ 
  height: 30px;
  width: 90%;
  font-size: 14px;
  margin: 5px 0px 0px 0px;
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
   padding:10px;
   border-radius: 5px;
   box-shadow: 0 5px 10px rgba(0,0,0,.1);
   background: #fff;
   width: min(100%, 500px);
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
   font-size: 14px;
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

.form-container form .error-msg{   
   margin:10px 0;
   display: block;
   background: crimson;
   color:#fff;
   border-radius: 5px;
   font-size: 20px;
   padding:10px;
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
   
   /* Modal Content/Box   SA CAMERA NA TO MISMO UNG PAG CAPTURE*/
   .modal-content {
     background-color: #fefefe;
   
     margin: 5% auto; /* 15% from the top and centered */
     margin-top: 0%;
     padding: 10px;
     border: 1px solid #888;
     width: 530px; /* Could be more or less, depending on screen size */
     height: auto;
     top: 20%;
   }
   
   /* The Close Button */
   .close {
     color: #008374;
     float: right;
     font-size: 30px;
     font-weight: 900;
   }
   
   .close:hover,
   .close:focus {
     color: black;
     text-decoration: none;
     cursor: pointer;
   }
   .fcc-btn {
     background-color: white;
     border: 1px solid #008374;
     color: #008374;
     padding: 5px;
     width: 100%;
     text-decoration: none;
   }
   .fcc-btn:hover {
    color: white;
    background-color: #008374;
    border: 1px solid #008374;
   }

   .custom-file{
    width: 100%;
    display: flex;
    justify-self: space-between;
    margin: 10px 0px 12px 0px;
   }
   .custom-file input {
    padding: 5px 0px 5px 0px;
    width: 70%;
   }
   .custom-file label{
    width: 25%;
   }
   #file_container{

    display: block;
    justify-self: space-between;
   }
   #results{
    display: flex;
    justify-content: center;
   }
   .row label, h4, .custom-files label{
      font-size: 18px;
   }
   .hasAcc{
    font-size: 14px;
    text-align: justify;
   }
   .hasAcc i{
    color: red; 
   }

   @media (max-width: 430px) { /**768px */
    #submitButton{
    margin-top: 12px;
   }
    .form-container form{ 
      padding:20px;
      border-radius: 2px;
      box-shadow: 0 2px 5px rgba(0,0,0,.1);
      background: #fff;
      width: min(98%, 600px);
    }
  .form-container form h3{
    font-size: 14px;
    text-transform: uppercase;
    margin-bottom: 2px;
    color:#333;
  }
  .form-container form input,
  .form-container form select{ 
    width: 100%;
    height: 30px;
    padding: 7px 10px;
    font-size: 10px;
    margin: -5px -5px;
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
    font-weight: 500;
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
  
  .custom-file{
    width: 100%;
    display: flex;
    justify-self: space-between;
    margin: 7px 0px 7px 0px;
   }
   .custom-file input {
    width: 300px;
   }
   .custom-file label{
    width: 100px;
    font-size: 12px;
   }
   .modal {
     display: none; /* Hidden by default */
     position: fixed; /* Stay in place */
    
     left: 0;
     top: 0;
     width: 95%; /* Full width */
     height: 100%; /* Full height */
     overflow: auto; /* Enable scroll if needed */
     background-color: rgb(0,0,0); /* Fallback color */
     background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
   }
   .modal-content {
     background-color: #fefefe;
   
     margin: 1% auto; /* 15% from the top and centered */
     margin-top: 0%;
     padding: 5px;
     border: 1px solid #888;
     width: 300px; /* Could be more or less, depending on screen size */

     height: auto;
     top: 20%;
   }
   .custom-files #result{
    width: 100%;
   }
   .row label, h4, .custom-files label{
      font-size: 14px;
   }
   .hasAcc{
    color: red; 
    font-size: 10px;
    text-align: justify;
   }
   .hasAcc i{
    color: red; 
   }
   .hasAcc h6{  
      margin-top: 12px;
      font-size: 12px;
   }
   
  .termscheckbox{
    display: flex;
    width: 100%;
  }
  .checkB{  
    width: 5%;
    height: 15px;
    padding: 0;
    margin: 2px 7px 20px 0px ;
  }
.label{ 
  height: 30px;
  width: 90%;
  font-size: 10px;
  margin: 5px 0px 0px 0px;
}
.text-center{
    margin-top: 12px;
    font-size: 12px;
}
   }
</style>

  <!-- ======= Footer ======= --
  <footer id="footer" class="footer">

    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-info">
          <a href="index.html" class="logo d-flex align-items-center">
            <span>Agromart</span>
          </a>
          <p>A web-based system for agricultural market.</p>
          <div class="social-links d-flex mt-4">
 <a href="https://www.facebook.com/profile.php?id=61552519156175&mibextid=ZbWKwL" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="https://instagram.com/agromart2023?igshid=NGVhN2U2NjQ0Yg==" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="https://www.linkedin.com/in/agromart-website-996268299?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app&fbclid=IwAR02p6L2PwdwnATuDQrpNdaPYhi6wHKQQ90zyeLSt_Q_bKeW6mg_8zGBPgQ" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
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
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/impact-bootstrap-business-website-template/ --
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

        width: 280,
        height: 200,
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
