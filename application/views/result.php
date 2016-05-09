<?php
if($use==null) { ?>
<h2 style="float:left; font-family:vendara; 
font-size:30px;
padding-left:120px"><i> No result found</i></h2> 
	<?php } else {?>

<?php 
	foreach ($use as $key) {
       $id=$key ['id'];
      $pic=$key['mobile_model'];
      ?>
      <div style="padding-right:70%; padding-left:15%">
      <h3><a  href="<?php echo site_url('welcome/buy/'.$id);?>"><?php echo $key['mobile_name']; echo " ";?><?php echo $key['mobile_model'];?></a><h3>
      </div>
<?php 

}
}     
      ?>
