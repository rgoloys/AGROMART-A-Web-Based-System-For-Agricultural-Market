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
   <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>




	<link rel="stylesheet" href="style.css">
	<title>Agromart</title>
	<link rel = "icon"   href = "<?php echo base_url('Impact/');?>assets/img/tlogo.png" >



	<style type="text/css">
		@import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700&display=swap');

* {
	font-family: 'Open Sans', sans-serif;
	margin: 0;
	padding: 0;
	box-sizing: border-box;
}

:root {
	--grey: #F1F0F6;
	--dark-grey: #8D8D8D;
	--light: #fff;
	--dark: #000;
	--green: #81D43A;
	--light-green: #E3FFCB;
	--blue: #1775F1;
	--light-blue: #D0E4FF;
	--dark-blue: #0C5FCD;
	--red: #FC3B56;
}

html {
	overflow-x: hidden;
}

body {
	background: var(--grey);
	overflow-x: hidden;
}

a {
	text-decoration: none;
}

li {
	list-style: none;
}




/* Data*/
#map { height: 360px; }

/* SIDEBAR */
#sidebar {
	position: fixed;
	max-width: 260px;
	width: 100%;
	background: var(--light);
	top: 0;
	left: 0;
	height: 100%;
	overflow-y: auto;
	scrollbar-width: none;
	transition: all .3s ease;
	z-index: 200;
}
#sidebar.hide {
	max-width: 60px;
}
#sidebar.hide:hover {
	max-width: 260px;
}
#sidebar::-webkit-scrollbar {
	display: none;
}
#sidebar .brand {
	font-size: 24px;
	display: flex;
	align-items: center;
	height: 64px;
	font-weight: 700;
	color: white;
	position: sticky;
	top: 0;
	left: 0;
	z-index: 100;
    background: #00796b;
	
	transition: all .3s ease;
	padding: 0 6px;
}
#sidebar .icon {
	min-width: 48px;
	display: flex;
	justify-content: center;
	align-items: center;
	margin-right: 6px;
}
#sidebar .icon-right {
	margin-left: auto;
	transition: all .3s ease;
}
#sidebar .side-menu {
	margin: 36px 0;
	padding: 0 20px;
	transition: all .3s ease;

}
#sidebar.hide .side-menu {
	padding: 0 6px;
}
#sidebar.hide:hover .side-menu {
	padding: 0 20px;
}
#sidebar .side-menu a {
	display: flex;
	align-items: center;
	font-size: 14px;
	color: var(--dark);
	padding: 12px 16px 12px 0;
	transition: all .3s ease;
	border-radius: 10px;
	margin: 4px 0;
	white-space: nowrap;
}
#sidebar .side-menu > li > a:hover {
	background: var(--grey);
}
#sidebar .side-menu > li > a.active .icon-right {
	transform: rotateZ(90deg);
}
#sidebar .side-menu > li > a.active,
#sidebar .side-menu > li > a.active:hover {
	background: #00796b;
	color: var(--light);
}
#sidebar .divider {
	margin-top: 24px;
	font-size: 12px;
	text-transform: uppercase;
	font-weight: 700;
	color: var(--dark-grey);
	transition: all .3s ease;
	white-space: nowrap;
}
#sidebar.hide:hover .divider {
	text-align: left;
}
#sidebar.hide .divider {
	text-align: center;
}
#sidebar .side-dropdown {
	padding-left: 54px;
	max-height: 0;
	overflow-y: hidden;
	transition: all .15s ease;
}
#sidebar .side-dropdown.show {
	max-height: 1000px;
}
#sidebar .side-dropdown a:hover {
	color: #00796b;
}
#sidebar .ads {
	width: 100%;
	padding: 20px;
}
#sidebar.hide .ads {
	display: none;
}
#sidebar.hide:hover .ads {
	display: block;
}
#sidebar .ads .wrapper {
	background: var(--grey);
	padding: 20px;
	border-radius: 10px;
}
#sidebar .btn-upgrade {
	font-size: 14px;
	display: flex;
	justify-content: center;
	align-items: center;
	padding: 12px 0;
	color: var(--light);
	background: #00796b;
	transition: all .3s ease;
	border-radius: 5px;
	font-weight: 600;
	margin-bottom: 12px;
}
#sidebar .btn-upgrade:hover {
	background: #00796b;
}
#sidebar .ads .wrapper p {
	font-size: 12px;
	color: var(--dark-grey);
	text-align: center;
}
#sidebar .ads .wrapper p span {
	font-weight: 700;
}
/* SIDEBAR */





/* CONTENT */
#content {
	position: relative;
	width: calc(100% - 260px);
	left: 260px;
	transition: all .3s ease;
}
#sidebar.hide + #content {
	width: calc(100% - 60px);
	left: 60px;
}
/* NAVBAR */
nav {
	background: #00796b;
	height: 64px;
	padding: 0 20px;
	display: flex;
	align-items: center;
	grid-gap: 28px;
	position: sticky;
	top: 0;
	left: 0;
	z-index: 100;
}
nav .toggle-sidebar {
	font-size: 18px;
	cursor: pointer;
    color:white;
}
nav form {
	max-width: 400px;
	width: 100%;
	margin-right: auto;
}
nav .form-group {
	position: relative;
}
nav .form-group input {
	width: 100%;
	background: var(--grey);
	border-radius: 5px;
	border: none;
	outline: none;
	padding: 10px 36px 10px 16px;
	transition: all .3s ease;
}
nav .form-group input:focus {
	box-shadow: 0 0 0 1px #00796b, 0 0 0 4px #00796b;
}
nav .form-group .icon {
	position: absolute;
	top: 50%;
	transform: translateY(-50%);
	right: 16px;
	color: var(--dark-grey);
}
nav .nav-link {
	position: relative;
}
nav .nav-link .icon {
	font-size: 18px;
	color: white;
}
nav .nav-link .badge {
	position: absolute;
	top: -12px;
	right: -12px;
	width: 20px;
	height: 20px;
	border-radius: 50%;
	border: 2px solid var(--light);
	background: var(--red);
	display: flex;
	justify-content: center;
	align-items: center;
	color: var(--light);
	font-size: 10px;
	font-weight: 700;
}
nav .divider {
	width: 1px;
	background: var(--grey);
	height: 12px;
	display: block;
}
nav .profile {
	position: relative;
}
nav .profile img {
	width: 30px;
	height: 30px;
	border-radius: 50%;
	object-fit: cover;
	cursor: pointer;
}
nav .profile .profile-link {
	position: absolute;
	top: calc(100% + 10px);
	right: 0;
	background: var(--light);
	padding: 10px 0;
	box-shadow: 4px 4px 16px rgba(0, 0, 0, .1);
	border-radius: 10px;
	width: 160px;
	opacity: 0;
	pointer-events: none;
	transition: all .3s ease;
}
nav .profile .profile-link.show {
	opacity: 1;
	pointer-events: visible;
	top: 100%;
}
nav .profile .profile-link a {
	padding: 10px 16px;
	display: flex;
	grid-gap: 10px;
	font-size: 14px;
	color: var(--dark);
	align-items: center;
	transition: all .3s ease;
}
nav .profile .profile-link a:hover {
	background: var(--grey);
}
/* NAVBAR */



/* MAIN */
main {
	width: 100%;
	padding: 24px 20px 20px 20px;
}
main .title {
	font-size: 28px;
	font-weight: 600;
	margin-bottom: 10px;
}
main .breadcrumbs {
	display: flex;
	grid-gap: 6px;
}
main .breadcrumbs li,
main .breadcrumbs li a {
	font-size: 14px;
}
main .breadcrumbs li a {
	color: #00796b;
}
main .breadcrumbs li a.active,
main .breadcrumbs li.divider {
	color: var(--dark-grey);
	pointer-events: none;
}
main .info-data, .info_data2 {
	margin-top: 0;
	margin-bottom: 8px;
	display: grid;
	grid-template-columns: repeat(auto-fit, minmax(240px, 20px)); /* 250 */
	grid-gap: 15px;
}
main .info-data .card, .info_data2 .card {
	padding: 20px;
	border-radius: 10px; /* 10px */
	background: var(--light);
	box-shadow: 4px 4px 16px rgba(0, 0, 0, .05);/*///////////////////////////////////////////////*/
}
main .info-data .card:hover {
	padding: 20px;
	border-radius: 10px; /* 10px */
	background: var(--light);
	box-shadow: 4px 4px 4px 8px #008374;
}

