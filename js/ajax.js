//inserting or Updating data
$(document).on('click', "#submit", function(e) {
    e.preventDefault();
    let data = {
        task_id: $('#task_id').val(),
        task_name: $('#task_name').val(),
        task_time: $('#task_time').val(),
        task_date: $('#task_date').val(),
        description: $('#description').val()
    }
    $.ajax({
        url: './backend/create_update.php',
        method: "POST",
        data: data,
        success: function(res) {
            $('#task_id').val('');
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
load_data();

//delete data
$(document).on('click', '.delete', function() {
    let id_value = $(this).attr('id');
    $.ajax({
        url: './backend/delete.php',
        method: "POST",
        data: { id: id_value },
        success: function(res, status) {
            if (status == 'success') {
                load_data();
            }
        }
    })
});