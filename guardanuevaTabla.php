<?php
/*SHA256, MD5 -> unidirrecional 
AERS-256-CBC -> BIDIRECCIONAL
AES-256, CBC (bloque de cadenas
encriptadas - cipher block chaining)
*/
function encriptarTexto($texto, $key, $iv) 
{
$cipher = "AES-256-CBC";
$opciones = OPENSSL_RAW_DATA;
$encriptado = openssl_encrypt($texto,$cipher,$key,$opciones,$iv);
return base64_encode($encriptado);
#$encriptado -> bits
#return bits -> bytes
#bytes -> legible a nosotros
}
function desencriptarTexto($textoEncriptado, $key, $iv){
$cipher = "AES-256-CBC";
$opciones = openssl_decrypt(base64_decode($textoEncriptado),
$cipher,
$key,
$opciones,
$iv);
return $decrypt;
}
$key = "1qwertyuiopasdfghjklzxcvbnm876+//"; //texto SECRETO de 32 caracteres
$iv = hex2bin('16caracteresalea');//16bytesRand //"16caracteresalea"

?>