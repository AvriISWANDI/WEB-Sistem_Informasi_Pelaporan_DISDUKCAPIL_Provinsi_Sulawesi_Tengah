<?php
defined('BASEPATH') or exit('No direct script access allowed');

defined('BASEPATH') or exit('No direct script access allowed');

function rc4_hash($input, $key)
{
    $s = range(0, 255);
    $j = 0;
    $x = '';

    // KSA (Key Scheduling Algorithm)
    for ($i = 0; $i < 256; $i++) {
        $j = ($j + $s[$i] + ord($key[$i % strlen($key)])) % 256;
        // Swap
        $temp = $s[$i];
        $s[$i] = $s[$j];
        $s[$j] = $temp;
    }

    // PRGA (Pseudo-Random Generation Algorithm)
    $i = $j = 0;
    for ($y = 0; $y < strlen($input); $y++) {
        $i = ($i + 1) % 256;
        $j = ($j + $s[$i]) % 256;
        // Swap
        $temp = $s[$i];
        $s[$i] = $s[$j];
        $s[$j] = $temp;
        $x .= chr(ord($input[$y]) ^ $s[($s[$i] + $s[$j]) % 256]);
    }

    // Convert to ASCII representation
    $encrypted = bin2hex($x);

    return $encrypted;
}