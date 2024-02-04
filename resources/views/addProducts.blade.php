@include('includes.header')

<h1> admins only </h1>

<form method="post" action="/shop" enctype="multipart/form-data">
    @csrf
    <br><br>
    <label>name</label>
    <input type="text" name="name" placeholder="enter name" > <br>
    <span>@error('name'){{$message}}@enderror</span>
    <label>description</label>
    <input type="text" name="description" placeholder="enter description"><br>
    <span>@error('description'){{$message}}@enderror</span>
    <label>price</label>
    <input type="number" name="price" placeholder="enter price"><br>
    <span>@error('price'){{$message}}@enderror</span>
    <label>quantity</label>
    <input type="number" name="quantity" placeholder="enter quantity"><br>
    <span>@error('quantity'){{$message}}@enderror</span>
    <label>image</label>
    <input type="file" name="image" placeholder="upload image">
    <span>@error('image'){{$message}}@enderror</span>
    <button type="submit">submit</button>
</from>
@include('includes.footer')