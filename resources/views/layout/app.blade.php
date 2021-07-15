@include('partials.head')



<body>
    {{-- site header --}}
    <header>
        {{-- site nav --}}
        <nav>
            <a href=" {{route('home')}} "> Home </a>
            <a href=" {{route('comics.index')}} "> Comics </a>
            <a href=" {{route('comics.create')}} "> Create </a>
        </nav>
    </header>

    {{-- site main --}}
    <main>
        @yield('content')
    </main>

</body>
</html>