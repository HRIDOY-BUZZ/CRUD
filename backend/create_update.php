<?php
    // if(isset($_POST['submit']))
    //{
        require_once('db.php');
        $task_id = htmlentities($_POST['task_id']);
        $task_name = htmlentities($_POST['task_name']);
        $task_time = htmlentities($_POST['task_time']);
        $task_date = htmlentities($_POST['task_date']);
        $description = htmlentities($_POST['description']);

        $q = "SELECT * FROM tasks WHERE id=".$task_id;

        $rst = $conn->query($q);

        if ($rst->num_rows > 0) {
            $query = "UPDATE tasks SET task_name='$task_name', time='$task_time', date='$task_date', description='$description' WHERE id=" . $task_id;

            if ($conn->query($query)) {
                $form_success = "Data with ID ".$task_id." has been Updated Successfully!!";
            } else {
                $form_error = "Error! The Data with ID ".$task_id." was Unable to Update!!";
            }
        }
        else{
            $query = "INSERT INTO tasks(id, task_name, time, date, description) VALUES(?,?,?,?,?)";
            $stmt = $conn->prepare($query);

            $stmt->bind_param('issss', $task_id, $task_name, $task_time, $task_date, $description);
    
            if ($stmt->execute()) {
                $form_success = "Task Added Successfully!";
            } else {
                $form_error = "Error Occured, please try again!";
            }
        }
        

       

        // echo "messages = ".$form_success." ".$form_error;
    //}
?>