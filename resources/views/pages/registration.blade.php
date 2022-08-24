@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registration</title>
    <style>
    form {
        border: 3px solid #f1f1f1;
    }

    input[type=text],
    input[type=password],
    input[type=email] {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
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

    a {
        text-decoration: none;
        color: white;
    }

    a:hover {
        text-decoration: none;
        color: white;
        opacity: 0.5;
    }

    button:hover {
        opacity: 0.8;
    }

    .imgcontainer {
        text-align: center;
        margin: 24px 0 12px 0;
    }

    img.avatar {
        width: 20%;
        border-radius: 50%;
    }

    .container {
        padding: 16px;
    }

    span.psw {
        float: right;
        padding-top: 16px;
    }

    /* Change styles for span and cancel button on extra small screens */
    @media screen and (max-width: 300px) {
        span.psw {
            display: block;
            float: none;
        }
    }
    </style>
</head>

<body>
    @if(!Session::has('user'))
    <h2 style="text-align: center;">Registration Form</h2>

    <form action="{{route('registration')}}" method="post" enctype="multipart/form-data">
        <!-- {{csrf_field()}} -->
        <div class="imgcontainer">
            <img src="{{asset('images/reg.png')}}" alt="Avatar" class="avatar">
        </div>
        @csrf
        @if(session()->has('exist'))
        <div class="alert alert-danger">
            {{ session()->get('exist') }}
        </div>
        @endif
        <div class="container">
            <div class="row ">
                <div class="form-group">
                    <input type="text" class="form-control rounded-left" name="name" value="{{old('name')}}"
                        placeholder="Name" required>
                </div>
                @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <div class="form-group">
                    <input type="text" class="form-control rounded-left" name="phone" value="{{old('phone')}}"
                        placeholder="Phone" required>
                </div>
                @error('phone')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <div class="form-group">
                    <input type="email" class="form-control rounded-left" name="email" value="{{old('email')}}"
                        placeholder="Email">
                </div>
                @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <div class="form-group d-flex">
                    <input type="password" class="form-control rounded-left" name="password" placeholder="Password"
                        required>
                </div>
                @error('password')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <div class="form-group d-flex">
                    <input type="password" class="form-control rounded-left" name="password_confirm"
                        placeholder="Confirm Password" required>
                </div>
                @error('password_confirm')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <div class="form-group">
                    <input type="text" class="form-control rounded-left" name="address" value="{{old('address')}}"
                        placeholder="Address" required>
                </div>
                @error('address')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <div class="form-group">
                    <input type="file" class="form-control" name="image" value="{{old('image')}}">
                </div>
                @error('image')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <div class="form-group">
                    <button type="submit">Confirm
                        Registration</button>
                </div>
                <div class="form-group">
                    <button type="submit">
                        <a href=" {{route('login')}}">Already Registered? Click here</a></button>
                </div>
            </div>
        </div>
    </form>
    @else
    <script>
    window.location = "/dashboard";
    </script>
    @endif

</body>

</html>

@endsection