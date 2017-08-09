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
		height: 4055px;
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
		height: 3820px;
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
				<ul>	<h3>OPERATORS</h3>
                <p>Operators are used to perform operations on variables and values. </p>
                 <p>PHP divides the operators in the following groups: </p>
                <h4>Precedence of PHP Operators</h4>
         <p>Operator precedence determines the grouping of terms in an expression. This affects how an expression is evaluated. Certain operators have higher precedence than others; for example, the multiplication operator has higher precedence than the addition operator -</p>
         <p>Here operators with the highest precedence appear at the top of the table, those with the lowest appear at the bottom. Within an expression, higher precedence operators will be evaluated first.</p>
          <div class="mbodyinner6" id="font">
			<table class="table table-striped" style="width: 700px">
			<tr>
				<th>Category</th>
				<th align="center">Operator</th>
                <th>Associativity</th>
			</tr>
				<tr>
					<td>Unary</td>
					<td>! ++ --</td>
                    <td>Right to left</td>
				</tr>
				<tr>
					<td>Multiplicative</td>
					<td>* / %</td>
                    <td>Left to right</td>
				</tr>
				<tr>
					<td>Additive</td>
					<td>+ -</td>
                    <td>Left to right</td>
				</tr>
				<tr>
					<td>Relational</td>
					<td>< <= > >=</td>
                    <td>Left to right</td>
				</tr>
				<TR>
					<td>Equality</td>
					<td>== !=</td>
                    <td>Left to right</td>
				</TR>
                <tr>
					<td>Logical AND</td>
					<td>&&</td>
                    <td>Left to right</td>
				</tr>
                <tr>
					<td>Logical OR</td>
					<td>||</td>
                    <td>Left to right</td>
				</tr>
                <tr>
					<td>Conditional</td>
					<td>?:</td>
                    <td>Right to left</td>
				</tr>
                <tr>
					<td>Assignment</td>
					<td>= += -= *= /= %=</td>
                    <td>Right to left</td>
				</tr>
				
			</table>
		</div>
		</ul>
         
       <h3>Operators Categories</h3>
       <p>All the operators we have discussed above can be categorized into following categories -</p>
        <ul>
          <li>Unary prefix operators, which precede a single operand.</li>
           <li>Binary operators, which take two operands and perform a variety of arithmetic and logical operations.</li>
           <li>The conditional operator (a ternary operator), which takes three operands and evaluates either the second or third expression, depending on the evaluation of the first expression.</li>
           <li>Assignment operators, which assign a value to a variable.</li>
        </ul>
        <h3>DECISION MAKING</h3>
        <p>Very often we write code, we want to perform different actions for different conditions</p>
        <p>In PHP we have the following conditional statements:</p>
         <ul>
            <li>if statement - executes some code if one condition is true</li>
            <li>if...else statement - executes some code if a condition is true and another code if that condition is false</li>
            <li>if...elseif....else statement - executes different codes for more than two conditions</li>
            <li>switch statement - selects one of many blocks of code to be executed</li>
         </ul>
         <h4>The if Statement</h4>
         <p>The if statement executes some code if one condition is true.</p>
        </div>
		<div class="mbodyinner2">
		<h3>Example</h3>
			<div class="codeback"><xmp>
            < ?php

$t = date("H");

if ($t < "20") {
    echo "Have a good day!";
}

?>


   
</xmp></div>
				</div>
		<div class="mbodyinner3">
			<ul><h3>The if...else Statement</h3></ul>
            <p>If a condition is true and another code if a condition is false, use the if....else statement.</p>
       </div>     
       <div class="mbodyinner2">
		<h3>Example</h3>
			<div class="codeback"><xmp>
            < ?php
$t = date("H");

if ($t < "20") {
    echo "Have a good day!";
} else {
    echo "Have a good night!";
}
?>

   
</xmp></div>
				</div>
                <div class="mbodyinner3">
			<ul><h3>
