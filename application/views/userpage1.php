<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Agromart</title>
  <link rel = "icon"   href = "<?php echo base_url('Impact/');?>assets/img/tlogo.png" >
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- RATING SYSTEM -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"/>

  
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

  <!-- Include Chart.js library -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
      
</head>





<style>
    .btns{
      display: flex;
      justify-content: start;
      flex-wrap: wrap;
      gap: 40px;
      height: 10px;
      margin-bottom: 3%;
    }
    .btn {
      padding: 0;
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

    /* Add media query for mobile devices */
    @media (max-width: 768px) {
     .btns{
        display: none;
        height: 20px;
        align-content: end;
      }
      /* .btn {
        cursor: pointer;
        font-weight: 900;
        font-size: 8px;
        color: #008374;
      }*/
      .search-bar {
          width:100%; /* Make the search bar full width on smaller screens */
          height: 30px;
          flex-direction: row; /* Stack search input and button vertically */
          align-items: center; /* Center-align search input and button */
          margin-top: auto; /* Adjust margin for spacing */
      }

      .search-bar input {
        height: 30px;
        width: min(100%, 150px); /* Make the input full width */
          font-size: 12px;
          margin-bottom: 1%; /* Add some spacing between input and button */
      }

      .searchBtn {
        height: 35px;
          width: 100%; /* Make the button full width */
      }
    }
</style>





<main id="main">


  <style>
    
    .Cats{
      margin: 0% 2.5% 0% 2.5%;
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
    @media (max-width: 768px) {

      .categories h4{outline: 1px solid red;
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
  </style>
  <!-- ======= Hero Section ======= -->
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
  </section>
  <!-- End Hero Section -->

  


  <section class="ProdTT">
    <h5>TOP PRODUCT</h5>
    <div class="TOPPROD">
    
      <table>
        <tr>
          <?php foreach($TopProductIds as $key => $TopProductIds): ?>
          <td>
            <div class="imgTop">
              <img src="<?php echo base_url('upload/images/'. $TopProductIds['img'])?>">
            </div>
            <div class="contentTop">
              <p>Total sales (<?= $TopProductIds['value']; ?>)
                <br><span><a href="<?php echo base_url('productDetails/'. $TopProductIds['id']);?>"><b><?= $TopProductIds['title']; ?></b></a></span>
              </p>
            </div>
          </td>
          <?php endforeach ?>
        </tr>
      </table>
    </div>
  </section>


    <style>
      .ProdTT{
        width:100%; 
        margin:0; 
        padding: 0; 
      }
      .ProdTT h5{
        width: 100%;
        display: flex;
        justify-content: start;
      }
      .TOPPROD{
        display:flex; 
        justify-content: space-evenly; 
        flex-wrap: wrap;

      }
      ul li{  
        text-decoration: none;
        list-style: none;
      }
      .imgTop, .imgTop img{
        width: 150px;
        height: 150px;
      }
      .tops{
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
      .contentTop p{
        font-size: 14px;  
        color: black;
      }
      .contentTop p span{ 
        color:#008374; 
        font-size:18px;
      }
      @media (max-width: 768px) {
        .ProdTT h5{
          font-size: 14px;
          width: 100%;
          display: flex;
          justify-content: center;
        }
        .TOPPROD{
          display:flex; 
          justify-content: center; 
          flex-wrap: wrap;
        }
        .tops{
          display: block;
          justify-content: center;
          flex-wrap: wrap;
          width: 100px;
          height: 150px;
        }
        .imgTop, .imgTop img{
          width: 100px;
          height: 100px;
        }
        .contentTop p{
          font-size: 12px; 
          color: black;
        }
        .contentTop p span{
          font-size: 14px; 
          color: black;
        }
      }
    </style>



 <!-- ======= Portfolio Section ======= -->
 <section id="portfolio" class="portfolio sections-bg">
    
    <div class="eth5">
      <h5>PRODUCT DISCOVERY</h5>
    </div>
       

            <div class="ConProd row gy-4 prodContainer myBtnContainer">

             <!--manipulate tables-->
              <?php foreach($product as $key => $rows): ?>
              <div style="width:175px; height:250px;" class=" prodContainer filterDiv portfolio-item filter-app<?php echo base_url($rows['id']);?> <?php echo base_url($rows['p_category']);?> <?php echo base_url($rows['subCategory']);?>">
                
                <div class="card" class="filterDiv prodContainer myBtnContainer pordItem filter-app<?php echo base_url($rows['p_category']);?> <?php echo base_url($rows['subCategory']);?>">
                  <div class="imgcard">
                    <a href="<?= base_url('/upload/images/'.$rows['image1']); ?>" data-gallery="portfolio-gallery-app" class="glightbox">
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
                        <?php $string = $rows['p_description']; ?>
                        <?php $string = word_limiter($string, 5); ?>
                        <?php echo $string; ?>
                        </b>
                      </a> 
                    </p> 
                    <p style="font-size:12px; color:blue; margin-bottom:0;"><?= $rows['p_category']; ?>><?= $rows['subCategory']?></p>
                    <p class="adr"><?php echo $rows['p_address']; ?></p>
                  </div>
                  <div class="prodPrice">
                    <p><b>₱</b><span><?php echo $rows['p_price']; ?></span></p>
                    <p>(<?php echo $rows['p_stocks']; ?>) Stocks</p>
                  </div>
                <!--  <a class="buyNow" href="<?php echo base_url('productDetails/'. $rows['id']);?>">Buy Now</a>-->
                </div>
              </div><!-- End Portfolio Item -->
            <?php endforeach ?>
          </div><!-- End Portfolio Container -->
        </div>
    </section><!-- End Portfolio Section -->

 
<style>  
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

   











<style>
  #map { 
    width: 700px;
    height: 340px; 
  }
  .lalagyan{
    width: min(95%, 400px);
    padding:0; 
    width: 100%; 
    display:flex; 
    justify-content: space-evenly;
  }
  .mapCharting{
    width: min(95%, 700px);
  }
  .maptable{
    width: min(95%, 500px);
  }

  .sortMap{
    flex-wrap:wrap; 
    display:flex;
    justify-content:space-evenly;
  }
  .sortMap a button{ 
    border: none;
    color: #008374;
    background-color: #FFFF;
  }
  .sortMap a button:hover , .data p a:hover{
    color: black;
  }
  /*
  .data{   outline: 1px solid red;
    width: min(95%, 800px); 
  }*/
  .data p {
    width: min(95%, 900px);
    display: flex;
    justify-content: start;
    flex-wrap: wrap;
    font-weight: 400;
    font-size: 14px;
   
  }
  .data p a{
    display: flex;
    flex-wrap: wrap;
    margin: .5%;
  }

  @media (max-width: 768px) {

    .data p {
      font-weight: 200;
      font-size: 12px;
    }
    .data a ,td, th{
      font-size: 12px;
    }

  }
</style>

<h5 style="display:flex; justify-content:center; width:100%; margin:20px 0px 20px 0px;">PRODUCT MAPPING</h5>
<p style="display:flex; justify-content:center; width:100%; margin:20px 0px 20px 0px;">(San Clemente, Tarlac & Camiling, Tarlac)</p>

<div class="lalagyan">

  <div class="mapCharting">
    <div class="sortMap content-data" style="border-radius: 0; ">
                
      <div id="myDiv">
        <table>
          <tr>
            <td>As of [ <span class="output"></span> ]</td>
          </tr>
          <tr>
            <td>
                  <label for="functionDropdown">Crop type:</label>
                  <select id="select1" style="height: 30px; width: 100px;">
                    <option value="1">Select Crop type</option>
                    <option value="1">ALL Crop Maps</option>
                    <option value="CropProduction">All Crop Product</option>
                    <option value="Livestock">All Livestock</option>
                    <option value="Fertilizer">All Fertilizer</option>
                  </select>
            </td>
            <td>
                  <label for="functionDropdown">Crops/Products</label>
                  <select id="select2" name="mapCrops"  style="height: 30px; width: 100px;">
                    <option value="1">Select Crops/Products</option>
                      <?php if ($datas['prodInfo'] !== 0) : ?>
                      <?php foreach ($datas['prodInfo'] as $prodInfo) : ?>

                    <option value="<?php echo $prodInfo['title']; ?>"><button type="submit"><?php echo $prodInfo['title']; ?></button></option>
                    
                      <?php endforeach; ?>
                      <?php else : ?>
                    <p colspan="3">No data available.</p>
                      <?php endif; ?>
                  </select>
            </td>
            <td>
            <label for="functionDropdown">Address</label>
                  <select id="add" name="mapAddress"  style="height: 30px; width: 100px;">
                      <option value="1">Address</option>
                      <option value="San Clemente">SAN CLEMENTE, TARLAC</option>
                      <option value="Camiling">Camiling</option>
                      <option value="Balloc">Balloc</option>
                      <option value="Bamban">Bamban</option>
                      <option value="Casipo">Casipo</option>
                      <option value="Catagudingan">Catagudingan</option>
                      <option value="Daldalayap">Daldalayap</option>
                      <option value="Doclong1">Doclong 1</option>
                      <option value="Doclong2">Doclong 2</option>
                      <option value="Maasin">Maasin</option>
                      <option value="Nagsabaran">Nagsabaran</option>
                      <option value="Pit-ao">Pit-ao</option>
                      <option value="PoblacionNorte">Poblacion Norte</option>
                      <option value="PoblacionSur">Poblacion Sur</option>
                      <option value="Camiling,Tarlac">CAMILING, TARLAC</option>
                      <option value="Anoling1st">Anoling 1st</option>
                      <option value="Anoling2nd">Anoling 2nd</option>
                      <option value="Anoling3rd">Anoling 3rd</option>
                      <option value="Bacabac">Bacabac</option>
                      <option value="Bacsay">Bacsay</option>
                      <option value="Bancay1st">Bancay 1st</option>
                      <option value="Bilad">Bilad</option>
                      <option value="Birbira">Birbira</option>
                      <option value="Bobon1stCasarratan">Bobon 1st Casarratan</option>
                      <option value="Bobon2nd">Bobon 2nd</option>
                      <option value="BobonCaarosipan">Bobon Caarosipan</option>
                      <option value="Cabanabaan">Cabanabaan</option>
                      <option value="CacamilinganNorte(withKippingvillage)">Cacamilingan Norte</option>
                      <option value="CacamilinganSur">Cacamilingan Sur</option>
                      <option value="Caniag">Caniag</option>
                      <option value="Carael">Carael</option>
                      <option value="Cayaoan">Cayaoan</option>
                      <option value="Cayasan">Cayasan</option>
                      <option value="Florida">Florida</option>
                      <option value="Lasong">Lasong</option>
                      <option value="Libueg(withsitioPugo)">Libueg (with sitio Pugo)</option>
                      <option value="Malacampa(WithsitioCacelestinuanandSitioCamartinisan)">Malacampa</option>
                      <option value="Manaquem">Manaquem</option>
                      <option value="Manupeg">Manupeg</option>
                      <option value="Marawi">Marawi</option>
                      <option value="Matubog">Matubog</option>
                      <option value="Nagrambacan">Nagrambacan</option>
                      <option value="Nagserialan">Nagserialan</option>
                      <option value="PalimboProper">Palimbo Proper</option>
                      <option value="PalimboCaarosipan">Palimbo Caarosipan</option>
                      <option value="Pao1st">Pao 1st</option>
                      <option value="Pao2nd">Pao 2nd</option>
                      <option value="Pao3rd">Pao 3rd</option>
                      <option value="Papaac">Papaac</option>
                      <option value="Pindangan1st">Pindangan 1st</option>
                      <option value="Pindangan2nd">Pindangan 2nd</option>
                      <option value="Pob.A">Pob. A</option>
                      <option value="Pob.B">Pob. B</option>
                      <option value="Pob.C">Pob. C</option>
                      <option value="Pob.D">Pob. D</option>
                      <option value="Pob.E">Pob. E</option>
                      <option value="Pob.F">Pob. F</option>
                      <option value="Pob.G">Pob. G</option>
                      <option value="Pob.H">Pob. H</option>
                      <option value="Pob.I">Pob. I</option>
                      <option value="Pob.J">Pob. J</option>
                      <option value="SanIsidro(Bancay2nd)">San Isidro (Bancay 2nd)</option>
                      <option value="SantaMaria">Santa Maria</option>
                      <option value="Sawat">Sawat</option>
                      <option value="Sinilian1st(withSitioCabalaonganandNangalisan)">Sinilian 1st</option>
                      <option value="Sinilian2nd(withSitioBarikir)">Sinilian 2nd</option>
                      <option value="Sinilian3rd(Northern,Bitawa,Centro)">Sinilian 3rd</option>
                      <option value="SinilianCacalibosuan">Sinilian Cacalibosuan</option>
                      <option value="Sinulatan1st">Sinulatan 1st</option>
                      <option value="Sinulatan2nd">Sinulatan 2nd</option>
                      <option value="Surgui1st">Surgui 1st</option>
                      <option value="Surgui2nd">Surgui 2nd</option>
                      <option value="Surgui3rd">Surgui 3rd</option>
                      <option value="Tambugan">Tambugan</option>
                      <option value="Telbang">Telbang</option>
                      <option value="Tuec">Tuec</option>
                  </select>
            </td>
          </tr>
          <tr>
            <td>
              PLANTED<br>
            <span  style="display:flex;"><input type="date" name="PlantFrom"   value="2020-10-31" class="form-control" id="min" style="height: 30px; width:110px;">
            To: <input type="date" name="PlantTo"   value="2025-10-31" class="form-control" id="max" style="height: 30px; width:110px;"></span>
            
            </td>
            <td>
              HARVESTED<br>
            <span style="display:flex;"><input type="date" name="HarvestedFrom" value="2020-10-31" class="form-control" id="hmin" style="height: 30px; width:110px;">
            
            To:<input type="date" name="HarvestedTo"  value="2025-10-31"  class="form-control" id="hmax" style="height: 30px; width:110px;"></span>
            
            </td>
            <td><button  onclick="filterData()" type="button" id="Filter" style="width:100%;"><b>Contiue</b></button></td>
          </tr>
        </table>
       
      </div> 
      
      <div class="data">
        <div class="content-data">
          <div class="chart">
            <div id="map"></div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="maptable">
    <!-- sa data tables -->
    <div class="data" id="hide" style="display:block; width: 100%;">
      <div class="content-data" style="margin:0px 0px 20px 0px; border-radius: 0;">
      <p style="display:flex; justify-content:center; width:100%;"><span style="display:flex; justify-content: start;">Sort by:</span>
          <a href="<?= site_url("PageController/userpage/$sort_column/$sort_order/all") ?>"> All Table data</a> |
          <a href="<?= base_url("PageController/userpage/title/asc/$time_period") ?>">Crop Name (ASC)</a> |
          <a href="<?= site_url("PageController/userpage/title/desc/$time_period") ?>">Crop Name (DESC)</a> |
          <a href="<?= site_url("PageController/userpage/plant/asc/$time_period") ?>">Date Planted (ASC)</a> |
          <a href="<?= site_url("PageController/userpage/plant/desc/$time_period") ?>">Date Planted (DESC)</a> |
          <a href="<?= site_url("PageController/userpage/harvest/asc/$time_period") ?>">Date Harvested (ASC)</a> |
          <a href="<?= site_url("PageController/userpage/harvest/desc/$time_period") ?>">Date Harvested (DESC)</a>
      </p>
    </div>
    <div class="content-data" style="height:400px; overflow:scroll; border-radius: 0; padding: 1%;">
      <table>
        <thead>
          <tr>
            <th>Legend:</th>
            <th>Product Name:</th>
            <th>Product Address:</th>
            <th>Date Planted</th>
            <th>Date Harvested</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody>
          <?php if ($datas['prodInfo'] !== 0) : ?>
          <?php foreach ($datas['prodInfo'] as $prodInfo) : ?>
          <tr>
            <td style="background-color: <?= $prodInfo['hex']?>;"></td>
            <td style="font-size: 12px;"><?php echo $prodInfo['title']; ?></td>
            <td style="font-size: 12px;"><?php echo $prodInfo['address']; ?></td>
            <td style="font-size: 12px;"><?= date('F j, Y', strtotime($prodInfo['plant'] )) ?></td>
            <td style="font-size: 12px;">
              <?php 
                if($prodInfo['harvest'] != '0000-00-00'){
                  echo date('F j, Y', strtotime($prodInfo['harvest'] ));
                }else{
                  echo date('F j, Y', strtotime($prodInfo['actual'] ));
                }
              ?>
              
            <?php if ($prodInfo['remaining_days'] === 'already harvested'): ?>
                <td style="font-size: 12px;"> Already Harvested</td>
            <?php else: ?>
                <td style="font-size: 12px;"><?= $prodInfo['remaining_days'] ?></td>
            <?php endif; ?>
          </tr>
          <?php endforeach; ?>
          <?php else : ?>
          <tr>
                <td colspan="3">No data available.</td>
          </tr>
          <?php endif; ?>
        </tbody>
      </table>
    </div>
  </div>

<!-- oK NA mapping -->











  <h5 style="display:flex; justify-content:center; width:100%; margin:30px 0px 20px 0px;">FORECASTING OF ANNUAL PRODUCE IN TARLAC</h5>
  <div class="chart_data" Style="display:flex; justify-content:center;">
    

    <div class="chart_type">
        <select id="chartType" onchange="updateChartType()">
            <option value="bar">Bar Chart</option>
            <option value="line">Line Chart</option>
        </select>
    </div>

    <div class="chartss" id="div3">
        <canvas id="Mango"></canvas>
    </div>
    <div class="chartss" id="div4">
        <canvas id="Chart"></canvas>
    </div>
    <div class="chartss" id="div2">
        <canvas id="forecastChart"></canvas>
    </div>
    <div class="chartss" id="div1" style="display: block;">
        <canvas id="ricechart"></canvas>
    </div>


    <div class="toobleBtn">
      <!---->

      <button class="active" onclick="toggleDiv('div1', this)">Forcasted Rice Production in <span><b>2023<br><span style="color: #FF5733;"><?php echo $lastForecastRice === null ? 'N/A' : number_format($lastForecastRice, 2); ?></span> in Metric tons</b></span></button>
      <button onclick="toggleDiv('div2', this)">Forcasted Corn Production in <span><b>2023<br><span style="color: #FF5733;"><?php echo $lastForecastCorn === null ? 'N/A' : number_format($lastForecastCorn, 2); ?> </span> in Metric tons</b></span></button>
      <button onclick="toggleDiv('div3', this)">Forcasted Mango Production in <span><b>2023<br><span style="color: #FF5733;"><?php echo $lastForecastMango === null ? 'N/A' : number_format($lastForecastMango, 2); ?></span> in Metric tons</b></span></button>
      <button onclick="toggleDiv('div4', this)">Forcasted Banana Production in <span><b>2023<br><span style="color: #FF5733;"><?php echo $lastForecastBanana === null ? 'N/A' : number_format($lastForecastBanana, 2); ?></span> in Metric tons</b></span></button>
    </div>
  </div>

</main>


<style>
  
      /** charting style */

      .chart_data{
        gap: 20px;
        padding: 0;
        width: 100%;
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
    }
    .chart_type{
        
        position: ;
        margin: 0;
    }
    .toobleBtn{
        padding: 0;
        display: block;
        flex-wrap: wrap;
        width: 250px;
        height: auto;
    }
    .toobleBtn button{
        padding: 0;
        width: 270px;
        height: 70px;
        background-color: white;
        font-size: 14px;
        margin-top: 10.5px;
        border: .5px solid grey;
    }
    .chartss canvas {
        height: auto;
        width: min(95%, 650px);
    }
    .chartss{
        height: auto;
        width: min( 90%, 650px);
        /*border: 1px solid #f49131;
        border-radius: 1rem;*/
        background-color: white;
        background: #251c35; /*092918 251c35 008374*/
        box-shadow: 0 0 16 rgba(0, 0, 0, 8);
        display: none;
        padding: 1.5%;
        margin-right: 0;
    }
    .data_button{

        width: 40%;
        display: none;
    }   
    .chartJR{
        width: 300px;
        height: 60%;
    }     
    /* Add a CSS style for the active button */
    .toobleBtn button.active {
        background-color: #008374; /* Change the background color as desired */
        color: white; /* Change the text color as desired */
    }
    .cards{
        width: 175px; 
        height: 100%;         
    }
</style>

<script>


// JavaScript function to toggle a div by its ID
function toggleDiv(divId, buttonElement) {
    var div = document.getElementById(divId);
    var allDivs = document.querySelectorAll('.chartss'); // Select all divs with class 'hiddenDiv'
    var buttons = document.querySelectorAll('.toobleBtn button'); // Select all buttons

    // Remove 'active' class from all buttons
    buttons.forEach(function (button) {
        button.classList.remove('active');
    });

    // Add 'active' class to the clicked button
    buttonElement.classList.add('active');

    // Hide all divs except the one with the clicked ID
    allDivs.forEach(function (element) {
        if (element.id === divId) {
            element.style.display = 'block';
        } else {
            element.style.display = 'none';
        }
    });
}

// Set a default active div and button
var defaultDivId = 'div1'; // Replace with the ID of the default div
var defaultButton = document.querySelector('button[data-div="' + defaultDivId + '"]');
if (defaultButton) {
    toggleDiv(defaultDivId, defaultButton);
}
</script>




  <!-- ======= Footer ======= -->
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
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/impact-bootstrap-business-website-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->
  <!-- End Footer -->
  <style>
    .logoss img{
      margin: 0;
      padding: 0;
      width: min(70%, 200px);
      height: auto;
      mix-blend-mode: multiply;
    }
  </style>


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
  
</body>

</html>




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



<!-- JavaScript code to create and switch between multiple charts -->
<script>
     var riceChart, cornChart, bananaChart, mangoChart;
    
    // Get the canvas elements for each chart
    var riceCtx = document.getElementById('ricechart').getContext('2d');
    var cornCtx = document.getElementById('forecastChart').getContext('2d');
    var mangoCtx = document.getElementById('Mango').getContext('2d');
    var bananaCtx = document.getElementById('Chart').getContext('2d');
    
    // Define your data (actual and forecasted values)
    var forecastrice = <?= json_encode($forecastrice) ?>;
    var forecastcorn = <?= json_encode($forecast) ?>;
    var forecastMango = <?= json_encode($forecastMango) ?>;
    var forecastbanana = <?= json_encode($forecastbanana) ?>;

    // Define your data (actual and forecasted values)
    var actualRice = <?= json_encode(array_column($dataProduce, 'value')) ?>;
    var actualCorn = <?= json_encode(array_column($dataCORN, 'value')) ?>;
    var actualMango = <?= json_encode(array_column($Mango, 'value')) ?>;
    var actualBanana = <?= json_encode(array_column($dataBanana, 'value')) ?>;
    
    // Create the initial charts with the default type (bar)
    riceChart = createChart(riceCtx, 'bar', actualRice, 'Annual Rice Production in TARLAC', forecastrice, 'Forecast Value');
    cornChart = createChart(cornCtx, 'bar', actualCorn, 'Annual Corn Production in TARLAC', actualCorn, 'Forecast Value');
    bananaChart = createChart(bananaCtx, 'bar', actualBanana, 'Annual Banana Production in TARLAC', forecastMango, 'Forecast Value');
    mangoChart = createChart(mangoCtx, 'bar', actualMango, 'Annual Mango Production in TARLAC', actualMango, 'Forecast Value');
    
    function createChart(ctx, chartType, data, label, data2, label2) {
        var borderColor = function(context) {
            var index = context.dataIndex;
            if (index === data.length - 1) {
                return '#FF5733'; // Change the color for the last data point
            }
            return '#f49131'; // Default line color
        };

        var backgroundColor = function(context) {
            var index = context.dataIndex;
            if (index === data.length - 1) {
                return 'transparent'; // Change the color for the last data point #FF5733
            }
            return '#f49131'; // Default background color
        };

        var borderColor2 = function(context) {
            var index = context.dataIndex;
            if (index === data.length - 1) {
                return '#CED4DA'; // Change the color for the last data point
            }
            return '#CED4DA'; // Default line color
        };

        var backgroundColor2 = function(context) {
            var index = context.dataIndex;
            if (index === data.length - 1) {
                return '#CED4DA'; // Change the color for the last data point
            }
            return '#CED4DA '; // Default background color
        };

        var chartData = {
            labels: <?= json_encode(array_column($dataProduce, 'year')) ?>,
            datasets: [{
                label: label,
                data: data,
                borderColor: borderColor,
                backgroundColor: backgroundColor,
                fill: false
            },{label: label2,
                data: data2,
                borderColor: borderColor2,
                backgroundColor: backgroundColor2,
                fill: false
            }]
        };

        var chartOptions = {
            scales: {
                x: {
                    title: {
                        display: true,
                        text: 'Year'
                    }
                },
                y: {
                    title: {
                        display: true,
                        text: 'VALUE IN METRIC TONS'
                    }
                }
            }
        };

        return new Chart(ctx, {
            type: chartType,
            data: chartData,
            options: chartOptions
        });
    }

    function updateChartType() {
        var chartType = document.getElementById('chartType').value;
        
        // Destroy and recreate each chart with the selected type
        riceChart.destroy();
        cornChart.destroy();
        mangoChart.destroy();
        bananaChart.destroy();
        
        riceChart = createChart(riceCtx, chartType, actualRice, 'Annual Rice Production in TARLAC', forecastrice, 'Forecast Value');
        cornChart = createChart(cornCtx, chartType, actualCorn, 'Annual Corn Production in TARLAC', actualCorn, 'Forecast Value');
        mangoChart = createChart(mangoCtx, chartType, actualMango, 'Annual Mango Production in TARLAC', forecastMango, 'Forecast Value');
        bananaChart = createChart(bananaCtx, chartType, actualBanana, 'Annual Banana Production in TARLAC',  forecastbanana, 'Forecast Value');
    }





     
    function filterData(){
        
        // Get the values from the HTML elements
    var mindate = document.querySelector('#min').value;
    var maxdate = document.querySelector('#max').value;
    var hmindate = document.querySelector('#hmin').value;
    var hmaxdate = document.querySelector('#hmax').value;
    var select1 = document.querySelector('#select1').value;
    var select2 = document.querySelector('#select2').value;
    var q = document.querySelector('.output').textContent = hmaxdate;
    var select3 = document.querySelector('#add').value;

    // Create an XMLHTTPRequest object
    if(mindate===""){
        hmindate = "2020-01-01";
    }
    if(maxdate===""){
        hmaxdate = "2026-01-01";
    }
    if(hmindate===""){
        hmindate = "2020-01-01";
    }
    if(hmaxdate===""){
        hmaxdate = "2026-01-01";
    }else{
    var ajx = new XMLHttpRequest();

   
        var url = "<?= base_url() ?>PageController/sellermark/" + select1 + "/" + select2 + "/" + mindate + "/" + maxdate + "/" + hmindate + "/" + hmaxdate + "/" + select3;
    // Open and send the GET request

    /// Construct the URL for the AJAX request using PHP's base_url() function

    ajx.open("GET", url, true);
    ajx.send();
ajx.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        var data = JSON.parse(this.responseText);
        console.log(data);
       
        map.eachLayer(function (layer) {
    if (layer instanceof L.Circle) {
        map.removeLayer(layer);
    }
});
        for(var a = 0; a < data.length; a++) {
            
            var count= data[a].count;
            var fname= data[a].fname;
            var lname= data[a].lname;
            var adds= data[a].adds;
            var crops = data[a].crops;
            var hex = data[a].hex;
            var lat = data[a].lat;
            var lng = data[a].lng;
            var img = data[a].img;
            var shop = data[a].shop;
            var plant = data[a].plant;
            var harvest = data[a].harvest;
            var price = [data].price;
            var cat = data[a].cat;
            var sub = data[a].sub;
            

            var o = 1;
            var r = 0;
           
           
           
       
           
            
            var circle = L.circle([lat, lng], {
            color: hex,
            fillColor: hex,
            fillOpacity: 0.5,
            opacity: o,
            radius: 80 + count /////////////////////
          }).addTo(map);
         
           
        
            
          
         
          var imgUrl = '<?php echo base_url();?>upload/images/' + img;
        // Bind a popup with 'crops' and 'count' values
        circle.bindPopup("<table></tr><tr><td><img src='"+imgUrl+"' width='110px' height ='100px'/></td><td><b>" +  crops+cat + "</td></tr><tr><td><b>Shop name:</b> "+ shop +"</td><td><b>Seller name:</b> "+ fname + lname +"</td></td></tr><tr><td>No. of Item sold: ("+ count +")</td><td>"+ adds +"</td></tr><tr><td>Planted at: "+ plant +"</td><td>Harvested on: "+ harvest +"</td></tr></table>", {
className: 'custom-popup'

});

// Add a click event listener to each circle marker
circle.on('click', function(e) {
// Get the popup content
var popupContent = e.target.getPopup().getContent();

// Split the content by the separator "<br>"
var parts = popupContent.split("<br>");

// Extract individual pieces of information
var cropsInfo = parts[0];
//var sellerInfo = parts[1];
//var addressInfo = parts[2];
//var countInfo = parts[3];

// Display the information in separate HTML elements with appropriate IDs
document.getElementById('crops-info').innerHTML = cropsInfo;
document.getElementById('seller-info').innerHTML = sellerInfo;
document.getElementById('address-info').innerHTML = addressInfo;
document.getElementById('count-info').innerHTML = countInfo;
});
}
}
};
    }
}
function all(){
var ajxx = new XMLHttpRequest();

   
var url = "<?= base_url() ?>PageController/allsellermark/";
// Open and send the GET request

/// Construct the URL for the AJAX request using PHP's base_url() function

ajxx.open("GET", url, true);
ajxx.send();
ajxx.onreadystatechange = function() {
if (this.readyState == 4 && this.status == 200) {
var data = JSON.parse(this.responseText);
console.log(data);

map.eachLayer(function (layer) {
if (layer instanceof L.Circle) {
map.removeLayer(layer);
}
});
for(var a = 0; a < data.length; a++) {

var count= data[a].count;
var fname= data[a].fname;
var lname= data[a].lname;
var adds= data[a].adds;
var crops = data[a].crops;
var hex = data[a].hex;
var lat = data[a].lat;
var lng = data[a].lng;
var img = data[a].img;
var shop = data[a].shop;
var plant = data[a].plant;
var harvest = data[a].harvest;
var price = [data].price;
var cat = data[a].cat;
var sub = data[a].sub;


var o = 1;
var r = 0;






var circle = L.circle([lat, lng], {
color: hex,
fillColor: hex,
fillOpacity: 0.5,
opacity: o,
radius: 10 + count /////////////////////
}).addTo(map);






var imgUrl = '<?php echo base_url();?>upload/images/' + img;
// Bind a popup with 'crops' and 'count' values
circle.bindPopup("<table></tr><tr><td><img src='"+imgUrl+"' width='110px' height ='100px'/></td><td><b>" +  crops+cat + "</td></tr><tr><td><b>Shop name:</b> "+ shop +"</td><td><b>Seller name:</b> "+ fname + lname +"</td></td></tr><tr><td>No. of Item sold: ("+ count +")</td><td>"+ adds +"</td></tr><tr><td>Planted at: "+ plant +"</td><td>Harvested on: "+ harvest +"</td></tr></table>", {
className: 'custom-popup'

});

// Add a click event listener to each circle marker
circle.on('click', function(e) {
// Get the popup content
var popupContent = e.target.getPopup().getContent();

// Split the content by the separator "<br>"
var parts = popupContent.split("<br>");

// Extract individual pieces of information
var cropsInfo = parts[0];
//var sellerInfo = parts[1];
//var addressInfo = parts[2];
//var countInfo = parts[3];

// Display the information in separate HTML elements with appropriate IDs
document.getElementById('crops-info').innerHTML = cropsInfo;
document.getElementById('seller-info').innerHTML = sellerInfo;
document.getElementById('address-info').innerHTML = addressInfo;
document.getElementById('count-info').innerHTML = countInfo;
});
}
}
};
}

var ajxax = new XMLHttpRequest();

       
var url = "<?= base_url() ?>PageController/userloc/";
// Open and send the GET request

/// Construct the URL for the AJAX request using PHP's base_url() function

ajxax.open("GET", url, true);
ajxax.send();
ajxax.onreadystatechange = function() {
if (this.readyState == 4 && this.status == 200) {
var data = JSON.parse(this.responseText);
console.log(data);

for(var a = 0; a < data.length; a++) {
    
    var lat= data[a].lat;
    var lng= data[a].lng;

    L.marker([lat, lng]).addTo(map)
        .bindPopup("<b>You are here!</b>").openPopup();

   var p = L.circle([lat, lng], 10, {
    color: 'red',
    fillColor: '#f2d5df',
    fillOpacity: 0.2
}).addTo(map).bindPopup("This is a circle marker.");

};
}
}
var ajxx = new XMLHttpRequest();

   
var url = "<?= base_url() ?>PageController/allsellermark/";
// Open and send the GET request

/// Construct the URL for the AJAX request using PHP's base_url() function

ajxx.open("GET", url, true);
ajxx.send();
ajxx.onreadystatechange = function() {
if (this.readyState == 4 && this.status == 200) {
var data = JSON.parse(this.responseText);
console.log(data);

map.eachLayer(function (layer) {
if (layer instanceof L.Circle) {
map.removeLayer(layer);
}
});
for(var a = 0; a < data.length; a++) {

var count= data[a].count;
var fname= data[a].fname;
var lname= data[a].lname;
var adds= data[a].adds;
var crops = data[a].crops;
var hex = data[a].hex;
var lat = data[a].lat;
var lng = data[a].lng;
var img = data[a].img;
var shop = data[a].shop;
var plant = data[a].plant;
var harvest = data[a].harvest;
var price = [data].price;
var cat = data[a].cat;
var sub = data[a].sub;
var padd = data[a].padd;


var o = 1;
var r = 0;






var circle = L.circle([lat, lng], {
color: hex,
fillColor: hex,
fillOpacity: 0.5,
opacity: o,
radius: 10 + count /////////////////////
}).addTo(map);






var imgUrl = '<?php echo base_url();?>upload/images/' + img;
// Bind a popup with 'crops' and 'count' values
circle.bindPopup("<table></tr><tr><td><img src='"+imgUrl+"' width='110px' height ='100px'/></td><td><b>" +  crops + "</td></tr><tr><td><b>Shop name:</b> "+ shop +"</td><td><b>Seller name:</b> "+ fname + lname +"</td></td></tr><tr><td>No. of Item sold: ("+ count +")</td><td>"+ padd +"</td></tr><tr><td>Planted at: "+ plant +"</td><td>Harvested on: "+ harvest +"</td></tr></table>", {
className: 'custom-popup'

}).openPopup();

// Add a click event listener to each circle marker
circle.on('click', function(e) {
// Get the popup content
var popupContent = e.target.getPopup().getContent();

// Split the content by the separator "<br>"
var parts = popupContent.split("<br>");

// Extract individual pieces of information
var cropsInfo = parts[0];
//var sellerInfo = parts[1];
//var addressInfo = parts[2];
//var countInfo = parts[3];

// Display the information in separate HTML elements with appropriate IDs
document.getElementById('crops-info').innerHTML = cropsInfo;
document.getElementById('seller-info').innerHTML = sellerInfo;
document.getElementById('address-info').innerHTML = addressInfo;
document.getElementById('count-info').innerHTML = countInfo;
});
}
}
};
document.getElementById('categorySelect').addEventListener('change', function () {
    var selectedCategory = this.value;
    var tableRows = document.querySelectorAll('#legendTable tr');

    // Show/hide rows based on the selected category
    tableRows.forEach(function (row, index) {
        if (index === 0) {
            // Skip the header row
            return;
        }

        var categoryCell = row.cells[0];
        if (selectedCategory === "All" || categoryCell.textContent === selectedCategory) {
            row.style.display = 'table-row';
        } else {
            row.style.display = 'none';
        }
    });
});

</script>
<style>
    ul{
        width: 100%;
    }
    li input:hover{
        color: white;
        border: 1px solid #008374;
        background-color: #008374;
    }
    
    ul li{
        text-decoration: none;
        list-style: none;
        display: inline-flex;
        justify-content: space-around;
        font-size: 13px;
        margin: 1%;
    }
    #functionDropdown:hover{
        border: 1px solid #008374;
        color: #008374;
 
    }
    #toggleButton, #Filter{
        height: 30px;
        color: #008374;
        border: 1px solid #008374;
        background-color: white;
        width: 100px;
    }
    #toggleButton:hover, #functionDropdown:hover, #Filter:hover{
        color: white;
        border: 1px solid #008374;
        background-color: #008374;
    }
    
</style>

