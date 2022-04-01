
{{-- @extends('master')
@section("content")
{{-- <div class="col-sm-4 col-sm-offset-4">  --}}

    <table class="table">
         <thead class="thead-light">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Image</th>
            <th scope="col">Name</th>
            <th scope="col">Price</th>
            <th scope="col">Details</th>
            <th scope="col">Category</th>
            <th>Delete</th>
            <th>Edit</th>
          </tr>
        </thead>
        @foreach ( $products as $item )
        <tbody>
            <tr>
             <th scope="row">{{$item['id']}}</th>
             <td> <img class="detail-img trending-image" src="{{$item['gallery']}}" alt=""></td>
             <td>{{$item['name']}}</td>
             <td>{{$item['price']}}</td>
             <td>{{$item['description']}}</td>
             <td>{{$item['category']}}</td>
             <td><a href="/delete/{{$item->id}}" class="btn btn-danger">Delete</a></td>
             <td><a href="/edit/{{$item->id}}" class="btn btn-success">Edit</a></td>
              </tr>
        </tbody>
        @endforeach
      </table>
      <button>Add Products</button>
      <br></br>
        
{{-- @csrf 
  <h1>Admin Page</h1>
    <div class="trending-wrapper admin-display">
    <h3>Products</h3>
    @foreach($products as $item)
    <div class="trending-item">
     <a href="detail/{{$item['id']}}">   
          <img class="trending-image" src="{{$item['gallery']}}" >
          <div class="">
             <h3>{{$item['name']}}</h3>
           </div>
    </a>
       </div>
     @endforeach
  </div> --}}

@endsection
 --}}
