@include('layouts.head')
<body>
        @include('layouts.menu')
        <div class="container"><br><br>
            <h1>@yield('title')</h1>
        </div>
        <div class="container">
            @yield('content')
        </div>
        @include('layouts.footer')
</body>