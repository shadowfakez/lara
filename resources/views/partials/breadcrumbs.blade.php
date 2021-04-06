@unless ($breadcrumbs->isEmpty())
    <nav class="bg-grey-light rounded font-sans w-full">
    <div class="py-1.5">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-2 bg-white border-b border-gray-200">
                    <ol class="list-reset flex text-grey-dark">
                        @foreach ($breadcrumbs as $breadcrumb)

                            @if (!is_null($breadcrumb->url) && !$loop->last)
                                <li class="text-blue font-bold"><a href="{{ $breadcrumb->url }}">{{ $breadcrumb->title }}</a></li>
                                <li><span class="mx-2">/</span></li>
                            @else
                                <li class="active">{{ $breadcrumb->title }}</li>
                            @endif
                        @endforeach
                    </ol>
                </div>
            </div>
        </div>
    </div>
    </nav>
@endunless