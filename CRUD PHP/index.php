<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <!-- AOS ANIMATE -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>
<body data-aos="fade-down" data-aos-duration="2000">
    <?php 
    include_once('connection.php');
    $absen = mysqli_query($mysqli,'select * from pegawai');
    $no = 1;
    ?>

    <div class="card" id="container">
        <div class="card-header">
        <h2 class="card-header-title">User Information</h2>
        </div>
        <div class="card-body">
            <table border="1" class="userTable">    
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Address</th>
                    <th class="disappear">Delete</th>
                </tr>
                <?php  
                while($data = mysqli_fetch_array($absen)){
                    echo "<tr>";
                    echo "<td>",$no++;"</td>";
                    echo "<td>",$data['name']."</td>";
                    echo "<td>",$data['age']."</td>";
                    echo "<td>",$data['address']."</td>";
                    echo "<td class='disappear'> <a href='delete.php?id=".$data['id']."'>Delete</td>";
                    echo "<td> <a href='edit.php?id=".$data['id']."'>Edit</td>";
                    echo "</tr>";
                }
                ?>
             </table>
                     <!-- ini aksi -->
                    <div class="sidebar" id="spawnSidebar">
                        <button class="btn" id="actBtn" onclick="muncul()">Action</button>
                    </div>
        </div>
    </div>
                    <!-- ini sidebar -->
    <div class="add-card hide" id="sidebar">
    <button class="btn" id="addBtn"><a href="add.php" class="link">Add User</a></button>
    <button class="btn" id="delBtn" onclick="deleteData()">Delete</button>
    </div>
    <!-- AOS ANIMATE -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
    <script src="index.js"></script>
</body>
</html>
