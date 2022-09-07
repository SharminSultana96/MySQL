<?php $db = new mysqli('localhost', 'root', '', 'wdpf51'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Students Entry System</h1>
    <form action="" method="post">
        <input type="number" name="id" placeholder="Enter ID"><br><br>
        <input type="text" name="name" placeholder="Enter Name"><br><br>
        <input type="email" name="email" placeholder="Enter Email"><br><br>
        <input type="text" name="phone" placeholder="Enter Phone Number"><br><br>
        <input type="submit" name="submit" value="SUBMIT">
    </form>

    <?php
        if(isset($_POST['submit'])){
            extract($_POST);
        
        // if(isset($_POST['submit'])){
        //     $id = $_POST['id'] . "<br>";
        //     $name = $_POST['name'] . "<br>";
        //     $email = $_POST['email'] . "<br>";
        //     $phone = $_POST['phone'] . "<br>";

        //     $result = $id . " " . $name . " " . $email . " " . $phone . "\n";
        //     echo $result;
        // }

        $sql = "INSERT INTO students VALUES('$id', '$name', '$email', '$phone')";
        $db->query($sql);
        if($db->affected_rows>0){
            echo "Successfully inserted";
            echo "<a href=\"students_list.php\">Show Data</a>";
        }
    }

?>
<a href="students_list.php">Click Here</a>
<a href="dbconfig1.php">Click Here</a>
</body>
</html>