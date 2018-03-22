
<head>
  <link href='style.css' rel='stylesheet' type='text/css'>
</head>

<?php 
session_start();
if(!isset($_SESSION["session_username"])) {
	header("location:login.php");
} else {
?>


<?php include("include/header.php"); ?>
<div id="welcome">	
	<br/>
	<br/>
	<h2>Welcome, <span><?php echo $_SESSION['session_username'];?>! </span></h2>
	<p class="regtext"><a href="logout.php">Logout</a> Here!</p>
</div>


	

<?php
}
?>
