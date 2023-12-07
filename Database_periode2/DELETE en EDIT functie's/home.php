<?php include "db.php" ;
$pdo = new Database();
$hello = $pdo->selectUser();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 60%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
    <table>
        <tr>
            <th>Username</th>
            <th>Password</th>
            <th>Action</th>
        </tr>
        <tr>
            
<?php foreach ($hello as $row){ ?>
            
            <td><?php echo $row['naam'];?> </td>
            <td><?php echo $row['password'];?> </td>
            <td colspan="2"><a href="edit.php?id=<?php echo $row['id']?>">Edit</a><a href="delete.php?id=<?php echo $row['id']?>">Delete</a></td>
        </tr>
    <?php } ?>
    </table>
</body>
</html>