<?php include_once("dbconfig.php"); ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <table class="table table-striped">
            <tr>
                <th>Number</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
            </tr>

            <?php
                 $sql = "SELECT * FROM employees";
                 $result = $db->query($sql);
                 while($data = $result->fetch_assoc()){
            ?>

            <tr>
                <td><?php echo $data['employeeNumber']; ?></td>
                <td><?php echo $data['firstName']; ?></td>
                <td><?php echo $data['lastName']; ?></td>
                <td><?php echo $data['email']; ?></td>
                <!-- echo and php chara short circuite e likhte hoy -->
            </tr>
            <?php
            }
            ?>
        </table>

    </div>
    <?php
        // $sql = "SELECT * FROM employees";
        // $result = $db->query($sql);
        // print_r($result);
        // echo "<pre>";

        // $data = $result->fetch_array()
        // while($data = $result->fetch_assoc()){
            // echo $data['employeeNumber'];
            // echo $data['firstName'];
            // echo $data['lastName'];
            // echo "<br>";
        // }
        // $data = $result->fetch_row()
        // $data = $result->fetch_column()
        // print_r($data);
    ?>
</body>
</html>