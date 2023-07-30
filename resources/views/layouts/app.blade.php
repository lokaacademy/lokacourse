<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="theme-color" content="#000000" />
        <link rel="shortcut icon" href="assets/images/loka-icon.png" />
        <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/creativetimofficial/tailwind-starter-kit/compiled-tailwind.min.css"/>
        <link rel="stylesheet" href="{{ mix('css/app.css') }}"> 
        
        <title>Loka Academy - {{ $title }}</title>
    </head>
    <body>
        {{ $main }}
        @extends('components.footer')
    </body>
    
</html>