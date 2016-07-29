<?php
session_start();
   if(!isset($_SESSION['login_user']))
   {
        header('Location: login.html');
   }
?>
<!DOCTYPE html>
<html lang="en">
<style>
 
.thumbnail {
    margin-right: 5px;
    margin-bottom: 5px;
    float:left;
    width:400px;
    height:300px;
    background-color:yellow;
}
.item {
    margin-right: 5px;
    margin-bottom: 5px;
    float:left;
    width:800px;
    height:500px;
    background-color:white;
}
.main {
 
    background: #aaa url(../images/bg.jpg) no-repeat;
 
    width: 800px;
 
    height: 600px;
 
    margin: 50px auto;
 
}
 
.panel {
 
    background-color: #444;
 
    height: 34px;
 
    padding: 10px;
 
}
 
.panel a#login_pop, .panel a#join_pop {
 
    border: 2px solid #aaa;
 
    color: #fff;
 
    display: block;
 
    float: right;
 
    margin-right: 10px;
 
    padding: 5px 10px;
 
    text-decoration: none;
 
    text-shadow: 1px 1px #000;
 
  
 
    -webkit-border-radius: 10px;
 
    -moz-border-radius: 10px;
 
    -ms-border-radius: 10px;
 
    -o-border-radius: 10px;
 
    border-radius: 10px;
 
}
 
a#login_pop:hover, a#join_pop:hover {
 
    border-color: #eee;
 
}
 
.overlay {
 
    background-color: rgba(0, 0, 0, 0.6);
 
    bottom: 0;
 
    cursor: default;
 
    left: 0;
 
    opacity: 0;
 
    position: fixed;
 
    right: 0;
 
    top: 0;
 
    visibility: hidden;
 
    z-index: 1;
 
  
 
    -webkit-transition: opacity .5s;
 
    -moz-transition: opacity .5s;
 
    -ms-transition: opacity .5s;
 
    -o-transition: opacity .5s;
 
    transition: opacity .5s;
 
}
 
.overlay:target {
 
    visibility: visible;
 
    opacity: 1;
 
}
 
.popup {
 
    background-color: #fff;
 
    border: 3px solid #fff;
 
    display: inline-block;
 
    left: 50%;
 
    opacity: 0;
 
    padding: 15px;
 
    position: fixed;
 
    text-align: justify;
 
    top: 40%;
 
    visibility: hidden;
 
    z-index: 10;
 
 
    -webkit-transform: translate(-50%, -50%);
 
    -moz-transform: translate(-50%, -50%);
 
    -ms-transform: translate(-50%, -50%);
 
    -o-transform: translate(-50%, -50%);
 
    transform: translate(-50%, -50%);
 
  
 
    -webkit-border-radius: 10px;
 
    -moz-border-radius: 10px;
 
    -ms-border-radius: 10px;
 
    -o-border-radius: 10px;
 
    border-radius: 10px;
 
  
 
    -webkit-box-shadow: 0 1px 1px 2px rgba(0, 0, 0, 0.4) inset;
 
    -moz-box-shadow: 0 1px 1px 2px rgba(0, 0, 0, 0.4) inset;
 
    -ms-box-shadow: 0 1px 1px 2px rgba(0, 0, 0, 0.4) inset;
 
    -o-box-shadow: 0 1px 1px 2px rgba(0, 0, 0, 0.4) inset;
 
    box-shadow: 0 1px 1px 2px rgba(0, 0, 0, 0.4) inset;
 
 
    -webkit-transition: opacity .5s, top .5s;
 
    -moz-transition: opacity .5s, top .5s;
 
    -ms-transition: opacity .5s, top .5s;
 
    -o-transition: opacity .5s, top .5s;
    transition: opacity .5s, top .5s;
 
}
 
.overlay:target+.popup {
 
    top: 50%;
 
    opacity: 0.8;
 
    visibility: visible;
 
}
 
.close {
 
    background-color: rgba(0, 0, 0, 0.8);
 
    height: 30px;
 
    line-height: 30px;
 
    position: absolute;
 
    right: 0;
 
    text-align: center;
 
    text-decoration: none;
 
    top: -15px;
 
    width: 30px;
 
  
 
    -webkit-border-radius: 15px;
 
    -moz-border-radius: 15px;
 
    -ms-border-radius: 15px;
 
    -o-border-radius: 15px;
 
    border-radius: 15px;
 
}
 
.close:before {
 
    color: rgba(255, 255, 255, 0.9);
 
    content: "X";
 
    font-size: 24px;
 
    text-shadow: 0 -1px rgba(0, 0, 0, 0.9);
 
}
.close:hover {
    background-color: rgba(64, 128, 128, 0.8);
 
}
 
.popup p, .popup div {
 
    margin-bottom: 10px;
 
}
 
.popup label {
 
    display: inline-block;
   text-align: left;
 
    width: 120px;
 
}
.popup input[type="text"], .popup input[type="password"] {
 
    border: 1px solid;
 
    border-color: #999 #ccc #ccc;
 
    margin: 0;
   padding: 2px;
 
  
 
    -webkit-border-radius: 2px;
 
    -moz-border-radius: 2px;
 
    -ms-border-radius: 2px;
 
    -o-border-radius: 2px;
 
    border-radius: 2px;
}
 
.popup input[type="text"]:hover, .popup input[type="password"]:hover {
 
    border-color: #555 #888 #888;
 
}
</style>
 
