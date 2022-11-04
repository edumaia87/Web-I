<?php

$name = filter_input(INPUT_POST, 'username');
$email = filter_input(INPUT_POST, 'email');
$password = filter_input(INPUT_POST, 'password');


$return = [];

if($name && $email && $password) {
    $return = [
        'status' => 'ok',
        'message' => 'Cadastro com sucesso!'
    ];
} else {
    $return = [
        'status' => 'erro',
        'message' => 'Dados ausentes'
    ];
}

echo json_encode($return);