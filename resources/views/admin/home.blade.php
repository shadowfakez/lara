@extends('layouts.app')

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
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection