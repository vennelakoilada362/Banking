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
    $query = "SELECT * FROM user where name='$userprofile'";
    $data = mysqli_query($conn,$query);
    $result = mysqli_fetch_assoc($data);
    $user_accno = $result['accno'];

    $query2 = "SELECT * FROM transactions";
    $transactionsdata = mysqli_query($conn,$query2);
    $total = mysqli_num_rows($transactionsdata);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <title>CB | Transactions</title>
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
        padding: 2em;
    }

    .d1 p {
        padding: 2px;
        text-align: center;


    }

    .d1 {
        background-color: aliceblue;
    }
    </style>
    <nav>

        <ul class="nav nav-tabs justify-content" id="nav">
            <h4 class="h4">HRMIS Banking</h4 class="h4">
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
            <h3
                style="font-size: 1.2rem;text-align: center; padding-top: 10px; color: black; font-family: Georgia, 'Times New Roman', Times, serif;">
                Your Transactions :</h3>
        </div>
        <table class="table">
            <tbody>
                <div>
                    <?php
                $i = 0;
                while ($result2 = mysqli_fetch_assoc($transactionsdata)) {
                    $sender = $result2['sender_id'];
                    $receiver = $result2['receiver_id'];
                    if($user_accno == $sender || $user_accno == $receiver)
                    {
                        if($user_accno == $sender){
                            if($i++%2==0){
                                echo "<tr><div class='d1'>
                                <td><p>Debited: &nbsp;Rs.".$result2['amount']." transferred to Acc. No: ".$result2['receiver_id'].".</p></td>
                                </div> <hr></tr>";
                            } else {
                                echo "<tr><div class='d1' >
                                <td><p>Debited: &nbsp;Rs.".$result2['amount']." transferred to Acc. No: ".$result2['receiver_id'].".</p></td>
                                </div><hr></tr>";
                            }

                        }
                        else {
                            if($i++%2==0){
                                echo "<tr><div class='d1'>
                                <td><p>Credited: &nbsp;Rs.".$result2['amount']." from Acc. No: ".$result2['receiver_id'].".</p></td>
                                </div> <hr></tr>";
                            } else {
                                echo "<tr><divclass='d1' >
                                <td><p>Credited: &nbsp;Rs.".$result2['amount']." from Acc. No: ".$result2['receiver_id'].".</p></td>
                                </div> <hr></tr>";
                            }

                        }
                    }
                
                }
            ?>

                </div>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>