main .card .head {
	display: flex;
	justify-content: space-between;
	align-items: flex-start;
}
main .card .head h2 {
	font-size: 24px;
	font-weight: 600;
}
main .card .head p {
	font-size: 14px;
}
main .card .head .icon {
	font-size: 20px;
	color: var(--green);
}
main .card .head .icon.down {
	color: var(--red);
}
main .card .progress {
	display: block;
	margin-top: 24px;
	height: 10px;
	width: 100%;
	border-radius: none; /** 10px */
	background: var(--grey);
	overflow-y: hidden;
	position: relative;
	margin-bottom: 4px;
}
main .card .progress::before {
	content: '';
	position: absolute;
	top: 0;
	left: 0;
	height: 100%;
	background:#00796b;
	width: var(--value);
}
main .card .label {
	font-size: 14px;
	font-weight: 700;
}
main .data {
	display: flex;
	grid-gap: 20px;
	margin-top: 20px;
	flex-wrap: wrap;
}
main .data .content-data {
	flex-grow: 1;
	flex-basis: 400px;
	padding: 20px;
	background: var(--light);
	border-radius: 10px;
	box-shadow: 4px 4px 16px grey;
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
main .content-data .head .menu {
	position: relative;
	display: flex;
	justify-content: center;
	align-items: center;
}
main .content-data .head .menu .icon {
	cursor: pointer;
}
main .content-data .head .menu-link {
	position: absolute;
	top: calc(100% + 10px);
	right: 0;
	width: 140px;
	background: var(--light);
	border-radius: 10px;
	box-shadow: 4px 4px 16px rgba(0, 0, 0, .1);
	padding: 10px 0;
	z-index: 100;
	opacity: 0.1;
	pointer-events: none;
	transition: all .3s ease;
}
main .content-data .head .menu-link.show {
	top: 100%;
	opacity: 1;
	pointer-events: visible;
}
main .content-data .head .menu-link a {
	display: block;
	padding: 6px 16px;
	font-size: 14px;
	color: var(--dark);
	transition: all .3s ease;
}
main .content-data .head .menu-link a:hover {
	background: var(--grey);
}
main .content-data .chart {
	width: 100%;
	max-width: 100%;
	overflow-x: auto;
	scrollbar-width: none;
}
main .content-data .chart::-webkit-scrollbar {
	display: none;
}

main .chat-box {
	width: 100%;
	max-height: 360px;
	overflow-y: auto;
	scrollbar-width: none;
}
main .chat-box::-webkit-scrollbar {
	display: none;
}
main .chat-box .day {
	text-align: center;
	margin-bottom: 10px;
}
main .chat-box .day span {
	display: inline-block;
	padding: 6px 12px;
	border-radius: 20px;
	background: var(--light-blue);
	color: var(--blue);
	font-size: 12px;
	font-weight: 600;
}
main .chat-box .msg img {
	width: 28px;
	height: 28px;
	border-radius: 50%;
	object-fit: cover;
}
main .chat-box .msg {
	display: flex;
	grid-gap: 6px;
	align-items: flex-start;
}
main .chat-box .profile .username {
	font-size: 14px;
	font-weight: 600;
	display: inline-block;
	margin-right: 6px;
}
main .chat-box .profile .time {
	font-size: 12px;
	color: var(--dark-grey);
}
main .chat-box .chat p {
	font-size: 14px;
	padding: 6px 10px;
	display: inline-block;
	max-width: 400px;
	line-height: 150%;
}
main .chat-box .msg:not(.me) .chat p {
	border-radius: 0 5px 5px 5px;
	background: var(--blue);
	color: var(--light);
}
main .chat-box .msg.me {
	justify-content: flex-end;
}
main .chat-box .msg.me .profile {
	text-align: right;
}
main .chat-box .msg.me p {
	background: var(--grey);
	border-radius: 5px 0 5px 5px;
}
main form {
	margin-top: 6px;
}
main .form-group {
	width: 100%;
	display: flex;
	grid-gap: 10px;
}
main .form-group input {
	flex-grow: 1;
	padding: 10px 16px;
	border-radius: 5px;
	outline: none;
	background: var(--grey);
	border: none;
	transition: all .3s ease;
	width: 100%;
}
main .form-group input:focus {
	box-shadow: 0 0 0 1px var(--blue), 0 0 0 4px var(--light-blue);
}
main .btn-send {
	padding: 0 16px;
	background: var(--blue);
	border-radius: 5px;
	color: var(--light);
	cursor: pointer;
	border: none;
	transition: all .3s ease;
}
main .btn-send:hover {
	background: var(--dark-blue);
}
/* MAIN */
/* CONTENT */
.con{
	display: grid;
	grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
	grid-gap: 20px;
  display: flex;

  align-items: center;
  flex-wrap: wrap;
  padding: 20px;
}
.con .box{
  margin: 10px;
  width: 300px;
  background: #fff;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  padding: 20px 30px;
  border-radius: 5px;
}
.box .quote i{
margin-top: 10px;
font-size: 14px;
color:  #00796b;
}
.con .box .image{
  margin: 10px 0;
  height: 150px;
  width: 150px;
  background:  #00796b;
  padding: 3px;
  border-radius: 50%;
}
.box .image img{
  height: 100%;
  width: 100%;
  border-radius: 50%;
  object-fit: cover;
  border: 2px solid #fff;
}
.box p{
  text-align: justify;
  margin-top: 8px;
  font-size: 14px;
  font-weight: 400;
}
.box .name_job{
  margin: 10px 0 3px 0;
  color: black;
  font-size: 18px;
  font-weight: 600;
}

.btns{
  margin-top: 20px;
  margin-bottom: 5px;
  display: flex;
  justify-content: space-between;
  width: 100%;
}
.btns a button{
  background:  #00796b;
  width: 100px;
  padding: 9px 0px;
  outline: none;
  border: 2px solid  #00796b;
  border-radius: 5px;
  cursor: pointer;
  font-size: 14px;
  font-weight: 400;
  color:  #00796b;
  transition: all 0.3s linear;
}
.btns a button:first-child{
  background: none;
  margin-right: 5px;
  color:  #00796b;
}
.btns a button:last-child{
color:  #00796b;
  margin-left: 5px;
}
.btns a button:first-child:hover{
  background:  #00796b;
  color: #fff;
}
.btns a button:hover{
  color: #fff;
}
@media (max-width:1045px){
  .con .box{
    width: calc(50% - 10px);
    margin-bottom: 20px;
  }
}
@media (max-width:710px){
  .con .box{
    width: 100%;
  }
}







@media screen and (max-width: 768px) {
	#content {
		position: relative;
		width: calc(100% - 60px);
		transition: all .3s ease;
	}
	nav .nav-link,
	nav .divider {
		display: none;
	}
}
/* Modal1*/

.line{
  display: block;
   background-color: #fff;
   box-shadow: 0 0 5px 0 rgba(0, 0, 0, 0.2);
  border-radius: 8px;
  padding: 10px;
  justify-content: space-around;
  width:  550px;
  height: auto;


}

.board {
 margin: 10px;
  width: 500px;
  height: 250px;
  align-items: center;
  display: flex;
  }

.board .user_img img {
  height: 250px;
  margin-right: 20px;
  width: 240px;
  border-radius: 15px;
}

.user_info h1 {
  font-size: 20px;
  color: #1e212d;
  margin: 10px 0;
}

.user_info p {
  color: #a1a1a1;
  font-size: 14px;
}

.user_info .row {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 10px 0;
}

.user_info .row h1 {
  font-size: 20px;
}

.id{
  width: 30%;
}
.id_board{
  width: 60%;
}
.imgboard{
  height: 250px;
  margin-right: 20px;
  width: 340px;
  border-radius: 15px;
}
.buttns{
   display: grid;
        justify-content: space-between;
        border: 2px solid red;
        padding: 20px;
}
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}


td, th{
    border: 1px solid grey;/////////////////////////////////////////////////////////////
  text-align: center;
  padding: 5px;
  font-size: 12px;
}
th{
    border: 1px solid grey;
}

tr:nth-child(even) {
  background-color: white;
}

/*For Products  #dddddd */



