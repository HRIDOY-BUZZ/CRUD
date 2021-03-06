<main>
    <div class="row">
        <div class="col-8">
            <div class="container">
                <div class="list-div">
                    <h2>Your To-Do List</h2>

                    <div class="table-div">
                        <div id="table" class="container">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-4">
                <div class="form-div">
                    <h2>ADD / UPDATE TASK</h2>
                    <div class="container">
                        <form class="form-container" action="" method="post" id="myform">
                            <input type="number" class="form-control" name="task_id" id="task_id" placeholder="TASK ID (optional for new task)" required>
                            <input type="text" class="form-control" name="task_name" id="task_name" placeholder="TASK NAME" required>
                            <input type="time" class="form-control" name="task_time" id="task_time"  required>
                            <input type="date" class="form-control" name="task_date" id="task_date"  required>
                            <textarea class="form-control" name="description" id="description" cols="30" rows="5" placeholder="Describe the Task here . . ."></textarea>
                            <br>
                            <input type="submit" class="form-control btn btn-primary" name="submit" id="submit" value="SAVE DATA">
                        </form>
                    </div>
                </div>
        </div>
    </div>
</main>