<!doctype html>
<html lang="en">
@include('includes.head')
<body>
<div class="container">
    <header class="container">
        @include('includes.header')
    </header>
    <footer>
        @include('includes.footer')
    </footer>
    <main role="main">
        @yield('content')
    </main>
</div>

</body>
</html>