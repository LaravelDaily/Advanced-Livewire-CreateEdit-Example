<?php

namespace App\Http\Livewire\Product;

use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductTag;
use Livewire\Component;

class Edit extends Component
{
    public Product $product;

    public array $productCategories = [];
    public array $productTags = [];

    public array $allCategories = [];
    public array $allTags = [];

    public function mount(Product $product)
    {
        $this->product = $product;
        $this->productCategories = $this->product->category()->pluck('id')->toArray();
        $this->productTags = $this->product->tag()->pluck('id')->toArray();

        $this->allCategories = ProductCategory::pluck('name', 'id')->toArray();
        $this->allTags = ProductTag::pluck('name', 'id')->toArray();
    }

    public function render()
    {
        return view('livewire.product.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->product->save();
        $this->product->category()->sync($this->productCategories);
        $this->product->tag()->sync($this->productTags);

        return redirect()->route('admin.products.index');
    }

    protected function rules(): array
    {
        return [
            'product.name' => [
                'string',
                'required',
            ],
            'product.description' => [
                'string',
                'nullable',
            ],
            'product.price' => [
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
