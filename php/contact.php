<?php
echo '<center>';
echo '<h1>Contact</h1>';
echo '<HTML>';
echo '<HEAD>';
echo '<TITLE>E-Mail Formulaire</TITLE>';
echo '</HEAD>';
echo '<BODY>';
echo '<FORM method="POST" action="php/envoimail.php">';
echo '<P>Votre nom:<br>';
echo '<INPUT type="text" name="nom" size=30>';
echo '</p>';
echo '<P>Votre adresse E-Mail:<br>';
echo '<INPUT type="text" name="email" size=30>';
echo '</p>';
echo '<P>Message:<br>';
echo '<textarea name="message" cols=30 rows=5></textarea>';
echo '</p><INPUT type="submit" value="Envoyer">';
echo '</FORM>';
echo '</BODY>';
echo '</HTML>';
echo '</center>';

