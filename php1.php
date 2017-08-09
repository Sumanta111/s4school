<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<title></title>
<meta name="" content="">
</head>
<style>
	.secondbody{
		height: 175px;
		width: auto;
		top: 900px;
		outline: 0px solid red;
		
	}
	.secbody2{
		margin: 0px auto;
		position: relative;
		height: 2650px;
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
		height: 2450px;
		width: 1000px;
		outline: 0px solid red;
		top: 2%;
		background-color: white;
		border-radius: 10px;
	}
	.mbodyinner1{
		top: 10px;
		left: 10px;
		position: relative;
		font-size: 1.3 em;
		font-family: open sans, helvetica, arial, sans;
		outline: 0px solid red;
	}
	.mbodyinner2{
		margin: 0px auto;
		text-align: center;
		position: relative;
		outline: 0px solid red;
		top: 20px;
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
    
	if(!isset($_SESSION['UID'])|| isset($_REQUEST['logout']))
    {
		session_destroy();
		header("location:project_front.html");
	}
	else
    {   
        
		include("head.php");
		echo "<br>";
		echo "Welcome : ".$_SESSION['Name']."<br>";
		echo "Your Session Id is :".session_id()."<br>";
	}
    

	
?>
	
	<div class="secbody2">
		<div class="mbody1">
				PHP Tutorial
		</div>
		<div class="mbody2">
			With PHP you can create your own dynamic Web site.
			This tutorial teaches you everything about PHP.
			PHP is easy to learn - You will enjoy it.
		</div>
		<div class="mbodyinner">
				<div class="mbodyinner1">
				<ul>	<h3>INTRODUCTION</h3>
                <p>
The PHP Hypertext Preprocessor (PHP) is a programming language that allows web developers to create dynamic content that interacts with databases. PHP is basically used for developing web based software applications. 
The www permits the computer user to view and locate and multimedia based document. It is developed by TIM BERNES LEE of CERN. Small business and indivuals can receive worldwide explore on the cloud.
A computer script is a list of commands that are executed by a certain program or scripting engine. Example: Dos Scripts or VB scripts on windows machine, APPLE script used on Macintosh computer. A scripting language is used to write the script on the web pages. These scripts are actually the programs embedded into HTML Code and these web pages run on client computer.
PHP is an acronym for "PHP: Hypertext Preprocessor". PHP is a widely-used, open source scripting language.PHP scripts are executed on the serverPHP is free to download and use.
PHP started out as a small open source project that evolved as more and more people found out how useful it was. Rasmus Lerdorf unleashed the first version of PHP way back in 1994. In 1997, update version of PHP Zen Seraski and Andi Gutman update result PHP/FIZ. PHP supports a large number of major protocols such as POP3, IMAP, and LDAP. PHP4 added support for Java and distributed object architectures (COM and CORBA), making n-tier development a possibility for the first time. PHP is forgiving: PHP language tries to be as forgiving as possible. PHP Syntax is C-Like.
PHP performs system functions, i.e. from files on a system it can create, open, read, write, and close them.PHP can handle forms, i.e. gather data from files, save data to a file, thru email you can send data, return data to the user. 
</p>
<p>Five important characteristics make PHP's practical nature possible -</p>
          <li> Simplicity </li>
          <li> Efficiency </li>
          <li> Security  </li>
          <li> Flexibility  </li>
          <li> Familiarity </li>
				</ul>
				</div>
		<br> <br>
			<div class="mbodyinner6" id="font">
			<h3 style="font-weight: bold" align="center">RELEASE HISTORY</h3>
		<center>	<table class="table table-striped" style="width: 700px">
			<tr>
				<th>Version</th>
				<th>Year</th>
                <th>Notes</th>
			</tr>
				<tr>
					<td>1</td>
					<td>1995-0808</td>
                    <td>Official called “Personal Home Page”</td>
				</tr>
				<tr>
					<td>2</td>
					<td>1997-11-01</td>
                    <td>Consider by its creator as “fastest and simplest tool” for creating web pages</td>
				</tr>
				<tr>
					<td>3</td>
					<td>1998-06-06</td>
                    <td>Multiple developers update its version</td>
				</tr>
				<tr>
					<td> 4</td>
					<td>2002-12-27</td>
                    <td>More security enhancement and bug fixer</td>
				</tr>
				<tr>
					<td>5</td>
					<td>2004-07-13</td>
                    <td>Zend engine II with a new object model.  </td>
				</tr>
				<tr>
					<td>5.3</td>
					<td>2010-07-13</td>
                    <td>Mainly bug and security fix</td>
				</tr>
                <tr>
                    <td> 5.4.3</td>
                    <td>2012-05-22</td>
                    <td></td>
                </tr>
                <tr>
                     <td>5.6.2</td>
                     <td>2014-10-16</td>
                     <td>Latest Version</td>
                </tr>
			</table></center>
		</div>
        	<div class="mbodyinner2">
		<h3>PHP is embedded in HTML. That means that in amongst your normal HTML (or XHTML if you're cutting-edge) you'll have PHP statements like this -</h3>
			<div class="codeback"><xmp>   
<html>
   <head>
      <title>Hello World</title>
   </head>
   
   <body>
      <?php echo "Hello, World!";?>
   </body>

</html>
</xmp></div>
				</div>
		<div class="mbodyinner7" id="font">
			<h3 style="font-weight: bold;font-size: 1.6em;">PROCEDURE AND SYNTAX</h3>
		A PHP script is executed on the server, and the plain HTML result is sent back to the browser.
A PHP script can be placed anywhere in the document.A PHP script starts with &lt;?php and ends with ?&gt;:The default file extension for PHP files is ".php".A PHP file normally contains HTML tags, and some PHP scripting code.
An example of a simple PHP file, with a PHP script that uses a built-in PHP function

<br>
		<div class="mbodyinner2">
		<h3>PHP is embedded in HTML. That means that in amongst your normal HTML (or XHTML if you're cutting-edge) you'll have PHP statements like this -</h3>
			<div class="codeback"><xmp>   
<!DOCTYPE html>

<html>
<body>

<h1>My first PHP page</h1>

<?php
echo "Hello World!";
?>

</body>
</html>


</xmp></div>
				</div>
		</div>
		<div class="mbodyinner8" id="font">
			<h3 style="font-weight: bold">Comments in PHP</h3>
A comment in PHP code is a line that is not read/executed as part of the program. 
Comments are created using:
// single line quotes
/* Multiple line code block */

	<div class="mbodyinner2">
		<h3> Example</h3>
			<div class="codeback"><xmp>   
<!DOCTYPE html>

<html>
<body>

<?php
// This is a single-line comment

/*
This is a multiple-lines comment block
*/
echo "Hello World!";
?>

</body>
</html>
</xmp></div>
				</div>
In PHP, all keywords (e.g. if, else, while, echo, etc.), classes, functions, and user-defined functions are NOT case-sensitive.<br>
	
		</div>
		 <div class="mbodyinner2">
		<h3> Example</h3>
			<div class="codeback"><xmp>   
<!DOCTYPE html>

<html>
<body>

<?php
ECHO "Hello World!<br>";
echo "Hello World!<br>";
EcHo "Hello World!<br>";

?>

</body>
</html>


</xmp>
</div>
		</div>
        </div>
		
		
		
				<div class="foot">
					<ul class="pagination">
    				<li class="active"><a href="php1.php">1</a></li>
    				<li><a href="php2.php">2</a></li>
    				<li><a href="php3.php">3</a></li>
    				<li><a href="php4.php">4</a></li>
    				<li><a href="php5.php">5</a></li>
					</ul>
                  </div>
		</div>
        </div>    
</body>
</html>