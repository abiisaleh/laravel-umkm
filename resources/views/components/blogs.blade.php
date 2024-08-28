@php
    $images = [
        'https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg',
        'https://flowbite.s3.amazonaws.com/docs/gallery/square/image-2.jpg',
        'https://flowbite.s3.amazonaws.com/docs/gallery/square/image-3.jpg',
    ];
@endphp

<section class="max-w-screen-xl mx-auto md:min-h-screen ">
    <div class="text-center">
        <h1 class="mb-4 text-4xl font-extrabold !leading-tight tracking-tight text-gray-900 md:text-5xl lg:text-4xl ">
            Our Blog</h1>

        <p class="my-4 mb-6
            text-lg font-normal text-gray-500 lg:text-xl">We use an agile approach to test
            assumptions and connect with the needs of your audience early and often.</p>
    </div>

    <div class="grid md:grid-cols-3 gap-4">
        @foreach ($images as $image)
            <x-ui.blog-card :$image />
        @endforeach
    </div>
</section>
