@include('partials.head')



<body>
    {{-- site header --}}
    <header>
        {{-- site nav --}}
        <nav class="container u-center">
            <a href=" {{route('home')}} " class=" {{Route::currentRouteName() == 'home' ? 'active_link' : ''}} "> Home </a>
            <a href=" {{route('comics.index')}} " class="{{Route::currentRouteName() == 'comics.index' ? 'active_link' : ''}}"> Comics </a>
            <a href=" {{route('comics.create')}} " class="{{Route::currentRouteName() == 'comics.create' ? 'active_link' : ''}}"> Create </a>
        </nav>
    </header>

    {{-- site main --}}
    <main>
        @yield('content')
    </main>

    {{-- VUE --}}
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
    {{-- JS --}}
    <script src=" {{asset('js/app.js')}} "></script>

</body>
</html>