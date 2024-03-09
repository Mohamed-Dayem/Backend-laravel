<!DOCTYPE html>
<html lang="{{ str\_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Set the character encoding for the HTML document -->
        <meta charset="utf-8">

        <!-- Define the viewport for responsive design -->
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Set the title of the webpage -->
        <title>Laravel</title>

        <!-- Import the custom stylesheet for the application -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        <!-- Import the web fonts from Bunny Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    </head>
    <body class="antialiased">
        <!-- Apply the background pattern and set the minimum height of the body element -->
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">

            <!-- Include the navigation layout -->
            @include('layouts.navigation')

            <!-- Define the maximum width of the content and apply padding -->
            <div class="max-w-7xl mx-auto p-6 lg:p-8">

                <!-- Center the content horizontally -->
                <div class="flex justify-center">

                    <!-- Display the SVG image -->
                    <svg viewBox="0 0 62 65" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-16 w-auto bg-gray-100 dark:bg-gray-900">

                        <!-- SVG path data for the image -->
                        <path d="M61.8548 14.6253C61.8778 14.7102 61.8895 14.7978 61.8897 14.8858V28.5615C61.8898 28.737 61.8434 28.9095 61.7554 29.0614C61.6675 29.2132 61.5409 29.3392 61.3887 29.4265L49.9104 36.0351V49.1337C49.9104 49.4902 49.7209 49.8192 49.4118 49.9987L25.4519 63.7916C25.3971 63.8227 25.3372 63.8427 25.2
