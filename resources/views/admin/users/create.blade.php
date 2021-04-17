@extends('layouts.app')

@section('title')
    Create user
@endsection

@section('breadcrumbs')
    {{ Breadcrumbs::render('user_create') }}
    {{--  <nav class="bg-grey-light rounded font-sans w-full">
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
      </nav>--}}
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
                                <h2 class="text-gray-800 text-4xl">Create User</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <form method="POST" action="{{ route('users.store') }}">
        @csrf
        <div class="py-4">
            <div class="max-w-7xl mx-auto">
                <div class="flex flex-col">
                    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                <table class="min-w-full divide-y divide-gray-200">
                                    <tbody class="bg-white divide-y divide-gray-200">
                                    <tr>
                                        <th class="bg-gray-50"><label for="name">Name</label></th>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="mx-4 font-medium text-gray-900">
                                                <div class="flex items-center">
                                                    <input type="text" id="name" class="flex-grow rounded" name='name' value="{{ old('name') }}" required>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="bg-gray-50"><label for="email">E-Mail Address</label></th>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="mx-4 font-medium text-gray-900">
                                                <div class="flex items-center">
                                                    <input type="email" id="email" class="flex-grow rounded" name='email' value="{{ old('email') }}" required>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="bg-gray-50"><label for="password">Password</label></th>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="mx-4 font-medium text-gray-900">
                                                <div class="flex items-center">
                                                    <input type="password" id="password" class="flex-grow rounded" name='password' value="{{ old('password') }}" required>
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
        <div class="py-4">
            <div class="max-w-7xl mx-auto">
                <div class="flex flex-col">
                    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                            <div class="flex space-x-4 text-center ...">
                                <div class="flex-1">
                                    <button class="bg-green-400 hover:bg-green-600 text-gray-800 hover:text-gray-200
                                    font-semibold py-2 px-10 border border-gray-400 rounded shadow" type="submit">
                                        Save
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection