
<div class="navbar">
        <a href="<?php echo base_url();?>preparing" style ="font-size: 18px; color: #f85a40;"> <b>Pending</b></a>
        <a href="<?php echo base_url();?>sellerorder" >To Ship</a>
        <a href="<?php echo base_url();?>com">Delievered</a>
        <a href="<?php echo base_url();?>cancelled">Cancelled</a>
</div>

<?php $hasPendingOrders = false; ?>
<?php foreach ($order as $item): ?>
  <?php if ($item['Status'] == "Pending") { ?>
    <?php $hasPendingOrders = true; ?>
    <div class="content-data"><br>
      <div class="order-container" style="padding:0; margin:0;">
        <div class="tags" style="display:flex; justify-content: space-between; padding: .5%; margin: .5%;">
          <h4><img src="<?php echo base_url('Impact/assets/img/user.png')?>" style="width:15px; height: 15px;"><?= $buyer->fname ?> <?= $buyer->lname ?></h4>
          <h4>Order ID: <?= $item['order_id'] ?></h4>
          <a href="<?php echo base_url(); ?>model/<?= $item['order_id'] ?>" style="text-decoration: none;"><button class="button" onclick="openModal()">Print Receipt</button></a>
          <?php if ($this->session->flashdata('Address')): ?>
            <div class="form-btn" style="justify-content: center; height: 35px; display: flex; color: crimson; padding: 1%; font-weight: 500;">
              <?= $this->session->flashdata('Address'); ?>
            </div>
          <?php endif; ?>
        </div>
        <hr>
        <table>
          <form action="<?= base_url('shipment/' . $item['order_id']); ?>" method="POST" enctype="multipart/form-data">
            <thead>
              <td style="display:flex; align-items:center;  border: none;"><img src="<?= base_url('/upload/images/' . $item['image1']) ?>" style="width: 80px; height: 80px;"><?= $item['p_title'] ?></td>
              <td style=" border: none;">₱<?= $item['p_price'] ?> price</td>
              <td style=" border: none;"><?= $item['Quantity'] ?>x</td>
              <td style=" border: none;">₱<?= $item['charge'] ?> Shipping Fee</td>
              <td style=" border: none;">Total: ₱<?= $item['Total_Price'] ?></td>
              <td>
                <span style="font-size: 14px; font-weight:800;">Choose Shipment:</span><br>
                <label>
                  <input type="radio" name="selectedOption" value="Drop Off">
                  Drop Off
                </label><br>
                <label>
                  <input type="radio" name="selectedOption" value="Pick Up">
                  Pick Up
                </label><br>
              </td>
              <td>
                <span style="font-size: 14px; font-weight:800;">Set Shipment Date:</span><br>
                <input type="date" id="date" name="dateShip" required>
              </td>
              <td></td>
              <td>
                <button style="margin-left:50px;" class="button" type="submit">Publish</button>
              </td>
            </thead>
          </form>
        </table>
      </div>
    </div>
  <?php } ?>
<?php endforeach; ?>

<?php if (!$hasPendingOrders): ?>
  <p style="text-align: center; font-size: 24px;"><br>No pending orders</p>
<?php endif; ?>
                
<style>


#selectOption, #date{
    height:30px; 
    border: 3px solid #008374;
}
#selectOption:hover, #date:hover{
    height:30px; 
    border: 3px solid #f85a40;
}

    
.invoice {
    width: 100%;
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
    border: 1px solid #ccc;
    font-family: Arial, sans-serif;
}

/* Style the header section */
.header {
    text-align: center;
    margin-bottom: 20px;
}

/* Style the details section (From and To addresses) */
.details {
    display: flex;
    justify-content: space-between;
    margin-bottom: 20px;
}

.details .from,
.details .to {
    flex: 1;
}

/* Style the invoice details section (invoice number, date, due date) */
.invoice-details {
    display: flex;
    justify-content: space-between;
    margin-bottom: 20px;
}

.invoice-details .left,
.invoice-details .right {
    flex: 1;
}

/* Style the items table */
table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 10px;
}

table th,
table td {
    border: none;
    padding: 10px;
    text-align: left;
    font-size: 14px;
}

/* Style the total amount section */
.total {
    text-align: right;
    font-weight: bold;
}
/* Style the barcode container */
.barcode {
    text-align: center;
    margin-top: 20px;
}

