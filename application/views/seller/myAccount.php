 <!--==== MyAccount ===== -->
 
 <div id="MyAccount" class="tabcontent" style="display:block;height: 250px;  margin:10px 0; ">
    <form action="<?= base_url('sellerAccounts/'. $info->unique_id ); ?>" method="post" enctype="multipart/form-data">
      <!-- ======= MyProfile ======= -->
      <section id="MyProfile" class="pricing sections-bg" style="height: 430px;overflow: scroll;">
        <h4>My Profile</h4>
        <p>Manage and protect your account</p>
        <!-- use code to display set_flashdata message in controllers-->
        <?php if($this->session->flashdata('status')): ?>
          <div class="form-btn" style="justify-content: center; height: 35px; display: flex; color: crimson; padding: 1%; font-weight: 500;">
          <?= $this->session->flashdata('status'); ?>
          </div>
        <?php endif; ?><hr>
        <div class="infoUser">
          <table>
            <tr>
              <td  rowspan="6">
                <div class="custom-file">
                  <img src="<?= base_url('upload/selfie/'. $info->user_avtar ); ?>" width="150px" height="150px" style="padding:2px;">  <br>File extension: .JPEG, .PNG, .JPG <BR>
                  <br><label>Upload New Photo:</label>
                  <input type="hidden" name="old_user_avtar" value="<?= $info->user_avtar; ?>">
                  <input type="file" name="user_avtar" class="form-control" id="name" placeholder="Upload New Photo">
                  <button type="submit" name="p_update"  style="color: #f85a40; text-decoration:underline; border:none; background: none;">Update</button>
                </div>
              </td>
            </tr>
            <tr>
              <td class="label">Email:</td>
              <td><input type="text" name="email" value="<?= $info->email; ?>" class="form-control"required></td>
              <td><button type="submit" name="p_update"  style="color: #f85a40; text-decoration:underline; border:none; background: none;">Update</button></td>
            </tr>
            <tr>
              <td class="label">Password:</td>
              <td><input type="password" name="password" value="<?= $info->password; ?>" class="form-control"required></td>
              <td><button type="submit" name="p_update"  style="color: #f85a40; text-decoration:underline; border:none; background: none;">Update</button></td>
            </tr>
            <tr>
              <td class="label">First Name:</td>
              <td><input type="text" name="fname" value="<?= $info->fname; ?>" class="form-control"required></td>
              <td><button type="submit" name="p_update"  style="color: #f85a40; text-decoration:underline; border:none; background: none;">Update</button></td>
            </tr>
            <tr>
              <td class="label">Last Name:</td>
              <td><input type="text" name="lname" value="<?= $info->lname; ?>" class="form-control"required></td>
              <td><button type="submit" name="p_update"  style="color: #f85a40; text-decoration:underline; border:none; background: none;">Update</button></td>
            </tr>

            <tr>
              <td class="label">Number:</td>
              <td><input type="text" name="number" value="<?= $info->number; ?>" class="form-control"required></td>
              <td><button type="submit" name="p_update"  style="color: #f85a40; text-decoration:underline; border:none; background: none;">Update</button></td>
            </tr>
          </table>
        </div><hr>
      </section><br>
      </form>
    </div><!-- ==== CLOSE HOME TABLINKS ===== -->


              <!--==== MyAddress ===== -->
    <div id="MyAddress" class="tabcontent" style="display:block; margin-top:100px;">
    <form action="<?= base_url('sellerAddress/'.$info->unique_id ); ?>" method="post" enctype="multipart/form-data">
      <section id="MyProfile" class="pricing sections-bg" style="height: 430px;overflow: scroll;">
        <h4 style="display:flex; justify-content:start;">My Pick Up Address</h4><hr><br>
         
          <?php if($this->session->flashdata('Address')): ?>
            <div class="form-btn" style="justify-content: center; height: 35px; display: flex; color: crimson; padding: 1%; font-weight: 500;">
            <?= $this->session->flashdata('Address'); ?>
            </div>
          <?php endif; ?>

        <ul>
          <li><span style="font-weight: 500;"></span><b><?= $info->fname; ?> <?= $info->lname; ?></b></span> | <?= $info->number; ?></li>
          <li><?= $info->Street ; ?></li>
          <li><?= $info->Provice; ?>, <?= $info->Municipality; ?>, <?= $info->Barangay; ?></li>
          <li><?= $info->OtherAddress; ?></li>
        </ul>

        <table style="margin-top:20px;">
          <tr>
            <td colspan="4">Edit Pick Up address<span style="display:flex; justify-content: end;color: #f85a40; text-decoration:underline;"><button type="submit" style="border:none; background-color:transparent
            ;">Update Delievery Address</button></span></td>
          </tr>
          <tr>
            <td>Street:<input type="text" name="Street" value="<?= $info->Street; ?>" class="form-control"required></td>
          </tr>
          <tr>
            <td>Provice: <input type="text" name="Provice" value="<?= $info->Provice; ?>" class="form-control"required></td> 
            <td>Municipality: <input type="text" name="Municipality" value="<?= $info->Municipality; ?>" class="form-control"required></td>
            <td>Barangay: <input type="text" name="Barangay" value="<?= $info->Barangay; ?>" class="form-control"required></td>
          </tr>
          <tr>
          <td>OtherAddress: <input type="text" name="OtherAddress" value="<?= $info->OtherAddress; ?>" class="form-control"required></td>
          </tr>
        </table>
      </section><br>
      </form>
    </div><!-- ==== CLOSE HOME TABLINKS ===== -->








                  <!--==== MyAddress ===== --
    <div id="MyAddress" class="tabcontent" style="display:block; margin-top:150px;">
    <form action="<?= base_url('sellerAddress/'.$info->unique_id ); ?>" method="post" enctype="multipart/form-data">
      <section id="MyProfile" class="pricing sections-bg" style="height: 500px;overflow: scroll;">
        <h4 style="display:flex; justify-content:start;">My Shop Info</h4><hr><br>
         
          <?php if($this->session->flashdata('Address')): ?>
            <div class="form-btn" style="justify-content: center; height: 35px; display: flex; color: crimson; padding: 1%; font-weight: 500;">
            <?= $this->session->flashdata('Address'); ?>
            </div>
          <?php endif; ?>


        <table style="margin-top:20px;">
          <tr>
            <td colspan="4">Edit Shop<span style="display:flex; justify-content: end;color: #f85a40; text-decoration:underline;"><button type="submit" style="border:none; background-color:transparent
            ;">Update Shop</button></span></td>
          </tr>
          <tr>
            <td>Shop Name:<input type="text" name="Street" value="<?= $info->sname; ?>" class="form-control"required></td>
          </tr>
          <tr>
            <td>Shop Description: <input type="text" name="Provice" value="<?= $info->sdes; ?>" class="form-control"required></td> 
          </tr>
          <tr>
            <td>
                <div class="custom-file">
                  <img src="<?php echo base_url('upload/shop/'. $info->sphoto ); ?>" width="200px" height="200px" style="padding:2px;">  <br>File extension: .JPEG, .PNG, .JPG <BR>
                  <br><label>Upload New Photo:</label>
                  <input type="hidden" name="old_sphoto" value="<?= $info->sphoto; ?>">
                  <input type="file" name="sphoto" class="form-control" id="name" placeholder="Upload New Photo">
                  <button type="submit" name="p_update"  style="color: #f85a40; text-decoration:underline; border:none; background: none;">Update</button>
                </div>
            </td>
          </tr>
        </table>
      </section><br>
      </form>
    </div><!-- ==== CLOSE HOME TABLINKS ===== -->










    


