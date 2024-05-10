<style>
  *{
    margin: 0;
    padding: 0;
  }
  #cart {
            background-color: white;
            box-shadow: 0px 0px 10px grey;
            padding: 20px; /* Optional: Adjust padding as needed */
        }
          #Pending {
            background-color: white;
            box-shadow: 0px 0px 10px grey;
            padding: 20px; /* Optional: Adjust padding as needed */
        }
          #Paris {
            background-color: white;
            box-shadow: 0px 0px 10px grey;
            padding: 20px;
            display: flex;
            justify-content: center;
        }
         #toRate {
            background-color: white;
            box-shadow: 0px 0px 10px grey;
            padding: 20px; /* Optional: Adjust padding as needed */
        }
        #cart {
            background-color: white;
            box-shadow: 0px 0px 10px grey;
            padding: 20px; /* Optional: Adjust padding as needed */
        }

        .prodInfo table {
            width: 100%;
        }

        .prodInfo td {
            padding: 10px;
            text-align: left;
        }

        .prodInfo input, .prodInfo select {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
            margin-bottom: 10px;
        }

        .prodInfo label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }

        .prodInfo small {
            color: red;
        }
  .box2{
    display:inline-flex; 
    justify-content: space-evenly;
    flex-wrap: wrap;
    width: 100%;
    height: 400px;
    position: relative;
  }
  
  .prodInfo{
    width: 400px;
  }
   .prodInfo td {
            padding: 10px;
            text-align: left;
            font-size: 16px; /* Set the font size to 16px or any desired value */
        }

  table, td{
    border: none;
  }
  td input{
    width: min(50vh, 200px);
    height: 25px;
  }
  .publishBtn{
    display: flex; 
    justify-content: center;
    margin: 8px 0;
  }
  .publishBtn button{
    width: 150px;
    height: 40px;
    background-color: #008374;
    font-weight: 900;
    color: black;
    
  }    
  .publishBtn button:hover{
    background-color: #f85a40;
    color:#FFFF;
  }
  .container{
    padding: 0;
    margin: 0;
    /*background-color: #e6e6c4;*/
  }
  .ltng, .ltng:hover{
      border:none;
  }
  #status{
    display:flex; 
    justify-content:center;
    height: 50px;
    margin: 0% .5% 0% .5%;
  }
  #status .w3-button {
    margin: 0% .2% 0% .2%;
    width: 500px;
    background-color: #008374;
    border: 3px solid #008374;
    color: white;
    font-weight: 600;
  }
   /* Active button styles */
   #status .w3-button:focus,
   #status .w3-button:active,
   #status .w3-button.w3-active { /* Added w3-active class */
    background-color: #f85a40; /* Change to your desired active background color */
  }
  #status  .w3-button:hover{
    margin: 0% .2% 0% .2%;
    width: 500px;
    border: 3px solid #f85a40;
    font-weight: 600;
  }
