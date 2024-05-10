
<style>
    *{
        margin:0;
        padding:0;
    }
</style>
<h3 style="width:100%; display:flex; justify-content:center;">Validation of applicant seller</h3>

<div style="width:100%; height;auto; display:flex; justify-content:space-evenly;">

      <?php foreach ($data as $item) {  ?>
      <table>
<div class="con">

    <div class="box">
        <div class="image">
          <img src="<?php echo $item['user_avtar']; ?>">
        </div>

        <div class="name_job"><?php echo $item['fname']; ?> <?php echo $item['lname']; ?></div>
          <p> <?php echo $item['address']; ?> </p>
          <div class="btns">
            <a href="<?php echo base_url();?>delete/<?php echo $item['user_id']; ?>" style="text-decoration: none;">
            <button onclick="call()" ><b> DECLINE </b></button>
            <a href="<?php echo base_url();?>adminfloat/<?php echo $item['user_id']; ?>" style="text-decoration: none;">
            <button onclick="call()" ><b>VERIFY </b></button>
            </a>
          </div>
        </div>
    </div>

</div></table>
  <?php }  ?>
</div>



       