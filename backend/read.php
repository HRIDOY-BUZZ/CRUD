<?php

    include('db.php');    

    $query = "SELECT * FROM tasks";

    $result = $conn->query($query);

    if ($result->num_rows > 0) {
?>
<table class="table table-bordered">
    <tbody>
        <tr>
            <th>ID</th>
            <th>Task NAme</th>
            <th>Time</th>
            <th>Date</th>
            <th>Description</th>
            <th>Delete</th>
        </tr>

        <?php
            while ($row = $result->fetch_assoc()) {
        ?>

        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['task_name']; ?></td>
            <td><?php echo $row['time']; ?></td>
            <td><?php echo $row['date']; ?></td>
            <td><?php echo $row['description']; ?></td>
            <td><button type='button' class='btn btn-danger delete' name="delete"
                    id='<?php echo $row['id']; ?>'>Delete</button></td>
        </tr>

        <?php } ?>

    </tbody>
</table>

<?php                   
    }
    else {
        echo "<h3> NO TASK IS ON THE LIST</h3>";
    }
?>