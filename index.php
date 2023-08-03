<!DOCTYPE html>
<html>
<head>
    <title>Hello, World 2023!</title>
</head>
<body>
<?php
// Partie 1
$message = "Hello World !!";
$message .= " 2023";
echo $message . "<br>"; // Ajout du saut de ligne

// Partie 2
$a = 10;
$b = 20;
echo "Avant l'inversion : a = " . $a . ", b = " . $b . "<br>";

$temp = $a;
$a = $b;
$b = $temp;

echo "Après l'inversion : a = " . $a . ", b = " . $b . "<br>";

// Partie 3
// Boucle for pour afficher "Hello World !!" seulement quand le nombre d'itération est pair
for ($i = 1; $i <= 10; $i++) {
    if ($i % 2 == 0) {
        echo "Hello World !! - Itération $i <br>";
    }
}

// Partie 4
// Générer un chiffre aléatoire entre 1 et 3
$randomNumber = rand(1, 3);

// Tant que le chiffre aléatoire n'est pas égal à 2, l'afficher
while ($randomNumber != 2) {
    echo "Le chiffre aléatoire est $randomNumber <br>";
    $randomNumber = rand(1, 3);
}

// Une fois que le chiffre aléatoire est égal à 2, afficher le message final
echo "Le chiffre aléatoire est maintenant 2";

// Déclaration du tableau contenant les villes
$villes = ['Paris', 'Marseille', 'Reims', 'Charleville'];

// Affichage de chaque ville à l'aide d'une boucle foreach
foreach ($villes as $ville) {
    echo $ville . "<br>";
}

?>
</body>
</html>
