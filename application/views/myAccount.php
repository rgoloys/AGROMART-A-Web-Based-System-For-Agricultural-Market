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
   <section id="topbar" class="topbar d-flex align-items-center" >
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
          width:100%; /* Make the search bar full width on smaller screens */
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
      font-size: 18px;
    }
    .td:hover{
      color: #008374;
    }
    table, tr, td{
      width: 100%;
      display: inline-flex;
      justify-content: space-evenly;
      padding: 0;
    }


</style>


<body class="body">

      
      
<style>
  table, tr, td{
    padding-left: 4rem;
    margin-right: 50px;
    font-size: 20x;
  }
  tr{
    padding: 1.5%;
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
td img{
  width:70px; 
  height: 60px;
}
/*
.w3-container{
  height: 500px;
  overflow: scroll;
} */


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
@media (max-width: 768px) {
    #status{
    display:flex; 
    justify-content:center;
    height: 25px;
    margin: 0% .5% 0% .5%;
  }
  
    #status .w3-button {
    margin: 0% .2% 0% .2%;
    width: 200px;
    background-color: #008374;
    border: 3px solid #008374;
    color: white;
    font-weight: 600;
  }
  
  table, tr, td{
    font-size: 20px;
    padding: 0;
    margin: 0;
  }
  tr{
    padding: 0;
    margin: 0;
  }
  td{
    width: 60px;
    display: flex;
    justify-content: center;
    align-content: center;
    flex-wrap: wrap;
    padding: 0;
    margin: 0;
  }
  td img{
    width: 50px;
    height: 50px;
    padding: 0;
    margin: 0;
  }
  td .btn{
    font-size: 20px;
  }
  h6, p{
    font-size: 20px;
    text-align: center;
  }
  #status button{
    font-size: 10px;
  }
  #status{
    display:flex; 
    justify-content:center;
    height: 25px;
    margin: 0% .5% 0% .5%;
  }

}

    .order {
    
      padding: 10px;
      margin-bottom: 10px;
      font-size: 18px;
      display: flex;
      align-items: center;
    }
    .p{
          font-size:16px;
      }
    .date {
      flex: 1;
    }
    .product {
      flex: 2;
      font-size: 18px;
      display: flex;
      align-items: center;
    }
    .product-image {
      width: 50px;
      height: 50px;
      margin-right: 10px;
    }
      .product-image {
      width: 100px; /* Increase the image size */
      height: 100px; /* Increase the image size */
      margin-right: 10px;
    }
    .product-details {
     
    }
    .price-info {
      flex: 1;
      
      text-align: right;
      font-weight: bold;
    }
    .quality, .price, .total, .status {
      flex: 1;
   
      text-align: center;
    }
    .status a{
      padding: 0 12px 0 12px;
     
    }
    .check{
      color: #008374; 
      border: 1px solid #008374;
    }
    .check:hover{
      color: #d9534f; 
    }
    .remove{
      color: #d9534f; border: 1px solid #d9534f;

    }
    .out{
      color:crimson; 
      outline: 1px solid crimson; 
      padding: 5px 10px;
    }
     /* Responsive CSS */
    @media (max-width: 768px) {
      .date, .product-details, .price-info, .quality, .price, .total, .status {
        font-size: 10px; /* Smaller font size in responsive view */
      }

      .product {
        flex: 1;
        flex-direction: column;
        align-items: flex-start;
      }
      .product-image {
        width: 40px;
        height: 40px;
        margin-right: 0;
        margin-bottom: 10px;
      }
      .out{
        padding: 1px;
        font-size: 8px;
        
      }
    
    }
 @media screen and (max-width: 768px) {
  .w3-bar .w3-button {
    width: 100%;
    padding: 1px 1px; /* Equal padding top and bottom for mobile view */
  } .p{
      font-size:10px;
  }
}
  </style>
</style>
  <div id="main" class="main" >
    <!--<button class="openbtn" onclick="openNav()">&#9776;</button>-->


      <!-- ==== MyCart ===== -->
    



      <!-- ===== MyPurchase ===== -->
    <div id="MyPurchase" class="tabcontent" style="margin: 0; padding: 0; display: block;">
  
      <hr><h6 style="display:flex; justify-content:center; width:100%;">Manage and protect your carts</h6>
      <p style="display:flex; justify-content:center; width:100%;"></p><hr>
  
        <div class="w3-bar w3-black" id="status">
            <button class="w3-bar-item w3-button  w3-active" onclick="openCity('cart')">My Cart</button>
          <!--<button class="w3-bar-item w3-button  " onclick="openCity('All')">All</button>-->
          <button class="w3-bar-item w3-button" onclick="openCity('Pending')">Pending</button>
          <button class="w3-bar-item w3-button" onclick="openCity('Paris')">Ship</button>
          <button class="w3-bar-item w3-button" onclick="openCity('toRate')">Rate</button>
          <button class="w3-bar-item w3-button" onclick="openCity('Completed')">Completed</button>
          <button class="w3-bar-item w3-button" onclick="openCity('Cancelled')">Cancelled</button>
        </div><hr>
        



