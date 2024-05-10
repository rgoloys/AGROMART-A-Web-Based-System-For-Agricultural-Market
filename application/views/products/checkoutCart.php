
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
     <h1>Agromart<span><img src="<?php echo base_url('Impact/');?>assets/img/Logoo.png" class="img-fluid" alt="" style="height: 200px; width:60px;"></span></h1>
   </a>
   <nav id="navbar">
     <ul>
      <li>
        <div class="search-bar" style="display: flex;justify-content: space-between;">
            <!--
            <input class="searchInput" type="text" id="searchInput" placeholder="Sign Up and experience our exclusive features">
            <button class="searchBtn" type="button" id="searchButton">Search</button>
            -->
            <form action="<?php echo base_url('perform_search');?>" method="post">
                <input class="searchInput" type="text" name="keyword" placeholder="Search products..." Style="display:none;">
                <input class="searchBtn" id="searchButton" type="submit" value="Search" Style="width:70px; display:none;" >
            </form>
            <a href="<?php echo base_url('myCart/'. $this->session->userdata('auth_user')['user_id']); ?>" ><img style="width:70px; height:55px;" src="<?= base_url('Impact/icons/Lcart.png')?>"></a>
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
  input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

/* Firefox */
input[type=number] {
  -moz-appearance: textfield;
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
    .searchBtn{
      margin-top: 5px;
      width: 50px;
      height: 40px;
      color: #FFFF;
      background-color: #008374;
      font-weight: 500;
      border: 1px solid white;
    }
    .searchBtn:hover{
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




  <style>
    .navbar ul li a{
      font-family: sans-serif, serif;
      color: #FFFF;
    }
    .container{
      
      flex-wrap: wrap;
    }
    .container h3{
      display:flex; 
      justify-content:center;
    }
    
    .qrImg img{
      width:300px; 
      height: 450px;
    }
  .stepProcess ul li{
    list-style: none;
    text-decoration: none;
    font-size: 18px;
    padding: 12px;
  }
  .hide{
    display:flex; 
    justify-content:start;
  }
  .payment{
    margin-top: 30px;
  }
table {
 
  font-family: arial, sans-serif;
  width: 100%;
}
td, th, tr{
 
 
  text-align: left;
  padding: 0;
}
th img{
  display: flex;
  flex-wrap: wrap;
  width: 100px; 
  height: 100px;
}
.plus-minus-buttons {
  display: flex;
  justify-content: center;
  align-items: center;
}
.plus, .minus {
  cursor: pointer;
  font-weight: 900;
  margin: 5px;
}
#CODContainer{
  display: none; 
  border: 1px dashed #008374; 
  width: 500px; 
  margin: 12px;
  text-align: center;
}
#CODContainer button{
  border:none; 
  font-size: 20px;
  background: #f85a40; 
  padding: 8px;
  width: 150px;
}
td .plus-minus-buttons input{
  width:  50px;
  border: none;
  text-align: center;
}
.totals{
  width: 120px; 
  border: none;
}
.payment label h5{
  display:flex; 
  justify-content:center;
}
.submits{
  display:flex; 
  justify-content:center; 
  margin: 50px;
}
.submits button{
  border:none; 
  font-size: 20px;
  background: #f85a40; 
  padding: 8px;
  width: 150px;
}
.tblsss{
  display: flex; 
  justify-content:space-between; 
  width:100%;
  padding: 0 50px 0 90px;
}
.porty{
  width:40%;
}
.sixty{
  width:60%;
}
td{
  width: 50%;
}
td img{
  width:150x; 
  height:150px;
}
.ckout button, #CODContainer button{
  border: 1px solid #008374;
  background-color: #008374;
  color: white;
  padding: 5px 10px;
  width: 100%;
}
.ckout button:hover, #CODContainer button:hover{
  border: 1px solid #008374;
  background-color: white;
  color: #008374;
}
#imageContainer1 img{
  display: flex;
  justify-content: center;
  width: min(98%, 500px);
}
.spacer{
  width: 500px;
}
.DelieveryAddress h6{
  width:100%; 
  display:flex; 
  justify-content:space-between;
}
.snamess{
  display: flex;
  justify-content: space-between;
}
.snamess b{
  color: #008374;
}
.snamess img{
  width:25px; 
  height:25px;
}
td img{
  padding: 8px; 
  width:150px; 
  height:auto;
}
.functionDropdown option{
  height: 10px;
  font-size: 14px;
}
td h6 input{
  color: #008374; 
  width:100%;
  text-align: START;
  border:none;
}
@media (max-width: 768px) {
  td img{
    padding: 8px; 
    width:100px; 
    height:auto;
  }
  .snamess{
    font-size: 14px;
  }
  .snamess img{
    width:20px; 
    height:20px;
  }
  .DelieveryAddress h6{
    width:100%; 
    display:flex; 
    justify-content:space-between;
    font-size: 14px;
  }
  .DelieveryAddress ul li{
    font-size: 12px;
  }
  .spacer{
  display: none;
  }
  table, tr, td{
    width: 100%;
   
    display: flex;

  }
  .porty, .sixty{
    width: 100%;
  }

  .tblsss{
    display: flex; 
    justify-content:space-between; 
    width:100%;
    padding: 0;
  }
  td img{
    width:100x; 
    height:100px;
  }
  .container{
      flex-wrap: wrap;
      width: min(100%, 450px);
    }
  .container h3{
    font-size: 16px;
  }
  table, td, th, tr {
    width: min(100%, 420px);
    padding: 0;
    font-size: 14px;
    display: flex;
    flex-wrap: wrap;
  }
  th img{
  width: 50px; 
  height: 50px;
}
  td .plus-minus-buttons input{
    width:  50px;
  }
  .payment{
    margin: 0;
    padding: 0;
  }
  .payment label h5{
    margin: 0;
    font-size: 16px;
    font-weight: 400;
  }
  .payment #functionDropdown{
    margin-top: 8px ;
    margin-bottom: 12px;
    height: 25px;
    font-size: 14px;
  }
  .hide{
    display:block; 
    justify-content:start;
  }
  .qrImg img{
      width: min(100%, 520px); 
      height: auto;
    }
  .stepProcess ul li{
    list-style: none;
    text-decoration: none;
    font-size: 14px;
    padding: 6px;
  }
  #submit{
    display:flex; 
    justify-content:start; 
    margin: 1.5%;
    padding: 0;
  }
  #submit{
    border:none; 
    font-size: 16px;
    background: #f85a40; 
    padding: 2px;
    width: 100px;
  }
  
  #CODContainer{
    display: none; 
    border: 1px dashed #008374; 
    width: min(90%, 350px); 
    margin: 12px;
    text-align: center;
  }
  #CODContainer button{
    border:none; 
    font-size: 16px;
    background: #f85a40; 
    padding: 2px;
    width: 100px;
  }
}


  </style>
