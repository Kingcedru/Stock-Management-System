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
                        Used
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="../used/used.php">Record Stock</a>
                        <a class="dropdown-item" href="../used/viewUsed.php">View Stock</a>
                        <a class="dropdown-item" href="../used/viewUsed.php">Total Stock</a>
                    </div>
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
                        <a class="dropdown-item" href="../sales/sales.php">Record Sales</href=>
                            <a class="dropdown-item" href="../sales/salesviewSales.php">View Sales</a>
                            <a class="dropdown-item" href="../sales/salesviewRecord.php">Total Sales</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Expenses
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="../expense/recordExpense.php">Record Expense</href=>
                            <a class="dropdown-item" href="../expense/viewExpense.php">View Expense</a>
                            <a class="dropdown-item" href="../expense/totalExpense.php">Total Expense</a>
                    </div>
                </li>
            </ul>
            <button type='submit' class='btn btn-primary text-white'>
                <a href="../logout.php" class='text-white'>Logout</button></a>
        </div>
    </nav>
    <div class="container">
        <div class='flex flex-col items-center gap-2'>
            <h1 class="text-center">
                Stock Management Stock
                Record 2
            </h1>
            <?php
        echo"
        <table class='table bg-primary'>
        <thead>
        <th class='text-xl py-4 text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400'>id</th>
        <th class='text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400'>ProductName</th>
        <th class='text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400'>Price</th>
        <th class='text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400'>Quantity</th>
        <th class='text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400'>Date</th>
        <th class='text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400'>total</th>
        <th class='text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400'>Status</th>
        </thead>";
        
        $fetch = mysqli_query($conn,"select * from stock2");
        
        while($row = mysqli_fetch_array($fetch))
        {
        echo "<tbody class='bg-light'>";
        echo "<td class='px-6 py-4'>".$row['Id']."</td>";
        echo "<td>".$row['Name']."</td>";
        echo "<td>".$row['price']."</td>";
        echo "<td>".$row['Quantity']."</td>";
        echo "<td>".$row['dates']."</td>";
        echo "<td>".$row['total']."</td>";
        echo "<td><button class='btn btn-danger '><a href='./deleteS2.php?id=".$row['Id']."' >Delete</a></button>
        <button class='btn btn-success '><a href='./updateS2.php?id=".$row['Id']."'>Edit</a></button> 
        </td>";
        }
        }
        ?>
</body>

</html>