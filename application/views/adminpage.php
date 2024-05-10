<h1 style="display: flex; justify-content:center;">AGROMART</h1>

<!--
<h3>First Name:   <?= $this->session->userdata('auth_user')['fname']; ?></h3>
<h3>Last Name:   <?= $this->session->userdata('auth_user')['lname']; ?></h3>
<h3>Emails:   <?= $this->session->userdata('auth_user')['email']; ?></h3>
-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Agromart-Admin</title>
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
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">
   <link href="assets/css/style.css" rel="stylesheet">


  <!-- =======================================================
  * Template Name: Impact - v1.2.0
  * Template URL: https://bootstrapmade.com/impact-bootstrap-business-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<style type="text/css">
  .body{

/*
#f6f6f6
#008374;
#00b6a1;
background:#008374;
*/ 
padding: 0;
margin-top: 18px;
color: black;
}
.sidebar {
float: left;
border: 1px solid black;
background:#00b6a1;
width: 0;
font-size: 20px;
height: 100%;
position: fixed; 
z-index: 1; 
top: 0;
left: 0;
overflow-x: hidden;
padding-top: 0;
transition: 0.5s;
}

/* Style the buttons that are used to open the tab content */
.sidebar button {
display: block;
color: black;
padding: 16px;
width: 100%;
border: none;
outline: none;
text-align: left;
cursor: pointer;
text-decoration: none;
font-size: 25px;
transition: 0.3s;
background: transparent;
position: relative;
border: 1px solid black;
list-style: none;
}

/* Change background color of buttons on hover */
.sidebar button:hover {
background-color: red;
color: black;
}

/* Create an active/current "tab button" class */
.sidebar button.active {
background-color: red;
}

.openbtn {
font-size: 30px;
cursor: pointer;
background: transparent;
padding: 15px 20px;
border: none;
position: absolute;
}

.closebtn {
color:  transparent;
background:  transparent;
align-items: center;
font-weight: 200;
font-size: 24px;
text-decoration: none;
margin-left: 30px;
margin-bottom: 5px;
position: absolute;
}

/* Style the tab content */
.tabcontent {
width: 100%;
height: 100%;
display: none;
}
.logout{
  color: black;
  text-decoration: none;
}
</style>


<body class="body">
  <div id="mySidebar" class="sidebar">
      <h3 style="background:#008374;">ADMINISTRATOR</h3>
      <button class="tablinks" onclick="openLoanManagement(event, 'Home')">Features</button>
      <button class="tablinks" onclick="openLoanManagement(event, 'Accounts')">Accounts</button>
      <button class="tablinks" onclick="openLoanManagement(event, 'Products')">Products</button>
      <button><a href="<?= base_url('logout') ?>" class="logout">Log out</a></button>
  </div>
      
    

  <div id="main" class="main" >
    <button class="openbtn" onclick="openNav()">&#9776;</button>

    <!--==== Home page ===== -->
    <div id="Home" class="tabcontent">
      <!-- ======= Best Selling Products ======= -->
      <section id="pricing" class="pricing sections-bg" >
        <div class="containers" data-aos="fade-up">
          <div class="section-header">
            <h1 id="title">BEST SELLING</h1>
          </div>
          <div class="row g-4 py-lg-5" data-aos="zoom-out" data-aos-delay="100" Style="display:inline-flex; margin:0; padding:0;">
            <!--Top 2-->
            <div class="col-lg-4 pies">
              <div class="pricing-item">
                <h3>RICE</h3> <!--Product Number 2-->
                <div class="space" >
                  <div class="pie animate" style="--p:75;--c:#ff8f0f;"> 
                    <h3>75%</h3><!--Percentage inside the pie-->
                  </div>
                </div>       
              </div>
            </div><!-- End Pricing Item -->
            <!--Top 1-->
            <div class="col-lg-4 pies">
              <div class="pricing-item featured">
                <h3>Business Plan</h3>
              <div class="space" >
                  <div class="pie animate" style="--p:80;--c:#2284e6;">
                    <h3>80%</h3>
                  </div>
                </div> 
              </div>
            </div><!-- End Pricing Item -->
            <!--Top 3-->
            <div class="col-lg-4 pies">
              <div class="pricing-item">
                <h3>CHECKEN</h3>
                <div class="space">
                  <div class="pie animate" style="--p:30;--c:#90EE90;">
                    <h3>30%</h3>
                  </div>
                </div>
              </div>
            </div><!-- End Pricing Item -->
          </div>
        </div>
      </section><!-- End Pricing Section -->

 
      <!--Charting of possible product trends-->
      <section id="chart" class="pricing sections-bg">


        <div class="section-header">
          <h1>Prediction of Future Product Trends</h1>
        </div>

        <div class="chart">
          <!-- partial:index.partial.html -->
          <script src="https://cdn.anychart.com/releases/8.11.0/js/anychart-base.min.js"></script>

          <div id="container"></div>
            <!-- partial -->
          <script src="<?php echo base_url('Impact/');?>assets/js/script.js"></script>
          </div>
        </section>
    </div><!-- ==== CLOSE HOME TABLINKS ===== -->

      <!-- ==== User Accounts ===== -->
    <div id="Accounts" class="tabcontent">
      <div class="tbl">
        <table>
          <thead style="Background: Green;">
            <th>Unique Id</th>
            <th>Name</th>
            <th>Address</th>
            <th>Email</th>
            <th>Password</th>
            <th>User Type</th>
            
            <th>Date Added</th>
            <th>Delete</th>
          </thead>
          <?php foreach($user as $item): ?>
          <tbody>
            <td><?= $item->unique_id ?></td>
            <td><?= $item->fname ?><?= $item->lname ?></td> 
            <td><?= $item->address ?></td>
            <td><?= $item->email ?></td>
            <td><?= $item->password ?></td>
            <td><?= $item->user_type ?></td>
         
            <td><?= $item->date_added ?></td>
            <td><a href="#">delete</a></td>
          </tbody>
          <?php endforeach; ?>
        </table>
      </div>
    </div><!-- ===== End of Users Account ==== -->

      <!-- ===== Product Display ===== -->
    <div id="Products" class="tabcontent" style="margin: 0; padding: 0;">
      <div class="tbl">
        <table>
          <thead>
            <th>Id</th>
            <th>Title</th>
            <th>Image</th>
            <th>Description</th>
            <th>Address</th>
            <th>Categpry</th>
            <th>Stocks</th>
            <th>Edit</th>
            <th>Delete</th>
          </thead>
          <!-- using $item to fetch data from databased -->
          <?php foreach($getInfo as $item): ?>
          <tbody>
            <td><?= $item->id ?></td>
            <td><?= $item->p_title ?></td>
            <td>
              <img src="<?= base_url('images/'. $item->p_image) ?>" alt="Product Image" width="75px" height="75px">
            </td>
            <td><?= $item->p_description ?></td>
            <td><?= $item->p_address ?></td>
            <td><?= $item->p_category ?></td>
            <td><?= $item->p_stocks ?></td>
            <td><a href="<?= base_url('products/edit/'. $item->id);?>" style="background: seagreen; padding: 12px;" class="btn">edit</a></td>
            <td><a href="<?= base_url('products/delete/'. $item->id);?>" style="background: crimson; font-size: auto; padding: 12px;" class="btn">del</a></td>
          </tbody>
          <?php endforeach; ?>
        </table>
      </div>
    </div>

                            <!--Full Name Example
            <div id="Features" class="tabcontent">
            <h2>Features</h2>
            <p>Features</p>
            
          </div>-->


 
      


    
  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <div id="preloader"></div>

