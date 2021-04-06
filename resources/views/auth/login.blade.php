@extends('layouts.app')

@section('title')
    Login
@endsection

@section('breadcrumbs')
    {{ Breadcrumbs::render('login') }}
{{--    <nav class="bg-grey-light rounded font-sans w-full">
        <div class="py-1.5">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-2 bg-white border-b border-gray-200">
                        <ol class="list-reset flex text-grey-dark">
                            <li><a href="{{ route('home') }}" class="text-blue font-bold">Home</a></li>
                            <li><span class="mx-2">/</span></li>
                            <li>Login</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </nav>--}}
@endsection

@section('content')
    <div class="h-2 bg-primary"></div>
    <div class="container mx-auto p-10">
        <div class="mx-auto max-w-sm">
            <div class="bg-white rounded-lg shadow">
                <div class="border-b py-8 font-bold text-black text-center text-xl tracking-widest uppercase">
                    Welcome back!
                </div>

                @if($errors->any())
                    <div role="alert">
                        <div class="bg-red-500 text-white font-bold rounded-t px-4 py-2">
                            Ошибка!
                        </div>
                        <ul class="border border-t-0 border-red-400 rounded-b bg-red-100 px-4 py-3 text-red-700">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if(session()->has('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif

                <form class="bg-grey-lightest rounded-lg px-10 py-10" method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="mb-3">
                        <input class="rounded-lg w-full p-3" name="email" value="{{ old('email') }}"
                               placeholder="E-Mail"
                               id="email" type="email" required autofocus>
                    </div>
                    <div class="mb-6">
                        <input class="rounded-lg w-full p-3" name="password" type="password" placeholder="Password"
                               id="password" required autocomplete="current-password">
                    </div>
                    <div class="block mt-4">
                        <label for="remember_me" class="inline-flex items-center">
                            <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600
                            shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                            <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                        </label>
                    </div>
                    <div class="flex">
                        <button class="rounded-lg bg-blue-500 w-full hover:bg-blue-700 text-white font-bold p-3 mt-2 focus:outline-none focus:ring-2 focus:ring-blue-600 focus:ring-opacity-50">
                            Login
                        </button>
                    </div>
                </form>

                <div class="border-t px-10 py-6">
                    <div class="flex justify-between">
                        <a href="{{ route('register') }}" class="font-bold text-primary hover:text-primary-dark no-underline">Don't have an account?</a>
                        <a href="{{ route('password.request') }}" class="text-grey-darkest hover:text-black no-underline">Forgot Password?</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
{{--<x-guest-layout>
        <x-auth-card>

            --}}{{--<x-slot name="logo">
                <a href="/">
                    <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                </a>
            </x-slot>--}}{{--

            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4" :errors="$errors" />

            <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
                <div>
                    <x-label for="email" :value="__('Email')" />

                    <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <x-label for="password" :value="__('Password')" />

                    <x-input id="password" class="block mt-1 w-full"
                             type="password"
                             name="password"
                             required autocomplete="current-password" />
                </div>

                <!-- Remember Me -->
                <div class="block mt-4">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                        <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                    </label>
                </div>

                <div class="flex items-center justify-end mt-4">
                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif

                    <x-button class="ml-3">
                        {{ __('Log in') }}
                    </x-button>
                </div>
            </form>
        </x-auth-card>
    </x-guest-layout>--}}

