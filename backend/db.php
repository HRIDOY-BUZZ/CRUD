<?php
    $conn = new mysqli('localhost', 'root', 'root', 'todolist');

    if ($conn->connect_error) {
        die("Connection Failed");
    }
?>