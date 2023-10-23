<?php
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
    <section class='flex flex-col items-center gap-20 h-screen'>
        <h1 class="text-3xl font-bold">
            Stock Management Stock
        </h1>
        <form method='POST' action='index.php'
            class=' flex flex-col pt-10 bg-indigo-600 py-10 px-10 w-4/6 h-4/6 rounded-2xl'>
            <label>Username</label><input type=' text' placeholder='Enter username' name='name' class='border-2'>
            <label>Password</label><input type=' password' name='pass' placeholder='Enter password'>

            <?php

        if(isset($_POST['login'])){
            $name = $_POST['name'];
            $pass = $_POST['pass'];
            
            $sql = mysqli_query($conn,"select * from users where username = '$name' and password = '$pass'");
    
            if (mysqli_num_rows($sql))
            {
                echo 'logged in';
            }
            else{
            echo "Wrong Username or password";
            }
        }
?>
            <input type='submit' name='login' value='Log in' class='border-2'>
        </form>
    </section>



</body>

</html>