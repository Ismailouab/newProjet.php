<?php
$email= @$_POST["email"];
$password= @$_POST["password"];
if($email && $password){
    $conn = new PDO("mysql:host=localhost;dbname=etupro", "root", "");
    $query=$conn->prepare("select * from professor where email=? and password=?" );
    $query->execute([$email,$password]);
    $users=$query->fetch();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/stylehome.css">
    <title>Document</title>
</head>
<body>
<body>
<form action="prof.php" method="post">
    <div class="login-box">
        <div class="login-header">
            <header>Welcome</header>
        </div>
        <div class="input-box">
            <input type="text" class="input-field" placeholder="Email"  name="email" >
        </div>
        <div class="input-box">
            <input type="password" class="input-field" placeholder="Password"  name="password">
        </div>
        <div class="input-submit">
            <button class="submit-btn" id="submit"></button>
            <label for="submit">Sign In</label>
        </div>
    </div> 
</form>
</body>
</html>