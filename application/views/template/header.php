<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>MyAccount</title>
  <link rel = "icon"   href = "<?php echo base_url('Impact/');?>assets/img/tlogo.png" 
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

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

  <!-- RATING SYSTEM -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"/>


  <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin=""/>
  <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>

</head>
<style>
      .sls{ 
        display: flex;
        justify-content: start;

      }
    @media (max-width: 768px) {
      .topbar{
        font-size: 12px;
      }
      .container{
        display: flex;
        flex-wrap: wrap;
        justify-content: start;
      }
      .LINKS{
        display: none;
      }
      .sls{
        width: 100%;
        font-size: 12px;
        display: flex;
        justify-content: end;

      }
    }
</style>
<body>
      <!-- ======= Header ======= -->
   <section id="topbar" class="topbar d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">

         <div class="social-links  LINKS">
        <a href="#" class="bi">Follow us on</a>

        <a href="https://www.facebook.com/profile.php?id=61552519156175&mibextid=ZbWKwL" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="https://instagram.com/agromart2023?igshid=NGVhN2U2NjQ0Yg==" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="https://www.linkedin.com/in/agromart-website-996268299?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app&fbclid=IwAR02p6L2PwdwnATuDQrpNdaPYhi6wHKQQ90zyeLSt_Q_bKeW6mg_8zGBPgQ" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>

      <div class="social-links sls">
       <?php if($this->session->has_userdata('authenticated')){ ?>
          <i><a  href="<?php echo base_url('editMyAccount/'. $this->session->userdata('auth_user')['user_id']); ?>"><strong>
                  <?= $this->session->userdata('auth_user')['fname']; ?>
                  <?= $this->session->userdata('auth_user')['lname']; ?>
          </strong></a></i>
          <i class="bi d-flex align-items-center ms-4">|</i>
        <i class="bi d-flex align-items-center ms-4">
            <a href="<?php echo base_url('logout'); ?>"><span>Log out</span></a>
          </i>
      <?php }else{ ?>
        <i class="bi  d-flex align-items-center">
          <a href="<?php echo base_url('register'); ?>">Sign Up</a>
        </i>
         <i class="bi d-flex align-items-center ms-4">|</i>
        <i class="bi d-flex align-items-center ms-4">
            <a href="<?php echo base_url('login'); ?>"><span>Login</span></a>
        </i>
        <?php } ?>
       
      </div>
    </div>
  </section><!-- End Top Bar -->
  <!-- ======= Header ======= --
  <section id="topbar" class="topbar d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">

      <div class="social-links d-none d-md-flex align-items-center">
        <a href="<?php echo base_url('Seller'); ?>">Start Selling</a>
        <a>|</a>
        <a href="#" class="bi">Follow us on</a>
        <a href="register.php" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="register.php" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="register.php" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="register.php" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>

      <div class="social-links d-none d-md-flex align-items-center">
      <?php if($this->session->has_userdata('authenticated')){ ?>
          <i><a  href="<?php echo base_url('editMyAccount/'. $this->session->userdata('auth_user')['user_id']); ?>"><strong>
                  <?= $this->session->userdata('auth_user')['fname']; ?>
                  <?= $this->session->userdata('auth_user')['lname']; ?>
          </strong></a></i>
          <i class="bi d-flex align-items-center ms-4">|</i>
        <i class="bi d-flex align-items-center ms-4">
            <a href="<?php echo base_url('logout'); ?>"><span>Log out</span></a>
          </i>
      <?php }else{ ?>
        <i class="bi  d-flex align-items-center">
          <a href="<?php echo base_url('register'); ?>">Sign Up</a>
        </i>
        <i class="bi d-flex align-items-center ms-4">
            <a href="<?php echo base_url('login'); ?>"><span>Login</span></a>
        </i>
        <?php } ?>
      </div>
    </div>
  </section><!-- End Top Bar -->

<header id="header" class="header d-flex align-items-center">
 
 <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
  <?php if($this->session->has_userdata('authenticated')){ ?>
   <a href="<?php echo base_url('userpage');?>" class="logo">
     <h1>Agromart<span><img src="<?php echo base_url('Impact/');?>assets/img/Logoo.png" class="img-fluid" alt="" style="height: 200px; width:60px;"></span></h1>
   </a>
  <?php }else{?>
    <a href="<?php echo base_url('');?>" class="logo">
     <h1>Agromart<span><img src="<?php echo base_url('Impact/');?>assets/img/Logoo.png" class="img-fluid" alt="" style="height: 200px; width:60px;"></span></h1>
   </a>
  <?php }?>
   <nav id="navbar">
     <ul>
      <li>
        <div class="search-bar" style="display: flex;justify-content: space-between;">
            <!--
            <input class="searchInput" type="text" id="searchInput" placeholder="Sign Up and experience our exclusive features">
            <button class="searchBtn" type="button" id="searchButton">Search</button>
            -->
            <form action="<?php echo base_url('perform_search');?>" method="post">
                <input class="searchInput" type="text" name="keyword" placeholder="Search products...">
                <input class="searchBtns" id="searchButton" type="submit" value="Search" Style="width:70px;" >
            </form>
            <?php if($this->session->has_userdata('authenticated')){ ?>
                <a href="<?php echo base_url('myCart/'. $this->session->userdata('auth_user')['user_id']); ?>" ><img style="width:70px; height:55px;" src="<?= base_url('Impact/icons/Lcart.png')?>"></a>
            <?php }else{?>
              <button onclick="showCustomAlert()" style="background-color:transparent;"><img style="width:70px; height:55px;" src="<?= base_url('Impact/icons/Lcart.png')?>"></button>
            <?php }?>
        </div>
      </li>
     </ul>
   </nav><!-- .navbar -->

   <!--<i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
   <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>-->

 </div>

