<?php
    include "connection.php";
    session_start();

    if (!isset($_SESSION['isLoggedIn']))
    {
        header("Location: login.php"); 
    }

    $id = $_POST['id'];
    $tahun = $_POST['tahun'];
    $judul = $_POST['judul'];

    $stmt = $dbh->prepare("UPDATE buku SET judul = ?, tahun = ? WHERE id = ?");
    $stmt->execute([$judul, $tahun, $id]);

    if ($stmt->rowCount() > 0) {
        echo "<script>alert('Data berhasil diperbarui');</script>";
    } else {
        echo "<script>alert('Tidak ada perubahan pada data');</script>";
    }

    header("Location: home.php");
    exit;