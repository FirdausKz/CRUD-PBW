<?php
    session_start();
    if(isset($_SESSION['isLoggedIn']))
    {
     
        if($_SESSION['isLoggedIn'])
        {
            header("Location:home.php");
        }  



    }
   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<title>Document</title>
<style>
body {background-color: #ff7e5f; font-family:arial}
button {
width: 100%;
    padding: 10px;
    border: none;
    border-radius: 25px;
    background-color:#ff416c;
    color: white;
    font-size: 16px;
    font-weight: bold;
    cursor: pointer;
    transition: background-color 0.3s;
}

input {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: none;
    border-radius: 25px;
    background-color: #f7f7f7;
    font-size: 16px;
    box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);
}

.error-popup {
        position: fixed;
        top: 10px;
        left: 50%; 
        transform: translateX(-50%);
        background-color: #f8d7da; 
        color: #721c24; 
        border: 1px solid #f5c6cb;
        border-radius: 5px;
        padding: 15px 20px;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2);
        z-index: 1000;
    }


#exampleCheck1{
margin-right : 10px
}
</style>";
</head>

<body>
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card shadow p-4">
            <h3 class=" text-center mb-4"> login</h3>
                <form action="aksilogin.php" method="post">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button type="submit">Submit</button>
                </form>
        </div>
    </div>
</body>
</html>