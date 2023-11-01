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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>

<body>
    <?php
    if($_SESSION['username']){
        ?>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Brand Name</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent"
            aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Stock1
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="record.php">Record Stock</a>
                        <a class="dropdown-item" href="viewRecord.php">View Stock</a>
                        <a class="dropdown-item" href="totalStock.php">Total Stock</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Stock 2
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="record2.php">Record Stock</a>
                        <a class="dropdown-item" href="viewRecord2.php">View Stock</a>
                        <a class="dropdown-item" href="totalStock2.php">Total Stock</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Sales
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="sales.php">Record Sales</href=>
                            <a class="dropdown-item" href="viewSales.php">View Sales</a>
                            <a class="dropdown-item" href="viewRecord.php">Total Sales</a>
                    </div>
                </li>
            </ul>
            <button type='submit'><a href=' logout.php' class='btn btn-primary'>Logout</button></a>
        </div>
    </nav>
    <div class='flex flex-col items-center gap-2'>
        <h1 class="text-3xl font-bold">
            Stock Management Stock
            Record
        </h1>
        <form method='POST' action='record.php'
            class=' flex flex-col pt-10 bg-indigo-600 py-10 px-10 w-4/6 h-6/6 rounded-2xl'>
            <label>Product Name</label><input type=' text' placeholder='Enter username' name='name' required
                class='border-2'>
            <label>Price</label><input type=' text' placeholder='Enter username' name='price' required class='border-2'>
            <label>Quantity</label><input type=' text' placeholder='Enter username' name='quantity' required
                class='border-2'>
            <input type='submit' name='record' value='Record' class='border-2 text-danger'>
        </form>
    </div>
    </section>
    <?php
if(isset($_POST['record'])){
    $name = $_POST['name'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $total = $price * $quantity;

	$sql = mysqli_query($conn,"insert into stock(Name,price,quantity,dates,total) values ('$name','$price','$quantity',Now(),'$total')");

    if($sql)
    {
        ?>
    <script>
    alert("recorded");
    </script>
    <?php 
    }
    else
    {
        die('not inserted'.mysqli_error($conn));
    }
}
}
?>

</body>

</html>