@media (max-width: 768px) {
    #status{
    display:flex; 
    justify-content:center;
    height: 25px;
    margin: 0% .5% 0% .5%;
  }
  
    #status .w3-button {
    margin: 0% .2% 0% .2%;
    width: 200px;
    background-color: #008374;
    border: 3px solid #008374;
    color: white;
    font-weight: 600;
  }
  
  table, tr, td{
    font-size: 20px;
    padding: 0;
    margin: 0;
  }
  tr{
    padding: 0;
    margin: 0;
  }
  td{
    width: 60px;
    display: flex;
    justify-content: center;
    align-content: center;
    flex-wrap: wrap;
    padding: 0;
    margin: 0;
  }
  td img{
    width: 50px;
    height: 50px;
    padding: 0;
    margin: 0;
  }
  td .btn{
    font-size: 20px;
  }
  h6, p{
    font-size: 20px;
    text-align: center;
  }
  #status button{
    font-size: 10px;
  }
  #status{
    display:flex; 
    justify-content:center;
    height: 25px;
    margin: 0% .5% 0% .5%;
  }

}

    .order {
    
      padding: 10px;
      margin-bottom: 10px;
      font-size: 18px;
      display: flex;
      align-items: center;
    }
    .p{
          font-size:16px;
      }
    .date {
      flex: 1;
    }
    .product {
      flex: 2;
      font-size: 18px;
      display: flex;
      align-items: center;
    }
    .product-image {
      width: 50px;
      height: 50px;
      margin-right: 10px;
    }
      .product-image {
      width: 100px; /* Increase the image size */
      height: 100px; /* Increase the image size */
      margin-right: 10px;
    }
    .product-details {
     
    }
    .price-info {
      flex: 1;
      
      text-align: right;
      font-weight: bold;
    }
    .quality, .price, .total, .status {
      flex: 1;
   
      text-align: center;
    }
    .status a{
      padding: 0 12px 0 12px;
      border-radius: 5px;
    }
    .check{
      color: #008374; 
      border: 1px solid #008374;
    }
    .check:hover{
      color: #d9534f; 
    }
    .remove{
      color: #d9534f; 
      border: 1px solid #d9534f;

    }
    .out{
      color:crimson; 
      outline: 1px solid crimson; 
      padding: 5px 10px;
    }
     /* Responsive CSS */
    @media (max-width: 768px) {
      .date, .product-details, .price-info, .quality, .price, .total, .status {
        font-size: 10px; /* Smaller font size in responsive view */
      }

      .product {
        flex: 1;
        flex-direction: column;
        align-items: flex-start;
      }
      .product-image {
        width: 40px;
        height: 40px;
        margin-right: 0;
        margin-bottom: 10px;
      }
      .out{
        padding: 1px;
        font-size: 8px;
      }
    
    }
 @media screen and (max-width: 768px) {
  .w3-bar .w3-button {
    width: 100%;
    padding: 1px 1px; /* Equal padding top and bottom for mobile view */
  } .p{
      font-size:10px;
  }
}
  
</style>

  <div id="main" class="main" >
    <!--<button class="openbtn" onclick="openNav()">&#9776;</button>-->


      <!-- ==== MyCart ===== -->
    

<div class="container">
<form action="<?= base_url('products/add'); ?>" method="post" enctype="multipart/form-data">



      <!-- ===== MyPurchase ===== -->
    <div id="MyPurchase" class="tabcontent" style="margin: 0; padding: 0; display: block;">
  
    
  
        <div class="w3-bar w3-black" id="status" style="margin: 0; padding: 0;">
            <button type="button" class="w3-bar-item w3-button  w3-active" onclick="openCity('cart')">ABOUT PRODUCT</button>
          
          <button type="button" class="w3-bar-item w3-button" onclick="openCity('Pending')">MEDIA</button>
          <button type="button" class="w3-bar-item w3-button" onclick="openCity('Paris')">MAPPING</button>
          <button type="button" class="w3-bar-item w3-button" onclick="openCity('toRate')">DETAILS</button>
          
        </div>
        <br>
       <div id="cart" class="w3-container city" style="margin: 0;>
