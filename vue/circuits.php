<link rel="stylesheet" href="css/circuits.css">
<div class="content">
<?php
require("controller/circuitsController.php");

$circuits = select();

echo '<div class="cartes">';
foreach ($circuits as $circuit) {
    echo '<div class="circuit">';
    foreach($circuit as $cle => $valeur){
        $text = "";
        switch ($cle) {
            case 'nom':
                $text .= '<p><b>'.$valeur.'</b></p>';
                break;
            case 'pays':
                $text .= '<p><i>'.$valeur.'</i></p>';
                break;
            case 'annee':
                $text .= '<p>depuis '.$valeur.'</p>';
                break;
            case 'longueur':
                $text .= '<p>'.$valeur.'m</p>';
                break;
            default:
                break;
        }
        echo $text;
    }
    echo '</div>';
}
echo '</div>';

?>
</div>