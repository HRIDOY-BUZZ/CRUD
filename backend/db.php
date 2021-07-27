<?php
    $conn = new mysqli('localhost', 'root', 'root', 'todolist');

    if ($conn->connect_error) {
        die("Connection Failed");
    }

    $form_success = "";
    $form_error = "";

    $delete_success = "";
    $delete_failed = "";
?>