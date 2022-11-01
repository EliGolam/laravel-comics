@php
    $links = config('data.nav-links');
@endphp

<header>
    <h1>DC Comics</h1>



    {{-- @dd($links) --}}
    <nav class="top-nav" role="navigation" aria-label="Webpages navigation">
        <ul>
            @foreach ($links as $link)
                <li><a href="{{ $link['link'] }}">{{ $link['name'] }}</a></li>
            @endforeach
        </ul>
    </nav>
</header>
