<?php

namespace App\Http\Livewire;
use App\Models\Product;
use Livewire\Component;

class Admin extends Component
{
    public $ids;
    public $name;
    public $price;
    public $description;

    //to reset all the values
    public function resetInputFields()
    {
        $this->name = "";
        $this->price = "";
        $this->description = "";

    }

    public function store()
    {
          //first checking if all fields are entered or not
        $validatedData = $this->validate([
            'name' => 'required',
            'price' => 'required',
            'description' => 'required',

        ]);

        //storing the data added from above func into the Student db
        Product::create( $validatedData);
        //displaying success message
        session()->flash('message','Product added successfully!');
        $this->resetInputFields();
        $this->emit('productAdded');
    }
    
    public function edit($id)
    {
        //searches for id of student to be edited and edits it
        $product = Product::where('id',$id)->first();
        $this->ids = $product->id;
        $this->name = $product->name;
        $this->price = $product->price;
        $this->description = $product->description;

        // $this->ids = $product->id;
        // $this->name = $product->name;
        // $this->price = $product->price;
        // $this->description = $product->description;
    }

    public function update()
    {
        $this->validate([
            'name' => 'required',
            'price' => 'required',
            'description' => 'required',
           
        ]);
        if($this->ids)
        {
            $product = Product::find($this->ids);
            $product->update([
                'name' => $this->name,
                'price' => $this->price,
                'description' => $this->description,
           
            ]);
            session()->flash('message','Product updated successfully!');
            $this->resetInputFields();
            $this->emit('productUpdated');
        }
    }

    public function delete($productId)
    {
        if($productId)
        {
            Product::where('id',$productId)->delete();
            session()->flash('message','Record Deleted!');
        }
    }

    public function render()
    {
        //getting data from products into variable 
        $admin = Product::orderBy('id','DESC')->get();
        //passing the key(variable) into the array 'products' to display into view at admin page
        return view('livewire.admin',['products'=>$admin]);
    }
}
