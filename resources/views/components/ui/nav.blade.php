@php
    $currentUrl = Request::path();
    $links = [
        'Home' => '/#',
        'About' => '/#about',
        'Products' => '/#products',
        'Blog' => '/#blog',
        'Contact' => '/#contact',
    ];
@endphp

<nav class="bg-white border-gray-200">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="{{ config('base_url') }}" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="/img/penyek-logo.png" class="h-8" alt="Penyek Logo" />
            <span class="self-center text-2xl font-semibold whitespace-nowrap ">{{ config('app.name') }}</span>
        </a>
        <button data-collapse-toggle="navbar-default" type="button"
            class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 "
            aria-controls="navbar-default" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M1 1h15M1 7h15M1 13h15" />
            </svg>
        </button>
        <div class="hidden w-full md:block md:w-auto" id="navbar-default">
            <ul
                class="font-medium flex flex-col items-center p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white ">
                @foreach ($links as $link => $route)
                    <li>
                        <a href="{{ $route }}"
                            class="block py-2 px-3  rounded   md:p-0 {{ $route == $currentUrl ? 'text-white bg-blue-700 md:bg-transparent md:text-blue-700' : 'text-gray-900 hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700' }}"
                            aria-current="page">{{ $link }}</a>
                    </li>
                @endforeach
                <a href="/admin"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2">Login</a>
            </ul>
        </div>
    </div>
</nav>