<div class="prodInfo">
      <table style="width:800px;">
            <tbody>
              <td><label>Title/Name: </label></td>
              <td><input type="text" name="p_title" class="form-control" id="product_title" placeholder="Product name" required>
                <small><?php echo form_error('p_title');?></small>
              </td>
            </tbody>
            <tbody>
              <td><label>Description:</label></td>
              <td><input type="text" name="p_description" class="form-control" id="product_description" placeholder="Brief description" >
                <small><?php echo form_error('p_description');?></small>
              </td>
            </tbody>
            <tbody>
              <td><label>Price:</label></td>
              <td><input type="number" name="p_price" id="product_price" placeholder="Enter Product Price" onkeyup="updateDisplay()"> 
                <small><?php echo form_error('p_price');?></small>
              </td>
            </tbody>
            <tbody>
            <td><label>Stocks:</label></td>
              <td><input type="text" name="p_stocks" class="form-control" id="product_stocks" placeholder="1000" style="width:20%;" required><input type="text"  
                name="p_stocks_Unit" class="form-control" id="product_qu" placeholder="kg, pieces, pounds etc." style="width:22%;" onkeyup="updateDisplay()" required>  
                <small><?php echo form_error('p_stocks');?></small>
              </td>
            </tbody>
            <tbody>
              <td><label>Variety/Brand:</label></td>
              <td><input type="text" name="p_brand" class="form-control" id="name" placeholder="ex. magnolia chicken">
                <small><?php echo form_error('p_brand');?></small>
              </td>
            </tbody>
            <tbody>
              <td><label>Pack size:</label></td>
              <td><input type="text" name="p_size" class="form-control" id="name" placeholder="ex. per kilo, per pcs" required>
                <small><?php echo form_error('p_size');?></small>
              </td>
            </tbody>
            <tbody>
              <td><label>Color:</label></td>
              <td><input type="text" name="p_color" class="form-control" id="name" placeholder="ex. black, red, white">
                <small><?php echo form_error('p_color');?></small>
              </td>
            </tbody>
            <tbody>
              <td><label>Date Planted:</label></td>
              <td><input type="date" name="date_planted" class="form-control" id="product_date_harvested"  placeholder="Product date harvested" required>
                <small><?php echo form_error('date_planted');?></small>
              </td>
            </tbody>
            <tbody>
              <td colspan="2"><p style="text-align: center;font-size:12px; color:red; font-weight:600;">Set Actual Date Harvest if product is already harvested and Estinate Date Harvested if not yet harvested</p></td>
            </tbody>
            <tbody>
              <td><label>Actual harvested:</label></td>
              <td><input type="date" name="Actual_harvested" class="form-control" id="product_date_harvested">
                  <small><?php echo form_error('Actual_harvested');?></small>
              </td>
            </tbody>
            <tbody>
              <td><label>Estimate Date harvested:</label></td>
              <td><input type="date" name="date_harvested" class="form-control" id="product_date_harvested">
                  <small><?php echo form_error('date_harvested');?></small>
              </td>
            </tbody>

         
            <tbody>
              <td colspan="2">
                <!-- DROPDOWN FUNCTION FOR CATEGORY -->
                <label for="functionDropdown">Address:</label>
                <select id="myDropdown" name="p_address" required> 
                <option value="San Clemente, Tarlac">SAN CLEMENTE, TARLAC</option>
                  <option value=""></option>
                  <option value="Balloc">Balloc</option>
                  <option value="Bamban">Bamban</option>
                  <option value="Casipo">Casipo</option>
                  <option value="Catagudingan">Catagudingan</option>
                  <option value="Daldalayap">Daldalayap</option>
                  <option value="Doclong 1">Doclong 1</option>
                  <option value="Doclong 2">Doclong 2</option>
                  <option value="Maasin">Maasin</option>
                  <option value="Nagsabaran">Nagsabaran</option>
                  <option value="Pit-ao">Pit-ao</option>
                  <option value="Poblacion Norte">Poblacion Norte</option>
                  <option value="Poblacion Sur">Poblacion Sur</option>
                  <option value=""></option>
                  <option value=""></option>
                  <option value="Camiling, Tarlac">CAMILING, TARLAC</option>
                  <option value=""></option>
                  <option value="Anoling 1st">Anoling 1st</option>
                  <option value="Anoling 2nd">Anoling 2nd</option>
                  <option value="Anoling 3rd">Anoling 3rd</option>
                  <option value="Bacabac">Bacabac</option>
                  <option value="Bacsay">Bacsay</option>
                  <option value="Bancay 1st">Bancay 1st</option>
                  <option value="Bilad">Bilad</option>
                  <option value="Birbira">Birbira</option>
                  <option value="Bobon 1st Casarratan">Bobon 1st Casarratan</option>
                  <option value="Bobon 2nd">Bobon 2nd</option>
                  <option value="Bobon Caarosipan">Bobon Caarosipan</option>
                  <option value="Cabanabaan">Cabanabaan</option>
                  <option value="Cacamilingan Norte">Cacamilingan Norte</option>
                  <option value="Cacamilingan Sur">Cacamilingan Sur</option>
                  <option value="Caniag">Caniag</option>
                  <option value="Carael">Carael</option>
                  <option value="Cayaoan">Cayaoan</option>
                  <option value="Cayasan">Cayasan</option>
                  <option value="Florida">Florida</option>
                  <option value="Lasong">Lasong</option>
                  <option value="Libueg">Libueg</option>
                  <option value="Malacampa">Malacampa</option>
                  <option value="Manaquem">Manaquem</option>
                  <option value="Manupeg">Manupeg</option>
                  <option value="Marawi">Marawi</option>
                  <option value="Matubog">Matubog</option>
                  <option value="Nagrambacan">Nagrambacan</option>
                  <option value="Nagserialan">Nagserialan</option>
                  <option value="Palimbo Proper">Palimbo Proper</option>
                  <option value="Palimbo Caarosipan">Palimbo Caarosipan</option>
                  <option value="Pao 1st">Pao 1st</option>
                  <option value="Pao 2nd">Pao 2nd</option>
                  <option value="Pao 3rd">Pao 3rd</option>
                  <option value="Papaac">Papaac</option>
                  <option value="Pindangan 1st">Pindangan 1st</option>
                  <option value="Pindangan 2nd">Pindangan 2nd</option>
                  <option value="Pob. A">Pob. A</option>
                  <option value="Pob. B">Pob. B</option>
                  <option value="Pob. C">Pob. C</option>
                  <option value="Pob. D">Pob. D</option>
                  <option value="Pob. E">Pob. E</option>
                  <option value="Pob. F">Pob. F</option>
                  <option value="Pob. G">Pob. G</option>
                  <option value="Pob. H">Pob. H</option>
                  <option value="Pob. I">Pob. I</option>
                  <option value="Pob. J">Pob. J</option>
                  <option value="San Isidro">San Isidro</option>
                  <option value="Santa Maria">Santa Maria</option>
                  <option value="Sawat">Sawat</option>
                  <option value="Sinilian 1st">Sinilian 1st </option>
                  <option value="Sinilian 2nd">Sinilian 2nd</option>
                  <option value="Sinilian 3rd ">Sinilian 3rd</option>
                  <option value="Sinilian Cacalibosuan">Sinilian Cacalibosuan</option>
                  <option value="Sinulatan 1st">Sinulatan 1st</option>
                  <option value="Sinulatan 2nd">Sinulatan 2nd</option>
                  <option value="Surgui 1st">Surgui 1st</option>
                  <option value="Surgui 2nd">Surgui 2nd</option>
                  <option value="Surgui 3rd">Surgui 3rd</option>
                  <option value="Tambugan">Tambugan</option>
                  <option value="Telbang">Telbang</option>
                  <option value="Tuec">Tuec</option>
              </select>

              </td>
            </tbody>

          
          </table>
            <div class="w3-bar w3-black" id="status">
           
          
          <button type="button" class="w3-bar-item w3-button" onclick="openCity('Pending')">next</button>
         
          
        </div>
        </div>
