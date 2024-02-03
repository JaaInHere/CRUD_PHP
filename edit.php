<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<div class="card" id="container">
    <h2>Edit user</h2>    
    <?php 
    include_once('connection.php');
    $id = $_GET['id'];
    $data = mysqli_query($mysqli, "SELECT * FROM pegawai where id='$id'");
    while($d = mysqli_fetch_array($data)){
        // print_r($d);
        ?>
        <form method="post" action="update.php">
            <div class="class-body">
            <table border="1" class="userTable">
                <tr>
                    <td>Name</td>
                    <td>
                        <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
                        <input type="text" name="name" value="<?php echo $d['name']; ?>">
                    </td>
                </tr>
                <tr>
                    <td>Age</td>
                    <td>
                        <input type="number" name="age" value="<?php echo $d['age']; ?>">
                    </td>
                </tr>
                <tr>
                    <td>Address</td>
                    <td>
                        <input type="text" name="address" value="<?php echo $d['address']; ?>">
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <a href="index.php">BACK</a>
                    <input type="submit" value="Save">
                </tr>
            </table>
            </div>
        </form>
        </div>
        <?php
    }
    ?>
</body>
</html>