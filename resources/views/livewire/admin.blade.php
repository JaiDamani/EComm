<div>
    @include('livewire.create')
    @include('livewire.update')
    <section>
        <div class = "container">
            <div class = "row">
                <div class="col-md-12">
                    {{-- will display the success message if new student has been added --}}
                    @if(session()->has('message'))
                    <div class="alert alert-success">{{session('message')}}</div>
                    @endif
                    <div class = "card">
                        <h3>Products List
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addProductModal">
                                Add New Product
                            </button>
                        </h3>
                    </div>
                    <div class="card-body">
                        <table class = "table table-striped">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>Description</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $item)
                                    <tr>
                                        {{-- <td>{{$item['name']}}</td>
                                        <td>{{$item['price']}}</td>
                                        <td>{{$item['description']}}</td> --}}

                                        <td>{{$item->name}}</td>
                                        <td>{{$item->price}}</td>
                                        <td>{{$item->description}}</td>
                                        <td>
                                            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#updateProductModal" wire:click.prevent="edit({{$item->id}})">Edit</button>
                                            <button type="button" class="btn btn-danger" data-target="#updateProductModal" wire:click.prevent="delete({{$item->id}})">Delete</button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
  </div>