<?php
require "config.php";
if(!empty ($_POST)){
    $title= $_POST['title'];
    $description = $_POST['description'];

    $sql = "INSERT INTO todo(title, description) VALUE (:title, :description)";
    $pdostatement = $pdo-> prepare($sql);
    $result = $pdostatement->execute(
        array(
            ':title' => $title,
            ':description' => $description
        )
    );
    if($result){
        echo "<script>alert('New ToDo is Added');</script>";
        echo "<script>windows.location='index.php'</script>";
    }
}
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create New</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
</head>
<body>
<div class="card">
    <div class="card-body">
        <h2>Create new ToDo</h2>
        <form class="" action="add.php" method="post">
            <div class="form-group">
                <label for="">Title</label>
                <input type="text" class="form-control" name="title" value="" required>
            </div>
            <div class="form-group">
                <label for="">Description</label>
                <textarea name="description" class="form-control" id="" cols="30" rows="10"></textarea>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" name="" value="UPDATE">
                <a type="text" class="btn btn-warning" href="index.php">  Back </a>
            </div>
        </form>
    </div>
    
</div>
</body>
</html>