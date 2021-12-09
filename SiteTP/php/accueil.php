<?php

$content=\file_get_contents('data/accueil.yaml');
$data=yaml_parse($content);

//print_r($data);

echo '<div id="nom">';
    echo '<h2>'.$data['nom'].'</h2>';
echo '</div>';

echo '<div id="accroche">';
    echo '<h2>'.$data['accroche']['label'].'</h2>';
    echo '<p>'.$data['accroche']['contenu'].'</p>';
echo '</div>';

echo '<div id="display">';
    echo '<h2>'.$data['photo']['label'].'</h2>';
    echo '<div id="photo">';
        echo '<img src="'.$data['photo']['src']['1'].'" />';
        echo '<img src="'.$data['photo']['src']['2'].'" />';
        echo '<img src="'.$data['photo']['src']['3'].'" />';
    echo '</div>';
echo '</div>';



?>