@php
    $social = [
        [
            'name' => 'Facebook page',
            'link' => 'htts://facebook.com',
            'icon' => 'bi-facebook',
        ],
        [
            'name' => 'Instagram page',
            'link' => 'htts://instagram.com',
            'icon' => 'bi-instagram',
        ],
        [
            'name' => 'Twitter page',
            'link' => 'htts://twitter.com',
            'icon' => 'bi-twitter',
        ],
    ];
@endphp

<footer class="bg-gray-900 min-h-screen md:h-screen">
    {{-- Google Maps --}}
    <iframe class="w-full md:h-1/2 h-80"
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1980.424830731581!2d106.87076773576088!3d-6.908573574290898!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6837c32f387075%3A0x5c9d3a3e6dd4901c!2sGOR%20Kamojan%20Cibolang!5e0!3m2!1sid!2sid!4v1722389069457!5m2!1sid!2sid"
        allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

    <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
        <div class="grid md:grid-cols-4">
            <div class="mb-4 md:mb-0">
                <a href="https://flowbite.com/" class="flex items-center">
                    <img src="https://flowbite.com/docs/images/logo.svg" class="h-8 me-3" alt="FlowBite Logo" />
                    <span
                        class="self-center text-2xl font-semibold whitespace-nowrap text-white">{{ config('app.name') }}</span>
                </a>
            </div>

            <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3 col-span-3">
                <div class="col-span-full sm:col-auto">
                    <x-ui.footer-link name="Address">
                        <p>Jl. Balai Rakyat Cakung No.14, RT.14/RW.1, Cakung Tim., Kec. Cakung, Kota Jakarta Timur,
                            Daerah
                            Khusus Ibukota Jakarta 13910</p>
                    </x-ui.footer-link>
                </div>

                <x-ui.footer-link name="Contact Us">
                    <ul>
                        <li class=" cursor-pointer hover:text-gray-400">
                            @svg('bi-telephone-fill', 'inline-block me-2 mb-1')
                            +62895-3611-87897
                        </li>
                    </ul>
                </x-ui.footer-link>

                <x-ui.footer-link name="Working Hours">
                    <ul>
                        <li class=" cursor-pointer hover:text-gray-400">
                            @svg('bi-clock', 'inline-block me-2 mb-1')
                            5.30am - 9am
                        </li>
                        <li class=" cursor-pointer hover:text-gray-400">
                            @svg('bi-calendar3', 'inline-block me-2 mb-1')
                            Setiap Hari Buka!
                        </li>
                    </ul>
                </x-ui.footer-link>
            </div>
        </div>
        <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
        <div class="sm:flex sm:items-center sm:justify-between">
            <span class="text-sm text-white sm:text-center dark:text-gray-400">© 2023 <a href="https://flowbite.com/"
                    class="hover:underline">Flowbite™</a>. All Rights Reserved.
            </span>
            <div class="flex mt-4 sm:justify-center sm:mt-0">

                @foreach ($social as $item)
                    <x-ui.footer-social name="{{ $item['name'] }}" link="{{ $item['link'] }}"
                        icon="{{ $item['icon'] }}" />
                @endforeach

            </div>
        </div>
    </div>
</footer>
