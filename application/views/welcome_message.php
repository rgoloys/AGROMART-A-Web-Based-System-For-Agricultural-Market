<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Agromart</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
 <link rel = "icon"   href = "<?php echo base_url('Impact/');?>assets/img/tlogo.png" 
        type = "image/x-icon"> 
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
        display: flex;
        justify-content: start;

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
          <a href="<?php echo base_url('Seller'); ?>">Start Selling</a>
        </i>
        <i class="bi  d-flex align-items-center">
          <a>|</a>
        </i>
        <i class="bi  d-flex align-items-center">
          <a href="<?php echo base_url('register'); ?>">Sign Up</a>
        </i>
        <i class="bi d-flex align-items-center ms-4">
            <a href="<?php echo base_url('login'); ?>"><span>Login</span></a>
          </i>
      </div>
    </div>
  </section><!-- End Top Bar -->

<header id="header" class="header d-flex align-items-center">

 <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
   <a href="<?php echo base_url();?>" class="logo d-flex align-items-center">
     <h1>Agromart<span><img src="<?php echo base_url('Impact/');?>assets/img/Logoo.png" class="img-fluid" alt="" style="height: 200px; width:60px;"></span></h1>
   </a>
   <nav id="navbar">
     <ul>
      <li>
        <div class="search-bar">
          <form action="<?php echo base_url('perform_search');?>" method="post">
              <input class="searchInput" type="text" name="keyword" placeholder="Enter your search keyword">
              <input class="searchBtn" id="searchButton" type="submit" value="Search" Style="width:70px;" >
          </form>
        </div>
      </li>
      <!--
      <div class="btns" id="myBtnContainer">
        <li><button class="btn active" onclick="filterSelection('all')"> All</button></li>
        <li><button class="btn" onclick="filterSelection('CropProduct')">Crop Products</button></li>
        <li><button class="btn" onclick="filterSelection('Livestock')"> Livestock</button></li>
        <li><button class="btn" onclick="filterSelection('Fertilizer')"> Fertilizer</button></li>
        <li><button class="btn" onclick="filterSelection('Others')"> Others</button></li>
      </div>-->
     </ul>
   </nav><!-- .navbar 
   <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
   <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>-->
 </div>

</header><!-- End Header -->
<!-- End Header -->




