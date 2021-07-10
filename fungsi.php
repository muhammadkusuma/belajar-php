<?php

function bilanghalo(){
    echo "Haloo";
}

function bilangnama($nama='Tanpa Nama'){
    echo "Halo,  " . $nama . '!<br/>';
}

function tambah($a,$b){
    $total = $a+$b;
    echo $total;
}

bilangnama('Wira');