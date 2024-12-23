<?php
    include "connection.php";
    session_start();

    if (!isset($_SESSION['isLoggedIn']))
    {
        header("Location: login.php"); 
    }

    $id = $_GET['id'];

    $dbh = $dbh->prepare("UPDATE buku SET isdel = ?, deleted_by = ? , deleted_at = ? WHERE id = ?");
    $dbh->execute(
        [
            1,
            $_SESSION ['userid'],
             date("Y-m-d H:i:s"),
            $id
        ]
    );

    header("Location: home.php");
    exit();
?>