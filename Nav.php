<html>

<head>
    <style>
    .button-close {
        color: white !important;
        background-color: #333333 !important;
    }


    .btn-primary {
        background-color: #ff7514 !important;
        color: white !important;
        border: #ff7514 !important;
    }
    </style>

</head>

</html>



<?php


echo '<nav class="navbar navbar-expand-lg navbar-dark bg-dark skin ">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Kite Force</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto my-0 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Shop.php">Shop</a>
                    </li>';
                    //diverso da loggato
                  if(!isset($_SESSION['loggedIn'])){
                   echo '<li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Accedi/Registrati
                        </a>
                       <ul id="Main" class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class=" text-dark dropdown-item" data-bs-toggle="modal" data-bs-target="#RegistrationModal"
                                    href="#">Registrati</a></li>
                            <li><a class="text-dark dropdown-item" data-bs-toggle="modal" data-bs-target="#LoginModal"
                                    href="#">Accedi</a></li>

                        </ul>
                        </li>';
                    }
                   echo '<li class="nav-item">
                        <a class="nav-link" href="InserimentoKite.php" tabindex="-1">Inserisci Il tuo Kite</a>
                    </li>';
                    //CONTROLLA SE SEI LOGGATO E INSERISCE USERNAME
                    if(isset($_SESSION['loggedIn']) && $_SESSION['loggedIn']==true){
                        echo ' <li class="nav-item">
                        <a class="nav-link text-light"  tabindex="-1"> Welcome '.$_SESSION['username'].'</a>
                    </li>';
                    }
                    
                    
              echo '</ul>
                
                <form action="./search.php" method="GET" class="d-flex">
    
                    <input class="form-control me-2" name="search" type="search" placeholder="Search" aria-label="Search">
                    <button class="mx-1 btn btn btn-primary"><a  class="text-decoration-none text-light">Cerca</a></button>';
                    echo ' <a  href="meteo.php"> <span class=" mx-3 iconify" data-icon="bi:wind" data-inline="false" data-width="40" data-height="40"></span>
                        </a> ';
                    //INSERIMENTO BUTTON DI LOGOUT
                    if(isset($_SESSION['loggedIn']) && $_SESSION['loggedIn']==true){

                        
                        
                        echo ' <button class="mx-1 btn btn btn-primary"><a href="./logout.php" class="text-decoration-none text-light">Esci</a></button>';
                        echo ' <button class="mx-1 btn btn btn-primary"><a href="./imieiAnnunci.php" class="text-decoration-none text-light">I tuoi annunci</a></button>';
                    }
                   echo'
                </form>
                 </div>
        </div>
    </nav>';
?>