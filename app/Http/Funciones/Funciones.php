<?php
//Funciones Personalizadas para el Proyecto

function generarStringAleatorio($largo = 10, $soloNumeros = false , $espacio = false): string
{
    $caracteres = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    if ($soloNumeros){
        $caracteres = '0123456789';
    }
    $caracteres = $espacio ? $caracteres . ' ' : $caracteres;
    $string = '';
    for ($i = 0; $i < $largo; $i++) {
        $string .= $caracteres[rand(0, strlen($caracteres) - 1)];
    }
    return $string;
}

function verImagen($path): string
{
    if (!is_null($path)){
        if (file_exists(public_path('storage/'.$path))){
            return asset($path);
        }
    }
    return asset('img/web_img_placeholder.jpg');
}
