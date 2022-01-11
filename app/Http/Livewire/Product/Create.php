<?php

namespace App\Http\Livewire\Product;

use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductTag;
use Livewire\Component;

class Create extends Component
{
    public string $name = '';
    public string $description = '';
    public string $price = '';
    public array $productCategories = [];
    public array $productTags = [];

    public array $allCategories = [];
    public array $allTags = [];

    public function mount()
    {
        $this->allCategories = ProductCategory::pluck('name', 'id')->toArray();
        $this->allTags = ProductTag::pluck('name', 'id')->toArray();
    }

    public function render()
    {
        return view('livewire.product.create');
    }

    public function submit()
    {
        $this->validate();

        $product = Product::create([
            'name' => $this->name,
            'description' => $this->description,
            'price' => $this->price,
        ]);
        $product->category()->sync($this->productCategories);
        $product->tag()->sync($this->productTags);

        return redirect()->route('admin.products.index');
    }

    protected function rules(): array
    {
        return [
            'name' => [
                'string',
                'required',
            ],
            'description' => [
                'string',
                'nullable',
            ],
            'price' => [
                'numeric',
                'required',
            ],
            'productCategories' => [
                'array',
            ],
            'productCategories.*.id' => [
                'integer',
                'exists:product_categories,id',
            ],
            'productTags' => [
                'array',
            ],
            'productTags.*.id' => [
                'integer',
                'exists:product_tags,id',
            ],
        ];
    }
}
