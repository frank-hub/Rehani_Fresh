
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Rehani Fresh</title>
	<!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"     <!-- Bootstrap core CSS -->
	<link href="../css/bootstrap.min.css" rel="stylesheet">
	<!-- Material Design Bootstrap -->
	<link href="../css/mdb.min.css" rel="stylesheet">
	<!-- Your custom styles (optional) -->
	<link href="../css/style.css" rel="stylesheet">
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark scrolling-navbar fixed-top success-color">
        <a class="navbar-brand" href="#">
            <!-- <strong>Rehani Fresh</strong> -->
            <img src="../img/logo1.png" alt="" height="50px">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link" href="../">Home</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">Products
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../about/">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../contact/">Contact Us</a>
                </li>
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
<div class="container" style="margin-top: 90px;">
	<div class="row">
		<div class="col-md-6">
			<h3 class="text-lg-left">Rehani Fresh Products</h3>
		</div>
		<div class="col-md-6">
			<select class="custom-select-sm float-right">
				<option>Featured</option>
				<!-- <option>Best Selling</option> -->
			</select>
		</div>
	</div>
	<hr class="brown">
	<div class="row">
		<div class="col-md-2">
			<h3>Products</h3>
			<hr>
			<ul class="nav navbar-nav">
				<li class="nav-item active"><a href="../basil.php">Basil</a></li>
				<li><a href="../mint.php">Mint</a></li>
				<li><a href="../rosemary.php">Rosemary</a></li>
				<li><a href="../thyme.php">Thyme</a></li>
                <li><a href="../oregano.php">Oregano</a></li>
                <li>
                    <a href="../chives.php">Chives</a>
                </li>
                <li>
                    <a href="../tarragon.php">Tarragon</a>
                </li>
                <li>
                    <a href="../rosemary.php">French beans</a>
                </li>
			</ul>
		</div>
		<div class="col-md-10">
            <div class="row text-md-center">
            <?php 
            include '../login/conn.php';
            $products = mysqli_query($connecting,"SELECT * FROM `product_details` ORDER BY id DESC");
            while ($result = mysqli_fetch_array($products)) { ?>
                <div class="col-md-4 mb-4">
                <div class="card view overlay hm-white-light hm-zoom">
                    <img src="../dashboard/uploads/<?php echo $result['image']; ?>" class="img-fluid" alt="<?php echo $result['name']; ?>" style="height: 140px;">
                    <div class="mask"></div>
                    <div style="z-index: 1">
            
                        <h4 class="card-title h4-responsive"><?php echo $result['name']; ?></h4>
                    </div>
                </div>
                <div class="btn-group w-100" style="margin-top:-2px">
                    <a href="#" class="btn-block btn-sm btn btn-info fa fa-info" style="font-size:12px;"> <?php echo $result['medium']; ?></a>
                    <a href="#" class="btn-block btn-sm btn btn-dark fa-2x fa fa-money" style="font-size:14px;"> Ksh.<?php echo $result['price']; ?></a>
                </div>
            </div>
            <?php }
            ?>
            </div>
        </div>
</div>
</div>
<?php
include '../footer.php';
?>
<!-- SCRIPTS -->
<!-- JQuery -->
<script type="text/javascript" src="../js/jquery-3.2.1.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="../js/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="../js/mdb.min.js"></script>
</body>
</html>