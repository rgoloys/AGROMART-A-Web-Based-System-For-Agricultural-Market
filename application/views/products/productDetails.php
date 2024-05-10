
<style>
  
/* Add styles for the carousel */
.carousel-container {
    width: 750px;
    height: 300px;
    display: block;
}
.carousel-slide {
    width: 100%;
    height: 300px;
    display: none;
}
.carousel-slide img {
    width: 100%;
    height: 300px;
    display: flex;
    justify-content: center;
}
.carousel-slide video{
    width: 100%;
    height: 300px;
    display: flex;

}
.car{
  display: flex;
  justify-content: space-around;
}

/* Add styles for the gallery */
.image-gallery {
    display: block;
    gap: 20px;
    padding: 1.5%;
    height: 300px;

}
.image-gallery img {
    width: 120px;
    height: 120px;
    margin: 0 10px;
    cursor: pointer;
}
.image-gallery video {
    width: 100px;
    height: 100px;
    margin: 0 10px;
    cursor: pointer;
}
.image-gallery button{
  background-color: #008374;
    color: white;
    border: none;
    padding: 10px 20px;
    cursor: pointer;
    font-weight: 500;
    height: 40px;
}
/* Style the previous and next buttons 
#prevBtn, #nextBtn, #toggleButton {
    background-color: #008374;
    color: white;
    border: none;
    padding: 10px 20px;
    cursor: pointer;
    font-weight: 500;
    height: 40px;
    margin: 10% 3px 0px 3px;

    
}
#prevBtn:hover, #nextBtn:hover, #toggleButton:hover{
  background-color: #f85a40;
  color: #008374;
  font-weight: 500;
}*/

@media (max-width: 768px) {
  .car{
    display: block;
    flex wrap: wrap;      
    width: min(97%, 500px);
  }
  .carousel-container {
      width: min(100%, 500px);
      height: 250px;
      display: block;
  }
  .carousel-slide {
      width: 100%;
      height: 250px;
      display: none;
  }
  .carousel-slide img {
      width: 100%;
      height: 250px;
      display: flex;
      justify-content: center;
  }
  .carousel-slide video{
      width: 100%;
      height: 250px;
      display: flex;
  }
  .image-gallery {
    width: min(100%, 500px);
    display: block;
    align-content: center;
    gap: 15px;
    height: auto;
  }
  .image-gallery img {
      width: 55px;
      height: 50px;
      cursor: pointer;
  }
  .image-gallery video {
    display: none;
    width: 40px;
      height: 40px;
      cursor: pointer;
  }
  .image-gallery button{
    background-color: #008374;
      color: white;
      border: none;
      padding: 5px 10px;
      cursor: pointer;
      font-weight: 400;
      height: 35px;
  }
}
</style>
<main id="main" style="margin-top: -50px;">
<!-- ======= Product Details Section ======= -->
<section id="blog" class="blog">
  <div class="container" data-aos="fade-up">
    <div class="row g-5" style="display:flex; justify-content:center;" >
      <div class="col-lg-8" style="width: 100%;">
        <article class="blog-details" style="width: 100%;margin:0; padding: 2%;">
        <div class="car">
          <div class="carousel-container">
              <div class="carousel-slide">
                <video controls autoplay loop>
                  <source src="<?= base_url('/upload/videos/'. $product->video_file) ?>" type="video/mp4">
                  <source src="<?= base_url('/upload/videos/'. $product->video_file) ?>" type="video/avi">
                  <source src="<?= base_url('/upload/videos/'. $product->video_file) ?>" type="video/flv">
                  Your browser does not support the video tag.
                </video>
              </div>
              <div class="carousel-slide">
                  <img src="<?= base_url('/upload/images/'. $product->image1) ?>" alt="Image 2">
              </div>
              <div class="carousel-slide">
                  <img src="<?= base_url('/upload/images/'. $product->image2) ?>" alt="Image 3">
              </div>
              <div class="carousel-slide">
                  <img src="<?= base_url('/upload/images/'. $product->image3) ?>" alt="Image 3">
              </div>
              <div class="carousel-slide">
                  <img src="<?= base_url('/upload/images/'. $product->image4) ?>" alt="Image 3">
              </div>
              <div class="carousel-slide">
                  <img src="<?= base_url('/upload/images/'. $product->image5) ?>" alt="Image 3">
              </div>
          </div>
            <div class="image-gallery">
          
              <img src="<?= base_url('/upload/images/'. $product->image1) ?>" alt="Image 1">
              <img src="<?= base_url('/upload/images/'. $product->image2) ?>" alt="Image 2">
              <img src="<?= base_url('/upload/images/'. $product->image3) ?>" alt="Image 3">
              <img src="<?= base_url('/upload/images/'. $product->image4) ?>" alt="Image 3">
              <img src="<?= base_url('/upload/images/'. $product->image5) ?>" alt="Image 3">

              <video controls autoplay loop>
                <source src="<?= base_url('/upload/videos/'. $product->video_file) ?>" type="video/mp4">
                <source src="<?= base_url('/upload/videos/'. $product->video_file) ?>" type="video/avi">
                <source src="<?= base_url('/upload/videos/'. $product->video_file) ?>" type="video/flv">
                Your browser does not support the video tag.
              </video>
              <button id="prevBtn">Previous</button>
              <button id="nextBtn">Next</button>
            </div>
        </div>
      </div><!-- End meta bottom -->
    </article><!-- End blog post -->
  </div>



