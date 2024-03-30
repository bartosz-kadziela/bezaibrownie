<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://cdn.tailwindcss.com"></script>
        <title>Beza i Brownie - {{ $title }}</title>
        <link rel="icon" type="image/svg+xml" href="images/bunny_icon.svg">
        @vite('resources/js/app.js')
        @vite('resources/css/app.css')
    </head>
    <body class="bg-gray-100">
        <div class="container mx-auto px-10 bg-gray-50 min-h-screen relative pb-12">
            <nav class="py-4">
                <a href="/">
                    <div class="h-24 w-24 bg-white shadow-md border rounded-full p-2 float-left">
                        <img src="images/bezaibrownie.png" alt="Beza i Brownie logo" class="h-20 w-20">
                    </div>
                </a>
                <p class="italic text-4xl py-7 float-left ml-4">
                    Beza i Brownie - {{ $title }}
                </p>
                <div class="float-right py-12 text-xl" style="font-family:Gill Sans">
                    <p class="px-4 py-2 border-2 rounded-xl bg-gradient-to-r from-slate-100 from-0% via-slate-50 via-50% to-slate-100 to-100% shadow-md shadow-slate-300">
                        <a href="{{ url('/') }}" class="{{ $title === 'Homepage' ? 'pointer-events-none font-semibold' : 'text-slate-500 hover:text-blue-600 hover:drop-shadow-xl' }}">
                            Homepage \
                        </a>
                        <a href="{{ url('/about') }}" class="{{ $title === 'About' ? 'pointer-events-none font-semibold' : 'text-slate-500 hover:text-blue-600 hover:drop-shadow-xl' }}">
                            About \
                        </a>
                        <a href="{{ url('/gallery') }}" class="{{ $title === 'Gallery' ? 'pointer-events-none font-semibold' : 'text-slate-500 hover:text-blue-600 hover:drop-shadow-xl' }}">
                            Gallery \
                        </a>
                        <a href="{{ url('/diet') }}" class="{{ $title === 'Diet' ? 'pointer-events-none font-semibold' : 'text-slate-500 hover:text-blue-600 hover:drop-shadow-xl' }}">
                            Diet \
                        </a>
                        <a href="{{ url('/behaviour') }}" class="{{ $title === 'Behaviour' ? 'pointer-events-none font-semibold' : 'text-slate-500 hover:text-blue-600 hover:drop-shadow-xl' }}">
                            Behaviour \
                        </a>
                        <a href="{{ url('/health') }}" class="{{ $title === 'Health' ? 'pointer-events-none font-semibold' : 'text-slate-500 hover:text-blue-600 hover:drop-shadow-xl' }}">
                            Health
                        </a>
                    </p>
                </div>
                <div class="clear-both"></div>
            </nav>
            <main>
                @yield('content')
            </main>
            <footer class="absolute bottom-0 py-4">
                Copyright © 2024 Bartosz Kądziela.
            </footer>
        </div>
    </body>
</html>
