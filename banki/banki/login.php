<?php
    session_start();
    include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CB | Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
</head>

<body>
    <style>
    nav {
        background-color: rgb(107, 180, 245);
    }

    .h4 {
        margin-top: auto;
        padding-right: 6em;
        margin-right: 24em;
        color: rgb(0, 0, 0);
        font-family: Georgia, "Times New Roman", Times, serif;
    }

    .nav-item a {
        color: rgb(0, 0, 0);

    }

    .p1 {
        color: black;
        text-align: center;
    }

    .nav-item a:hover {
        background-color: rgb(182, 233, 233);
        color: blue;

    }
    </style>
    <header>

        <nav>

            <ul class="nav nav-tabs justify-content-end" id="nav">
                <h4 class="h4">HRMIS Banking</h4 class="h4">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="digital.php">Loans</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="digital.php">NetBankings</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="cards.php">Cards</a>
                </li>

            </ul>
        </nav>
    </header>
    <section>
        <div class="formbody" style="  border: 1.5px solid black;   text-align: center;
 margin-top: 4em; padding-bottom: 2em; margin-left:20em ; margin-right: 20em; ">
            <h4 style="margin-top: 2em; text-align: center; font-family: Georgia, 'Times New Roman', Times, serif;">
                LOGIN</h4>
            <div
                style=" margin-left: 25%; margin-right: 11%; height: 40vh;text-align:center;margin-top:6%;width: 50%;border-radius: 10px;">
                <form action="" class="formleft" method="post">
                    <input type="text" id="username" name="username" class="form-control" placeholder="Enter your name"
                        required>
                    <br>
                    <input type="password" id="pwd" name="password" class="form-control"
                        placeholder="Enter your Password" required>
                    <br>
                    <input type="submit" name="submit" class="btn primary-btn"
                        style=" background-color:hsl(214, 85%, 62%) ; color:white;width: 50%; padding: 5px; margin-left: 20px; margin-top: 20px; margin-right: 15px;"
                        value="Login"></input>
                    <br>
                    <br>
                    <p>New here? Click <a href="signup.php">here</a> to register !</p>
                </form>
            </div>
        </div>
    </section>
    <br>
    <hr>
    <footer>

        <p class="p1">

            © 2020Copyright@HRMISBanking.com
        </p>

    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
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