<style>
  input::-webkit-outer-spin-button,
  input::-webkit-inner-spin-button {
    -webkit-appearance: none;
    margin: 0;
  }

  /* Firefox */
  input[type=number] {
  -moz-appearance: textfield;
  }

  .prodinfoCon{
    display: flex;
    justify-content: center;
  }

  .tbl_pd { 
    width: 1024px;
  }
  .th_pd{ 
    width: 100%;
  }
  .tr_pd{
    height: 40px;
  }
  .td_pd{ 
    width: 150px;
  }
  .td_pd img{   
    width: 30px;
    height: 30px;
    padding: 0;
    margin:0;
  }
  .td_pd .plus-minus-buttons input{
    width: 30px;
    border: none;
    text-align: center;
  }
  .total{ 
    width: 50px;
    border: none;
    text-align: start;
  }
  .star{
    font-size: 16px;
    font-weight: 100;
  }
  .star img{
    width: 80px;
    height: 65px;
  }
  .tbl_rate{
    height: 100px;
  }
  .tr_imgRate{
    display: flex;
    justify-content: start;
  }
  .td_imgRate img{
    width: 100px;
    height: 100px;
    margin: 0 12px 0 12px;
  }
  .td_pd .STCKS{
    text-align:end; 
    width: 40px; 
    border:none;
  }
  @media (max-width: 768px) {
    .tbl_pd { 
      width: 100%;
      flex-wrap: wrap;
    }
    .tr_pd{
      flex-wrap: wrap;
      height: 40px;
    }
    .td_pd{
      flex-wrap: wrap;
      width: 150px;
      font-size: 12px;
    }
    .td_pd img{
      flex-wrap: wrap;
      width: 30px;
      height: 30px;
      padding: 0;
      margin:0;
    }
    .td_pd .plus-minus-buttons input{
      width: 50px;
      border: none;
      text-align: center;
      flex-wrap: wrap;
    }
    .total{
      width: 50px;
      border: none;
      text-align: start;
    }
    .star{
      font-size: 18px;
      font-weight: 100;
    }
    .star img{
      width: 90px;
      height: 65px;
    }
    .tbl_rate{
      height: 100px;
    }
    .tr_imgRate{
      display: flex;
      justify-content: start;
    }
    .td_imgRate img{
      width: 100px;
      height: 100px;
      margin: 0 12px 0 12px;
    }
    .td_pd .STCKS{
      text-align:center; 
      width: 30px; 
      border:none;
    }
  }
  @media (max-width: 425px) {
    .centerss{
      display: flex;
      justify-content: center;
      flex-wrap: wrap;
    }
    .tbl_pd { 
      width: 100%;
      flex-wrap: wrap;
    }
    .tr_pd{ 
      flex-wrap: wrap;

    }
    .td_pd{
      flex-wrap: wrap;
      width: 100px;
      font-size: 10px;
    }
    .td_pd img{
      width: 15px;
      height: 15px;
      flex-wrap: wrap;
    }
    .td_pd .plus-minus-buttons input{
      width: 50px;
      border: none;
      text-align: center;
    }
    .total{
      width: 50px;
      border: none;
      text-align: start;
      flex-wrap: wrap;
    }
    .star{
      font-size: 18px;
      font-weight: 100;
    }
    .star img{
      width: 90px;
      height: 65px;
    }
    .tbl_rate{
      height: 100px;
    }
    .tr_imgRate{
      display: flex;
      justify-content: start;
      flex-wrap: wrap;
    }
    .td_imgRate img{
      flex-wrap: wrap;
      width: 100px;
      height: 100px;
      margin: 0 12px 0 12px;
    }
    .td_pd .STCKS{
      text-align:center; 
      width: 30px; 
      border:none;
    }
    .th_pd h4{
        font-size: 16px;
    }
  }
