<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styleAdd.css">
    <title>Document</title>
</head>
<body>
    <form  method="post">
    <div class="input-box">
        <input class="input-field" type="text" name="firstname" required placeholder="firstname">
    </div>
    <div class="input-box">
        <input class="input-field" type="text" name="name"required placeholder="Lastname">
    </div>
    <div class="input-box">
        <input class="input-field" type="text" name="email"required placeholder="Email">
    </div>
    <div class="input-box">
        <input class="input-field" type="text" name="school_level"required placeholder="School level">
    </div>
    <div class="input-add">
        <button class="add-btn" id="submit"></button>
        <label for="submit">ADD</label>
    </div>
    </form>
<!-- ajouter les info -->
<?php
$firstname=@$_POST["firstname"];
$name=@$_POST["name"];
$email=@$_POST["email"];
$school_level=@$_POST["school_level"];


if($firstname && $name && $email && $school_level){
$conn = new PDO("mysql:host=localhost;dbname=etupro", "root", "");
$query=$conn->prepare("INSERT  INTO  etudiants (firstname, name, email, school_level) VALUES (?,?,?,?)");
$query->execute([$firstname,$name,$email,$school_level]);
header("location:prof.php");
}
?>



</body>
</html>