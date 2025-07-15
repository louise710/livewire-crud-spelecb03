
<div class="row justify-content-center mt-3">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="float-start">
                        Add New Product
                    </div>
                    <div class="float-end">
                        <a href="/" class="btn btn-primary btn-sm" wire:navigate>&larr; Back</a>
                    </div>
                </div>
                <div class="card-body">
                    <form wire:submit="save" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3 row">
                            <label for="code" class="col-md-4 col-formlabel text-md-end text-start">Code</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control @error('code') is-invalid @enderror" id="code"
                                    wire:model="code" value="{{ old('code') }}">
                                @error('code')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="name" class="col-md-4 col-formlabel text-md-end text-start">Name</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                                    wire:model="name" value="{{ old('name') }}">
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="quantity" class="col-md-4 colform-label text-md-end text-start">Quantity</label>
                            <div class="col-md-6">
                                <input type="number" class="form-control @error('quantity') is-invalid @enderror"
                                    id="quantity" wire:model="quantity" value="{{ old('quantity') }}">
                                @error('quantity')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="price" class="col-md-4 col-formlabel text-md-end text-start">Price</label>
                            <div class="col-md-6">
                                <input type="number" step="0.01" class="form-control @error('price') is-invalid @enderror"
                                    id="price" wire:model="price" value="{{ old('price') }}">
                                @error('price')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="description"
                                class="col-md-4 colform-label text-md-end text-start">Description</label>
                            <div class="col-md-6">
                                <textarea class="form-control 
                                    @error('description') 
                                    is-invalid @enderror" id="description"
                                    wire:model="description">{{ old('description') }}</textarea>
                                @error('description')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <!-- file uploads  -->
                        <div class="mb-3 row">
                            <label for="image" class="col-md-4 colform-label text-md-end text-start">Upload
                                Image</label>
                            <div class="col-md-6">
                                <input type="file" class="form-control" wire:model="image" id="image">
                                @error('image')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <input type="submit" class="col-md-3 offsetmd-5 btn btn-primary" value="Add Product">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>