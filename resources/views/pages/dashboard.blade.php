@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
    <style>
    form {
        border: 3px solid #f1f1f1;
    }

    input[type=text],
    input[type=password] {
        width: 100%;
        padding: 12px 20px;
        /* margin: 8px 0; */
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

    button:hover {
        opacity: 0.8;
    }

    .imgcontainer {
        text-align: center;
        margin: 12px 0 0 0;
    }

    img.avatar {
        width: 50%;
        height: 100%;
        border-radius: 50%;
    }

    .container {
        padding: 30px;
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

    <h3 style="text-align: center;">
        User Id : @if(Session::get('user')) {{Session::get('user')}}@endif
    </h3>

    <form action="" method="">
        <!-- {{csrf_field()}} -->
        @csrf
        <div class="container">
            <div class="row ">
                <div class="imgcontainer">
                    <img src="{{asset('images/'.$user->image)}}" alt="User Profile Picture" class="avatar">
                </div>

                <div class="form-group">
                    <input type="text" class="form-control rounded-left" name="name" value="Name : {{$user->name}}"
                        placeholder="Name" readonly>
                </div>

                <div class="form-group">
                    <input type="text" class="form-control rounded-left" name="phone"
                        value="Phone Number : 0{{$user->phone}}" placeholder="Phone" readonly>
                </div>

                <div class="form-group">
                    <input type="email" class="form-control rounded-left" name="email"
                        value="Email Address : {{$user->email}}" placeholder="Email" readonly>
                </div>

                <div class="form-group">
                    <input type="text" class="form-control rounded-left" name="address"
                        value="Address : {{$user->address}}" placeholder="Address" readonly>
                </div>
            </div>
        </div>
    </form>
</body>

</html>
@endsection