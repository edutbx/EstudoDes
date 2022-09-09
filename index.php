<?php

function vd($arr){
    echo '<pre>';
    var_dump($arr);
}


$lista = array('1','2','3','4','5');
$lista[] = 6;
$lista['vilao'] = 'coringa';
$lista[] = 7;

vd($lista);
echo $lista['vilao'];

$curso['InfoInter'] = array('DES'=>'Jeferson', 'OSA', 'RC', 'DDW', 'PAW');
$curso['medio'] = array('matematica', 'fisica', 'quimica', 'biologia', 'portugues');
$curso['Logistica'] = [];
$curso['Administração'] = [];
vd($curso);

echo '<hr>';

foreach($curso['medio'] as $valor){
    echo $valor.'<br>';
}

echo '<hr>';

foreach($curso['InfoInter'] as $valor){
    echo $valor.'<br>';
}

$curso['medio'][0] = 'Artes';
unset($curso['medio'][3]);
$curso['medio'][11]='Informatica';
$curso['medio'][]='finanças';
vd($curso);