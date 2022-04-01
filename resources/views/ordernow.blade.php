@extends('master')
@section("content")

<div class="custom-product">
     <div class="col-sm-10">
     <table class="table table-hover">
    
    <tbody>
      <tr>
        <td>Amount</td>
        <td>INR {{$total}}</td>
      </tr>
      <tr>
        <td>Tax</td>
        <td>INR 0.000</td>
      </tr>
      <tr>
        <td>Delivery </td>
        <td>INR 10.000</td>
      </tr>
      <tr>
        <td>Total</td>
        <td>INR {{$total+10.000}}</td>
      </tr>
    </tbody>
        </table>
        <div>
        <form class="form-horizontal" action="/orderplace" method = "POST">
            @csrf
  <div class="form-group">
    <div class="col-sm-10">
      <textarea name="address" placeholder = "enter delivery address" class="form-control"></textarea>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Payment Method:</label>
    <div class="col-sm-10">
        <input type = "radio" value="Online payment" name = "payment"><span>Online payment</span> <br> <br>
        <input type="radio" value="EMI" name = "payment"><span>EMI payment</span> <br> <br>
        <input type="radio" value="Cash on Delivery" name = "payment"><span>Cash on Delivery</span>

    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Order Now</button>
    </div>
  </div>
</form>
        </div>
     </div>
</div>
@endsection