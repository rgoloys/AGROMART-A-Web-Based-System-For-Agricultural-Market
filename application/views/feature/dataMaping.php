

<style>
  .chartJR{
        width: 700px;
        height: 400px;
    }
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
.SaveLocation{
    width: 150px;
    height: 30px;
    background-color: #008374;
    font-weight: 900;
    color: black;
  }
  .SaveLocation:hover{
    background-color: #f85a40;
    color:#FFFF;
  }
  label{
    font-weight: 900;
    font-size: 15px;
  }
</style>


<div class="data">
  <div class="content-data">
    <div class="chart">
        <div id="map"></div>
    </div>
  </div>
   
  <div class="content-data" >
    <div class="head">     
      <br>
      <h3>Add Location</h3>
      <hr>
    </div>
    <fieldset id="fback">

      <legend><b>Location details</b></legend>
          <!-- ibahin ung redirect nya -->
      <form class="myForm" method="post" action="<?= base_url() ?>sellerdataUser" >

        


        <table>
          <tr>
            <td>Name of crops:</td>
            <td>
              <div>
                <select name="crops" id="mySelect" onchange="myFunction()">           
                  <?php foreach ($data as $data) {  ?>
                    <option value="<?php echo $data['id']; ?>"><?php echo $data['Crops']; ?> </option>
                  <?php    }  ?>
                </select>
              </div>
            </td>
          </tr>
          <tr>
            <td>Type of crops: </td>
            <td><input type="text" name="types" id="types"></td>
          </tr>
          <tr>
            <td>Planted Date:</td>
            <td> <input type="date" name="plant_date" id="pdate" required></td>
          </tr>
          <tr>
            <td>Estimated date of harvest:</td>
            <td><input type="date" name="harvest_date" id="edate" required></td>
          </tr>
          <tr>
            <td>Latitude:</td>
            <td> <input type="text" name="lat" id ="lat" required></td>
          </tr>
          <tr>
            <td>Longitude:</td>
            <td><input type="text" name="lng" id ="lng"required></td>
          </tr>
          <tr>
            <td colspan="2"><input type="submit" name="save" value="Save Data" class="SaveLocation"/></td>
          </tr>
        </table>
          
      </form>
  </fieldset>    
</div>

<style>
  td{
    font-size: 15px;
  }
</style>


<div class="content-data"  id="scroll">
      <div class="head">
      <table>
        <tr>
          <td><h3>List Of Data</h3></td>
          <td><label class="container">By Crops
          <a href="";><input type="radio" checked="checked" name="radio"></a><span class="checkmark"></span>
        </label></td>
          <td><label class="container">By Date
          <a href=""><input type="radio" name="radio"></a><span class="checkmark"></span>
        </label></td>
        </tr>
        <tr>
          <th>CROPS</th>
          <th>PLANT DATE</th>
          <th>HARVEST DATE</th>
          <th>Delete</th>
        </tr>
        <?php foreach ($croplist as $data) {  ?>
        <tr>
          <td style="background-color: <?php echo $data['hex']; ?>; font-weight:900; color:#FFF;"><?php echo $data['Crops']; ?></td>
          <td><?php echo $data['plant_date']; ?></td>
          <td><?php echo $data['harvest_date']; ?></td>
          <td><a href="<?php echo base_url();?>userdelete/<?php echo $data['id']; ?>"><button style="width:100%; height:100%"> Remove <button> </a></td>
        </tr>
          <?php }  ?>
      </table>
      </div>  
    </div>


