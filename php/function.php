<?php
// all the letters of the alphabet in lowercase
$textLowercase = 'abcdefghijklmnopqrstuvwxyz';
// all letters of the alphabet in uppercase
$textUppercase = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
// all numbers
$numbers = '0123456789';
// all lettere symbol
$specialtext = '!@#$%&?';


$validChars = $textLowercase . $textUppercase . $numbers . $specialtext;
$newPassword = '';

// General function waiting to be called with the right parameters
function generatePassword($characters, $length)
{
    $password = '';
    $charLength = strlen($characters);
    for ($i = 0; $i < $length; $i++) {
        $password .= $characters[rand(0, $charLength - 1)];
    }
    return $password;
}

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['password_length'])) {
    $passwordLength = $_GET['password_length'];
    $newPassword = generatePassword($validChars, $passwordLength);
}
?>