</div>





    <div id="Pending" class="w3-container city" style="display: none">
       <div class="prodInfo">
             <table>
          <tbody>
              <td>Short Video:</td>
              <td><input type="file" name="p_video" id="video_file" accept="video/*" >
                <small><?php echo form_error('p_video');?></small>
              </td>
            </tbody>
            <tbody>
              <td colspan="2"><p style="display:flex; justify-content: center;" >PRODUCT IMAGE</p></td>
            </tbody>
            <tbody>
              <td>+</td>
              <td><input type="file" name="p_image1" class="form-control" id="name" placeholder="Choose image" accept="image/*" required>
                <small><?php echo form_error('p_image1');?></small>
              </td>
            </tbody>
            <tbody>
              <td>+</td>
              <td><input type="file" name="p_image2" class="form-control" id="name" placeholder="Choose image" accept="image/*" required>
                <small><?php echo form_error('p_image2');?></small>
              </td>
            </tbody>
            <tbody>
              <td>+</td>
              <td><input type="file" name="p_image3" class="form-control" id="name" placeholder="Choose image" accept="image/*" required>
                <small><?php echo form_error('p_image3');?></small>
              </td>
            </tbody>
            <tbody>
              <td>+</td>
              <td><input type="file" name="p_image4" class="form-control" id="name" placeholder="Choose image" accept="image/*" required>
                <small><?php echo form_error('p_image4');?></small>
              </td>
            </tbody>
            <tbody>
              <td>+</td>
              <td><input type="file" name="p_image5" class="form-control" id="name" placeholder="Choose image" accept="image/*" required>
                <small><?php echo form_error('p_image5');?></small>
              </td>
            </tbody>

          
          </table>
    
              
                
        </div>
          <div class="w3-bar w3-black" id="status">
            <button type="button" class="w3-bar-item w3-button  w3-active" onclick="openCity('cart')">back</button>
          
         
          <button type="button" class="w3-bar-item w3-button" onclick="openCity('Paris')">next</button>
          
          
        </div>
    </div>

       <div id="Paris" class="w3-container city" style="display:none">
              <div class="prodInfo" style="width: 900px; height: 500px;" >
              <p style="color:red; font-size:18x; display:flex; justify-content: center;" >Kindy Top you area through the map to locate you location coordinate, Thank you!</p>
               
                <div class="chart" style=" margin-left:300px">
                  <div id="map"></div>
                </div>
                <table>
                  <tbody>
              <td><label>Address coordinate:</label></td>
              <td>Latitude: <input type="text" name="lat" id ="lat" required readonly class="ltng"></td>
              <td>Longitude:<input type="text" name="lng" id ="lng" required readonly class="ltng"></td>
            </tbody>
            </table>
                
            </div>
            
    <div class="w3-bar w3-black" id="status">
            
          <button type="button" class="w3-bar-item w3-button" onclick="openCity('Pending')">back</button>
          
          <button type="button" class="w3-bar-item w3-button" onclick="openCity('toRate')">next</button>
          
        </div>
 
          </div>
          
    
      <div id="toRate" class="w3-container city" style="display: none;">
    <table>
         <tbody>
              <td colspan="2">
                <label for="Shipping">Apply Free Shipping?</label>
                <select id="Shipping" name="p_shipping" required>
                  <option value="none">Yes? or No?</option>
                  <option value="0">Yes</option>
                  <option value="50">No</option>
                </select>
              </td>
            </tbody>
            <tbody>
            <td colspan="2">
                <label for="ProductCategory:">Product Category:</label>
                <select id="Shipping" name="p_category" required>
                  <option value="none">Select product category</option>
                  <option value="CropProductions">Crop Products</option>
                  <option value="Livestocks">Livestock</option>
                  <option value="Fertilizers">Fertilizer</option>
                  <option value="Pesticides">Pesticides</option>
                  <option value="Vegetables">Vegetables</option>
                  <option value="Fruits">Fruits</option>
                  <option value="Flowers">Flowers</option>
                  <option value="Meat">Meat</option>
                  <option value="Fish">Fish</option>
                  <option value="Bird">Bird</option>
                </select>
              </td>
              <td colspan="2">
                <!-- DROPDOWN FUNCTION FOR CATEGORY -->
                <label for="functionDropdown">Product Sub-category:</label>
                <select id="functionDropdown" name="subCategory" > 
                  <option value="none">Select product sub-category</option>

                  <option value="Cron">Cron</option>
                  <option value="Fruits">Rice</option>

                  <option value="Beef">Beef</option>
                  <option value="Pork">Pork</option>
                  <option value="Chicken">Chicken</option>
                  <option value="Goat">Goat</option>

                  <option value="NaturalFertilizer">Natural fertilizer</option>
                  <option value="OrganicFertilizer">Organic fertilizer</option>
                  <option value="Non-organicFertilizer">Non-organic fertilizer</option>

                  <option value="Insecticides">Insecticides</option>
                  <option value="Herbicides">Herbicides</option>
                  <option value="Fungicides">Fungicides</option>
                  
                  <option value="Papaya">Papaya</option>
                  <option value="Malungay">Malungay</option>
                  <option value="Ampalaya">Ampalaya</option>
                  <option value="Kamatis">Kamatis</option>

                  <option value="Apple">Apple</option>
                  <option value="Orange">Orange</option>
                  <option value="Mango">Mango</option>
                  <option value="Avocado">Avocado</option>

                  <option value="Rose">Rose</option>
                  <option value="Tulip">Tulip</option>
                  <option value="Jasmine">Jasmine</option>

                  <option value="Fresh Meat">Fresh Meat</option>
                  <option value="Frozen Meat">Frozen Meat</option>
                  <option value="Poultry Meat">Poultry Meat</option>
                  <option value="Lean Meat">Lean Meat</option>

                  <option value="Seafoods">Seafoods</option>
                  <option value="Fish">Fish</option>
                  <option value="Shells">Shells</option>

                  <option value="Pigeon">Pigeon</option>
                  <option value="Eagles">Eagles</option>
                  <option value="Parot">Parot</option>
                  
                    <?php foreach($sub2 as $key => $sub2): ?>

                        <option value="<?php
                             if($sub2['subCategory'] != 'Others'){
                              echo $sub2['subCategory2'];
                             }
                            ?>"><?php
                            if($sub2['subCategory'] == 'Others'){
                              echo $sub2['subCategory2'];
                             }
                                ?></option>
                  <?php endforeach ?>
                  
                  <option value="Others">Others</option>
                </select>
              </td>
              
            </tbody>
            <br>
    </table>
     <div id="output"></div>
              <!-- Sub-category for Others -->
              <div id="OthersContainer" style="display: none;">
                <div class="hide" style=" display:flex;">
                  <div class="qrImg">
                    <label for="functionDropdown">if others please specify:</label>
                      <input type="text" id="functionDropdown" name="subCategory2">
                  </div>
                </div>
              </div>
              <br>
           <table style="border-collapse: collapse; border: 2px solid black; margin-left:300px; width: 600px;">
    <tr>
        <th style="border-bottom: 2px solid black;">Price:</th>
        <td style="border-bottom: 2px solid black;">₱<span id="aprice"><b></b></span></td>
    </tr>
    <tr>
        <th style="border-bottom: 2px solid black;"><b><span id="scharge"></span>%</b> Service Charge: </th>
        <td style="border-bottom: 2px solid black;">₱<span id="sc"></span></td>
    </tr>
    <tr>
        <th>Total Profit per <span id="qu"></span>:</th>
        <td><b>₱<span id="mprice"> </span></b</td>
    </tr>
