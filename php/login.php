
<?php
session_start();

require_once("connect.php");

if(isset($_POST['login']) && isset($_POST['pass'])){
   function validate($data){
       $data = trim($data);
       $data= stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;
   }

    $login = validate($_POST['login']);
    $password = validate($_POST['pass']);

 
if(empty($login)){
    header("Location:connexion.php?error = User Name is required");
    exit();
}else if (empty($password)){
    header("Location:connexion.php?error = Password is required");
    exit();

}
    else {
        $ps=$conn->prepare("SELECT * FROM `user` WHERE Email = '$login' AND Mot_de_passe='$password'");
        $ps->execute();
       $count = $ps->rowCount($ps->execute());
      if($count === 1){
  
           $row = $ps->fetch(PDO::FETCH_ASSOC);
          
           if($row['Email'] === $login && $row['Mot_de_passe'] === $password){
               if($row['type']==='admin'){
                $_SESSION['Email'] = $row['Email'];
                header("Location:home.php");
                exit();
               }
               
               else{ 
                $_SESSION['Email'] = $row['Email'];
                header("Location:homeuser.php");
                exit();
               }
             
           }
       
        }
    }
}else{
           header("Location:connexion.php?error=incorrect User name or password");
         
           exit();
        }
  

?>