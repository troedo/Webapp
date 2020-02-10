<html>
<head>
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="style.css"> 
</head>
<body>
    <div class="starwars-demo">
        <img src="//cssanimation.rocks/demo/starwars/images/star.svg" alt="Star" class="star">
        <img src="//cssanimation.rocks/demo/starwars/images/wars.svg" alt="Wars" class="wars">
        <h2 class="byline" id="byline">YougCaloly</h2>
    </div>
    
    <div class="log">
        <form action="checklogin.php" method="POST">
                <h1 class="t">Login</h1>
            <p>
               
               <input type="text" id="user" placeholder="Username" required="required" name="user" />
            </p>
            <p>
            
                <input type="password" id="pass" placeholder="Password" required="required" name="pass" />
            </p>
            <p>
            <a href="register.php"><input type="button" class="a" value="Register"></a>
            <input type="submit" id="btn" class="b" value="Login" />
            </p>        
            </form>
    </div>

    
</body>
</html>