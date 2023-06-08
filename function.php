<?php
// ------ SEZIONE LOGICA ------
function passwordGenerator($length)
{
    $caratteri = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $password = '';
    for ($i = 0; $i < $length; $i++) {
        $password .= $caratteri[random_int(0, strlen($caratteri) - 1)];
    }
    return $password;
}

if (isset($_GET['pass_len'])) {
    $max_len = $_GET['pass_len'];
}
