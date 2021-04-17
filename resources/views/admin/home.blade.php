@extends('layouts.app')

@section('title')
    Admin
@endsection

@section('breadcrumbs')
    {{ Breadcrumbs::render('admin') }}
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
    <div class="py-4">
        <div class="max-w-7xl mx-auto">
            <div class="flex flex-col">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                            <div class="bg-white">
                                <nav class="flex flex-col sm:flex-row">
                    <button>
                        <a href="{{ route('admin.home') }}" class="text-gray-600 py-4 px-6 block hover:text-blue-500 focus:outline-none text-blue-500 border-b-2 font-medium border-blue-500">
                            Dashboard</a>
                    </button>
                    <button>
                        <a href="{{ route('users.index') }}" class="text-gray-600 py-4 px-6 block hover:text-blue-500 focus:outline-none">
                            Users</a>
                    </button>
                    <button>
                        <a href="{{ route('users.create') }}" class="text-gray-600 py-4 px-6 block
                        hover:text-blue-500
                        focus:outline-none">
                            Create User</a>
                    </button>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection