<?php

namespace App\Livewire\Product;

use Livewire\Component;
use Livewire\WithFileUploads;

use App\Models\Product;
use App\Models\ProductCategory;

class Create extends Component
{
    use WithFileUploads;

    public $name;
    public $description;
    public $quantity;
    public $price;
    public $images = [];
    public $status;
    public $category_id;
    public $categories;

    public function mount()
    {
        $this->status = false;
        $this->categories = ProductCategory::all();
    }

    protected $rules = [
        'name' => 'required|string|max:255',
        'description' => 'nullable|string',
        'quantity' => 'required|integer|min:0',
        'price' => 'required|numeric|min:0',
        'images.*' => 'nullable|image|max:2048',
        'status' => 'required|boolean',
        'category_id' => 'required|exists:product_categories,id',
    ];

    public function storeProduct()
    {
        $this->validate();

        $product = Product::create([
            'name' => $this->name,
            'description' => $this->description,
            'quantity' => $this->quantity,
            'price' => $this->price,
            'status' => $this->status ? 'activo' : 'inactivo',
            'user_id' => auth()->id(),
            'category_id' => $this->category_id,
        ]);

        if ($this->images) {
            foreach ($this->images as $image) {
                $path = $image->store('product-photos', 'public');
                $product->images()->create(['path' => $path]);
            }
        }

        return redirect()->route('private-profile');
    }

    public function render()
    {
        return view('livewire.product.create')->layout('layouts.app');
    }
}
