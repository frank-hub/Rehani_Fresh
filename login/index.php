<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Rehani Fresh | Login</title>
  <!-- Bootstrap core CSS-->
  <link href="../dashboard/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="../dashboard/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="../dashboard/css/sb-admin.css" rel="stylesheet">
</head>

<body class="bg-dark">
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Login</div>
      <?php 
if (isset($_POST['login_btn'])) {
   login();
}
     function login(){
include ('conn.php');
     $mail = $_POST['email'];
     $pass = $_POST['passd'];
     $password = md5( $pass);

     $qry = "select * from admin where email ='$mail' and password = '$pass' ";
     $exec = mysqli_query($connecting ,$qry )or die(mysqli_error($connecting));
    //  $user = 

     if(mysqli_num_rows($exec) =="1"){
        session_start();
        $user_logged_in = mysqli_fetch_array($exec)or die(mysqli_error($connecting));

        $_SESSION['username'] = $user_logged_in['username'];
        $_SESSION['success'] = true;
        // echo $_SESSION['username'];
        header("Location:../dashboard/");
     }
     else {
        ?>
      <button class="alert alert-danger">Wrong Details , Please Try Again !</button>
        <?php
     }
     }
?>  

      <div class="card-body">
        <form method="post" action="">
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input class="form-control" id="exampleInputEmail1" type="email" name="email" aria-describedby="emailHelp" placeholder="Enter email">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input class="form-control" id="exampleInputPassword1" type="password" name="passd" placeholder="Password">
          </div>
          <div class="form-group">
            <div class="form-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox"> Remember Password</label>
            </div>
          </div>
          <button type="submit" class="btn btn-primary btn-block" name="login_btn">Login</button>
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="../">Home</a>
          <!-- <a class="d-block small" href="forgot-password.html">Forgot Password?</a> -->
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="../dashboard/vendor/jquery/jquery.min.js"></script>
  <script src="../dashboard/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="../dashboard/vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>