</style>
</head>
<body>
	
	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand"><img style="width:55px; height:55px;" src="<?php echo base_url('Impact/');?>assets/img/Logoo.png" class="img-fluid" alt="" style=" width:80px;"></i> AGROMART </a>
		<ul class="side-menu">
			<li><a href="<?php echo base_url();?>sellerdash" class="active"><i class='bx bxs-dashboard icon' ></i> Dashboard</a></li>
			<li class="divider" data-text="main">Main</li>
			<li><a href="<?php echo base_url();?>sellerdash"><i class='bx bxs-inbox icon' ></i> Dashboard</i></a></li>
            <li><a href="<?php echo base_url();?>preparing"><i class='bx bx-table icon' ></i>Orders</a></li>
			<li><a href="<?php echo base_url();?>sellerproduct"><i class='bx bxs-chart icon' ></i>My Products</a></li>
            <li><a href="<?php echo base_url();?>myAccounts"><i class='bx bxs-user-circle icon' ></i>My Accounts</a></li>
            <li><a href="" onclick="printPage()"><i class='bx bxs-printer icon' ></i>Print Page</a></li>
            <li><a href="<?php echo base_url();?>logout"><i class='bx bxs-log-out-circle icon'></i>Log out</a></li>
		</ul>

	</section>
	<!-- SIDEBAR -->

	<!-- NAVBAR -->
	<section id="content">
		<!-- NAVBAR -->
		<nav  id  style="display:flex; justify-content: space-between;">
			<i class='bx bx-menu toggle-sidebar' ></i>
            <form action="#">
				<div class="form-group">
					<input type="text" placeholder="Search...">
					<i class='bx bx-search icon' ></i>
				</div>
			</form>

			<!--<a href="#" class="nav-link">
				<i class='bx bxs-bell icon' ></i>
				<span class="badge">5</span>
			</a>
			<a href="<?php echo base_url('message');?>" class="nav-link">
				<i class='bx bxs-message-square-dots icon' ></i>
				<span class="badge">8</span>
			</a>
			<span class="divider"></span>-->
			<div class="profile" style="display:flex; align-content: center;" >
				<h4 style="color: WHITE;"><?= $this->session->userdata('auth_user')['fname']; ?> <?= $this->session->userdata('auth_user')['lname']; ?></h4>
				<img style="display:none;" src="<?php echo base_url('Impact/assets/img/user.png')?>" style="width: 20px; height: 20px;" >
				<ul class="profile-link">
					<li><a href="#"><i class='bx bxs-user-circle icon' ></i> Profile</a></li>
					<li><a href="#"><i class='bx bxs-cog' ></i> Settings</a></li>
					<li>
						<?php if($this->session->has_userdata('authenticated') == TRUE){ ?>
          		<a href="<?= base_url('logout') ?>"> <i class='bx bxs-log-out-circle' ></i> Log out</a></li>
        		<?php } ?>
				</ul>
			</div>
		</nav>
		<!-- NAVBAR -->
		<main>


<!--
<h2>Hi.. <br><span>
    <?= $this->session->userdata('auth_user')['fname']; ?><span></span>
    <?= $this->session->userdata('auth_user')['lname']; ?></span></h2>
<h2>Welcome to Agromart</h2>
 MAIN 

<h1 class="title">Dashboard</h1>-->
<div class="info-data">
    <div class="card">
        <div class="head">
            <div>
                <a href="<?php echo base_url('preparing')?>"  style="color: black; text-decoration: none;">
                    <h2 style ="font-size:30px"><?php echo $datas['countPending']; ?></h2>
                    <p id="ddd" style ="font-size:20px">New Orders</p>
                </a>
            </div>
        </div>
    </div>
    <div class="card"  >
        <div class="head">
            <div><a href="<?php echo base_url('sellerorder');?>" style="color: black; text-decoration: none;">
                    <h2 style ="font-size:30px"><?php echo $datas['countShip']; ?></h2>
                    <p style ="font-size:20px">To ship</p>
                </a>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="head">
            <div>
                <a href="<?php echo base_url('com')?>"  style="color: black; text-decoration: none;">
                    <h2 style ="font-size:30px"><?php echo $datas['countDelievered']; ?></h2>
                    <p style ="font-size:20px">Delievered</p>
                </a>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="head">
            <div>
                <a href="<?php echo base_url('cancelled')?>"  style="color: black; text-decoration: none;">
                    <h2 style ="font-size:30px"><?php echo $datas['countCancel']; ?></h2>
                    <p style ="font-size:20px">Cancelled</p>
                </a>
            </div>
    
        </div>
    </div>
</div>
<div class="info_data2"> 
<div class="card">
        <div class="head" style="display:flex; width:100%;">
            <div style="width:70%;">
                <h2 style ="font-size:25px">₱<?php echo $datas['Tprice']; ?></h2>
                <p style ="font-size:16px">Sales</p>
                <p>As of <?php
                    date_default_timezone_set('Asia/Manila');   
                    $current_date = date('F Y'); 
                    echo $date_Today = date('F Y', strtotime('0 days', strtotime($current_date)));
                ?></p>
            </div>
            <div Style="width: 30%;">
                <?php if($dif >= 1){?>
                    <img src="<?= base_url('/Impact/icons/increase.png')?>" style="width: 30px; height: 30px;"><?= $dif; ?>
                <?php }elseif($dif < 0){?>
                    <img src="<?= base_url('/Impact/icons/decrease.png')?>" style="width: 30px; height: 30px;"><?= $dif; ?>
                <?php }else{?>
                    <img src="<?= base_url('/Impact/icons/sign.png')?>" style="width: 30px; height: 30px;"><?= $dif; ?>
                <?php }?>
            </div>
        </div>
    </div>
    
   <!-- <div class="card">
        <div class="head" style="display:block; width:100%;">
            <div>
                <H4 style ="font-size:18px">DATE RANGE <img src="<?php echo base_url('Impact/icons/right-chevron.png')?>"  style="width: 25px; height: 15px;"></H4>
                
            </div>
            <div  style="display:block">

           \<form id="dateForm" method="get" action="<?= base_url('SellerController/sellerdash'); ?>">
                From <input type="date" name="Lstart_date" class="control" 
                    value="<?php if($Lstart_date){
                        echo $Lstart_date;
                    }else{
                        date_default_timezone_set('Asia/Manila');   
                        $current_date = date('Y-m-d'); 
                        echo $date_Today = date('Y-m-d', strtotime('-30 days', strtotime($current_date)));                            
                    }

                ?>" style="width:25px;">-
                <input type="date" name="Lend_date" class="control"  
                    value="<?php if($Lend_date){
                        echo $Lend_date;
                    }else{
                        date_default_timezone_set('Asia/Manila');   
                        $current_date = date('Y-m-d'); 
                        echo $date_Today = date('Y-m-d', strtotime('0 days', strtotime($current_date)));

                    }
                 ?>" style="width: 25px;">

                To <input type="date" name="start_date" class="control" 
                    value="<?php if($start_date){
                        echo $start_date;
                    }else{
                        date_default_timezone_set('Asia/Manila');   
                        $current_date = date('Y-m-d'); 
                        echo $date_Today = date('Y-m-d', strtotime('-30 days', strtotime($current_date)));                            
                    }

                ?>" style="width:25px;">-
                <input type="date" name="end_date" id="end_date" class="control"  
                    value="<?php if($end_date){
                        echo $end_date;
                    }else{
                        date_default_timezone_set('Asia/Manila');   
                        $current_date = date('Y-m-d'); 
                        echo $date_Today = date('Y-m-d', strtotime('0 days', strtotime($current_date)));

                    }
                 ?>" style="width:25px;">
            </form>    

            </div>
        </div>
    </div>
    <script>
        // Get the end_date input element
        const endDateInput = document.getElementById('end_date');

        // Attach a change event listener to the end_date input
        endDateInput.addEventListener('change', function() {
            // Automatically submit the form when end_date is filled
            document.getElementById('dateForm').submit();
        });
    </script>-->

    <div class="card">
        <div class="head" style="display:flex; width:100%;">
            <div style="width:70%;">
                <h2 style ="font-size:25px">₱<?php echo $datas['Tprice']; ?></h2>
                <p style ="font-size:16px">Revenue</p>
                <p>As of <?php
                    date_default_timezone_set('Asia/Manila');   
                    $current_date = date('F Y'); 
                    echo $date_Today = date('F Y', strtotime('0 days', strtotime($current_date)));
                ?></p>
            </div>
            <div Style="width: 30%;">
                <?php if($dif >= 1){?>
                    <img src="<?= base_url('/Impact/icons/increase.png')?>" style="width: 30px; height: 30px;"><?= $dif; ?>
                <?php }elseif($dif < 0){?>
                    <img src="<?= base_url('/Impact/icons/decrease.png')?>" style="width: 30px; height: 30px;"><?= $dif; ?>
                <?php }else{?>
                    <img src="<?= base_url('/Impact/icons/sign.png')?>" style="width: 30px; height: 30px;"><?= $dif; ?>
                <?php }?>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="head" style="display:flex; width:100%;">
            <div style="width:70%;">
                <h2 style ="font-size:25px">₱<?php echo $datas['profit']; ?></h2>
                <p style ="font-size:16px">Profit</p>
                <p>As of <?php
                    date_default_timezone_set('Asia/Manila');   
                    $current_date = date('F Y'); 
                    echo $date_Today = date('F Y', strtotime('0 days', strtotime($current_date)));
                ?></p>
            </div>
            <div Style="width: 30%;">
                <?php if($difP > 0){?>
                    <img src="<?= base_url('/Impact/icons/increase.png')?>" style="width: 30px; height: 30px;"><?= $difP; ?>
                <?php }else IF($difP < 0){?>
                    <img src="<?= base_url('/Impact/icons/decrease.png')?>" style="width: 30px; height: 30px;"><?= $difP; ?>
                <?php }else{?>
                    <img src="<?= base_url('/Impact/icons/sign.png')?>" style="width: 30px; height: 30px;"><?= $difP; ?>
                <?php }?>
            </div>
        </div>
    </div>   
    <div class="card">
        <div class="head" style="display:flex; width:100%;">
            <div style="width:70%;">
                <h2 style ="font-size:25px">₱<?php echo $datas['cost']; ?></h2>
                <p style ="font-size:16px">Cost</p>
                <p>As of <?php
                    date_default_timezone_set('Asia/Manila');   
                    $current_date = date('F Y'); 
                    echo $date_Today = date('F Y', strtotime('0 days', strtotime($current_date)));
                ?></p>
            </div>
            <div Style="width: 30%;">
                <?php if($difc > 0){?>
                    <img src="<?= base_url('/Impact/icons/increase.png')?>" style="width: 30px; height: 30px;"><?= $difc; ?>
                <?php }else if($difc < 0){?>
                    <img src="<?= base_url('/Impact/icons/decrease.png')?>" style="width: 30px; height: 30px;"><?= $difc; ?>
                <?php }else{?>
                    <img src="<?= base_url('/Impact/icons/sign.png')?>" style="width: 30px; height: 30px;"><?= $difc; ?>
                <?php }?>
            </div>
        </div>
    </div>
