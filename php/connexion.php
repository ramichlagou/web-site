<!DOCTYPE html>
<html>
<head>
    <title>Document</title>
<link rel="stylesheet" href="../assets/css/cssconn.css">

</head>
<body>

              <form action="login.php" method="post">
             <h3>CONNEXION</h3>    
            <?php if (isset($_GET['error'])){?>
                    <p class="error"><?php echo $_GET['error'];?></p>
                <?php } ?>
            <label>Login:</label>
            <input type="text" name="login" placeholder="Email"><br>
               <label>password:</label>
            <input type="password" name="pass" placeholder="Password"><br>
            <button type="submit">Connexion</button> 
            </form>

</body>
</html>
