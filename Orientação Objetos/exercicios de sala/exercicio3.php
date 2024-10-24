<?php



$vetorA = array();
echo "Informe os elementos de A: \n";
for($i=1; $i < 5; $i++){
    $num = readline("Informe um número: \n ");
    array_push($palavras, $num);
}
$vetorB = array();
echo "Informe os elementos de B: ";
for($i=1; $i < 5; $i++){
    $num = readline("Informe um número: \n ");
    array_push($palavras, $num);
}

$vetorC = array();
foreach ($vetorA as $a){
    foreach ($vetorB as $b){
        if($a == $b) {
        array_push($vetorC,$a);
        break;
        }
    }
}
echo "\nVetor C: ";
foreach ($vetorD as $c) 
    echo $c . ", ";
    
echo "\n";


$vetorD = array();
foreach ($vetorA as $a)
    array_push($vetorD, $a);

for ($i=0; $i<count($vetorB); $i++) 
    array_push($vetorD, $vetorB[$i]);

echo "\nVetor D: ";
foreach ($vetorD as $d) 
   echo $d . ", ";

echo "\n";