</div>




  

<style>
    .headline{
        padding: 12px;
        width: 100%;
        display: flex;
        justify-content: space-between;
    }
    .headline{
        padding: 12px;
        width: 100%;
        display: flex;
        justify-content: space-between;
    }

</style>

<?php
$oldValue = array_sum(array_column($sales_last_month, 'total'));
$newValue = array_sum(array_column($sales_this_month, 'total'));

if ($newValue != 0) {
    $Difference = ($oldValue > $newValue) ? $oldValue : $newValue;
    $percentageDifference = ($newValue - $oldValue) / abs($Difference) * 100;

    $formattedPercentage = number_format($percentageDifference, 2) . "%";
} else {
    $formattedPercentage = 0;
}

    $date = date('F Y');
    $date1 = date('F Y', strtotime('-1 month'));

    

$oldValue2 = array_sum(array_column($sales_last2_month, 'total'));
$oldValue = array_sum(array_column($sales_last_month, 'total'));

if ($oldValue != 0) {
    $percentageDiff = ($oldValue > $oldValue2) ? $oldValue : $oldValue2;
    $Difference = ($oldValue - $oldValue2) / abs($percentageDiff) * 100;
    $Percentage2 = number_format($Difference, 2) . '%';
} else {
    $Percentage2 = 0;
}

    $date2 = date('F Y', strtotime('-2 months'));
    $date1 = date('F Y', strtotime('-1 month'));


$oldValue3 = array_sum(array_column($sales_last3_month, 'total'));
$oldValue2 = array_sum(array_column($sales_last2_month, 'total'));

if ($oldValue2 != 0) {
    $Difference1 = ($oldValue2 > $oldValue3) ? $oldValue2 : $oldValue3;
    $percentageDifference2 = ($oldValue2 - $oldValue3) / abs($Difference1) * 100;
    $formattedPercentage12 = number_format($percentageDifference2, 2) . "%";

} else {
    $formattedPercentage12 = 0;
}

 $date2 = date('F Y', strtotime('-2 months'));
    $date3 = date('F Y', strtotime('-3 months'));


if ($formattedPercentage12 != 0 && $Difference != 0 && $formattedPercentage != 0) {
    $average = (number_format($percentageDifference2, 2) + number_format($Difference, 2) + number_format($percentageDifference, 2)) / 3;
    $Percent = ($average - number_format($percentageDifference2, 2)) / (number_format($Difference, 2) - number_format($percentageDifference2, 2)) * 100;
    $formatsss = number_format($Percent, 2) . "%";
} else {
    $average = 0;
    $Percent = 0;
    $formatsss = 0;
}
?>

<!-- #251c35bg -->

<div class="graphNiBRYAN" Style="text-transform:uppercase; color: #251c35; background: white; box-shadow: 4px 4px 16px #010D21;width:100%; height:auto;">
    <div class="headline"> 
        <p style="padding: 10px;">Month Sales Comparison</p>
        <div class="datess" style="display:block; justify-content:end;">
            <p style="width:100%; display:flex; justify-content:center;">
                <?php if($formatsss > 0) {?>
                    <img src="<?= base_url('/Impact/icons/increase.png')?>" style="width: 30px; height: 25px;"><?= $formatsss; ?>
                <?php }elseif($formatsss < 0){?>
                    <img src="<?= base_url('/Impact/icons/decrease.png')?>" style="width: 30px; height: 25px;"><?= $formatsss; ?>
                <?php }else{ ?>
                    <img src="<?= base_url('/Impact/icons/sign.png')?>" style="width: 25px; height: 25px;">
                <?php } ?>
                
            </p>
            <p>
                <?= $date3; ?>
                <?= $date; ?>
            </p>

        </div>
    </div>
    <div class="chartings" style="display:flex; justify-content: space-evenly;">

        <div class="content-data" style="padding:10px 5px 10px; 5px;">
            <div class="ss">
                <!-- Last Chart Chart -->
                <canvas id="nutChart1" height="200"></canvas>
                <p style="width:100%;color:black; display: flex; justify-content: center;"><?= $formattedPercentage12;?>
                    <?php if($formattedPercentage12 > 0){ ?>
                        <img src="<?= base_url('/Impact/icons/increase.png')?>" style="width: 30px; height: 25px; margin-left:10px;">
                    <?php }elseif($formattedPercentage12 < 0){ ?>  
                        <img src="<?= base_url('/Impact/icons/decrease.png')?>" style="width: 30px; height: 25px; margin-left:10px;">
                    <?php }else{ ?>
                        <img src="<?= base_url('/Impact/icons/sign.png')?>" style="width: 25px; height: 25px; margin-left:10px;">
                    <?php } ?>
                </p>
            </div>
        </div>
        <div class="content-data" style="padding:10px 5px 10px; 5px;">
            <div class="ss">
                <!-- Second Chart -->
                <canvas id="nutChart2" height="200"></canvas>
                <p style="width:100%; color:black; display: flex; justify-content: center;"><?= $Percentage2;?>
                    <?php if($Percentage2 > 0){ ?>
                        <img src="<?= base_url('/Impact/icons/increase.png')?>" style="width: 30px; height: 25px; margin-left:10px;">
                    <?php }elseif($Percentage2 < 0){ ?>  
                        <img src="<?= base_url('/Impact/icons/decrease.png')?>" style="width: 30px; height: 25px; margin-left:10px;">
                    <?php }else{ ?>
                        <img src="<?= base_url('/Impact/icons/sign.png')?>" style="width: 25px; height: 25px; margin-left:10px;">
                    <?php } ?>
                </p>
            </div>
        </div>
        
        <div class="content-data" style="padding:10px 5px 10px; 5px;">
            <div class="ss">
                <canvas id="nutChart" height="200"></canvas>
                <p style="width:100%; color:black; display: flex; justify-content: center;"><?= $formattedPercentage;?>
                    <?php if($formattedPercentage > 0){ ?>
                        <img src="<?= base_url('/Impact/icons/increase.png')?>" style="width: 30px; height: 25px; margin-left:10px;">
                    <?php }elseif($formattedPercentage < 0){ ?>  
                        <img src="<?= base_url('/Impact/icons/decrease.png')?>" style="width: 30px; height: 25px; margin-left:10px;">
                    <?php }else{ ?>
                        <img src="<?= base_url('/Impact/icons/sign.png')?>" style="width: 25px; height: 25px; margin-left:10px;">
                    <?php } ?>
                </p>
            </div>
           
        </div>
    </div>
</div>


