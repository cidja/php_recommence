<h1>C'est ici que je commence</h1>
<?php
echo "je vais essayer d'afficher quelque chose<br/>";
$a = 'je suis une chaine de caractères<br/>';
echo "avec var_dump la variable a <br/>";
echo var_dump($a);
?>

<h2>Les tableaux</h2>

<?php

$b = [1,2,3,5];
foreach($b as $valeurs){
    echo "je suis $valeurs";
}

$c = [ 'prenom' => 'jean', 'nom' => 'Marcel', 'profession' => 'charpentier'];
/* foreach($c as $key=>$value){
    echo $key+ ' = '+ $value +'<br/>';
} */
var_dump($c);
echo "je fais un test"