</style>


  <div class="blog-details prodinfoCon">
      <form action="<?= base_url('cart/'. $product->id); ?>" method="POST" enctype="multipart/form-data" >
     
        <div class="centerss">
        <table class="tbl_pd">
         <tr class="tr_pd">
    <th colspan="4" class="th_pd">
        <h4 style="display:flex; justify-content:center;">
    <p>
      <b>
    <?= $product->p_title; ?> <?= $product->p_description; ?> <br>

    <?php if ($product->dnum !== null): ?>
        <span style="font-size: 14px; color: green; padding: 10px; display: flex; align-items: center;">
            Buy <?= $product->dnum; ?> get less <?= $product->dprice; ?> in each Product
            <img src="<?= base_url('Impact/icons/coupon.png') ?>" alt="Overlay Image" id="ab" class="overlay" style="height: 30px; margin-left: 10px;">
        </span>
    <?php endif; ?>
</b>
    </p>
</h4>
    </th>
</tr>

          <tr class="tr_pd">
            <td colspan="2"  class="td_pd"><img src="<?= base_url('/Impact/icons/icons8-shop-94.png'); ?>" >Shop Name: <b style="color: #008374;"> <?= $product->sname; ?></b></td>
            <td class="td_pd"></td>
            <td class="td_pd">Address: <?= $product->p_address; ?></td>
          </tr>

          <tr class="tr_pd">
            <td class="td_pd">Planted:
                <time datetime="2020-01-01"><?= date('F j, Y', strtotime($getDatePlant->date_planted)) ?></td>
            <td class="td_pd">Harvested:
                <time datetime="2020-01-01"><?= date('F j, Y', strtotime($getDateHarvest->date_harvested)) ?></td>
            <td class="td_pd">Estimated Status: <?php echo $Status; ?></td>
            <td class="td_pd">Unit Price: ₱ <?= $product->p_price; ?></td>
          </tr>


          <tr class="tr_pd">
            <td rowspan="2" class="td_pd">Ratings (<?= $countRate->countRate; ?>)<span class="star"><?php if($avgRate->avgRate == 5){ ?>
                  <img src="<?= base_url('/Impact/icons/five.png')?>">
                <?php }elseif($avgRate->avgRate == 4){ ?>
                  <img src="<?= base_url('/Impact/icons/four.png')?>">
                <?php }elseif($avgRate->avgRate == 3){ ?>
                  <img src="<?= base_url('/Impact/icons/three.png')?>">
                <?php }elseif($avgRate->avgRate == 2){ ?>
                  <img src="<?= base_url('/Impact/icons/two.png')?>">
                <?php }elseif($avgRate->avgRate == 1){ ?>
                  <img src="<?= base_url('/Impact/icons/one.png')?>">
                <?php }else{ ?>
                  <img src="<?= base_url('/Impact/icons/zeo.png')?>">
                <?php }?></span>
            </td>
            <td class="td_pd">Packsize: <?= $product->p_size; ?></td>
            <td class="td_pd">Brand/Variety: <?= $product->p_brand; ?></td>
            <td class="td_pd">Shipping fee: ₱ <?= $product->p_shipping; ?></td>

          </tr>


          <tr class="tr_pd">
            <!--td class="td_pd">Color: <?= $product->p_color; ?></td -->
           
            <td  class="td_pd">Available stocks:<input class="STCKS"  min="0"  type="number" name="newStocks" value="<?= $product->p_stocks; ?>" id="Stocks"  readonly readonly><?= $product->p_stocks_Unit; ?></td>
            <td style="cursor:pointer;" class="td_pd">
              <div class="plus-minus-buttons">Quantity: <br>
                <span class="minus">-</span>
                <input type="number" class="quantity" name="Quantity" value="1" min="1" readonly style="width:30px;">
                <span class="plus">+</span>
              </div>
            </td>
            <td class="td_pd">Total Purchase: ₱ <input class="total" type="number" name="Total_Price" id="sum"  
            value="<?php if($product->p_shipping == 50){echo $product->p_price + $product->p_shipping;}else{echo $product->p_price;}  ?>" readonly><td>
            
          </tr>

        </table>
        </div>



        <div class="meta-bottom">
          <?php if($this->session->has_userdata('authenticated')){ ?>
            <a class="CartBtn"><button type="submit" name="cart"><span>Add to Cart </span><img id="aa" src="<?php echo base_url('/Impact/icons/icons8-shop-48.png')?>" ></button></a>
            <a href="<?= base_url('checkout/'.$product->id); ?>" class="BuyNowBtn" style="color:white;" >Buy Now</a>
            <!-- p  onclick="checkout()" class="BuyNowBtn" style="color:white;" >Buy Now</p>-->
          <?php }else{?>
            <p class="CartBtn" onclick="showCustomAlert()"><span>Add to Cart </span><img src="<?php echo base_url('/Impact/icons/icons8-shop-48.png')?>" ></a>
            <p  onclick="showCustomAlert()" class="BuyNowBtn" style="color:white;" >Buy Now</p>
          <?php }?>
        </div>
     
              <!-- checkout na to -->
      <div id="checkout" class="custom-checkout">
        <p class="exits" onclick="closeCustomAlert()">x</p>
        
        <div class="payment">
          <label for="functionDropdown"><h5><strong>Choose Payment Method:</strong></h5></label>
          <select id="functionDropdown" name="PaymentMethod">
            <option value="none">Select payment method</option>
            <option value="agrocash">AGRO-CASH</option>
            <option value="gcash">Gcash QR-Code</option>
            <option value="COD">Cash On Delievery</option>
          </select>
          
          <div id="output">
            
          </div>
          <div id="imageContainer" style="display: none;">
            <img id="displayedImage" src="<?php echo base_url('/Impact/assets/img/QR-Code.jpg')?>">
            <ul>
              <li><strong>Step 1:</strong>Open your own Gcash App.</li>
              <li><strong>Step 2:</strong>Send your payment via QR Code or through Gcash <span style="color: red;">#0951-0598-340</span></li>
              <li><strong>Step 3:</strong>Scan the QR Code in your screen.</li>
              <li><strong>Step 4:</strong>Pay your total purchase</li>
              <li><strong>Step 5:</strong>DOWNLOAD your reciept.</li>
              <li><strong>Step 6:</strong>Then Upload your reciept. Serve as your Prof of payment.</li>
              <li><strong>Step 7:</strong>You may proceed to checkout button.</li>
              <li><label><strong>Upload Reciept:</strong></label>
                  <input type="file" name="Reciept"><br><br>
              </li>
              <li><button type="submit" name="cart">Check Out</button></li>
            </ul>
        
              
            
          </div>
           <div id="imageContainer1" style="display: none;">
            <img id="displayedImage" src="<?php echo base_url('/Impact/assets/img/agrocash.png')?>">
          
              
            
          </div>
           
          </div>
          <div id="CODContainer"  style="display: none;">
            <div class="COD">
            <h6>Cash On Delievery Selected</h6>
            <p>Please prepare the exact ammount upon delievery. Thank you!</p>
            
            <button type="submit" id="submit" name="cart">Check Out</button>
            </div>
          </div>
         
        </div>

      </form>
    </div>
  
     <!-- Custom alert dialog -->
      <div id="customAlert" class="custom-alert">
        <p class="exits" onclick="closeCustomAlert()">x</p>
        <h2>Oopss..!</h2>
        <p>You haven't log in yet.</p>
        <p>You may click log in button if you have already an account and sign up if not.</p>
        <div class="btsRL">
          <button class="btnsRL"><a href="<?php echo base_url('register'); ?>">Sign Up</a></button>
          <button class="btnsRL"><a href="<?php echo base_url('login'); ?>">Log in</a></button>
        </div>
      </div>
  
        <div class="comments" style="display:flex; justify-content:center;">
            <div class="fdb">
              <h4 class="comments-count">Feedbacks & Ratings </h4>

         
              <?php if($checkRate != 0 ){ ?>
              <?php foreach ($rate as $row): ?>
                <p><b><?= $row['fname']; ?> <?= $row['lname']; ?></b> <!--span class="feedStar">
                  <?php if($row['rating'] == 5){ ?>
                    <img src="<?= base_url('/Impact/icons/five.png')?>">
                  <?php }elseif($row['rating'] == 4){ ?>
                    <img src="<?= base_url('/Impact/icons/four.png')?>">
                  <?php }elseif($row['rating'] == 3){ ?>
                    <img src="<?= base_url('/Impact/icons/three.png')?>">
                  <?php }elseif($row['rating'] == 2){ ?>
                    <img src="<?= base_url('/Impact/icons/two.png')?>">
                  <?php }elseif($row['rating'] == 1){ ?>
                    <img src="<?= base_url('/Impact/icons/one.png')?>">
                  <?php }else{ ?>
                    <img src="<?= base_url('/Impact/icons/zeo.png')?>">
                  <?php }?></span--> </p>
                <time datetime="2020-01-01"><?= date('F j, Y', strtotime($date)) ?>
                <p><b>Rate:</b>
                    <?php if( $row['rating'] == 5 ){
                        echo "Excellent";
                      }else if( $row['rating'] == 4 ){
                        echo "Good";
                      }else if( $row['rating'] == 3 ){
                        echo "Satisfied";
                      }else if( $row['rating'] == 2 ){
                        echo "Bad";
                      }else{
                        echo "Terrible";
                      }
                    ?>
                </p>
                <p><strong>Comment:</strong><?php echo $row['comment']; ?></p>
               
                <table class="tbl_rate">
                  <tr class="tr_imgRate">
                    <td class="td_imgRate"> 
                      <a href="<?= base_url('upload/rate/'.$row['rate1']); ?>" data-gallery="portfolio-gallery-app" class="glightbox">
                        <img src="<?= base_url('upload/rate/'.$row['rate1'])?>">
                      </a>
                    </td>
                    <td class="td_imgRate"> 
                      <a href="<?= base_url('upload/rate/'.$row['rate2']); ?>" data-gallery="portfolio-gallery-app" class="glightbox">
                        <img src="<?= base_url('upload/rate/'.$row['rate2'])?>">
                      </a>
                    </td>
                    <td class="td_imgRate"> 
                      <a href="<?= base_url('upload/rate/'.$row['rate3']); ?>" data-gallery="portfolio-gallery-app" class="glightbox">
                        <img src="<?= base_url('upload/rate/'.$row['rate3'])?>">
                      </a>
                    </td>
                    <td class="td_imgRate"> 
                      <a href="<?= base_url('upload/rate/'.$row['rate4']); ?>" data-gallery="portfolio-gallery-app" class="glightbox">
                        <img src="<?= base_url('upload/rate/'.$row['rate4'])?>">
                      </a>
                    </td>
                  </tr>
                </table>
        
              <?php endforeach; ?>
              <?php }else{?>
                <p style="color: crimson;">Product has 0 feedbacks, Purchase and share to us your experience.</p>
              <?php } ?>
          </div><!-- End comment #1 -->
        </div>
      </div>
    </div><!-- End blog comments --> 
  </div> 
