<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: ./HTML/index.html');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: index.php");
  }
?>

<?php include ('dbconfig.php');?>
<?php include ('components/head.php');?>

<?php include ('components/navbar.php');?>
<div class="content">
  	<!-- notification message -->
  
<?php include ('components/banner.php');?>


<?php include ('components/features.php');?>


<?php include ('components/bake.php');?>

<?php include ('components/categories.php');?>


<?php include ('components/review.php');?>
 

<?php include ('components/footer.php');?>
