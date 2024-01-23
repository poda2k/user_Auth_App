
@foreach ($allProducts as $prod )
<div class="wrapper">
    <div class="product-img">
      <img src="http://bit.ly/2tMBBTd" height="420" width="327">
    </div>
    <div class="product-info">
      <div class="product-text">
        <h1>{{$prod->name}}</h1>
        <h2>by studio and friends</h2>
        <p>Harvest Vases are a reinterpretation<br> of peeled fruits and vegetables as<br> functional objects. The surfaces<br> 
            appear to be sliced and pulled aside,<br> Remaining : {{$prod->quantity}} </p>
      </div>
      <div class="product-price-btn">
        <p><span>{{$prod->price}}</span>$</p>
        <button type="button">buy now</button>
      </div>
    </div>
  </div>
@endforeach
 
