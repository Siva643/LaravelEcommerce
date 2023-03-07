@extends('master')
@section('content')
<div class="container" style="padding:15px;font-size:15px;margin-bottom:10px;">
<div class="row">

  <div class="col-md-1">
    <div  style="border-bottom:1px solid black;text-align:center">Mobile</div>
    </div>
    <div class="col-md-1">
      <div style="border-bottom:1px solid black;text-align:center">Electronic</div>
    </div>
    <div class="col-md-2">
      <div  style="border-bottom:1px solid black;text-align:center">Computer & Laptop</div>
      </div>
      <div class="col-md-1">
        <div  style="border-bottom:1px solid black;text-align:center">Camera</div>
      </div>
      <div class="col-md-1">
       <div  style="border-bottom:1px solid black;text-align:center">Tv</div>
        </div>
        <div class="col-md-3">
         <div  style="border-bottom:1px solid black;text-align:center"> Headphone & Accessores</div>
        </div>

        
          <div class="col-md-1">
           <div  style="border-bottom:1px solid black;text-align:center">Watch</div>
          </div>
          <div class="col-md-2">
            <div  style="border-bottom:1px solid black;text-align:center">Shoes</div>
            </div>
           
          
    
</div>
</div>
<div class="custom-product">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
      
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
          
          @foreach($products as $item)
          <div class="item {{$item['id']==1?'active':''}}">
            <a href="detail/{{$item['id']}}">
            <img style="margin-left:250px;" class="slider-img" src="{{$item['gallery']}}">
            <br><br>
            <br><br>
            <br><br>

            <div class="carousel-caption slide-background">
                <h3>{{$item['name']}}</h3>
              <p>{{$item['description']}}</p>
          </div>
            
          </a>
          </div>
          @endforeach
  
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
          <span class="sr-only bg-dark">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

         <div class="container carousel-inner">
          <h1 style="text-align:center;color:green;">Available Products</h1>
     
          @foreach($products as $item)
          <div class="container trending-item ms-5">
           
                <a href="detail/{{$item['id']}}">
                  <img class="trending-image" src="{{$item['gallery']}}">
              </a>
          
                  <h3 style="margin-left:16px;">{{$item['name']}}</h3>
          
          
          </div>
  
          @endforeach
      
          
      
      
        </div>
     
@endsection
</div> 

</div>


