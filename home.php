<?php 
session_start();

if (isset($_POST['register'])) {
   header("Location: index.php");
}

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
     <style>
          body{
               margin:0%;
               padding:0%;
               background:skyblue;
          }
     </style>
</head>
<body>
     <h1>Hello, <?php echo $_SESSION['username']; ?></h1>
     <a href="logout.php">Logout</a>
</body>
</html>

