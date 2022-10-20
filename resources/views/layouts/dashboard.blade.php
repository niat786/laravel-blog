<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="icon" href="/favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>V-Dashboard</title>
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body>
    <div id="app" x-data="{sidebar:false}">
        <div class="flex h-screen bg-gray-200 font-roboto">
            <div class="flex">
                <div class="fixed inset-0 z-20 hidden transition-opacity bg-black opacity-50 lg:hidden"></div>
                <div x-bind:class="sidebar ? '': '-translate-x-full' "
                    class="fixed inset-y-0 left-0 z-30 w-64 overflow-y-auto transition duration-300 ease-in transform bg-gray-900 lg:translate-x-0 lg:static lg:inset-0">
                    <div class="flex items-center justify-center mt-8">
                        <div class="flex items-center"><svg class="w-12 h-12" viewBox="0 0 512 512" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M364.61 390.213C304.625 450.196 207.37 450.196 147.386 390.213C117.394 360.22 102.398 320.911 102.398 281.6C102.398 242.291 117.394 202.981 147.386 172.989C147.386 230.4 153.6 281.6 230.4 307.2C230.4 256 256 102.4 294.4 76.7999C320 128 334.618 142.997 364.608 172.989C394.601 202.981 409.597 242.291 409.597 281.6C409.597 320.911 394.601 360.22 364.61 390.213Z"
                                    fill="#4C51BF" stroke="#4C51BF" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                                <path
                                    d="M201.694 387.105C231.686 417.098 280.312 417.098 310.305 387.105C325.301 372.109 332.8 352.456 332.8 332.8C332.8 313.144 325.301 293.491 310.305 278.495C295.309 263.498 288 256 275.2 230.4C256 243.2 243.201 320 243.201 345.6C201.694 345.6 179.2 332.8 179.2 332.8C179.2 352.456 186.698 372.109 201.694 387.105Z"
                                    fill="white"></path>
                            </svg><span class="mx-2 text-2xl font-semibold text-white">V-Dashboard</span></div>
                    </div>
                    <nav class="mt-10">
                        <a href="/dashboard"
                            class="flex items-center px-6 py-2 mt-4 text-gray-500 duration-200 border-l-4 border-gray-900 hover:bg-gray-600 hover:bg-opacity-25 hover:text-gray-100"><svg
                                class="w-5 h-5" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M2 10C2 5.58172 5.58172 2 10 2V10H18C18 14.4183 14.4183 18 10 18C5.58172 18 2 14.4183 2 10Z"
                                    fill="currentColor"></path>
                                <path d="M12 2.25195C14.8113 2.97552 17.0245 5.18877 17.748 8.00004H12V2.25195Z"
                                    fill="currentColor"></path>
                            </svg><span class="mx-4">Dashboard</span></a><a href="/ui-elements"
                            class="flex items-center px-6 py-2 mt-4 text-gray-500 duration-200 border-l-4 border-gray-900 hover:bg-gray-600 hover:bg-opacity-25 hover:text-gray-100"><svg
                                class="w-5 h-5" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M5 3C3.89543 3 3 3.89543 3 5V7C3 8.10457 3.89543 9 5 9H7C8.10457 9 9 8.10457 9 7V5C9 3.89543 8.10457 3 7 3H5Z"
                                    fill="currentColor"></path>
                                <path
                                    d="M5 11C3.89543 11 3 11.8954 3 13V15C3 16.1046 3.89543 17 5 17H7C8.10457 17 9 16.1046 9 15V13C9 11.8954 8.10457 11 7 11H5Z"
                                    fill="currentColor"></path>
                                <path
                                    d="M11 5C11 3.89543 11.8954 3 13 3H15C16.1046 3 17 3.89543 17 5V7C17 8.10457 16.1046 9 15 9H13C11.8954 9 11 8.10457 11 7V5Z"
                                    fill="currentColor"></path>
                                <path
                                    d="M11 13C11 11.8954 11.8954 11 13 11H15C16.1046 11 17 11.8954 17 13V15C17 16.1046 16.1046 17 15 17H13C11.8954 17 11 16.1046 11 15V13Z"
                                    fill="currentColor"></path>
                            </svg><span class="mx-4">UI Elements</span></a><a href="/tables"
                            class="flex items-center px-6 py-2 mt-4 text-gray-500 duration-200 border-l-4 border-gray-900 hover:bg-gray-600 hover:bg-opacity-25 hover:text-gray-100"><svg
                                class="w-5 h-5" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M7 3C6.44772 3 6 3.44772 6 4C6 4.55228 6.44772 5 7 5H13C13.5523 5 14 4.55228 14 4C14 3.44772 13.5523 3 13 3H7Z"
                                    fill="currentColor"></path>
                                <path
                                    d="M4 7C4 6.44772 4.44772 6 5 6H15C15.5523 6 16 6.44772 16 7C16 7.55228 15.5523 8 15 8H5C4.44772 8 4 7.55228 4 7Z"
                                    fill="currentColor"></path>
                                <path
                                    d="M2 11C2 9.89543 2.89543 9 4 9H16C17.1046 9 18 9.89543 18 11V15C18 16.1046 17.1046 17 16 17H4C2.89543 17 2 16.1046 2 15V11Z"
                                    fill="currentColor"></path>
                            </svg><span class="mx-4">Tables</span></a><a href="/forms"
                            class="flex items-center px-6 py-2 mt-4 text-gray-500 duration-200 border-l-4 border-gray-900 hover:bg-gray-600 hover:bg-opacity-25 hover:text-gray-100"><svg
                                class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z">
                                </path>
                                <path fill-rule="evenodd"
                                    d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"
                                    clip-rule="evenodd"></path>
                            </svg><span class="mx-4">Forms</span></a><a href="/cards"
                            class="flex items-center px-6 py-2 mt-4 text-gray-500 duration-200 border-l-4 border-gray-900 hover:bg-gray-600 hover:bg-opacity-25 hover:text-gray-100"><svg
                                xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path d="M4 4a2 2 0 00-2 2v1h16V6a2 2 0 00-2-2H4z"></path>
                                <path fill-rule="evenodd"
                                    d="M18 9H2v5a2 2 0 002 2h12a2 2 0 002-2V9zM4 13a1 1 0 011-1h1a1 1 0 110 2H5a1 1 0 01-1-1zm5-1a1 1 0 100 2h1a1 1 0 100-2H9z"
                                    clip-rule="evenodd"></path>
                            </svg><span class="mx-4">Cards</span></a><a href="/modal"
                            class="flex items-center px-6 py-2 mt-4 text-gray-500 duration-200 border-l-4 border-gray-900 hover:bg-gray-600 hover:bg-opacity-25 hover:text-gray-100"><svg
                                xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path d="M3 12v3c0 1.657 3.134 3 7 3s7-1.343 7-3v-3c0 1.657-3.134 3-7 3s-7-1.343-7-3z">
                                </path>
                                <path d="M3 7v3c0 1.657 3.134 3 7 3s7-1.343 7-3V7c0 1.657-3.134 3-7 3S3 8.657 3 7z">
                                </path>
                                <path d="M17 5c0 1.657-3.134 3-7 3S3 6.657 3 5s3.134-3 7-3 7 1.343 7 3z"></path>
                            </svg><span class="mx-4">Modal</span></a><a href="/blank"
                            class="flex items-center px-6 py-2 mt-4 text-gray-100 duration-200 bg-gray-600 bg-opacity-25 border-l-4 border-gray-100 router-link-active router-link-exact-active"
                            aria-current="page"><svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zM3 10a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6zM14 9a1 1 0 00-1 1v6a1 1 0 001 1h2a1 1 0 001-1v-6a1 1 0 00-1-1h-2z">
                                </path>
                            </svg><span class="mx-4">Blank</span>
                        </a>
                    </nav>
                </div>
            </div>
            <div class="flex flex-col flex-1 overflow-hidden">
                <header class="flex items-center justify-between px-6 py-4 bg-white border-b-4 border-indigo-600">
                    <div class="flex items-center">
                        <button class="text-gray-500 focus:outline-none lg:hidden">
                            <svg x-on:click="sidebar=!sidebar" x-on:click.outside="sidebar=false" class="w-6 h-6"
                                viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4 6H20M4 12H20M4 18H11" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg></button>
                        <div class="relative mx-4 lg:mx-0"><span
                                class="absolute inset-y-0 left-0 flex items-center pl-3"><svg
                                    class="w-5 h-5 text-gray-500" viewBox="0 0 24 24" fill="none">
                                    <path
                                        d="M21 21L15 15M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                    </path>
                                </svg></span><input
                                class="w-32 pl-10 pr-4 text-indigo-600 border-gray-200 rounded-md sm:w-64 focus:border-indigo-600 focus:ring focus:ring-opacity-40 focus:ring-indigo-500"
                                type="text" placeholder="Search"></div>
                    </div>
                    <div class="flex items-center"><button class="flex mx-4 text-gray-600 focus:outline-none"><svg
                                class="w-6 h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M15 17H20L18.5951 15.5951C18.2141 15.2141 18 14.6973 18 14.1585V11C18 8.38757 16.3304 6.16509 14 5.34142V5C14 3.89543 13.1046 3 12 3C10.8954 3 10 3.89543 10 5V5.34142C7.66962 6.16509 6 8.38757 6 11V14.1585C6 14.6973 5.78595 15.2141 5.40493 15.5951L4 17H9M15 17V18C15 19.6569 13.6569 21 12 21C10.3431 21 9 19.6569 9 18V17M15 17H9"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                </path>
                            </svg></button>
                        <div class="relative"><button
                                class="relative z-10 block w-8 h-8 overflow-hidden rounded-full shadow focus:outline-none"><img
                                    class="object-cover w-full h-full"
                                    src="https://images.unsplash.com/photo-1528892952291-009c663ce843?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=296&amp;q=80"
                                    alt="Your avatar"></button>
                            <div class="fixed inset-0 z-10 w-full h-full" style="display: none;"></div>
                            <div class="absolute right-0 z-20 w-48 py-2 mt-2 bg-white rounded-md shadow-xl"
                                style="display: none;"><a href="#"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-indigo-600 hover:text-white">Profile</a><a
                                    href="#"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-indigo-600 hover:text-white">Products</a><a
                                    href="/"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-indigo-600 hover:text-white">Log
                                    out</a></div>
                        </div>
                    </div>
                </header>
                <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
                    <div class="container px-6 py-8 mx-auto">
                        @yield('content')
                    </div>
                </main>
            </div>
        </div>
    </div>
</body>

</html>