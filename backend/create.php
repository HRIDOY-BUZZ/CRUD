<?php
    if(isset($_POST['submit']))
    {
        $task_name = htmlentities($_POST['task_name']);
        $task_time = htmlentities($_POST['task_time']);
        $task_date = htmlentities($_POST['task_date']);
        $description = htmlentities($_POST['description']);

        // $task_name = mysqli_real_escape_string($task_name);
        // $task_time = mysqli_real_escape_string($task_time);
        // $task_date = mysqli_real_escape_string($task_date);
        // $description = mysqli_real_escape_string($description);

        $query = "INSERT INTO tasks(task_name, time, date, description) VALUES(?,?,?,?)";

        $stmt = $conn->prepare($query);

        $stmt->bind_param('ssss', $task_name, $task_time, $task_date, $description);

        if ($stmt->execute()) {
            $form_success = "Task Added Successfully!";
        } else {
            $form_error = "Error Occured, please try again!";
        }

        // echo "messages = ".$form_success." ".$form_error;
    }
?>