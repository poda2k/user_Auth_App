@include('includes.header')

<h1 class="home-title"> welcome to home</h1>
@if(session()->has('userId'))
    <h1>welcome user {{Session('userName')}} and {{Session('role')}}</h1>
@endif

@include('includes.productsCard')

@include('includes.footer')