<html> 
<head>
    <title>Register Page</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="reg">
        <form action="add_register.php" method="POST">
                <h1 class="t">Register</h1>
            <p>
               <input type="email" id="email" placeholder="Email" required="required" name="email">
            </p>
            <p>
                <input type="text" id="n" placeholder="Name" required="required" name="n">
            </p>
            <p>
                <input type="text" id="username" placeholder="Username" required="required" name="username">
            </p>
            <p>
                <input type="password" id="pass" placeholder="Password" required="required" name="pass">
            </p>
            <p>
            <a href="login.php"><input type="submit" class="a" value="Submit"></a>
            <a href="login.php"><input type="bunton" class="a" value="cancel" size="2"></a>
            </p>

            </form>
            
</div>

</body>
</html>