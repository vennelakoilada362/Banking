<?php
    session_start();
    include("connection.php");
    $userprofile = $_SESSION['user_name'];

    if($userprofile == true)
    {

    } else 
    {
        header('location:login.php');
    }
    $query1 = "SELECT * FROM user where name='$userprofile'";
    $data = mysqli_query($conn,$query1);
    $result = mysqli_fetch_assoc($data);

    $user_accno = $result['accno'];
    $user_balance = $result['balance'];

    $query2 = "SELECT * FROM user";
    $listdata = mysqli_query($conn,$query2);
    $total = mysqli_num_rows($listdata);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>BON | Amount Transfer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
</head>

<body>
    <style>
    body {
        background-color: rgb(255, 255, 255);
    }

    .h4 {
        margin-top: auto;
        margin-right: 10em;
        margin-left: 1em;
        color: rgb(0, 0, 0);
        font-family: Georgia, "Times New Roman", Times, serif;
    }

    .nav-item a {
        color: rgb(0, 0, 0);

    }

    nav {
        background-color: rgb(107, 180, 245);
    }

    .nav-item a:hover {
        background-color: rgb(182, 233, 233);
        color: blue;

    }

    .accbody {
        border: 1px solid rgb(204, 12, 12);
        margin-left: 15em;
        margin-right: 15em;
        margin-top: 4em;
        padding-top: 1em;
        padding-right: 8%;
        padding-left: 5%;
        max-height: 27em;
    }



    .d1 p {
        padding: 2px;
        text-align: center;


    }

    .d1 {
        background-color: aliceblue;
    }

    input {
        margin: 1em;
        margin-right: 2em;
    }

    .dark {
        background-color: azure;
        text-align: center;
        font-weight: bold;
        font-family: Verdana, Geneva, Tahoma, sans-serif
    }

    .darklight {
        background-color: aliceblue;
    }
    </style>
    <nav>

        <ul class="nav nav-tabs justify-content" id="nav">
            <h4 class="h4">Core Banking</h4 class="h4">
            <li class="nav-item">
                <a class="nav-link" href="accounts.php">Accounts Summary</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="transactions.php">Transactions</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="transfer.php">Transfer</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="">Account Balance:
                    <span style="color: purple">

                        <?php echo $result['balance'];?>
                    </span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="logout.php">LogOut</a>
            </li>

        </ul>
    </nav>

    <div class="accbody">
        <div class="header">

            <h3 style="  font-family: Georgia; font-size: 1.2rem;text-align: center; padding-top: 5px; color: black;">
                Enter The Account Number
                :</h3>
        </div>
        <div class="transacinput">
            <form action="" method="">
                <input class="form-control" type="text" name="receiveraccno"
                    placeholder="   Enter the Acc.No of the Receiver:" style="padding-left:15px;">
                <input class="form-control" type="text" name="sentamount" placeholder="   Enter the Amount to Send:"
                    style="padding-left:15px;">
                <input class="btn btn-primary" type="submit" name="send" value="send" placeholder="Send">
            </form>
        </div>

        <div class="data-bs-spy=scroll">
            <!-- <div class="dark ">
                <p>Receiver Acc.No&emsp;|&emsp; Receiver Name</p>
            </div> -->
            <table class='table table-sm'>
                <thead>
                    <tr>
                        <th scope='col'>Receiver Acc.No</th>
                        <th scope='col'>Receiver Name</th>
                    </tr>
                </thead>
            </table>
            <div class="darklight">
                <?php
                    while ($result2 = mysqli_fetch_assoc($listdata)) {
                        if($user_accno != $result2['accno']){
                            echo "<table class='table table-sm'>
                               
                                <tbody>
                                  <tr>
                                    <td>".$result2['accno']."</td>
                                    <td>".$result2['name']."</td>
                                  </tr>
                                </tbody>
                              </table>";

                            
                        }
                    }
                ?>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>

<?php

    error_reporting(0);
    $receiveraccno = $_GET['receiveraccno'];
    $sentamount = $_GET['sentamount'];
    
    if($_GET['send'])
    {
        if($receiveraccno && $sentamount)
        {
            if($user_balance >= $sentamount)
            {
                //Update transaction Table
                $query3 = "INSERT INTO transactions VALUES('$user_accno','$receiveraccno','$sentamount')";
                $data = mysqli_query($conn,$query3);
                $user_balance = $user_balance - $sentamount;

                //Update User DB
                $userbalquery = "UPDATE user SET balance='$user_balance' WHERE accno='$user_accno' ";
                $userbaldata = mysqli_query($conn,$userbalquery);

                //Get Receiver Balance
                $query4 = "SELECT * FROM user where accno='$receiveraccno'";
                $rbal_data = mysqli_query($conn,$query4);
                $result3 = mysqli_fetch_assoc($rbal_data);
                $r_bal = $result3['balance'];
                $r_bal = $r_bal + $sentamount;

                //Update Receiver DB
                $receiverbalquery = "UPDATE user SET balance='$r_bal' WHERE accno='$receiveraccno' ";
                $receiverbaldata = mysqli_query($conn,$receiverbalquery);

                if($receiverbaldata){
                    header("location:transactions.php");
                }
            } else {
                //Handle less amount
                echo "<script>alert('Insufficient Bank Balance !')</script>";
            }    
        } 
    }

?>