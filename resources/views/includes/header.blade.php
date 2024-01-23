<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{asset('css/productsCard.css')}}" rel="stylesheet" >
    <link href="{{asset('css/header.css')}}" rel="stylesheet" >
    <link href="https://fonts.googleapis.com/css?family=Bentham|Playfair+Display|Raleway:400,500|Suranna|Trocchi" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>{{$pageTitle}}</title>
    
</head>

<body>
    <header class="main-header">
        <nav class="main-header__nav">
            <ul class="main-header__item-list">
                <li class="main-header__item"><a class="active" href="/">home</a></li>
                <li class="main-header__item"><a class="" href="/shop">shop</a></li>
                <li class="main-header__item"><a href="/admin/add-product">Add Product</a></li>
                @if(Session::has('userId'))
                    <div class="logoutDiv">
                        <form method="post" action="{{route('logout')}}">
                            @csrf
                            <button class="logout" type="submit">
                                logout
                            </button>
                        </form>
                    </div>
                    
                
                @else
                     <li class="login"><a class="" href="/login"><button>login</button></a></li>
                </form>
                @endif
            </ul>
        </nav>
    </header>