<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="card" id="container">
        <div class="card-header">
        <h2 class="card-header-title">Add User</h2>
        </div>
        <div class="card-body">
            <form action="insert.php" method="POST">
                <div class="form">
                    <div class="nameForm">
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name">
                    </div>
                    <div class="ageForm">
                        <label for="age">Age &nbsp;&nbsp;</label>
                        <input type="number" id="age" name="age">
                    </div>
                    <div class="addressForm">
                        <label for="address">Address</label>
                        <textarea name="address" id="address" cols="30" rows="5"></textarea>
                    </div>
                    <!-- INI button -->
                    <button type="submit" class="btn">Submit</button> 
                    <button type="submit" class="back"><a href="index.php" class="link">Back</a></button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
