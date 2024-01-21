@include('includes.header')

<form method="post" action="{{ route('login')}}">
@csrf
<span>{{$message}}</span>
<label>email</label>
<input type="email" name="email" placeholder="Enter your email address"><br>
<span>@error('email'){{$message}}@enderror</span>
<label>password</label>
<input type="password" name="password" placeholder="Enter your password">
<span>@error('password'){{$message}}@enderror</span>
<button type="submit">submit</button>
</form>

@include('includes.footer')