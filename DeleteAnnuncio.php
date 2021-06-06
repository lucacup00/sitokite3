<?php

$id=$_GET['IdAnnuncio'];
echo $id;

include'connessione.php';

$sql="DELETE FROM annunci WHERE idAnnuncio= $id";
 $res=mysqli_query($conn,$sql);
if(!$res)
{
    die("Qery errata" . $sql);
    header("Location: ./index.php "); 

}


else{
    header("Location: ./imieiAnnunci.php?AnnuncioCancellato=true ");

}

?>