<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
    <link href="../assets/css/indexbtn.css" rel="stylesheet">
    <script src="../controle.js"></script>

</head>

<body>
    <?php
    require 'connect.php';
    $query = $conn->prepare('SELECT * FROM user WHERE id = ?');
    $query->execute([$_GET['id']]);
    $user = $query->fetch();

    ?>
    <div class="container">
        <fieldset>
            <legend><i class="fas fa-user-edit"></i> Modifier user</legend>
            <div class="col-lg-8">
            <form action="" method="post" name="f" role="form" class="form-label" onsubmit="return verif();"> 
              <div class="row">
                <div class="col form-group">
                  <input type="text" class="form-control" name="nom"   placeholder="Nom" required>
                </div><br>
                <div class="col form-group">
                  <input type="email" class="form-control" name="email"  placeholder="Email" required>
                </div>
              </div><br>
              <div class="form-group">
                <input type="password" class="form-control" name="password"  placeholder="Mot de passe" required>
              </div><br>
              <div class="form-group">
                <input type="text" class="form-control" name="cin" placeholder="NCIN" required>
              </div><br>
              <div class="form-group">
                <input type="text" class="form-control" name="numtel"  placeholder="Numéro téléphone" required>
              </div><br>
              
              <div class="row">
                <div class="form-group col"> Date de naissance</div>
                <div class="col form-group">
                  <input type="text" class="form-control2" name="dtjj"   placeholder="Jour" required>
                </div>/
                <div class="col form-group">
                  <input type="text" class="form-control2" name="dtmm"  placeholder="Mois" required>
                </div>/
                <div class="col form-group">
                  <input type="text" class="form-control2" name="dtaa"  placeholder="Année" required>
                </div>
              </div>
              
                <button type="submit" onclick="verif()" >modifier</button></div>
                
            </form>
        </fieldset>
        <?php
        if (!empty($_POST)) {
            $nom= $_POST['nom'];
            $email = $_POST['email'];
            $passwd = $_POST["password"];
            $cin = $_POST["cin"];
            $numtel = $_POST["numtel"];
            $date_naissance = $_POST["dtaa"]."-".$_POST["dtmm"]."-".$_POST["dtjj"];
            $query = $conn->prepare('UPDATE user SET nom=?, email=?, Mot_de_passe =? ,cin=?,Num_tel=? ,Date_naissance=?
            WHERE id = ?');
            $query->execute([$nom, $email,$passwd,$cin, $numtel,$date_naissance,$_GET['id']]);
            header('Location:modifier.php');
        }
        ?>
    </div>
</body>

</html>