The if...else if....else Statement
</h3></ul>
            <p>If we want to execute some code if one of the several conditions are true use the elseif statement</p>
       </div>     <div class="mbodyinner2">
		<h3>Example</h3>
			<div class="codeback"><xmp>
            < ?php
         $d = date("D");
         
         if ($d == "Fri"){
            echo "Have a nice weekend!";
         }
         elseif ($d == "Sun"){
            echo "Have a nice Sunday!"; 
         }
         Else{
            echo "Have a nice day!"; 
      }
   ?>

</xmp></div>
				</div>
			
		<div class="mbodyinner4" id="font">
		<h3 style="font-weight:bold">The Switch Statement</h3>
		The switch statement works in an unusual way. If a matching value is found then the code associated with the matching label will be executed or if none of the lable matches then statement will execute any specified default code.
        <div class="mbodyinner2">
		<h3>Example</h3>
			<div class="codeback"><xmp>
            < ?php
$d = date("D");
         
         switch ($d){
            case "Mon":
               echo "Today is Monday";
               break;            
            case "Tue":
               echo "Today is Tuesday";
               break;
            case "Wed":
               echo "Today is Wednesday";
               break;            
            case "Thu":
               echo "Today is Thursday";
               break;            
            case "Fri":
               echo "Today is Friday";
               break;            
            case "Sat":
               echo "Today is Saturday";
               break;            
            case "Sun":
               echo "Today is Sunday";
               break;            
            default:
               echo "Wonder which day is this ?";
         }

   ?>


</xmp></div>
				</div>
				
		</div>
        
		<div class="mbodyinner5" id="font">
			<h3 style="font-weight: bold">LOOPING</h3>
            Loops in PHP are used to execute the same block of code a specified number of times. PHP supports following four loop types.
		<ul>
           <li>for - loops through a block of code a specified number of times.</li>
           <li>while - loops through a block of code if and as long as a specified condition is true.</li>
           <li>do...while - loops through a block of code once, and then repeats the loop as long as a special condition is true.</li>
           <li>foreach - loops through a block of code for each element in an array.</li>
         </ul>
		</div>
    	<div class="mbodyinner3">
			<ul><h3>TYPE JUGGLING</h3>
            <p>PHP does not require explicit type definition in variables declaration. A variable is type is determined by the context in which the variable is used. If is a string value is assigned to $var it become a string. If an integer value is then assigned to $var it become an integer. PHP automatically determines a variables data type from the content it holds. This is called Type Juggling. </p>
                <h4>PHP Type casting</h4>
            <p>PHP does not require or support type definition of the variable. In php we never define data type while declaring the variable. In PHP variables automatically decide the data type on the basis of the value assignment or context. PHP type casting works same as C programming. Desired data type name with parenthesis before the variable which we need to cast.</p>
           <div class="mbodyinner2">
		<h3>Example</h3>
			<div class="codeback"><xmp>
           < ?php
$i=1;
Var_dump($i); //$i is integer
$i=2.3;
Var_dump($i); //$i is float
$i= “Type casting” ;
Var_dump($i) //$i is string
   ?>


</xmp></div>
				</div>
         
       </ul>
       </div> 
       	<div class="mbodyinner3">
			<ul><h3>ARRAY</h3>
            <p>An array is a special variable, which can hold more than one value at a time. An array is a data structure that stores one or more similar type of values in a single value. For example if you want to store 100 numbers then instead of defining 100 variables it’s easy to define an array of 100 lengths.</p>
            <p>There are three different kind of arrays and each array value is accessed using an ID c which is called array index.</p>
          <li><b>Numeric array</b> - an array with a numeric index. Values are stored and accessed in linear fashion.</li>
          <li><b>Associative array</b> - an array with strings as index. This stores element values in association with key values rather than in a strict linear index order.</li>
          <li><b>Multidimensional array</b> - An array containing one or more arrays and values are accessed using multiple indices</li>
         
       </ul>
       </div> 
           
		</div>
				<div class="foot">
					<ul class="pagination">
    				<li><a href="php1.php">1</a></li>
    				<li><a href="php2.php">2</a></li>
    				<li class="active"><a href="php3.php">3</a></li>
    				<li><a href="php4.php">4</a></li>
    				<li><a href="php5.php">5</a></li>
					</ul>
				</div>
	</div>
    </div>
</body>
</html>