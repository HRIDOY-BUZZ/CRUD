//inserting data
$(document).on('click', "#submit", function(e) {
    e.preventDefault();
    let data = {
        task_name: $('#task_name').val(),
        task_time: $('#task_time').val(),
        task_date: $('#task_date').val(),
        description: $('#description').val()
    }
    $.ajax({
        url: './backend/create.php',
        method: "POST",
        data: data,
        success: function(res) {
            $('#task_name').val('');
            $('#task_time').val('');
            $('#task_date').val('');
            $('#description').val('');
            load_data();
        }
    })
});
//Read Data
function load_data() {
    $.ajax({
        url: './backend/read.php',
        method: "GET",
        success: function(res, status) {
            if (status == "success") {
                $("#table").html(res);
            }
        }
    });


}

//calling load_data() for the load data from show.php as soon as document load....
load_data();