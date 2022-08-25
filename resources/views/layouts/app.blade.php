<html>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.2/mdb.min.js"></script>

<head>

    @include('inc.head')

</head>

<body>
    <header>
        @include('inc.sidenav')
    </header>

    <div id="main" class="">
        @yield('content')
    </div>

    <footer>
        <!-- @include('inc.footer') -->
    </footer>
</body>
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/popper.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
<script src="{{asset('js/app.js')}}"></script>
<script src="{{asset('js/bootstrap.js')}}"></script>



</html>