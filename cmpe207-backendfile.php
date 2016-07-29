<html>
<body>
<center><strong><?php 
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

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$fname = $_POST['FirstName'];
$lname = $_POST['LastName'];
$email = $_POST['EmailID'];
$gender = $_POST['sex'];
$sug = $_POST['Suggestion'];

//$sql = "INSERT INTO User_Info VALUES ('$_POST['First Name']','$_POST['Last Name']','$_POST['Email ID']','$_POST['sex']','$_POST['Suggestion']')";
//$sql = "INSERT INTO User_Info VALUES (10)";
$sql = "INSERT INTO User_Info VALUES ('$fname','$lname','$email','$gender','$sug')";

if ($conn->query($sql) === TRUE) {
    echo "Record created successfully!!"."<br><br>";
    echo "Thank you ";
    echo $fname. " ". $lname. " for suggesting:  ". $sug;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
</body>
</html>