<?php

    try{
        $dbh = new PDO ("mysql:host=localhost; dbname=akademik", 'root','');   
    }
    catch(PDOException $e){
        echo"Koneksi gagal ", $e->getMessage();
    }