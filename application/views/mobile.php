<?php


foreach ($use as $key) {
      $pic=$key['id'];
     
      ?>

      <div class="picture">

<img height=222px width=200px src="<?php echo base_url('pic/'.$pic.'.jpg');?>" />
&nbsp;
<?php $id=$key['id'];?>
<div style="height:80px;width:200px;">

<h3><a href="<?php echo site_url('welcome/buy/'.$id);?>"><?php echo $key['mobile_model'];?></a><h3>


     </div>

</div>
       <?php } ?>
   <div  style="float:right; clear:left"   >

     <h1><strong> <?php echo $this->pagination->create_links();?></strong></h1>
</div>


    
      
       
      




