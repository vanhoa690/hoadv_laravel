<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel Blog</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
</head>

<body class="font-sans antialiased dark:bg-black dark:text-white/50">
    <header
        class='flex border-b py-4 px-4 sm:px-10 bg-white font-[sans-serif] min-h-[70px] tracking-wide relative z-50'>
        <div class='flex flex-wrap items-center gap-5 w-full'>
            <a href="javascript:void(0)"><img src="https://readymadeui.com/readymadeui.svg" alt="logo" class='w-36' />
            </a>

            <div id="collapseMenu"
                class='max-lg:hidden lg:!block max-lg:w-full max-lg:fixed max-lg:before:fixed max-lg:before:bg-black max-lg:before:opacity-50 max-lg:before:inset-0 max-lg:before:z-50'>
                <button id="toggleClose" class='lg:hidden fixed top-2 right-4 z-[100] rounded-full bg-white p-3'>
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 fill-black" viewBox="0 0 320.591 320.591">
                        <path
                            d="M30.391 318.583a30.37 30.37 0 0 1-21.56-7.288c-11.774-11.844-11.774-30.973 0-42.817L266.643 10.665c12.246-11.459 31.462-10.822 42.921 1.424 10.362 11.074 10.966 28.095 1.414 39.875L51.647 311.295a30.366 30.366 0 0 1-21.256 7.288z"
                            data-original="#000000"></path>
                        <path
                            d="M287.9 318.583a30.37 30.37 0 0 1-21.257-8.806L8.83 51.963C-2.078 39.225-.595 20.055 12.143 9.146c11.369-9.736 28.136-9.736 39.504 0l259.331 257.813c12.243 11.462 12.876 30.679 1.414 42.922-.456.487-.927.958-1.414 1.414a30.368 30.368 0 0 1-23.078 7.288z"
                            data-original="#000000"></path>
                    </svg>
                </button>

                <ul
                    class='lg:flex lg:ml-14 lg:gap-x-5 max-lg:space-y-3 max-lg:fixed max-lg:bg-white max-lg:w-1/2 max-lg:min-w-[300px] max-lg:top-0 max-lg:left-0 max-lg:p-6 max-lg:h-full max-lg:shadow-md max-lg:overflow-auto z-50'>
                    <li class='mb-6 hidden max-lg:block'>
                        <a href="javascript:void(0)"><img src="https://readymadeui.com/readymadeui.svg" alt="logo"
                                class='w-36' />
                        </a>
                    </li>
                    <li class='max-lg:border-b max-lg:py-3 px-3'>
                        <a href='javascript:void(0)'
                            class='lg:hover:text-[#007bff] text-[#007bff] block font-semibold text-[15px]'>Home</a>
                    </li>
                    <li class='max-lg:border-b max-lg:py-3 px-3'><a href='javascript:void(0)'
                            class='lg:hover:text-[#007bff] text-gray-500 block font-semibold text-[15px]'>Team</a>
                    </li>
                    <li class='max-lg:border-b max-lg:py-3 px-3'><a href='javascript:void(0)'
                            class='lg:hover:text-[#007bff] text-gray-500 block font-semibold text-[15px]'>Feature</a>
                    </li>
                    <li class='max-lg:border-b max-lg:py-3 px-3'><a href='javascript:void(0)'
                            class='lg:hover:text-[#007bff] text-gray-500 block font-semibold text-[15px]'>Blog</a>
                    </li>
                    <li class='max-lg:border-b max-lg:py-3 px-3'><a href='javascript:void(0)'
                            class='lg:hover:text-[#007bff] text-gray-500 block font-semibold text-[15px]'>About</a>
                    </li>
                </ul>
            </div>

            <button id="toggleOpen" class='lg:hidden ml-auto'>
                <svg class="w-7 h-7" fill="#000" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>

            <div class='flex lg:ml-auto max-lg:w-full'>
                <div
                    class='flex xl:w-80 max-xl:w-full bg-gray-100 px-6 py-3 rounded outline outline-transparent focus-within:outline-[#007bff] focus-within:bg-transparent'>
                    <input type='text' placeholder='Search something...'
                        class='w-full text-sm bg-transparent rounded outline-none pr-2' />
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192.904 192.904" width="16px"
                        class="cursor-pointer fill-gray-400">
                        <path
                            d="m190.707 180.101-47.078-47.077c11.702-14.072 18.752-32.142 18.752-51.831C162.381 36.423 125.959 0 81.191 0 36.422 0 0 36.423 0 81.193c0 44.767 36.422 81.187 81.191 81.187 19.688 0 37.759-7.049 51.831-18.751l47.079 47.078a7.474 7.474 0 0 0 5.303 2.197 7.498 7.498 0 0 0 5.303-12.803zM15 81.193C15 44.694 44.693 15 81.191 15c36.497 0 66.189 29.694 66.189 66.193 0 36.496-29.692 66.187-66.189 66.187C44.693 147.38 15 117.689 15 81.193z">
                        </path>
                    </svg>
                </div>
            </div>
        </div>
    </header>
    <!-- Page Content -->
    <main>
        {{ $slot }}
    </main>
    <footer class="font-sans tracking-wide bg-[#213343] py-10 px-10">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
            <div>
                <h4 class="text-[#FFA726] font-semibold text-lg mb-6">Quick Links</h4>
                <ul class="space-y-5">
                    <li>
                        <a href="javascript:void(0)"
                            class="hover:text-[#FFA726] text-gray-300 text-[15px] transition-all">Our Story</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)"
                            class="hover:text-[#FFA726] text-gray-300 text-[15px] transition-all">Newsroom</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)"
                            class="hover:text-[#FFA726] text-gray-300 text-[15px] transition-all">Careers</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)"
                            class="hover:text-[#FFA726] text-gray-300 text-[15px] transition-all">Blog</a>
                    </li>
                </ul>
            </div>

            <div>
                <h4 class="text-[#FFA726] font-semibold text-lg mb-6">Services</h4>
                <ul class="space-y-5">
                    <li>
                        <a href="javascript:void(0)"
                            class="hover:text-[#FFA726] text-gray-300 text-[15px] transition-all">Web Development</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)"
                            class="hover:text-[#FFA726] text-gray-300 text-[15px] transition-all">Testing Automation</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)"
                            class="hover:text-[#FFA726] text-gray-300 text-[15px] transition-all">AWS Development
                            Services</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)"
                            class="hover:text-[#FFA726] text-gray-300 text-[15px] transition-all">Mobile App
                            Development</a>
                    </li>
                </ul>
            </div>

            <div>
                <h4 class="text-[#FFA726] font-semibold text-lg mb-6">Platforms</h4>
                <ul class="space-y-5">
                    <li>
                        <a href="javascript:void(0)"
                            class="hover:text-[#FFA726] text-gray-300 text-[15px] transition-all">Hubspot</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)"
                            class="hover:text-[#FFA726] text-gray-300 text-[15px] transition-all">Marketo Integration
                            Services</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)"
                            class="hover:text-[#FFA726] text-gray-300 text-[15px] transition-all">Marketing Glossary</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)"
                            class="hover:text-[#FFA726] text-gray-300 text-[15px] transition-all">UIPath</a>
                    </li>
                </ul>
            </div>

            <div>
                <h4 class="text-[#FFA726] font-semibold text-lg mb-6">Company</h4>
                <ul class="space-y-5">
                    <li>
                        <a href="javascript:void(0)"
                            class="hover:text-[#FFA726] text-gray-300 text-[15px] transition-all">Accessibility</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)"
                            class="hover:text-[#FFA726] text-gray-300 text-[15px] transition-all">About</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)"
                            class="hover:text-[#FFA726] text-gray-300 text-[15px] transition-all">Contact</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)"
                            class="hover:text-[#FFA726] text-gray-300 text-[15px] transition-all">Learn more</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="border-t text-center border-[#6b5f5f] pt-8 mt-8">
            <p class="text-gray-300 text-[15px]">
                © ReadymadeUI. All rights reserved.
            </p>
        </div>
    </footer>
</body>

</html>