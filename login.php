<?php
include 'connessione.php';


if($_SERVER['REQUEST_METHOD']=='POST'){
    $Email=$_POST['Email'];
    $Password=$_POST['Password'];


    $sql="SELECT * FROM `utenti` WHERE `Email`='$Email'";
    $res=mysqli_query($conn,$sql);
    
    $rows=mysqli_num_rows($res);
    
    if($rows==1){
        $data=mysqli_fetch_assoc($res);
        $passwordFromDB=$data['PasswordUtente'];
        $passVerified=password_verify($Password,$passwordFromDB);
        echo $passVerified;
    
        if($passVerified){
            session_start();
            $_SESSION['IdUser']=$data['idUtente'];
            $_SESSION['username']=$data['Cognome']." ".$data['Nome'];
            $_SESSION['loggedIn']=true;
            header('Location:./index.php?loggedIn=true');
        }else{
            header('Location:./index.php?passwordErro=true');
        }
    }else{
        header('Location:./index.php?signUpFirst=true');
    }
    

}

?>