@extends('layouts.app')

@section('title')
    Sign Up
@endsection

@section('breadcrumbs')
    {{ Breadcrumbs::render('register') }}
{{--    <nav class="bg-grey-light rounded font-sans w-full">
        <div class="py-1.5">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-2 bg-white border-b border-gray-200">
                        <ol class="list-reset flex text-grey-dark">
                            <li><a href="{{ route('home') }}" class="text-blue font-bold">Home</a></li>
                            <li><span class="mx-2">/</span></li>
                            <li>Sign Up</li>
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
                    Sign Up
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

                <form class="bg-grey-lightest rounded-lg px-10 py-10" method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="mb-3">
                        <input id="name" class="rounded-lg w-full p-3" name="name" value="{{ old('name') }}" placeholder="Name" type="text" required autofocus>
                    </div>
                    <div class="mb-3">
                        <input class="rounded-lg w-full p-3" name="email" value="{{ old('email') }}" placeholder="E-Mail" id="email" type="email" required autofocus>
                    </div>
                    <div class="mb-3">
                        <input class="rounded-lg w-full p-3" name="password" type="password" placeholder="Password" id="password" required>
                    </div>
                    <div class="mb-3">
                        <input id="password_confirmation" class="rounded-lg w-full p-3" name="password_confirmation" type="password" placeholder="Confirm password" required>
                    </div>

                    <div class="flex">
                        <button class="rounded-lg bg-blue-500 w-full hover:bg-blue-700 text-white font-bold p-3 mt-2 focus:outline-none focus:ring-2 focus:ring-blue-600 focus:ring-opacity-50">
                            Sign Up!
                        </button>
                    </div>
                </form>

                <div class="border-t px-10 py-6">
                    <div class="flex justify-center">
                        <a href="{{ route('login') }}" class="font-bold text-primary hover:text-primary-dark
                        no-underline w-full flex justify-center">{{ __('Already registered?') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
{{--
<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
--}}
