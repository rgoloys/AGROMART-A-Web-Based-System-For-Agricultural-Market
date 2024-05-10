<!-- Loop through image URLs and display images -->
<?php foreach($product as $item): ?>


  <?= $item->p_title ?>
  <?= $item->p_description ?>
  <?= $item->p_price ?>
  <?= $item->p_stocks ?>
  <?= $item->p_brand ?>
  <?= $item->p_size ?>
  <?= $item->p_color ?>
  <?= $item->p_address ?>
  <?= $item->date_planted ?>
  <?= $item->date_harvested ?>
  <?= $item->p_shipping ?>
  <?= $item->p_category ?>
  <?= $item->subCategory ?>
  <?= $item->video_file ?>

  <video width="320" height="240" poster="/images/w3schools_green.jpg" controls>
   <source src="<?php echo base_url('upload/videos/'. $item->video_file) ?>" type="video/mp4">
   <source src="<?php echo base_url('upload/videos/'. $item->video_file) ?>" type="video/ogg">
   Your browser does not support the video tag.
</video>


  <img src="<?php echo base_url('/upload/images/'. $item->image1); ?>" alt="" style="width:200px; height: 200px;">
  <img src="<?php echo base_url('/upload/images/'. $item->image2); ?>" alt="" style="width:200px; height: 200px;">
  <img src="<?php echo base_url('/upload/images/'. $item->image3); ?>" alt="" style="width:200px; height: 200px;">
  <img src="<?php echo base_url('/upload/images/'. $item->image4); ?>" alt="" style="width:200px; height: 200px;">
  <img src="<?php echo base_url('/upload/images/'. $item->image5); ?>" alt="" style="width:200px; height: 200px;">


<?php endforeach; ?>
