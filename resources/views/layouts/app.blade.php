<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet"/>

    <link rel="icon" type="image/png" href="{{asset('icons/favicon.png')}}">


    @vite('resources/css/app.css')
    @vite('resources/js/app.js')

    <script src="https://cdn.tailwindcss.com"></script>

</head>


<body class="bg-[#F0F4F9] w-full h-screen flex flex-col justify-between">

<!-- ff785a -->
<!-- #FFD25A  #FFF05A -->
@include("partials.header")

<div class="px-5 w-full">
    <div class="bg-white mx-auto h-[600px]  md:h-96 w-full max-w-[1024px] rounded-2xl shadow-2xl">
        {{$slot}}
    </div>
</div>
@include("partials.footer")


</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/4.0.0/crypto-js.min.js"></script>
<script src="{{asset('js/script.js')}}">

</script>

</html>

