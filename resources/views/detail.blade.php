@extends('master')
@section('content')
<div class="conatiner">
<div class="row">
<div class="col-sm-6">
    <img class="detail-img" src="{{$product['gallery']}}" alt="">

</div>
<div class="col-sm-6">
     <a href="/">Go Back</a>
     <h2 class="text-success">{{$product['name']}}</h2>
     <h3 class="text-danger">Price : {{$product['price']}}/-</h3>
     <h4>Details: {{$product['description']}}</h4>
     
   <br>
   <form action="/add_to_cart" method="POST">
    @csrf
    <input type="hidden" name="product_id" value="{{$product['id']}}">
   <button class="btn btn-success">Add to Cart</button>
   </form>
   <br></br>
</div>
</div>
</div>


@endsection

