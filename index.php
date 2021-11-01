
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
         <ul  >
                                    
            
            <h3> For Submit and Store the Username and Password Follow the Rules :-- </h3>
            <li>Username and Password Cannot be Blank </li>
            <li>No Special and Numeric Charaters are Allowed in User name</li>
            <li> You can Enter minimum 5 and maximum 15 values.</li>
            <li> 1 Numeric Value Must Be include in Password.</li>
            <li> Atleast 1 Small letter and 1 Capital letter must be Enter in Password. </li>
            <li>Special Characters must be Enter in Password </li>

        </ul>
    </div>
    <script>
        function test()
        {
            return (verifyNull() && valid());
        }
    </script>
   

</body>

</html>