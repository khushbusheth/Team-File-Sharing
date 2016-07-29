<?php
echo 'hi';
error_reporting(E_ERROR | E_PARSE); 
$i=1;
$email = $_GET[varname];
//$target_dir ="./Uploads111/";
$target_dir = "./$email/";
//echo $email;
$result=mkdir($target_dir,0777);
if($result==1){
      echo $target_dir."has been created";
} else{
      echo $target_dir." exists!!";
	  echo " ";
	  }
$filename=$target_dir . '/'.basename($_FILES["fileToUpload"]["name"]);//Appends the filename to directory //path

	  
if (file_exists($filename)) {
    echo "**Sorry, file already exists.";
    $i = 0;
	}
if($i==0)
{
	echo "**Error in uploading the file";
}
else{
	if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $filename)) {
        echo " Success!!!";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
 
$target_url = 'http://group9sjsucom.fatcow.com/CMPE207/receivefinal.php';
$file_name_with_full_path = realpath($filename);
echo "File name with full path: ".$file_name_with_full_path;
$headers = array('Content-Type: multipart/form-data');
 
$post = array('extra_info' => '123456','file_contents'=>'@'.$file_name_with_full_path);
 
$ch = curl_init();
$size = filesize($file_name_with_full_path);
 
curl_setopt($ch, CURLOPT_URL,$target_url);
curl_setopt($ch, CURLOPT_HEADER,true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
 
curl_setopt($ch, CURLOPT_POST,1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch, CURLOPT_INFILESIZE,$size);
 
$response = curl_exec($ch);
if(!curl_errno($ch))
    {
        $info = curl_getinfo($ch);
        if ($info['http_code'] == 200)
            $errmsg = "File uploaded successfully";
    }
    else
    {
        $errmsg = curl_error($ch);
        echo "Error msg: ".$errmsg;
    }
    //echo "Response: $response";
    curl_close($ch);
 
$target_url = 'http://srikantreddy.com/receivefinal.php';
$file_name_with_full_path = realpath($filename);
echo "File name with full path: ".$file_name_with_full_path;
$headers = array('Content-Type: multipart/form-data');
 
$post = array('extra_info' => '123456','file_contents'=>'@'.$file_name_with_full_path);
 
$ch = curl_init();
$size = filesize($file_name_with_full_path);
 
curl_setopt($ch, CURLOPT_URL,$target_url);
curl_setopt($ch, CURLOPT_HEADER,true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
 
curl_setopt($ch, CURLOPT_POST,1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch, CURLOPT_INFILESIZE,$size);
 
$response = curl_exec($ch);
if(!curl_errno($ch))
    {
        $info = curl_getinfo($ch);
        if ($info['http_code'] == 200)
            $errmsg = "File uploaded successfully";
    }
    else
    {
        $errmsg = curl_error($ch);
        echo "Error msg: ".$errmsg;
    }
    //echo "Response: $response";
    curl_close($ch);
 
$target_url = 'http://priyankamalviya.com/receivefinal.php';
$file_name_with_full_path = realpath($filename);
echo "File name with full path: ".$file_name_with_full_path;
$headers = array('Content-Type: multipart/form-data');
 
$post = array('extra_info' => '123456','file_contents'=>'@'.$file_name_with_full_path);
 
$ch = curl_init();
$size = filesize($file_name_with_full_path);
 
curl_setopt($ch, CURLOPT_URL,$target_url);
curl_setopt($ch, CURLOPT_HEADER,true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
 
curl_setopt($ch, CURLOPT_POST,1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch, CURLOPT_INFILESIZE,$size);
 
$response = curl_exec($ch);
if(!curl_errno($ch))
    {
        $info = curl_getinfo($ch);
        if ($info['http_code'] == 200)
            $errmsg = "File uploaded successfully";
    }
    else
    {
        $errmsg = curl_error($ch);
        echo "Error msg: ".$errmsg;
    }
    //echo "Response: $response";
    curl_close($ch);
 
$target_url = 'http://khushbusheth.com/project/receivefinal.php';
$file_name_with_full_path = realpath($filename);
echo "File name with full path: ".$file_name_with_full_path;
$headers = array('Content-Type: multipart/form-data');
 
$post = array('extra_info' => '123456','file_contents'=>'@'.$file_name_with_full_path);
 
$ch = curl_init();
$size = filesize($file_name_with_full_path);
 
curl_setopt($ch, CURLOPT_URL,$target_url);
curl_setopt($ch, CURLOPT_HEADER,true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
 
curl_setopt($ch, CURLOPT_POST,1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch, CURLOPT_INFILESIZE,$size);
 
$response = curl_exec($ch);
if(!curl_errno($ch))
    {
        $info = curl_getinfo($ch);
        if ($info['http_code'] == 200)
            $errmsg = "File uploaded successfully";
    }
    else
    {
        $errmsg = curl_error($ch);
        echo "Error msg: ".$errmsg;
    }
    //echo "Response: $response";
    curl_close($ch);
 
$target_url = 'http://ciphernuvola.com/receivefinal%20.php';
$file_name_with_full_path = realpath($filename);
echo "File name with full path: ".$file_name_with_full_path;
$headers = array('Content-Type: multipart/form-data');
 
$post = array('extra_info' => '123456','file_contents'=>'@'.$file_name_with_full_path);
 
$ch = curl_init();
$size = filesize($file_name_with_full_path);
 
curl_setopt($ch, CURLOPT_URL,$target_url);
curl_setopt($ch, CURLOPT_HEADER,true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
 
curl_setopt($ch, CURLOPT_POST,1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch, CURLOPT_INFILESIZE,$size);
 
$response = curl_exec($ch);
if(!curl_errno($ch))
    {
        $info = curl_getinfo($ch);
        if ($info['http_code'] == 200)
            $errmsg = "File uploaded successfully";
    }
    else
    {
        $errmsg = curl_error($ch);
        echo "Error msg: ".$errmsg;
    }
    //echo "Response: $response";
    curl_close($ch);  
     
?>