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
    <link rel="stylesheet" href="css/style2.css">
</head>
<body>
<ul style=" background-color: #1d0f00;">
        <li><a  href="index.php" ><i class="fas fa-hand-holding-usd"></i><h2> BANK OF NIRVANA</h2>&nbsp;&nbsp;&nbsp;&nbsp;</a></li> 
    </ul>
    <div class="signupDiv" style="height:70vh;">
        <center style="border-bottom: 2px solid white;"><h1 class="head">Log In</h1></center>
        <div class="formbody" style="border-top-right-radius:10px;">        
            <div style="margin-left: 11%;height: 40vh;text-align:center;margin-top:20px;width: 80%; background-color: beige;border-radius: 10px;">
                <form action="" style="margin-left: -15px;margin-top: 20px;"class="formleft" method="post">
                    
                    <input type="text" id="username" name="username" class="forminputtext" placeholder="   Enter your name">
                    <br>
                    <input type="password" id="pwd" name="password" class="forminputtext" placeholder="   Enter your Password">
                    <br>
                    <input type="submit" name="submit" class="acbtn" style=" background-color:hsl(32, 81%, 13%) ; color:white;width: 80%; margin-left: 20px; margin-top: 20px;" value="Login"></input>
                    <br>
                    <br>
                    <p>New here? Click <a href="signup.php">here</a> to register !</p>
                </form>
            </div>
        </div>
    </div>
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