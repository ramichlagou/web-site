<?php
session_start();
if(isset($_SESSION['id']) && isset($_SESSION['nom']) )
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste d'etudiants</title>
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="../assets/home.css">
<style>
    a{
     display: inline-block;
    width: 120px;
    padding: 7px;
    text-align: center;
    text-decoration: none;
    margin-top: 20px;
    margin-left: 0%; 
    background-color:burlywood;
    }
</style>
</head>

<body>
<div calss="container">
  <a href="logout.php">Logout</a>
  </div>
    <div class="container py-3">
        <h2>Liste des étudiants HARVARD 2021</h2>
        
        <?php
        require 'connect.php';
        $response = $conn->query('SELECT * FROM user');
        $users = $response->fetchAll();
        ?>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">nom</th>
                    <th scope="col">Email</th>
                    <th scope="col">CIN</th>
                    <th scope="col">Num Tel</th>
                    <th scope="col">Date de naissance</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user) : ?>
                    <tr>
                        <th><?= $user['id'] ?></th>
                        <td><?= $user['nom'] ?></td>
                        <td><?= $user['Email'] ?></td>
                        <td><?= $user['Num_tel'] ?></td>
                        <td><?= $user['CIN'] ?></td>
                        <td><?= $user['Date_naissance'] ?></td>
                        <td>
                            <a href="modifier.php?id=<?= $user['id'] ?>" class="btn btn-outline-warning" title="modifier"><i class="fas fa-user-edit"></i></a>
                            <a href="supprimer.php?id=<?= $user['id'] ?>" class="btn btn-outline-danger" title="supprimer"><i class="fas fa-user-minus"></i></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>

</html>
