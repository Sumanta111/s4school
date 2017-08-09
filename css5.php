<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<title></title>
<meta name="" content="">
</head>
<style>
	.secondbody{
		height: 170px;
		width: auto;
		top: 900px;
		outline: 0px solid red;
		
	}
	.secbody2{
		margin: 0px auto;
		position: relative;
		height: 2500px;
		width: 1310px;
		outline: 0px solid red;
		top: 5px;
		background: -webkit-linear-gradient(#eeeff0,#ECEDEE,#F3F4F5,#FAFAFA);
	}
	.mbody1{
		text-align: center; 
		font-size: 2.8em;
		font-family: open sans, helvetica, arial, sans;
		font-weight: bold;
		
	}
	.mbody2{
		text-align: center; 
		font-size: 1.5em;
		font-family: open sans, helvetica, arial, sans;
	}
	.mbodyinner{
		margin: 0px auto;
		position: relative;
		height: 2300px;
		width: 1200px;
		outline: 0px solid red;
		top: 2%;
		background-color: white;
		border-radius: 10px;
	}
	.mbodyinner1{
		top: 20px;
		left: 20px;
		position: relative;
		font-size: 1.3 em;
		font-family: open sans, helvetica, arial, sans;
		outline: 0px solid red;
	}
	.mbodyinner2{
		margin: 0px auto;
		position: relative;
		outline: 0px solid red;
		top: 20px;
		left: 25px;
	}
	.mbodyinner3{
		left: 20px;
		position: relative;
		font-size: 1.3 em;
		font-family: open sans, helvetica, arial, sans;
	}
	.codeback{
		margin: 0px auto;
		position: relative;
		background-color: #faf5fe;
		border-radius: 5%;
		width: 500px;
		outline: 0px solid red;
	}
		#font{
		left: 20px;
		position: relative;
		font-size: 1.3 em;
		font-family: open sans, helvetica, arial, sans;
	}
	.foot{
		position: absolute;
		width: 175px;
		height: 30px;
		outline: 0px solid red;
		right: 10px;
		bottom: 30px;
	}
	
</style>
<body>
		<div class="secondbody">
	<?php
	session_start();
	if(!isset($_SESSION['UID'])){
		session_destroy();
		header("location:project_front.html");
	}
	else{
		include("head.php");
		echo "<br>";
		echo "Welcome : ".$_SESSION['Name']."<br>";
		echo "Your Session Id is :".session_id()."<br>";
	}
	if(isset($_POST['logout'])){
		session_destroy();
		header("location:project_front.html");
		$_SESSION['loginTime']=time();
	}
?>
	</div>
	<div class="secbody2">
		<div class="mbody1">
				CSS Tutorial Page 5
		</div>
		<div class="mbody2">
			With Css you can style your own Web site.
			This tutorial teaches you everything about CSS.
			CSS is easy to learn - Hope,You will enjoy it.
		</div>
		<div class="mbodyinner">
				<div class="mbodyinner1">
					<h3>Background Image - Set position and no-repeat</h3>
         Showing the background image only once is also specified by the background-repeat property:
<div class="codeback" style="text-align: center">
	<xmp>
<!DOCTYPE html>
<html>
<head>
<style>
body {
    background-image: url("img_tree.png");
    background-repeat: no-repeat;
}
</style>
</head>
<body>
<h1>Hello World!</h1>
<p>W3Schools background image example.</p>
<p>The background image is only showing once, 
but it is disturbing the reader!</p>
</body>
</html>
	</xmp>
</div>
				</div>
		<div class="mbodyinner2">
		When using the shorthand property the order of the property values is:
<ul>
<li>background-color</li>
<li>background-image</li>
<li>background-repeat</li>
<li>background-attachment</li>
<li>background-position</li>
</ul>
It does not matter if one of the property values is missing, as long as the other ones are in this order.
				</div>
		<div class="mbodyinner3">
			<h3>Border Style</h3>
			The border-style property specifies what kind of border to display.
The following values are allowed:
<ul>
<li>dotted - Defines a dotted border</li>
<li>dashed - Defines a dashed border</li>
<li>solid - Defines a solid border</li>
<li>double - Defines a double border</li>
<li>groove - Defines a 3D grooved border. The effect depends on the border-color value</li>
<li>ridge - Defines a 3D ridged border. The effect depends on the border-color value</li>
<li>inset - Defines a 3D inset border. The effect depends on the border-color value</li>
<li>outset - Defines a 3D outset border. The effect depends on the border-color value</li>
<li>none - Defines no border</li>
<li>hidden - Defines a hidden border</li>
</ul>
<div class="codeback" style="text-align: center">
	<xmp>p.dotted {border-style: dotted;}
p.dashed {border-style: dashed;}
p.solid {border-style: solid;}
p.double {border-style: double;}
p.groove {border-style: groove;}
p.ridge {border-style: ridge;}
p.inset {border-style: inset;}
p.outset {border-style: outset;}
p.none {border-style: none;}
p.hidden {border-style: hidden;}
 p.mix {border-style: dotted dashed solid double;}</xmp>
</div>
		</div>
		<div class="mbodyinner4" id="font">
		<h3 style="font-weight:bold">Border Color</h3>
	The border-color property is used to set the color of the four borders.

The color can be set by:
<ul>
<li>name - specify a color name, like "red"</li>
<li>Hex - specify a hex value, like "#ff0000"</li>
<li>RGB - specify a RGB value, like "rgb(255,0,0)"</li>
<li>transparent</li>
</ul>
The border-color property can have from one to four values (for the top border, right border, bottom border, and the left border). 

If border-color is not set, it inherits the color of the element.
If the border-style property has four values:<br>
border-style: dotted solid double dashed;<br>
top border is dotted<br>
right border is solid<br>
bottom border is double<br>
left border is dashed<br>


If the border-style property has three values:<br>
border-style: dotted solid double; ?top border is dotted<br>
right and left borders are solid<br>
bottom border is double<br>


If the border-style property has two values:<br>
border-style: dotted solid; ?top and bottom borders are dotted<br>
right and left borders are solid<br>


If the border-style property has one value:<br>
border-style: dotted;?all four borders are dotted<br>


The border-style property is used in the example above. However, it also works with border-width and border-color.<br>

			<h3>Rounded Borders</h3>
			
			<div class="codeback" style="text-align: center">
<xmp>
<!DOCTYPE html>
<html>
<head>
<style>
p.normal {
    border: 2px solid red;
}
p.round1 {
    border: 2px solid red;
    border-radius: 5px;
}
p.round2 {
    border: 2px solid red;
    border-radius: 8px;
}
p.round3 {
    border: 2px solid red;
    border-radius: 12px;
}
</style>
</head>
<body>
<p class="normal">Normal border</p>
<p class="round1">Round border</p>
<p class="round2">Rounder border</p>
<p class="round3">Roundest border</p>
</body>
</html>
</xmp>
</div>
		</div>
			<div class="foot">
					<ul class="pagination">
    				<li ><a href="css1.php">1</a></li>
    				<li><a href="css2.php">2</a></li>
    				<li ><a href="css3.php">3</a></li>
    				<li ><a href="css4.php">4</a></li>
    				<li class="active"><a href="css5.php">5</a></li>
					</ul>
				</div>
	</div>
</body>
</html>



