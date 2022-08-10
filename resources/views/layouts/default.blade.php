<!DOCTYPE HTML>
<html>

<head>
    @include('includes.head')
</head>

<body class="is-preload">
    <div id="wrapper">
        <section id="main">
            <div>
                @yield('user')
            </div>
        </section>
        <footer id="footer">
            @include('includes.footer')
        </footer>

    </div>
</body>

</html>
