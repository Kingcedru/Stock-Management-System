<?php
session_start();
include '../connection.php';
?>
<!DOCTYPE html>
<html lang="en">

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
            <button type='submit' a href=' logout.php' class='btn btn-primary'>Logout</button></a>
        </div>
    </nav>
    <div class="container">
        <h1 class="text-center">
            Stock Management Stock
            total Expense
        </h1>
        <?php
        echo"
        <table class='table'>
            <thead>
            <tr>
            <th class='text-xs text-gray-700 uppercase bg-primary dark:bg-gray-700 dark:text-gray-400'>Description</th>
            <th class='text-xs text-gray-700 uppercase bg-primary dark:bg-gray-700 dark:text-gray-400'>Amount</th>
            </tr>
            </thead>";
        
        $fetch = mysqli_query($conn,"select description, sum(amount) as amount from expenses group by description");
        
        while($row = mysqli_fetch_array($fetch))
        {
        echo "<tr class='bg-white border-b dark:bg-gray-800 dark:border-gray-700'>";
        echo "<td>".$row['description']."</td>";
        echo "<td>".$row['amount']."</td>";
        echo "</tr>";
        echo "<td class='text-'>total</td>";
        echo "<td>5000</td>";
        }
        }
        ?>
    </div>
</body>

</html>