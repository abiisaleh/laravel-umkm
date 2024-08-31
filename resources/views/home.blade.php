<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased">
    <header class="fixed top-0 w-full z-10">
        <x-ui.nav />
    </header>

    <main>
        <article>
            <x-hero :$subjudul />
            <x-about />
            <x-products />
            <x-team />
        </article>
        <section id="contact">
            <x-ui.footer />
        </section>
    </main>

    <x-ui.bubble-btn />
</body>

</html>
