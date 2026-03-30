<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name', 'Laravel') }}</title>
        @vite('resources/css/app.css')
    </head>
    <body class="bg-gray-100">
        <h1>Welcome to {{ config('app.name', 'Laravel') }}</h1>
        <p>This is the welcome page of your Laravel application.</p>
    </body>
</html>
