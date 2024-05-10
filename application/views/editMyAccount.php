<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>MyAccount</title>
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
        <i class="bi  d-flex align-items-center">
            <a href="<?php echo base_url('editMyAccount/'. $this->session->userdata('auth_user')['user_id']); ?>">
                <?php if($this->session->has_userdata('authenticated')){ ?>
                  <strong>
                  <?= $this->session->userdata('auth_user')['fname']; ?>
                  <?= $this->session->userdata('auth_user')['lname']; ?>
                  </strong>
                <?php } ?>
            </a>
        </i>
        <i class="bi  d-flex align-items-center">
          <a>|</a>
        </i>
        <i class="bi  d-flex align-items-center">
          <a href="<?php echo base_url('logout'); ?>"><span>Log out</span></a>
        </i>
       
      </div>
    </div>
  </section><!-- End Top Bar -->




<header id="header" class="header d-flex align-items-center">
 
 <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
   <a href="<?php echo base_url('userpage');?>" class="logo d-flex align-items-center">
     <h1>Agromart<span><img src="<?php echo base_url('Impact/');?>assets/img/Logoo.png" class="img-fluid" alt="" style="height: 200px; width:60px; "></span></h1>
   </a>
   <nav id="navbar">
     <ul>
      <li style="display: flex; box-sizing: border-box;">
        <div class="search-bar">
            <!--
            <input class="searchInput" type="text" id="searchInput" placeholder="Sign Up and experience our exclusive features">
            <button class="searchBtn" type="button" id="searchButton">Search</button>
            -->
            <form action="<?php echo base_url('perform_search');?>" method="post">
                <input class="searchInput" type="text" name="keyword" placeholder="Enter your search keyword">
                <input class="searchBtn" id="searchButton" type="submit" value="Search" Style="width:70px;" >
              
            </form>
             
            
           
        </div>
         <a  href="<?php echo base_url('myCart/'. $this->session->userdata('auth_user')['user_id']); ?>" style="" ><img style="width:70px; height:55px;margin-top: 15px;" src="<?= base_url('Impact/icons/Lcart.png')?>"></a>
         
      </li>
     </ul>
   </nav><!-- .navbar -->

 </div>

</header><!-- End Header -->
<!-- End Header -->

<style>
    .search-bar{
      display: flex;
      justify-content: start;
      width: 800px;
      margin-top: 2%;
      padding: 2%;
    }
    .search-bar input{
      margin-top: -22px;
      width: 500px;
      height: 40px;
      font-size: 14px;
    }
    .searchBtn{
      margin-top: 5px;
      height: 40px;
      color: #FFFF;
      background-color: #008374;
      font-weight: 500;
    }
    .searchBtn:hover{
      background-color: #FFFF;
      border: 1px solid #008374;
      color: #008374;
    }

    /* Add media query for mobile devices */
    @media (max-width: 768px) {
      .search-bar {
          width:90%; /* Make the search bar full width on smaller screens */
          height: 30px;
          flex-direction: row; /* Stack search input and button vertically */
          align-items: center; /* Center-align search input and button */
          margin-top: auto; /* Adjust margin for spacing */
      }

      .search-bar input {
        height: 30px;
        width: 150px; /* Make the input full width */
          font-size: 12px;
          margin-bottom: 1%; /* Add some spacing between input and button */
      }

      .searchBtn {
          height: 35px;
          width: 50px; /* Make the button full width */
      }
      .header .logo img {

        padding: 0;
        height: 30px;
        width: 30px;
        /*mix-blend-mode: multiply; */
      }

      .header .logo h1 {
        font-size: 17px;
        margin: 0;
        font-weight: 700;
        letter-spacing: 0.3px;
        color: #fff;
        font-family: var(--font-primary);
      }
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
          width: 100%; /* Make the search bar full width on smaller screens */
          flex-direction: column; /* Stack search input and button vertically */
          align-items: center; /* Center-align search input and button */
          margin-top: 2%; /* Adjust margin for spacing */
      }

      .search-bar input {
          width: 100%; /* Make the input full width */
          margin-bottom: 1%; /* Add some spacing between input and button */
      }

      .searchBtn {
          width: 100%; /* Make the button full width */
      }
    }

