<?php


// Array

    // Indexed Array
    $a=['BMW','Ferari','Toyota'];
    echo $a[2];

    // Associative Array
    $b=[
        'Indonesia' => 'Nasi Padang',
        'Singapura' => 'Nasi Lemak',
        'Amerika' => 'Steak'
    ];


    // Multidimentional Array
    $c=[
        'a' => $a,
        'b' => $b,
    ];
    $d=[
        'c' => $c,
        'lainnya' => [1,2,3,4,5,6,7,8,9,0],
    ];

    echo $c['a'][1];
    echo $c['b']['Indonesia'];
 