<?php
session_start();
 include 'connection.php';
?>
<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="styles.css" rel="stylesheet">
</head>

<body>
    <?php
    if($_SESSION['name']){
        ?>
    <section class='flex flex-col items-center gap-20 h-screen'>
        <h1 class="text-3xl font-bold">
            Stock Management Stock
            Record
        </h1>
        <a href='logout.php'>Logout</a>
    </section>
    <?php
    }
else{
    header('location:index.php');
}
?>
</body>

</html>