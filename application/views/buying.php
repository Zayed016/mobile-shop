<?php
foreach ($use as $key => $value) {
      $pic=$value['id'];
    ?>  

<div class='search'>
<form action ="<?php echo site_url('welcome/compare/'.$pic)?>" method="post">

<p>Compare with : <input type="text" name="name"/></p>


<input type="submit" value="This >>"  />
</div>
<?php
 if($error==1){?>
    <h3 style="float:left; 
    clear:right;
    padding-left:40px;
    padding-right:600px;
    font-size:20px; 
    font-family:timesnewroman;"><i>No result found</i></h3>
  <?php }
  ?>

<div style="margin-left:20%;
      margin-top:5%;
      margin-right:20%;
      font-family:tahoma;
      font-size:18px;">
      <h1><?php echo $value['mobile_name']?></h1>
      <h2><?php echo $value['mobile_model']?></h2>
      <img  src="<?php echo base_url('pic/'.$pic.'.jpg');?>" />
    <h3>Feature    :-  </h3>
    <h5> <?php echo $value['features']?></h5>
   <h3>Camera    :-  </h3>
    <h5> <?php echo $value['camera']?></h5>
   
   <h3>Data   :-  </h3>
  
    <h5><?php echo $value['data']?></h5>
<h3>Battery   :-  </h3>
  <h5><?php echo $value['battery']?></h5>
<h3>Memory   :-  </h3>
  <h5><?php echo $value['memory']?></h5>

<h2><strong>Price  :- </strong> </h2>
<h4><?php echo $value['price']?>TK</h4>

<h4><i><u>reference <?php echo $value['id']?></u></i></h4>

<b>If you want to buy this phone send juse the reference number <?php echo $value['id']?> to 01xxxxxxxxx</br></br>
  After sometime you will get a message with a number where you will send the payment </b></br></br>
  <b>All the instraction will be shown in message</b>
  <h3>How to pay :</h3>
  <img height=500px width=700px src="<?php echo base_url('pic/c.jpg');?>" /></br></br></br>
<b>After payment you will get an <i>id no..... </i> by which you can get the mobile from our store or if you want to home delivery let us know.</b>
</br></br></br></br></br>
</div>
<?php } ?>
    




