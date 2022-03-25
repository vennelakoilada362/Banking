<?php include("connection.php") ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CB | SignUp</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

    <script>

    </script>
</head>

<body>
    <style>
    body {
        background-color: rgb(255, 255, 255);
    }

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

    .nav-item a:hover {
        background-color: rgb(182, 233, 233);
        color: blue;

    }

    .formleft {
        width: 50%;
        margin-left: 12em;
    }
    </style>
    <header>
        <nav>

            <ul class="nav nav-tabs justify-content-end" id="nav">
                <h4 class="h4">Core Banking</h4 class="h4">
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
        <div class="formbody" style="  border: 2px solid black; background-color: aliceblue;  text-align: center;
    margin-top: 2em; padding-bottom: 2em; margin-left:15em ; margin-right: 15em; border-top-right-radius:10px;">
            <h2>SIGNUP</h2>
            <div class="signupleft" style="height: 75%;">
                <form action="" class="formleft" method="">

                    <input type="text" id="accno" name="accno" class="form-control" minlength="6"
                        placeholder="Create your  account no." required>
                    <br>
                    <input type="text" id="name" name="name" class="form-control" placeholder="   Enter your name"
                        required>
                    <br>
                    <input type="text" id="phone" name="phone" class="form-control"
                        placeholder="   Enter your mobile no." required>
                    <br>
                    <input type="text" id="email" name="email" class="form-control"
                        placeholder="   Enter your email ID." required>
                    <br>
                    <input type="password" id="pwd" name="password" class="form-control"
                        placeholder="   Enter your Password" required>
                    <br>
                    <input type="text" id="balance" name="balance" class="form-control"
                        placeholder="   Enter your initial deposit." required>
                    <br>

                    <h3 class="bg-dark text-white">Terms and Conditions:</h3>
                    <ul style="text-align: left;">
                        <li> I am a citizen of India.</li>

                        <li>I am a student of Andhra University.</li>
                    </ul>
                    <input type="checkbox" id="terms" name="terms">&nbsp;&nbsp;I agree to all the terms above.

                    <input type="submit" class="btn primary-btn" name="signup"
                        style=" background-color:rgb(66, 156, 240) ; width: 75%; margin-left: 15px; margin-top: 20px;"
                        value="signup"></input>
                    <br>
                    <div class="signupright">
                        <p style="padding: 17px; color: rgb(10, 9, 9);  ">Already Have an account?</p>
                        <h5 style="padding: 10px; text-align: center;  border: 1px solid black; "><a href="login.php"
                                style="text-decoration: none;  color: rgb(214, 69, 243);">Click Here to Login !</a></h5>
                    </div>
                </form>
            </div>

        </div>
    </section>
    <?php
        error_reporting(0);
        $accno = $_GET['accno'];
        $name = $_GET['name'];
        $phone = $_GET['phone'];
        $email = $_GET['email'];
        $pwd = $_GET['password'];
        date_default_timezone_set('Asia/Kolkata'); 
        $timestamp = $_SERVER['REQUEST_TIME'];
        $createddate = date('F d,Y h:i:s A',$timestamp);
        $bal = $_GET['balance'];
        
        if($_GET['signup'] && $_GET['terms'] )
        {
            if($accno && $name && $phone && $email && $pwd && $bal){
                $query = "INSERT INTO user VALUES('$accno','$name','$phone','$email','$pwd','$createddate','$bal')";
                $data = mysqli_query($conn,$query);
                if($data){
                    header('location:login.php');
                }
            } 
            else 
            {
                echo "<script>alert('Please fill all the fields !');</script>";
            }

        } else {
            echo "<script>alert('Please check the terms and conditions !');</script>";
        }
        

    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>