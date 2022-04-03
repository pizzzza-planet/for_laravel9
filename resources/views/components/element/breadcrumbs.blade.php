@props([
    'breadcrumbs' => [
        [
            'href' => '/',
            'label' => 'TOP'
        ]
    ]
])
<nav class="text-black mx-4 my-3" aria-label="Breadcrumb">
    <ol class="list-none p-0 inline-flex">
        @foreach ($breadcrumbs as $breadcrumb)
            @if ($loop->last)
            <li>
                <a href="{{ $breadcrumb['href'] }}" class="text-gray-500" aria-current="page">{{ $breadcrumb['label'] }}</a>
            </li>
            @else
            <li class="flex items-center">
                <a href="{{ $breadcrumb['href'] }}" class="hover:underline">{{ $breadcrumb['label'] }}</a>
            </li>
            @endif
        @endforeach
    </ol>
</nav>
