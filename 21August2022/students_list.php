<?php $db = new mysqli('localhost', 'root', '', 'wdpf51'); ?>


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
    <h1>Student Entry List</h1>
            <?php
                 $sql = "SELECT * FROM students";
                 $result = $db->query($sql);

                 echo "<h2>Total record found $result->num_rows</h2>";
                 echo "<table border=1>";
                 "<tr>;
                    <th>ID</th>;
                    <th>Name</th>;
                    <th>Email</th>;
                    <th>Phone</th>;
                    <th>Action</th>;
                </tr>";
                 while($data = $result->fetch_object()){
                
           
        echo "<tr>";
            echo "<td>$data->students_id</td>";
            echo "<td>$data->student_name</td>";
             echo "<td>$data->student_email</td>";
             echo "<td>$data->student_phone</td>"; ?>
             <td align="center">
                <!-- Delete Button -->
             <a href="student_delete.php?id=<?php echo $data->student_id ?>" 
             onclick= "return confirm('Are you sure')"><img src="bin.png" width="30" alt=""</a>

             <!-- Edit Button -->
             <a href="student_delete.php?id=<?php echo $data->student_id ?>" 
             onclick= "return confirm('Are you sure')"><img src="edit.png" width="30" alt=""</a>

            </td> 
            <?php
             echo "</tr>";
            }
            echo "</table>";
        ?>

</body>
</html>

<?php
// $sql = "SELECT * FROM employees";
// $result = $db->query($sql);
// print_r($result);
// echo "<pre>";

// $data = $result->fetch_array()
// while($data = $result->fetch_assoc()){
//     echo $data['employeeNumber'];
//     echo $data['firstName'];
//     echo $data['lastName'];
//     echo "<br>";
// }
// $data = $result->fetch_row()
// $data = $result->fetch_column()
// print_r($data);
?>