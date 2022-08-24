<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
    body {
        font-family: "Poppins", sans-serif;
    }

    button {
        background-color: darkorchid;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 100%;
    }

    button:hover {
        opacity: 0.8;
    }

    a {
        text-decoration: none;
        color: white;
    }

    .sidenav {
        height: 100%;
        width: 0;
        position: fixed;
        z-index: 1;
        top: 0;
        left: 0;
        background-color: #111;
        overflow-x: hidden;
        transition: 0.5s;
        padding-top: 60px;
    }

    .sidenav a {
        padding: 8px 8px 8px 0px;
        text-decoration: none;
        font-size: 25px;
        color: #818181;
        display: block;
        transition: 0.3s;
    }

    .sidenav a:hover {
        color: #f1f1f1;
    }

    .sidenav .closebtn {
        position: absolute;
        top: 0;
        right: 25px;
        font-size: 36px;
        margin-left: 50px;
    }

    @media screen and (max-height: 450px) {
        .sidenav {
            padding-top: 15px;
        }

        .sidenav a {
            font-size: 18px;
        }
    }
    </style>
</head>

<body>

    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="{{route('index')}}">Index</a>
        @if(!Session::has('user'))
        <div class="navbar-nav ms-auto">
            <a href="{{route('login')}}" class="nav-item nav-link">Login</a>
        </div>
        @else
        <div class="navbar-nav ms-auto">
            <a href="{{route('dashboard')}}" class="nav-item nav-link">Dashboard</a>
            <a href="{{route('userList')}}" class="nav-item nav-link">All User</a>
            <a href="{{route('categoryCreate')}}" class="nav-item nav-link">Add Category</a>
            <a href="{{route('categoryList')}}" class="nav-item nav-link">All Category</a>
            <div class="">
                <button type="submit" class="" style="background-color: red">
                    <a href="{{route('logout')}}">LogOut</a></button>
            </div>
        </div>
        @endif
    </div>

    <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>

    <script>
    function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
    }

    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
    }
    </script>

</body>

</html>