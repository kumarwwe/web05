<!DOCTYPE html>
<html>
    <head>
        <title>Admin Login </title>
        <link rel="stylesheet" type="text/css"  href="Style2.css">
</head>
<body>
    <form action="admin.php" method="post">
        <h2>Admin Login</h2>
        <?php if(isset($_GET['error'])){?>
            <p class="error"><?php echo $_GET['error'];?></p>
            <?php  }?>
        <label>User name</label>
        <input type="text" name="uname" Placeholder="username"><br>
        <label> Password</label>
        <input type="password" name="password" Placeholder="password">
        <br>
        <button type="submit">Login</button>
</form>
</body>
</html>