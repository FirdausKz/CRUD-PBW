<?php
session_start();
if (!isset($_SESSION['isLoggedIn']) || $_SESSION['isLoggedIn'] !== true) {
    header("Location: login.php"); 
    exit();
}

$username = $_SESSION['username'];
$userid = isset($_SESSION['userid']) ? $_SESSION['userid'] : "Unknown";

include "connection.php";
?>


<?php
    $dbh = $dbh->query("SELECT * FROM buku WHERE isdel = 0");
    $bukus = $dbh->fetch(PDO::FETCH_ASSOC);
?>
 <header>
            <h1>Selamat Datang, <?php echo htmlspecialchars($username); ?>!</h1>
        </header>

<a href="input.php">
  <button type="button" class="btn mt-3 mb-1 ms-1" style="background-color: #002d72; color:white "><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
  <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/>
</svg></button>
</a>

<table class="table table-striped mb-0">
  <tr style="background-color: #002d72; color:white">
    <th scope="col">No</th>
    <th scope="col">Judul</th>
    <th scope="col">Tahun Terbit</th>
    <th scope="col">Aksi</th>
</tr>
<br>
 
<?php
    $no = 1;
    while($bukus = $dbh->fetch(PDO::FETCH_ASSOC))
    {
?>

<tr>
    <td><?php echo $no?></td>
    <td><?php echo $bukus['judul']?></td>
    <td><?php echo $bukus['tahun']?></td>
    <td> <a href="edit.php?id=<?php echo $bukus['id']?>"><button type="button" class="btn btn-warning">Edit</button> </a> - <a href="delete.php?id=<?php echo $bukus['id']?>">  <button type="button" class="btn btn-danger">Hapus</button> </a> </td>
</tr>

<?php
    $no++;
    }
?>

</table>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Selamat Datang</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</head>
<body>

<div class="container">
        <br>
        <nav>
            <ul>
                <li><a href="profile.php">Profile</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </nav>

        <section>
            <p>Halo, <?php echo htmlspecialchars($username); ?>! (ID: <?php echo $userid; ?>)</p>
            <p>Ini adalah halaman utama setelah login. Anda bisa mengakses halaman lain melalui menu di atas.</p>
        </section>

        <footer>
            <p>&copy; 2024 Aplikasi Anda. <a href="terms.php">Syarat & Ketentuan</a></p>
        </footer>
    </div>
</body>
</html>