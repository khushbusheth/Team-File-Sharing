<?php
$upload_dir = './uploads';
print_r($_POST);

/* Check if parameters are passed good */
echo '<pre>';
if (isset($_FILES['userfile'])) {
    echo "Userfile is set<p>";
} else {
    echo "Userfile is not set<p>\n";
}
echo '</pre>';

echo '<pre>';
/* Check if POST method parameters good */
if (isset($_POST['uploaddir'])) {
    echo "uploaddir = $upload_dir<p>";
} else {
    echo "uploaddir set to `uploads`<p>";
}
echo '</pre>';

if (file_exists($upload_dir) == false) {
    mkdir($upload_dir);
    echo "Created directory $upload_dir<p>";
}

echo '<pre> Checking file reception<p>';
/* Checking file reception */
echo $_FILES['userfile']['name'], "<p>";
echo $_FILES['userfile']['tmp_name'], "<p>";
echo '</pre>';

if (is_uploaded_file($_FILES['userfile']['tmp_name'])) {
	echo "File uploaded as ";
	echo $_FILES['userfile']['tmp_name'], "<p>";
	//readfile($_FILES['userfile']['tmp_name']);
}

$dest = $_FILES['userfile']['name'];
if(is_uploaded_file($_FILES['userfile']['tmp_name'])) {
echo  "File ".  $_FILES['userfile']['name']  ." uploaded successfully to $upload_dir/$dest.\n";
move_uploaded_file ($_FILES['userfile'] ['tmp_name'], "$upload_dir/$dest");
} else {
echo "Possible file upload attack: ";
echo "filename '". $_FILES['userfile']['tmp_name'] . "'.";
print_r($_FILES);
}
?>
