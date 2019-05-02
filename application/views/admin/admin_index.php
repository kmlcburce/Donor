
<!DOCTYPE html>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Hospice Admin</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url('assets/admin/bootstrap.min.css')?>" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url('assets/admin/dashboard.css')?>" rel="stylesheet">
  </head>

  <body>
   <!-- Top Nav Bar -->
    <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Company name</a>
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="#">Sign out</a>
        </li>
      </ul>
    </nav>
    <!-- End of Top Nav Bar -->
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Hospice Medical Admin Dashboard</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
                <button class="btn btn-sm btn-outline-secondary">Export</button>
              </div>
              <button class="btn btn-sm btn-outline-secondary dropdown-toggle">
                <span data-feather="calendar"></span>
                This week
              </button>
            </div>
          </div>

       <!-- Top End of Dashboard -->
         <div>
            <form class="table">
              <table class="table table-striped table-sm">
                  <thead>
                      <tr>
                          <td>Item ID</td>
                          <td>Donor ID</td>
                          <td>Address</td>
                          <td>Organ Type</td>
                          <td>Blood Type</td>
                          <td>Body Type</td>
                          <td>Delete</td>
                          <td>Update</td>
                      </tr>
                  </thead>
                  <tbody>
                      <?php 
                      if($get_resource->num_rows() >0) 
                      {
                        foreach ($get_resource->result() as $row) {
                          ?>
                          <tr>
                            <td><?php echo $row->item_id; ?></td>
                            <td><?php echo $row->donor_id; ?></td>
                            <td><?php echo $row->address; ?></td>
                            <td><?php echo $row->organ_type; ?></td>
                            <td><?php echo $row->blood_type; ?></td>
                            <td><?php echo $row->body_type; ?></td>
                            <td><a href="#" class="delete_item" id="<?php echo  $row->item_id; ?>">Delete</a></td>
                            <td><a href="<?php echo base_url(); ?>main/update_item/<?php echo  $row->item_id; ?>">Edit</a></td>
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

            <form class="add_prod" method="post" action="<?php echo base_url()?>main/add_resource_validation">
              <!-- Trigger the modal with a button -->
                  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Add item</button>

                  <!-- Modal -->
                  <div id="myModal" class="modal fade" role="dialog">
                    <div class="modal-dialog">

                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 class="modal-title">Add Item</h4>
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          
                        </div>
                        <div class="modal-body">
                            
                      <?php
                        if ($this->uri->segment(2)=="added_item") {
                            echo '<p class="text-success">Product Added</p>';
                          }  
                        ?>
                      <div class="input-group-icon mt-10">
                <div class="icon">
                  
                </div>
                <input type="text" name="address" placeholder="Patient First Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Patient First Name'"required class="form-control">
                <input type="text" name="address" placeholder="Patient Last Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Patient Last Name'"required class="form-control">
                <input type="text" name="address" placeholder="Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'"required class="form-control">
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
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                      </div>

                    </div>
                  </div>
				              
