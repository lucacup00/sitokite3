<?php
include './links.php';
?>

<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">





    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>

    <link rel="apple-touch-icon" href="/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">



</head>

<body background="sfondo2.jpg">

    <?php
        include './Nav.php';
    ?>

    <div style="text-align: center;">
        <h1> INSERISCI IL NOME DELLA TUA CITTA' PER<BR> VISUALIZZARE IL METEO ATTUALE</h1>

        <input type="text" id="weath" autocomplete="off"></input>
        <br><br>
        <button id="prova">esegui</button>




    </div>



    <script src="meteo.js"></script>



    <div class="container-fluid">
        <div class="row justify-content-center ">
            <div class="col-12 col-md-4 col-sm-12 col-xs-12 tondo">
                <div class="card p-4 shadow">
                    <div class="d-flex">
                        <h6 id="Citta" class="flex-grow-1">New York</h6>
                        <h6 id="orario">16:08</h6>
                    </div>
                    <div class="d-flex flex-column temp mt-5 mb-3">
                        <h1 class="mb-0 font-weight-bold" id="gradi" id="heading">13°C </h1> <span class="small grey"
                            id="meteo">Stormy</span>
                    </div>
                    <div class="d-flex">
                        <div class="temp-details flex-grow-1">
                            <p class="my-1"> <img src="https://i.imgur.com/B9kqOzp.png" height="17px"> <span id="vento">
                                    40 km/h
                                </span> </p>
                            <p class="my-1"> <i class="fa fa-tint mr-2" aria-hidden="true"></i> <span> 84% </span> </p>
                            <p class="my-1"> <img src="https://i.imgur.com/wGSJ8C5.png" height="17px"> <span> 0.2h
                                </span> </p>
                        </div>
                        <div> <img id="immagineTempo" src="./img/sun2.png" width="100px"> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>

</html>