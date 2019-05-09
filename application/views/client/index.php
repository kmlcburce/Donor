                
                                       


	<!--================ Home Banner Area =================-->
	<section class="home_banner_area">
		<div class="banner_inner d-flex align-items-center">
			<div class="container">
				<div class="banner_content row">
					<div class="col-lg-12">
						<h1>We Care for Your Health Every Moment</h1>
						<p>Searching for organ donor members near you has never been made easier.</p>
						<!-- <a class="main_btn mr-10" href="<?php echo base_url('Welcome/search')?>">get started</a> -->
						<button onclick="document.getElementById('id01').style.display='block'" style="width:auto; border-radius: 8px;">Get Started</button>

							<div id="id01" class="modal">
							  
							  <form class="modal-content animate" action="<?php echo base_url('Welcome/search')?>">
							    
							  	<div class="container">
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
                      <button type="submit" name="ap_sub" value="Submit">Submit</button>
                  </div>
                     </form>
      </div>

							
						</div>
					</div>
					</div>
			
			</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ End Home Banner Area =================-->

	<!--================ Procedure Category Area =================-->
	<section class="procedure_category section_gap">
		<div class="container">
			<div class="row justify-content-center section-title-wrap">
				<div class="col-lg-12">
					<h1>Procedure Category</h1>
					<p>
						Hospice is a search engine that automates and gives transparency to give ease for those who need to find organ donors
					</p>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-4">
					<div class="categories_post">
						<img src="<?php echo base_url('assets/images/procedure/p1.jpg')?>" alt="Procedure">
						<div class="categories_details">
							<div class="categories_text">
								<div class="border_line"></div>
								<a href="#">
									<h5>Reliability</h5>
								</a>
								<div class="border_line"></div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="categories_post">
						<img src="<?php echo base_url('assets/images/procedure/p2.jpg')?>" alt="Procedure">
						<div class="categories_details">
							<div class="categories_text">
								<div class="border_line"></div>
								<a href="#">
									<h5>Ease</h5>
								</a>
								<div class="border_line"></div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="categories_post">
						<img src="<?php echo base_url('assets/images/procedure/p3.jpg')?>" alt="Procedure">
						<div class="categories_details">
							<div class="categories_text">
								<div class="border_line"></div>
								<a href="#">
									<h5>Practicality</h5>
								</a>
								<div class="border_line"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ End Procedure Category Area =================-->

	<!--================ Start Offered Services Area =================-->
	<section class="service_area section_gap">
		<div class="container">
			<div class="row justify-content-center section-title-wrap">
				<div class="col-lg-12">
					<h1>Our Offered Services</h1>
					<p>
						Fast and effecient, Hospice aims to deliver timely and medically accurate information for patients needing organ donations.
					</p>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-3 col-md-6">
					<div class="single_service">
						<span class="lnr lnr-rocket"></span>
						<a href="#">
							<h4>Emergency Services</h4>
						</a>
						<p>
							Our team is always on stand-by waiting for emergency organ transplants to be delivers
						</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="single_service">
						<span class="lnr lnr-heart-pulse"></span>
						<a href="#">
							<h4>Compatability and Ease</h4>
						</a>
						<p>
							With a nation-wide coverage, rest assured that our system will be able to find a suitable organ donor for you
						</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="single_service">
						<span class="lnr lnr-bug"></span>
						<a href="#">
							<h4>Intensive Care</h4>
						</a>
						<p>
							Handpicked professionals are always with you along the way, guiding you towards proper medical care
						</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="single_service">
						<span class="lnr lnr-users"></span>
						<a href="#">
							<h4>Consultation</h4>
						</a>
						<p>
							Our in-house physicians are always available for consultation, both online and in field offices
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ End Offered Services Area =================-->

