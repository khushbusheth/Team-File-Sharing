<?php
print_r($_FILES);
$target_dir = './others';
    
	if ($_FILES["file"]["error"] > 0) {
		echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
	}
    $result = mkdir($target_dir,0755);
	if($result==1)
	{
      echo $target_dir."has been created";
	} 
	else
	{
      echo $target_dir." exists!!";
	  echo " ";
	}
echo "Upload Dir: $target_dir";
$uploadfile = $target_dir . '/' . basename($_FILES['file_contents']['name']);
echo '<pre>';
	if (move_uploaded_file($_FILES['file_contents']['tmp_name'], $uploadfile)) {
	    echo "File is valid, and was successfully uploaded.\n";
	} else {
	    echo "Possible file upload attack!\n";
	}
	echo 'Here is some more debugging info:';
	//print_r($_FILES);
	echo "\n<hr />\n";
	print_r($_POST);
print "</pr" . "e>\n";
?>
