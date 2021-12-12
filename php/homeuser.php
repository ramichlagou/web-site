<?php
session_start();
if(isset($_SESSION['id']) && isset($_SESSION['nom']) )
?>
<!DOCTYPE html>
<html>
<head>
    <title>HOME</title>
<!-- <link rel="stylesheet" href="../assets/css/cssconn.css"> -->
<link rel="stylesheet" href="../assets/css/styleconn.css">
</head>
<body>
  <div calss="container">
  <a href="logout.php">Logout</a>
  </div>
   <h1>Hello , <?php echo $_SESSION['Email']; ?> </h1>
  
</body>
</html>
<?php}else{ 
  header("Location:connexion.php");
  exit();
} ?>
