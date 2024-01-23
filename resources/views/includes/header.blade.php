<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{asset('css/productsCard.css')}}" rel="stylesheet" >
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>{{$pageTitle}}</title>
    <style>
        body {
            padding: 0;
            margin: 0;
            font-family: sans-serif;
        }

        main {
            padding: 1rem;
        }

        .main-header {
            width: 100%;
            height: 3.5rem;
            background-color: #dbc441;
            padding: 0 1.5rem;
        }

        .main-header__nav {
            height: 100%;
            display: flex;
            align-items: center;
        }

        .main-header__item-list {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
        }

        .main-header__item {
            margin: 0 1rem;
            padding: 0;
        }

        .main-header__item a {
            text-decoration: none;
            color: black;
        }

        .main-header__item a:hover,
        .main-header__item a:active,
        .main-header__item a.active {
            color: #3e00a1;
        }
    </style>
</head>

<body>
    <header class="main-header">
        <nav class="main-header__nav">
            <ul class="main-header__item-list">
                <li class="main-header__item"><a class="active" href="/">home</a></li>
                <li class="main-header__item"><a class="" href="/shop">shop</a></li>
                <li class="main-header__item"><a href="/admin/add-product">Add Product</a></li>
                @if(Session::has('userId'))
                    <form method="post" action="{{route('logout')}}">
                        @csrf
                        <button type="submit">
                            logOut
                        </button>
                    </form>
                @else
                     <li class="main-header__item"><a class="" href="/login">login</a></li>
                </form>
                @endif
            </ul>
        </nav>
    </header>