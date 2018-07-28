<?php


if (isset($_POST['id'])) {
	delete();
}
function delete(){
    include '../login/conn.php';
    $id = $_POST['id'];
     $qryname = mysqli_query($connecting,"SELECT image FROM `product_details` WHERE id=$id");
    $name=mysqli_fetch_assoc($qryname);
    $imgName=$name['image'];
	$del = "DELETE FROM `product_details` WHERE id = $id";
    mysqli_query($connecting,$del)or die(mysqli_error($connecting));
    unlink("uploads/" . $imgName);
}
  $GoTo = "index.php";
  header(sprintf("Location: %s",$GoTo));
?>