</section><!-- End Blog Details Section -->


    <script>
      const stocks = <?= $product->p_stocks; ?>;

        function showCustomAlert() {
            document.getElementById('customAlert').style.display = 'block';
        }

        function checkout() {
          document.getElementById('checkout').style.display = 'block';
        }

        function closeCustomAlert() {
            document.getElementById('customAlert').style.display = 'none';
            document.getElementById('checkout').style.display = 'none';
        }

        
  /* === FOR DROP DOWN LIST === */
  // Get the select element
  const functionDropdown = document.getElementById('functionDropdown');

// Get the element to display the output
const outputDiv = document.getElementById('output');

// Add an event listener to the select element
functionDropdown.addEventListener('change', function () {
  const selectedFunction = functionDropdown.value;
  outputDiv.innerHTML = '';

  if (selectedFunction === 'agrocash') {
      // Function 1: Display an alert
       CODContainer.style.display = 'none';
         imageContainer.style.display = 'none';
     imageContainer1.style.display = 'block';
  } else if (selectedFunction === 'COD') {
      // Function 3: Change background color
      CODContainer.style.display = 'block';
      imageContainer.style.display = 'none';
      imageContainer1.style.display = 'none';
  } else if (selectedFunction === 'gcash') {
      // Function 4: Display an image
      CODContainer.style.display = 'none';
      imageContainer.style.display = 'block';
      imageContainer1.style.display = 'none';
      //outputDiv.innerHTML = 'Please Scan the QR-Code below or using Gcash number';
  } else {
      // Hide the image container if none of the above options are selected
      imageContainer.style.display = 'none';
      imageContainer1.style.display = 'none';
  }
});
    </script>
