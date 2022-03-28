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
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />


    <title>CB | Accounts</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
</head>

<body>
    <style>
    body {
        background-color: rgb(234, 238, 241);
    }

    nav {
        background-color: rgb(107, 180, 245);
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


    .nav-item a:hover {
        background-color: rgb(182, 233, 233);
        color: blue;

    }

    .accbody {
        border: 1px solid black;
        margin-left: 15em;
        margin-right: 15em;
        margin-top: 3em;
        padding: 2em;
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
                <a class="nav-link" href="">Account Balance: <span style="color: purple">

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
            <h3 style="
        font-family: Georgia;
            font-size: 1.2rem;
            text-align: center;
            padding-top: 10px;
            color: rgb(10, 10, 10);
            
          ">
                Your Account Information:
            </h3>
        </div>
        <br>
        <table class="table">

            <tbody>
                <tr>
                    <th class="table-secondary" scope="row">Account No:</th>
                    <td class="table-primary"><?php echo $result['accno'];?></td>
                </tr>
                <tr>
                    <th scope="row">Holder Name:</th>
                    <td class="table-info"><?php echo $result['name'];?></td>
                </tr>
                <tr>
                    <th class="table-secondary" scope="row">Balance : Rs.</th>
                    <td class="table-primary"><?php echo $result['balance'];?></td>
                </tr>
                <tr>
                    <th scope="row">Email :</th>
                    <td class="table-info"><?php echo $result['email'];?></td>
                </tr>
                <tr>
                    <th class="table-secondary" scope="row">Mobile No : </th>
                    <td class="table-primary"><?php echo $result['phone'];?></td>
                </tr>
                <tr>
                    <th scope="row">Created On :</th>
                    <td class="table-info"><?php echo $result['timestamp'];?></td>
                </tr>
                <tr>
                    <th class="table-secondary" scope="row">Branch Name:</th>
                    <td class="table-primary">CORE BANKING</td>
                </tr>
                <tr>
                    <th scope="row">Branch Location:</th>
                    <td class="table-info" colspan="2">Andhra University</td>
                </tr>
            </tbody>
        </table>


    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>