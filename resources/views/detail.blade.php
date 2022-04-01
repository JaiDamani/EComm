@extends('master')
@section("content")

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    <form action="/add-rating" method="POST">
          @csrf
          <input type="hidden" name="product_id" value="{{$product->id}}">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Rate this product</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="rating-css">
    <div class="star-icon">
        <input type="radio" value="1" name="product_rating" checked id="rating1">
        <label for="rating1" class="fa fa-star"></label>
        <input type="radio" value="2" name="product_rating" id="rating2">
        <label for="rating2" class="fa fa-star"></label>
        <input type="radio" value="3" name="product_rating" id="rating3">
        <label for="rating3" class="fa fa-star"></label>
        <input type="radio" value="4" name="product_rating" id="rating4">
        <label for="rating4" class="fa fa-star"></label>
        <input type="radio" value="5" name="product_rating" id="rating5">
        <label for="rating5" class="fa fa-star"></label>
    </div>
</div>
      </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Submit</button>
         </div>
         </form>
    </div>
  </div>
</div>
<div class="container">
   <div class="row">
       <div class="col-sm-6">
       <img class="detail-img" src="{{$product['gallery']}}" alt="">
       </div>
       <div class="col-sm-6">
           <a href="/">Go Back</a>
          <h2>{{$product['name']}}</h2>
          <h3>Price : {{$product['price']}}</h3>
          <h4>Details: {{$product['description']}}</h4>
          <h4>category: {{$product['category']}}</h4>
          <br><br>
           <form action="/add_to_cart" method="POST">
             @csrf
              <input type="hidden" name="product_id" value={{$product['id']}}>
              <button class="btn btn-primary">Add to Cart</button>
            </form>
       <br><br>
       <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
       Rate this 
      </button>
    </div>
   </div>
</div>
@endsection