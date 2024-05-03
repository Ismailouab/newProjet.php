<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/stylemod.css">
    <title>Document</title>
    
</head>


<?php

$conn = new PDO("mysql:host=localhost;dbname=etupro", "root", "");
$id=@$_POST["id_etu"];
$firstname=@$_POST["firstname"];
$name=@$_POST["name"];
$email=@$_POST["email"];
$school_level=@$_POST["school_level"];
// modifier les info 
if(@$_POST["action"]=="edit"){
    $query=$conn->prepare("UPDATE  etudiants SET firstname =? , name =? , email =? , school_level =? " );
    $query->execute([$firstname,$name,$email,$school_level]);
    header("location:prof.php");
}
?>
<?php
//  aficher les info 
$conn = new PDO("mysql:host=localhost;dbname=etupro", "root", "");
$id=@$_POST["id_etu"];
$query = $conn->prepare("SELECT * FROM etudiants WHERE id_etu=?");
$query->execute([$id]);
$rows = $query->fetch(PDO::FETCH_ASSOC);



?>
<body>
<?php
if (!empty($rows))?>
    <form  method="post">
        <input type="hidden" name="id_etu" value="<?=$rows['id_etu']?>;">
        <div class="input-box">
           <input class="input-field" type="text"  name="firstname" value="<?=$rows['firstname']?>">
        </div>
        <div class="input-box">
            <input class="input-field" type="text" name="name" value="<?=$rows['name']?>">
        </div>
        <div class="input-box">
            <input class="input-field" type="text" name="email" value="<?=$rows['email']?>">
        </div>
        <div class="input-box">
            <input class="input-field" type="text" name="school_level" value="<?=$rows['school_level']?>">
        </div>
        <input type="hidden" name="action" value="edit">
        <div class="input-submit">
            <button class="submit-btn" id="submit"></button>
            <label for="submit">Modify</label>
        </div>

    </form>


</body>
</html>
