<?php
//Funciones Personalizadas para el Proyecto

use Carbon\Carbon;

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

function verImagen($path, $root = 'storage'): string
{
    if (!empty($path)){
        if (file_exists(public_path($root.'/'.$path))){
            return asset($root.'/'.$path);
        }
    }
    return asset('img/web_img_placeholder.jpg');
}

function haceCuanto($fecha): string
{
    return Carbon::parse($fecha)->diffForHumans();
}

function getFecha($fecha, $format = null): string
{
    if (is_null($fecha)){
        if (is_null($format)){
            $date = Carbon::now(env('APP_TIMEZONE', "America/Caracas"))->toDateString();
        }else{
            $date = Carbon::now(env('APP_TIMEZONE', "America/Caracas"))->format($format);
        }
    }else{
        if (is_null($format)){
            $date = Carbon::parse($fecha)->format("d/m/Y");
        }else{
            $date = Carbon::parse($fecha)->format($format);
        }
    }
    return $date;
}

// Obtener la fecha en español
function fechaEnLetras($fecha, $isoFormat = null): string
{
    // dddd => Nombre del DIA ejemplo: lunes
    // MMMM => nombre del mes ejemplo: febrero
    $format = "dddd D [de] MMMM [de] YYYY"; // fecha completa
    if (!is_null($isoFormat)){
        $format = $isoFormat;
    }
    return Carbon::parse($fecha)->isoFormat($format);
}
