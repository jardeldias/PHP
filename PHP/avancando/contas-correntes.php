<?php

$conta1 = [
    'titular' => 'Alberto',
    'saldo' => 1000
];

$conta2 = [
    'titular' => 'Maria',
    'Saldo' => 10000
];

$conta3 = [
    'titular' => 'José',
    'saldo' => 300
];

$contasCorrentes = [$conta1, $conta2, $conta3];

for ($i = 0; $i < count($contasCorrentes); $i++){
    echo $contasCorrentes[$i]['titular'].PHP_EOL;
}