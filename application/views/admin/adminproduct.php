
<style>

<style>
	

  .info-data .card .image{
  margin: 10px 0;
  height: 200px;
  background:  #00796b;
  padding: 3px;
  border-radius: 20px;
}
.card .image img{
  height: 100%;
  width: 100%;
  border-radius: 20px;
  object-fit: cover;
  border: 2px solid #fff;
}
.head{
	margin: 10px 0 3px 0;
  color: black;
  font-size: 18px;
  font-weight: 600;
	
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


<div class="info-data" style="display: flex; flex-wrap: wrap; justify-content: start; margin-top: -10px;" >
<?php foreach($getInfo as $item): ?>
    <div class="card" style="width: 240px;">
        <div class="image">
          <img src="<?= base_url('/upload/images/'. $item->image1) ?>" style="width: 200px; height: 180px;" >
        </div>
        <div class="name_job">
          <p class ="head"><?= $item->p_title ?></p>
        </div>
        <p> <?php $string = $item->p_description ?>
            <?php $string = word_limiter($string, 3); ?>
            <?php echo $string; ?><p>
                    

        <p> <b>₱<?= $item->p_price ?> </b></p>
        <div class="btns" style="display:flex; justify-content:center;">
          <a href="<?= base_url('products/delete/'. $item->id);?>" style="text-decoration: none;">
            <button class="e"><b> DELETE </b></button></a>
          <a href="<?= base_url('products/edit/'. $item->id);?>" style="text-decoration: none;">
            <button><b>MORE INFO </b></button></a>  
        </div>
    </div>
    <?php endforeach; ?>
</div>
<?php if($this->session->flashdata('status')): ?>
      <div class="form-btn" style="justify-content: center; height: 35px; display: flex; color: crimson; padding: 1%; font-weight: 500;">
          <?= $this->session->flashdata('status'); ?>
      </div>
    <?php endif; ?>

    <!--a href="<?php echo base_url();?>products/add" class="float">
    <i class='bx bx-plus' id="plus"></i></i>
    </a -->

      

     