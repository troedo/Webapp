<html> 
<head>
    <title>Login PHP</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
   
    <div class="container">
        <div class="row">
            <div class="col-md-3"><div>
            <div class="col-md-6">
            <h1>PHP Member</h1>
                <form action="checklogin.php" method="post">
                    <div class="form-group">
                        <label for="email">Email</tabel>
                        <input type="email" class="form-control" id="email"placeholder="Email"> 
                    </div>
                    <div class="form-group">
                        <label for="password">Password</tabel>
                        <input type="password" class="form-control" id="password"placeholder="Password">
                    </div>
                    <input type="submit" value="Log in" class="btn btn-primary">
                </form>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>