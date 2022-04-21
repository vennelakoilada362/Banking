<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CB | Cards</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
</head>

<body>
    <style>
    body {
        background-color: rgb(234, 238, 241);
        background-image: url("./images/cc1.jpg");
        background-repeat: no-repeat;
        background-size: cover;

    }

    nav {
        background-color: rgb(255, 255, 255);
    }

    .h4 {
        margin-top: auto;
        margin-right: 25em;
        padding-right: 5em;
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

    .bg {
        font-family: Georgia, 'Times New Roman', Times, serif;
        color: white;
        border: 1.5px black;
        text-align: center;
        margin-top: 2em;
        margin-left: 45em;
        margin-right: 2em;
    }

    .bg1 {
        font-family: Georgia, 'Times New Roman', Times, serif;
        color: white;
        border: 1.5px black;
        text-align: center;
        margin-top: 5em;
        margin-left: 1em;
        margin-right: 53em;
    }

    .accordion {
        width: 50%;
        margin-top: 2em;
        margin-left: 18em;
    }
    </style>
    <header>
        <nav>

            <ul class="nav nav-tabs justify-content-end" id="nav">
                <h4 class="h4">HRMIS Banking</h4>
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="digital.php">NetBankings</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="support.php">Support</a>
                </li>
            </ul>
        </nav>
    </header>
    <section>
        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Personal Loan
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse " aria-labelledby="headingOne"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>About Personal Loans.</strong>
                        A personal loan is a form of credit that can help you make a big purchase or consolidate
                        high-interest debts. Because personal loans typically have lower interest rates than credit
                        cards, they can be used to consolidate multiple credit card debts into a single, lower-cost
                        monthly payment <code>Click Here To</code>&nbsp<button class="btn btn-primary">Apply</button>

                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Business Loan
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>About Business Loan.</strong>
                        The interest rates on a small business bank loan can be more favourable than other online
                        lenders. Especially if you are looking for a more long-term funding option, taking out a bank
                        loan will normally work out much better value than using an overdraft, credit card, or a
                        personal loan
                        <code>Click Here To</code>&nbsp<button class="btn btn-primary">Apply</button>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Home Loan
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>About Home Loan.</strong>
                        The most popular type of home loan is the loan for purchase of a new or a pre-owned home. This
                        loan is also commonly available and is offered by many banks in different variants. The interest
                        rate is either floating or fixed and generally ranges anywhere between 9.85% and 11.25%.
                        <code>Click Here To</code>&nbsp<button class="btn btn-primary">Apply</button>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        Gold Loan
                    </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>About Gold Loan.</strong>
                        Gold loan (also called loan against gold) is a secured loan taken by the borrower from a lender
                        by pledging their gold articles (within a range of 18-24 carats) as collateral. The loan amount
                        provided is a certain percentage of the gold, typically upto 80%, based on the current market
                        value and quality of gold
                        <code>Click Here To</code>&nbsp<button class="btn btn-primary">Apply</button>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFive">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                        Rental Deposit Loan
                    </button>
                </h2>
                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>About Rental Deposit Loan.</strong>
                        You can use these funds to cover the initial expenses for renting a house, including security
                        deposit, advance rent, brokerage, relocation expenses and furnishing expenses
                        <code>Click Here To</code>&nbsp<button class="btn btn-primary">Apply</button>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingSix">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                        Loan Against Property
                    </button>
                </h2>
                <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>About Loan Against Property.</strong>
                        A loan against property(LAP) is a secured loan that is sanctioned against the asset pledged as
                        collateral. This asset can either be an owned land, a house, or any other commercial premises.
                        The asset remains as collateral with the lender until the entire loan against property amount is
                        repaid
                        <code>Click Here To</code>&nbsp<button class="btn btn-primary">Apply</button>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingSeven">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                        Two & Three Wheeler Loan
                    </button>
                </h2>
                <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>About Two & Three Wheeler Loan.</strong>
                        You may take a two-wheeler loan or a personal loan to buy a new scooter or motorcycle. Both the
                        types of loans are offered by banks as well as Non-Banking Financial Companies (NBFCs) in India.
                        When you apply for a personal loan, you can enjoy the benefits of having an unsecured loan.
                        <code>Click Here To</code>&nbsp<button class="btn btn-primary">Apply</button>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingEight">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                        Personal Loan for Self-employed Individuals
                    </button>
                </h2>
                <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>About Personal Loan for Self-employed Individuals
                            .</strong>
                        Yes, applicants can avail personal loans without ITR but only through certain lenders such as
                        Money View. At Money View, the emphasis is placed on minimal documentation and a hassle-free
                        application process.
                        <code>Click Here To</code>&nbsp<button class="btn btn-primary">Apply</button>
                    </div>
                </div>
            </div>
        </div>


    </section>
    <footer style="border: 1px black; background-color: aliceblue; padding: 0.5em; text-align: center; margin-top:2em;">
        <p class="p1">
            © 2020 Copyright@HRMISBanking.com
        </p>

    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>