<div class="navbar">
<a href="<?php echo base_url();?>preparing">Preparing</a>
        <a href="<?php echo base_url();?>sellerorder" >To Ship</a>
        <a href="<?php echo base_url();?>shipping" style ="font-size: 18px; color: #f85a40;"><b>Delievered</b></a>
        <a href="<?php echo base_url();?>cancelled">Cancelled</a>
    </div>

<div class="content-data"> 

    <div  id="print">
   <table>
    <?php $hasDeliveredOrders = false; ?>
    <?php foreach ($order as $item): ?>
        <?php if ($item['Status'] == "Delivered"): ?>
            <?php $hasDeliveredOrders = true; ?>
            <tr>
                <div class="order-container">
                    <!-- Customer Section -->
                    <div class="customer">
                        <div>
                            <h3><?= $buyer->fname ?> <?= $buyer->lname ?> </h3>
                        </div>
                        <p class="status">To Ship</p> <!-- Status with smaller font size and bold -->
                    </div>

                    <!-- Product Section -->
                    <div class="product">
                        <img src="<?= base_url('/upload/images/' . $item['image1']) ?>" style="width: 50px; height: 50px;">
                        <div>
                            <h4><?= $item['p_title'] ?> </h4>
                            <p>Pesos: <?= $item['p_price'] ?> </p>
                        </div>
                    </div>

                    <!-- Horizontal Line after Product -->
                    <div class="horizontal-line"></div>

                    <!-- Item Info Section (Number of Items and Total Payment) -->
                    <div class="item-info">
                        <p>Number of Items: <?= $item['Quantity'] ?></p>
                        <p>Total Payment: <?= $item['Total_Price'] ?></p>
                    </div>

                    <!-- Horizontal Line before Button Section -->
                    <div class="horizontal-line"></div>

                    <!-- Button Section -->
                    <div class="button-container">
                        <p class="button-date">Order Date: 2023-09-21</p> <!-- Date on the left -->
                        <button class="button"> View Product Details</button> <!-- Button on the right -->
                    </div>
                    <p>Order ID: <?= $item['order_id'] ?></p>
                </div>
            </tr>
            <br>
        <?php endif; ?>
    <?php endforeach; ?>

    <?php if (!$hasDeliveredOrders): ?>
        <tr>
            <td colspan="7">
                <p style="text-align: center; font-size: 24px;">No delivered orders</p>
            </td>
        </tr>
    <?php endif; ?>
</table>
      </div>
</div>
                
<style>
  /* Container styles */
  .order-container {
            border: 1px solid #ccc;
            padding: 20px;
            max-width: 80%; /* Set max-width to 90% for responsiveness */
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
            padding: 10px 20px;
            border: none;
            cursor: pointer;
        }

        .button:hover {
            background-color: #0056b3;
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
  function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;
    
     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
     

   }

    </script>