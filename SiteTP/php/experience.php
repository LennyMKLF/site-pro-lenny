<?php

    require_once 'function.php';

    $content=\file_get_contents('data/experience.yaml');
    $data=yaml_parse($content);

/*
    echo "<pre>";
    print_r($data);
    echo "</pre>";
*/

  /*  foreach($data as $experience){ 
        foreach($experience as $cle=>$val){
            echo("<tr><td>".$experience['accueil']."</td><td>".$val."</td></tr>");
            echo("<tr><td>".$experience['a_propos']."</td><td>".$val."</td></tr>");
        }
    }
    */

?>