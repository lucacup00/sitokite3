<?php
include 'connessione.php';
include './links.php';
include './alert.php';
session_start();
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Zen+Dots&display=swap" rel="stylesheet">
    <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
    <link href="style.css" rel="stylesheet">

    
    <title>Shop</title>

</head>

<body class="skin">


    <main>
        <?php
    include 'Nav.php';

    
    ?>

        <!-- slider qui -->
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-interval="3000">
                    <img src="./img/slide1.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" data-interval="3000">
                    <img src="./img/slider2.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" data-interval="3000">
                    <img src="./img/slider3.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        
        <section class="py-5 text-center skin">
            <div class="row py-lg-5 skin">
                <div class="container-fluid  mx-auto skin">
                    <h1 class="fw-light text-new">Vendita Kite usati</h1>
                    <p class="lead text-muted text-pr">Il portale in cui puoi vendere e acquistare Kite usati.
                    </p>
                    <p class="my-5">
                        <a data-bs-toggle="modal" data-bs-target="#RegistrationModal"
                            class="btn btn btn my-2 steem-keychain-checked button-new">Registrati</a>
                        <a href=" InserimentoKite.php" class="btn btn-secondary my-2 steem-keychain-checked">Inserisci
                            un Kite in
                            vendita</a>
                    </p>
                    
             
                    <div class="d-flex my-4 flex-wrap justify-content-center  align-items-center">
                        <div class=" sfumatura mx-2 my-4 elemento1 card" style="width: 20rem; height:8rem;">
                            <div class="card-body">

                                <span class="iconify " data-icon="openmoji:kite" data-inline="false" data-width="40"
                                    data-height="40"></span><br>
                                <a href="kite.php" type='button' class=" scritta my-4 card-link">Kites</a>

                            </div>
                        </div>

                        <div class=" sfumatura mx-2 my-4 elemento2 card" style="width: 20rem; height:8rem;">
                            <div class="card-body">
                                <span class=" iconify " data-icon="mdi:kitesurfing" data-inline="false" data-width="37"
                                    data-height="37"></span><br>
                                <a href="surfboards.php" type='button' class=" scritta my-4 card-link">Surfboards</a>
                            </div>
                        </div>
                        <div class=" sfumatura mx-2 my-4 elemento3 card" style="width: 20rem; height:8rem;">
                            <div class="card-body">
                                <span class="iconify" data-icon="emojione-v1:womans-clothes" data-inline="false"
                                    data-width="40" data-height="40"></span><br>
                                <a href="./mute.php" type='button' class=" scritta my-4 card-link">Mute</a>
                            </div>
                        </div>
                        <div class=" sfumatura mx-2 my-4 elemento4 card" style="width: 20rem; height:8rem;">
                            <div class="card-body">
                                <span class="iconify" data-icon="entypo:tools" data-inline="false" data-width="40"
                                    data-height="40"></span><br>
                                <a href="trapezi.php" type='button' class=" scritta my-4 card-link">Trapezi</a>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </section>



        <div class="album py-5 bg-light skin">
            <div class="container">

                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    <?php

                    

                $sql="SELECT utenti.Nome ,utenti.Telefono, utenti.Cognome , utenti.Email, annunci.NomeKite, 
                annunci.Foto , annunci.AnnoAquisto, annunci.idAnnuncio , annunci.Costo , annunci.Descrizione , annunci.misura , marca.Marca
                FROM annunci,utenti,marca
                where annunci.KsUtenti=utenti.idUtente AND annunci.KsMarca = marca.idMarca ";
                    $res=mysqli_query($conn,$sql);

                    if($res){
                        echo' ok';
                    }else {
                        echo'no';
                    }

                    while($row=mysqli_fetch_assoc($res)){
                    
                    $nomeKite=$row['NomeKite'];
                    $annoAcquisto=$row['AnnoAquisto'];
                    $Foto=$row['Foto'];
                    $misura=$row['misura'];
                    $Descrizione=$row['Descrizione'];
                    $telefono=$row['Telefono'];
                    $emailUtente=$row['Email'];               
                    $cognomeUtente=$row['Cognome'];
                    $nomeUtente=$row['Nome'];
                    $marca=$row['Marca'];
                    $costo=$row['Costo'];
                    $idAnnuncio=$row['idAnnuncio'];

                
                    echo' 
                    <div class="col">
                    <div class="card shadow-sm carta" >
                    <img src="'.$Foto.'" class="bd-placeholder-img card-img-top tondo" width="200px" height="400px"/>
                        <div class="card-body">
                         <h6 class="text-primary text-new"><span class="text-dark text-span-new">Il nome del Kite</span> :<b>'.$nomeKite.' </b></h6>
           
                        <h6  class="text-primary text-new"><span class="text-dark text-span-new">Costo </span>:<b> '.$costo.'$</b></h6>
                        <h6  class="text-primary text-new"><span class="text-dark text-span-new">Descrizione </span>:<b> '.$Descrizione.'</b></h6>
                        <h6  class="text-primary text-new"><span class="text-dark text-span-new">Marca </span>:<b> '.$marca.'</b></h6> 
                        <h6  class="text-primary text-new"><span class="text-dark text-span-new">Misura </span>:<b> '.$misura. 'mq2</b></h6> 
                        
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">

                            <a href="./templat.php?IdAnnuncio='. $idAnnuncio.'">
                                <button class="btn btn-sm btn button-new">Visita</button>
                            </a>
                            
                            </div>
                            
                        </div>
                        </div>
                    </div>
                    </div>';
                }
                
               
            ?>
                </div>
            </div>
        </div>
    </main>






    <?php
include 'modal.php';


?>


    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <!-- Optional JavaScript choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>




    <!-- bootstrap scripts -->
    <!-- Latest compiled and minified CSS -->


    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <scrip src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></scrip>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></scrip>
    -->

</body>

</html>