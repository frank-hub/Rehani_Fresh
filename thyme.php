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
            Thyme
            <hr style="background-color:#00C851;margin-top: 0px;padding-top: 0px; ">
        </h3>
    <div class="row">
    <div class="col-md-6 flex-center">
    <img src="img/products/thyme.jpg" class="img-fluid" alt="">
    </div>
    <div class="col-md-6 text-center">
        <p style="font-size: 14;font-weight: bold">
            Packed full of green goodness, French beans offer up a multitude of nutritional benefits. As well as being low in calories and containing no saturated fat, they are a fantastic source of vital nutrients, particularly vitamins C and A, and minerals including iron, calcium and magnesium. Furthermore, they are rich in dietary fibre. As the seeds within the green bean pods are pulses, one of the other key health benefits of French beans is that they are a great source of protein.
Fresh beans should be stiff to hold but flexible, giving a snap sound upon being broken. They’ll store for well for a few days in the fridge, but are best eaten within two or three days as the natural sugars start turning to starch after picking, reducing the quality of the taste. Cook them in plenty of boiling water with the lid off – this reduces acidity and avoids trapped steam, both of which can make beans turn from a beautifully deep green shade into more unappealing olive hue. Boil for just three or four minutes – don’t overcook
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
