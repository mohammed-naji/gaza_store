<style>
    .perv-img {
        width: 80px;
        height: 100px;
        object-fit: cover
    }
</style>
<div class="row">
    <div class="col-md-6">
        <div class="mb-3">
            <label>English Name</label>
            <input type="text" name="name_en" class="form-control @error('name_en') is-invalid @enderror" placeholder="English Name" value="{{ old('name_en', $product->name_en) }}" />
            @error('name_en')
                <small class="invalid-feedback">{{ $message }}</small>
            @enderror
        </div>
    </div>
    <div class="col-md-6">
        <div class="mb-3">
            <label>Arabic Name</label>
            <input type="text" name="name_ar" class="form-control @error('name_ar') is-invalid @enderror" placeholder="Arabic Name" value="{{ old('name_ar', $product->name_ar) }}" />
            @error('name_ar')
                <small class="invalid-feedback">{{ $message }}</small>
            @enderror
        </div>
    </div>

    <div class="col-md-6">
        <div class="mb-3">
            <label>Image</label>
            <input type="file" onchange="showImg(event)" name="image" class="form-control @error('image') is-invalid @enderror" />
            @error('image')
                <small class="invalid-feedback">{{ $message }}</small>
            @enderror
            @php
                $url = '';
                if ($product->image){
                    $url = $product->img_path;
                }
            @endphp
            <img width="80" class="perv-img" id="preview" src="{{ $url }}" alt="">
        </div>
    </div>

    <div class="col-md-6">
        <div class="mb-3">
            <label>Gallery</label>
            <input type="file" name="gallery[]" multiple class="form-control @error('gallery') is-invalid @enderror" />
            @error('gallery')
                <small class="invalid-feedback">{{ $message }}</small>
            @enderror
            @if ($product->gallery)
                @foreach ($product->gallery as $item)
                    <img width="80" class="perv-img" src="{{ asset('images/'.$item->path) }}" alt="">
                @endforeach
            @endif
        </div>
    </div>

    <div class="col-md-6">
        <div class="mb-3">
            <label>English Description</label>
            <textarea name="description_en" class="form-control @error('description_en') is-invalid @enderror" placeholder="English Description" rows="4">{{ old('description_en', $product->description_en) }}</textarea>
            @error('description_en')
                <small class="invalid-feedback">{{ $message }}</small>
            @enderror
        </div>
    </div>

    <div class="col-md-6">
        <div class="mb-3">
            <label>Arabic Description</label>
            <textarea name="description_ar" class="form-control @error('description_ar') is-invalid @enderror" placeholder="Arabic Description" rows="4">{{ old('description_ar', $product->description_ar) }}</textarea>
            @error('description_ar')
                <small class="invalid-feedback">{{ $message }}</small>
            @enderror
        </div>
    </div>

    <div class="col-md-4">
        <div class="mb-3">
            <label>Price</label>
            <input type="number" name="price" class="form-control @error('price') is-invalid @enderror" placeholder="Price" value="{{ old('price', $product->price) }}" />
            @error('price')
                <small class="invalid-feedback">{{ $message }}</small>
            @enderror
        </div>
    </div>
    <div class="col-md-4">
        <div class="mb-3">
            <label>Quantity</label>
            <input type="number" name="quantity" class="form-control @error('quantity') is-invalid @enderror" placeholder="Quantity" value="{{ old('quantity', $product->quantity) }}" />
            @error('quantity')
                <small class="invalid-feedback">{{ $message }}</small>
            @enderror
        </div>
    </div>
    <div class="col-md-4">
        <div class="mb-3">
            <label>Category</label>
            <select name="category_id" class="form-control @error('category_id') is-invalid @enderror">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->trans_name }}</option>
                @endforeach
            </select>
            @error('category_id')
                <small class="invalid-feedback">{{ $message }}</small>
            @enderror
        </div>
    </div>
</div>