</style>


<body class="body">

      
    
<style>
  table, tr, td{ 
    padding-left: 4rem;
    margin-right: 50px;
    font-size: 14px;
  }
  tr{
    padding: 1.5%;
  }
  #MyProfile{
    padding: 1%;
  }
  .label{
    padding: 0;
    display: flex;
    justify-content: end;
    flex-wrap: wrap;
    border: none;
    margin-left: 100px;
    margin-right: 0;
    margin-top: 15px;
  }
.infoUser{
  display: flex;
  justify-content: center;
  flex-wrap: wrap;
}
ul li{
  font-size: 15px;
}
.custom-file img{
  width: 200px;
  height: 200px;
  padding: 2px;
}
td button{
  color: #f85a40; 
  text-decoration:underline; 
  border:none; 
  background: none;
}
@media (max-width: 768px) {
  .infoUser{
    padding: 0;
    margin: 0;
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
  }
  table, tr, td{
    padding: 0;
    margin: 0;
    display: flex;
    justify-content: center;
    font-size: 12px;
  }
  table{
    display: flex;
    justify-content: center;
  }
  tr{
    padding: 10px;
  }
  td{
    padding: 0;
    margin: 0;
  }
  ul li{
    font-size: 12px;
  }
  #MyProfile{ 
    padding: 1%;
  }
  #MyProfile h6{ 
    font-size: 16px;
  }
  #MyProfile p{ 
    font-size: 14px;
  }
  .custom-file{
    text-align: center;
  }
  .custom-file img{
    width: 130px;
    height: 130px;
    margin: 0px 150px 10px 150px;
  }
  .form-control{
    height: 30px;
    font-size: 12px;
    width: 150px;
  }
  .label{ 
    padding: 1%;
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
    border: none;
    margin-left: 0;
    margin-right: 50px;
    margin-top: 0;
    width: 100px;
  }
  td button{
    justify-content: end;
    color: #f85a40; 
    text-decoration:underline; 
    border:none; 
    background: none;
  }  
  .addresss{
    display: block;
    justify-content: space-between;
    padding: 10px 0px 10px 0px;
  }
  #adrs{
    margin: 20px;
  }
  #adrs input{
    width: 150px;
  }
  .adrsInfo li{
    font-size: 14px;
  }

}
</style>
  <div id="main" class="main" >


    <!--==== MyAccount ===== -->
    <div id="MyAccount" class="tabcontent" style="display:block;">
    <form action="<?= base_url('updated/Info/'.$info->unique_id ); ?>" method="post" enctype="multipart/form-data">
      <!-- ======= MyProfile ======= -->
      <section id="MyProfile" class="pricing sections-bg">
        <h6 style="width:100%;display:flex; justify-content:center;">My Profile</h6>
        <p style="width:100%;display:flex; justify-content:center;">Manage and protect your account</p>
        <!-- use code to display set_flashdata message in controllers-->
        <?php if($this->session->flashdata('status')): ?>
          <div class="form-btn" style="justify-content: center; height: 35px; display: flex; color: crimson; padding: 1%; font-weight: 500;">
          <?= $this->session->flashdata('status'); ?>
          </div>
        <?php endif; ?><hr>
        
        <div class="infoUser">
          <table>
            <tr>
              <td></td>
              <td></td>
              <td></td>
              <td><button type="submit" name="p_update"   style="color: #f85a40; text-decoration:underline; border:none; background: none;">Update</button></td>
            </tr>
            <tr>
              <td  rowspan="6">
                <div class="custom-file">
                  <img src="<?= base_url('/upload/selfie/'. $info->user_avtar ); ?>" alt="Product Image">  <br>File extension: .JPEG, .PNG, .JPG <BR>
                  <br><label>Upload New Photo:</label>
                  <input type="hidden" name="old_user_avtar" value="<?= $info->user_avtar; ?>">
                  <input type="file" name="user_avtar" id="name" placeholder="Upload New Photo">
                </div>
              </td>
            </tr>
            <tr>
              <td class="label">Email:</td>
              <td><input type="text" name="email" value="<?= $info->email; ?>" class="form-control"required></td>
            </tr>
            <tr>
              <td class="label">Password:</td>
              <td><input type="text" name="password" value="<?= $info->password; ?>" class="form-control"required></td>
            </tr>
            <tr>
              <td class="label">First Name:</td>
              <td><input type="text" name="fname" value="<?= $info->fname; ?>" class="form-control"required></td>
            </tr>
            <tr>
              <td class="label">Last Name:</td>
              <td><input type="text" name="lname" value="<?= $info->lname; ?>" class="form-control"required></td>
            </tr>

            <tr>
              <td class="label">Number:</td>
              <td><input type="text" name="number" value="<?= $info->number; ?>" class="form-control"required></td>
            </tr>
          </table>
        </div><hr>
      </section><br>
      </form>

        
      <form action="<?= base_url('updated/Address/'.$info->unique_id ); ?>" method="post" enctype="multipart/form-data">
      <section id="MyAddress" class="pricing sections-bg" >
        <h6 style="display:flex; justify-content:center;">My Delievery Address</h6>
        <p style="width:100%;display:flex; justify-content:center;">Manage and protect your address</p>
         
          <?php if($this->session->flashdata('Address')): ?>
            <div class="form-btn" style="justify-content: center; height: 35px; display: flex; color: crimson; padding: 1%; font-weight: 500;">
            <?= $this->session->flashdata('Address'); ?>
            </div>
          <?php endif; ?>
          <hr><div style="width:100%; display:flex; justify-content:center;">
            <ul class="adrsInfo">
              <li><span style="font-weight: 500;"></span><b><?= $info->fname; ?> <?= $info->lname; ?></b></span> | <?= $info->number; ?></li>
              <li><?= $info->Street ; ?></li>
              <li><?= $info->Provice; ?>, <?= $info->Municipality; ?>, <?= $info->Barangay; ?></li>
              <li><?= $info->OtherAddress; ?></li>
            </ul>
        </div><hr>

        <div style="width:100%; display:flex; justify-content:center;">
            <table>
              <tr>
                <td colspan="4"><span style="display:flex; justify-content: end;color: #f85a40; text-decoration:underline;"><button type="submit" name="p_update"  style="color: #f85a40; text-decoration:underline; border:none; background: none;">Update Delievery Address</button></span></td>
              </tr>
              <tr>
                <td>Street:<input type="text" name="Street" value="<?= $info->Street; ?>" class="form-control"required></td>
              </tr>
              <tr class="addresss">
                <td id="adrs">Provice: <input type="text" name="Provice" value="<?= $info->Provice; ?>" class="form-control" required></td> 
                <td id="adrs">Municipality: <input type="text" name="Municipality" value="<?= $info->Municipality; ?>" class="form-control" required></td>
                <td id="adrs">Barangay: <input type="text" name="Barangay" value="<?= $info->Barangay; ?>" class="form-control" required></td>
              </tr>
              <tr>
              <td>OtherAddress: <input type="text" name="OtherAddress" value="<?= $info->OtherAddress; ?>" class="form-control"required></td>
              </tr>
            </table>
        </div>

      </section><br>
      </form>



    </div><!-- ==== CLOSE HOME TABLINKS ===== -->


       

