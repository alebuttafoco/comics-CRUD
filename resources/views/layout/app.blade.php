@include('partials.head')



<body>
    {{-- site header --}}
    <header>
        {{-- site nav --}}
        <nav class="container u-center">
            <a href=" {{route('comics.index')}} " class="{{Route::currentRouteName() == 'comics.index' ? 'active_link' : ''}}"> Comics </a>
            <a href=" {{route('home')}} " class=" {{Route::currentRouteName() == 'home' ? 'active_link' : ''}} "> Admin </a>
            <a href=" {{route('comics.create')}} " class="{{Route::currentRouteName() == 'comics.create' ? 'active_link' : ''}}"> Create </a>
        </nav>
    </header>

    {{-- site main --}}
    <main>
        @yield('content')
    </main>

</body>
</html>