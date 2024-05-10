<section class="sample-page"  class="pricing sections-bg">
  <div class="container" data-aos="fade-up">
    <div class="section-header">
      <h1>My Products</h1>
    </div>

    <div class="tbl" style="margin: 0; padding: 0;">
      <table>
        <tr>
          <th>Id</th>
          <th>Title</th>
          <th>Image</th>
          <th>Description</th>
          <th>Address</th>
          <th>Categpry</th>
          <th>Stocks</th>
          <th>Edit</th>
          <th>Delete</th>
          <th>Chat Box</th>
        </tr>

          <!-- using $item to fetch data from databased -->
          <?php foreach($product as $item): ?>
        <tr>
          <td><?= $item->id ?></td>
          <td><?= $item->p_title ?></td>
          <td>
            <img src="<?= base_url('images/'. $item->p_image) ?>" alt="Product Image" width="75px" height="75px">
          </td>
          <td><?= $item->p_description ?></td>
          <td><?= $item->p_address ?></td>
          <td><?= $item->p_category ?></td>
          <td><?= $item->p_stocks ?></td>
          <td><a href="<?= base_url('products/edit/'. $item->id);?>" style="background: seagreen; padding: 12px;" class="btn">edit</a></td>
          <td><a href="<?= base_url('products/delete/'. $item->id);?>" style="background: crimson; font-size: auto; padding: 12px;" class="btn">del</a></td>
          <td><a href="<?php echo base_url('message');?>">message</a></td>
          </tr>
          <?php endforeach; ?>
      </table>
            <!-- use code to display set_flashdata message in controllers-->
    <?php if($this->session->flashdata('status')): ?>
      <div class="form-btn" style="justify-content: center; height: 35px; display: flex; color: crimson; padding: 1%; font-weight: 500;">
          <?= $this->session->flashdata('status'); ?>
      </div>
    <?php endif; ?>
    </div>
  </div>
</section>


<style type="text/css">
  body{
      background-color: #F2F4F4;
      color: #251c35;
      font-weight: bold;
    }
    table{
    	border: 1px solid black;
    	border-collapse: collapse;
  		width: 100%;
    }
    td, th {
  		border: 1px solid #dddddd;
  		padding: 15px;
	}
    td{
      padding: 5px;
      width: 20px;
      margin: 12px;
      text-align: center;
      font-size: 14px;
    }
    th{
    	background-color: #008374;
    	color: #ffff;
    }
    tr:nth-child(even)  {
      background-color: #FEF9E7;
    }
</style>