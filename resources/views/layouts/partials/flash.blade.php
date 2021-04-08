@if (session('status'))
    {{--<div x-data="{ show: true }" x-show="show" class="w-11/12 md:w-3/5 bg-white my-2 rounded-r-md px-6 border-l-4 -ml-4 border-gray-100 bg-green-500">
        <div class="flex items-center py-4">
            <i class="fas fa-check border-2 border-gray-200 px-2 rounded-full fill-current text-4xl font-light text-gray-200"></i>
            <div class="ml-5">
                <h1 class="text-lg font-bold text-gray-200">Well done!</h1>
                <p class="text-gray-300 my-0">You successfully read this important alert message.</p>
            </div>
            <div>
                <button type="button"  @click="show = false"  class=" text-yellow-100">
                    <span class="text-2xl">&times;</span>
                </button>
            </div>
        </div>
    </div>--}}
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif

@if (session('success'))
    <div role="alert" class="max-w-4xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-green-500 text-white font-bold rounded-t px-4 py-2">
            Success
        </div>
        <div class="border border-t-0 border-green-400 rounded-b bg-green-100 px-4 py-2
        text-green-700">
            {{ session('success') }}
        </div>
    </div>
@endif

@if (session('error'))
    <div role="alert" class="max-w-4xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-red-500 text-white font-bold rounded-t px-4 py-2">
            Error
        </div>
        <div class="border border-t-0 border-red-400 rounded-b bg-red-100 px-4 py-2
        text-red-700">
        {{ session('error') }}
        </div>
    </div>
@endif

@if (session('info'))
    <div role="alert" class="max-w-4xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-blue-500 text-white font-bold rounded-t px-4 py-2">
            Info
        </div>
        <div class="border border-t-0 border-blue-400 rounded-b bg-blue-100 px-4 py-2
        text-blue-700">
        {{ session('info') }}
        </div>
    </div>
@endif