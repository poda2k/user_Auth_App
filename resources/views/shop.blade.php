@include('includes.header')

<h1>welcome to shop</h1>

@include('includes.productsCard')
<div class="d-flex justify-content-center">
    {{$allProducts->links()}}
</div>


{{-- @include('includes.footer') --}}