<?php
    session_start();
    include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BON | Login</title>
    <link rel="stylesheet" href="css/login.css">
</head>

<body>
    <header>

        <nav>
            <h1>
                <a href="index.php">Core Banking </a><span>
                    <h2>LogIn</h2>
                </span>
            </h1>
        </nav>
    </header>
    <section>
        <div class="formbody" style="border-top-right-radius:10px;">
            <div
                style="margin-left: 11%;height: 40vh;text-align:center;margin-top:20px;width: 80%;border-radius: 10px;">
                <form action="" style="margin-left: -15px;margin-top: 20px;" class="formleft" method="post">

                    <input type="text" id="username" name="username" class="forminputtext"
                        placeholder="   Enter your name">
                    <br>
                    <input type="password" id="pwd" name="password" class="forminputtext"
                        placeholder="   Enter your Password">
                    <br>
                    <input type="submit" name="submit" class="acbtn"
                        style=" background-color:hsl(214, 85%, 62%) ; color:white;width: 10%; padding: 10px; margin-left: 20px; margin-top: 20px; margin-right: 15px;"
                        value="Login"></input>
                    <br>
                    <br>
                    <p>New here? Click <a href="signup.php">here</a> to register !</p>
                </form>
            </div>
        </div>
    </section>
</body>

</html>

<?php

    if(isset($_POST['submit']))
    {
        $username = $_POST['username'];
        $pwd = $_POST['password'];
        $query = "SELECT * FROM user where name='$username' && password = '$pwd'";
        $data = mysqli_query($conn,$query);
        $total = mysqli_num_rows($data);
        if($total == 1){
            $_SESSION['user_name'] = $username;
            header('location:accounts.php');
        } else {
            echo "<script></script>";
        }
    }

?>