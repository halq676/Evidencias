<?php
$frase = "Analisis y Desarrollo de Software";
$vocales = 0;
for ($i = 0; $i < strlen($frase); $i++) {
    if (in_array(strtolower($frase[$i]), ['a', 'e', 'i', 'o', 'u'])) {
        $vocales++;
    }
}
echo "La frase '$frase' tiene $vocales vocales."; //Impriime numero de vocales


?>




