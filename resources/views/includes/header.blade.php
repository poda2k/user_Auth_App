<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
                <li class="main-header__item"><a class="active" href="/">Shop</a></li>
                <li class="main-header__item"><a href="/admin/add-product">Add Product</a></li>
                @if(session()->has('userId'))
                    <form method="post" action="{{route('logout')}}">
                        @csrf
                        <button type="submit">
                            logOut
                        </button>
                    </form>
                @else
                     <li class="main-header__item"><a class="active" href="/login">login</a></li>
                </form>
                @endif
            </ul>
        </nav>
    </header>