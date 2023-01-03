<?php

$contasCorrentes = [
    12345678910 => [
        'titular' => 'Alberto',
        'saldo' => 1000
    ],

    12345678911 => [
        'titular' => 'Maria',
        'Saldo' => 10000
    ],

    12345678912 => [
        'titular' => 'José',
        'saldo' => 300
    ]

];

// ao por chaves vazias, é adicionado no próximo valor da lista
$contasCorrentes[] = [
    'titular' => 'Claudia',
    'Saldo' => 2000
];

foreach($contasCorrentes as $cpf => $conta){
    echo $cpf.PHP_EOL;
}