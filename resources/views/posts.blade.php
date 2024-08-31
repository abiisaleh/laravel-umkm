<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name') }}</title>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-JVYF29P1BG"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-JVYF29P1BG');
    </script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased">
    <header class="fixed top-0 w-full z-10">
        <x-ui.nav />
    </header>

    <main>
        <article>
            <x-blogs :$posts />
        </article>
        <section id="contact">
            <footer class="bg-gray-900">
                <x-ui.footer />
            </footer>
        </section>
    </main>

    <x-ui.bubble-btn />
</body>

</html>
