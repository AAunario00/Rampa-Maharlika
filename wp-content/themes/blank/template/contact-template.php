<?
/* Template Name: CONTACT */
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
<style>
		ul { 
			list-style-type: none;
			margin-top: -8px;
			padding: 0;
			width: 100%;
			height: 11%;
			position: fixed;
			background-color: #f7f7f9;}

		li a {
			text-decoration: none;
			color: #241bd9;
			font-family: Rockwell;
			font-size: 15pt;
			padding: 10px 30px; 
			display: block; 
			margin-top: 20px; }
		li a:hover {
			background-color: #e8b120;
			color: #241bd9;
			font-style: italic;}
		li{
			float: left; 
			margin-left: 0px; }
		h1{
			margin-left: 20px;
			font-family: Rockwell;
			color: #241bd9;}
		h2{
  			font-family: Rockwell;
			font-size: 35pt;
			color: white;
			position: absolute;
  			top: 20%;
  			right: 10%;
 			transform: translate(-50%, -50%); }
 		div.subscribe{
  			font-family: Rockwell;
  			color: white;
  			background-color: #411995;
  			margin-top: 0;
  			padding: 10px 30px;}

</style>
</head>
<body>
	<ul>
		<li><center><img src="http://localhost/ecomm/wp-content/uploads/2021/03/Rampa-Maharlika.jpg" width="120" height="70"></center></li>
		<li><center><h1>Rampa Maharlika</h1></center></li>
		<li><a href="http://localhost/ecomm/" style="margin-left: 620px;">Home</a></li>
		<li><a href="http://localhost/ecomm/about/">About</a></li>
		<li><a href="http://localhost/ecomm/contact/">Contact</a></li>
		<li><a href="http://localhost/ecomm/shop/">Shop</a></li>
	</ul>
	<div class="contact">
  		<img src="http://localhost/ecomm/wp-content/uploads/2021/04/bg.jpg" style="width:100%;">
  		<h2>Tell Us Your Suggestions</h2>
  		<form action="" method="post" 
  			style="text-align:center; font-family: Candara;
			font-size: 15pt;
			color: white;
			position: absolute;
  			top: 50%;
  			left: 50%;
 			transform: translate(-50%, -50%); ">
			<input type="label" placeholder="Name: " id="name" name="name" style="width: 100%;"><br/><br/>
			<input type="label" placeholder="E-mail: " id="email" name="email"><br/><br/>
			<input type="label" placeholder="Phone: " id="phone" name="phone"><br/><br/>
			<input type="label" placeholder="Message" id="msg" name="msg"><br/><br/>
			<input type="submit" value="Submit" name="submit" style="width: 100%;background-color: #e8b120">
		</form>
 	<div class="subscribe">
		<h3 align="center">Subscribe Form</h3>
		<form action="" method="post" style="text-align:center;">
			<input type="label" placeholder="Email Address" id="email" name="email"style = "font-family: Candara;
  			font-size: 15pt;"><br/><br/>
			<input type="submit" value="Submit" name="submit"style = "font-family: Candara;
  			font-size: 15pt; background-color: #e8b120; border-radius: 8px; width: 18%;">
		</form>
		<h4 align="center">Thanks for submitting!</h4>
		<h5 align="center">c2021 by A.Aunario</h3>
	</div>
</body>
</html>


