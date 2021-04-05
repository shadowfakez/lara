@extends('layouts.app')

@section('breadcrumbs')
    <nav class="bg-grey-light rounded font-sans w-full">
        <div class="py-1.5">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-2 bg-white border-b border-gray-200">
                        <ol class="list-reset flex text-grey-dark">
                            <li><a href="{{ route('home') }}">Home</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </nav>
@endsection


@section('content')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>
            </div>
        </div>
    </div>
@endsection














{{--<x-app-layout>
    <x-slot name="header">
        --}}{{--<h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>--}}{{--
        <nav class="bg-grey-light rounded font-sans w-full">
            <ol class="list-reset flex text-grey-dark">
                <li><a href="#" class="text-blue font-bold">Home</a></li>
                <li><span class="mx-2">/</span></li>
                <li><a href="#" class="text-blue font-bold">Library</a></li>
                <li><span class="mx-2">/</span></li>
                <li>Data</li>
            </ol>
        </nav>

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>
            </div>
        </div>
    </div>
</x-app-layout>--}}
