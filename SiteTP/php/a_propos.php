<?php

$content=\file_get_contents('data/a_propos.yaml');
$data=yaml_parse($content);

echo '<div>';
    echo '<h1>'.$data['titre'].'</h1>';
echo '</div>';

echo '<div id="info">';
    echo'<div id="gside">';
        echo '<img src="'.$data['src'].'">';
    echo '</div>';

    echo'<div id="dside">';
        echo'<h2>'.$data['info']['label'].'</h2>';
        echo'<p>'.$data['info']['contenu'].'</p>';
    echo '</div>';
echo '</div>';