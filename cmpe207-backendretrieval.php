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

$email = $_POST['EmailID'];

$sql = "SELECT * FROM User_Info where `Email ID` = '$email' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) {
         echo "<br><strong> REQUESTED INFORMATION IS DISPLAYED BELOW </strong>" . "<br><br>" ." <strong>First Name: </strong>" .$row["First Name"]. "<br>"."<strong> Last Name: </strong>".$row["Last Name"]."<br>". "<strong> Email ID: </strong>".$row["Email ID"]. "<br>". "<strong> Gender: </strong>".$row["Gender"]."<br>"."<strong> Suggestion: </strong>".$row["Suggestion"];
     }
} else {
     echo "0 results found";
}

$conn->close();
?>  
</body>
</html>