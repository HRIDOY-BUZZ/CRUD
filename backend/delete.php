<?php
    include_once('db.php');

    $query = "DELETE FROM tasks WHERE id=" . $_POST['id'] . " LIMIT 1";

    if ($conn->query($query)) {
        $delete_success = "Data Deleted Successfully!";
    } else {
        $delete_dailed = "Unable to Delete Data" . $conn->error;
    }
?>