<script>
  /* JR FOR PURCHASE */
function openCity(cityName, button) {
  var i;
  var x = document.getElementsByClassName("city");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  document.getElementById(cityName).style.display = "block";  

  // Remove the w3-active class from all buttons
  var buttons = document.getElementsByClassName("w3-button");
  for (i = 0; i < buttons.length; i++) {
    buttons[i].classList.remove("w3-active");
  }

  // Add the w3-active class to the clicked button
  button.classList.add("w3-active");
}

/* JS FOR SIDEBAR */
  /* Set the width of the sidebar to 250px and the left margin of the page content to 250px */
  var clickCount = 0;
  function openNav() {
  var i = event.buttons;
    if(clickCount == 0) {
    document.getElementById("mySidebar").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
    clickCount = 1;
    } else if(clickCount == 1) {
    document.getElementById("mySidebar").style.width = "0";
    document.getElementById("main").style.marginLeft = "0";
    clickCount = 0;
    }
  }


  function openLoanManagement(evt, Open) {
  // Declare all variables
  var i, tabcontent, tablinks;

  // Get all elements with class="tabcontent" and hide them
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  //document.getElementById(evt).style.display = "block"; 

  // Get all elements with class="tablinks" and remove the class "active"
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  // Add the w3-active class to the clicked button
  //button.classList.add("tablinks");

  // Show the current tab, and add an "active" class to the link that opened the tab
  document.getElementById(Open).style.display = "block";
  evt.currentTarget.className += " active";
}
</script>
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>
<style>
  thead{
    font-weight: 700;
  }
