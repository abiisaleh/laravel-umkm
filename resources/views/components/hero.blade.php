@php
    $images = ['img/penyek.jpg', 'img/penyek2.jpg', 'img/team penyek.jpg'];
@endphp

<section class="md:min-h-screen grid md:grid-cols-2 items-center mt-24 mb-12 md:my-0 px-4 md:px-0" id="home">
    <div id="gallery" class="relative w-full order-2 md:order-1" data-carousel="slide">
        <!-- Carousel wrapper -->
        <div class="relative h-56 overflow-hidden md:h-screen z-0">

            @foreach ($images as $key => $url)
                <div class="hidden duration-700 ease-in-out" data-carousel-item="{{ $key == 1 ? 'active' : '' }}">
                    <img src="{{ $url }}"
                        class="absolute block max-w-full h-screen -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                        alt="">
                </div>
            @endforeach

        </div>
        <!-- Slider controls -->
        <button type="button"
            class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
            data-carousel-prev>
            <span
                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                @svg('bi-chevron-left', 'size-6 text-white rtl:rotate-180')
                <span class="sr-only">Previous</span>
            </span>
        </button>
        <button type="button"
            class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
            data-carousel-next>
            <span
                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                @svg('bi-chevron-right', 'size-6 text-white rtl:rotate-180')
                <span class="sr-only">Next</span>
            </span>
        </button>
    </div>

    <div class="sm:px-16 xl:px-48 order-1 md:order-2">
        <h1 class="mb-4 text-4xl font-extrabold !leading-tight tracking-tight text-gray-900 md:text-5xl lg:text-6xl">
            <span class="bg-indigo-600 !leading-none text-white px-1">Peyek</span> Doa Umi Desa Pasir Datar Indah
        </h1>
        <p class="mb-6
            text-lg font-normal text-gray-500 lg:text-xl">
            {{ 'Dibuat dengan bahan-bahan alami pilihan dan proses pembuatan tradisional, rempeyek Ibu Umi menjadi oleh-oleh khas yang wajib dicoba. Tekstur renyah dan rasa gurihnya menjadi bukti kualitas rempeyek yang dihasilkan oleh tangan-tangan terampil masyarakat Desa Pasir Datar Indah.' }}
        </p>
    </div>
</section>
