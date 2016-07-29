<html>
<head>
	<title></title>
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
	<style type="text/css">
	body {
margin:0px auto;
text-align: center;
background-image:url('confirmation.jpg');
background-repeat:no-repeat;
background-size:cover;

}
	</style>
</head>
<body>
<center><strong> <?php
date_default_timezone_set('America/Los_Angeles'); 
echo date("h:i:sa");
echo " ";
echo date("l, F j, Y T") ?></strong></center>
<HR>
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