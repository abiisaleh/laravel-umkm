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
        <article class="md:min-h-screen my-24 ">
            <div class="max-w-screen-xl flex mx-auto p-4 prose lg:prose-xl">
                <div class="">
                    <h1>{{ $post->title }}</h1>
                    <img src="/storage/{{ $post->image }}" alt="">
                    {{ $post->content }}
                </div>
            </div>


        </article>
        <section id="contact">
            <x-ui.footer />
        </section>
    </main>

    <x-ui.bubble-btn />
</body>

</html>