<head>
 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
 
    <title>Expressions 
       
    </title>
 
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
 
    <!-- Custom CSS -->
    <link href="css/shop-homepage.css" rel="stylesheet">
     <link href="css/layout.css" rel="stylesheet" type="text/css" />
        
   <link href="css/modal.css" rel="stylesheet" type="text/css" />
 
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
 
</head>
 
<body>
 
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Expressions</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                    <?php $servername = "localhost";
$username = "grath";
$password = "Sameer1dash";
$dbname = "Gayatri-Database1";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$temp=$_GET['firstname'];
?>
                        <a href="about.php?varname=<?php echo $temp?>">About</a>
                    </li>
                      
                    <li>
                        <a href="#login_form">Upload</a>    
</li>
                     
                    <li>
                        <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                         &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                       </p>
                    </li>
                    <li>
<font color="white" size=3.5>
<?php $servername = "localhost";
$username = "grath";
$password = "Sameer1dash";
$dbname = "Gayatri-Database1";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$temp=$_GET['firstname'];
$sql = "SELECT * FROM Login_Table where `Email ID` = '$temp'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$fname = $row['First Name'];
echo "Welcome ".$fname;
?>
</font>
</li>
<li>
                        <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                       </p>
                    </li>
                   
                     <li>
                        <a href="logout.php">Logout</a>
                    </li>
                </ul>
                </div>
            </div>
            <!-- /.navbar-collapse -->
        </div>
 
<a href="#x" class="overlay" id="login_form"></a>
 <div class="popup">
              <h2>Welcome <?php echo $fname?>!</h2>
               
            
<form action="upload.php?varname=<?php echo $temp?>" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload" name="submit">
</form>
<a class="close" href="#close"></a>
                </div>
        <!-- /.container -->
    </nav>
 
    <!-- Page Content -->
    <div class="container">
 
        <div class="row">
 
            <div class="col-md-3">
                <p class="lead">Browse</p>
                <div class="list-group">
                    <a href="nature.php?varname=<?php echo $temp?>" class="list-group-item">Nature</a>
                    <a href="funny.php?varname=<?php echo $temp?>" class="list-group-item">Funny</a>
                    <a href="springflowers.php?varname=<?php echo $temp?>" class="list-group-item">Spring Flowers</a>
                </div>
            </div>
 
            <div class="col-md-9">
 
                <div class="row carousel-holder">
 
                    <div class="col-md-12">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="4"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="5"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="6"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="7"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img class="slide-image" src="img/horse.jpg" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="img/mountain.jpg" style="height:100%" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="img/4.jpg" alt="">
                                </div>
                                  
                                <div class="item">
                                    <img class="slide-image" src="img/nature1.jpg" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="img/nature2.jpg" alt="">
                                </div>
                                  
                                <div class="item">
                                    <img class="slide-image" src="img/nature3.jpg" alt="">
                                </div>
                                  
                                <div class="item">
                                    <img class="slide-image" src="img/nature4.jpg" alt="">
                                </div>
                                 
                                <div class="item">
                                    <img class="slide-image" src="img/nature6.jpg" alt="">
                                </div>
                                  
                                <div class="item">
                                    <img class="slide-image" src="img/nature7.jpg" alt="">
                                </div>
                                </div>
                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                    </div>
 
                </div>
 
                <div class="row">
 
                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="img/horse.jpg"  alt="">
                            
                        </div>
                    </div>
 
                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="img/4.jpg" alt="">
                             
                        </div>
                    </div>
 
                    <div class="col-sm-4 col-lg-4 col-md-4">
                          <div class="thumbnail">
                            <img src="img/rain.jpg" alt="">
                            </div>
                    </div>
                    <div class="col-sm-4 col-lg-4 col-md-4">
                          <div class="thumbnail">
                            <img src="img/2.jpg" alt="">
                            </div>
                    </div>
                    <div class="col-sm-4 col-lg-4 col-md-4">
                          <div class="thumbnail">
                            <img src="img/3.jpg" alt="">
                            </div>
                    </div>
                     <div class="col-sm-4 col-lg-4 col-md-4">
                          <div class="thumbnail">
                            <img src="img/nature1.jpg" alt="">
                            </div>
                    </div>
                    <div class="col-sm-4 col-lg-4 col-md-4">
                          <div class="thumbnail">
                            <img src="img/nature2.jpg" alt="">
                            </div>
                    </div>
                    <div class="col-sm-4 col-lg-4 col-md-4">
                          <div class="thumbnail">
                            <img src="img/nature3.jpg" alt="">
                            </div>
                    </div>
                    <div class="col-sm-4 col-lg-4 col-md-4">
                          <div class="thumbnail">
                            <img src="img/nature4.jpg" alt="">
                            </div>
                    </div>
                    <div class="col-sm-4 col-lg-4 col-md-4">
                          <div class="thumbnail">
                            <img src="img/nature5.jpg" alt="">
                            </div>
                    </div>
                    <div class="col-sm-4 col-lg-4 col-md-4">
                          <div class="thumbnail">
                            <img src="img/nature6.jpg" alt="">
                            </div>
                    </div>
                    <div class="col-sm-4 col-lg-4 col-md-4">
                          <div class="thumbnail">
                            <img src="img/nature7.jpg" alt="">
                            </div>
                    </div>
 
                </div>
 
            </div>
 
        </div>
 
    </div>
    <!-- /.container -->
 
    <div class="container">
 
        <hr>
 
        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Expressions 2015</p>
                </div>
            </div>
        </footer>
 
    </div>
    <!-- /.container -->
 
    <!-- jQuery -->
    <script src="js/jquery.js"></script>
 
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
 
</body>
 
</html>