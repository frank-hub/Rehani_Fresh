<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Rehani Fresh</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">
</head>
<style>
  .main{
       background: url("img/products/farm.gif")no-repeat center center;
       /* background-color: transparent; */
    background-size: cover;
    height: 80vh;
  }
  .farm{
      position: absolute;
margin-top: 15em;
text-align: center;
margin-left: 42%;
  width: 20%;
  background: rgba(79, 149, 0, 0.801);
  padding: 0.4rem;
  font-family: "Open Sans", sans-serif;
  }
</style>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark scrolling-navbar fixed-top success-color">
        <a class="navbar-brand" href="#">
            <!-- <strong>Rehani Fresh</strong> -->
            <img src="img/logo1.png" alt="" height="50px">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="products/">Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about/">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact/">Contact Us</a>
            </ul>
            <ul class="navbar-nav nav-flex-icons">
                <li class="nav-item">
                    <a class="nav-link">
                        <i class="fa fa-facebook"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link">
                        <i class="fa fa-twitter"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link">
                        <i class="fa fa-instagram"></i>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <main class="container" style="margin-top: 100px">
        <?php include'page.php'; ?>
        <h3 style="font-weight: bold">
             Oregano
            <hr style="background-color:#00C851;margin-top: 0px;padding-top: 0px; ">
        </h3>
    <div class="row">
    <div class="col-md-6 flex-center">
    <img src="img/products/oregano.jpg" class="img-fluid" alt="">
    </div>
    <div class="col-md-6 text-center">
        <p style="font-size: 14;font-weight: bold">
             Oregano is a popular herb that many people think of as merely a spice to improve or enhance the flavor of their food, but
            in reality, this perennial herb, with the scientific name of Origanum vulgare, has a treasure of health benefits that most
            people don’t realize at all. The impressive health benefits of oregano include its ability to protect the immune system,
            prevent the onset of chronic diseases, improve digestion, detoxify the body, strengthen the bones, improve heart health,
            boost energy levels, and even protect against diabetes.
        </p>
    </div>
    </div>
    </main>
    <?php
    include 'footer.php';
    ?>
    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <script type="text/javascript" src="js/index.js"></script>
    <script>
        new WOW().init();
    </script>
</body>

</html>
