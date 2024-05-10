<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Agromart-agrocash</title>
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
*{
  margin: 0;
  padding: 0;
}
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
}

header {
    background-color: #008374;
    padding: 10px;
    text-align: center;
    color: #fff;
}

main {
    max-width: 800px;
    margin: 20px auto;
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}
#balance-section{
  display: flex;
  justify-content: center;
  width: 100%;
  padding: 1.5%;
}
.balancee{
  display: block;
  justify-content: center;
  width: 40%;
  border: 2px solid #008374;
  padding: 1.5%;
}

#balance{
    font-size: 2em;
    display: flex;
    justify-content: space-between;
}
#balance span{
    font-weight: 600;
    font-size: 20px;
    color: #008374;
    align-self: center;
    cursor: pointer;
    border: 1px solid #008374;
    padding: 2px 4px;
    border-radius: 20px;
}
#balance span:hover{
    font-weight: 600;
    font-size: 20px;
    color: #2ecc71;
    align-self: center;
    cursor: pointer;
    border: 1px solid #2ecc71;
    padding: 2px 4px;
    border-radius: 20px;
}

button {
    padding: 10px 20px;
    font-size: 1em;
    background-color: #2ecc71;
    color: #fff;
    border: none;
    cursor: pointer;
    margin-right: 10px;
}

button:hover {
    background-color: #27ae60;
}
.return{
    position: absolute;
    top: 45px;
    left: 400px;
}
table{
    border-radius: 20px;
    box-shadow: 0px 5px 15px #008374;
}
tr{
    display: flex;
    justify-content: space-around;
    margin: 12px;
}
td input{
    width: 500px;
    height: 35px;
}
td select{
    width: 220px;
    height: 35px;
    border-radius: 5px;
}
td label{
    width: 150px;
    height: 35px;
}
.forms{
    width:100%; 
    display:flex; 
    justify-content:center;
}

/* Responsive Styles */
@media only screen and (max-width: 600px) {
    main {
        padding: 10px;
    }

    button {
        width: 100%;
        margin-bottom: 10px;
    }
}
.termscheckbox{
    display: flex;
    width: 100%;
}
.checkB{  
    display: flex;
    justify-content: start;
}
.checkB input{
    height: 20px;
    width: 20px;
    margin: 0;
    padding: 0s;
    margin-right: 12px;
}

</style>

<body>

    <main>
        <div class="return">
            <a href="<?= base_url('userpage')?>"><img src="<?= base_url('/Impact/icons/back-arrow.png')?>" style="width:40px; height:40px;"></a>
        </div>
        <header>
            <h3>AGRO-CASH</h3>
            <H6>Your Digital Wallet Solution</H6>
        </header>


        <section id="balance-section">
            <div class="balancee">
                <div class="avbal">Available balance</div>
                <div id="balance">₱ <?= $balS['am']; ?>.00<span onclick="openCity(event, 'CashIn')"><img src="<?= base_url('/Impact/icons/cashIn.png')?>" style="width:40px; height:40px;">Cash In</span></div>
            </div>
        </section>  

        <div class="tab">
            <button id="defaultOpen" class="tablinks" onclick="openCity(event, 'London')">Transaction</button>
            <button class="tablinks" onclick="openCity(event, 'CashIn')">Cash In</button>
            <button class="tablinks" onclick="openCity(event, 'Paris')">Send</button>
            <button class="tablinks" onclick="openCity(event, 'Tokyo')">Withdraw</button>
        </div>
        <?php if($this->session->flashdata('status')): ?>
            <div class="form-btn" style="justify-content: center; height: 35px; display: flex; color: crimson; padding: 1%; font-weight: 500;">
            <?= $this->session->flashdata('status'); ?>
            </div>
        <?php endif; ?><hr>

        <form action="<?= base_url('cashIn'); ?>" method="post" enctype="multipart/form-data">
            <div id="CashIn" class="tabcontent">
               <div class="forms">
                    <table>
                        <tr>
                            <td><label for="Name">Name:</label></td>
                            <td><input type="text" name="userName" class="form-control" value="<?= $info->fname; ?> <?= $info->lname; ?>" placeholder="Enter your name.." ></td>          
                       
                        </tr>

                        <tr>
                            <td><label for="Name">Number:</label></td>
                            <td><input type="number" name="user_number" class="form-control" value="<?= $info->number; ?>" placeholder="number.."></td>
                        </tr>

                        <tr>
                            <td><label for="Amount">Amount:</label></td>
                            <td><input type="number" name="Amount" class="form-control" placeholder="Enter Amount" ></td>
                        </tr>

                        <tr>
                            <td><label for="functionDropdown">Payment Option::</label></td>
                            <td>
                                <select name="Payment" id="functionDropdown">
                                    <option value="cash">On cash</option>
                                    <option value="Gcash">G-cash</option>
                                </select>
                            </td>
                        </tr>   

                        <tr>
                            <td><div id="output"></div></td>
                            <td>
                                <div id="OthersContainer" style="display: none;">
                                    <h6 style="display:flex; justify-content:center;">Please pay the exact amount at #<span style="color:crimson;"> 0951 0598 340</span></h6>
                                    <label>Upload reciept here: <input type="file" accept="image/*" name="recipts"></label>
                                </div>
                            </td>
                        </tr>
                      
                        <tr>
                       
                            <td rowspan="2"> <hr><h6 style="color:#008374;">Confirmed transaction will not be refunded <BR> Please make sure that all details are correct</h6>
                           
                        </tr>
                        <tr>
                            <td>
                                <div class="termscheckbox">
                                    <div class="checkB">
                                        <input type="checkbox" name="agree1" id="acceptTerms1" value="agree">
                                        <h6 style="color:#008374;">I confirm that the details are correct</h6>
                                    </div>
                                   
                                </div>
                            </td>
                        </tr>
                        <tr> 
                            <td rowspan="2"><button type="submit" id="submitButton" value="submit" class="form-btn" disabled>Cash In</button></td>
                        </tr>
                    </table>  
               </div>     
            </div>
        </form>
        
        
            <div id="London" class="tabcontent">
                <h6>Recent Transaction</h6>
                
                <p><?= $bal['status']; ?> atotal amount of ₱<?= $bal['amount']; ?></p>

            </div>
      

        <form action="<?= base_url('Send'); ?>" method="post" enctype="multipart/form-data">
            <div id="Paris" class="tabcontent">
                <div class="forms">
                    <table>
                        <tr>
                            <td><label for="Amount">Send to:</label></td>
                            <td><input type="text" name="Amount" class="form-control" placeholder="Enter Amount" ></td>
                        </tr>
                        <tr>
                            <td><label for="Amount">Amount:</label></td>
                            <td><input type="text" name="Amount" class="form-control" placeholder="Enter Amount" ></td>
                        </tr>
                        <tr>
                            <td><label for="Amount">Message:</label></td>
                            <td><input type="text" name="Amount" class="form-control" placeholder="Enter Amount" ></td>
                        </tr>
                    </table>
                </div>
            </div>
        </form>
        <div id="Tokyo" class="tabcontent">
        <h3>Withdraw</h3>
        <p>Tokyo is the capital of Japan.</p>
        </div>

    </main>

    <script src="script.js"></script>
