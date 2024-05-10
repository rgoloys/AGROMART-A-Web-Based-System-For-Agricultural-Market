
		<!-- MAIN -->
		<style>
      #scroll{
        
                height: 300px;
                overflow-x: hidden;
                overflow-y: auto; 
      }
      </style>
        <div class="data" style="display:block; width:100%" >
            <div class="content-data" style="display:flex; width:100%;" >
            <div class="head"style="display:flex; width:100%">
        
              
            <div class="sortMap content-data" style="border-radius: 0; ">
                <div class="titles" style="width:100%; display:flex; justify-content: space-between;">
                    <!--<button id="toggleButton">Filter data</button>-->
                    <h3>Crop Mapping</h3>
                    <p>As of(<span class="output"></span>)</p>
               
                </div>
                        
                <div id="myDiv" style="display: block;">
                    <ul >
                    <form style="display:block;" >
                        <li style="display:flex; ">
                            <p style=" margin:0px 5px 0px 0px; font-size:13px;">PLANTED:</p>
                            <label for="from">from</label>
                            <input type="date" name="PlantFrom" value="2020-10-31" class="form-control" id="min"  style="width:100px; height:20px; margin:0px 3px 0px 3px;"><br>
                            <label for="from">to</label>
                            <input type="date" name="PlantTo" value="2025-10-31" class="form-control" id="max"  style="width:100px; height:20px; margin:0px 0px 0px 3px;">

                        </li>
                        <li style="display:flex; ">
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

                        <li >
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
    </div>
     
          
</div>
            <div class="content-data">
                <div class="head" style="display:block">
                    <h3>Datamapping</h3>
                     <table >
                <tr>
                    <td colspan="6"  style="text-align:center;background-color: #00796B; width:100px; font-weight:700;">LABEL CATEGORY</td>
                </tr>
                <tr>
                    <td style="text-align:center;background-color:rgb(98, 247, 1); width:70px; font-weight:700;">Crops Product</td>
                    <td style="text-align:center;background-color:rgb(0, 110, 113); width:70px; font-weight:700;">Fertilizer</td>
                    <td style="text-align:center;background-color:rgb(220, 38, 29); width:70px; font-weight:700;">Livestock</td>
                    <td style="text-align:center;background-color:#ED9121; width:70px; font-weight:700;">Fruits</td>
                    
                    <td style="text-align:center;background-color:#00AAAA; width:70px; font-weight:700;">Bird</td>
                  </tr> <tr> <td style="text-align:center;background-color:#457d00; width:70px; font-weight:700;">Vegetables</td>
                    <td style="text-align:center;background-color:#bb2124; width:70px; font-weight:700;">Pesticides</td>
                    <td style="text-align:center;background-color:#D5C34B; width:70px; font-weight:700;">Flowers</td>
                      
                    <td style="text-align:center;background-color:#ff7f7f; width:70px; font-weight:700;">Meat</td>
                    <td style="text-align:center;background-color:#00ffb5; width:70px; font-weight:700;">Fish</td>
                   </tr>
                      <tr> </tr>
              
            </table>
           
                    <hr>
                    <div class="menu">
                        <i class='bx bx-dots-horizontal-rounded icon'></i>
                        <ul class="menu-link">
                            <li><a href="#">Edit</a></li>
                            <li><a href="#">Save</a></li>
                            <li><a href="#">Remove</a></li>
                        </ul>
                    </div>
                </div>
                <div class="chart">
                    <div id="map"></div>
                </div>
            </div>

            
            </div>  
        
               

                </div>
                <script>
                      var ajxax = new XMLHttpRequest();

       

    


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
                
    