@extends('admin.master')

@section('content')
<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Edit Product</h1>

<form action="{{ route('admin.products.update', $product->id) }}" method="POST">
    @csrf
    @method('put')

    @include('admin.products._form')

    <button class="btn btn-info"><i class="fas fa-save"></i> Update</button>
</form>

@endsection

@section('title', 'Dashboard')

@section('js')
<script>
    function showImg(e) {
        const [file] = e.target.files
        if (file) {
            preview.src = URL.createObjectURL(file)
        }
    }
</script>
@endsection
