@include('partials.head')



<body>
    {{-- site header --}}
    <header>
        {{-- site nav --}}
        <nav>
            <a href=" {{route('home')}} "> Home </a>
            <a href=" {{route('comics.index')}} "> All Comics </a>
        </nav>
    </header>

    {{-- site main --}}
    <main>
        @yield('content')
    </main>

</body>
</html>