</table>
    <br>
   <p style="text-align:center"> <b>What to add discount?</b></a></p>
   
    <div id="dishide" style="text-align:center">
          <p>Example: <i>Buy 3, Discounted Price will reduce by ₱5 <br>
          Note: When the Client Buy 3 of this product the orig price will reduce by ₱5</i></p>
          <br>
    <div style="Display:flex">
     
        <p>Buy </p>  <input type="number" name="dnum" id ="buy" > <p>Discounted Price </p> <input type="number" name="dprice" id ="buy" >
        
    </div>
        
    </div>
              
              
           <br>

<p><b><i>Take note that the service charge may change depend upon the system administrator. Service charge will only de deducted once the product is ordered</i></b></p>
   <br>
      <div class="publishBtn">
                <button type="submit" name="p_save">Save and Publish</button>
              </div>
              <br><br>
             
</div>
   
        </div>
      
      </form>
    </div>

</div>

     
        
        


  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
 


<script>
  /* JR FOR PURCHASE */
function openCity(cityName, button) {
  var i;
  var x = document.getElementsByClassName("city");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  document.getElementById(cityName).style.display = "block";  

  // Remove the w3-active class from all buttons
  var buttons = document.getElementsByClassName("w3-button");
  for (i = 0; i < buttons.length; i++) {
    buttons[i].classList.remove("w3-active");
  }

  // Add the w3-active class to the clicked button
  button.classList.add("w3-active");
}