<style>
  * {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: "Poppins", sans-serif;
  }
  #imageContainer img{
    display: flex;
    justify-content: center;
    width: 100%;
    height: 400px;
  }
  #imageContainer1 img{
    display: flex;
    justify-content: center;
    width: 100%;
    height: 400px;
  }
  
  ul li{
    font-size: 12px;
  }
  .COD{
    margin-top: 8px;
    border: 1px solid #008374;
  }
  .COD h6{
    color: #008374;
  }
  .COD button,   ul li button{
    width: 100%;
    color: white;
    font-weight: 500;
    background-color:  #008374;
    border: 1px solid #008374;
  }
  .COD button:hover,   ul li button:hover{
    color: #008374;
    background-color:  white;
    border: 1px solid #008374;
  }
  .btsRL{
    width: 100%;
    display: flex;
    justify-content:end;
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
    margin: 0 12px 0 12px;
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
  }
  .custom-checkout{
    display: none;
    position: absolute;
    top: 60%;
    left: 50%;
    transform: translate(-50%, -50%);
    background: white;
    padding: 20px;
    z-index: 999;
    box-shadow: 4px 4px 8px #008374; 
    border-radius: 5px;
  }

  .comments-count{
    width:100%; 
    display:flex; 
    justify-content:space-between;
  }
  .fdb{
    width: 1024px;
  }
  button {
      margin-top: 10px;
      padding: 5px 10px;
      background-color: #007bff;
      color: #fff;
      border: none;
      border-radius: 3px;
      cursor: pointer;
  }
  .hide {
    display: none;
  }
  .show {
    display: grid;
  }
  .meta-bottom{ 
    font-weight: 900; 
    display:flex; 
    justify-content: flex-end; 
    font-size:20px; 
    height: 40px;
  }
  .CartBtn img{
    width: 28px; 
    height: 28px;
  }
  .CartBtn, .BuyNowBtn{
    font-weight: 900;
    color: #008374; 
    border:2px solid #008374; 
    width: 180px; 
    height:50px; 
    display:flex; 
    justify-content:center; 
    align-items:center;
    margin-left: 20px;
    cursor: pointer;
    flex-wrap: wrap;
  }
  .CartBtn:hover{
    color: #f85a40; 
    border: 2px solid #f85a40; 
  }
  .CartBtn{
    font-weight: 100;
  }
  .BuyNowBtn:hover{
    color: #008374; 
    border: 2px solid #f85a40; 
    background-color: #f85a40;
  }
  .BuyNowBtn{
    background-color: #008374;
  }

  .CartBtn button,  .BuyNowBtn button{
    background: none; 
    color:#008374; 
    margin-bottom:12px;
  }
  .td_imgRate a img{
      width: 100px; 
      height: 100px;
  }

  @media (max-width: 768px) {
    * {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: "Poppins", sans-serif;
  }
  #ab{
      height: 20px;
      margin-left: 10px;
  }
    #imageContainer1 img{
    display: flex;
    justify-content: center;
    width: 100%;
    height: 100px;
  }
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
  }
  .custom-checkout{
    display: none;
    position: absolute;
    top: 60%;
    left: 50%;
    transform: translate(-50%, -50%);
    background: white;
    padding: 20px;
    z-index: 999;
    box-shadow: 4px 4px 8px #008374; 
    border-radius: 5px;
  }
  .fdb{
    width: 768px;
  }
  button {
      margin-top: 10px;
      padding: 5px 10px;
      background-color: #007bff;
      color: #fff;
      border: none;
      border-radius: 3px;
      cursor: pointer;
  }

  .hide {
    display: none;
  }
  .show {
    display: grid;
  }

  
  .meta-bottom{ 
    display:flex; 
    justify-content: flex-end; 
  }
  .CartBtn img{
    width: 20px; 
    height: 20px;
  }
  .CartBtn, .BuyNowBtn{ 
    font-weight: 500;
    color: #008374; 
    border:2px solid #008374; 
    width: 180px; 
    height:30px; 
    display:flex; 
    justify-content:center; 
    align-items:center;
    margin-left: 16px;
    flex-wrap: wrap;
  }
  .CartBtn button,  .BuyNowBtn button{
    background: none; 
    color:#008374; 
    margin-bottom: 5px;
  }
  .comments-count{
    font-size: 18px;
  }
  .td_imgRate a img{
      width: 80px; 
      height: 80px;
  }
}
@media (max-width: 425px) {
  * {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: "Poppins", sans-serif;
  }
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
  }
  .custom-checkout{
    display: none;
    position: absolute;
    top: 60%;
    left: 50%;
    transform: translate(-50%, -50%);
    background: white;
    padding: 20px;
    z-index: 999;
    box-shadow: 4px 4px 8px #008374; 
    border-radius: 5px;
  }
  .fdb{
    width: 100%;
  }
  .comments-count{
    font-size: 18px;
  }
  .star{
    font-size: 12px;
  }
    button {
        margin-top: 10px;
        padding: 5px 10px;
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 3px;
        cursor: pointer;
    }

  .hide {
    display: none;
  }
  .show {
    display: grid;
  }
  .meta-bottom{ 
    display:flex; 
    justify-content: space-evenly; 
    font-size:12px; 
  }
  .CartBtn img{
    width: 15px; 
    height: 15px;
  }
  .CartBtn, .BuyNowBtn{
    font-weight: 550;
    color: #008374; 
    border:1.5px solid #008374; 
    width: 120px; 
    height: 35px; 
    display:flex; 
    justify-content:center; 
    align-items:center;
  }
  .CartBtn button,  .BuyNowBtn button{
    background: none; 
    color:#008374; 
    margin-bottom:15px;
  }
    .td_imgRate a img{
      width: 75px; 
      height: 75px;
  }
}
</style>



