<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full bg-white">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

    <title>{{ config('app.name', '') }} | @yield('title')</title>

    <!-- Styles -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="//unpkg.com/alpinejs" defer></script>
    <link href="{{ asset('public/css/style.css') }}" rel="stylesheet">
    <link rel="shortcut icon" href="{{asset('logo.png')}}" type="image/png">
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@9.0.3"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/survey-jquery/1.12.9/survey.jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/survey-jquery/1.12.9/survey.min.css">
</head>
<body class="h-full">
<div>
    @include('partials.mobile_menu')
    @include('partials.sidebar_menu')
    <div class="lg:pl-72">
        @include('partials.header')
        @yield('content')
    </div>
</div>
<script>
    function toggleElement(selector) {
        let element = document.querySelector(selector);
        if (element) {
            element.classList.toggle('hidden');
        } else {
            console.warn(`Element not found for selector: ${selector}`);
        }
    }
</script>

</body>
</html>
