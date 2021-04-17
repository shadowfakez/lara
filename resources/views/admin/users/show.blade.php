@extends('layouts.app')

@section('title')
{{ $user->name }}
@endsection

@section('breadcrumbs')
    {{ Breadcrumbs::render('user_show', $user) }}
@endsection

@section('content')
    @include('admin.users._nav')

    <div class="py-4">
        <div class="max-w-7xl mx-auto">
            <div class="flex flex-col">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="flex space-x-4 text-center ...">
                            <div class="flex-1">
                                <button>
                                    <a href="{{ route('users.edit', $user) }}" class="bg-blue-400 hover:bg-blue-800 text-gray-800 hover:text-gray-200
                                font-semibold py-2 px-10 border border-gray-400 rounded shadow">Edit</a>
                                </button>
                            </div>
                            <div class="flex-1 border-red-700">
                                    <form  method="POST" action="{{ route('users.update', $user) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button class="bg-red-400 hover:bg-red-600 text-gray-800 hover:text-gray-200 font-semibold py-2 px-8 border border-gray-400 rounded shadow" type="submit">Delete</button>
                                    </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="py-4">
        <div class="max-w-7xl mx-auto">
            <div class="flex flex-col">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                            <table class="min-w-full divide-y divide-gray-200">
                                <tbody class="bg-white divide-y divide-gray-200">
                                <tr>
                                    <th>ID</th>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="ml-4">
                                                <div class="font-medium text-gray-900">
                                                    {{ $user->id }}
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Name</th>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="ml-4">
                                                <div class="font-medium text-gray-900">
                                                    {{ $user->name }}
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="ml-4">
                                                <div class="font-medium text-gray-900">
                                                    {{ $user->email }}
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Status</th>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="ml-4">
                                                <div class="font-medium text-gray-900">
                                                    @if($user->status === \App\Models\User::STATUS_WAIT)
                                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold
                                            rounded-full bg-yellow-100 text-green-800">Waiting</span>
                                                    @endif
                                                    @if($user->status === \App\Models\User::STATUS_ACTIVE)
                                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold
                                        rounded-full bg-green-100 text-green-800">Active</span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection