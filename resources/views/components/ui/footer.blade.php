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



<div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
    <div class="grid md:grid-cols-4">
        <div class="mb-4 md:mb-0">
            <a href="https://flowbite.com/" class="flex items-center">
                <img src="/img/penyek-logo.png" class="h-8 me-3" alt="FlowBite Logo" />
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
                        62 852-8072-1422
                    </li>
                </ul>
            </x-ui.footer-link>

            <x-ui.footer-link name="Working Hours">
                <ul>
                    <li class=" cursor-pointer hover:text-gray-400">
                        @svg('bi-clock', 'inline-block me-2 mb-1')
                        06.00 - 12.00 WIB
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
        <span class="text-sm text-white sm:text-center dark:text-gray-400">© 2024 <a href="#"
                class="hover:underline">PKK SI Nusa Putra University</a>. All Rights Reserved.
        </span>
        <div class="flex mt-4 sm:justify-center sm:mt-0">

            @foreach ($social as $item)
                <x-ui.footer-social name="{{ $item['name'] }}" link="{{ $item['link'] }}" icon="{{ $item['icon'] }}" />
            @endforeach

        </div>
    </div>
</div>
