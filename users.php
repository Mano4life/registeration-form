<?php include("inc/db.php") ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>users</title>
    <!-- fonts -->
    <link href="https://fonts.cdnfonts.com/css/poppins" rel="stylesheet" />
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <!-- main styles -->
    <link rel="stylesheet" href="./css/users.css" />
</head>

<body>
    <a href="index.php" class="link">add new</a>
    <?php
    $get_db = 'SELECT * FROM `users`';
    $result = mysqli_query($connect_db, $get_db);

    if (mysqli_num_rows($result)) : ?>

        <table class="table table-striped table-bordered table-responsive-md">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">name</th>
                    <th scope="col">user name</th>
                    <th scope="col">email</th>
                    <th scope="col">number</th>
                    <th scope="col">password</th>
                    <th scope="col">gender</th>
                </tr>
            </thead>
            <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                <tbody>
                    <tr>
                        <th scope"row" class="table-light"><?= $row['id'] ?></th>
                        <td class="table-light"><?= $row['name'] ?></td>
                        <td class="table-light"><?= $row['user_name'] ?></td>
                        <td class="table-light"><?= $row['email'] ?></td>
                        <td class="table-light"><?= $row['phone_no'] ?></td>
                        <td class="table-light"><?= $row['password'] ?></td>
                        <td class="table-light"><?= $row['gender'] ?></td>
                    </tr>
                </tbody>
            <?php endwhile ?>
        </table>

    <?php endif ?>
    <!-- bootstrap scripts -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>

</html>