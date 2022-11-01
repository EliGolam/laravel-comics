@php
    $links = config('data.nav-links');
@endphp


<header>
    <h1 class="visually-hidden">DC Comics</h1>

    {{-- @dd($links) --}}
    <nav class="top-nav" role="navigation" aria-label="Webpages navigation">
        <h2 class="visually-hidden">Webpages Navigation</h2>

        <button id="top-nav-open-menu" class="btn nav-toggle"><i class="fa-solid fa-bars"></i></button>

        <ul class="flex">
            @foreach ($links as $pageName => $link)

                <li><a href="{{ $link }}"
                    class="{{ request()->is($pageName) ? 'active' : '' }}"
                    >
                        {{ $pageName }}
                </a></li>
            @endforeach
        </ul>

        {{-- @dd($links) --}}
    </nav>
</header>
