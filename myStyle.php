<?php 
/* 
 * Template Name: myStyle
 * Description: myStyle
 */ 
 ?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta charset="utf-8">
		<title>Mateusz Gościniak</title>
		<style type="text/css">
		
			body {
				background-image: url(/wp-content/themes/food-recipes/images/background.svg);
				background-size: cover;
			}
			
			img {
				position: relative;
			}
			
			#container {
				position: relative;
				background-image: url(/wp-content/themes/food-recipes/images/menu.svg);
				background-size: auto;
				background-repeat: no-repeat;
				height: 530px; 
				width: 715px;
			}

			.box {
				position: absolute;
				background-image: url(/wp-content/themes/food-recipes/images/button.svg);
				background-size: auto;
			    background-repeat: no-repeat;
				height: 135px;
				width: 160px;
			}
			
			.box:hover {
				position: absolute;
				background-image: url(/wp-content/themes/food-recipes/images/buttonHover.svg);
				background-size: auto;
			    background-repeat: no-repeat;
				height: 135px;
				width: 160px;
			}
		
		</style>
	</head>

	<body bgcolor="#000000">
		<font color="#dcdcdc">
			<p style="font: 11pt sans-serif; line-height: 0px; text-indent: 50px; direction:rtl; text-align:right; margin-top: 20px"> 
				<SCRIPT language="JavaScript" type="text/javascript">
					user = "gosciniak.mateusz";
					site = "outlook.com";
					document.write('<a href=\"mailto:'+user+'@'+site+'\">');
					document.write(user+'@'+site+'<\/a>');
				</SCRIPT>
			</p>
			<p style="font-weight: bold; font: 24pt sans-serif; line-height: 5px; text-indent: 200px;">Mateusz Gościniak</p>
			<p style="font: 16pt sans-serif; line-height: 0px; text-indent: 350px">Robotic engineer</p>
		</font>
		<center>
			<div id="container">
				<a href="index.php/programmer">
					<div class="box" style="left: 263px; top:  69.5px;"></div>
				</a>
				<a href="index.php/automatic">
					<div class="box" style="left: 384px; top: 138px;"></div>
				</a>
				<a href="index.php/electronic">
					<div class="box" style="left: 146px; top: 138px;"></div>
				</a>
				<a href="index.php/stuntman">
					<div class="box" style="left: 146px; top: 274px;"></div>
				</a>
				<a href="index.php/graphic">
					<div class="box" style="left: 384px; top: 274px;"></div>
				</a>
				<a href="index.php/robotic">
					<div class="box" style="left: 263px; top: 343px;"></div>
				</a>
				<a href="index.php/about-me/">					
					<font color="#dcdcdc">
						<p style="font: 12pt sans-serif; line-height: 0px; text-indent: 600px">About Me</p>
					</font>
				</a>
			</div>
		</center>
	</body>
</html>