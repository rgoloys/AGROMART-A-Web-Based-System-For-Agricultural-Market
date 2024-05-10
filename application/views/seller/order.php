<div class="content-data"  id="scroll">
            
            <table>
  <tr>
  <th>product </th>
  <th>product name</th>
    <th>client name</th>
    <th>address</th>
    <th>Price</th>
    <th>quantity</th>
    <th>total price</th>
    <th></th>
    
  </tr>
  <tr>
  <?php foreach ($data as $data) {  ?>
    <td><img style="width:200px;" src="<?php echo base_url();?>/images/<?php echo $data['p_image']; ?>"></td>
    <td><?php echo $data['p_title']; ?></td>
    <td><?php echo $data['fname']; ?> <?php echo $data['lname']; ?> </td>
    <td><?php echo $data['address']; ?></td>
    <td><?php echo $data['p_price']; ?></td>
    <td><?php echo $data['Quantity']; ?></td>
    <td><?php echo $data['Total_Price']; ?></td>
  
  
    <td><a href="<?php echo base_url();?>"><button style="width:100%; height:100%"> Remove <button> </a></td>
  </tr>
  <?php }  ?>
</table>
               

                </div>

                <a href="<?php echo base_url();?>sellerdatalist" class="float">
    <i class='bx bx-plus' id="plus"></i></i>
    </a>