
<!-- <?php include('action2.php') ?>   -->
<!DOCTYPE html>
<html>

<head>
    <title>LOGIN PAGE</title>
</head>
<link rel="stylesheet" href="style.css">
<script src="general_class.js"></script>
<script src="user_pass.js"></script>

<body>
    <div class="container"id="console">
        <form id="form" action="action2.php" method="POST" >
           
            <h2>LOGIN PAGE</h2>

            <label>User Name</label>
            <input type="text" name="username" id="username" placeholder="User Name" class="login"><br>

            <label>Password</label>
            <input type="password" name="password" id="password" placeholder="Password" class="login"><br>

            <button id="btn" name="register" onclick="test()" value="Submit">Login</button>
            
        </form>
        <!-- <div id="console"></div> -->
    </div>
    <script>
        function test()
        {
            return (verifyNull() && valid());
        }
    </script>
   

</body>

</html>