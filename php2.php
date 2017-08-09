<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<title></title>
<meta name="" content="">
</head>
<style>
	.secondbody{
		height: 200px;
		width: auto;
		top: 900px;
		outline: 0px solid red;
		
	}
	.secbody2{
		margin: 0px auto;
		position: relative;
		height: 3230px;
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
		height: 2950px;
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
	<div class="secbody2">
		<div class="mbody1">
				PHP Tutorial
		</div>
		<div class="mbody2">
			With PHP you can create your own dynamic website.
            Its very easy and interesting. You will enojoy it.
		</div>
		<div class="mbodyinner">
				<div class="mbodyinner1">
				<ul>	<h3>DATA TYPE</h3>
                <p>Variables can store data of different types, and different data types can do different things.</p>
                 <p>PHP supports the following data types:</p>
          <li>    String</li>
          <li>   Integer </li>
          <li>    float  </li>
          <li>   Boolean  </li>
          <li>    Array</li>
          <li>Object</li>
          <li>NULL</li>
          <li>Resource</li>
				</ul>
         <p>All variables in PHP are denoted with a leading dollar sign ($).The value of a variable is the value of its most recent assignment.</p>
         <p> Variables are assigned with the = operator, with the variable on the left-hand side and the expression to be evaluated on the right.</p>
         <p> Variables can, but do not need, to be declared before assignment. Variables in PHP do not have intrinsic types - a variable does not know in advance whether it will be used to store a<br> number or a string of characters. Variables used before they are assigned have default values.PHP does a good job of automatically converting types from one to another when necessary.<br>PHP variables are Perl-like.</p>
		<h3>Variable Scope</h3>
        <p>Scope can be defined as the range of availability a variable has to the program in which it is declared. PHP variables can be one of four scope types -</p>		
       <ul>
        <li>local variables</li>
        <li>Function parameters</li>
        <li>Global variables</li>
        <li>Static variables</li>
       </ul>
       <h3>Doubles</h3>
       <p>They like 3.14159 or 49.1. By default, doubles print with the minimum number of decimal places needed. For example, the code -</p>
        </div>
		<div class="mbodyinner2">
		<h3>Example</h3>
			<div class="codeback"><xmp><html>< ?php
   $many = 2.2888800;
   $many_2 = 2.2111200;
   $few = $many + $many_2;
   
   print("$many + $many_2 = $few <br>");
? ></html>
   
</xmp></div>
				</div>
		<div class="mbodyinner3">
			<ul><h3>Boolean</h3></ul>
            <p>They have only two possible values either true or false. PHP provides a couple of constants especially for use as Booleans: TRUE and FALSE, which can be used like so -</p>
       </div>     <div class="mbodyinner2">
		<h3>Example</h3>
			<div class="codeback"><xmp>
            if (TRUE)
   print("This will always print<br>");

else
   print("This will never print<br>");

   
</xmp></div>
				</div>
                <div class="mbodyinner3">
			<ul><h3>String</h3></ul>
            <p>A string is a sequence of characters, like "Hello world!".
<br>A string can be any text inside quotes. You can use single or double quotes:
</p>
       </div>     <div class="mbodyinner2">
		<h3>Example</h3>
			<div class="codeback"><xmp>
            < ?php
$x = "Hello world!";
$y = 'Hello world!';

echo $x;
echo "<br>"; 
echo $y;
? >
</xmp></div>
				</div>
			
		<div class="mbodyinner4" id="font">
		<h3 style="font-weight:bold">CONSTANT AND VARIABLES </h3>
		A constant is a name or an identifier for a simple value. A constant value cannot change during the execution of the script. By default, a constant is case-sensitive. To define a constant you have to use define() function and to retrieve the value of a constant, we have to simply specifying its name. Unlike with variables, we do not need to have a constant with a $.	<br >
			<h1>constant() function</h1>
			<ul>
				<p>As indicated by the name, this function will return the value of the constant.This is useful when we want to retrieve value of a constant, but we do not know its name, i.e. it is stored in a variable or returned by a function.</p>
			</ul>
            <h2>Syntax</h2>
            <ul>
              <p>define (name, value, case-insensitive)</p>
               <p>Parameters:</p>
               <li>name: Specifies the name of the constant</li>
               <li>value: Specifies the value of the constant </li>
               <li>Case-insensitive: Specifies whether the constant name should be case-insensitive. Default is false </li> 
            </ul>
		</div>
        <div class="mbodyinner2">
		<h3>Example</h3>
			<div class="codeback">
            &lt;?php<br/>

define("GREETING", "Welcome to Php!");<br>

function myTest()<br> 
{<br>
    echo GREETING;
}<br>
 
myTest();
<br>
?&gt;

</div>
				</div>
		<div class="mbodyinner5" id="font">
			<h3 style="font-weight: bold">VARIABLES</h3>
		Variables are used for storing values like text strings, number or array.<br > The name of PHP variables must follow a certain number of rules.<br>
PHP variables must start with the symbol $ followed by a letter or by an Under scope.
<h4>MANAGING VARIABLES</h4>
<ul>
   <p>Three language constraints are used to manage variables to choice of check, if most remove variables and check variables both values.</p>
   <li>ISSET() : It determines whether a certain variables has already been declared at php. It returns a Boolean a certain variable has already has been declared by PHP. 
Checking an array element
If((insert($arr[“offset])))
Checking an object element
If((isset($obj-property)))
Isset() construct return false automatically if not. It is the only one of the three language constructs that accepts an arbitrary extends of parameters.
</li>
<li>
UNSET() : “undeclared” a previously set variable, and tree any memory that was used by if no other variables references its value. A call to isset() on a variables that been unset() return false. Unset() can also used an array elements and object properties similar to isset()
</li>
<li>EMPTY() : It may be used to check if a variables has not been declared or its value is false. This language contract is usually used to check if a form variables has not been set or does not contain data. When checking a variables truth value. Its value is first converted to a Boolean according to the truth, then it is checked for TRUE/FALSE.</li>
</ul>
		</div>
        
		<div class="mbodyinner6" id="font">
			<h3 style="font-weight: bold">PHP Magic constants</h3>
A few "magical" PHP constants ate given below -
			<table class="table table-striped" style="width: 700px">
			<tr>
				<th>Sr.No</th>
				<th align="center">Name & Description</th>
			</tr>
				<tr>
					<td>1</td>
					<td>__LINE__<br >
The current line number of the file.
</td>
				</tr>
				<tr>
					<td> 2</td>
					<td>__FILE__<br >
The full path and filename of the file. If used inside an include,the name of the included file is returned. Since PHP 4.0.2, __FILE__ always contains an absolute path whereas in older versions it contained relative path under some circumstances.
</td>
				</tr>
				<tr>
					<td>3</td>
					<td>__FUNCTION__<br>
The function name. (Added in PHP 4.3.0) As of PHP 5 this constant returns the function name as it was declared (case-sensitive). In PHP 4 its value is always lowercased.
</td>
				</tr>
				<tr>
					<td>4</td>
					<td>__CLASS__<br >
The class name. (Added in PHP 4.3.0) As of PHP 5 this constant returns the class name as it was declared (case-sensitive). In PHP 4 its value is always lowercased.
</td>
				</tr>
				<TR>
					<td>5</td>
					<td>__METHOD__<br>
The class method name. (Added in PHP 5.0.0) The method name is returned as it was declared (case-sensitive).
</td>
				</TR>
				
			</table>
		</div>
		
		
		
	
		
		
		
		
		
		</div>
				<div class="foot">
					<ul class="pagination">
    				<li ><a href="php1.php">1</a></li>
    				<li class="active"><a href="php2.php">2</a></li>
    				<li><a href="php3.php">3</a></li>
    				<li><a href="php4.php">4</a></li>
    				<li><a href="php5.php">5</a></li>
					</ul>
				</div>
	</div>
    </div>
</body>
</html>



