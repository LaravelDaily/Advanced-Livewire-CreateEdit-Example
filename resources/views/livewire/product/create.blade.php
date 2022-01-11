<form wire:submit.prevent="submit" class="pt-3">

    <div class="form-group {{ $errors->has('name') ? 'invalid' : '' }}">
        <label class="form-label required" for="name">{{ trans('cruds.product.fields.name') }}</label>
        <input class="form-control" type="text" name="name" id="name" required wire:model.defer="name">
        <div class="validation-message">
            {{ $errors->first('name') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('description') ? 'invalid' : '' }}">
        <label class="form-label" for="description">{{ trans('cruds.product.fields.description') }}</label>
        <textarea class="form-control" name="description" id="description" wire:model.defer="description" rows="4"></textarea>
        <div class="validation-message">
            {{ $errors->first('description') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('price') ? 'invalid' : '' }}">
        <label class="form-label required" for="price">{{ trans('cruds.product.fields.price') }}</label>
        <input class="form-control" type="number" name="price" id="price" required wire:model.defer="price" step="0.01">
        <div class="validation-message">
            {{ $errors->first('price') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('productCategories') ? 'invalid' : '' }}">
        <label class="form-label" for="productCategories">{{ trans('cruds.product.fields.category') }}</label>
        <x-select-list class="form-control" id="productCategories" name="productCategories" wire:model="productCategories" :options="$allCategories" multiple />
        <div class="validation-message">
            {{ $errors->first('productCategories') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('productTags') ? 'invalid' : '' }}">
        <label class="form-label" for="productTags">{{ trans('cruds.product.fields.tag') }}</label>
        <x-select-list class="form-control" id="productTags" name="productTags" wire:model="productTags" :options="$allTags" multiple />
        <div class="validation-message">
            {{ $errors->first('productTags') }}
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.products.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>
