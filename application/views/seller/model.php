<style>
    
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
    margin-bottom: 20px;
}

table th,
table td {
    border: 1px dashed black    ;
    padding: 8px;
    text-align: left;
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
    display: block;
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
            padding: 10px;
        }

        .navbar a {
            color: #fff;
            text-decoration: none;
            padding: 10px 20px;
            transition: background-color 0.3s, color 0.3s;
        }

        /* Change the color of the links on hover */
        .navbar a:hover {
            background-color: #555;
        }
  th{
    margin: .5%;
    font-weight: 900;
  }
  tr:nth-child(even) {
  background-color: #fff;
  } 
  tr:nth-child(odd) {
  background-color: #fff;
  } 
  @media print {
        body * {
            visibility: hidden;
        }
        #print, #print * {
            visibility: visible;
        }
        #print {
            position: absolute;
            left: 0;
            top: 0;
        }
    }
</style>

<div id="myModal" class="modal">
    <div class="modal-content" >
        <div class="invoice" id="print">
            <div class="header">
                <div class="headTag" style="display:flex; justify-content: center;" >
                    <h2>AGROMART</h2>
                </div><br>
                <div class="accountss"  style="display:flex; justify-content:space-between; text-align: left; width:100%;">
                    <div class="Sender" style="width:50%;" >
                        <h4>Sender:</h4><br>
                        <ul>
                            <li><span style="font-weight: 500;"></span><b><?php echo $data['fname']; ?> <?php echo $data['lname']; ?></b></span> | <?= $buyer->number ?></li>
                            <li><?= $data['Street'] ?>, <?= $data['Barangay'] ?></li>
                            <li><?php echo $data['Municipality']; ?>,  <?php echo $data['Provice']; ?></li><br>
                            <li><?php echo $data['OtherAddress']; ?></li>
                        </ul>
                    </div>
                    
                    <div class="Reciever" style="width:50%; text-align: right;">
                        <h4>Reciever:</h4><br>
                        <ul>
                            <li><span style="font-weight: 500;"></span><b><?= $buyer->fname ?> <?= $buyer->lname ?></b></span> | <?= $buyer->number ?></li>
                            <li><?= $buyer->Street ?>, <?= $buyer->Barangay ?></li>
                            <li><?= $buyer->Municipality ?>,  <?= $buyer->Provice ?></li><br>
                            <li><?= $buyer->OtherAddress ?></li>
                        </ul>
                    </div>
                </div><br><br>
                <table>
                    <tr>
                        <td>Payment Method</td>
                        <td>Product</td>
                        <td>Quantity</td>
                        <td style="display:flex; justify-content:end;">Order ID: <?php echo $product['order_id']; ?></td>
                    </tr>
                    <tr>
                        <td><?php echo $product['PaymentMethod']; ?></td>
                        <td><?php echo $product['p_title']; ?></td>
                        <td><?php echo $product['Quantity']; ?>x</td>
                        <td style="display:flex; justify-content:end;">Total Price: ₱<?php echo $product['Total_Price']; ?></td>
                    </tr>
                </table>
            <div class="buttons">  
            </div>
        </div>
    </div>
    <a href="<?php echo base_url();?>preparing?>" style="text-decoration: none;">  <button class="button" onclick="openModal()">Back</button> </a>
    <a href="" style="text-decoration: none;">   <button class="button" onclick="printDiv('print')" >PRINT</button> </a>
</div>


<script src="https://cdn.jsdelivr.net/npm/jsbarcode@3.11.0/dist/JsBarcode.all.min.js"></script>
<script type="text/javascript">
            // Generate a unique value (e.g., invoice number)
var invoiceNumber = "81";

// Generate the barcode and set it in the SVG element
JsBarcode("#barcode", invoiceNumber, {
    format: "CODE128",  // Specify the barcode format
    displayValue: true  // Show the value (invoice number) below the barcode
});
    function printDiv(divName) {
    var printContents = document.getElementById(divName).innerHTML;
    var originalContents = document.body.innerHTML;
    
    document.body.innerHTML = printContents;

    window.print();

    document.body.innerHTML = originalContents;

}

</script>
