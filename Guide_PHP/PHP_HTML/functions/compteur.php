<?php

function ajouter_vue(){
    $fichier = dirname(__DIR__) . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . 'compteur';
    $compteur = 1;
    if (file_exists($fichier)){
        $compteur = (int)file_get_contents($fichier);
        $compteur++;
        file_put_contents($fichier, $compteur);
    }else{
        // sinon on crée le fichier avec la valeur 1
        file_put_contents($fichier, $compteur);
    }


}

 function nombre_vues(): string {
     $fichier = dirname(__DIR__) . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . 'compteur';
     return file_get_contents($fichier);
 }