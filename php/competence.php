<center>
<br>
<br>
                    <h3>Compétances logiciels</h3>
                    <p>
                       <li>WireSharq</li>
                    <li> Windows 7 - 8 - 10<br> </li>
                     <li>  Virtual Box / VMware<br> </li>
                      <li>  NotPad ++ (html)<BR> </li>
                      <li>  Word, PowerPoint...<br> </li>         </p>

     <br>
     <h3>Autres Compétances</h3>
</center>

<?php 
$content=file_get_contents("data/competence.yaml");
$data=yaml_parse($content);

echo '<div class="container">';
foreach($data[0] as $elt):
        echo '<div class="bar">';
        echo '<div class="bar-stat" style="width:'.$elt["niveau"].';">';
        echo '<span class="bar-text">'.$elt['competence'].' - '.$elt["niveau"].'</span>';
        echo '</div>';
        echo '</div>';
endforeach;
echo '</div>';

?>  