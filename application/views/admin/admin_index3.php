
          
          <!--Messages tab-->

    
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Messages</h1>
            
          </div>

       <!-- Top End of Dashboard -->
       


         <div class="container">
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


  <button onclick="document.getElementById('id01').style.display='block'" class="btn btn-info btn-l">Compose Message</button>

  <div id="id01" class="w3-modal">
    <div class="w3-modal-content w3-animate-top w3-card-4">
      <header class="w3-container w3-teal"> 
        <span onclick="document.getElementById('id01').style.display='none'" 
        class="w3-button w3-display-topright">&times;
      </span>
        
      </header>
        
        <form class="add_prod" method="post" action="<?php echo base_url()?>main/add_message_validation">
                     
                    <div class="modal-dialog">

                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 class="modal-title">Compose Message</h4>
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          
                        </div>
                        <div class="modal-body"> 
                      <?php
                        if ($this->uri->segment(2)=="added_prod") {
                            echo '<p class="text-success">Message Sent</p>';
                          }  
                        ?>
                      <div class="input-group-icon mt-10">
                        <div class="icon">
                          
                        </div>
                        <input type="text" name="m_to" placeholder="To" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Message to'"required class="form-control">
                        <input type="text" name="m_from" placeholder="From" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Message from'"required class="form-control">
                        <input type="text" name="m_subject" placeholder="To" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Subject'"required class="form-control">
                        <textarea rows="5" cols="55">
                          
                        </textarea>
                         <span class="text-danger"><?php echo form_error("address");?></span>

                        </div>
                      
                      <input type="submit" name="ap_sub" value="Send">
                     </form>
      
      </div>
      <footer class="w3-container w3-teal">
        
      </footer>
    </div> a
  </div>
  </div>
</div>



             