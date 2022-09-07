<?php
    $db = new mysqli('localhost', 'root', '', 'wdpf51');
    // echo $_GET['id'];
    $$id = $_GET['id'];

    $sql = "DELETE FORM students WHERE students_id='$id'";
    $db->query($sql);

    if($db->affected_rows>0){
        header("Location:students_list.php");
    }
?>