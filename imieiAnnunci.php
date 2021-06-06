<?php
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
        <link href="style.css" rel="stylesheet">

    <title>I tuoi Annunci</title>
</head>

<body>



    <?php
    include './Nav.php';
    if(isset($_GET['AnnuncioCancellato']) && $_GET['AnnuncioCancellato'] == true){
        $alert= '<div class="alert my-0 alert-success alert-dismissible fade show" role="alert">
            <strong>Messaggio</strong> Annuncio cancellato correttamente.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
        echo $alert;
            if($alert!=""){
            ?>
    <script>
    setTimeout(() => {
        window.location = "./index.php";
    }, 2000)
    </script>
    <?php
        }
    }
    
    ?>

    <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            <?php


                
                
                $idUtente=$_SESSION['IdUser'];
                include './connessione.php';

               $sql="SELECT utenti.Nome ,utenti.Telefono, utenti.Cognome , utenti.Email, annunci.NomeKite, annunci.AnnoAquisto,
                annunci.idAnnuncio , annunci.Costo , annunci.Descrizione , annunci.misura , marca.Marca,Categorie.idCategorie,
                Categorie.Tipo,Immagini.Percorso,Immagini.KsAnnuncio 
                FROM annunci,utenti,marca,Categorie,Immagini 
                where annunci.KsUtenti=utenti.idUtente AND annunci.KsMarca = marca.idMarca AND annunci.KsCategoria=Categorie.idCategorie 
                AND Immagini.KsAnnuncio=annunci.idAnnuncio  AND utenti.idUtente=$idUtente 
                GROUP BY Immagini.KsAnnuncio ";
                $res=mysqli_query($conn,$sql);


                $ris=mysqli_num_rows($res);
                if($ris==0){


                        echo '
                                <div class="container my-5">
                                <div class="jumbotron">
                                    <h1 class="display-4">Attenzione</h1>
                                    <p class="lead">Devi Inserire prima un articolo</p>
                                
                                
                                </div>
                                </div>';
                        }
                        
                else{
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
                        <div class="my-4 col">
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
                           
                                <a href="./DeleteAnnuncio.php?IdAnnuncio='. $idAnnuncio.'">
                                    <button class="btn mx-1 btn-sm btn-danger">DELETE</button>
                                </a>
                                
                                <a href="./ModificaAnnuncio.php?IdAnnuncio='. $idAnnuncio.'">
                                    <button class="btn btn-sm btn-warning">MODIFICA</button>
                                </a>
                                </div>
                                
                            </div>
                            </div>
                        </div>
                        </div>';
                    }
                        
                        
            } 
            ?>

            <!-- Optional JavaScript; choose one of the two! -->

            <!-- Option 1: Bootstrap Bundle with Popper -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
                crossorigin="anonymous">
            </script>

            <!-- Option 2: Separate Popper and Bootstrap JS -->
            <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
</body>

</html>


