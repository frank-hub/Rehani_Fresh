<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Add Product</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
    <?php include('navbar.php');?>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.php">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Product List</li>
        <li style="margin-left:45em; margin-top:0px;"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">ADD Product</button></li>
      </ol>
<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Product Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" enctype="multipart/form-data" action="">
            <div class="form-group row">
              <label for="name" class="col-sm-2 col-form-label">Name</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="name" name="artname" placeholder="Name of Product">
              </div>
            </div>
            <div class="form-group row">
              <label for="medium" class="col-sm-2 col-form-label">Mediums</label>
              <div class="col-sm-10">
                <select class="form-control" id="medium" name="medium">
                  <option selected disabled>** Select Product **</option>
                  <option>Mint</option>
                  <option>Rosemary</option>
                  <option>Oils</option>
                  <option>Thyme</option>
                  <option>Oregano</option>
                  <option>Chives</option>
                  <option>Tarragon</option>
                  <option>French beans</option>
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label for="descr" class="col-sm-2 col-form-label">Description</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="descr" name="desc" placeholder="Description">
              </div>
            </div>
            <div class="form-group row">
              <label for="price" class="col-sm-2 col-form-label">Price</label>
              <div class="col-sm-10">
                <input type="number" class="form-control" id="price" name="price" placeholder="Price">
              </div>
            </div>
            <div class="form-group row">
              <label for="date" class="col-sm-2 col-form-label">Post Date</label>
              <div class="col-sm-10">
                <input type="date" class="form-control" id="date" name="dop">
              </div>
            </div>
            <div class="form-group row">
              <label for="image" class="col-sm-2 col-form-label"> Image</label>
              <div class="col-sm-10">
                <input type="file" class="form-control" id="image" name="artImage" placeholder="Upload Image">
              </div>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="save" class="btn btn-primary">Save</button>
      </div>
      </form>
    </div>
  </div>
</div>
<?php 
      
      if (isset($_POST['save'])) {
        insert();
      }
      
      function insert(){
      include '../login/conn.php';
        if (isset($_FILES['artImage'])) 
            {  
               
               $names = $_FILES['artImage']['name'];
              //  $sizes = $_FILES['artImage']['size'];
              //  $types = $_FILES['artImage']['type'];
               $tmp = $_FILES['artImage']['tmp_name'];
               $folder_location = 'uploads/'.$names;
               $move = move_uploaded_file($tmp,$folder_location);
                
               if ($move) {
                  $name = $_POST['artname'];
                  $mediums = $_POST['medium'];
                  $descs = $_POST['desc'];
                  $price = $_POST['price'];
                  $dop  = $_POST['dop'];
                  
                   $qry = "INSERT INTO `product_details`(`name`, `medium`, `descr`, `price`, `posted_date`, `image`) 
                   VALUES('$name','$mediums','$descs','$price','$dop','$names')";
                   if (mysqli_query($connecting,$qry)or die(mysqli_error($connecting))) {
                      ?>
                      <div class="btn alert alert-info alert-dismissable flex-center" role="alert">
                          <button type="button " class="close" data-dismiss="alert" aria-label="close">
                          <strong>Success</strong> Product <?php echo $name ?> Saved You can Close this Window.
                              <span aria-hidden="true">&times;</span>
                          </button>
                      </div>
                      <?php
               }
               else{
                   ?>
                   <div class="btn btn-block alert alert-danger alert-dismissable" role="alert">
                          <button type="button " class="close" data-dismiss="alert" aria-label="close">
                          <strong>Failed !</strong>The Product failed to upload try again .
                              <span aria-hidden="true">&times;</span>
                          </button>
                      </div>
                   <?php
               }
           }
        }
        mysqli_close($connecting);
      }
      ?>
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Product </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Mediums</th>
                  <th>Description</th>
                  <th>Price</th>
                  <th>Posted date</th>
                  <th>##</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>Name</th>
                  <th>Mediums</th>
                  <th>Description</th>
                  <th>Price</th>
                  <th>Posted date</th>
                  <th>Image</th>
                </tr>
              </tfoot>
              <tbody>
                            <?php 
                            include '../login/conn.php';
                            $select = "SELECT * FROM `product_details` ORDER BY id DESC";
                            $exc_select = mysqli_query($connecting,$select)or die(mysqli_error($connecting));

                            while ($results = mysqli_fetch_array($exc_select)) {?>
                             <tr>
                              <td><?php echo $results['name']; ?></td>
                              <td><?php echo $results['medium']; ?></td>
                              <td><?php echo $results['descr']; ?></td>
                              <td><?php echo $results['price']; ?></td>
                              <td><?php echo $results['posted_date']; ?></td>
                              <td><?php echo $results['image']; ?></td>
                            </tr>
                            <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Rehani Fresh <?php echo date('Y') ?></small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="js/sb-admin-datatables.min.js"></script>
  </div>
</body>

</html>
