<?php

include 'connect.php';

$query = $conn->prepare('DELETE FROM user WHERE id = ?');
$query->execute([$_GET['id']]);

header('Location:home.php');