<main class="main">
  
<div class="container">  
  <!--eto ung directory na pupuntahan pagka save ng product sa form-->
  <form action="<?= base_url('orderedCart/'. $checkoutValue->cart_id); ?>" method="POST" enctype="multipart/form-data" >

  <div class="DelieveryAddress" style="padding: 12px;box-shadow: 2px 2px 4px #008374;border-radius: 5px; margin:1.5% 1.5%;">
    <h6><b>Delievery Address</b><span><a href="<?php echo base_url('editMyAccount/'. $buyer->unique_id ."#MyAddress")?>">edit</a></span></h6> 
    <ul>
      <li><b><?= $dlvryAddrss->fname; ?> <?= $dlvryAddrss->lname; ?> | <?= $dlvryAddrss->number; ?></b></li>
      <li><?= $dlvryAddrss->Street; ?>, Brgy. <?= $dlvryAddrss->Barangay; ?></li>
      <li><?= $dlvryAddrss->Municipality; ?>, <?= $dlvryAddrss->Provice; ?></li>
      <li><?= $dlvryAddrss->OtherAddress; ?></li>
    </ul>    <hr>
 
    <p class="snamess"><span>Product ID: <input type="text" name="p_id" value="<?= $checkoutValue->p_id ?>"  readonly style="border:none;"></span> <span><img src="<?= base_url('/Impact/icons/icons8-shop-94.png'); ?>">Shop: <b><?= $checkoutValue->sname; ?></b></span></p>    
    <div class="tblsss">
      <table class="porty">
        <tr>
          <td rowspan="3"><img src="<?= base_url('/upload/images/'. $checkoutValue->image1) ?>"></td>
          <td style="color: #008374;"><?= $checkoutValue->p_title; ?></td>
        </tr>
        <tr>
          <td>Price: ₱<?= $checkoutValue->p_price; ?></td>
        </tr>
        <tr>
          <td>Pack size: ₱<?= $checkoutValue->p_size; ?></td>
        </tr>
      </table>
      
      <div class="spacer"></div>
      
      <table class="sixty">
        <tr>
          <th colspan="2">Payment Details</th>
        </tr>
        <tr>
          <td>Price:</td>
          <td>₱<?= $checkoutValue->p_price; ?></td>
        </tr>
        <tr>
          <td>Shipping fee: </td>
          <td>₱<?= $checkoutValue->p_shipping; ?></td>
        </tr>
        <tr>
          <td>Quantity: </td>
          <td class="qtyy" style="cursor:pointer;display:flex; justify-content:start; width: 100%;">
              
                
                
                  <input type="number" class="qty" name="Quantity" value="<?= $checkoutValue->Quantity; ?>" min="1" max="<?= $checkoutValue->p_stocks; ?>" readonly style="width:30px; text-align: center; border:none;">
                
                
              
          </td>
          </tr>
           <tr>
               
               
          
              
                
   <?php
