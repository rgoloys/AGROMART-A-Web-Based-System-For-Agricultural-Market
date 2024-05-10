
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
.btns #del:hover{
  background-color: #FFFF;
  color: RED;
  border: 1px solid red;

}
  </style>
<h1>PRODUCTssssss</h1>

<div class="info-data"  style="display: flex; flex-wrap: wrap; justify-content: start;">
<?php foreach($product as $item): ?>
    <div class="card" style="width: 240px;">
        <div class="image">
          <img src="<?php echo base_url('/upload/images/'. $item->image1); ?>" alt="" style="width:200px; height: 200px;">
          
        </div>
        <div class="name_job" style="height: 75px;">
          <p class ="head">
        
            <?php $string = $item->p_title ?>
            <?php $string = word_limiter($string, 3); ?>
            <?php echo $string; ?>

          </p>
          <p> <?php $string = $item->p_description ?>
            <?php $string = word_limiter($string, 3); ?>
            <?php echo $string; ?>
          </p>

          
        </div> 
         <p style="text-decoration-line: line-through;">
    <?php if (!is_null($item->old_price)): ?>
        <b>₱<?= $item->old_price ?></b>
    <?php endif; ?>
</p> <br>
        <p><b>₱<?= $item->p_price ?> </b></p>
        


        <div class="btns" style="display:flex; justify-content:end;">
          <a href="<?= base_url('products/edit/'. $item->id);?>" style="text-decoration: none; ">
            <button><b>EDIT </b></button></a>  
            <!--<a  style="text-decoration: none;">
            <button id="del" onclick="confirmDelete()" style="background-color:red; color: white; border: 1px solid red;"><b> DELETE </b></button></a>-->
        </div>
    </div>
    <?php endforeach; ?>
</div>
<?php if($this->session->flashdata('status')): ?>
      <div class="form-btn" style="justify-content: center; height: 35px; display: flex; color: crimson; padding: 1%; font-weight: 500;">
          <?= $this->session->flashdata('status'); ?>
      </div>
    <?php endif; ?>

    <a href="<?php echo base_url();?>products/add" class="float">
    <i class='bx bx-plus' id="plus"></i></i>
    </a>

  
    <script>
function confirmDelete() {
    // Use the JavaScript confirm() method to show a pop-up dialog
    const result = confirm("Are you sure you want to delete this product?");

    // Check the user's choice
    if (result === true) {
        // If the user clicks "OK," you can proceed with the deletion
        // You can add your AJAX request or form submission here
        
       
        alert("Product deleted!"); // Display a confirmation message
        window.location.href = "<?= base_url('products/delete/'. $item->id) ?>"; 
    } else {
        // If the user clicks "Cancel" or closes the dialog, do nothing
        alert("Deletion canceled."); // Display a cancellation message (optional)
    }
}
</script>





     