<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CB | Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
</head>

<body>
    <style>
    body {
        background-color: white;
    }

    .h4 {
        margin-top: auto;
        padding-right: 4em;
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


    .carousel-item {
        height: 34em;
        width: 100%;
    }

    .p1 {
        color: black;
        text-align: center;
    }

    .figure {
        display: flex;

    }

    .figure img {
        padding-left: 3em;
        margin-left: 12em;
    }

    figcaption {
        margin-left: 60em;
    }

    .h1 {
        transition: 1s;
        transform: translateY(100px);
        opacity: 0;
    }

    .h1[data-scroll="in"] {
        transform: translateY(0);
        transition-delay: 0s;
        opacity: 1;
    }
    </style>
    <header>

        <nav>

            <ul class="nav nav-tabs justify-content-end" id="nav">
                <h4 class="h4">HRMIS Banking</h4 class="h4">
                <li class="nav-item">
                    <a class="nav-link" href="loans.php">Loans</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="digital.php">NetBankings</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="cards.php">Cards</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login.php">LogIn</a>
                </li>
            </ul>
        </nav>
    </header>
    <section>

        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <video class="video-fluid" autoplay>
                        <source src="images/vid1.mp4" type="video/mp4">
                    </video>
                    <div class="carousel-caption d-none d-md-block">
                        <h5>NET BANKING</h5>
                        <p>Make your tansactions from anywhere :)</p>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <p style="color: purple; text-align: center;">Getting Started</p>
        <br>
        <figure class="figure">
            <aside>
                <div class="formbody" style=" margin-left: 10em; margin-top: 2em; border-top-right-radius:10px;">
                    <h4 style="text-align: center; font-family: Georgia, 'Times New Roman', Times, serif;">LOGIN</h4>
                    <div
                        style="margin-left: 11%;height: 40vh;text-align:center;margin-top:20px;width: 100%;border-radius: 10px;">
                        <form action="" style="margin-left: -15px;margin-top: 20px;" class="formleft" method="post">

                            <input type="text" id="username" name="username" class="form-control"
                                placeholder="   Enter your name">
                            <br>
                            <input type="password" id="pwd" name="password" class="form-control"
                                placeholder="   Enter your Password">
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
            </aside>
            <img src="./images/pexels-maitree-rimthong-1602726.jpg" width="50%" class="figure-img img-fluid rounded"
                alt="A generic square placeholder image with rounded corners in a figure.">
        </figure>
        <figcaption class="figure-caption ">Thank You For Your Choice</figcaption>
    </section>
    <hr>
    <footer>

        <p class="p1">

            © 2022Copyright@HRMISBanking.com
        </p>

    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="./scroll.js"></script>
    <script>
    ScrollOut({
        targets: "h1,h2,p,img",
    });
    </script>
</body>

</html>