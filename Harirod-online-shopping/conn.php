<?php 
    $conn = mysqli_connect('localhost', 'root', '', '');
    if(!$conn) {
        echo 'Connection error : ' .mysqli_connect_error();
    }
?> 