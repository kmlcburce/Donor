

<?php 
if(isset($item_data))
{

foreach ($item_data->result() as $row) {
	?>
	<form class="edit_resource" method="post" action="<?php echo base_url()?>main/add_resource_validation">
	<input type="text" name="address" value="<?php echo $row->address?>" class="form-control">
	<input type="text" name="organ_type" value="<?php echo $row->organ_type?>" class="form-control">
	<input type="text" name="blood_type" value="<?php echo $row->blood_type?>" class="form-control">
	<input type="text" name="body_type" value="<?php echo $row->body_type?>" class="form-control">
	<input type="submit" name="ep_sub" value="submit">
</form>
<?php
}

}
?>