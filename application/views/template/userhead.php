<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
   integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
   crossorigin=""/>
   <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
   integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
   crossorigin=""></script>
	<link rel="stylesheet" href="style.css">

	<link rel="stylesheet" href="<?= base_url('Impact/assets/css/new.css')?>">
	<title>AdminSite</title>

	   <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


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
        <div class="search-bar" style=" display:flex;justify-content:space-between;">
            <form action="<?php echo base_url('perform_search');?>" method="post">
                <input class="searchInput" type="text" name="keyword" placeholder="Search products...">
                <input class="searchBtn" id="searchButton" type="submit" value="Search" Style="width:70px;" >
            </form>
            <a href="<?php echo base_url('myCart/'. $this->session->userdata('auth_user')['user_id']); ?>" style="display:flex; justify-content:end;"><img style="width:70px; height:55px;" src="<?= base_url('Impact/icons/Lcart.png')?>"></a>
        </div>
      </li>
     </ul>
   </nav><!-- .navbar -->

   <!--<i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
   <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i> -->

 </div>

</header><!-- End Header -->
<!-- End Header -->
	
	<!-- SIDEBAR -->
	<section id="sidebar" style="position:absolute; height:auto; padding: 0;"></section>
	
	
	<!-- NAVBAR -->
	<section id="contents" style="padding: 0;">
		<!-- NAVBAR -->
		<nav style="background-color: none;" >
			<i class='bx bx-menu toggle-sidebar'style="color: white;" ></i>
			

			<div style="display:none;" class="profile" style="outline:1px dashed red;">
				<img src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixid=MnwxMjA3fDB8MHxzZWFyY2h8NHx8cGVvcGxlfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="">
			</div>
		</nav>
		<!-- NAVBAR -->
	</section>
		<main>





    


	<style type="text/css">
		@import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700&display=swap');




main .data {
	display: flex;
	grid-gap: 20px;
	margin-top: 20px;
	flex-wrap: wrap;
}
main .data .content-data {
	flex-grow: 1;
	flex-basis: 400px;
	background: var(--light);
	border-radius: 10px;
	box-shadow: 2px 2px 8px grey;
}
main .content-data .head {
	display: flex;
	justify-content: space-between;
	align-items: center;
	margin-bottom: 24px;
}
main .content-data .head h3 {
	font-size: 20px;
	font-weight: 600;
}
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  font-size: 14px;
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: white;
}

/*For Products*/



</style>