<div id="cart" class="w3-container city">
  <?php if(empty($cart)): ?>
    <br>
    <p style="text-align: center; font-size: 24px;">Cart is currently empty</p>
  <?php else: ?>


    
  <?php foreach ($cart as $cartItem): ?>
    <?php if($cartItem['p_stocks'] >= 1) {?>

    <div style="border: 1px solid grey; ">
      <div class="p">
        <time datetime="2020-01-01"><?= date('F j, Y', strtotime($cartItem['Date_Added'])) ?></time>
      </div>
      <div class="order">
        <div class="date" style="display:flex; justify-content:space-evenly;"><br>
          <p class="p">Product ID: <?= $cartItem['id']; ?></p>
         <!-- <p><input type="checkbox" style="height:20px; width:20px;"></p>  -->
          <p><input type="checkbox" style="height:20px; width:20px;" onchange="updateCounter()"></p>
        </div>
        <div class="product">
          <img class="product-image" src="<?= base_url('/upload/images/' . $cartItem['image1']) ?>" alt="Product Image">
          <div class="product-details">
            <a href="<?= base_url('productDetails/' . $cartItem['id']); ?>"><?= $cartItem['p_title'] ?></a><br>
            <?= $cartItem['Quantity']; ?> <?= $cartItem['p_stocks_Unit']; ?>
          </div>
        </div>
        <div class="price-info">
          <div class="price">Price: ₱<?= $cartItem['p_price']; ?></div>
          <div class="total">Total: ₱<?= $cartItem['Total_Price']; ?></div>
        </div>
        <div class="status" >
            <a href="<?= base_url('checkoutCart/' . $cartItem['cart_id']); ?>" class="check"><b>Checkout</b></a>
            <a href="<?= base_url('order/delete/' . $cartItem['cart_id']); ?>" class="remove"><b>Delete</b></a>
        </div>
      </div>
    </div>
    <br>
    
  

    <script>
        var checkboxCounter = 0;

        function updateCounter() {
            var checkboxes = document.querySelectorAll('input[type="checkbox"]');
            var counter = 0;

            checkboxes.forEach(function (checkbox) {
                if (checkbox.checked) {
                    counter++;
                }
            });

            checkboxCounter = counter;
            document.getElementById('count').textContent = checkboxCounter;
        }
    </script>

    <?php }else if($cartItem['p_stocks'] <= 0){?>
      <div style="border: 1px solid grey; ">
        <div class="p">
          <time datetime="2020-01-01"><?= date('F j, Y', strtotime($cartItem['Date_Added'])) ?></time>
        </div>
        <div class="order">
          <div class="date"><br><p class="p">Product ID: <?= $cartItem['id']; ?></p></div>
          <div class="product">
            <img class="product-image" src="<?= base_url('/upload/images/' . $cartItem['image1']) ?>" alt="Product Image">
            <div class="product-details">
              <a href="<?= base_url('productDetails/' . $cartItem['id']); ?>"><?= $cartItem['p_title'] ?></a><br>
              <p class="out" >Currently out of stocks</p>
            </div>
          </div>
        <div class="price-info">
          <div class="price">Price: ₱<?= $cartItem['p_price']; ?></div>
          <div class="total">Total: ₱<?= $cartItem['Total_Price']; ?></div>
        </div>
        <div class="status" >
            <a href="<?= base_url('order/delete/' . $cartItem['cart_id']); ?>" class="remove"><b>Delete</b></a>
        </div>
    </div>
    <br>
    <?php }?>
  <?php endforeach; ?>
<?php endif; ?>

    <div style="display: flex; justify-content:space-around; border:1px solid grey; padding-top: 1%;">
        <p id="counter"><b>Selected Products: [ <span id="count">0</span> ]</b>  </p>
        <p><b style="padding:3px; border: 1.5px solid #008374;color: #008374;">Checkout</b> <b style="padding:3px; color: #d9534f; border: 1px solid #d9534f;">Delete</b></p>
    </div>
</div>






