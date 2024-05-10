<style>
      #scroll{
        
                height: 300px;
                overflow-x: hidden;
                overflow-y: auto; 
      }  .myForm {
font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
font-size: 0.8em;
width: 100%;
padding: 1em;
border: 1px solid #ccc;

}

.myForm * {
box-sizing: border-box;
}

.myForm fieldset {
border: none;
margin:10px;
padding: 0;
}

.myForm legend,
.myForm label {
padding: 0;
font-weight: bold;

}
.float{
	position:fixed;
	width:60px;
	height:60px;
	bottom:40px;
	right:40px;
	background-color:#00796b;
	color:#FFF;
	border-radius:50px;
	text-align:center;
	box-shadow: 2px 2px 3px #999;
}

#plus {
    font-size:24px;
    margin-top:20px;
    
}
</style>

<div class="data">
    <div class="content-data">
        <div class="head">
            <h3>Datamapping</h3>
                
        </div>
        <div class="chart">
            <div id="map"></div>
        </div>
    </div>
   
    <div class="content-data" >
        <div class="head">
        
            <br>
            <h3>List Of Data</h3>
            <hr>
            
        </div>  
        <fieldset id="fback">

            <legend> <b>Input details </b></legend>
        
            <form class="myForm" method="POST" action="<?= base_url() ?>sellerdata" >

               <label>Name of crops:
                    <div>
                        <select name="crops" id="mySelect" onchange="myFunction()">
                     
                            <?php foreach ($data as $data) {  ?>

                            <option value="<?php echo $data['id']; ?>"><?php echo $data['Crops']; ?> </option>

                            <?php    }  ?>
         
                        </select>
  
                    </div>
                </label>

                <label>Type of crops: <input type="text" name="types" id="types"></label><br>

                <label for="pdate">Planted Date: </label>
                <input type="date" name="plant_date" id="pdate" required><br>

                <label for="edate">Estimated date of harvest: </label>
                <input type="date" name="harvest_date" id="edate" required><br>
                
                <label for="lat">Latitude: </label>
                <input type="text" name="lat" id ="lat" required><br>

                <label for="lng">Longitude: </label>
                <input type="text" name="lng" id ="lng"required><br>
                
                <input type="submit" name="save" value="Save Data"/>
            </form>
        </fieldset>         
    </div>
         


                
    