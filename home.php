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
               text-align: center;
               
               
          }
          #body{
               
               width:800px; 
               margin:auto;
               
          }
          button{
          
               background-color: white;
               border-radius: 10px;
                width: 100px;
              height: 30px;
              font-size:13px;
              font-weight: bold;
          }
          button:hover{
    background-color:yellow;}
         
     </style>
</head>
<body>
     <div id="body">  
     <h1>Hello <?php echo $_SESSION['username']; ?></h1>
     <button><a href="logout.php">Logout</a></button>
      </div>
    


     </script>
</body>
</html>