</main><!-- End #main -->

<script>
  /* For getting the total purchase */
  const unitPrice = <?= $prod->p_price; ?>;
  const maxStock = <?= $product->p_stocks; ?>; // Set the maximum stock initially
  // Get all quantity input elements
  const quantityInputs = document.querySelectorAll('.quantity');

  // Attach event listeners to plus and minus buttons
  document.querySelectorAll('.plus').forEach(plusBtn => {
    plusBtn.addEventListener('click', incrementQuantity);
  });
        
  document.querySelectorAll('.minus').forEach(minusBtn => {
    minusBtn.addEventListener('click', decrementQuantity);
  });

  // Function to increment quantity
  function incrementQuantity(event) {
    const parent = event.target.parentElement;
    const quantityInput = parent.querySelector('.quantity');
    //quantityInput.value = parseInt(quantityInput.value) + 1;
    //updateTotal(quantityInput);
    if (parseInt(quantityInput.value) < maxStock) {
      quantityInput.value = parseInt(quantityInput.value) + 1;
      updateTotal(quantityInput);
    }
  }

  // Function to decrement quantity
  function decrementQuantity(event) {
    const parent = event.target.parentElement;
    const quantityInput = parent.querySelector('.quantity');
    if (parseInt(quantityInput.value) > 1) {
      quantityInput.value = parseInt(quantityInput.value) - 1;
      updateTotal(quantityInput);
    }
  }

  // Function to update total when quantity changes
  var num = <?= $prod->p_price; ?>;
  const shipFee = <?= $product->p_shipping; ?>;
  function updateTotal(quantityInput) {
    const parentRow = quantityInput.closest('tr');
    const price = parseFloat(parentRow.querySelector('td:nth-child(2)').textContent.replace('$', ''));
    const quantity = parseInt(quantityInput.value);
    const total = num * quantity;
    const totals = total + shipFee;

    const test = maxStock - quantity;
    parentRow.querySelector('.total').textContent = totals.toFixed(2);
    parentRow.querySelector('.STCKS').textContent = test.toFixed(3);
    let x = 100 + 50;
    document.getElementById("sum").value = totals;
    document.getElementById("Stocks").value = test;

    
  }



 

  /* for image carousel */
  document.addEventListener("DOMContentLoaded", function () {
    const slides = document.querySelectorAll(".carousel-slide");
    const galleryImages = document.querySelectorAll(".image-gallery img");
    let currentIndex = 0;

    function showSlide(index) {
        slides.forEach((slide, i) => {
            if (i === index) {
                slide.style.display = "block";
            } else {
                slide.style.display = "none";
            }
        });
    }

    function nextSlide() {
        currentIndex = (currentIndex + 1) % slides.length;
        showSlide(currentIndex);
    }

    function prevSlide() {
        currentIndex = (currentIndex - 1 + slides.length) % slides.length;
        showSlide(currentIndex);
    }

    function showImageGallery(index) {
        galleryImages.forEach((image, i) => {
            if (i === index) {
                image.style.border = "2px solid #007bff";
            } else {
                image.style.border = "none";
            }
        });
    }

    galleryImages.forEach((image, i) => {
        image.addEventListener("click", () => {
            currentIndex = i;
            showSlide(currentIndex);
            showImageGallery(currentIndex);
        });
    });

    document.getElementById("nextBtn").addEventListener("click", nextSlide);
    document.getElementById("prevBtn").addEventListener("click", prevSlide);

    // Show the initial slide and gallery
    showSlide(currentIndex);
    showImageGallery(currentIndex);
});

</script>
