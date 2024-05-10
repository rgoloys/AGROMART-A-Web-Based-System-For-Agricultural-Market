<div class="navbar">
        <a href="<?php echo base_url();?>preparing">Preparing</a>
        <a href="<?php echo base_url();?>sellerorder" >To Ship</a>
        <a href="<?php echo base_url();?>com" style ="font-size: 18px; color: #f85a40;"><b>Delievered</b></a>
        <a href="<?php echo base_url();?>cancelled">Cancelled</a>
</div>


<div class="content-data"><br>
    <div id="print">
        <?php $hasDeliveredOrders = true; ?>
        <?php foreach ($order as $item): ?>
           <div class="order-container">
                    <div class="tags" style="display:flex; justify-content: space-between; padding: 0; margin: 0;">
                        <h4><img src="<?php echo base_url('Impact/assets/img/user.png')?>" style="width:15px; height: 15px;"> <?= $buyer->fname ?> <?= $buyer->lname ?></h4>
                        <h4>Date delivered: <span style="color:#008374;"><time datetime="2020-01-01"><?= date('F j, Y', strtotime($item['date_delievered'])) ?></span></h4>
                        <h4>Order ID: <?= $item['order_id'] ?></h4>
                    </div>
                    <hr>
                    <table>
                        <thead>
                            <td style="display:flex; align-items:center; border: none;"><img src="<?= base_url('/upload/images/' . $item['image1']) ?>" style="width: 80px; height: 80px;"><?= $item['p_title'] ?></td>
                            <td style="border: none;">Unit price: ₱<?= $item['p_price'] ?></td>
                            <td style="border: none;"><?= $item['Quantity'] ?>x</td>
                            <td style="border: none;">Shipping fee: <?= $item['charge'] ?></td>
                            <td style="border: none;">Total Price: ₱<?= $item['Total_Price'] ?></td>
                            <td style="border: none;">Total Profit: ₱<span id="prof"> </span></span></td>
                            <td style="border: none;"><a style="color: red;" href="<?php echo base_url('productDetails/' . $item['id']) ?>">Visit Reviews</a></td>
                        </thead>
                    </table>
                </div>
                <br>
           
               
           
        <?php endforeach; ?>

        <?php if (!$hasDeliveredOrders): ?>
            <p style="text-align: center; font-size: 24px;">No delivered orders</p>
        <?php endif; ?>
    </div>
</div>
                
<style>
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