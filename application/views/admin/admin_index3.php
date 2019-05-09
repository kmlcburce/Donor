

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Messages</h1>
            
          </div>

       <!-- Top End of Dashboard -->
       <div class="w3-container">
  <button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-black">Compose Message</button>

  <div id="id01" class="w3-modal">
    <div class="w3-modal-content w3-animate-top w3-card-4">
      <header class="w3-container w3-teal"> 
        <span onclick="document.getElementById('id01').style.display='none'" 
        class="w3-button w3-display-topright">&times;</span>
        <h2>Add Item</h2>
      </header>
      <div class="w3-container">
        <div class="w3-container">
        <form class="add_prod" method="post" action="<?php echo base_url()?>main/add_resource_validation">
                      
                      <?php
                        if ($this->uri->segment(2)=="added_prod") {
                            echo '<p class="text-success">Product Added</p>';
                          }  
                        ?>
                      <div class="input-group-icon mt-10">
                <div class="icon">
                  
                </div>
                <input type="text" name="address" placeholder="Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Address'"
                 required class="form-control">
                 <span class="text-danger"><?php echo form_error("address");?></span>
                </div>
              <div class="form-select" id="default-select">
                  <select name="organ_type">
                    <option value="#">Select Organ-type</option>
                    <option value="kidney">Kidney</option>
                    <option value="lungs">Lungs</option>
                    <option value="pancreas">Pancreas</option>
                    <option value="liver">Liver</option>
                    <option value="bone_marrow">Bone Marrow</option>
                  </select>
                </div>
                <div class="form-select" id="default-select">
                  <select name="blood_type">
                    <option value="blood-type" selected="">Select Blood-type</option>
                    <option value="A+">A+</option>
                    <option value="A-">A-</option>
                    <option value="AB+">AB+</option>
                    <option value="AB-">AB-</option>
                    <option value="B+">B+</option>
                    <option value="B-">B-</option>
                    <option value="O+">O+</option>
                    <option value="O-">O-</option>
                  </select>
                </div>
                <div class="form-select" id="default-select">
                    <select name="body_type">
                      <option value="body-type" selected="">Select Body-type</option>
                      <option value="Endomorph">Endomorph</option>
                      <option value="Mesomorph">Mesomorph</option>
                      <option value="Ectomorph">Ectomorph</option>
                    </select>
                </div>
                      <span class="text-danger"><?php echo form_error("body_type");?></span>
                      <input type="submit" name="ap_sub" value="Submit">
                     </form>
      </div>
      </div>
      <footer class="w3-container w3-teal">
        
      </footer>
    </div>
  </div>
</div>
         <div class="conta">
            <form class="table">
              <table class="table table-striped table-sm" frame="box">
                  <thead>
                      <tr>
                          <th>To</th>
                          <th>From</th>
                          <th>Time</th>
                          <th>Subject</th>
                          <th>Message</th>
                      </tr>
                  </thead>
                  <tbody>
                      <?php 
                      if($get_message->num_rows() >0) 
                      {
                        foreach ($get_message->result() as $row) {
                          ?>
                          <tr>
                            <td><?php echo $row->m_to; ?></td>
                            <td><?php echo $row->m_from; ?></td>
                            <td><?php echo $row->m_time; ?></td>
                            <td><?php echo $row->m_subject; ?></td>
                            <td><?php echo $row->m_message; ?></td>
                            
                          </tr>
                          <?php 
                        }
                      }
                      else{
                        ?>
                        <tr>
                          <td colspan="5">No Data Found</td>
                        </tr>
                        <?php
                      }
                      ?>
                  </tbody>
              </table>
            </form>
            
            


    </div>
  </div>
</div>

             