<?php 
if(!function_exists('nav-item')){
    function nav_item(string $lien, string $titre):string{
        $classe = 'nav-item';
        if($_SERVER['SCRIPT_NAME'] === $lien){
          $classe = $classe . 'active';
        }
         return '<li class="'.$classe .'">
          <a class="nav-link" href="'.$lien .'">'. $titre .'</a>
        </li>';
        
        }
}



