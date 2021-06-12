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

    <style>

    </style>
    <title>Shop</title>

</head>
<style>
.tondo {
    padding: 10px;
    border-radius: 40px;
}



.carta {
    padding: 10px;
    border-radius: 40px;

    padding: 10px !important;
    box-shadow: 5px 10px #ff7514 !important;

}

.text-new {
    color: black !important;
    font-family: Zen Dots;
}

.text-span-new {
    color: b !important;
}

.button-new {
    color: white !important;
    background-color: #ff7514 !important;
}

.elemento1 {
    background-color: #2650ff !important;

}

.elemento2 {
    background-color: #f2a700 !important;

}

.elemento3 {
    background-color: #9924FF !important;

}

.elemento4 {
    background-color: #07BB9C !important;

}

.sfumatura {
    box-shadow: 0 8px 6px -6px black;
}

.scritta {
    font-family: LFTEtica;
    font-size: 25px;
}

.buttonElement {
    color: black;
    border: 2px solid white;

}

a {
    text-decoration: none !important;
    color: white !important;
}
</style>

<body class="skin">

    <main>
        <?php
    include 'Nav.php';
?>


        <div class="album py-5 bg-light skin">
            <div class="container">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">


                    <?php
                    
                    $ricerca=$_GET['search'];
                    
                    
                    $sql="SELECT * FROM annunci,utenti,marca,Categorie,Immagini WHERE annunci.KsUtenti=utenti.idUtente AND annunci.KsMarca = marca.idMarca AND annunci.KsCategoria=Categorie.idCategorie AND Immagini.KsAnnuncio=annunci.idAnnuncio AND MATCH (`Tipo`) against ('$ricerca') OR MATCH(`NomeKite`,`Descrizione`) against ('$ricerca') OR MATCH(`Marca`) against ('$ricerca') GROUP BY Immagini.KsAnnuncio";
                    $res=mysqli_query($conn,$sql);

                   
                    
                    while($row=mysqli_fetch_assoc($res)){
                                    
                        $nomeKite=$row['NomeKite'];
                        $annoAcquisto=$row['AnnoAquisto'];
                        $Foto=$row['Percorso'];
                        $misura=$row['misura'];
                        $Descrizione=$row['Descrizione'];
                        $telefono=$row['Telefono'];
                        $emailUtente=$row['Email'];               
                        $cognomeUtente=$row['Cognome'];
                        $nomeUtente=$row['Nome'];
                        $marca=$row['Marca'];
                        $costo=$row['Costo'];
                        $idAnnuncio=$row['idAnnuncio'];
                        $Categoria=$row['Tipo'];

                        

                    
                        echo' 
                        <div class="col">
                        <div class="card shadow-sm carta" >
                        <img src="./img/'.$Foto.'" class="bd-placeholder-img card-img-top tondo" width="200px" height="400px"/>
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

</body>