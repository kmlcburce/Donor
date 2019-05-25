
<!DOCTYPE html>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Hospice Admin</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url('assets/admin/bootstrap.min.css')?>" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url('assets/admin/dashboard.css')?>" rel="stylesheet">
  </head>

  <body>
   <!-- Top Nav Bar -->
    <header class="header_area">
    
    <div class="main_menu">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <a class="navbar-brand logo_h" href="index.html">
            <img src="<?php echo base_url('assets/images/logo.png');?>" alt="">
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
           aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
            <div class="row ml-0 w-100">
              <div class="col-lg-12 pr-0">
                <ul class="nav navbar-nav center_nav pull-right">
                  <li class="nav-item active">
                    <a class="nav-link" href="<?php echo base_url('main/index')?>">Dashboard</a>
                  </li>
                  <li class="nav-item ">
                    <a class="nav-link" href="<?php echo base_url('main/message')?>">Messages</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('main/login')?>" >Signout</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </nav>
    </div>
  </header>
    <!-- End of Top Nav Bar -->

    <!-- Ridenzel -->
    <!-- <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                  Dashboard <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path><polyline points="13 2 13 9 20 9"></polyline></svg>
                  Orders
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="http://localhost/pizzaplanet/Admin/franchise">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path><polyline points="13 2 13 9 20 9"></polyline></svg>
                  Franchises
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="http://localhost/pizzaplanet/Admin/branch">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path><polyline points="13 2 13 9 20 9"></polyline></svg>
                  Branches
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="http://localhost/pizzaplanet/Admin/menu">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path><polyline points="13 2 13 9 20 9"></polyline></svg>
                  Menu
                </a>
              </li>
            </ul>
          </div>
        </nav> -->

        <!-- <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Dashboard</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
                <button class="btn btn-sm btn-outline-secondary">Export</button>
              </div>
              <button class="btn btn-sm btn-outline-secondary dropdown-toggle">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                This week
              </button>
            </div>
          </div>
          <div>
            <h2>Products</h2>
            <form class="table">
              <table class="table table-striped table-sm">
                  <thead>
                      <tr>
                          <td>ID</td>
                          <td>Name</td>
                          <td>Description</td>
                          <td>Type</td>
                          <td>Price</td>
                          <td>Delete</td>
                          <td>Update</td>
                      </tr>
                  </thead>
                  <tbody>
                                                <tr>
                            <td>1</td>
                            <td>Margherita</td>
                            <td>Made with San Marzano tomatoes, mozzarella fior di latte, fresh basil, salt and extra-virgin olive o</td>
                            <td>pizza</td>
                            <td>299</td>
                            <td><a href="#" class="delete_product" id="1">Delete</a></td>
                            <td><a href="http://localhost/pizzaplanet//Admin/update_product/1">Edit</a></td>
                          </tr>
                                                    <tr>
                            <td>2</td>
                            <td>Hawaiian</td>
                            <td>Pineapple, Tomato sauce, Ham slices</td>
                            <td>Pizza</td>
                            <td>250</td>
                            <td><a href="#" class="delete_product" id="2">Delete</a></td>
                            <td><a href="http://localhost/pizzaplanet//Admin/update_product/2">Edit</a></td>
                          </tr>
                                                    <tr>
                            <td>3</td>
                            <td>Napolitan</td>
                            <td>tomato sauce, basil</td>
                            <td>pasta</td>
                            <td>150</td>
                            <td><a href="#" class="delete_product" id="3">Delete</a></td>
                            <td><a href="http://localhost/pizzaplanet//Admin/update_product/3">Edit</a></td>
                          </tr>
                                                    <tr>
                            <td>4</td>
                            <td>Agli o olio</td>
                            <td>Olive oil, basil, pasta</td>
                            <td>pasta</td>
                            <td>260</td>
                            <td><a href="#" class="delete_product" id="4">Delete</a></td>
                            <td><a href="http://localhost/pizzaplanet//Admin/update_product/4">Edit</a></td>
                          </tr>
                                            </tbody>
              </table>
            </form>
             <form class="add_prod" method="post" action="http://localhost/pizzaplanet//Admin/add_product_validation">
              <h4>Add Product</h4>
                            <input type="text" name="prod_name" placeholder="Product Name" class="form-control">
              <span class="text-danger"></span>
              <input type="text" name="prod_desc" placeholder="Description" class="form-control">
              <span class="text-danger"></span>
              <input type="text" name="prod_price" placeholder="Price" class="form-control">
              <span class="text-danger"></span>
              <table>
                <tbody><tr>
                  <td><input type="radio" name="prod_type" value="pizza"><p>Pizza</p></td>
                  <td><input type="radio" name="prod_type" value="pasta"><p>Pasta</p></td>
                  <td><input type="radio" name="prod_type" value="salad"><p>Salad</p></td>
                  <td><input type="radio" name="prod_type" value="dessert"><p>Dessert</p></td>
                </tr>
              </tbody></table>
              <span class="text-danger"></span>
              <input type="submit" name="ap_sub" value="Submit">
             </form>
             
                           
            
          </div>
            <br>
            <br>
            <br>
        </main> -->

        <!-- Ridenzel -->
        <br><br>
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Resources</h1>
            
          </div>

       <!-- Top End of Dashboard -->
  
         <div class="container">
            <form class="table" method="post" action="<?php echo base_url()?>main/add_resource_validation">
              <table class="table table-striped table-sm" frame="box">
                  <thead>
                      <tr>
                          <th>Item ID</th>
                          <th>Donor ID</th>
                          <th>Address</th>
                          <th>Organ Type</th>
                          <th>Blood Type</th>
                          <th>Body Type</th>
                          <th>Action</th>
                          
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
                            <td><?php echo $row->d_id; ?></td>
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

                  </tbdy>
              </table>
            </form>
            
            


    </div>
  </div>
</div>

             

            
              <!-- Trigger the modal with a button -->
                  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Add to Resource Database</button>

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
                          <form class="add_prod" method="post" action="<?php echo base_url()?>main/add_resource_validation">
                            
                      <?php
                        if ($this->uri->segment(2)=="added_item") {
                            echo '<p class="text-success">Product Added</p>';
                          }  
                        ?>
                              <div class="input-group-icon mt-10">
                        <div class="icon">
                          
                        </div>
                        <input type="text" name="d_fname" placeholder="Patient First Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Patient First Name'"required class="form-control">
                        <input type="text" name="d_lname" placeholder="Patient Last Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Patient Last Name'"required class="form-control">
                        <input type="text" name="d_email" placeholder="Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'"required class="form-control">
                        <input type="text" name="d_address" placeholder="Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Address'"
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


				              
