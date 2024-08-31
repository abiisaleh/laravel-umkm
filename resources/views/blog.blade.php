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
        <article class="md:min-h-screen my-24 ">
            <div class="max-w-screen-xl flex mx-auto p-4 prose lg:prose-xl">
                <div class="">
                    <h1 class="text-2xl md:text-6xl">{{ $post->title }}</h1>
                    <small class=" italic"><a href="/category/{{ $post->category->slug }}"
                            class=" no-underline hover:underline">{{ $post->category->name }}</a> •
                        Diterbitkan pada
                        {{ $post->published_at }}</small>
                    <img src="/storage/{{ $post->image }}" alt="">
                    {{ $post->content }}
                </div>
            </div>


        </article>
        <section id="contact">
            <div class="bg-gray-900">
                <x-ui.footer />
            </div>
        </section>
    </main>

    <x-ui.bubble-btn />
</body>

</html>