<script>
    const ctx = document.getElementById('nutChart').getContext('2d');
    // Extract data from PHP variables
    const value_this_month = <?= json_encode(array_column($sales_this_month, 'total')) ?>;
    const value_last_month = <?= json_encode(array_column($sales_last_month, 'total')) ?>;
    //const value_last2_month = <?= json_encode(array_column($sales_last2_month, 'total')) ?>;
    //const value_last3_month = <?= json_encode(array_column($sales_last3_month, 'total')) ?>;
    //const value_last4_month = <?= json_encode(array_column($sales_last4_month, 'total')) ?>;
    //const value_last5_month = <?= json_encode(array_column($sales_last5_month, 'total')) ?>;

    const data = {
        labels: " ",
        datasets: [
            {
                label: '<?= $date1 ?>',
                data: value_last_month,
                backgroundColor: 'rgba(17, 122, 101, 0.2)',
                borderColor: 'rgba(17, 122, 101, 1)',
                borderWidth: 1
            },
            {
                label: '<?= $date?>',
                data: value_this_month,
                backgroundColor: 'rgba(52, 152, 219, 0.2)',
                borderColor: 'rgba(52, 152, 219, 1)',
                borderWidth: 1
            },
            {
                label: "Difference <?= $formattedPercentage ?>",
                data: value_this_month.map((value, index) => value - value_last_month[index]),
                backgroundColor: 'rgba(255, 206, 86, 0.2)',
                borderColor: 'rgba(255, 206, 86, 1)',
                borderWidth: 1
            }
        ]
    }; 
    new Chart(ctx, {
        type: 'bar',
        data: data,
        options: {
            scales: {
                x: {
                    beginAtZero: true
                },
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>

<!-- second -->

<script>
    const ctx2 = document.getElementById('nutChart2').getContext('2d');
    
    // Extract data from PHP variables for the second chart
    const sales_last_month = <?= json_encode(array_column($sales_last_month, 'total')) ?>;
    const sales_last2_month = <?= json_encode(array_column($sales_last2_month, 'total')) ?>;
    
    const data2 = {
        labels: " ",
        datasets: [
            {
                label: '<?= $date2 ?>',
                data: sales_last2_month,
                backgroundColor: 'rgba(173, 68, 165, 0.2)',
                borderColor: 'rgba(173, 68, 165, 1)',
                borderWidth: 1
            },
            {
                label: '<?= $date1 ?>',
                data: sales_last_month,
                backgroundColor: 'rgba(17, 122, 101, 0.2)',
                borderColor: 'rgba(17, 122, 101, 1)',
                borderWidth: 1
            },

            {
                label: "Difference <?= $Percentage2 ?>",
                data: sales_last_month.map((value, index) => value - sales_last2_month[index]),
                backgroundColor: 'rgba(255, 206, 86, 0.2)',
                borderColor: 'rgba(255, 206, 86, 1)',
                borderWidth: 1
            }
        ]
    }; 
    new Chart(ctx2, {
        type: 'bar',
        data: data2,
        options: {
            scales: {
                x: {
                    beginAtZero: true
                },
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>

<!-- 3rd Chart -->

<script>
    const ctx1 = document.getElementById('nutChart1').getContext('2d');
    
    const value_last_month1 = <?= json_encode(array_column($sales_last3_month, 'total')) ?>;
    const value_this_month1 = <?= json_encode(array_column($sales_last2_month, 'total')) ?>;
    
    const data1 = {
        labels: " ",
        datasets: [
            {
                label: '<?=  $date3 ?>',
                data: value_last_month1,
                backgroundColor: 'rgba(170, 16, 16, 0.2)',
                borderColor: 'rgba(170, 16, 16, 1)',
                borderWidth: 1
            },
            {
                label: '<?=  $date2 ?>',
                data: value_this_month1,
                backgroundColor: 'rgba(173, 68, 165, 0.2)',
                borderColor: 'rgba(173, 68, 165, 1)',
                borderWidth: 1
            },
            {
                label: "Difference <?= $formattedPercentage12 ?>",
                data: value_this_month1.map((value, index) => value - value_last_month1[index]),
                backgroundColor: 'rgba(255, 206, 86, 0.2)',
                borderColor: 'rgba(255, 206, 86, 1)',
                borderWidth: 1
            }
        ]
    }; 

    new Chart(ctx1, {
        type: 'bar',
        data: data1,
        options: {
            scales: {
                x: {
                    beginAtZero: true
                },
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>




<style>
    .ss{
        width: 330px;
        height: auto;
        padding: 0;
        margin: 0;
    }
    .chart_data{
        margin: 10px;
        margin-right: 0;
        gap: 8px;
        padding: 0;
        width: 100%;
        display: flex;
        justify-content: start;
        flex-wrap: wrap;
        height: auto;
        position: relative;
    }
    .chart_type{
        position: absolute;
        margin-left: 1%;
        margin-top: 0;
        width: 10px;
        height: 10px;
    }
    .toobleBtn{
        padding: 0;
        display: block;
        flex-wrap: wrap;
        width: 200px;
        height: auto;
    }
    .toobleBtn button{
        padding: 0;
        width: 380px;
        height: 70px;
        background-color: white;
        font-size: 14px;
        margin: 1.3%;
        border: none;
    }
    .chartss{
        height: 300px;
        width: 60%;
        /*border: 1px solid #f49131;
        border-radius: 1rem;*/
        background-color: white;
       /* background: #251c35; /*092918 251c35 008374*/
      
        box-shadow: 0 0 16 rgba(0, 0, 0, 8);
        display: none;
        padding: 0;
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
<div class="chart_data">

    <!--div class="chart_type">
    <select id="chartType" onchange="updateChartType()" style="background: #251c35; color: white;">
            <option value="line">Line Chart</option>
        </select>
    </div-->

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
        <button onclick="toggleDiv('div4', this)">Forcasted Ginger Production in <span><b>2023<br><span style="color: #FF5733;"><?php echo $lastForecastBanana === null ? 'N/A' : number_format($lastForecastBanana, 2); ?></span> in Metric tons</b></span></button>
    </div>
</div>

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














<style>
    .by{
        width: 100%;
        margin: 0;
        padding: 0;
    }
    .by table tbody td{
        border: none;
    }
    .by .control{
        margin-left: 20px;
        width: 50%;
        border: 1px solid #008374;
        color: #008374;
    }
    .by button{
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        width: 95%;
        margin: 5px 0px 0px 0px;
        border: 1px solid #008374;
        color: #008374;
    }
    .by button:hover{
        background-color: #008374;
        color: white;
    }
    .menu{
        width:100%;
        display:flex; 
        justify-content:space-around;
        margin: 5px 0px 5px 0px;
    }
    .controls{
        border-radius: .5%;
        border: 1px solid #008374;
        color: black;
        display: flex;
        justify-content: center;
        text-align: center;
        margin: 1.5%;
        width: auto;
        font-size: 12px;
        width: 100px;
    }
    .btnsfilter{
        border-radius: .5%;
        display: flex;
        justify-content: center;
        text-align: center;
        margin: 1.5%;
        width: 100%;
    }
    .btnsfilter button{
        border: 1px solid #008374;
        margin: 1.5%;
        width: 50%;
    }
    .btnsfilter button:hover{
        border: 1px solid #008374;
        color: white;
        background-color: #008374;
    }


    #hiddenDiv {
        display: none;
        border: 1px solid #ccc;
        padding: 10px;
        margin: 10px;
        background-color: #f2f2f2;
    }

</style>

<script>
    //function to auto submit form
    function submitForm() {
        document.getElementById("myForm").submit();
    }
</script>


<div class="data" id="salesreport" style="padding:0; margin-top:15px; width: 100%;">

    <div class="content-data" style="font-size: 14px; height: auto; border-radius:2px;">
        <div class="headingss">
        <h3 Style="width:100%; display:flex; justify-content:center; font-size:20px;margin: 12px 12px;">AGROMART SALES REPORT</h3>
        <p style="margin-top:12px;font-weight:600;width:100%;display:flex; justify-content:start;">Date: 
            <span style="font-weight:100;">
                
                <?php  
                 if($salesFrom == NULL && $salesTo == NULL){

                     date_default_timezone_set('Asia/Manila');   
                     $current_date = date('F j, Y'); 
                     echo $current_date;
                }else{
                    echo date('F j, Y  h:i A', strtotime($salesFrom)). ' - '. date('F j, Y  h:i A', strtotime($salesTo));
                }
                ?>
                
            </span>
        </p>
        </div>
        <div class="heads" >
            <form id="myForm" method="get" action="<?= base_url('SellerController/sellerdash'); ?>">
            <div class="menu">
                <div class="by">
                    <table>
                        <tbody>
                            <td>
                                By:<select class="control" name="column">
                                    <option value="<?php if($column){echo $column;}else{echo 'Date_Added';} ?>">
                                        <?php if($column == null){
                                                echo 'Select unit..';
                                            }elseif($column == 'total')
                                            {
                                                echo 'Sales';
                                            }elseif($column == 'Quantity'){
                                                echo 'Units Sold';
                                            }elseif($column == 'profit'){
                                                echo 'Profit';
                                            }elseif($column == 'Date_Added'){
                                                echo 'Profit';
                                            }
                                        ?>
                                    </option>
                                    <option value="Date_Added">Date</option>
                                    <option value="Quantity">Units Sold</option>
                                    <option value="total">Sales</option>
                                    <option value="profit">Profit</option>
                                </select>
                            </td>
                            <td>
                                Order by:<select class="control" name="order">
                                    <option value="<?php if($order){echo $order;}else{echo 'DESC';} ?>">
                                        <?php if($order == null){
                                                echo 'Select order..';
                                            }else{
                                                echo $order;
                                            }
                                        ?>
                                    </option>
                                    <option value="DESC">DESC</option>
                                    <option value="ASC">ASC</option>
                                </select>
                            </td>
                            <td>
                               <div id="prodShow">
                                    Show:<select id="limit" class="control" name="limit">
                                        <option 
                                            value="<?php 
                                               if($limit){
                                                if($limit == 'more'){
                                                    echo $limit1;
                                                }else{
                                                    echo $limit;
                                                }
                                               }else{
                                                echo $limit1;
                                               }
                                            ?>">
                                            <?php 
                                               if($limit){
                                                if($limit == 'more'){
                                                    echo $limit1;
                                                }else{
                                                    echo $limit;
                                                }
                                               }else{
                                                echo $limit1;
                                               }
                                            ?>
                                        
                                        </option>
                                        <option value="10">10</option>
                                        <option value="20">20</option>
                                        <option value="50">50</option>
                                        <option value="100">100</option>
                                        <option value="200">200</option>
                                        <option value="more">More</option>
                                    </select> Products
                               </div>
                            </td>
                        </tbody>
                        <tbody>
                            <td><label>From:</label><input type="date" name="salesFrom" class="control" 
                                    value="<?php if($salesFrom){
                                        echo $salesFrom;
                                    }else{
                                        date_default_timezone_set('Asia/Manila');   
                                        $current_date = date('Y-m-d h:i A'); 
                                        echo $date_Today = date('Y-m-d h:i A', strtotime('-30 days', strtotime($current_date)));                            
                                    }

                                    ?>"></td>
                            <td><label>To:</label><input type="date" name="salesTo" class="control" 
                                    value="<?php if($salesTo){
                                        echo $salesTo;
                                    }else{
                                        date_default_timezone_set('Asia/Manila');   
                                        $current_date = date('Y-m-d'); 
                                        echo $date_Today = date('Y-m-d', strtotime('0 days', strtotime($current_date)));
                            
                                    } ?>">
                            </td>
                            <td>
                                <div id="output"></div>
                                <div id="limitContainer" style="display: none;">
                                    <div class="hide" style=" display:flex;">
                                    <div class="qrImg">
                                        <label for="functionDropdown">specify</label>
                                        <input type="text" id="limit" name="limit1" class="control"  style="width: 100px;">product
                                    </div>
                                    </div>
                                </div>
                            </td>
                        </tbody>
                    </table>
                </div>
                
            </div>
        </div>
	<div>  
</div>

    <div class="chart" style="background-color: white;margin-top:12px;width: 100%; height: auto; border:1px solid black;">
        <table>
            <tbody>
                <th>Date</th>
                <th>Ordered ID</th>
                <th>Product</th>
                <th>Units Sold</th>
                <th>Sales</th>
                <th>Profit</th>
                <th>Service Fee</th>
            </tbody>
            <?php if ($datas['report'] !== 0) : ?>
            <?php foreach ($datas['report'] as $report) : ?>
               
                <tbody>
                    <td><time datetime="2020-01-01"><?= date('F j, Y  h:i A', strtotime($report['date'])) ?></td>
                    <td><?php echo isset($report['order_id']) ? $report['order_id'] : ' '; ?></td>
                    <td><?php echo isset($report['tproduct']) ? $report['tproduct'] : ' '; ?></td>
                    <td><?php echo $report['quan']; ?><?php echo $report['UnitQuan']; ?></td>
                    <td>₱<?php echo $report['total']; ?></td>
                    <td>₱<?php echo $report['profit']; ?></td>
                    <td><?php echo $report['fee']; ?></td>
                </tbody>
                <?php endforeach; ?>
                <?php else : ?>
                <tbody>
                    <td colspan="6">You have No ordered yet</td>
                </tbody>
                <?php endif; ?>

            <?php if ($datas['sum_of_sales'] !== 0) : ?>
            <?php foreach ($datas['sum_of_sales'] as $sum_of_sales) : ?>
            <tbody style="background-color: GREY; color:white;">
                <td>Total Products: <?= $sum_of_sales['count']; ?></td>
                <td></td>
                <td></td>
                <td>x<?= $sum_of_sales['quan']?></td>
                <td>₱<?= $sum_of_sales['total']; ?></td>
                <td>₱<?= $sum_of_sales['profit']?></td>
                <td>₱<?= $sum_of_sales['fee']?></td>
            </tbody>
            <?php endforeach; ?>
                <?php else : ?>
                <tbody>
                    <td style="width:100%;" colspan="10">No data available.</td>
                </tbody>
                <?php endif; ?>
        </table>
       
 
        <!--<div class="page" style="width:100%; display:flex; justify-content:end;">
            <?php echo $this->pagination->create_links(); ?>
        </div>-->  

        </div>
        <div class="butns" style ="width: 100%; display:flex; justify-content:space-between; font-weight:800;">
            <a href=""><button class="btnReports" onclick="printDiv('salesreport')">Export</button></a> 
            <button class="btnReports" type="submit" name="filter">filter</button>
        </div>
    

    </div>
</div>
</form>

<script>
    
  /* === FOR DROP DOWN LIST === */
  // Get the select element
  const functionDropdown = document.getElementById('limit');

// Get the element to display the output
const outputDiv = document.getElementById('output');

// Add an event listener to the select element
functionDropdown.addEventListener('change', function () {
  const selectedFunction = functionDropdown.value;
  outputDiv.innerHTML = '';

if (selectedFunction === 'more') {
      // Function 4: Display an image
      limitContainer.style.display = 'block';
   
  } else {
      // Hide the image container if none of the above options are selected
      limitContainer.style.display = 'none';
      prodShow.style.display= 'block';
  }
});
</script>


<style>
*{
    margin: 0;
    padding: 0;
}
.btnReports{
    width: 150px;
    height: 30px;
    background-color: #008374;
    font-weight: 400;
    color: black;
    margin-top: 15px;
    border: none;
}
.btnReports:hover{
    background-color: #f85a40;
    color:#FFFF;
}
</style>

<script>
    document.getElementById('<?php echo $report['order_id']?>').addEventListener('click', function() {
        var div = document.getElementById('<?php echo $report['order_id']?><?php echo $report['tproduct']?>');
        if (div.style.display === 'none') {
            div.style.display = 'block';
        } else {
            div.style.display = 'none';
        }
    });
    
</script>
























<!-- TAENANG DATA MAPPING ITO -->
		<!-- MAIN -->
<style>

    .leaflet-popup-content-wrapper {
        text-align:justify;
    }
    /* Style the popup content as needed
    .leaflet-popup-content {
        /* Add your custom styles for the popup content here *
        text-align: start;
        padding: 0;
    } */
    .custom-popup {
        display: block;
        background-color: white;/* Add padding to create space between content and border */
        font-size: 12px; /* Change the font size to your desired value */
        text-align: center;
    }
    #scroll{
        height: 300px;
        overflow-x: hidden;
        overflow-y: auto; 
    }  
    .myForm {
        font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
        font-size: 0.8em;
        width: 100%;
        padding: 1em;
        border: 1px solid #ccc;
    }

    .myForm * {
        box-sizing: border-box;
    }

    .myForm fieldset {
        border: none;
        margin:10px;
        padding: 0;
    }

    .myForm legend,
    .myForm label {
        padding: 0;
        font-weight: bold;
    }
    .float{
        position:fixed;
        width:60px;
        height:60px;
        bottom:40px;
        right:40px;
        background-color:#00796b;
        color:#FFF;
        border-radius:50px;
        text-align:center;
        box-shadow: 2px 2px 3px #999;
    }

    #plus {
        font-size:24px;
        margin-top:20px;
    }
    .solds{

        width: 30%; 
        height: auto;
        padding: 0; 
    }


#OthersContainer{
    margin: 0 20px 0 20px;
}
</style>


<div class="data" style="width: 100%; margin:1% 1%;  display:flex;">
    <div class="content-data" style="padding: .5%; margin: 0; border-radius: 0; display:flex; justify-content:space-evenly; flex-wrap: wrap;">
      
        <div class="SearchProd" style="display:block;margin-top:20px 0;">
           
            <table >
                <tr>
                    <td colspan="4"  style="text-align:center;background-color: #00796B; width:100px; font-weight:700;">LABEL CATEGORY</td>
                </tr>
                <tr>
                    <td style="text-align:center;background-color:rgb(98, 247, 1); width:70px; font-weight:700;">Crops Product</td>
                    <td style="text-align:center;background-color:rgb(0, 110, 113); width:70px; font-weight:700;">Fertilizer</td>
                    <td style="text-align:center;background-color:rgb(220, 38, 29); width:70px; font-weight:700;">Livestock</td>
                    <td style="text-align:center;background-color:#ED9121; width:70px; font-weight:700;">Fruits</td>
                    </tr> <tr>
                    <td style="text-align:center;background-color:#00AAAA; width:70px; font-weight:700;">Bird</td>
                   <td style="text-align:center;background-color:#457d00; width:70px; font-weight:700;">Vegetables</td>
                    <td style="text-align:center;background-color:#bb2124; width:70px; font-weight:700;">Pesticides</td>
                    <td style="text-align:center;background-color:#D5C34B; width:70px; font-weight:700;">Flowers</td>
                      </tr>
                      <tr>
                    <td style="text-align:center;background-color:#ff7f7f; width:70px; font-weight:700;">Meat</td>
                    <td style="text-align:center;background-color:#00ffb5; width:70px; font-weight:700;">Fish</td>
                    </tr>
              
            </table>
           
            <div class="searchPaksyon" style="margin: 12px 12px;">
                <label for="search">search:</label>
                <input type="text" id="search" oninput="searchTable()" placeholder="Search products..">
            </div>

            <div class="tablesss" style="height:400px; overflow-y:scroll;">
                
            <table id="legendTable">
                <?php if ($datas['legend'] !== 0) : ?>
                <tr>
                    <td style="font-size: 14px; border: none;"><b>Legend</b></td>
                    <td style="font-size: 14px; border: none;"><b>Product</b></td>
                </tr>
             
                <?php
                
                $categories = ["CropProduction", "Fertilizer", "Livestock","Fruits", "Vegetables", "Pesticides", "Flowers", "Meat", "Fish"];

                foreach ($categories as $category) {
                    foreach ($datas['legend'] as $legend) {
                        if ($category === $legend['cat']) {
                            $backgroundColor = ''; // Initialize background color variable

                            // Set background color based on category
                            if ($category === "CropProduction") {
                                $backgroundColor = 'rgb(98, 247, 1)'; // Green for Crop Production
                            } elseif ($category === "Fertilizer") {
                                $backgroundColor = 'rgb(0, 110, 113)'; // Blue for Fertilizer
                            } elseif ($category === "Livestock") {
                                $backgroundColor = 'rgb(220, 38, 29)'; // Teal for Livestock
                            }elseif ($category === "Fruits"){
                                $backgroundColor = '#ED9121';
                            
                            
                            } elseif ($category === "Vegetables") {
                                $backgroundColor = '#457d00'; 
                            }elseif ($category === "Pesticides"){
                                $backgroundColor = '#bb2124';
                            } elseif ($category === "Flowers") {
                                $backgroundColor = '#D5C34B'; 
                            } elseif ($category === "Meat") {
                                $backgroundColor = '#ff7f7f'; 
                            }elseif ($category === "Fish"){
                                $backgroundColor = '#00ffb5';
                            }
                            
                        echo '<tr>';
                        echo '<td style="width: 100px; margin: 12px; background-color: ' . $backgroundColor . '; border: 3.5px solid ' . $legend['hex'] . ';"></td>';
                        echo '<td style="margn:12px; font-size: 14px; border: none;">' . $legend['title'] . '</td>';
                        echo '</tr>';
                        }
                    }
                } ?>
         
                <?php else : ?>
                <tr>
                    <td colspan="3">No data available.</td>
                </tr>
                <?php endif; ?>
            </table>
            </div>
        </div>


        <div class="charting" style=" width: min(300rem, 70%);">
            <div class="" style="border-radius: 0;">
                <div class="titles" style="width:100%; display:flex; justify-content: space-between;">
                    <!--<button id="toggleButton">Filter data</button>-->
                    <h3>Crop Mapping</h3>
                   <!-- <p>As of(<span class="output"></span>)</p> -->
               
                </div>
                        
                <div id="myDiv" style="display: BLOCK;">
                    <ul>
                    <form>
                        <li>
                            <p style=" margin:0px 5px 0px 0px; font-size:13px;">PLANTED:</p>
                            <label for="from">from</label>
                            <input type="date" name="PlantFrom" value="2020-10-31" class="form-control" id="min"  style="width:100px; height:20px; margin:0px 3px 0px 3px;"><br>
                            <label for="from">to</label>
                            <input type="date" name="PlantTo" value="2025-10-31" class="form-control" id="max"  style="width:100px; height:20px; margin:0px 0px 0px 3px;">

                        </li>
                        <li>
                            <p style=" margin:0px 5px 0px 0px; font-size:13px;">HARVESTED:</p>
                            <label for="from">from</label>
                            <input type="date" name="HarvestedFrom" value="2020-10-31" class="form-control" id="hmin"  style="width:100px; height:20px; margin:0px 3px 0px 3px;"><br>
                            <label for="from">to</label>
                            <input type="date" name="HarvestedTo"  value="2025-10-31"  class="form-control" id="hmax"  style="width:100px; height:20px; margin:0px 0px 0px 3px;">
                        </li><br>
                        <li>
                            <div id="OthersContainer">
                                <div class="hide" style=" display:flex; width:120px;">
                                    <div class="qrImg">
                                    <label for="functionDropdown">Crop type:</label>
                                    <select id="select1"  style="width:150px;">
                                    <option value="1">Select Crop type</option>
                                        <option value="1">ALL Crop Maps</option>
                                        <option value="CropProduction">Crop Product</option>
                                        <option value="Livestock">Livestock</option>
                                        <option value="Fertilizer">Fertilizer</option>
                                        <option value="Others">Others</option>
                                </select>
                                    </div>
                                </div>
                            </div>
   
                        </li>

                        <li>
                            <div id="OthersContainer">
                                <div class="hide" style=" display:flex; width:120px;">
                                    <div class="qrImg">
                                    <label for="functionDropdown">Crops/Products</label>
                                    <select id="select2" name="mapCrops" style="width:150px;">
                                        <option value="1">Select Crops/Products</option>
                                        <?php if ($datas['prodInfo'] !== 0) : ?>
                                        <?php foreach ($datas['prodInfo'] as $prodInfo) : ?>

                                        <option value="<?php echo $prodInfo['title']; ?>"><button type="submit"><?php echo $prodInfo['title']; ?></button></option>
                                        
                                        <?php endforeach; ?>
                                        <?php else : ?>
                                            <p colspan="3">No data available.</p>
                                        <?php endif; ?>
                                    </select>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div id="OthersContainer">
                                <div class="hide" style=" display:flex; width:120px;">
                                    <div class="addrss">
                                    <label for="functionDropdown">Address:</label>
                                    <select id="add" name="mapAddress" style="width:150px;">
                                        <option value="1">Address</option>
                                        <option value="SanClemente">San Clmente, Tarlac</option>
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
                                        <option value=""></option>
                                        <option value="Camiling,Tarlac">Camiling, Tarlac</option>
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
                                    </div>
                                </div>
                            </div>
                            <div style="margin:12px 0px 0px 50px;">
                                <button  onclick="filterData()" type="button" id="Filter"><b>Filter Data</b></button>
                            </div>   
                        </li>
                    </ul>
                </div></form>
            </div>
            <div id="map" style="height: 450px;"></div>
        </div>
    </div>
</div>

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
<script>
    // Get references to the button and the div
const toggleButton = document.getElementById('toggleButton');
const myDiv = document.getElementById('myDiv');

// Add a click event listener to the button
toggleButton.addEventListener('click', function() {
  // Toggle the visibility of the div
  if (myDiv.style.display === 'none' || myDiv.style.display === '') {
    myDiv.style.display = 'block'; // Show the div
  } else {
    myDiv.style.display = 'none'; // Hide the div
  }
});

</script>



<script>
    const nutChart = document.getElementById('nusatChart').getContext('2d');

    const label_last_month = <?php echo json_encode(array_column($sales_last_month, 'label')); ?>;
    const label_this_month = <?php echo json_encode(array_column($sales_this_month, 'label1')); ?>;

    const value_last_month = <?php echo json_encode(array_column($sales_last_month, 'value')); ?>;
    const value_this_month = <?php echo json_encode(array_column($sales_this_month, 'value1')); ?>;

    new Chart(nutChart, {
        type: 'doughnut',
        data: {
            labels: label_this_month,
            datasets: [{
                label: 'Last Month',
                data: value_last_month,
                backgroundColor: 'rgb(255, 99, 132)',
            }, {
                label: 'This Month',
                data: value_this_month,
                backgroundColor: 'rgb(54, 162, 235)',
            }],
        },
        options: {
            responsive: true,
        },
    });
</script>


<script>
  function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;
    
     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;

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
    riceChart = createChart(riceCtx, 'line', actualRice, 'Annual Rice Production in TARLAC', forecastrice, 'Annual Forecast Production Value');
    cornChart = createChart(cornCtx, 'line', actualCorn, 'Annual Corn Production in TARLAC', forecastcorn, 'Annual Forecast Production Value');
    bananaChart = createChart(bananaCtx, 'line', actualBanana, 'Annual Ginger Production in TARLAC', forecastbanana, 'Annual Forecast Production Value');
    mangoChart = createChart(mangoCtx, 'line', actualMango, 'Annual Mango Production in TARLAC', forecastMango, 'Annual Forecast Production Value');
    
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
                return 'rgba(17, 122, 101, 1)'; // Change the color for the last data point
            }
            return 'rgba(17, 122, 101, 1)'; // Default line color
        };

        var backgroundColor2 = function(context) {
            var index = context.dataIndex;
            if (index === data.length - 1) {
                return 'rgba(17, 122, 101, 0.2)'; // Change the color for the last data point
            }
            return 'rgba(17, 122, 101, 0.2)'; // Default background color
        };

        var chartData = {
            labels: <?= json_encode(array_column($dataProduce, 'year')) ?>,
            datasets: [{
                label: label,
                data: data,
                borderColor:borderColor,
                backgroundColor: backgroundColor,
                fill: false
            },{label: label2,
                data: data2,
                borderColor: borderColor2,
                backgroundColor: backgroundColor2,
                fill: true
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
        cornChart = createChart(cornCtx, chartType, actualCorn, 'Annual Corn Production in TARLAC', forecastcorn, 'Forecast Value');
        mangoChart = createChart(mangoCtx, chartType, actualMango, 'Annual Mango Production in TARLAC', forecastMango, 'Forecast Value');
        bananaChart = createChart(bananaCtx, chartType, actualBanana, 'Annual Banana Production in TARLAC',  forecastbanana, 'Forecast Value');
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
               
               
                if(cat==="Livestock"){
    var hexx = "rgb(220, 38, 29)";
   }
   if(cat==="Fertilizer"){
    var hexx = "rgb(0, 110, 113)";
   }
   if(cat==="CropProduction"){
    var hexx = "rgb(98, 247, 1)";
   }
   if(cat==="Others"){
    var hexx = "rgb(171, 11, 152)";
   
  }if (cat === "Fruits"){
    var hexx = '#ED9121';

    }if (cat === "Vegetables") {
       var hexx = '#457d00'; 
     }if (cat === "Pesticides"){
         var hexx = '#bb2124';
     } if (cat === "Flowers") {
        var hexx = '#D5C34B'; 
     } if (cat === "Meat") {
       var hexx = '#ff7f7f'; 
      }if (cat === "Fish"){
         var hexx = '#00ffb5';
                            }
           
               
                
                var circle = L.circle([lat, lng], {
                color: hex,
                fillColor: hexx,
                fillOpacity: 0.5,
                opacity: o,
                radius: 30 + count /////////////////////
              }).addTo(map);
             
               
            
                
              
             
              var imgUrl = '<?php echo base_url();?>upload/images/' + img;
            // Bind a popup with 'crops' and 'count' values
            circle.bindPopup("<table></tr><tr><td><img src='"+imgUrl+"' width='150px' height ='100px'/></td><td><b>" +  crops+cat + "</td></tr><tr><td><b>Shop name:</b> "+ shop +"</td><td><b>Seller name:</b> "+ fname + lname +"</td></td></tr><tr><td>No. of Item sold: ("+ count +")</td><td>"+ adds +"</td></tr><tr><td>Planted at: "+ plant +"</td><td>Harvested on: "+ harvest +"</td></tr></table>", {
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
    if(cat==="Livestock"){
    var hexx = "rgb(220, 38, 29)";
   }
   if(cat==="Fertilizer"){
    var hexx = "rgb(0, 110, 113)";
   }
   if(cat==="CropProduction"){
    var hexx = "rgb(98, 247, 1)";
   }
   if(cat==="Others"){
    var hexx = "rgb(171, 11, 152)";
   
  }if (cat === "Fruits"){
    var hexx = '#ED9121';

    }if (cat === "Vegetables") {
       var hexx = '#457d00'; 
     }if (cat === "Pesticides"){
         var hexx = '#bb2124';
     } if (cat === "Flowers") {
        var hexx = '#D5C34B'; 
     } if (cat === "Meat") {
       var hexx = '#ff7f7f'; 
      }if (cat === "Fish"){
         var hexx = '#00ffb5';
                            }
   
   

   
    
    var circle = L.circle([lat, lng], {
    color: hex,
    fillColor: hex,
    fillOpacity: 0.5,
    opacity: o,
    radius: 10 + count /////////////////////
  }).addTo(map);
 
   

    
  
 
  var imgUrl = '<?php echo base_url();?>upload/images/' + img;
// Bind a popup with 'crops' and 'count' values
circle.bindPopup("<table></tr><tr><td><img src='"+imgUrl+"' width='150px' height ='100px'/></td><td><b>" +  crops+cat + "</td></tr><tr><td><b>Shop name:</b> "+ shop +"</td><td><b>Seller name:</b> "+ fname + lname +"</td></td></tr><tr><td>No. of Item sold: ("+ count +")</td><td>"+ adds +"</td></tr><tr><td>Planted at: "+ plant +"</td><td>Harvested on: "+ harvest +"</td></tr></table>", {
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
    var hexx ="";    

    var o = 1;
    var r = 0;
   if(cat==="Livestock"){
    var hexx = "rgb(220, 38, 29)";
   }
   if(cat==="Fertilizer"){
    var hexx = "rgb(0, 110, 113)";
   }
   if(cat==="CropProduction"){
    var hexx = "rgb(98, 247, 1)";
   }
   if(cat==="Others"){
    var hexx = "rgb(171, 11, 152)";
   
  }if (cat === "Fruits"){
    var hexx = '#ED9121';

    }if (cat === "Vegetables") {
       var hexx = '#457d00'; 
     }if (cat === "Pesticides"){
         var hexx = '#bb2124';
     } if (cat === "Flowers") {
        var hexx = '#D5C34B'; 
     } if (cat === "Meat") {
       var hexx = '#ff7f7f'; 
      }if (cat === "Fish"){
         var hexx = '#00ffb5';
                            }

   
    
    var circle = L.circle([lat, lng], {
    color: hex,
    fillColor: hexx,
    fillOpacity: 0.5,
    opacity: o,
    radius: 10 + count /////////////////////
  }).addTo(map);
 
   

    
  
 
  var imgUrl = '<?php echo base_url();?>upload/images/' + img;
// Bind a popup with 'crops' and 'count' values
circle.bindPopup("<table></tr><tr><td><img src='"+imgUrl+"' width='150px' height ='100px'/></td><td><b>" +  crops + "</td></tr><tr><td><b>Shop name:</b> "+ shop +"</td><td><b>Seller name:</b> "+ fname + lname +"</td></td></tr><tr><td>No. of Item sold: ("+ count +")</td><td>"+ padd +"</td></tr><tr><td>Planted at: "+ plant +"</td><td>Harvested on: "+ harvest +"</td></tr></table>", {
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

    

    function searchTable() {
        var input, filter, table, tr, td, i, j, txtValue;
        input = document.getElementById("search");
        filter = input.value.toUpperCase();
        table = document.getElementById("legendTable");
        tr = table.getElementsByTagName("tr");

        for (i = 1; i < tr.length; i++) { // Start from 1 to skip the header row
            var match = false;
            for (j = 0; j < tr[i].getElementsByTagName("td").length; j++) {
                td = tr[i].getElementsByTagName("td")[j];
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    var pattern = new RegExp(filter, 'i'); // 'i' for case-insensitive search
                    if (txtValue.match(pattern)) {
                        match = true;
                        break; // Break out of the loop when a match is found
                    }
                }
            }
            if (match) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            }
        }
    }
</script>
