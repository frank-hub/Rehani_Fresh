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
            Basil
            <hr style="background-color:#00C851;margin-top: 0px;padding-top: 0px; ">
        </h3>
    <div class="row">
    <div class="col-md-6 flex-center">
    <img src="img/basil.png" class="img-fluid" alt="">
    </div>
    <div class="col-md-6">
        <p style="font-size: 14;font-weight: bold">
            Also called great basil or Saint-Joseph's-wort, is a culinary herb of the family Lamiaceae (mints). What isn’t as well known are the various other herbal uses of Basil. It is a traditional remedy that has been used in various cultures for hundreds of years for many uses besides cooking. These are our top uses:
Basil Pesto– This culinary use is one of Basil’s most popular uses and variations of this are used in cultures around the world. At our house, we add pesto to everything from eggs, to meats, to slices of fresh cucumber.
General Cooking– Dried basil can be easily added to practically any dish. Basil is used around the world in many different cuisines with good reason. It adds a depth and flavor that is not rivaled by other herbs. I make a homemade spice blend that includes basil and add it to practically anything.
Calming the Stomach– The Italians may be on to something with adding Basil to everything. It is thought to have a calming effect on the stomach and 1/2 teaspoon of dried or fresh Basil Leaf in water can often help sooth indigestion and alleviate feelings of fullness.
Coughing and Colds– I’ve heard several Amish in our area suggest using Basil leaf to help alleviate coughing and colds. They chew fresh leaves to calm coughing or make a calming tea of dried basil to help sooth illness.
Facial Steam for Headache: A facial steam with dried basil leaf can help alleviate a headache. Add a tablespoon of dried basil leaf to 2 cups of boiling water in a large pot. Carefully lean over the pot, cover head with a towel and breathe in the steam for 5-10 minutes until headache starts to subside. Bonus, you get to smell like an Italian restaurant for the rest of the day!

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
