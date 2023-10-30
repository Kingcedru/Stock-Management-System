<?php
session_start();
include 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="styles.css" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    <?php
    if($_SESSION['name']){
        ?>
    <section class='flex flex-col  gap-20 h-screen'>
        <nav class='flex'>
            <ul class='flex gap-2'>
                <li class=''>Stock 1
                    <ul>
                        <li><a href="record.php">Record Stock</li></a>
                        <li><a href="viewRecord.php">View Stock</li></a>
                        <li><a href="totalStock.php">Total Stock</li></a>
                    </ul>
                </li>
                <li class=''>Stock 2
                    <ul>
                        <li><a href="record.php">Record Stock</li></a>
                        <li><a href="viewRecord2.php">View Stock</li></a>
                        <li><a href="totalStock.php">Total Stock</li></a>
                    </ul>
                </li>
                <li>Sales
                    <ul>
                        <li><a href="sales.php">Record Sales</li></a>
                        <li><a href="viewSales.php">View Sales</li></a>
                        <li><a href="viewRecord.php">Total Sales</li></a>
                    </ul>
                </li>
                <li>Expense</li>
                <li>Expense</li>
            </ul>
            <a href=' logout.php'>Logout</a>
        </nav>



        <h1 class="text-3xl font-bold">
            Stock Management Stock
            Record
        </h1>
        <?php
echo"
<table border = '1' class='w-full text-sm text-left text-gray-500 dark:text-gray-400'>
<tr>
<th class='text-xl py-4 text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400'>id</th>
<th class='text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400'>ProductName</th>
<th class='text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400'>Price</th>
<th class='text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400'>Quantity</th>
<th class='text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400'>Date</th>
<th class='text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400'>total</th>
<th class='text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400'>Status</th>
</tr>";

$fetch = mysqli_query($conn,"select * from stocks");

while($row = mysqli_fetch_array($fetch))
{
    echo "<tr class='bg-white border-b dark:bg-gray-800 dark:border-gray-700'>";
    echo "<td class='px-6 py-4'>".$row['Id']."</td>";
    echo "<td>".$row['Name']."</td>";
    echo "<td>".$row['price']."</td>";
    echo "<td>".$row['quantity']."</td>";
    echo "<td>".$row['dates']."</td>";
    echo "<td>".$row['total']."</td>";
    echo "<td><button class='bg-red-700 px-4 py-2 rounded-md'><a href='deleteS.php?id=".$row['Id']."'>Delete</a></button> 
    <button class='bg-green-600 px-4 py-2 rounded-md'><a href='updateS.php?id=".$row['Id']."'>Edit</a></button> 
</td>";
    }
?>
</body>

</html>