<script>
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

  // Get all elements with class="tablinks" and remove the class "active"
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }

  // Show the current tab, and add an "active" class to the link that opened the tab
  document.getElementById(Open).style.display = "block";
  evt.currentTarget.className += " active";
}
</script>
  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
</body>
</html>



<style type="text/css">
  @property --p{
  syntax: '<number>';
  inherits: true;
  initial-value: 1;
}
.pie {
  --p:20;
  --b:22px;
  --c:darkred;
  --w:150px;

  width: var(--w);
  aspect-ratio: 1;
  position: relative;
  display: inline-grid;
  margin: 5px;
  place-content: center;
  font-size: 25px;
  font-weight: bold;
  font-family: sans-serif;
}
.pie:before,
.pie:after {
  content: "";
  position: absolute;
  border-radius: 50%;
}
.space{
  width: 75%;
  margin: auto;
  display: flex;
  justify-content: center;

}
.pie:before {
  inset: 0;
  background:
    radial-gradient(farthest-side,var(--c) 90%,#0000) top/var(--b) var(--b) no-repeat,
    conic-gradient(var(--c) calc(var(--p)*1%),#0000 0);
  -webkit-mask: radial-gradient(farthest-side,#0000 calc(99% - var(--b)),#000 calc(100% - var(--b)));
          mask: radial-gradient(farthest-side,#0000 calc(99% - var(--b)),#000 calc(100% - var(--b)));
}
.pie:after {
  inset: calc(50% - var(--b)/2);
  background: var(--c);
  transform: rotate(calc(var(--p)*3.6deg)) translateY(calc(50% - var(--w)/2));
}
.animate {
  animation: p 1s .5s both;
}
@keyframes p{
  from{--p:0}
}


/*  ====  PARA ITO SA CHARTING =====  */
      #chart{
        margin-top: 20px;
        height: 500px;
      }
      .chart{
        width: 900px;
        height: 400px;
        border: 2px solid red;
        margin-left: 10%;
        margin-right: 10%;
        margin-bottom: 20px;
      }
      .section-header{
        display: flex;
        justify-content: center;
      }

/* ====  best selling ===== */
    #pricing{
      position:relative; 
      display: flex;
    }
    #title{
      display: flex;
      justify-content: center;
    }
    .pies{
      border: 2px solid black;
      height: auto;
      width: 350px;
      margin: 2.5%;
      padding: .5%;
      align-items: center;
    }
    h3{
      display: flex;
      justify-content: center;
      font-weight: 900;
    }
    .text-center{
      font-weight: 700;
      font-size: 18px;
    }
    
    /* ===== Users Account ===== */
    .tbl{
  width: 100%;
  display: inline-flex;
  justify-content: center;

}

.tbl{
  width: 100%;
  display: inline-flex;
  justify-content: center;

}
table{
  border: 2px solid black;
  margin-top: 75px;
}
 th, td {
  border:1px solid black;
  height: 5PX;
  padding: 5px;
}
</style>
