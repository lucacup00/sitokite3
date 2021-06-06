<?php
session_start();?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Informazione Kite  </title>

</head>

<body>


    <?php
        include './Nav.php';
        include './connessione.php';
            
        $idAnnuncio=$_GET['IdAnnuncio'];

        $sql="SELECT utenti.Nome ,utenti.Telefono, utenti.Cognome , utenti.Email, annunci.NomeKite, annunci.AnnoAquisto, annunci.idAnnuncio , annunci.Costo , annunci.Descrizione , annunci.misura , marca.Marca,Categorie.idCategorie,Categorie.Tipo,Immagini.Percorso,Immagini.KsAnnuncio FROM annunci,utenti,marca,Categorie,Immagini where annunci.KsUtenti=utenti.idUtente AND annunci.KsMarca = marca.idMarca AND annunci.KsCategoria=Categorie.idCategorie AND Immagini.KsAnnuncio=annunci.idAnnuncio   AND annunci.idAnnuncio=$idAnnuncio";

        
        $res=mysqli_query($conn,$sql);
        $row=mysqli_fetch_assoc($res);
        
            $nomeUtente=$row['Nome'];
            $emailUtente=$row['Email'];
            $cognomeUtente=$row['Cognome'];
            
            $misura=$row['misura'];
            $nomeKite=$row['NomeKite'];
            $Foto=$row['Percorso'];
            $annoAcquisto=$row['AnnoAquisto'];
            $Descrizione=$row['Descrizione'];
            $Marca=$row['Marca'];
            $Costo=$row['Costo'];
            $idAnnuncio=$row['idAnnuncio'];

            
                   


        ?>


    <!-- template code here -->


    <div class="row featurette my-4">
        <div class="col-md-7 my-4 d-flex justify-content-center align-items-center flex-column">
            <h4 class="featurette-heading text-dark">Titolo Kite :<?php echo $nomeKite; ?></h4>
            <h4 class="text-dark">Misura :<?php  echo $misura.'mq2' ?></h4>
            <h4 class="text-dark">Anno di acquisto :<?php  echo $annoAcquisto;  ?></h4>

            <h4 class="text-dark">Marca :<?php  echo $Marca ?></h4>
            <h4 class="text-dark">Pubblicato da : <?php  echo $cognomeUtente." ".$nomeUtente; ?></h4>
            <h4 class="text-dark">Email :<?php  echo $emailUtente ?></h4>
            <h4 class="text-dark">Prezzo :<?php  echo $Costo.'£' ?></h4>

            <p class="lead">Descrizione :<?php echo $Descrizione;  ?></p>

        </div>
        <div class="col">

        <?php
        $sql0="SELECT * FROM Immagini where KsAnnuncio=$idAnnuncio";
        $res0=mysqli_query($conn,$sql0);

        $row0=mysqli_num_rows($res0);

        for($i=0;$i<$row0;$i++){
            echo '<img class=bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="350"
        height="350" src="./img/'.$Foto.'" ></img>';
           
        }


        
       

        
        ?>
           
               
        </div>
    </div>






    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->

    <?php
include 'modal.php';
?>
</body>

</html>
