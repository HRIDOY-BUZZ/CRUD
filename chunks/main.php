<main>
    <div class="row">
        <div class="col-8">
            <div class="container">
                <div class="list-div">
                    <h2>Your To-Do List</h2>

                    <div class="table-div">
                        <div class="container">
                            <?php
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
                                        <th>Edit</th>
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
                                        <td><button type='button' class='btn btn-warning edit' id='<?php echo $row['id']; ?>'>Edit</button></td>
                                        <td><button type='button' class='btn btn-danger delete' id='<?php echo $row['id']; ?>'>Delete</button></td>
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
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-4">
                <div class="form-div">
                    <h2>ADD NEW TASK</h2>
                    <div class="container">
                        <form class="form-container" action="" method="post">
                            <input type="text" class="form-control" name="task_name" id="task_name" placeholder="TASK NAME" required>
                            <input type="time" class="form-control" name="task_time" id="task_time"  required>
                            <input type="date" class="form-control" name="task_date" id="task_date"  required>
                            <textarea class="form-control" name="description" id="description" cols="30" rows="5" placeholder="Describe the Task here . . ."></textarea>
                            <br>

                            <?php
                                // echo "messages = ".$form_success." ".$form_danger;
                                if($form_success != "")
                                {
                            ?>
                            
                            <div class="alert alert-success" role="alert">
                                <?php echo $form_success; ?>
                            </div>
                            <?php
                                }
                                else if($form_error != "")
                                {
                            ?>
                            
                            <div class="alert alert-danger" role="alert">
                                <?php echo $form_error; ?>
                            </div>
                            <?php
                                }
                            ?>
                            <input type="submit" class="form-control btn btn-primary" name="submit" value="ADD TO LIST">
                        </form>
                    </div>
                </div>
        </div>
    </div>
</main>