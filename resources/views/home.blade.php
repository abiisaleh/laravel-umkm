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
            <x-hero :$subjudul />
            <x-about />
            <x-products />
            <x-team />
            <x-blogs :$posts />
        </article>
        <section id="contact">
            <footer class="bg-gray-900 min-h-screen md:h-screen">
                {{-- Google Maps --}}
                <iframe class="w-full md:h-1/2 h-80"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.377232107178!2d106.8981194!3d-6.8453002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6835a5f2c723c3%3A0x5c800931b8cda589!2sSDN%20KUBANG%20CARINGIN!5e0!3m2!1sid!2sid!4v1724924527385!5m2!1sid!2sid"
                    allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                <x-ui.footer />
            </footer>
        </section>
    </main>

    <x-ui.bubble-btn />
</body>

</html>
