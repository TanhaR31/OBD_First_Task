@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add Category</title>
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
    @if(Session::has('user'))
    <h2 style="text-align: center;">Add Category</h2>

    <form action="{{route('categoryCreate')}}" method="post" enctype="multipart/form-data">
        <!-- {{csrf_field()}} -->
        @csrf
        @if(session()->has('exist'))
        <div class="alert alert-danger">
            {{ session()->get('exist') }}
        </div>
        @endif
        <div class="container">
            <div class="row ">
                <div class="form-group">
                    <input type="text" class="form-control rounded-left" name="ct_name" value="{{old('ct_name')}}"
                        placeholder="Category Name" required>
                </div>
                @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <div class="form-group">
                    <button type="submit">Add Category?</button>
                </div>
            </div>
        </div>
    </form>
    @else
    <script>
    window.location = "/login";
    </script>
    @endif

</body>

</html>

@endsection