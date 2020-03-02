@extends('layouts.dashboard')

@section('content')
    <div class="content">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <strong>Edit Product</strong>
                            <small>{{ $item->name }}</small>
                        </div>
                        <div class="card-body card-block">
                            <form action="{{ route('products.update', $item->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="name" class="form-control-label">Product Name</label>
                                    <input type="text" name="name" value="{{ old('name') ? old('name') : $item->name }}" class="form-control @error('name') is-invalid @enderror">
                                </div>
                                @error('name')
                                    <div class="text-nuted">
                                        {{ $message }}
                                    </div>
                                @enderror
                                <div class="form-group">
                                    <label for="type" class="form-control-label">Product Type</label>
                                    <input type="text" name="type" value="{{ old('type') ? old('type') : $item->type}}" class="form-control @error('type') is-invalid @enderror">
                                </div>
                                @error('type')
                                    <div class="text-nuted">
                                        {{ $message }}
                                    </div>
                                @enderror
                                <div class="form-group">
                                    <label for="description" class="form-control-label">Product Description</label>
                                    <textarea name="description" class="ckeditor form-control @error('description') is-invalid @enderror">{{ old('description') ? old('description') : $item->description}}</textarea>
                                </div>
                                @error('description')
                                    <div class="text-nuted">
                                        {{ $message }}
                                    </div>
                                @enderror
                                <div class="form-group">
                                    <label for="price" class="form-control-label">Product Price</label>
                                    <input type="number" name="price" value="{{ old('price') ? old('price') : $item->price }}" class="form-control @error('price') is-invalid @enderror">
                                </div>
                                @error('price')
                                    <div class="text-nuted">
                                        {{ $message }}
                                    </div>
                                @enderror
                                <div class="form-group">
                                    <label for="quantity" class="form-control-label">Product Quantity</label>
                                    <input type="text" name="quantity" value="{{ old('quantity') ? old('quantity') : $item->quantity }}" class="form-control @error('quantity') is-invalid @enderror">
                                </div>
                                @error('quantity')
                                    <div class="text-nuted">
                                        {{ $message }}
                                    </div>
                                @enderror
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-block">Edit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
