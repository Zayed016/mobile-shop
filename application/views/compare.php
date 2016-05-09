
<?php
	if ($second==NULL){

	foreach ($first as $key) {
		$key['id']=$key['id']-1000;
redirect('welcome/buy/'.$key['id']); } 
 } 
else {
	foreach ($first as $key) {
	?>
	<table style="float:left; width:400px; padding-left:30px;">
	<tr>
	<td>
	<div>
		<img  src="<?php echo base_url('pic/'.$key['id'].'.jpg');?>" />
	<h2 ><a style="text-decoration: none;" href="<?php echo site_url('welcome/buy/'.$key['id']);?>"><?php echo $key['mobile_name']; echo " "; ?><?php echo $key['mobile_model']; ?></a></h2>

	<h3>Features:-</h3><h4><?php echo $key['features']; ?></h4>

	<h3>Camera:-</h3><h4><?php echo $key['camera']; ?></h4>

	<h3>Data:-</h3><h4><?php echo $key['data']?></h4>
	
	<h3>Battery:-</h3><h4><?php echo $key['battery']?></h4>

	<h3>Memory:-</h3><h4><?php echo $key['memory']?></h4>

	<h3>Price:-</h3><h4><?php echo $key['price']?>TK</h4>

	</div>
	</td>
	</tr>
	</table>
	<?php
	}
	foreach ($second as $stack){
	?>
	<table style="float:right; width:400px; ">
	<tr>
	<td>
     <img  src="<?php echo base_url('pic/'.$stack['id'].'.jpg');?>" />
	<h2 ><a style="text-decoration: none;" href="<?php echo site_url('welcome/buy/'.$stack['id']);?>"> <?php echo $stack['mobile_name']; echo " "; ?> <?php echo $stack['mobile_model']; ?></a></h2>

	<h3>Features: -</h3><h4><?php echo $stack['features']; ?></h4>

	<h3>Camera:  -</h3><h4><?php echo $stack['camera']; ?></h4>

	<h3>Data:  -</h3><h4><?php echo $stack['data']?></h4>

	<h3>Battery:-</h3><h4><?php echo $stack['battery']?></h4>

	<h3>Memory:-</h3><h4><?php echo $stack['memory']?></h4>
	
	<h3>Price:-</h3><h4><?php echo $stack['price']?>TK</h4>
</td>
</tr>
</table>
<?php
	}

}
?>

</div>	