<!--
<?php foreach($order as $order): ?>
        <div id="All" class="w3-container city" style="display:none">
            <div class="p"> <time datetime="2020-01-01"><?= date('F j, Y', strtotime($order['date_added'])) ?>  </div>
  <div class="order">
    <div class="date"><br><p class="p" ">Product ID:<?= $order['id'];?></p></div>
    
    <div class="product">
      <img class="product-image" src="<?= base_url('/upload/images/' . $order['image1']) ?>" alt="Product Image">
      <div class="product-details">
       <a href="<?php echo base_url('productDetails/' . $order['id']); ?>"><?= $order['p_title'] ?></a><br>
       <b> Price:  ₱<?= $order['OrUnitPrice']; ?> </b>
      </div>
    </div>
    <div class="price-info">
      <div class="price"> <?= $order['Quantity']; ?> <?= $order['p_stocks_Unit']; ?> </div>
      <div class="total">Total: ₱<?= $order['Total_Price']; ?></div>
    </div>
   <div class="status" style="background-color: 
    <?php
    if ($status === 'Pending') {
        echo 'grey';
    } elseif ($status === 'To-Ship') {
        echo 'green';
    } else {
        // Default color if status is neither 'Pending' nor 'To-Ship'
        echo 'default_color'; // Change 'default_color' to your desired default color
    }
    ?>;
">
    <?= $status; ?>
    </div>
  </div>
<?php endforeach; ?>
           <hr>
          
        </div>-->




    <div id="Pending" class="w3-container city" style="display: none">
    <?php if (empty($pending)): ?>
        <p style="text-align: center; font-size: 24px;"> <br> There are currently no pending items</p>
    <?php else: ?>
        <?php foreach ($pending as $pendingItem): ?>
            <div style="border: 1px solid grey">
                <div class="p">
                    <time datetime="2020-01-01"><?= date('F j, Y', strtotime($pendingItem['date'])) ?></time>
                </div>
                <div class="order">
                    <div class="date"><br><p class="p">Product ID: <?= $pendingItem['id']; ?></p></div>
                    <div class="product">
                        <img class="product-image" src="<?= base_url('/upload/images/' . $pendingItem['image1']) ?>"
                            alt="Product Image">
                        <div class="product-details">
                            <a href="<?= base_url('productDetails/' . $pendingItem['id']); ?>">
                                <?= $pendingItem['p_title'] ?>
                            </a><br>
                            Quality: <?= $pendingItem['Quantity']; ?>
                        </div>
                    </div>
                    <div class="price-info">
                        <div class="price">Price: ₱<?= $pendingItem['OrUnitPrice']; ?></div>
                        <div class="total">Total: ₱<?= $pendingItem['Total_Price']; ?></div>
                    </div>
                    <div class="status" style="background-color:#d9534f;">
                        <a href="<?= base_url('cancel/' . $pendingItem['order_id']); ?>"
                            style="color: black;">Cancel</a>
                    </div>
                </div>
            </div>
            <br>
        <?php endforeach; ?>
    <?php endif; ?>
</div>

       <div id="Paris" class="w3-container city" style="display:none">
    <?php if (empty($toShip)): ?>
        <p style="text-align: center; font-size: 24px;">No data Available</p>
    <?php else: ?>
        <?php foreach ($toShip as $toShipItem): ?>
            <div style="border: 1px solid grey">
                <div class="p">
                    <time datetime="2020-01-01"><?= date('F j, Y', strtotime($toShipItem['dateShip'])) ?></time>
                </div>
                <div class="order">
                    <div class="date"><br><p class="p">Product ID: <?= $toShipItem['id']; ?></p></div>
                    <div class="product">
                        <img class="product-image" src="<?= base_url('/upload/images/' . $toShipItem['image1']) ?>"
                            alt="Product Image">
                        <div class="product-details">
                            <a href="<?= base_url('productDetails/' . $toShipItem['id']); ?>">
                                <?= $toShipItem['p_title'] ?>
                            </a><br>
                            Quality: <?= $toShipItem['Quantity']; ?>
                        </div>
                    </div>
                    <div class="price-info">
                        <div class="price">Price: ₱<?= $toShipItem['OrUnitPrice']; ?></div>
                        <div class="total">Total: ₱<?= $toShipItem['Total_Price']; ?></div>
                    </div>
                    <div class="status"><?= $toShipItem['Status']; ?></div>
                </div>
            </div>
            <br>
        <?php endforeach; ?>
    <?php endif; ?>
