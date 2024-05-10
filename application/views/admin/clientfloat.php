<style>  
*{
  margin: 0;
  padding: 0;
}
/* nav {
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
    display: none;
} */

.modal {
  /* Hidden by default */
    position: fixed; /* Stay in place */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.5); /* Black w/ opacity */
    display: flex;
    justify-content: center;
    margin-left: 100px;
   }
   .line{
    width: 900px; 
    outline: 1px dashed red; 
    margin-top: 5%;
    height: 80%;
    overflow: scroll;
   }
 
   
   /* Modal Content/Box *
   .modal-content {
     margin: 5% auto; /* 15% from the top and centered *
     margin-top: 10px;
     width: 1024px; /* Could be more or less, depending on screen size *
     height: 100%;
     display: flex;
     justify-content: end;
     outline: 1px solid blue;
   }*/
   .board{
    width: 750px; 
    margin-top: 10%;
    display: block;
   }
.useS{
  margin-top: 0;
}

   
   /* The Close Button */
   .close {
     color: #aaa;
     float: right;
     font-size: 28px;
     font-weight: bold;
   }
   
   .close:hover,
   .close:focus {
     color: black;
     text-decoration: none;
     cursor: pointer;
   }
   .fcc-btn {
     background-color: #04AA6D;
     color: black;
     padding: 15px 25px;
     text-decoration: none;
   }
   .fcc-btn:hover {
    color: white;
   }
   th{
    font-weight: 900;
    
  }
  th, td{
    font-size: 12px;
  }
 /* tr:nth-child(even) {
  background-color: #008374;
  } */
  </style>



<div id="myModal" class="modal">  
  <div class="line">
    <a href="<?php echo base_url();?>adminclient"><span class="close"  >&times;</span><a>
    <h4><?php echo $data[0]['fname'];?> <?php echo $data[0]['lname']; ?></h4>
    <h5><?php echo $data[0]['email']; ?></h5><br>
    <?php foreach($products as $item): ?>
    <?php if ($item['Status']  == "To-Ship"){ ?>
    <form action="<?= base_url('PrfDlvry/'. $item['order_id']); ?>" method="POST" enctype="multipart/form-data" >
      <table>
              <tr>
                <th>Products</th>
                <th>Reciept/Payment</th>
                <th>Price</th>
                <th>Ship fee</th>
                <th>Qty</th>
                <th>Total price</th>
                <th>Shipment Mode</th>
                <th>Shipment Date</th>
                <th>Proof of Delievery</th>
                <th>Save status</th>
              </tr>

               
              <tr>
                <td style="display:flex; align-items:center;"><img src="<?= base_url('/upload/images/'. $item['image1']) ?>" style="width: 70px; height: 100px;" ><?= $item['p_title'] ?></td>
                <td>
                  <?php
                    if (isset($item['Reciept']) && preg_match('/\.(jpg|jpeg|png|gif|bmp)$/i', $item['Reciept'])) {
                        // Check if $item['Reciept'] is not null and has a valid image file extension
                        echo '<img src="' . base_url('images/' . $item['Reciept']) . '" style="width: 80px; height: 110px; padding:0;">';
                    } else {
                        // Handle the case where $item['Reciept'] is null or not an image
                        echo $item['Reciept'];
                    }
                  ?>
                </td>
                <td><?= $item['p_price'] ?></td>
                <td><?= $item['charge']?></td>
                <td><?= $item['Quantity'] ?>x</td>
                <td><?= $item['Total_Price'] ?></td>
                <td><?= $item['shipArr']?></td>
                <td> <time datetime="2020-01-01"><?= date('F j, Y', strtotime($item['dateShip'])) ?></td>

                <td>
                  <input type="file" name="Prof" style="width: 150px;">
                </td>
                <td><button type="submit" name="save"  style="font-size: 14px; width: 75px; height: 30px;">Save</button></td>
                
              </tr>

            </table>
            <table>
              <tr>
                <td style="border:none;">
                  <div class="btns" style="margin: 0; display: flex; justify-content: end;">
                    <a href="<?php echo base_url();?>adminseller"> <button>Check Seller</button></a>
                    <a href="<?php echo base_url();?>adminclient"><button>Close</button><a>
                  </div>
                </td>
              </tr>
            </table>
            </form>

      </div>
    </div>
  </div>
</div>


<?php } ?>
<?php endforeach; ?>
<script>

  //modal
  // Get the modal
  var modal = document.getElementById("myModal");
  var modal = document.getElementByClass("sidebar");
  const toggleSidebar = document.querySelector('nav .toggle-sidebar');

  // Get the button that opens the modal
  var btn = document.getElementById("myBtn");

  // Get the <span> element that closes the modal
  var span = document.getElementsByClassName("close")[0];

  // When the user clicks on the button, open the modal
  user clicks on <span> (x), close the modal
  span.onclick = function() {
    modal.style.display = "none";
  }

  // When the user clicks anywhere outside of the modal, close it
  window.onclick = function(event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
  }

</script>

<!--
              <table>
              <tr>
                <th>Products</th>
                <th>Reciept</th>
                <th>Price</th>
                <th>Ship fee</th>
                <th>Quantity</th>
                <th>Total price</th>
                <th>Status</th>
                <th>Save status</th>
              </tr>
              <?php foreach($products as $item): ?>
              <tr>
                <td style="display:flex; align-items:center;"><img src="<?= base_url('/upload/images/'. $item['image1']) ?>" style="width: 50px; height: 50px;" ><?= $item['p_title'] ?></td>
                <td><img src="<?= base_url('images/'. $item['Reciept']) ?>" style="width: 50px; height: 50px;" ><?= $item['PaymentMethod'] ?></td>
                <td><?= $item['p_price'] ?></td>
                <td><?= $item['charge']?></td>
                <td><?= $item['Quantity'] ?>x</td>
                <td><?= $item['Total_Price'] ?></td>
                <form action="<?= base_url('status/'. $data[0]['unique_id']); ?>" method="POST" enctype="multipart/form-data" >
                <td>
                <select id="functionDropdown" name="Status">
                  <option value="<?= $item['Status'] ?>"><?= $item['Status'] ?></option>
                  <option value="Pending">Pending</option>
                  <option value="To-Ship">To Ship</option>
                  <option value="Delievered">Delievered</option>
                </select>
                </td>
                <td><button type="submit" name="save"  style="font-size: 14px; width: 75px; height: 30px;">Save</button></td>
                </form>
              </tr>
              <?php endforeach; ?>
            </table>
            <table>
              <tr>
                <td style="border:none;">
                  <div class="btns" style="margin: 0; display: flex; justify-content: end;">
                    <a href="<?php echo base_url();?>adminseller"> <button>Check Seller</button></a>
                    <a href="<?php echo base_url();?>adminclient"><button>Close</button><a>
                  </div>
                </td>
              </tr>
            </table>

              -->