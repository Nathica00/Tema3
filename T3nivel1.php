<?php
/*- Exercici 1
Crea un array, afegeix-li 5 nombres enters i després mostrals per 
pantalla d’un en un.*/

echo "<h3>Exercici1</h3>";

$numbers=[3,4,7,8,9];

foreach ($numbers as $key => $value) {
    echo $value ." ";
}

echo "<h3>Exercici2</h3>";

/*- Exercici 2
$X = array (10, 20, 30, 40, 50,60);
Mostrar per pantalla la mida de l’array anterior i posteriorment elimina 
un element de l’array anterior. Després d'eliminar l'element, 
les claus senceres han de ser normalitzades(s’han de reorganitzar els seus índexs). 
Mostra per última vegada la mida de l’array.*/

$X = array (10, 20, 30, 40, 50,60);

echo " El tamaño del array inicial es: " .count($X) ."<br>";
unset($X[1]); // borro la posicion 1


$X = array_values($X); // reorganizar inices del array

echo $X[1] ." : probando que la posición eliminada ahora tiene un nuevo valor<br>"; // probando si ya recuperé otro valor en la psicion 1.
echo "El nuevo array es: <br>";

foreach ($X as $key => $value) { // para mostrar cada uno de los elementos del nuevo array.
   echo $value ." ";
}
echo "<br><br>Otra forma de imprimir con el print_r: <br>";
print_r($X); // pra inprimir con las posiciones y el valor directamente sin el for each

echo "<h3>Exercici3</h3>";

/*Crea una funció que rebi com a paràmetres un array de paraules i un caràcter. 
La funció ens retorna true si totes les paraules de l’array tenen el caràcter passat
com a segon paràmetre.
Per exemple:
Si tenim [“hola”, “Php”, “Html”] retornarà true si preguntem per “h” però fals si 
preguntem per “l”. */

function encontrarLetra(array $Palabras, string $letra):void{
    $array_size=count($Palabras);
    $character=0;
    $palabra=" ";
    $letra_encontrada=false;
    foreach ($Palabras as $key => $value) {
        $palabra=$value;
        $palabra=str_split($palabra);
            foreach ($palabra as $key => $value) {
                if ($value==$letra) {
                    $letra_encontrada=true;
                }
                if($letra_encontrada==true){
                    $character=$character+1;
                    break;
                   }
            }   
    }         
    if ($array_size==$character) {
            echo "La letra buscada se encuentra en todas las palabras del Array";
        }
        else{
            echo "La letra buscada no se encuentra en todas las palabras del array, intenta con otra";
        }          
}

$existeLetra= encontrarLetra($Z=["hola","soya", "balona", "caballo","otra"], "n");



echo "<h3>Excerici4</h3>";

/*- Exercici 4
Fes un array associatiu que representi informació de tu mateix/a. 
En concret ha d’incloure:

nom
edat
email
menjar favorit */

$myself=[
    'name'=> "Nathalia",
    'age' => "38",
    'e-mail' => "nathaliagarciaquintero@gmail.com",
    'favorite food' => "sushi" 
];

print_r ($myself);

?>