<html>
<head>
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
	<title></title>
	<link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" />
	<link href="styles/tut.css" rel="stylesheet" />
	<link href="styles/tooltips.css" rel="stylesheet" /><script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
	<style type="text/css">body {
margin:0px auto;
text-align: center;
background-image:url('floral.jpeg');
background-repeat:no-repeat;
background-size:cover;

}

form {display: inline-block;}

div {
text-align:center;
width: 250px;
height: 350px;
box-shadow: 10px 10px 5px #888888;
background-color: pink;
}
h1 {
text-shadow: 2px 2px 5px #FFFFFF;
    color: Green;
    text-align: center;
}
p{ color: green; }
p1 {color:maroon;
    font-family: "Times New Roman";
    font-size: 20px;
}
p {
    font-family: "Times New Roman";
    font-size: 20px;
}

.left {
    position: absolute;
    left: -40px;
}
.search-box,.close-icon,.search-wrapper {
	position: relative;
}
.search-wrapper {
	width: 150px;
	margin: auto;
	margin-top: 20px;
}
.search-box {
	width: 90%;
	border: 1px solid #ccc;
  outline: 0;
  border-radius: 5px;
}
.search-box:focus {
	box-shadow: 0 0 5px 5px #b0e0ee;
	border: 0.5px #bebede;
}
.close-icon {
	border:1px solid transparent;
	background-color: transparent;
	display: inline-block;
	vertical-align: middle;
  outline: 0;
  cursor: pointer;
}
.close-icon:after {
	content: "X";
	display: block;
	width: 20px;
	height: 20px;
	position: absolute;
	background-color: #CC3300;
	top: 0;
	bottom: 0;
	margin: auto;
	padding: 2px;
	border-radius: 50%;
	text-align: center;
	color: white;
	font-weight: normal;
	font-size: 12px;
	box-shadow: 0 0 2px #E50F0F;
	cursor: pointer;
}
.search-box:not(:valid) ~ .close-icon {
	display: none;
}
	</style>
	<script>
	function warning(){
	alert("Note: The user must have a password with at least 1 uppercase letter, 1 lowercase letter, 1 number and 1 special character.");
	}
	function eraseText1() {
    document.getElementById("first name").value = "";
}
function eraseText2() {
    document.getElementById("last name").value = "";
}
function eraseText3() {
    document.getElementById("email id").value = "";
}
function eraseText4() {
    document.getElementById("password").value = "";
}
function eraseText5() {
    document.getElementById("re-password").value = "";
}
function match(){
var pwd= document.getElementById("password").value;
var repwd= document.getElementById("re-password").value
if(pwd === repwd)
{
	document.getElementById('signupform').action="signupwitherrormsg.php";
}
else
{
	alert("Both the passwords do not match!! Check again and enter correctly.");
}
}
</script>
</head>
<body>
<p></p>

<p></p>

<p></p>

<h1>Expressions!</h1>
<p1><strong>Create your own photo album.</strong></p1>

<p></p>

<p></p>

<p></p>

<p></p>

<p></p>

<p></p>

<p></p>

<p><br />
&nbsp;</p>

<p></p>

<p></p>

<p></p>

<p></p>

<p></p>

<p></p>

<p></p>

<p>Fill in your details to create an account!</p>

<p></p>

<p></p>

<p></p>

<p></p>

<p></p>

<p></p>

<p></p>

<p><!-- <div class="container"  align='centre'> --></p>

<p></p>

<p></p>

<p></p>

<p></p>

<p></p>

<p></p>

<p></p>

<div class="search-wrapper">
<form class="form-inline left" role="form" method ="post" id="signupform">
<div class="form-group">
<p></p>

<p></p>

<p><input class="search-box form-control" id="first name" name="fname" placeholder="Enter First Name" required="" type="first name" /><button class="close-icon" onclick="javascript:eraseText1();" title="clear field" type="button"></button></p>

<p><input class="search-box form-control" id="last name" name="lname" placeholder="Enter Last Name" required="" type="last name" /><button class="close-icon" onclick="javascript:eraseText2();" title="clear field" type="button"></button></p>

