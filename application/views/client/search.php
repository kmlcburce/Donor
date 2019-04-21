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
	<section class="service_area section_gap">
	<form class="mystyle" method="POST">
		<select name="location">
			<option value="location" selected="">Select location</option>
			<option value="Luzon">Luzon</option>
			<option value="Visayas">Visayas</option>
			<option value="Mindanao">Mindanao</option>
		</select>
		<br>
		<select name="blood-type">
			<option value="blood-type" selected="">Select blood-type</option>
			<option value="A+">A+</option>
			<option value="A-">A-</option>
			<option value="AB+">AB+</option>
			<option value="AB-">AB-</option>
			<option value="B+">B+</option>
			<option value="B-">B-</option>
			<option value="O+">O+</option>
			<option value="O-">O-</option>
		</select>
		<select name="body-type">
			<option value="body-type" selected="">Select body-type</option>
			<option value="Endomorph">Endomorph</option>
			<option value="Mesomorph">Mesomorph</option>
			<option value="Ectomorph">Ectomorph</option>
		</select>
		<select name="organ-type">
			<option value="organ-type" selected="">Select organ-type</option>
			<option value="Heart">Kidney</option>
			<option value="Lungs">Lungs</option>
			<option value="Liver">Liver</option>
			<option value="Pancreas">Pancreas</option>
			<option value="Bone-Marrow">Bone Marrow</option>
		</select>
		<button type="button" class="btn btn-info">
     		 <span class="glyphicon glyphicon-search"></span> Search
    	</button>
	</form>
	</section>
	<div>
		<div class="container" >
            <form class="table">
              <table class="table table-striped table-sm" >
                  <thead>
                      <tr>
                          
                          <td>Donor ID</td>
                          <td>Address</td>
                          <td>Organ Type</td>
                          <td>Blood Type</td>
                          <td>Body Type</td>
                          
                      </tr>
                  </thead>
                  <tbody>
                      <?php 
                      if($get_resource->num_rows() >0) 
                      {
                        foreach ($get_resource->result() as $row) {
                          ?>
                          <tr>
                            
                            <td><?php echo $row->donor_id; ?></td>
                            <td><?php echo $row->address; ?></td>
                            <td><?php echo $row->organ_type; ?></td>
                            <td><?php echo $row->blood_type; ?></td>
                            <td><?php echo $row->body_type; ?></td>
                            
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
<?php
}
?>

