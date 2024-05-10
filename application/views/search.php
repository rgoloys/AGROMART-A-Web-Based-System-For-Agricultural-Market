<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Agromart</title>
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

<body>
  <!-- ======= Header ======= -->
  <section id="topbar" class="topbar d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">

      <div class="social-links d-none d-md-flex align-items-center">
        <a href="<?php echo base_url('Seller'); ?>">Start Selling</a>
        <a>|</a>
     
     
        <a href="https://www.facebook.com/profile.php?id=61552519156175&mibextid=ZbWKwL" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="https://instagram.com/agromart2023?igshid=NGVhN2U2NjQ0Yg==" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="https://www.linkedin.com/in/agromart-website-996268299?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app&fbclid=IwAR02p6L2PwdwnATuDQrpNdaPYhi6wHKQQ90zyeLSt_Q_bKeW6mg_8zGBPgQ" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
     
      </div>

      <div class="social-links d-none d-md-flex align-items-center">
      <?php if($this->session->has_userdata('authenticated')){ ?>
          <i><a href=""><strong>
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
   <a href="<?php echo base_url('userpage');?>" class="logo d-flex align-items-center">
     <h1>Agromart<span><img src="<?php echo base_url('Impact/');?>assets/img/Logoo.png" class="img-fluid" alt="" style="height: 200px; width:60px;"></span></h1>
   </a>
   <?php }else{ ?>
    <a href="<?php echo base_url('#');?>" class="logo d-flex align-items-center">
     <h1>Agromart<span><img src="<?php echo base_url('Impact/');?>assets/img/Logoo.png" class="img-fluid" alt="" style="height: 200px; width:60px;"></span></h1>
   </a>
   <?php }?>
   <nav id="navbar">
     <ul>
      <li>
        <div class="search-bar" style=" display:flex;justify-content:space-between;">
            <form action="<?php echo base_url('perform_search');?>" method="post">
                <input class="searchInput" type="text" name="keyword" value="<?php echo $key?>" placeholder="Search products...">
                <input class="searchBtn" id="searchButton" type="submit" value="Search" Style="width:70px;" >
            </form>
            <?php if($this->session->has_userdata('authenticated')){ ?>
            <a href="<?php echo base_url('myAccount/'. $this->session->userdata('auth_user')['user_id']); ?>" style="display:flex; justify-content:end;"><img style="width:70px; height:55px;" src="<?= base_url('Impact/icons/Lcart.png')?>"></a>
            <?php }else{ ?>
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


  <style>
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
      margin-top: 1%;
    }
    .search-bar input{
      margin-top: 5px;
      width: 500px;
      height: 40px;
      font-size: 14px;
    }
    .searchBtn{
      margin-top: 5px;
      width: 50px;
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


    .Cats{
      margin: 2% 2.5% 0% 2.5%;
      border-radius: 12px;
      width: min(300rem, 95%);
      box-shadow: 1px 1px 30px rgba(127, 137, 161, 0.25);
      padding: 15px;
    }
    .categories h4{
      margin-left: 12px;
      margin-top: 0;
    }
    .categories{
      flex-wrap: wrap;
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
    .td img{
      width: 50px;
      height: 50px;
    }

    /* Add media query for mobile devices */
    @media (max-width: 768px) {
      .categories h4{
        margin-left: 8px;
        margin-top: 0;
        font-size: 14px;
      }
      .categories{
        flex-wrap: wrap;
      }
      .table{
        cursor: pointer;
        flex-wrap: wrap;
      }
      .td img{
        width: 25px;
        height: 25px;
      }
      .td{
        font-size: 12px;
      }
      
      .search-bar {
          width: 100%; /* Make the search bar full width on smaller screens */
          flex-direction: row; /* Stack search input and button vertically */
          align-items: center; /* Center-align search input and button */
          margin-top: 2%; /* Adjust margin for spacing */
      }

      .search-bar input {
          width: 50%; /* Make the input full width */
          margin-bottom: 1%; /* Add some spacing between input and button */
      }

      .searchBtn {
          width: 100%; /* Make the button full width */
      }

      .btns {
          display: flex;
          flex-wrap: wrap; /* Allow buttons to wrap to the next line */
          justify-content: center; /* Center-align buttons */
          gap: 10px; /* Adjust spacing between buttons */
          margin-bottom: 3%; /* Adjust margin for spacing */
      }      
      .btn{
        display: none;
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


  <!-- ======= Hero Section ======= --
  <section id="hero" class="Cats">
  <div class="categories">
    <h4>Categories</h4>
    <table class="table">
      <tr class="tr">
        <td class="td" onclick="filterSelection('CropProduction')"><img src="<?= base_url('Impact/icons/wheat.png')?>">Crop Products</td>
        <td class="td" onclick="filterSelection('Livestock')"><img src="<?= base_url('Impact/icons/livestock.png')?>">Livestock</td>
        <td class="td" onclick="filterSelection('Fertilizer')"><img src="<?= base_url('Impact/icons/fertilize.png')?>">Fertilizer</td>
        <td class="td" onclick="filterSelection('Others')"><img src="<?= base_url('Impact/icons/other.png')?>">Others</td>
      </tr>
      <tr class="tr">
        <td class="td" onclick="filterSelection('Vegetables')"><img src="<?= base_url('Impact/icons/vegetable.png')?>">Vegetables</td>
        <td class="td" onclick="filterSelection('Beef')"><img src="<?= base_url('Impact/icons/cow.png')?>">Beef</td>
        <td class="td" onclick="filterSelection('OrganicFertilizer')"><img src="<?= base_url('Impact/icons/fertilizer.png')?>">Organic fertilizer</td>
        <td class="td" onclick="filterSelection('Feeds')"><img src="<?= base_url('Impact/icons/pet-food.png')?>">Feeds</td>
      </tr>
      <tr class="tr">
        <td class="td" onclick="filterSelection('Fruits')"><img src="<?= base_url('Impact/icons/fruit.png')?>">Fruits</td>
        <td class="td" onclick="filterSelection('Pork')"><img src="<?= base_url('Impact/icons/pig.png')?>">Pork</td>
        <td class="td" onclick="filterSelection('Non-organicFertilizer')"><img src="<?= base_url('Impact/icons/npk.png')?>">Non-Organic</td>
        <td class="td" onclick="filterSelection('Vitamins')"><img src="<?= base_url('Impact/icons/pills-bottle.png')?>">Vitamins</td>
      </tr>
      <tr class="tr">
        <td class="td" onclick="filterSelection('RootCrops')"><img src="<?= base_url('Impact/icons/harvester.png')?>">Root crops</td>
        <td class="td" onclick="filterSelection('Chicken')"><img src="<?= base_url('Impact/icons/chicken.png')?>">Chicken</td>
        <td class="td" onclick="filterSelection('OrganicPesticide')"><img src="<?= base_url('Impact/icons/pesticide.png')?>">Pesticides</td>
        <td class="td" onclick="filterSelection('Cage')"><img src="<?= base_url('Impact/icons/pet-carrier.png')?>">Cage</td>
      </tr>
    </table>
  </div>
  <!--
  <div class="data" style="outline:1px solid red;">
    <div class="content-data">
      <div class="chart">
        <div id="map"></div>
      </div>
    </div>
  </div>--
</section>
  <!-- End Hero Section -->
  

  <main id="main">


    <!-- section style="width:100%; margin:0;">
      <h5 style="margin:0px 0px 0px 30px;">TOP PRODUCT</h5>
      <div class="TOPPROD" style="margin:0; display:flex; justify-content:space-evenly; flex-wrap: wrap;">
      <?php foreach($TopProductIds as $key => $TopProductIds): ?>
        <ul>
          <li>
            <hr>
            <div class="tops">
              <div class="imgTop">
                <img src="<?php echo base_url('upload/images/'. $TopProductIds['img'])?>">
              </div>
              <div class="contentTop">
                <p style="font-size: 14px; color: black;">Total sales (<?= $TopProductIds['value']; ?>)
                  <br><span style="color:#008374; font-size:18px;"><b><?= $TopProductIds['title']; ?></b></span>
                </p>
              </div>
            </div><hr>
          </li>
        </ul>
        <?php endforeach ?>
      </div>
    </section>


    <style>
      *{
        margin: 0;
        padding: 0;
      }
      ul li{
        margin: 0;
        text-decoration: none;
        list-style: none;
      }
      .imgTop{
        width: 150px;
        height: 150px;
      }
      .imgTop img{
        width: 150px;
        height: 150px;
      }
      .tops{
        margin: 0;
        display: block;
        justify-content: center;
        flex-wrap: wrap;
        width: 150px;
        height: 200px;
        box-shadow: 0px 0px 30px rgba(127, 137, 161, 0.25);
      }
      .contentTop{
        background-color: white;
      }
    </style>
-->






 <!-- ======= Portfolio Section ======= -->
 <section id="portfolio" class="portfolio sections-bg">
    
    <div class="eth5">
      <h5>PRODUCT DISCOVERY</h5>
    </div>
       
    
      <div class="ConProd row gy-4 prodContainer myBtnContainer">

            <?php foreach ($results as $result): ?>
             <!--manipulate tables-->
             <div style="width:175px; height:250px;" class=" prodContainer filterDiv portfolio-item filter-app<?php echo base_url($result['id']);?> <?php echo base_url($result['p_category']);?> <?php echo base_url($result['subCategory']);?>">
                
                <div class="card" class="filterDiv prodContainer myBtnContainer pordItem filter-app<?php echo base_url($result['p_category']);?> <?php echo base_url($result['subCategory']);?>">
                  <div class="imgcard">
                    <a href="<?php echo base_url('productDetails/'. $result['id']);?>">
                      <img src="<?php echo base_url('/upload/images/'. $result['image1']); ?>" alt="">
                    </a>
                    <?php if($result['p_shipping'] == 0) {?>
                      <p><img src="<?php echo base_url('Impact/icons/free.png')?>" alt="Overlay Image" class="overlay"></p>
                    <?php } else {?>
                      <p style="flex"><img src="<?php echo base_url('Impact/icons/speed-limit.png')?>" alt="Overlay Image" class="overlay1"> 
                      <img src="<?php echo base_url('Impact/icons/shipping.png')?>" alt="Overlay Image" class="overlay"></p>
                    
                    <?php }?>
                  </div>
                
                
                  <div class="prodName">
                  
                  <?php if($this->session->has_userdata('authenticated')){ ?>
                    <p class="prd_title">
                      <a href="<?php echo base_url('productDetails/'. $result['id']);?>">
                        <b>
                        <?php $string = $result['p_title']; ?>
                        <?php $string = word_limiter($string, 5); ?>
                        <?php echo $string; ?>
                        <?php $string = $result['p_description']; ?>
                        <?php $string = word_limiter($string, 5); ?>
                        <?php echo $string; ?>
                        </b>
                      </a> 
                    </p> 
                  <?php }else{ ?>
                    <p class="prd_title">
                      <a href="#">
                        <b>
                        <?php $string = $result['p_title']; ?>
                        <?php $string = word_limiter($string, 5); ?>
                        <?php echo $string; ?>
                        <?php $string = $result['p_description']; ?>
                        <?php $string = word_limiter($string, 5); ?>
                        <?php echo $string; ?>
                        </b>
                      </a> 
                    </p> 
                  <?php }?>
                  
                    <p style="font-size:12px; color:blue; margin-bottom:0;"><?= $result['p_category']; ?>><?= $result['subCategory']?></p>
                    <p class="adr"><?php echo $result['p_address']; ?></p>
                  </div>
                  <div class="prodPrice">
                    <p><b>₱</b><span><?php echo $result['p_price']; ?></span></p>
                  </div>
                <!--  <a class="buyNow" href="<?php echo base_url('productDetails/'. $result['id']);?>">Buy Now</a>-->
                </div>
              </div><!-- End Portfolio Item -->
              <?php endforeach; ?>
          </div><!-- End Portfolio Container -->
          

        </div>
    </section><!-- End Portfolio Section -->


          <!-- Display pagination links -->
      <div class="pagination">
        <?php echo $pagination_links; ?>
      </div>
 
<style>  
.pagination{
  font-size: 30px;
  display:flex;
  word-spacing: 2rem;
  justify-content:center; 
  align-items:center;
  background-color:white;
  margin-top: -52px;
  height:60px;
}
.portfolio{
  width: 100%;
}
.eth5{
  color: #008374;
  display:flex;
  justify-content:center; 
  align-items:center;
  background-color:white;
  margin-top: -52px;
  height:60px;
}
.ConProd{
  width: 98%;
  display: flex;
  justify-content: space-evenly; 
  flex-wrap:wrap;
  gap: 8px;
}
.adr{
  font-size: 12px;
  font-weight: 400;
}
.image-container {
  position: relative;
  width: 400px; /* Set the width and height of the container */
  height: 300px;
}

.background-image {
  width: 100%;
  height: 100%;
  object-fit: cover; /* Ensure the background image covers the container */
}

.overlay {
  position: absolute;
  top: 105px;
  left: 120px;
  width: 50px;
  height: 50px;
  z-index: 1;
}
.overlay1{
  position: absolute;
  top: 100px;
  left: 90px;
  width: 50px;
  height: 50px;
  z-index: 1;
}
.imgcard p img{
  width: 50px;
  height: 50px;
}
.prodContainer{
  display: flex;
  justify-content: start;
  width: auto;
}
.imgcard{
  width:100%; 
  height: 150px;
  background-color: #ffff;
  display: flex;
  justify-content: center;
  align-items: center;
}
.imgcard img{
  width: 100%;
  height: 140px;
}
.prodName{
  padding: 1.5%;
  width:100%; 
  height: 80px;
  background-color: #FFFF;
}
.prodPrice{
  padding: 1.5%;
  height: 30px;
  background-color: #FFFF;
  display: flex;
  justify-content: space-between;
}
.card {
  outline: 1px solid green;
  height: 250px;
  box-shadow: 0 4px 8px 0 #008374;
  transition: 0.3s;
  width: 170px; 
  justify-content: space-evenly;
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.container {
  padding: 2px 16px;
}
.prd_title{
  font-size: 13px;
  margin-bottom: 0;
}


.buyNow{
    color: white;
    background-color: #008374;
    border: 1px solid #008374;
    display: flex;
    justify-content: center;
  }
  .buyNow:hover{
    color: #008374;
    background-color: #FFFF;
    border: 1px solid #008374;
    display: flex;
    justify-content: center;
  }



.filterDiv {
  float: left;
  width: 300px;
  height: 300px;
  height: auto;
  text-align: justify;
  display: none;
  line-height: 1.5;
}
.myBtnContainer{
  margin: 0% 1% 0% 1%;
  padding: 0;
}
.show {
  display: block;
}

.show {
  display: block;
}

/*
.containerS {S
  overflow: hidden;
}

 Style the buttons */
@media (max-width: 768px) {
  .prodContainer{
    display: flex;
    justify-content: center;
    width: auto;
  }
  .prd_title{
    font-size: 10px;
    margin-bottom: 0;
  }
  .eth5{
    color: #008374;
    display:flex;
    justify-content:center; 
    align-items:center;
    background-color:white;
    margin-top: -50px;
    height: 30px;
    font-size: 20px;
  }
  .adr{
    font-weight: 200;
  }
  
  .imgcard{
    width:100%; 
    height: 120px;
    background-color: #ffff;
    display: flex;
    justify-content: center;
    align-items: center;
  }
  .imgcard img{
    width: 100%;
    height: 125px;
  }
  .prodName{
    padding: .5%;
    width:100%; 
    height: 70px;
    background-color: #FFFF;

  }
  .prodPrice{
    padding: 1.5%;
    height: 30px;
    background-color: #FFFF;
    display: flex;
    justify-content: space-between;
  }
  .card {
    outline: 1px solid green;
    height: 230px;
    box-shadow: 0 8px 16px 0 #008374;
    transition: 0.3s;
    width: 150px; 
    justify-content: space-evenly;
  }
  .imgcard p img{
    width: 40px;
    height: 40px;
  }
  .overlay {
    position: absolute;
    top: 90px;
    left: 110px;
    z-index: 1;
  }
  .overlay1{
    position: absolute;
    top: 90px;
    left: 85px;
    z-index: 1;
  }
}


</style>
    </ul>

    
   
<script>
  filterSelection("all")
  function filterSelection(c) {
    var x, i;
    x = document.getElementsByClassName("filterDiv");
    if (c == "all") c = "";
    for (i = 0; i < x.length; i++) {
      w3RemoveClass(x[i], "show");
      if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
    }
  }  

  function w3AddClass(element, name) {
    var i, arr1, arr2;
    arr1 = element.className.split(" ");
    arr2 = name.split(" ");
    for (i = 0; i < arr2.length; i++) {
      if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
    }
  }

  function w3RemoveClass(element, name) {
    var i, arr1, arr2;
    arr1 = element.className.split(" ");
    arr2 = name.split(" ");
    for(i = 0; i < arr2.length; i++) {
      while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);     
      }
    }
    element.className = arr1.join(" ");
  }  

  // Add active class to the current button (highlight it)
  var btnContainer = document.getElementById("myBtnContainer");
  var btns = btnContainer.getElementsByClassName("btn");
  for (var i = 0; i < btns.length; i++) {
    btns[i].addEventListener("click", function(){
      var current = document.getElementsByClassName("active");
      current[0].className = current[0].className.replace(" active", "");
      this.className += " active";
    });
  }
</script>







  </main><!-- End #main -->

  <!-- ======= Footer ======= --
  <footer id="footer" class="footer">

    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-info">
          <a href="index.html" class="logo d-flex align-items-center">
            
            <span>Agromart</span>
          </a>
          <p class="logoss" ><img src="<?php echo base_url('Impact/'); ?>assets/img/Logoo.png" alt=""></p>
        </div>

        <div class="col-lg-5 col-md-12 footer-info">
            <h4>Contact Us</h4>
          </a>
          <div class="social-links d-flex mt-4">
           <p><strong>Address: </strong>Mangatarem, Pangasinan<br><br>
            <strong>Number: </strong>+63 951 0598 340<br><br>
            <strong>Emails: </strong>agromart@gmail.com</p>
          </div>
          <div class="social-links d-flex mt-4">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
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
  </footer><!-- End Footer --
  <!-- End Footer
  <style>
    .logoss img{
      width: min(10vw, 150px);
      height: 130px;
      mix-blend-mode: multiply;
    }
  </style> -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

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
  
  </section>
	
  

<script src="leaflet-heat.js"></script>

</body>
<style type="text/css">

/* ===== shooping list ===== */


.filterDiv {
  float: left;
  width: 350px;
  height: 350px;
  height: auto;
  text-align: justify;
  display: none;
  line-height: 1.5;
}
.myBtnContainer{
  margin: 1%;
}
.show {
  display: block;
}
</style>

</html>


