<html>
<head>
<title>eCommerce </title>

<style type="text/css">

#mainmenu
{

-webkit-box-shadow: 5px 6px 8px 1px rgba(0,0,0,0.75);
-moz-box-shadow: 5px 6px 8px 1px rgba(0,0,0,0.75);
box-shadow: 5px 6px 8px 1px rgba(0,0,0,0.75);
	margin:0;
	padding:0;
	background: #008080;
}

#mainmenu ul
{

	width: 100%;
	height: 60px;
	text-decoration: center;
	padding-top: 30px;
	text-align: center;

}

#mainmenu  ul li
{
	clear: left;
	display: inline;
	font-family: arial;
	font-size: 30px;
	padding-left: 20px;
	padding-top: 10px;
	padding-right: 20px;


}

#mainmenu ul li a
{
	text-decoration: none;
	color: white;

}

#mainmenu ul li a:hover
{
	color: #03406A;
}

#cat
{
	clear: both;
}

#foot

{
position:relative;
left:150px;
clear:both;
margin: 0;
float: left;
background-color: 	#008080;
width: 80%;
height: 50px;
text-align:center;
color:white;
padding-bottom:13px;
}



#fullBody
{
	padding-left: 13%;
	padding-right: 13%;

}

#cat
{
	
	margin-left: -8%;
   
	
}

#cat ul
{
	float: left;

}

#cat ul li
{
	display: block;
	background-color: grey;
	padding: 10px;
	padding-right: 
	text-align: left;
}

#cat ul li a 
{
	text-decoration: none;
	text-decoration: inline;
	font-size: 25px;
	font-family: arial;
	color: #ffffff;

}
#cat ul li:hover
{
background-color: #363636;
}

.picture{
	float:left;
	padding-top: 0px;
	padding-left: 10px;
}
.search{
	float:left;
	font-family: arial;
	font-size: 20px;
	padding-left:40px;
	padding-right:500px;

}
#se{
	float:left;
	font-family: arial;
	font-size: 20px;
	padding-left: 40px;
}
#list{
display: inline-block;
		width: 100px;
		min-height: 100px;

}



}
</style>

</head>


	<body style="background:#DBDBDB;">
		<div id="fullBody">

			<div id ="mainmenu">
						<ul >
						<li><a href="<?php echo site_url('welcome/index');?>">Home</a></li>
        				<li><a href="<?php echo site_url('welcome/aboutus');?>">About us</a></li>
        				<li><a href="<?php echo site_url('welcome/faq');?>">FAQ</a></li>
        				<li><a href="<?php echo site_url('welcome/contactus')?>">Contact us</a></li>
						</ul>
			</div>



		<div id="cat">
				<ul>
					<li><a href="<?php echo site_url('welcome/mobile/Nokia')?>">Nokia</a></li>
					<li><a href="<?php echo site_url('welcome/mobile/Samsung')?>">Samsung</a></li>
					<li><a href="<?php echo site_url('welcome/mobile/Walton')?>">Walton</a></li>
					<li><a href="<?php echo site_url('welcome/mobile/Sony')?>">Sony</a></li>
					<li><a href="<?php echo site_url('welcome/mobile/BlackBerry')?>">BlackBerry</a></li>
					<li><a href="<?php echo site_url('welcome/mobile/Htc')?>">Htc</a></li>
					<li><a href="<?php echo site_url('welcome/mobile/Micromax')?>">Micromax</a></li>
					<li><a href="<?php echo site_url('welcome/mobile/Motorola')?>">Motorola</a></li>
					<li><a href="<?php echo site_url('welcome/mobile/Toshiba')?>">Toshiba</a></li>
					<li><a href="<?php echo site_url('welcome/mobile/Apple')?>">Apple</a></li>
					<li><a href="<?php echo site_url('welcome/mobile/LG')?>">LG</a></li>
					<li><a href="<?php echo site_url('welcome/mobile/Philips')?>">Philips</a></li>
					<li><a href="<?php echo site_url('welcome/mobile/Symphony')?>">Symphony</a></li>
					
					
					
				</ul>	
	<div>
		<div class="search">
<form action ="<?php echo site_url('welcome/search')?>" method="post">
<p>Search mobile : <input type="text" name="name"/></p>


<input type="submit" value="Search >>" id="submit" />
   </div>

</form>
	</div>
		</div>

				<div id="feat">
					<?php $this->load->view($view);?>

				</div>

</div>
						<footer id="foot">

							<p style='font-size:22px'>2014@copyright</p>
						</footer>



	</body>




</html>