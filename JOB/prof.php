<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styleprof.css">
    <title>Document</title>
</head>
<body>
<!-- delete les etudiant -->
<?php
$conn = new PDO("mysql:host=localhost;dbname=etupro", "root", "");
if(isset($_POST["action"]) && $_POST["action"]=='delete-student' && isset($_POST["id"])){  
    $query=$conn->prepare("DELETE FROM `etudiants` WHERE id_etu=?" );
    $query->execute([$_POST["id"]]);

}
?>
<!-- aficher les etudiant -->
<?php
$conn = new PDO("mysql:host=localhost;dbname=etupro", "root", "");
$query=$conn->query("SELECT * FROM etudiants" );
$rows=$query->fetchAll();
?>
<h1>les listes des étudiants</h1>  
    <form action="Add.php" method="post">
        <button class="add-btn">Add</button>
    </form>
            
    <table  class="content-table">
        <thead>
          <tr>
            <th>Num</th>
            <th>First name</th>
            <th>Last name</th>
            <th>Email</th>
            <th>School level</th>
            <th>options</th>
          </tr>
        </thead>

        <?php 
           foreach($rows as $row ):
        ?>
        <tbody>
             <tr>
                <td><?=$row["id_etu"]; ?></td>
                <td><?=$row["firstname"]; ?></td>
                <td><?=$row["name"]; ?></td>
                <td><?=$row["email"]; ?></td>
                <td><?=$row["school_level"]; ?></td>
                <td>
                    <form action="Modify.php" method="post">
                        <button class="modify-btn">Modify</button>
                    </form>
 
                    <form method="post">
                        <input type="hidden" name="id" value="<?=$row["id_etu"];?>">
                        <input type="hidden" name="action" value="delete-student">
                        <button class="delete-btn">DELETE</button>
                    </form>

                </td>
            </tr>

        </tbody>

       <?php endforeach ;?>
    </table>
</body>
</html>