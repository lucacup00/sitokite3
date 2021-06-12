<?php
include 'connessione.php';
include './links.php';
include './alert.php';
session_start();
?>
<?php
include 'modal.php';


?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>

    <link rel="apple-touch-icon" href="/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">

    <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
    <link href="style.css" rel="stylesheet">


    <title>Shop</title>

</head>

<body class="skin">


    <main>
        <?php
    include 'Nav.php';

    
    ?>




        <div class="container my-5">


            <div class="row p-3 pb-0 pe-lg-0 pt-lg-2 align-items-center rounded-3 border shadow-lg">
                <div class="col-lg-7 p-3 p-lg-5 pt-lg-3">
                    <h1 class="display-4 fw-bold lh-1">Kite Force</h1>
                    <p class="lead">La soluzione per acquistare e vendere materiale sportivo a livello locale
                        oppure fatti spedire articoli nuovi dai negozi.</p>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3">
                        <a data-bs-toggle="modal" data-bs-target="#RegistrationModal"
                            class="btn btn-primary btn-lg px-4 me-md-2">Registrati</a>
                        <a href=" InserimentoKite.php" class="btn btn-outline-secondary btn-lg px-4 a">Inserisci
                            un Kite in
                            vendita</a>
                    </div>
                </div>

                <div class="col-md-9  col-lg-5 py-4">

                    <video class="p-3 p-md-3 border rounded-2 shadow " loop id="video" width="300" height="600" autoplay
                        muted>
                        <source src="b.mp4" type="video/mp4">
                    </video>
                </div>


            </div>
        </div>





        <section class="py-5 text-center skin">
            <div class="row py-lg-5 skin">
                <div class="container-fluid  mx-auto skin">
                    <h1 class="fw-light text-new">Esplora le nostre sezioni</h1>
                    <p class="lead text-muted text-pr">Il portale in cui puoi vendere e acquistare Kite usati.
                    </p>



                    <div class="d-flex my-4 flex-wrap justify-content-center  align-items-center">
                        <div class=" sfumatura mx-2 my-4 elemento1 card" style="width: 20rem; height:8rem;">
                            <div class="card-body">

                                <span class="iconify " data-icon="openmoji:kite" data-inline="false" data-width="40"
                                    data-height="40"></span><br>
                                <a href="kite.php" type='button' class=" scritta my-3 card-link">Kites</a>

                            </div>
                        </div>

                        <div class=" sfumatura mx-2 my-4 elemento2 card" style="width: 20rem; height:8rem;">
                            <div class="card-body">
                                <span class=" iconify " data-icon="mdi:kitesurfing" data-inline="false" data-width="37"
                                    data-height="37"></span><br>
                                <a href="surfboards.php" type='button' class=" scritta my-3 card-link">Surfboards</a>
                            </div>
                        </div>
                        <div class=" sfumatura mx-2 my-4 elemento3 card" style="width: 20rem; height:8rem;">
                            <div class="card-body">
                                <span class="iconify" data-icon="emojione-v1:womans-clothes" data-inline="false"
                                    data-width="40" data-height="40"></span><br>
                                <a href="./mute.php" type='button' class=" scritta my-3 card-link">Mute</a>
                            </div>
                        </div>
                        <div class=" sfumatura mx-2 my-4 elemento4 card" style="width: 20rem; height:8rem;">
                            <div class="card-body">
                                <span class="iconify" data-icon="entypo:tools" data-inline="false" data-width="40"
                                    data-height="40"></span><br>
                                <a href="trapezi.php" type='button' class=" scritta my-3 card-link">Trapezi</a>
                            </div>
                        </div>
                    </div>

                    <div class="container px-5 py-5" id="hanging-icons">
                        <h2 class="pb-2 border-bottom">Hanging icons</h2>
                        <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
                            <div class="col d-flex align-items-start">
                                <div class="icon-square bg-light text-dark flex-shrink-0 me-3">
                                    <svg class="bi" width="1em" height="1em">
                                        <use xlink:href="#toggles2"></use>
                                    </svg>
                                </div>
                                <div>
                                    <h2>Featured title</h2>
                                    <p>Paragraph of text beneath the heading to explain the heading. We'll add onto
                                        it
                                        with another sentence and probably just keep going until we run out of
                                        words.
                                    </p>
                                    <a href="#" class="btn btn-primary steem-keychain-checked">
                                        Primary button
                                    </a>
                                </div>
                            </div>
                            <div class="col d-flex align-items-start">
                                <div class="icon-square bg-light text-dark flex-shrink-0 me-3">
                                    <svg class="bi" width="1em" height="1em">
                                        <use xlink:href="#cpu-fill"></use>
                                    </svg>
                                </div>
                                <div>
                                    <h2>Featured title</h2>
                                    <p>Paragraph of text beneath the heading to explain the heading. We'll add onto
                                        it
                                        with another sentence and probably just keep going until we run out of
                                        words.
                                    </p>
                                    <a href="#" class="btn btn-primary steem-keychain-checked">
                                        Primary button
                                    </a>
                                </div>
                            </div>
                            <div class="col d-flex align-items-start">
                                <div class="icon-square bg-light text-dark flex-shrink-0 me-3">
                                    <svg class="bi" width="1em" height="1em">
                                        <use xlink:href="#tools"></use>
                                    </svg>
                                </div>
                                <div>
                                    <h2>Featured title</h2>
                                    <p>Paragraph of text beneath the heading to explain the heading. We'll add onto
                                        it
                                        with another sentence and probably just keep going until we run out of
                                        words.
                                    </p>
                                    <a href="#" class="btn btn-primary steem-keychain-checked">
                                        Primary button
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

















        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
        </script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->


</body>

</html>