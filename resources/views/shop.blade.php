@include('includes.header')

<h1>welcome to shop</h1>
@foreach ($allProducts as $prods)
    <h1>{{$prods['name']}}</h1><br>
@endforeach

@include('includes.productsCard')


@include('includes.footer')