/* JS FOR SIDEBAR */
  /* Set the width of the sidebar to 250px and the left margin of the page content to 250px */
  var clickCount = 0;
  function openNav() {
  var i = event.buttons;
    if(clickCount == 0) {
    document.getElementById("mySidebar").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
    clickCount = 1;
    } else if(clickCount == 1) {
    document.getElementById("mySidebar").style.width = "0";
    document.getElementById("main").style.marginLeft = "0";
    clickCount = 0;
    }
  }


  function openLoanManagement(evt, Open) {
  // Declare all variables
  var i, tabcontent, tablinks;

  // Get all elements with class="tabcontent" and hide them
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  //document.getElementById(evt).style.display = "block"; 

  // Get all elements with class="tablinks" and remove the class "active"
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  // Add the w3-active class to the clicked button
  //button.classList.add("tablinks");

  // Show the current tab, and add an "active" class to the link that opened the tab
  document.getElementById(Open).style.display = "block";
  evt.currentTarget.className += " active";
}
</script>

     

      <div class="box2">
      
        <!-- the name value is use to store user input an save to databased
              inother word ito ung data handler -->

        


       




<script>
function updateDisplay() {
    // Get user input and update "aprice"
    var userInput = document.getElementById("product_price").value;
    var userInput2 = document.getElementById("product_qu").value;

    // Remove any non-numeric characters and round off to the nearest integer
    var formattedInput = Math.round(userInput.replace(/[^0-9.]/g, ''));

    // Set the formatted input to "aprice"
    document.getElementById("aprice").innerHTML = formattedInput;
     document.getElementById("qu").innerHTML = userInput2;

    // Make AJAX request to get scharge values
    var urll = "<?= base_url() ?>Products/ProductController/s/";
    var aj = new XMLHttpRequest();
    aj.open("GET", urll, true);
    aj.send();
    aj.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            var data = JSON.parse(this.responseText);
            console.log(data);

            var schargeContent = 0; // Accumulator for scharge values

            for (var i = 0; i < data.length; i++) {
                var x = Math.round(data[i].scharge);
                schargeContent += x;
            }

            var b = Math.round(formattedInput);
            var a = schargeContent;
            var c = Math.round(b * (a / 100));
            var d = b - c;
            document.getElementById("sc").innerHTML = c;
             document.getElementById("mprice").innerHTML = d;
            
        }
    };
}

