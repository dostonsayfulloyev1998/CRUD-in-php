<?php$con = require 'database.php';if ($_SERVER['REQUEST_METHOD']=='GET'){    $id = $_GET['id'];    $sql = "delete from talaba where id =$id";    $result = $con->query($sql);    if ($result){        header('location:index.php');    }}