<?php 
  $db = mysqli_connect('localhost', 'root', '', 'newdb');
  $username = "";
  $password = "";
  if (isset($_POST['register'])) {
  	$username = $_POST['username'];
  	$password = $_POST['password'];

  	$sql_u = "SELECT * FROM users WHERE username='$username'";
  	
  	$res_u = mysqli_query($db, $sql_u);

  	if (mysqli_num_rows($res_u) > 0) {
  	  $name_error = "Sorry... username already taken"; 	
  		
  	}else{
           $query = "INSERT INTO users (username, password) 
      	    	  VALUES ('$username','".md5($password)."')";
           $results = mysqli_query($db, $query);
           echo 'Saved!';
           exit();
  	}
  }
?>