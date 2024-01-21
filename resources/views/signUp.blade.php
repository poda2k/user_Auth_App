@include('includes.header')

<form method="post" action="{{ route('signup')}}">
    @csrf
    <br><br>
    <span>{{$message}}</span><br>
    <label>name</label>
    <input type="text" name="name" placeholder="enter your name"> <br>
    <span>@error('name'){{$message}}@enderror</span><br>
    <label>email</label>
    <input type="email" name="email" placeholder="Enter your email address"><br>
    <span>@error('email'){{$message}}@enderror</span><br>
    <label>password</label>
    <input type="password" name="password" placeholder="Enter your password">
    <span>@error('pasword'){{$message}}@enderror</span><br>
    <button type="submit">submit</button>
</from>


@include('includes.footer')