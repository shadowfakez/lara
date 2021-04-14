<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100 flex flex-col">
            <nav class="bg-blue-200 border-b border-gray-100">
                <!-- Primary Navigation Menu -->
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="flex justify-between h-16">
                        <div class="flex">
                            <!-- Navigation Links -->
                            <div class="p-3">
                                <div class="group inline-block relative">
                                    <div class="py-3 space-x-8 sm:-my-px sm:ml-10 sm:flex">
                                        <a class="text-sm text-gray-700 px-3" href="{{ route('home') }}">Home</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Settings Dropdown -->
                        @if(Auth::guest())
                            <div class="p-3">
                                <div class="group inline-block relative">
                                    <ul class="w-full">
        <a class="text-sm text-gray-700 px-3" href="{{ route('login') }}">Login</a>
        <a class="text-sm text-gray-700 px-3" href="{{ route('register') }}">Register</a>
                                    </ul>
                                </div>
                            </div>
@else
                            <div class="p-3">
                                <div class="group inline-block relative">
                                    <ul class="w-full">
                                        <li class="dropdown inline text-gray-700 hover:text-gray-700
                        cursor-pointer tracking-wide">
                                            <button class="py-3 px-4 rounded flex items-center text-sm font-medium
                    text-gray-500 hover:text-gray-700 hover:border-gray-300 outline-none focus:outline-none
                    focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                                                <span class="pr-1 font-semibold flex-1">{{ Auth::user()->name }}</span>
                                                <span>
                                                    <svg
                                                            class="fill-current h-4 w-4 transform group-hover:-rotate-180
                                                    transition duration-150 ease-in-out"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            viewBox="0 0 20 20">
                                                    <path
                                                            d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"
                                                    />
                                                    </svg>
                                                </span>
                                            </button>
                                            <ul class="bg-white border rounded-sm transform scale-0
                                            group-hover:scale-100 absolute transition duration-150 ease-in-out
                                            origin-top min-w-32">
                                                <li class="text-sm rounded-sm px-3 py-1 hover:bg-gray-100">
                                                    <a href="{{ route('admin.home') }}">Admin</a>
                                                </li>
                                                <li class="text-sm rounded-sm px-3 py-1 hover:bg-gray-100">
                                                    <a href="{{ route('cabinet') }}">Cabinet</a>
                                                </li>
                                                <li class="text-sm rounded-sm px-3 py-1 hover:bg-gray-100">
                                                    <form  method="POST" action="{{ route('logout') }}">
                                                        @csrf
                                                        <button class="outline-none focus:outline-none
                    focus:text-gray-700 focus:border-gray-300" type="submit">Logout</button>
                                                    </form>
                                                </li>
                                            </ul>
                                    </ul>
                                </div>
                            </div>
                    </div>

        @endif

            </nav>

            <!-- Page Content -->
            <main class="flex-grow">
                @yield('breadcrumbs')

                @include('layouts.partials.flash')

                @yield('content')
            </main>

            <footer class="footer bg-blue-200 relative pt-1 border-b-2 border-blue-700">
                <div class="container mx-auto px-6">
                    <div class="border-t-2 border-blue-700 flex flex-col items-center">
                        <div class="sm:w-2/3 text-center py-6">
                            <p class="text-sm text-blue-700 font-bold mb-2">
                                © 2021 by shadowfake
                            </p>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </body>
</html>
