<?php
session_start();
include './connessione.php';

if($_SERVER['REQUEST_METHOD']=='POST'){
    $nomeKite=$_POST['NomeKite'];
    $Misura=$_POST['misura'];
    $AnnoDiAcquisto=$_POST['AnnoDiAcquisto'];
    $KsMarca=$_POST['Marca'];
    $KsUtente=$_SESSION['IdUser'];
    $username=$_SESSION['username'];
    $descrizione=$_POST['Descrizione'];
    $costo=$_POST['Costo'];
    $Categoria=$_POST['Categoria'];
    
    
    $sql="INSERT INTO `annunci`(`NomeKite`, `AnnoAquisto`, `Descrizione`, `Costo`,`KsUtenti`,`KsMarca`,`KsCategoria`,`misura`) 
    VALUES ('$nomeKite','$AnnoDiAcquisto','$descrizione','$costo','$KsUtente','$KsMarca','$Categoria','$Misura')"; 
    $res=mysqli_query($conn,$sql);

    if($res ){
        echo 'Ok1';
       // header('Location:./index.php?inseritoAnnuncio=true');
    }else{
        echo 'NOT OK1';
    //header('Location:./index.php?inseritoAnnuncioFalito=true');
    }

    

    
    $sqlFetch="SELECT * FROM `annunci` WHERE `NomeKite`='$nomeKite' AND `KsUtenti`='$KsUtente'"; 

    echo $sqlFetch;
    $resultNew=mysqli_query($conn,$sqlFetch);
    $data=mysqli_fetch_assoc($resultNew);
    $idAnnuncio=$data['idAnnuncio'];/* per prendere id */

   

    
    if($resultNew ){
        echo 'Ok';
       // header('Location:./index.php?inseritoAnnuncio=true');
    }else{
        echo 'NOT OK';
    //header('Location:./index.php?inseritoAnnuncioFalito=true');
    }




    $extension=array('jpeg','jpg','png','gif','JPEG','JPG','PNG','GIF');
    foreach ($_FILES['FotoKite']['tmp_name'] as $key => $value) {
      
            $filename=$_FILES['FotoKite']['name'][$key];
            $filename_tmp=$_FILES['FotoKite']['tmp_name'][$key];
            echo '<br>';

            
            $ext=pathinfo($filename,PATHINFO_EXTENSION);
           
            $finalimg='';
            if($_FILES['FotoKite']['name'][$key]==''){
                exit();
               
            }
            
            if($ext =='jpg' || $ext=='jpeg' || $ext=='png' || $ext=='gif'  || $ext=='GIF'|| $ext=='JPEG' || $ext=='JPG' ||$ext=='PNG' || $ext=='GIF')
            {
                    if(!file_exists('img/'.$filename))
                    {
                    move_uploaded_file($filename_tmp, 'img/'.$filename);
                    $finalimg=$filename;
                    }
                    else
                    {
                        $filename=str_replace('.','-',basename($filename,$ext));
                        $newfilename=$filename.time().".".$ext;
                        move_uploaded_file($filename_tmp, 'img/'.$newfilename);
                        $finalimg=$newfilename;
                    }
                    
                    //insert
                    $insertqry="INSERT INTO `immagini`(`Percorso`,`KsAnnuncio`) VALUES ('$finalimg',$idAnnuncio)";
                    $result=mysqli_query($conn,$insertqry);
                    
                    
                    if($result){
                        
                        header('Location:./index.php?inseritoAnnuncio=true');
                        

                    }else{
                        header('Location:./index.php?inseritoAnnuncioFalito=true');
                       
                    } //controllo sulla query

            }  
            else
            {
                    ?>
<script>
alert('Formato non valido!! Caricare immagine del formato giusto');
//window.location = "./index.php?formatoNonValido=true";
</script>
<?php
                
            }
        }

}


   





?>