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

    <title>Expressions</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/thumbnail-gallery.css" rel="stylesheet">
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
                <a class="navbar-brand" href="index.html">Expressions</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                    <?php
                    $firstname=$_GET['varname'];
                    ?>
                        <a href="homepage.php?firstname=<?php echo $firstname?>">Home</a>
                    </li>
                    <li>
                        <a href="#login_form">Upload</a>
                    </li>
                    <li>
                        <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                         &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                         &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                         &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p>
                    </li>
                    <li>
                        <a href="logout.php">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Logout</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        </div>

        <a href="#x" class="overlay" id="login_form"></a>
 <div class="popup">
              <h2><font color="black"1> Welcome Guest!</font></h2>
              
            <form action="upload.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Continue" name="submit">
</form>
<a class="close" href="#close"></a>
</div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <div class="col-lg-12">
                <h1 class="page-header">Spring Flowers Gallery</h1>
            </div>

            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
				<a href="img/nature1.jpg" download>
                 <img class="thumbnail" src="img/nature1.jpg" alt="">
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
			<a href="img/nature2.jpg" download>
             <img class="thumbnail" src="img/nature2.jpg" alt="">
                </a>
                 </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a href="img/nature3.jpg" download>
             <img class="thumbnail" src="img/nature3.jpg" alt="">
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a href="img/nature5.jpg" download>
             <img class="thumbnail" src="img/nature5.jpg" alt="">
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
				<a href="img/spring1.jpg" download>
             <img class="thumbnail" src="img/spring1.jpg" alt="">
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a href="img/spring2.jpg" download>
             <img class="thumbnail" src="img/spring2.jpg" alt="">
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a href="img/spring3.jpg" download>
             <img class="thumbnail" src="img/spring3.jpg" alt="">
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a href="img/spring4.jpg" download>
             <img class="thumbnail" src="img/spring4.jpg" alt="">
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a href="http://placehold.it/400x300" download>
                 <img class="thumbnail" src="http://placehold.it/400x300" alt="">
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a href="http://placehold.it/400x300" download>
                 <img class="thumbnail" src="http://placehold.it/400x300" alt="">
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a href="http://placehold.it/400x300" download>
                 <img class="thumbnail" src="http://placehold.it/400x300" alt="">
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a href="http://placehold.it/400x300" download>
                 <img class="thumbnail" src="http://placehold.it/400x300" alt="">
                </a>
            </div>
        </div>

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p> Expressions</p>
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