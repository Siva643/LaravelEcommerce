<?php
use App\Http\Controllers\ProductController;
   $total=0;
if(Session::has('user'))
{
  $total= ProductController::cartItem();
}
?>
<nav class="navbar navbar-default">
  <div class="container-fluid background">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a style="color:white;font-weight:bold;" class="navbar-brand" href="/">Online-Shop</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class=""><a style="color:white;" href="/"><span class="glyphicon glyphicon-home"></span></a></li>
        <li class=""><a style="color:white;font-weight:bold;"  href="myorders">Orders</a></li>

     
      </ul>
      <form action="/search" class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" name="query" class="form-control search-box" placeholder="Search">
        </div>
          <button type="submit" class="btn btn-warning"><span style="padding:3px;" class="glyphicon glyphicon-search"></span></button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a style="color:white;font-size:20px;" href="/cartList"><i class="fa fa-shopping-cart"></i>

          ({{$total}})</a></li>
        @if(Session::has('user'))
        <li class="dropdown">
          <a class="dropdown-toggle" style="color:white;font-weight:bold;" data-toggle="dropdown" href="#">{{Session::get('user')['name']}}  
          <span class="caret"></span></a>
          <ul class="dropdown-menu" style="background-color:black;">
         <li><a style="color:white;font-weight:bold;" href="logout">Signout</a></li>
          </ul>
        @else
         <li><a style="color:white;font-weight:bold;" href="/login">Signin</a></li>
         <li><a style="color:white;font-weight:bold;" href="/register">Register</a></li>

         @endif

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>