/* for admin pamel*/
/* The sidebar menu */
.sidebar {
  height: 100%; /* 100% Full-height */
  width: 0; /* 0 width - change this with JavaScript */
  position:absolute;  /* Stay in place */
  z-index: 1; /* Stay on top */
  top: 0;
  left: 0;
  background-color: #008374; /* Black*/
  overflow-x: hidden; /* Disable horizontal scroll */
  padding-top: 60px; /* Place content 60px from the top */
  transition: 0.1s; /* 0.5 second transition effect to slide in the sidebar */
  padding-top: 10%;
  display: block;
  color:White;
}
.sidebar .tablinks{
  background-color: #008374;
  border: 2px solid #008374;
  width: 240px;
  padding: 20px;
  margin-bottom: 12px;
  margin-left: 5px;
  font-size: 18px;
  font-weight: 500;
  color:White;
  font-weight: 600;
}

/* When you mouse over the navigation links, change their color */
.sidebar .tablinks:hover {
  color: #f85a40;
  border: 2px solid #f85a40;
}
.sidebar .tablinks:focus,
.sidebar .tablinks:active,
.sidebar .active{
  color: White;
  border: 2px solid #f85a40;
}
/* Position and style the close button (top right corner) */
.sidebar .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

/* The button used to open the sidebar */
.openbtn {
  font-size: 20px;
  cursor: pointer;
  background-color: #008374;
  color: white;
  padding: 10px 15px;
  border: none;
}

.openbtn:hover {
  background-color: #f85a40;
}

/* Style page content - use this if you want to push the page content to the right when you open the side navigation */
#main {
  transition: margin-left .5s; /* If you want a transition effect */
  padding: 20px;
}

/* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
@media screen and (max-height: 450px) {
  .sidebar {padding-top: 15px;}
  .sidebar a {font-size: 18px;}
}

/* ===== CSS FOR MY PURCHASE ===== */
.w3-container{
  height: 330px;
  overflow: scroll;
}
#status{
    display:flex; 
    justify-content:center;
    height: 50px;
    margin: 0% .5% 0% .5%;
  }
  #status .w3-button {
    margin: 0% .2% 0% .2%;
    width: 500px;
    background-color: #008374;
    border: 3px solid #008374;
    color: white;
    font-weight: 600;
  }
   /* Active button styles */
   #status .w3-button:focus,
   #status .w3-button:active,
   #status .w3-button.w3-active { /* Added w3-active class */
    background-color: #f85a40; /* Change to your desired active background color */
  }
  #status  .w3-button:hover{
    margin: 0% .2% 0% .2%;
    width: 500px;
    border: 3px solid #f85a40;
    font-weight: 600;
  }
</style>
</html>
<style>

    .navbar ul li a{
      font-family: sans-serif, serif;
      color: #FFFF;
    }

    .section-header{
      font-weight:700;
      text-shadow: 2px 2px 4px #FFFFF;
      padding: 12px;
    }

  </style>