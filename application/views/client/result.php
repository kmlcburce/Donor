<?php
        
                $conn = mysqli_connect("localhost","root","","hospice");
                if(!$conn){
                        die('Not connected to Database'.mysqli_connect_error());
                }else{
                	$rs = mysqli_query($conn,"SELECT * FROM product_profile");


?>

	<!--================ Banner Area =================-->
	<section class="banner_area">
		<div class="banner_inner d-flex align-items-center">
			<div class="container">
				<div class="banner_content text-left">
					<h2>Procedure Category</h2>
					<div class="page_link">
						<a href="index.html">Home</a>
						<a href="search.html">Search</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Banner Area =================-->
	<section class="service_area">

	
	</section>

	<div>
		<div class="container" >
			<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Available Hospitals</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
            </div>
          </div>
            <form class="table">
              <table class="table table-striped table-sm" frame="box">
                  <thead>
                      <tr>
                          
                          <td>Hospital</td>
                          <td>Location</td>
                          <td></td>
                          </tr>
                  </thead>
                  <tbody>
                      <?php 
                      if($get_hospital->num_rows() >0) 
                      {
                        foreach ($get_hospital->result() as $row) {
                          ?>

                          <tr>
                            
                            
                            <td><?php echo $row->h_name; ?></td>
                            <td><?php echo $row->h_location; ?></td>
                            <td>  <form class="add_prod" method="post" action="<?php echo base_url()?>main/add_resource_validation">
              <!-- Trigger the modal with a button -->
                  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Contact</button>

                  <!-- Modal -->
                  <div id="myModal" class="modal fade" role="dialog">
                    <div class="modal-dialog">

                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 class="modal-title">Please contact the following person</h4>
                          
                          
                        </div>
                        <div class="modal-body">
                            <table>
                            	<tr>
                            		<td>Dr. James Cabahug M.D</td>
                            		<td>jcabahug@gmail.com</td>

                            	</tr>
                            </table>
                  		
                             
                 
                     	</form>
                        
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			            </div>
			        </div>
			    </div>
			</div>
   <?php 
			                        }
			                      }
                      		else{
                        	?>


			            </div>
			                  </div>		                 
				              </tbody>
				              </table>
				            </form>
            
            


					    
					    	
						
                            
                            
                          </tr>
                       
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
<?php
}
?>

