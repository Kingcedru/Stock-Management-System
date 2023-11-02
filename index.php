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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h2>Login Form</h2>
        <form method='POST' action='index.php'>
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" name='username' class="form-control" id="username" placeholder="Enter username">
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" name='password' class="form-control" id="password" placeholder="Enter password">
            </div>

            <?php
            if(isset($_POST['login'])){
                $name = $_POST['username'];
                $pass = $_POST['password'];
        
                $sql = mysqli_query($conn,"select * from users where username = '$name' and password = '$pass'");
        
                if (mysqli_num_rows($sql))
                {
                    $_SESSION['username'] = $name;
                    header('location:./stock1/record.php');
                }
                else{
                echo "Wrong Username or password";
                }
            }
        ?>
            <button name='login' type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>