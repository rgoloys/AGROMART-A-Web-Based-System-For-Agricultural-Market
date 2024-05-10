<h2>List of verified Sellers</h2>

<div class="con">
  <?php foreach ($data as $data) {  ?>
    <div class="box">
        <div class="image">
          <img src="<?php echo $data['user_avtar']; ?>">
          </div>
          <div class="name_job"><?php echo $data['fname']; ?> <?php echo $data['lname']; ?></div>
          <p> <?php echo $data['address']; ?> </p>
          <div class="btns">
            <a href="<?php echo base_url();?>adminfloat/<?php echo $data['user_id']; ?>" style="text-decoration: none;">
            <button onclick="call()" ><b> DECLINE </b></button>
            <a href="<?php echo base_url();?>sellerfloat/<?php echo $data['user_id']; ?>" style="text-decoration: none;">
            <button onclick="call()" ><b>VERIFY </b></button>
          </a>
            
      </div>
    </div>
  <?php }  ?>
</div>