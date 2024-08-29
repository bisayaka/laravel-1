<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GALLERY</title>

    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>
    <h1 class = "front-bold text-center">THIS IS ABOUT GALLERY!</h1>
    <br>
    <u1>
        <a href="{{ route('index')}}"><li>home</li</a>
        <a href="{{ route('gallery')}}"><li>gallery</li</a>
        <a href="{{ route('service')}}"><li>service</li</a>
        <a href="{{ route('about')}}"class="text-red-500"><li>about</li></a>

    </u1>
    <br>
    
