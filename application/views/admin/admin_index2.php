<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Users</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
            </div>
          </div>
<!--Generate user tables-->
            <section class="section">
            <form class="table">
              <table class="table table-striped table-sm" frame="box">
                  <thead>
                      <tr>
                          <th>First Name</th>
                          <th>Last Name</th>
                          <th>Access Level</th>
                          <th>Action</th>
                          
                      </tr>
                  </thead>
                  <tbody>
                      <?php 
                      if($get_user->num_rows() >0) 
                      {
                        foreach ($get_user->result() as $row) {
                          ?>
                          <tr>
                            
                            <td><?php echo $row->u_fname; ?></td>
                            <td><?php echo $row->u_lname; ?></td>
                            <td><?php echo $row->u_type; ?></td>

                            <td><a href="#" class="delete_item" id="<?php echo  $row->u_id; ?>">Delete</a></td>
                            <td><a href="<?php echo base_url(); ?>main/update_item/<?php echo  $row->u_id; ?>">Edit</a></td>
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
            </section>