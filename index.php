<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('chunks/head.php'); ?>
</head>
<body>
    <div class="page-wrapper">
        <?php 
            require_once('backend/db.php');

            include('backend/create.php');
            include('backend/read.php');
            include('backend/update.php');
            include('backend/delete.php');

            include('chunks/header.php');

            include('chunks/main.php');

            include('chunks/footer.php');
            include('chunks/scripts.php'); 
        ?>
    </div>
</body>
</html>