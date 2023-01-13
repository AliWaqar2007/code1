<?php
include 'connection.php';

if(isset($_POST['submit']))
{
    $i = $_POST['id'];
    $s = $_POST['password'];
    $n = $_POST['name'];
    $p = $_POST['phone'];
    $a = $_POST['address'];
    $e = $_POST['email'];

    $q = "Insert into student (id,password,name,phone,address,email) values($i,'$s','$n','$p','$a','$e')";
    $result = mysqli_query($con,$q);

    if($result)
    {
        //echo "Successfully inserted";
        header('location:signin.php');
    }
    else
    {
        die(mysqli_error($con));
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<div class="container my-3">
        <form method="post">
        <div class="mb-3">
            <label>ID</label>
            <input type="text" class="form-control" autocomplete="off" name="id">
        </div>
        <div class="mb-3">
            <label>Password</label>
            <input type="text" class="form-control" autocomplete="off" name="password">
        </div>
        <div class="mb-3">
            <label>Name</label>
            <input type="text" class="form-control" autocomplete="off" name="name">
        </div>
        <div class="mb-3">
            <label>Phone</label>
            <input type="text" class="form-control" autocomplete="off" name="phone">
        </div>
        <div class="mb-3">
            <label>Address</label>
            <input type="text" class="form-control" autocomplete="off" name="address">
        </div>
        <div class="mb-3">
            <label>E-mail</label>
            <input type="text" class="form-control" autocomplete="off" name="email">
        </div>
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div> 
</body>
</html>