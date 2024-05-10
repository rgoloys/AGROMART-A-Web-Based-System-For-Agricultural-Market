<h2>Pending Orders</h2>
<div class="con">
  <?php foreach ($data as $item) {  ?>
    <div class="box">
      <div class="image">
        <img src="<?php echo $item['user_avtar']; ?>">
      </div>
      <div class="name_job"><?php echo $item['fname']; ?> <?php echo $item['lname']; ?></div>
        <p> <?php echo $item['address']; ?> </p>
        <!--<p>Total Order: (<?php echo $item['total_count']; ?>)</p> 
        <p>STATUS: <?php echo $item['Status']; ?></p> -->
        <div class="btns">
          <a href="<?php echo base_url();?>clientfloat/<?php echo $item['unique_id']; ?>"><button>Remove</button> <a>
          <a href="<?php echo base_url();?>clientfloat/<?php echo $item['unique_id']; ?>"> <button>Details</button> </a>
        </div>
      </div>
  <?php }  ?>
</div>
  