<h2>Pending Orders</h2>
<div class="con">

  
      <!--div class="image">
        <img src="<?php echo $data['user_avtar']; ?>">
      </div>
      <div class="name_job"><?php echo $data['fname']; ?> <?php echo $data['lname']; ?></div>
        <p> <?php echo $data['address']; ?> </p>
        <--<p>Total Order: (<?php echo $item['total_count']; ?>)</p> 
        <p>STATUS: <?php echo $item['Status']; ?></p> --
        <div class="btns">
          <a href="<?php echo base_url('clientfloat/'. $data['unique_id']);?>"><button>Remove</button> <a>
          <a href="<?php echo base_url('clientfloat/'. $data['unique_id']);?>"> <button>Details</button> </a>
        </div-->
     


      <table>
      <?php foreach($data as $key => $data): ?>
      <?php if ($data['Status']  == "To-Ship"){ ?>
      <form action="<?= base_url('PrfDlvry/'. $data['order_id']); ?>" method="POST" enctype="multipart/form-data" >
          <tr>
            <td style="display:flex; align-items:center;"><img src="<?php echo $data['user_avtar']; ?>" style="width: 100px; height: 70px;" ></td>
            <td><?php echo $data['fname']; ?> <?php echo $data['lname']; ?></td>
            <td colspan="6">Address: <?php echo $data['Street']; ?>, <?php echo $data['Barangay']; ?>, <?php echo $data['Municipality']; ?>, <?php echo $data['Provice']; ?> | <?php echo $data['OtherAddress']; ?></td>
            <td colspan="2"><b>Shipment Mode:</b> <?php echo $data['shipArr']; ?></td>
            <!--td>Ship Date: <time datetime="2020-01-01"><?= date('F j, Y', strtotime($data['dateShip'])) ?></td-->
          </tr>
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
                <td style="display:flex; align-items:center;"><img src="<?= base_url('/upload/images/'. $data['image1']) ?>" style="width: 100px; height: 70px;" ><?= $data['p_title'] ?></td>
                <td>
                  <?php
                    if (isset($data['Reciept']) && preg_match('/\.(jpg|jpeg|png|gif|bmp)$/i', $data['Reciept'])) {
                        // Check if $item['Reciept'] is not null and has a valid image file extension
                        echo '<img src="' . base_url('images/' . $data['Reciept']) . '" style="width: 100px; height: 100px; padding:0;">';
                    } else {
                        // Handle the case where $item['Reciept'] is null or not an image
                        echo $data['Reciept'];
                    }
                  ?>
                </td>
                <td><?= $data['p_price'] ?></td>
                <td><?= $data['charge']?></td>
                <td><?= $data['Quantity'] ?><?= $data['UnitQuan'] ?></td>
            <td>
    <p id="t"><?= $data['Total_Price'] ?></p>
    <br>
    <input type="text" id="prof" name="fee" value="">
</td>
                <td><?= $data['shipArr']?></td>
                <td> <time datetime="2020-01-01"><?= date('F j, Y', strtotime($data['dateShip'])) ?></td>

                <td>
                  <input type="file" name="Prof" accept="image/*" style="width: 150px;">
                </td>
                <td><button type="submit" name="save"  style="font-size: 14px; width: 75px; height: 30px;">Save</button></td>
                
              </tr>

            </table>
            <table>
              <tr>
                
              </tr>
              </form>
            <?php } ?>
      <?php endforeach ?>
            </table>

</div>
  <script>
function updateProfValue() {
    var totalPrice = document.getElementById("t").innerText.trim(); // Use innerText to get the text content of the <p> element
    var urll = "<?= base_url() ?>Products/ProductController/s/";
    var aj = new XMLHttpRequest();
    aj.open("GET", urll, true);
    aj.send();
    aj.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            var data = JSON.parse(this.responseText);
            console.log(data);

            var schargeContent = 0; // Accumulator for scharge values

            for (var i = 0; i < data.length; i++) {
                var x = Math.round(data[i].scharge);
                schargeContent += x;
            }

            var b = parseFloat(totalPrice); // Use parseFloat to convert string to number
            var a = schargeContent;
            var c = Math.round(b * (a / 100));
            var d = b - c;

            document.getElementById("prof").value = c;
        }
    };
}

// Call the function when the page loads
document.addEventListener("DOMContentLoaded", function() {
    updateProfValue();
});
</script>

<style>
  table tr, td th{
    background-color: white;

  }
  th{
    font-size: 14px;
  }
  td{
    font-size: 12px;
  }
</style>