if ($checkoutValue->dnum != 0) {
    if ($checkoutValue->dnum <= $checkoutValue->Quantity) {
        echo '<td>Discount:</td>
              <td class="qtyy" style="cursor:pointer; display:flex; justify-content:start; width: 100%;">
                 ' . ($checkoutValue->dprice * $checkoutValue->Quantity) . '
              </td>';
    } else {
        echo "" ;
    }
}
?>
                
              
          
          
          
          
          <tr>
          <td><h6 style="color: #008374;">Total Payment: </h6></td>
          <td><h6 style="color: #008374;">₱<input class="ttls" type="number" name="Total_Price" id="sumS"  
        value="<?= $checkoutValue->Total_Price - ($checkoutValue->dprice * $checkoutValue->Quantity); ?>" readonly></h6>
          </td>
        </tr>
      </table>
    </div>
   



        <label for="functionDropdown"><h6><strong>Choose Payment Method:</strong></h6></label>
        <select id="functionDropdown" name="PaymentMethod">
          <option value="none">Select payment option</option>
          <option value="agrocash">AGRO-CASH</option>
          <option value="gcash">Gcash QR-Code</option>
          <option value="COD">Cash On Delievery</option>
        </select>
        
        <div id="output">   
        </div>


          <div id="imageContainer" style="display: none;  text-align: center;">
            
            <div class="qrCode">
              <img id="displayedImage" src="<?php echo base_url('/Impact/assets/img/QR.jpg')?>"  style="width: 200px; height:auto;"> 
              <div class="SSSDDD">
                <p style="margin-top: 12px;">Pay using our gcash qr code <br>or via gcash number <span style="color: red;">0951-0598-340</span>.</p>
                <p>
                  <label>Upload your gcash receipt here:</label><br>
                  <input type="file" name="Reciept" accept="image/*">
                </p>
                <p class="ckout"><button type="submit" id="submit">Checkout</button></p>
              </div>
            </div>
          </div>

          <div id="imageContainer1" style="display: none; justify-content:center; text-align:center;">
            <img id="image" src="<?php echo base_url('/Impact/assets/img/agrocash.png')?>">
          </div>
       
          <div id="CODContainer"  style="display: none; width: min(90%, 700px); text-align;center;">
            
                <h6>Cash On Delievery Selected</h6>
                <p>Please prepare the exact ammount upon delievery. Thank you!</p>
                <button type="submit" id="submit">Check Out</button>
            
          </div>
   
        </div>
        </form>
    
      </div>
</main>


<script>
       function updateQuantity(action) {
        var inputElement = document.querySelector('.qty');
        var currentValue = parseInt(inputElement.value);
        var max = <?= $product->p_stocks; ?>;

        if (action === 'add') {
            if(currentValue >= max){
              alert('Sorry, you acquired the maximum stocks available.!!');
            }else{
              inputElement.value = currentValue + 1;
            }
            
        } else if (action === 'sub' && currentValue > 1) {
            inputElement.value = currentValue - 1;
        }

        calculateTotal();
    }

    function calculateTotal() {
        var quantity = parseInt(document.querySelector('.qty').value);
        var price = parseFloat('<?= $product->p_price; ?>'); // Assuming $product->p_price is the product price

        var shipping = <?= $product->p_shipping; ?>; // Assuming $product->p_shipping is the shipping cost
        var total = quantity * (price + shipping);
      
        document.getElementById('sumS').value = total.toFixed(2);
    }
</script>

<script>
/*  const unitPrice = <?= $product->p_price; ?>;
const shipFee = <?= $product->p_shipping; ?>;
const stock = <?= $product->p_stocks; ?>;
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
function updateTotal(quantityInput) {
  const parentRow = quantityInput.closest('tr');
  const price = unitPrice;
  const quantity = parseInt(quantityInput.value);
  const total = price * quantity + shipFee;
  
  // Update total purchase and stock display
  parentRow.querySelector('.totals').textContent = total.toFixed(2);
  parentRow.querySelector('.STCKS').textContent = (maxStock - quantity).toFixed(3);

  // Update the hidden input fields for form submission
  document.getElementById("sums").value = total;
  document.getElementById("Stocks").value = (maxStock - quantity);
}

// Initial update based on default quantity (1)
updateTotal(quantityInputs[0]);

*/








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
  }
});
</script>


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
  </footer><!-- End Footer -->
  <!-- End Footer -->
  <style>
    .logoss img{
      width: min(10vw, 150px);
      height: 130px;
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
  