// Call updateDisplay before making the AJAX request
updateDisplay();

var urll = "<?= base_url() ?>Products/ProductController/s/";
// Open and send the GET request
var aj = new XMLHttpRequest();
aj.open("GET", urll, true);
aj.send();
aj.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        var data = JSON.parse(this.responseText);
        console.log(data);

        var schargeContent = ""; // Accumulator for scharge values

        for (var a = 0; a < data.length; a++) {
            var x = data[a].scharge;
            schargeContent += x ;
            
            
            
        }
        var b = document.getElementById("aprice").innerHTML
         var a = document.getElementById("scharge").innerHTML = schargeContent;
         var c = b+a;
         document.getElementById("sc").innerHTML = "0";
    }
};

    var ajxx = new XMLHttpRequest();

       
var url = "<?= base_url() ?>PageController/mysellermark/";
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

  /* === FOR DROP DOWN LIST === */
  // Get the select element
  const functionDropdown = document.getElementById('functionDropdown');

  // Get the element to display the output
  const outputDiv = document.getElementById('output');

  // Add an event listener to the select element
  functionDropdown.addEventListener('change', function () {
    const selectedFunction = functionDropdown.value;
    outputDiv.innerHTML = '';

    if (selectedFunction === 'Fertilizer') {
        fertilizerContainer.style.display = 'block';
        livestockContainer.style.display = 'none';
        imageContainer.style.display = 'none';
        OthersContainer.style.display = 'none';
        // Function 1: Display an alert
        //alert('Coming Soon...');
    } else if (selectedFunction === 'Livestock') {
        // Function 3: Change background color
        livestockContainer.style.display = 'block';
        imageContainer.style.display = 'none';
        fertilizerContainer.style.display = 'none';
        OthersContainer.style.display = 'none';
    } else if (selectedFunction === 'CropProduction') {
        // Function 4: Display an image
        imageContainer.style.display = 'block';
        livestockContainer.style.display = 'none';
        fertilizerContainer.style.display = 'none';
        OthersContainer.style.display = 'none';
        //displayedImage.src = '<?php echo base_url('Impact/');?>assets/img/QR-Code.jpg'; 
        //outputDiv.innerHTML = 'Please Scan the QR-Code below or using Gcash number';
    } else if (selectedFunction === 'Others') {
        // Function 3: Change background color
        OthersContainer.style.display = 'block';
        livestockContainer.style.display = 'none';
        imageContainer.style.display = 'none';
        fertilizerContainer.style.display = 'none';
    } else {
        // Hide the image container if none of the above options are selected
        imageContainer.style.display = 'none';
    }
});

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
</script>