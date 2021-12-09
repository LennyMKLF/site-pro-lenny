<?php

function implant(){

    $content=\file_get_contents('data/menutop.yaml');
    $data=array_reverse(yaml_parse($content));

    foreach($data as $cle=>$val){
        echo '<section id="'.$val.'">';
        include('php/'.$val.'.php');
        echo '</section>';
    }

}

?>