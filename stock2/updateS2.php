<?php
session_start();
 include '../connection.php';
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
                        <a class="dropdown-item" href="../stock2/record2.php">Record Stock</a>
                        <a class="dropdown-item" href="../stock2/viewRecord2.php">View Stock</a>
                        <a class="dropdown-item" href="../stock2/totalStock2.php">Total Stock</a>
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
            <button type='submit' a href='logout.php' class='btn btn-primary'>Logout</button></a>
        </div>
    </nav>
    <div class="container">
        <div class='flex flex-col items-center gap-2'>
            <h1 class="text-center">
                Stock Management Stock
                Record
            </h1>
            <form method='POST' action='#'>
                <div class="form-group">
                    <label for="username">ProductName:</label>
                    <input type="text" name='username' class="form-control" id="name" placeholder="Enter username">
                </div>
                <div class="form-group">
                    <label for="price">Price:</label>
                    <input type="number" name='price' class="form-control" id="" placeholder="">
                </div>
                <div class="form-group">
                    <label for="quantity">Quantity:</label>
                    <input type="number" name='quantity' class="form-control" id="" placeholder="">
                </div>
                <button name='update' type="submit" class="btn btn-primary">Record</button>
            </form>
        </div>
        </section>
        <?php
if(isset($_POST['update']) && isset($_GET['id'])){
    $id = $_GET['id'];
    $name = $_POST['username'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $total = $price * $quantity;
    

	$sqls = mysqli_query($conn,"update stock2 set Name = '$name',price = '$price',Quantity = '$quantity',dates = Now(),total = '$total' where Id = '$id'")or die(mysqli_error($conn));

    if($sqls)
    {
        ?>
        <script>
        alert("updated");
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