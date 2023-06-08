<?php
// ------ SEZIONE LOGICA ------

// creo la password
function passwordGenerator($length)
{
    $ripetere = isset($_GET['ripetuti']) ? $_GET['ripetuti'] : '';

    $maiuscole = isset($_GET['maiuscole']) ? $_GET['maiuscole'] : '';
    $minuscole = isset($_GET['minuscole']) ? $_GET['minuscole'] : '';
    $numeri = isset($_GET['numeri']) ? $_GET['numeri'] : '';
    $speciali = isset($_GET['speciali']) ? $_GET['speciali'] : '';

    $maiusc = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $minusc = 'abcdefghijklmnopqrstuvwxyz';
    $num = '0123456789';
    $special = '!?#(){}[]*+-\/%';

    $caratteri = '';
    $password = '';

    if ($maiuscole == 'on') {
        $caratteri .= $maiusc;
    }

    if ($minuscole == 'on') {
        $caratteri .= $minusc;
    }

    if ($numeri == 'on') {
        $caratteri .= $num;
    }

    if ($speciali == 'on') {
        $caratteri .= $special;
    }

    // tramite check controllo che non vengano inseriti caratteri uguali
    $check = '';
    if ($ripetere == '') {
        if (strlen($caratteri) == '0') {
            return $password = '';
        } else {
            for ($i = 0; $i < $length; $i++) {
                $password .= $caratteri[random_int(0, strlen($caratteri) - 1)];
            }
            return $password;
        }
    } else {
        if (strlen($caratteri) == '0') {
            return $password = '';
        } else {
            for ($i = 0; $i < $length;) {
                $check = $caratteri[random_int(0, strlen($caratteri) - 1)];
                if (strpos($password, $check) === false) {
                    $password .= $check;
                    $i++;
                }
            }
            return $password;
        }
    }
}

function check_checkbox()
{
    $maiuscole = isset($_GET['maiuscole']) ? $_GET['maiuscole'] : '';
    $minuscole = isset($_GET['minuscole']) ? $_GET['minuscole'] : '';
    $numeri = isset($_GET['numeri']) ? $_GET['numeri'] : '';
    $speciali = isset($_GET['speciali']) ? $_GET['speciali'] : '';
    $check_option = true;
    if ($maiuscole == 'on' || $minuscole == 'on' || $numeri == 'on' || $speciali == 'on') {
        $check_option = true;
        return $check_option;
    } else {
        $check_option = false;
        return $check_option;
    }
}

// setto max_len per visualizzare il risultato
if (isset($_GET['pass_len'])) {
    $max_len = $_GET['pass_len'];
}
