<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="theme-color" content="#000000" />
        <link rel="shortcut icon" href="assets/images/loka-icon.png" />
        <link rel="apple-touch-icon" sizes="76x76" href="assets/images/loka-icon.jpg"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/creativetimofficial/tailwind-starter-kit/compiled-tailwind.min.css"/>
        {{-- <link rel="stylesheet" href="{{ mix('css/app.css') }}"> --}}
        @vite('resources/css/app.css')
        @vite('resources/js/app.js')

        <!-- Meta tags for sharing on social media -->
        <meta property="og:title" content="Loka Academy">
        <meta property="og:description" content="Buka potensimu dengan program pembelajaran keren di Loka Academy! Ikuti kursus seru dari mentor-mantor keren yang ahli di bidangnya. Capai cita-citamu dengan gaya kekinian dan teman-teman seru di komunitas pembelajar kami. Ayo, jangan ketinggalan, mari berpetualang dalam dunia pengetahuan bersama Loka Academy!">
        <meta property="og:image" content="https://lokaacademy.com/assets/images/social-card.jpeg">
        <meta property="og:url" content="https://www.lokaacademy.com">
        <meta property="og:type" content="website">

        <!-- Twitter card meta tags -->
        <meta name="twitter:title" content="Loka Academy">
        <meta name="twitter:description" content="Buka potensimu dengan program pembelajaran keren di Loka Academy! Ikuti kursus seru dari mentor-mantor keren yang ahli di bidangnya. Capai cita-citamu dengan gaya kekinian dan teman-teman seru di komunitas pembelajar kami. Ayo, jangan ketinggalan, mari berpetualang dalam dunia pengetahuan bersama Loka Academy!">
        <meta name="twitter:image" content="https://lokaacademy.com/assets/images/social-card.jpeg">
        <meta name="twitter:card" content="lokaacademy">

        <!-- WhatsApp meta tags -->
        <meta property="og:site_name" content="Loka Academy">
        <meta property="og:title" content="Loka Academy">
        <meta property="og:description" content="Buka potensimu dengan program pembelajaran keren di Loka Academy! Ikuti kursus seru dari mentor-mantor keren yang ahli di bidangnya. Capai cita-citamu dengan gaya kekinian dan teman-teman seru di komunitas pembelajar kami. Ayo, jangan ketinggalan, mari berpetualang dalam dunia pengetahuan bersama Loka Academy!">
        <meta property="og:image" content="https://lokaacademy.com/assets/images/social-card.jpeg">
        <meta property="og:url" content="https://www.lokaacademy.com">
        
        <title>Loka Academy - {{ $title }}</title>
    </head>
    <body>
        {{ $main }}
        @extends('components.footer')
    </body>
    
</html>
