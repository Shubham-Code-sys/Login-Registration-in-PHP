<?php

session_start();
if(!isset($_SESSION['username'])){
    header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Home</title>
</head>
<style>
body{
    background: #000046;  /* fallback for old browsers */
    background: -webkit-linear-gradient(to right, #1CB5E0, #000046);  /* Chrome 10-25, Safari 5.1-6 */
    background: linear-gradient(to right, #1CB5E0, #000046); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
}
</style>
<body>
<div class="container pt-5 text-center">
    <h1 style="text-transform: uppercase;color:#fff;"> Welcome "<?php echo $_SESSION['username']; ?>" </h1>
    <br><br>
    <a href="logout.php"><button class="btn btn-primary"> Logout </button></a>
    <a href="login.php"><button class="btn btn-success"> Back </button></a>
</div>
</body>
</html>