</header><!-- End Header -->
<!-- End Header -->

     <!-- Custom alert dialog -->
     <div id="customAlert" class="custom-alert">
        <p class="exits" onclick="closeCustomAlert()">x</p>
        <h2>Oopss..!</h2>
        <p>Haven't log in yet.</p>
        <p>You may click log in button if you have already an account and sign up if not.</p>
        <div class="btsRL">
          <button class="btnsRL"><a href="<?php echo base_url('register'); ?>">Sign Up</a></button>
          <button class="btnsRL"><a href="<?php echo base_url('login'); ?>">Log in</a></button>
        </div>
    </div>
    
      <script>
        function showCustomAlert() {
            document.getElementById('customAlert').style.display = 'block';
        }
        function closeCustomAlert() {
            document.getElementById('customAlert').style.display = 'none';
        }
    </script>

<style>
    .btsRL{
      width: 100%;
      display: flex;
      justify-content: space-evenly;
    }
    .exits{
      width:100%; 
      display:flex; 
      justify-content:end; 
      cursor:pointer;
    }
    .btnsRL a, .btnsRL{
      color: WHITE;
      background-color: #008374;
      border: 1px solid #008374;
      font-weight: 500;
    }
    .btnsRL a:hover, .btnsRL:hover{
      color: #008374;
      background-color: #ffff;
      border: 1px solid #008374;
    }
    .btnsRL a:hover{
      border: 1px solid white;
    }
    .exits:hover{
      color: #008374;
    }
    .custom-alert {
      display: none;
      position: fixed;
      top: 40%;
      left: 50%;
      transform: translate(-50%, -50%);
      background: white;
      padding: 20px;
      z-index: 999;
      box-shadow: 4px 4px 8px #008374; 
      border-radius: 5px;
      width: 90%;
    }
    .btns{
      display: flex;
      justify-content: start;
      gap: 40px;
      height: 10px;
      margin-bottom: 3%;
    }
    .btn {
      border: none; 
      background-color: none;
      cursor: pointer;
      font-weight: 700;
      font-size: 12px;
      color: white;
    }
    .btn.active {
      color: black;
    }
    .search-bar{
      display: flex;
      justify-content: start;
      width: 800px;
      margin-top: 5%;
    }
    .search-bar input{
      margin-top: 5px;
      width: 500px;
      height: 40px;
      font-size: 14px;

    }
    .searchBtns{
      margin-top: 5px;
      width: 50px;
      height: 40px;
      color: #FFFF;
      background-color: #008374;
      font-weight: 500;
      border: 1px solid grey;
    }
    .searchBtns:hover{
      background-color: #FFFF;
      border: 1px solid #008374;
      color: #008374;
    }


    .Cats{
      margin: 0% 2.5% 0% 2.5%;
      border-radius: 12px;
      width: min(300rem, 95%);
      box-shadow: 0px 0px 30px rgba(127, 137, 161, 0.25);
    }
    .categories h4{
      margin-left: 12px;
      margin-top: 0;
    }

    .table{
      cursor: pointer;
      flex-wrap: wrap;
    }
    .td{
      font-size: 16px;
    }
    .td:hover{
      color: #008374;
    }

    /* Add media query for mobile devices */
    @media (max-width: 768px) {
      .search-bar {
          width:100%; /* Make the search bar full width on smaller screens */
          height: 30px;
          flex-direction: row; /* Stack search input and button vertically */
          align-items: center; /* Center-align search input and button */
          margin-top: auto; /* Adjust margin for spacing */
      }

      .search-bar input {
        height: 30px;
        width: 100px; /* Make the input full width */
          font-size: 12px;
          margin-bottom: 1%; /* Add some spacing between input and button */
      }

      .searchBtn {
          height: 35px;
          width: 50px; /* Make the button full width */
      }

      .btns {
          display: flex;
          flex-wrap: wrap; /* Allow buttons to wrap to the next line */
          justify-content: center; /* Center-align buttons */
          gap: 10px; /* Adjust spacing between buttons */
          margin-bottom: 3%; /* Adjust margin for spacing */
      }
      .header .logo img {
      
        padding: 0;
        max-height: auto;
        width: min(100%, 50px);
        mix-blend-mode: multiply;
      }

      .header .logo h1 {
        font-size: 20px;
        margin: 0;
        font-weight: 400;
        letter-spacing: 0.3px;
        color: #fff;
        font-family: var(--font-primary);
      }
    }


    /* Data*/
#map { height: 400px; }
</style>
