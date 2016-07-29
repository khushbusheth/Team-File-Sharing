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
                    <?php
                    $firstname=$_GET['varname'];
                    ?>
                        <a href="homepage.php?firstname=<?php echo $firstname?>">Home</a>
                    </li>
                    <li>
                        <a href="upload.php?firstname">Upload</a>
                    </li>
                    <li>
                        <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                         &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                         &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p>
                    </li>

                    <li>
                        <a href="logout.php">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Logout</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <div class="col-lg-12">
                <h1 class="page-header">Funny Images Gallery</h1>
            </div>

            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
				<a href="img/funny1.jpg" download>
             <img class="thumbnail" src="img/funny1.jpg" alt="">
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a href="img/funny2.jpg" download>
             <img class="thumbnail" src="img/funny2.jpg" alt="">
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a href="img/funny3.jpg" download>
             <img class="thumbnail" src="img/funny3.jpg" alt="">
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a href="img/funny4.jpg" download>
             <img class="thumbnail" src="img/funny4.jpg" alt="">
                </a
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a href="img/funny5.jpg" download>
             <img class="thumbnail" src="img/funny5.jpg" alt="">
                </a
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a href="img/funny6.jpg" download>
             <img class="thumbnail" src="img/funny6.jpg" alt="">
                </a
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a href="img/funny7.jpg" download>
             <img class="thumbnail" src="img/funny7.jpg" alt="">
                </a
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a href="img/funny8.jpg" download>
             <img class="thumbnail" src="img/funny8.jpg" alt="">
                </a
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a href="img/funny9.jpg" download>
             <img class="thumbnail" src="img/funny9.jpg" alt="">
                </a
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a href="img/funny10.jpg" download>
             <img class="thumbnail" src="img/funny10.jpg" alt="">
                </a
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
               <a href="img/funny11.jpg" download>
             <img class="thumbnail" src="img/funny11.jpg" alt="">
                </a
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