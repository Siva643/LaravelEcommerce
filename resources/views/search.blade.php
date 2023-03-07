@extends('master')
@section('content')
<div class="custom-product">
    <h2 style="text-align:center;color:green;">Result for Products</h2>
       <div class="col-sm-3">
       </div>
       <div class="col-sm-4">
          @foreach($products as $item)
          <div class="searched-item">
            <a href="detail/{{$item['id']}}">
                <img class="trending-image" src="{{$item['gallery']}}">
            </a>
                <h3>{{$item['name']}}</h3>
                <h5>{{$item['description']}}</h5>
          </div>
          @endforeach
      </div>
</div>
@endsection

