
		<!-- MAIN -->
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
        <h3>Datamapping</h3><hr>
      <!-- <div class="menu">
                <i class='bx bx-dots-horizontal-rounded icon'></i>
                <ul class="menu-link">
                    <li><a href="#">Edit</a></li>
                    <li><a href="#">Save</a></li>
                    <li><a href="#">Remove</a></li>
                </ul>
            </div>-->
          </div>
          <div class="chart">
              <div id="map"></div>
          </div>
        </div>
        <div class="content-data"  id="scroll">
          <div class="head">
            <br><h3>List Of Data</h3><hr>
        
            <label class="container">By Crops
        
              <a href="";>
                <input type="radio" checked="checked" name="radio">
              </a>
          
              <span class="checkmark"></span>

            </label>

            <label class="container">By Date

              <a href="">
                <input type="radio" name="radio">
              </a>

              <span class="checkmark"></span>

            </label>

          </div>  

          <table>
            <tr>
              <th>Legend</th>
              <th>Crops</th>
              <th>plant date</th>
              <th>harvest date</th>
              <th></th>
            </tr>
            <tr>
              <?php foreach ($data as $data) {  ?>
              <td style="background:<?php echo $data['hex']; ?>"></td>
              <td><?php echo $data['Crops']; ?></td>
              <td><?php echo $data['plant_date']; ?></td>
              <td><?php echo $data['harvest_date']; ?></td>
              <td><a href="<?php echo base_url();?>sellerdelete/<?php echo $data['id']; ?>"><button style="width:100%; height:100%"> Remove <button> </a></td>
            </tr>
            <?php }  ?>
          </table>
        
        </div>

        <!--eto ung buttons-->
          <a href="<?php echo base_url();?>sellerdatalist" class="float">
            <i class='bx bx-plus' id="plus"></i>
          </a>

          
