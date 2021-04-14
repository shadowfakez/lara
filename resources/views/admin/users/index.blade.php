@extends('layouts.app')

@section('content')
    @include('admin.users._nav')
    <div class="py-4">
        <div class="max-w-7xl mx-auto">
            <div class="flex flex-col">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-left font-medium text-gray-500 uppercase tracking-wider">
                                        ID
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left font-medium text-gray-500 uppercase tracking-wider">
                                        Name
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left font-medium text-gray-500 uppercase tracking-wider">
                                        Email
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left font-medium text-gray-500 uppercase tracking-wider">
                                        Status
                                    </th>
                                    {{--<th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    </th>--}}
                                </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                @foreach($users as $user)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="ml-4">
                                                <div class="font-medium text-gray-900">
                                                    {{ $user->id }}
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="font-medium text-gray-900">
                                        <a class="hover:shadow-2xl sm:hover:text-blue-500" href="{{ route('users.show',
                                        $user)
                                        }}">
                                            {{ $user->name }}</a>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="font-medium text-gray-900">
                          {{ $user->email }}
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        @if($user->status === \App\Models\User::STATUS_WAIT)
                                            <span class="px-2 inline-flex text-xs leading-5 font-semibold
                                            rounded-full bg-yellow-100 text-green-800">Waiting</span>
                                        @endif
                                        @if($user->status === \App\Models\User::STATUS_ACTIVE)
                                            <span class="px-2 inline-flex text-xs leading-5 font-semibold
                                        rounded-full bg-green-100 text-green-800">Active</span>
                                        @endif

                                    </td>
                                    {{--<td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                        <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                    </td>--}}
                                </tr>
                                @endforeach
                                <!-- More items... -->
                                </tbody>
                            </table>
                            {{ $users->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
