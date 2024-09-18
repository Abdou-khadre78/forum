<?php 

try {
//ici je me connecte à la base de données

}catch (Exception $e){
    //Ici je récupère et affiche l'erreur
    die('ERREUR : ' . $e->getMessage());
}