<?php
session_start();
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
$email = $_POST['username'];
$pass= $_POST['pwd'];
$domain=strstr($email,'@');
$domain1=substr($domain,1);
$has_dns_mx_record = checkdnsrr($domain1,"MX");
if(!filter_var($email, FILTER_VALIDATE_EMAIL))
{
    $i=1;
    echo '<span style="color:red; text-align:center;">ERROR! The EMAIL ID is not a valid one!</span>';
    die();
}
if($has_dns_mx_record==false)
{
    echo '<span style="color:red; text-align:center;">ERROR! This domain does not exist!!! Please enter a proper email id.</span>';
    $i=1;
    die();
}
if($i==0)
{    
$sql = "SELECT * FROM Login_Table where `Email ID` = '$email'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
if(!($row))
{
    $i=1;
    echo '<span style="color:red; text-align:center;">ERROR! This EMAIL ID  does not exist in our records. Please check your EMAIL ID !!!</span>';
    echo "<a href=login.html> Try again</a>";
} 
else
{    
if(strcmp($row["Password"],$pass)==0)
{
    $_SESSION['login_user']=$email; 
$a=header("Location:homepage.php?firstname=".urlencode("$email"),true);
var_dump($a);
exit;
}
else
{
    echo '<span style="color:red; text-align:center;">ERROR! INVALID EMAIL ID or PASSWORD!!!</span>';
}
 
}
}
$conn->close();
?>
