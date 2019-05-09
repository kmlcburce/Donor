



	<!--================ Optional JavaScript =================-->
	<!--================ jQuery first, then Popper.js, then Bootstrap JS =================-->
	<script src="<?php echo base_url('assets/scripts/jquery-3.2.1.min.js');?>"></script>
	<script src="<?php echo base_url('assets/scripts/popper.js');?>"></script>
	<script src="<?php echo base_url('assets/scripts/bootstrap.min.js');?>"></script>
	<script src="<?php echo base_url('assets/vendors/nice-select/js/jquery.nice-select.min.js');?>"></script>
	<script src="<?php echo base_url('assets/vendors/isotope/isotope-min.js');?>"></script>
	<script src="<?php echo base_url('assets/vendors/owl-carousel/owl.carousel.min.js');?>"></script>
	<script src="<?php echo base_url('assets/scripts/jquery.ajaxchimp.min.js');?>"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
	<script src="<?php echo base_url('assets/scripts/mail-script.js');?>"></script>
	<script src="<?php echo base_url('assets/scripts/custom.js');?>"></script>
	<!--   Delete  -->
	<script>
	      $(document).ready(function(){
	        $('.delete_item').click(function(){
	          var id = $(this).attr("id");
	          if(confirm("Are you sure you want to delete this?")){
	            window.location="<?php echo base_url();?>main/delete_item/"+id;
	          }
	          else{
	            return false;
	          }
	        });
	      });
	</script>
	
</body>

</html>