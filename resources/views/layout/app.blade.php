@include('partials.head')



<body>
    {{-- site header --}}
    <header>
        {{-- site nav --}}
        <nav class="container u-center">
            <a href=" {{route('home')}} "> Home </a>
            <a href=" {{route('comics.index')}} "> Comics </a>
            <a href=" {{route('comics.create')}} "> Create </a>
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