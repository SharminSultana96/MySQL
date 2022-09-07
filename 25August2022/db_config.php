<?php
// Connect to the database server
$mysqli = @new mysqli('localhost', 'jannat', 'abcd', 
'wdpf51'); //connection er jonno only aetokoe enough
 if ($mysqli->connect_errno) {
    echo $mysqli->connect_errno;
    echo "<br>";
    echo $mysqli->connect_error;

 exit();
 
 }


?>