<p><input class="search-box form-control" id="email id" name="emailid" placeholder="Enter Email ID" required="" type="email id" /><button class="close-icon" onclick="javascript:eraseText3();" title="clear field" type="button"></button></p>

<p><input class="search-box form-control" id="password" name="pwd" placeholder="Enter Password" required="" type="password" onclick="javascript:warning();"  /><button class="close-icon" onclick="javascript:eraseText4();" title="clear field" type="button"></button></p>

<p><input class="search-box form-control" id="re-password" name="repwd" placeholder="Re-enter Password" required="" type="password" /><button class="close-icon" onclick="javascript:eraseText5();" title="clear field" type="button"></button></p>

<p><br />
<input class="btn btn-info btn-lg" title="submit" type="submit" value="Submit" onclick="javascript:match();" /> <input class="btn btn-info btn-lg " title="clear all info" type="reset" value="Clear" /> <!-- </div> --></p>
</div>
</form>
</div>

<p></p>

<p></p>

<p></p>

<p></p>

<p></p>

<p></p>

<p></p>
</body>
<body>
<center><strong> <?php
date_default_timezone_set('America/Los_Angeles'); 
echo date("h:i:sa");
echo " ";
echo date("l, F j, Y T") ?></strong></center>
<?php
$servername = "localhost";
$username = "grath";
$password = "Sameer1dash";
$dbname = "Gayatri-Database1";
$i=0;
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
}
$firstname = $_POST['fname'];
$lastname = $_POST['lname'];
$email = $_POST['emailid'];
$password = $_POST['pwd'];
$re_password= $_POST['repwd'];
$domain=strstr($email,'@');
$domain1=substr($domain,1);
$has_dns_mx_record = checkdnsrr($domain1,"MX");
if(strlen($email)>256)
{
	$i=1;
	echo "ERROR!Email id  cannot exceed 256 characters";
	die();
	
}
if(!filter_var($email, FILTER_VALIDATE_EMAIL))
{
	$i=1;
	//echo"ERROR!The EMAIL ID IS not a a valid one !\n";
	echo '<span style="color:red; text-align:center;">ERROR! The EMAIL ID is not a valid one!</span>';
	die();
}
if($has_dns_mx_record==false)
{
	$i=1;
	echo '<span style="color:red; text-align:center;">ERROR! This domain does not exist!!! Please enter a proper email id.</span>';	
	die();
}
if(!(preg_match("/[A-Z]+/",$password)))
{
	$i=1;
	echo '<span style="color:red; text-align:center;">ERROR! The password must contain atleast one capital alphabet.</span>';
	die();
}
if(!(preg_match("/[0-9]+/",$password)))
{
	$i=1;
	echo " ERROR! The Password must contain atleast one number\n";
	die();
}

if(!(preg_match("/[a-z]+/",$password)))
{
	$i=1;
	echo " ERROR! The Password must contain atleast one small alphabet\n";
	die();
}
if(!(preg_match('/[#@!$%^&*()+=\-\[\]\';,.\/{}|":<>?~\\\\"]+/',$password)))
{
	echo "ERROR! The Password must contain atleast one special character\n";
	$i=1;
	die();
}
$sql2="SELECT * FROM `Login_Table` where `Email ID`='$email'";
$result1=$conn->query($sql2);
$row=$result1->fetch_assoc();
if($row)
{
	$i=1;
	echo " ERROR! The User Already Exists .Please Give a unique email id !!!";
	die();
}

if($i==0)
{
$sql = "INSERT INTO Login_Table VALUES ('$email', '$password','$firstname','$lastname')";


if ($conn->query($sql) === TRUE) {
echo "<h1>Hello ".$firstname."</h1>". "<h2>THANK YOU for registering on EXPRESSIONS</h2> <br/>";

echo "<h3>Your account has been created successfully!</h3>";
echo "<center><strong>Click <a href=login.html>here</a> to Log In</strong></center>";
} 
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
$conn->close();
?>
</body>
</html>