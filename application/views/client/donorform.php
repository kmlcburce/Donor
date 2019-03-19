<?php 





	if($_SERVER['REQUEST_METHOD'] == "POST"){
		 $conn = mysqli_connect("localhost","root","","hospice");
		if(!$conn){
			die('Not connected to Database');
		}
		else{
			$query = "INSERT INTO donor_table (fname, lname, email, address, region, notes) VALUES ('{$_POST['d_fname']}','{$_POST['d_lname']}','{$_POST['d_email']}','{$_POST['d_address']}','{$_POST['d_region']}', '{$_POST['d_notes']}')";

			$query2 = "INSERT INTO resource_table (address, organ_type, blood_type, body_type) VALUES ('{$_POST['address']}','{$_POST['organ_type']}','{$_POST['blood_type']}','{$_POST['body_type']}')";
			$res = mysqli_query($conn,$query);
			$res2 = mysqli_query($conn, $query2);
			if ($res == TRUE && $res2 == TRUE) {
				echo "Succesfully inserted";
			}else{
				echo "Insertion failed";
			}

		}
	}else{
		?>


<!doctype html>
<html lang="en">
<body>
			<br>
			<br>
			<br>	
			<div class="section-top-border">
				<div class="row">
					<div class="col-lg-8 col-md-8">
						<h3 class="mb-30 title_color">Form Element</h3>
						<form action="http://localhost/Donor2/Hospice/Welcome/donorform" method="POST">
							<div class="mt-10">
								<input type="text" name="fname" placeholder="First Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'First Name'"
								 required class="single-input">
							</div>
							<div class="mt-10">
								<input type="text" name="lname" placeholder="Last Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Last Name'"
								 required class="single-input">
							</div>
							
							<div class="mt-10">
								<input type="email" name="email" placeholder="Email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email address'"
								 required class="single-input">
							</div>
							<div class="input-group-icon mt-10">
								<div class="icon">
									<i class="fa fa-thumb-tack" aria-hidden="true"></i>
								</div>
								<input type="text" name="address" placeholder="Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Address'"
								 required class="single-input">
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
							<div class="input-group-icon mt-10">
								
								<div class="form-select" id="default-select">
									<select name="region">
										<option value="#">Select Region</option>
										<option value="1">I</option>
										<option value="2">II</option>
										<option value="3">III</option>
										<option value="4">IV</option>
										<option value="5">V</option>
										<option value="6">VI</option>
										<option value="7">VII</option>
										<option value="8">VIII</option>
										<option value="9">IX</option>
										<option value="10">X</option>
										<option value="11">XI</option>
										<option value="12">XII</option>
										<option value="13">XIII</option>
									</select>
								</div>
								<div class="mt-10" id="default-select">
									<p>Additonal Notes:</p>
										<input type="textbox" name="textbox">
								</div>
								<input type="submit" name="submit" value="Submit">
							</div>
						</form>
					</div>
				</div>
			</div>
		</body>
			<?php

			}
			?>
				