<style>

    .search-bar{
      display: flex;
      justify-content: start;
      width: 800px;
      margin-top: 1%;
      padding: 2%;
    }
    .search-bar input{
      margin-top: 5px;
      width: 500px;
      height: 40px;
      font-size: 14px;
    }
    .searchBtn{
      margin-top: 5px;
      width: 100px;
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


    /* Add media query for mobile devices 
    @media (max-width: 450px) {
     .btns{
        display: none;
        height: 20px;
        align-content: end;
      }

      .search-bar {
          width:90%; /* Make the search bar full width on smaller screens *
          height: 30px;
          flex-direction: row; /* Stack search input and button vertically *
          align-items: center; /* Center-align search input and button *
          margin-top: auto; /* Adjust margin for spacing *
      }

      .search-bar input {
        height: 30px
        width: 150px; /* Make the input full width *
          font-size: 12px;
          margin-bottom: 1%; /* Add some spacing between input and button *
      }

      .searchBtn {
          height: 35px;
          width: 50px; /* Make the button full width *
      }
      .header .logo img {

        padding: 0;
        height: 30px;
        width: 30px;
        /*mix-blend-mode: multiply; *
      }

      .header .logo h1 {
        font-size: 17px;
        margin: 0;
        font-weight: 700;
        letter-spacing: 0.3px;
        color: #fff;
        font-family: var(--font-primary);
      }
    }*/



    
    .Cats{
      margin: 0 2.5% 0 2.5%;
      border-radius: 12px;
      width: min(300rem, 95%);
      box-shadow: 1px 1px 30px rgba(127, 137, 161, 0.25);
      padding: 15px;
    }
    .categories h4{
      margin-left: 12px;
      margin-top: 0;
    }
    .categories h4 img{ /////////////////////////////////////
      width: 30px;
      height: 30px;
      margin-right: 8px;
    }
    .categories{
      flex-wrap: wrap;
    }
    .table{
      cursor: pointer;
      flex-wrap: wrap;
    }
    .td{
      font-size: 18px;
    }
    .td:hover{
      color: #008374;
    }
    .td:active{
      color: #008374;
    }
    /*.tr{
        display: flex;
        justify-content:space-evenly;
    }*/
    
    .td img{
      width: 50px;
      height: 50px;
    }
    @media (max-width: 768px) {

      .categories h4{
        margin-left: 8px;
        margin-top: 0;
        font-size: 14px;
      }    
      .categories h4 img{
        width: 20px;
        height: 20px;
        margin-right: 4px;
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
        font-size: 14px;
      }
      
      .header .logo img {
      
        padding: 0;
        max-height: auto;
        width: 100%;
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

    @media (max-width: 425px) {


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

      .categories h4{
        margin-left: 4px;
        margin-top: 0;
        font-size: 12px;
      }
      .categories h4 img{
        width: 20px;
        height: 20px;
        margin-right: 2px;
      }
      .categories{
        flex-wrap: wrap;
      }
      .table{
        cursor: pointer;
        flex-wrap: wrap;
      }
      .td img{
        width: 20px;
        height: 20px;
      }
      .td{
        font-size: 10px;
      }
      .header .logo img {  
        padding: 0;
        max-height: auto;
        width: 350PX;
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
</style>



  <!-- ======= Hero Section ======= -->
<section class="Cats">
  <div class="categories">
    
    <table class="table">
    <tr class="tr">
        <td class="td" onclick="filterSelection('all')"><a href="#prod_Carousel"><img src="<?= base_url('Impact/icons/other.png')?>">Categories</a></td>
        <td class="td" onclick="filterSelection('Livestock')"><a href="#prod_Carousel"><img src="<?= base_url('Impact/icons/livestock.png')?>">Livestock</a></td>
        <td class="td" onclick="filterSelection('Fertilizer')"><a href="#prod_Carousel"><img src="<?= base_url('Impact/icons/fertilize.png')?>">Fertilizer</a></td>
        <td class="td" onclick="filterSelection('Fruits')"><a href="#prod_Carousel"><img src="<?= base_url('Impact/icons/fruit.png')?>">Fruits</a></td>
         <td class="td" onclick="filterSelection('Meat')"><a href="#prod_Carousel"><img src="<?= base_url('Impact/icons/meat.png')?>">Meat</a></td>
      </tr>
      <tr class="tr">
        <td class="td" onclick="filterSelection('CropProduction')"><a href="#prod_Carousel"><img src="<?= base_url('Impact/icons/wheat.png')?>">Crop Products</a></td>
        <td class="td" onclick="filterSelection('Vegetables')"><a href="#prod_Carousel"><img src="<?= base_url('Impact/icons/vegetable.png')?>">Vegetables</a></td>
        <td class="td" onclick="filterSelection('Pesticides')"><a href="#prod_Carousel"><img src="<?= base_url('Impact/icons/pesticide.png')?>">Pesticides</a></td>
        <td class="td" onclick="filterSelection('Flowers')"><a href="#prod_Carousel"><img src="<?= base_url('Impact/icons/flower-pot.png')?>">Flowers</a></td>
        <td class="td" onclick="filterSelection('Fish')"><a href="#prod_Carousel"><img src="<?= base_url('Impact/icons/seafood.png')?>">Fish</a></td>
      </tr>
    </table>
  </div>  
</section>
  <!-- End Hero Section -->


  <main id="main">


    <section class="topProduct">
     <div class="hd">
        <h5>MONTHLY TOP PRODUCT</h5>
     </div>
      <div class="TOPPROD">
      <?php foreach($TopProductIds as $key => $TopProductIds): ?>
        <div class="outlineCard">
      
              <div class="imgTop">
                <a href="<?php echo base_url('productDetails/'. $TopProductIds['id']);?>"><img src="<?php echo base_url('upload/images/'. $TopProductIds['img'])?>"></a>
              </div>
              <div class="topInfo">
                <p><a href="<?php echo base_url('productDetails/'. $TopProductIds['id']);?>"><b><?= $TopProductIds['title']; ?><br>₱<?= $TopProductIds['price'];?></b></a></p>
                <p>Month sales (<?= $TopProductIds['value']; ?>)</p>
              </div>
             
        </div>
        <?php endforeach ?>
      </div>
    </section>
    
<style>
  .outlineCard{
    margin-bottom: 12px;
    outline:1px solid #008374;	
    flex-grow: 0;
    background: var(--light); 
    box-shadow: 4px 4px 8px #008374; 
    border-radius: 5px;
  }
  .outlineCard:hover{
    flex-grow: 0;
    background: var(--light); 
    box-shadow: none; 
    border-radius: 5px;
  }
  .topProduct{
    padding:0;
  }
  .hd{
    color: #008374;
    width:100%; 
    display:flex; 
    justify-content:center;
    height:40px;
    background-color: white;
  }
  .TOPPROD{
    display:flex; 
    justify-content: space-evenly; 
    flex-wrap:wrap;
  }
  .imgTop img{
    width:150px; 
    height:150px;
    border-radius: 5px 5px 0px 0px;
  }
  .topInfo{
    text-align: center;
  }
  .topInfo p{
    height:auto; 
    margin:0; 
    padding:0;
  }
  @media (max-width: 425px) {
    *{
      padding: 0;
      margin: 0;
    }
    .outlineCard{
      outline:1px solid #008374;	
      flex-grow: 0;
      background: var(--light); 
      box-shadow: 4px 4px 8px #008374; 
      border-radius: 5px;
      width: 20%;
      margin: .5%;
    }
    .outlineCard:hover{
      flex-grow: 0;
      background: var(--light); 
      box-shadow: none; 
      border-radius: 5px;
    }
    .topProduct{
      padding:0;
    }
    .hd{
      width:100%; 
      display:flex; 
      justify-content:center;
    }
    .TOPPROD{
      display:flex; 
      justify-content: space-evenly; 
      flex-wrap:wrap;
    }
    .imgTop img{
      width:100%; 
      height:70px;
      border-radius: 5px 5px 0px 0px;
    }
    .topInfo{
      text-align: center;
    }
    .topInfo p{
      font-size: 8px;
      height:auto; 
      margin:0; 
      padding:0;
    }
  }
  @media (max-width: 380px) {
    *{
      padding: 0;
      margin: 0;
    }
    .outlineCard{
      outline:1px solid #008374;	
      flex-grow: 0;
      background: var(--light); 
      box-shadow: 4px 4px 8px #008374; 
      border-radius: 5px;
      width: 20%;
      margin: .5%;
    }
    .outlineCard:hover{
      flex-grow: 0;
      background: var(--light); 
      box-shadow: none; 
      border-radius: 5px;
    }
    .topProduct{
      padding:0;
    }
    .hd{
      width:100%; 
      display:flex; 
      justify-content:center;
    }
    .TOPPROD{
      display:flex; 
      justify-content: space-evenly; 
      flex-wrap:wrap;
    }
    .imgTop img{
      width:100%; 
      height:60px;
      border-radius: 5px 5px 0px 0px;
    }
    .topInfo{
      text-align: center;
    }
    .topInfo p{
      font-size: 7px;
      height:auto; 
      margin:0; 
      padding:0;
    }
  }
</style>


      <div class="discovery">
        <h5>PRODUCT DISCOVERY</h5>
      </div>
     <!-- ======= Product Section =======  style="height:850px; transform:scroll;" -->
    <section id="prod_Carousel" class="portfolio sections-bg" style="margin:0; padding:0;">
    

       

      <div class="centers" style="margin-bottom: 5px; height:430px; overflow:auto;">
        <?php foreach($product as $key => $rows): ?>
        <div id="kinnam" class="prodContainer filterDiv portfolio-item filter-app<?php echo base_url($rows['id']);?> <?php echo base_url($rows['p_category']);?> <?php echo base_url($rows['subCategory']);?>">
          
        
            <div class="imgcard">
             <a href="<?php echo base_url('productDetails/'. $rows['id']);?>">
                <img src="<?php echo base_url('/upload/images/'. $rows['image1']); ?>" alt="">
              </a>
              <?php if($rows['p_shipping'] == 0) {?>
                <p><img src="<?php echo base_url('Impact/icons/free.png')?>" alt="Overlay Image" class="overlay"></p>
              <?php } else {?>
                <p style="flex"><img src="<?php echo base_url('Impact/icons/speed-limit.png')?>" alt="Overlay Image" class="overlay1"> 
                <img src="<?php echo base_url('Impact/icons/shipping.png')?>" alt="Overlay Image" class="overlay"></p>
              
              <?php }?>
            </div>
                
                
            <div class="prodName">
            
              <p class="prd_title">
                <a href="<?php echo base_url('productDetails/'. $rows['id']);?>">
                  <b>
                  <?php $string = $rows['p_title']; ?>
                  <?php $string = word_limiter($string, 5); ?>
                  <?php echo $string; ?>
                 <!-- <?php $string = $rows['p_description']; ?>
                  <?php $string = word_limiter($string, 5); ?>
                  <?php echo $string; ?> -->
                  </b>
                </a> 
              </p> 
              <!--p class="Scat" style="font-size:12px; color:blue; margin-bottom:0;"><?= $rows['p_category']; ?>><?= $rows['subCategory']?></p-->
              <p class="adr"><?php echo $rows['p_address']; ?></p>
            </div>
            <div class="prodPrice">
              <p><b>₱</b><span><?php echo $rows['p_price']; ?></span></p>
              <p style="font-size: 10px;display:flex; justify-content:end;">stock <?php echo $rows['p_stocks']; ?><?php echo $rows['p_stocks_Unit']; ?></p>
            </div>
          <!--  <a class="buyNow" href="<?php echo base_url('productDetails/'. $rows['id']);?>">Buy Now</a>-->
        

        </div>
        <?php endforeach ?>
      </div>
    
             

      </div><!-- End Portfolio Container -->
   
    </section><!-- End Portfolio Section -->


<style>  

.filterDiv {
  float: left;
  width: 300px;
  height: 300px;
  height: auto;
  text-align: justify;
  display: none;
  line-height: 1.5;
}
.show {
  display: block;
}
*{
  padding: 0;
  margin: 0;
  
}
.centers{
    display:flex; 
    justify-content: space-evenly; 
    flex-wrap:wrap;
  }
.discovery{ 
  width:100%;  color: #008374;
  display:flex;
  justify-content:center; 
  align-items:center;
  background-color: white;
  height: 50px;">
}
#kinnam{
  width:150px; 
  height:200px;
  margin: .5%;
  outline:1px solid #008374;	
  background: white; 
  box-shadow: 4px 4px 8px #008374; 
  border-radius: 5px;
}
#kinnam:hover{
  width:150px; 
  height:200px;
  margin: .5%;
  outline:1px solid #008374;	
  background: white; 
  box-shadow: none; 
  border-radius: 5px;
}
.imgcard{
  border-radius: 5px 5px 0 0;
  width:150px; 
  height: 120px;
  background-color: #ffff;
  display: flex;
  justify-content: center;
  align-items: center;
  position: relative;
}
.imgcard img{
  border-radius: 5px 5px 0 0;
  width:150px; 
  height: 120px;
  background-color: #ffff;
  display: flex;
  justify-content: center;
  align-items: center;
}
.overlay {
  position: absolute;
  top: 90px;
  left: 110px;
  z-index: 1;
}
.overlay1{
  position: absolute;
  top: 85px;
  left: 80px;
  z-index: 1;
}
.imgcard p img{ /** SA MAY FREE SHIPPING */
  background-color: transparent;
  width: 40px;
  height: 40px;
  margin: 0;
  padding: 0;
}
.prd_title{ 
  font-size: 13px;
  height: 40px;
  margin: 0;
  padding: .5%;
}
.adr{
  display: flex;
  justify-content: end;
  margin: 0;
  padding: 0;
  font-size: 12px;
}
.prodPrice{
  width: 100%;
  display: flex;
  justify-content: space-between;
  height: 30px;
}
.prodPrice p{
  font-size: 15px;
  width: 50%;
}
.prodName, .prodPrice{
  padding: 0 .5% 0 .5%;
}
@media (max-width: 768px) {
  .discovery h5, .hd h5{
    font-size: 16px;
  }
  .centers{
    display:flex; 
    justify-content: space-evenly; 
    flex-wrap:wrap;
  }
}
@media (max-width: 425px) {
  .discovery h5, .hd h5{
    font-size: 14px;
  }
  .discovery{ 
    margin-top: 10px;
    width:100%;  color: #008374;
    display:flex;
    justify-content:center; 
    align-items:center;
    background-color: white;
    height: 40px;">
  }
  #kinnam{outline: 1px solid red;
    width:120px; 
    height:200px;
    margin: .5%;
    outline:1px solid #008374;	
    background: white; 
    box-shadow: 4px 4px 8px #008374; 
    border-radius: 5px;
  }
  #kinnam:hover{
    width:120px; 
    height:200px;
    margin: .5%;
    outline:1px solid #008374;	
    background: white; 
    box-shadow: 4px 4px 8px #008374; 
    border-radius: 5px;
  }
  .imgcard{
    
    width:120px; 
    height: 120px;
    background-color: #ffff;
    display: flex;
    justify-content: center;
    align-items: center;
    position: relative;
  }
  .imgcard img{
    border-radius: 5px 5px 0 0;
    width:120px; 
    height: 120px;
    background-color: #ffff;
    display: flex;
    justify-content: center;
    align-items: center;
  }
  .overlay {
    position: absolute;
    top: 90px;
    left: 80px;
    z-index: 1;
  }
  .overlay1{
    position: absolute;
    top: 80px;
    left: 55px;
    z-index: 1;
  }
  .imgcard p img{ /** SA MAY FREE SHIPPING */
    background-color: transparent;
    width: 40px;
    height: 40px;
  }
  .prd_title{ 
    font-size: 14px;
    height: 35px;
  }
  .adr{
    font-size: 12px;
  }
  .prodPrice{
    width: 100%;
    display: flex;
    justify-content: space-between;
    height: 30px;
  }
  .prodPrice p{
    font-size: 14px;
    width: 50%;
  }
  .prodName, .prodPrice{
    padding: 0 .5% 0 .5%;
    height: auto;
  }
}
@media (max-width: 400px) {
    *{
        padding:0;
        margin:0;
    }
  .discovery h5, .hd h5{
    font-size: 12px;
  }
  .discovery{ 
    width:100%;  color: #008374;
    display:flex;
    justify-content:center; 
    align-items:center;
    background-color: white;
    height: 30px;
  }
  #kinnam{
    width:170px; 
    height:200px;
    outline:1px solid #008374;	
    background: white; 
    box-shadow: 4px 4px 8px #008374; 
    border-radius: 5px;
  }
  #kinnam:hover{
    width:170px; 
    height:200px;

    outline:1px solid #008374;	
    background: white; 
    box-shadow: 4px 4px 8px #008374; 
    border-radius: 5px;
  }
  .imgcard{
    width:170px; 
    height: 120px;
    background-color: #ffff;
    display: flex;
    justify-content: center;
    align-items: center;
    position: relative;
  }
  .imgcard img{
    border-radius: 5px 5px 0 0;
    width:170px; 
    height: 120px;
    background-color: #ffff;
    display: flex;
    justify-content: center;
    align-items: center;
  }
  .overlay {
    position: absolute;
    top: 90px;
    left: 130px;
    z-index: 1;
  }
  .overlay1{ 
    position: absolute;
    top: 80px;
    left: 105px;
    z-index: 1;
  }
  .imgcard p img{ /** SA MAY FREE SHIPPING */
    background-color: transparent;
    width: 40px;
    height: 40px;
  }
}
</style>


   
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




    <!-- ======= About Us Section ======= -->
    <section id="about" class="about" style="padding-top: 5px;">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>About</h2>
        </div>

        <div class="row gy-4">
          <div class="col-lg-6">
            <h6 class="tests">AGROMART: A WEB-BASED SYSTEM FOR AGRICULURAL MARKET </h6>
            <!--<img src="<?php echo base_url('Impact/'); ?>assets/img/Logoo.png" class="img-fluid rounded-4 mb-4" alt="" style="height: 100px; width: 150px;">-->
            <p Style="text-align:justify;">Designed to support farmers and reinforce sales revenue in connection with thier farms and animals. It creates an interaction between an end-to-end user along with a far distance of location. Enable to negotiate goods and produce. Provide a filtering sales monitoring with used of graph representation and annual produce forecasting.</p>
            <img src="<?php echo base_url('/Impact/assets/img/dash.png'); ?>" class="img-fluid rounded-4 mb-4" alt="" style="height: 500px; width: 500px;">
          </div>
          <div class="col-lg-6">
            <div class="content ps-0 ps-lg-5">
              <p class="fst-italic" Style="text-align:justify;">
                Data mapping, a component of agromart system that include the use of google maps for real-time display of the geographic information system or GIS structure of the municipality of San Clemente, Tarlac. With the use of data mapping it helps to:
              </p>
              <ul>
                <li><i class="bi bi-check-circle-fill"></i> Forecast most sold products</li>
                <li><i class="bi bi-check-circle-fill"></i> Locate land uses and unuses.</li>
                <li><i class="bi bi-check-circle-fill"></i> Locate business related to agricultures, poultry farms, livestock farming and different variety of rice fields.</li>
              </ul>
              <p Style="text-align:justify;">
                Data mapping provide a solution for informative system that inform user for easily calculation of estimated percentile of agricultural products. 
              </p>

              <div class="position-relative mt-4">
                <img src="<?php echo base_url('/Impact/assets/img/map.png'); ?>" class="img-fluid rounded-4" style="width:500px; height:250px;">
                <!--<a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox play-btn"></a>-->
                <div class="btnssss">
                  <a href="<?php echo base_url('Seller'); ?>">Start Selling</a>
                  <a href="<?php echo base_url('register'); ?>">Sign Up</a>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <style>
      .btnssss{
        width:100%; 
        margin-top:20px; 
        display:flex; 
        justify-content:space-evenly
      }
      .btnssss a{
        border:2px solid #008374;
        padding: 10px 20px;
        width: 140px;
        height: 45PX;
        font-size: 14px;
        font-weight: 600;
        background-color: #008374;
        color: white;
        border-radius: 20px;
        text-align: center;
      }
      .btnssss a:hover{
        border:2px solid #008374;
        background-color: white;
        color: #008374;
      }
      @media (max-width: 768px) {
        .col-lg-6 h2{
          font-size: 18px;
          display: flex;
          text-align: center;
          width: min(100%, 550px);
        }
        .col-lg-6 img{
          width: min(100%, 550px);
        }
        ..col-lg-6 p, .col-lg-6 .content p{
          font-size: 14px;
        }
      }
    </style>
  
  




  </main><!-- End #main -->

  <!-- ======= Footer ======= 
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
        <a href="https://www.facebook.com/profile.php?id=61552519156175&mibextid=ZbWKwL" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="https://instagram.com/agromart2023?igshid=NGVhN2U2NjQ0Yg==" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="https://www.linkedin.com/in/agromart-website-996268299?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app&fbclid=IwAR02p6L2PwdwnATuDQrpNdaPYhi6wHKQQ90zyeLSt_Q_bKeW6mg_8zGBPgQ" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
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
  <!-- End Footer --
  <style>
    .logoss img{
      margin: 0;
      padding: 0;
      width: min(70%, 200px);
      height: auto;
      mix-blend-mode: multiply;
    }
  </style>
-->

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

