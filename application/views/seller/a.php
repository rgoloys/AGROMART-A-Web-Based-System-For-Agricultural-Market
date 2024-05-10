

    
    <div class="content-data"  id="scroll">
          
          <table style="width:300px">
            <tr>
              <th>Legend</th>
              <th>Crops</th>
            </tr>
            <?php foreach ($data as $data) {  ?>
            <tr>
              <td style="background:<?php echo $data['hex']; ?>"></td>
              <td><?php echo $data['Crops']; ?></td>
            </tr>
            <?php }  ?>
          </table>
          
    </div>
    