</div>

       <div id="toRate" class="w3-container city" style="display: none;">
    <?php if (empty($delievered)): ?>
        <p style="text-align: center; font-size: 24px;">No data Available</p>
    <?php else: ?>
        <?php foreach ($delievered as $deliveredItem): ?>
            <div style="border: 1px solid grey">
                <div class="p">
                    <time datetime="2020-01-01"><?= date('F j, Y', strtotime($deliveredItem['date_delievered'])) ?></time>
                </div>
                <div class="order">
                    <div class="date"><br><p class="p">Product ID: <?= $deliveredItem['id']; ?></p></div>
                    <div class="product">
                        <img class="product-image" src="<?= base_url('/upload/images/' . $deliveredItem['image1']) ?>"
                            alt="Product Image">
                        <div class="product-details">
                            <a href="<?= base_url('productDetails/' . $deliveredItem['id']); ?>">
                                <?= $deliveredItem['p_title'] ?>
                            </a><br>
                            Quality: <?= $deliveredItem['Quantity']; ?>
                        </div>
                    </div>
                    <div class="price-info">
                        <div class="price">Price: ₱<?= $deliveredItem['OrUnitPrice']; ?></div>
                        <div class="total">Total: ₱<?= $deliveredItem['Total_Price']; ?></div>
                    </div>
                    <div class="status">
                        <a href="<?= base_url('rate/' . $deliveredItem['id']); ?>" style="color: Black;"><b>Rate</b></a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        <?php endif; ?>
</div>

        <div id="Completed" class="w3-container city" style="display: none;">
    <?php if (empty($completed)): ?>
        <p style="text-align: center; font-size: 24px;">No data</p>
    <?php else: ?>
        <?php foreach ($completed as $completedItem): ?>
            <div style="border: 1px solid grey">
                <div class="p">
                    <time datetime="2020-01-01"><?= date('F j, Y', strtotime($completedItem['date_completed'])) ?></time>
                </div>
                <div class="order">
                    <div class="date"><br><p class="p">Product ID: <?= $completedItem['id']; ?></p></div>
                    <div class="product">
                        <img class="product-image" src="<?= base_url('/upload/images/' . $completedItem['image1']) ?>"
                            alt="Product Image">
                        <div class="product-details">
                            <a href="<?= base_url('productDetails/' . $completedItem['id']); ?>">
                                <?= $completedItem['p_title'] ?>
                            </a><br>
                            Quality: <?= $completedItem['Quantity']; ?>
                        </div>
                    </div>
                    <div class="price-info">
                        <div class="price">Price: ₱<?= $completedItem['OrUnitPrice']; ?></div>
                        <div class="total">Total: ₱<?= $completedItem['Total_Price']; ?></div>
                    </div>
                    <div class="status"><?= $completedItem['Status']; ?></div>
                </div>
            </div>
            <br>
        <?php endforeach; ?>
    <?php endif; ?>
</div>
        
        
        

   <div id="Cancelled" class="w3-container city" style="display: none;">
    <?php if (empty($cancel)): ?>
        <p style="text-align: center; font-size: 24px;">No data Available</p>
    <?php else: ?>
        <?php foreach ($cancel as $cancelItem): ?>
            <div style="border: 1px solid grey">
                <div class="p">
                    <time datetime="2020-01-01"><?= date('F j, Y', strtotime($cancelItem['date_cancel'])) ?></time>
                </div>
                <div class="order">
                    <div class="date"><br><p class="p">Product ID: <?= $cancelItem['id']; ?></p></div>
                    <div class="product">
                        <img class="product-image" src="<?= base_url('/upload/images/' . $cancelItem['image1']) ?>"
                            alt="Product Image">
                        <div class="product-details">
                            <a href="<?= base_url('productDetails/' . $cancelItem['id']); ?>">
                                <?= $cancelItem['p_title'] ?>
                            </a><br>
                            Quality: <?= $cancelItem['Quantity']; ?>
                        </div>
                    </div>
                    <div class="price-info">
                        <div class="price">Price: ₱<?= $cancelItem['OrUnitPrice']; ?></div>
                        <div class="total">Total: ₱<?= $cancelItem['Total_Price']; ?></div>
                    </div>
                    <div class="status"><?= $cancelItem['Status']; ?></div>
                </div>
            </div>
            <br>
        <?php endforeach; ?>
    <?php endif; ?>
</div>

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
 


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
  margin-top: 9.5%;
  height: 80%; /* 100% Full-height */
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


/* ===== CSS FOR MY PURCHASE ===== */

  /* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
@media screen and (max-height: 450px) {
  .sidebar {padding-top: 15px;}
  .sidebar a {font-size: 18px;}
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