

<!-- ===== MAIN ===== -->
		
<style>
  .info-data .card:hover{
    padding: 20px;
	border-radius: 10px; /* 10px */
	background: var(--light);
	box-shadow: 8px 8px 16px #008374;
    }
</style>

<div class="info-data">
    <div class="card">
        <div class="head">
            <div>
                <a href="<?php echo base_url('adminclient')?>"  style="color: black; text-decoration: none;">
                    <h2 style ="font-size:30px"><?php echo $arrdata['order']; ?></h2>
                    <p id="ddd" style ="font-size:20px">New Orders</p>
                </a>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="head">
            <div>
                <a href="<?php echo base_url('adminUser')?>"  style="color: black; text-decoration: none;">
                    <h2 style ="font-size:30px"><?php echo $arrdata['alluser']; ?></h2>
                    <p style ="font-size:20px">Total User</p>
                </a>
            </div>
        </div>
    </div>
    <div class="card"  >
        <div class="head">
            <div><a href="#" style="color: black; text-decoration: none;">
                    <h2 style ="font-size:30px"><?php echo number_format($arrdata['sales'], 2) ?></h2>
                    <p style ="font-size:20px">Sales</p>
                </a>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="head">
            <div>
                <a href="#"  style="color: black; text-decoration: none;">
                    <h2 style ="font-size:30px"><?php echo number_format($arrdata['profit'], 2) ?></h2>
                    <p style="font-size: 20px">Website Profit <a href="javascript:openForm();"><b><?php echo $arrdata['scharge'][0]['scharge']; ?>%</b></a></p>
                </a>
            </div>
    
        </div>
    </div>

	</div>
<div class="form-popup" id="myForm">
  <form action="<?php echo base_url('AdminController/schange'); ?>" method="post" class="form-container">
     <a href="javascript:closeForm();"> <span class="close" style="font-size:20px">&times;</span> </a>
   
<br>
<div style="display:flex;">
    <br>
    <label for="Number"><b>Edit Service Charge</b></label>
    
    <input type="number" placeholder="Edit Service Charge" name="scharge" required>
</div><br>
     <button type="submit" name="save" class="btn">Change</button>
   
  </form>
  </div>
           
           
<style>
* {
  box-sizing: border-box;
}

/* Button used to open the contact form - fixed at the bottom of the page */
.open-button {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 280px;
}

/* The popup form - hidden by default */
.form-popup {
  display: none;
  position: fixed;
  bottom: 50%;
  right: 50%;
  transform: translate(50%, 50%);
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
  box-shadow: 0 4px 8px rgba(128, 128, 128, 0.5); /* Grey box shadow */
}

/* Full-width input fields */
.form-container input[type=text],
.form-container input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus,
.form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/login button */
.form-container .btn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom: 10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover,
.open-button:hover {
  opacity: 1;
}
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












<STYLE>
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
            <form id="myForm" method="get" action="<?= base_url('AdminController/index'); ?>">
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
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
    
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


<!-- =====  AGROCASH ===== -->
<style>
    .agrocash-container{
        margin-top: 50px;
    }
</style>


    <div class="agrocash-container">
        <table>
            <tr>
                <td colspan="7"><h6>AGROCASH - You Digital Wallet Solution</h6></td>
            </tr>
            <tr>
              
                <td>NAME:</td>
                <td>Current Balance:</td>
                <td>Cash In Amount:</td>
                <td>New Balance:</td>
                <td>Payment Option:</td>
                <td>Approved</td>
            </tr>
            <?php foreach ($datas['users'] as $users) : ?>

            <form action="<?= base_url(); ?>/Approved/<?php echo $users['id']; ?>" method="post" enctype="multipart/form-data">
            <tr>
                <td><?php echo $users['unik']; ?></td>
                <td><?php echo $users['bal']; ?></td>
                <td><input type="number" name="newBalance" value="<?php echo $users['amount']; ?>"></td>
                <td><input type="number" name="newBalance" value="<?php echo $new_bal = $users['bal'] + $users['amount']; ?>"></td>
                <td><?php echo $users['payment']; ?></td>
                
                <td><a href="<?php echo base_url();?>Approved/<?php echo $users['id']; ?>"><button type="submit" name="submit">Approved</button></a></td>
            </tr>
          </form>
<?php endforeach; ?>
        </table>
    </div>



