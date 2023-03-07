@extends('master')
@section('content')
<div class="custom-product container">
    <div class="col-sm-10">
        <table class="table">
            
            <tbody>
              <tr>
                <td>Amount</td>
                <td>$ {{$total}}</td>
             
              </tr>
              <tr>
                <td>Tax</td>
                <td>$ 0</td>
             
              </tr>
              <tr>
                <td>Delivery</td>
                <td>$ 2</td>
             
              </tr>
              <tr>
                <td>Total Amount</td>
                <td>$ {{$total+2}}</td>
             
              </tr>
            </tbody>
          </table>
          <form action="/orderplace" method="post">
            @csrf
            <div class="form-group">
              <h3>Address</h3>
              <textarea type="text" name="address" placeholder="enter your address" class="form-control" id="email">
              </textarea>
            </div>
            <div class="form-group">
              <label for="pwd" class="h3">Payment Method</label><br><br>
              <input type="radio" value="cash" name="payment"> <span>Online payment</span><br><br>
              <input type="radio" value="cash" name="payment"> <span>EMI payment</span><br><br>
              <input type="radio" value="cash" name="payment"> <span>Payment on delivery</span>
            </div>
           
            <button type="submit" class="btn btn-default">Place order</button>
          </form>
</div>
</div>
@endsection