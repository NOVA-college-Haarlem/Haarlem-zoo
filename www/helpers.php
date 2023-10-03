<?php

function dump_die($var)
{
    echo '<pre>';
    var_dump($var);
    echo '</pre>';
    die();
}

function generateConfirmationKey($length = 10)
{
    // Define the characters that can be used in the confirmation key
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

    // Initialize an empty key
    $confirmationKey = '';

    // Generate a random key by selecting characters from the defined set
    for ($i = 0; $i < $length; $i++) {
        $randomIndex = mt_rand(0, strlen($characters) - 1);
        $confirmationKey .= $characters[$randomIndex];
    }

    return $confirmationKey;
}
