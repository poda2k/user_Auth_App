@include('includes.header')

<h1> welcome to home</h1>
@if(session()->has('userId'))
    <h1>welcome user {{Session('userName')}} and {{Session('role')}}</h1>
@endif
@include('includes.footer')