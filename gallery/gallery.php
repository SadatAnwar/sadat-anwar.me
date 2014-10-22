<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, height=device-height" />
    <meta name="description" content="Personal Bio">
    <meta name="author" content="Sadat Anwar">
    
    <title>Syed Sadat Anwar - Gallery</title>

    <!-- Bootstrap Core CSS -->
    <link href="../style/css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../style/css/grayscale.css" rel="stylesheet">
    
    <!-- Custom Fonts -->
    <link href="../style/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
     <nav class="navbar navbar-custom navbar-static-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="../index.html">
                    <i class="fa fa-home "></i>  <span class="light">Home</span>
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="../index.html#about">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="../index.html#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">My Gallery
                    <small style="text-transform: capitalize ;">A sample of my photographs</small>
                </h1>
            </div>
        </div>
        <!-- /.row -->
        
<?php
$dir = glob('Images/*.jpg');
$n =0;
$numberImages = count($dir);
$numberRows = $numberImages/4;
for ($x=0; $x<$numberRows; $x++) {
    echo "<div class=\"row\">";
    for ($y=0; $y<4; $y++) {
        echo "<div class=\"col-md-3 portfolio-item\">";
        #echo "<a data-toggle=\"modal\" data-target=\".bs-example-modal-lg\" style=\"cursor: pointer;\">";
        echo "<a href=\"javascript:thisImage({$n})\">";
        echo "<img class=\"img-responsive\" src=\"";
        echo $dir{$n};
        echo "\" alt =\"\"></a></div>";
        $n = $n+1;
    }
    echo "</div>";
}
?>
<div id = "modalSlide" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div id="mySlide" class="carousel slide" data-interval=false  data-ride="carousel">
          <!-- Wrapper for slides -->
          <div class="carousel-inner">
<?php
$n=0;
foreach ($dir as &$image) {
    echo "<div id = \"";
    echo "image{$n}";
    echo    "\" class=\"item\">"; 
    echo "<img class=\"img-responsive\" src=\"";
    echo $image;
    echo "\" alt= \"\">";
    echo "</div>";
    $n = $n+1;
}
?>
        </div>
          <!-- Controls -->
          <a class="left carousel-control" href="#mySlide" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
          </a>
          <a class="right carousel-control" href="#mySlide" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
          </a>
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">Close</button>
        </div>
    </div>
  </div>
</div>
</div>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="container text-center">
                    <p>Copyright &copy; Syed Sadat Anwar 2014</p>
                </div>
            </div>
            <!-- /.row -->
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery Version 1.11.0 -->
    <script src="../js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.js"></script>
    <script type = "text/jscript">
        $("#image1").addClass("active");
        
        function thisImage(imageID) {
        
            for( i=0; i<12; i++){
                $("#image"+i).removeClass("active"); 
            }
            $("#image"+imageID).addClass("active"); 
            $('#modalSlide').modal('toggle');
        
        }
    </script>

</body>

</html>
