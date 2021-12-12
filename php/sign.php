<?php
$nom= $_POST['nom'];
$email = $_POST['email'];
$passwd = $_POST["password"];
$cin = $_POST["cin"];
$numtel = $_POST["numtel"];
$date_naissance = $_POST["dtaa"]."-".$_POST["dtmm"]."-".$_POST["dtjj"];
require_once("connect.php");
$ps=$conn->prepare("INSERT INTO `user`(`nom`, `Email`, `Mot_de_passe`, `CIN`, `Num_tel`, `Date_naissance`) VALUES (?,?,?,?,?,?)");
$params = array($nom,$email,$passwd,$cin,$numtel,$date_naissance);
$ps->execute($params);
header('Location:.././index.html');
$conn =null;
?>