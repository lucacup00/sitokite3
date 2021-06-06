<html>
<head>
</head>
<body>
    <?php
    session_start();
    include 'connessione.php';
    include 'links.php';
    include 'Nav.php';
    $id=$_GET['IdAnnuncio'];


    
    


$sql8="select * from annunci where idAnnuncio='$id'";
$res7=mysqli_query($conn,$sql8);
$data4=mysqli_fetch_assoc($res7);




   echo' <div class="my-4 container w-75">
    <form enctype="multipart/form-data" action='.$_SERVER["REQUEST_URI"].' method="POST" class="row align-items-center">
    <div class="mb-3">
        <label for="NomeLibroEmail1" class="form-label">Titolo</label>
        <input type="text" value='.$data4['NomeKite'].' class="form-control" name="NomeKite" id="Nomekite" aria-describedby="NomeLibroHelp">

    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Misura del kite</label>
        <input type="text"  value='.$data4['misura'].' class="form-control" name="misura" >
    </div>
    <div class="mb-3">
        <label  class="form-label">Descrizione Del kite</label>
        <input type="text" value='.$data4['Descrizione'].' class="form-control" name="Descrizione" >
    </div>
    <div class="mb-3">
        <label  class="form-label">Costo del kite:</label>
        <input type="number" value='.$data4['Costo'].' class="form-control" name="Costo" >
    </div> 
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Anno di Acquisto</label>
        <input type="date" class="form-control" value='.$data4['AnnoAquisto'].' name="AnnoDiAcquisto" >
    </div>
    


    
    <button type="submit"  class="my-4 btn btn-primary">Submit</button>
    </form>
    </div>';
  ?>  
    
    
</body>
</html>






<?php

include './alert.php';
$id=$_GET['IdAnnuncio'];
echo $id;



if($_SERVER['REQUEST_METHOD']=='POST'){
    $nomeKite=$_POST['NomeKite'];
    $Misura=$_POST['misura'];
    $AnnoDiAcquisto=$_POST['AnnoDiAcquisto'];
    $descrizione=$_POST['Descrizione'];
    $costo=$_POST['Costo'];
    
 
    $sql="UPDATE annunci SET NomeKite='$nomeKite',misura='$Misura',AnnoAquisto='$AnnoDiAcquisto',Descrizione='$descrizione',Costo='$costo' WHERE idAnnuncio='$id'"; 
    $res=mysqli_query($conn,$sql);

    

    if($res ){
        header('Location:./index.php?Modifica=true');
    }else{
        echo 'NOT OK1';
    //header('Location:./index.php?inseritoAnnuncioFalito=true');
    }
  

    

    
    



   

}


   

?>