<section class="md:min-h-screen px-4 md:px-0" id="products">
    <div class="flex items-center flex-col gap-4 py-24">
        <h1
            class="mb-4 text-4xl font-extrabold !leading-tight tracking-tight text-gray-900 md:text-5xl lg:text-4xl text-center">
            Menu kita</h1>

        <hr class="border-b-1 w-32 border-gray-500">

        <p class="my-4 mb-6
            text-lg font-normal text-gray-500 lg:text-xl text-center">Penyek Khas Rumah, Siap
            Menyapa Lidah Anda</p>


        <div class="grid md:grid-cols-2 gap-2 max-w-screen-xl ">
            <x-ui.image-card src="{{ env('app_url') }}/img/menu/penyek.jpg" caption="Penyek biasa" />
            <x-ui.image-card src="{{ env('app_url') }}/img/menu/penyek2.jpg" caption="Penyek spesial" />
            {{-- <x-ui.image-card src="{{ env('app_url') }}/img/menu/penyek3.jpg" caption="Penyek super" /> --}}
        </div>

        <x-ui.button>
            <span class=" inline-flex">
                @svg('bi-download', 'me-4')
                Download catalog
            </span>
        </x-ui.button>
    </div>

</section>
