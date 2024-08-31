<section class="md:min-h-screen px-4 md:px-0" id="blog">
    <div class="flex items-center flex-col gap-4 py-24">
        <h1
            class="mb-4 text-4xl font-extrabold !leading-tight tracking-tight text-gray-900 md:text-5xl lg:text-4xl text-center">
            Artikel terbaru</h1>

        <hr class="border-b-1 w-32 border-gray-500 mb-8">

        <div class="grid place-items-center max-w-screen-lg mx-auto">
            <div class="grid md:grid-cols-2 gap-4">
                @foreach ($posts as $post)
                    <x-ui.blog-card :$post />
                @endforeach
            </div>
        </div>



    </div>

</section>