/* Style the barcode SVG */
#barcode {
    width: 200px; /* Set the width of the barcode as needed */
    height: auto;
}


  /* Container styles */
  /* Modal styles */
.modal {
    display: none;
  position: fixed;
  z-index: 1;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.5);
  overflow-y: auto; /* Enable vertical scrolling */
}

.modal-content {
  background-color: #fff;
  margin: 5% auto;
  padding: 20px;
  border: 1px solid #ccc;
  width: 60%;
  max-width: 800px;
  text-align: center;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}

.close {
  color: #aaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
  cursor: pointer;
}

/* Button styles for the modal */
.modal-content button {
  padding: 10px 20px;
  margin: 10px;
  cursor: pointer;
}

.modal-content button:hover {
  background-color: #0056b3;
  color: #fff;
}

.order-container {
    border: 1px solid #ccc;
    padding: 20px;
    max-width: 100%; /* Set max-width to 90% for responsiveness */
    margin: 0 auto;
    background-color: #fff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
}

/* Customer section styles */
.customer {
    display: flex;
    align-items: center;
    justify-content: space-between; /* Align "To Ship" to the right */
    margin-bottom: 20px;
}

.customer img {
    width: 15%; /* Percentage-based width for responsiveness */
    max-width: 50px; /* Set a maximum width for very small screens */
    height: auto; /* Maintain aspect ratio */
    border-radius: 50%;
    margin-right: 10px;
}

/* Customer status (To Ship) */
.status {
    font-size: 18px; /* Make it smaller */
    font-weight: bold; /* Make it bold */
}

/* Product section styles */
.product {
    display: flex;
    align-items: center;
    margin-bottom: 20px;
}

.product img {
    width: 30%; /* Percentage-based width for responsiveness */
    max-width: 200px; 
    min-width: 200px;/* Set a larger maximum width for the product image */
    min-height: 100px; /* Maintain aspect ratio */
    margin-right: 20px;
}

/* Horizontal line styles */
.horizontal-line {
    border-top: 1px solid #ccc;
    margin: 20px 0;
}

/* Item info styles */
.item-info {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 20px;
}

/* Button styles */
.button-container {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.button-date {
    font-size: 12px;
    margin-right: 10px;
}

.button {
    background-color: #00796b;
    color: #fff;
    padding: 10px 10px;
    border: none;
    cursor: pointer;
}

.button:hover {
    background-color: #f85a40;
}
.navbar {
    background-color: #00796b;
    display: flex;
    justify-content: space-between;

}

.navbar a {
    text-align: center;
    width: 300px;
    color: #fff;
    text-decoration: none;
    padding: 10px 20px;
}

/* Change the color of the links on hover */
.navbar a:hover {
    color: #f85a40;
}
  th{
    margin: .5%;
    font-weight: 900;
  }
 /* tr:nth-child(even) {
  background-color: #008374;
  } */
</style>
<style>
  
    .btnReports{
        width: 150px;
        height: 30px;
        background-color: #008374;
        font-weight: 900;
        color: black;
    }
    .btnReports:hover{
        background-color: #f85a40;
        color:#FFFF;
    }
</style>
   


<script>
// Function to toggle the dropdown content
function toggleDropdown() {
    var dropdownContent = document.getElementById("dropdown-content");
    if (dropdownContent.style.display === "block") {
        dropdownContent.style.display = "none";
    } else {
        dropdownContent.style.display = "block";
    }
}

// Function to show a specific div and hide others
function showDiv(divId) {
    // Hide all divs
    var allDivs = document.querySelectorAll('div[id^="div"]');
    allDivs.forEach(function(div) {
        div.style.display = "none";
    });

    // Show the selected div
    document.getElementById(divId).style.display = "block";
}
function toggleDiv() {
    // Get the selected option value
    var selectedOption = document.getElementById('selectOption').value;

    // Get the div element you want to show/hide
    var divToShowHide = document.getElementById('divToShowHide');

    // Check the selected option and show/hide the div accordingly
    if (selectedOption === 'DropOff') {
        DropOff.style.display = 'block'; // Show the div
        PickUp.style.display = 'none';
    } else if(selectedOption === 'PickUp'){
        PickUp.style.display = 'block';
        DropOff.style.display = 'none'; // Hide the div
    }else{
        PickUp.style.display = 'none';
        DropOff.style.display = 'none'; // Hide the div
    }
}
</script>