</body>

</html>



<script>
    function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
    }

    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();



    

  /* === FOR DROP DOWN LIST === */
  // Get the select element
  const functionDropdown = document.getElementById('functionDropdown');

  // Get the element to display the output
  const outputDiv = document.getElementById('output');

  // Add an event listener to the select element
  functionDropdown.addEventListener('change', function () {
    const selectedFunction = functionDropdown.value;
    outputDiv.innerHTML = '';

    if (selectedFunction === 'Gcash') {
        OthersContainer.style.display = 'block';
        // Function 1: Display an alert
        //alert('Coming Soon...');
    } else if (selectedFunction === 'cash') {
        OthersContainer.style.display = 'none';
    
    } else {
        // Hide the image container if none of the above options are selected
        OthersContainer.style.display = 'none';
    }
});


    const acceptTerms1 = document.getElementById('acceptTerms1');
    //const acceptTerms2 = document.getElementById('acceptTerms2');
    const submitButton = document.getElementById('submitButton');

    acceptTerms1.addEventListener('change', toggleSubmitButton);
    //acceptTerms2.addEventListener('change', toggleSubmitButton);
   

    function toggleSubmitButton() {
        if (acceptTerms1.checked /*&& acceptTerms2.checked*/) {
            submitButton.disabled = false;
        } else {
            alert('Please check the required checkboxes before submitting.');
            submitButton.disabled = true;
        }
    }
    // Alert when submitting without checking checkboxes
    submitButton.addEventListener('click', function (event) {
        if (submitButton == disabled  /*|| !acceptTerms2.checked*/) {
            alert('Please check the required checkboxes before submitting.');
            event.preventDefault(); // Prevent form submission
        }
    });
</script>

    <style>
    body {
        font-family: Arial;
    }

    /* Style the tab */
    .tab { 
        overflow: hidden;
        border: 1px solid #ccc;
        background-color: #008374;
        display: flex;
        justify-content: space-around;
    }

    /* Style the buttons inside the tab */
    .tab button {
        background-color: #008374;
        float: left;
        border: 1.5px solid #008374;
        outline: none;
        cursor: pointer;
        padding: 7px 8px;
        margin: 2px 2px;
        transition: 0.3s;
        font-size: 17px;
    }

    /* Change background color of buttons on hover */
    .tab button:hover,  .tab button.active {
        background-color: #008374;
        border: 1.5px solid white;
    }

    /* Style the tab content */
    .tabcontent { 
        display: none;
        padding: 6px 12px;
        border: 1px solid #ccc;
        border-top: none;
    }
</style>