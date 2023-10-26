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
    <section class='flex flex-col gap-20 h-screen'>
        <nav class='flex'>
            <ul class='flex gap-2'>
                <li class=''>Stock 1
                    <ul>
                        <li><a href="record.php">Record Stock 1</li></a>
                        <li><a href="viewRecord.php">View Stock</li></a>
                        <li><a href="totalStock.php">Total Stock</li></a>
                    </ul>
                </li>
                <li class=''>Stock 2
                    <ul>
                        <li><a href="record2.php">Record Stock 2</li></a>
                        <li><a href="viewRecord.php">View Stock</li></a>
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
        <div class='flex flex-col items-center gap-2'>
            <h1 class="text-3xl font-bold">
                Stock Management Stock
                Record2
            </h1>
            <form method='POST' action='record2.php'
                class=' flex flex-col pt-10 bg-indigo-600 py-10 px-10 w-4/6 h-6/6 rounded-2xl'>
                <label>Product Name</label><input type=' text' placeholder='Enter username' name='name'
                    class='border-2'>
                <label>Quantity</label><input type=' text' placeholder='Enter username' name='quantity'
                    class='border-2'>
                <input type='submit' name='record2' value='Record' class='border-2'>
            </form>
        </div>
    </section>
    <?php
if(isset($_POST['record2'])){
    $name = $_POST['name'];
    $quantity = $_POST['quantity'];

	$sql = mysqli_query($conn,"insert into stock2(Name,Quantity) values ('$name','$quantity')");

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