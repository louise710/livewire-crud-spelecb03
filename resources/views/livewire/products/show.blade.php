<div class="row justify-content-center mt-3">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="float-start">
                        Product Information
                    </div>
                    <div class="float-end">
                        <a href="/" wire:navigate class="btn btn-primary btn-sm">&larr; Back</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <label for="code"
                            class="col-md-4 col-formlabel text-md-end text-start"><strong>Code:</strong></label>
                        <div class="col-md-6" style="line-height:35px;">
                            {{ $product->code }}
                        </div>
                    </div>
                    <div class="row">
                        <label for="name"
                            class="col-md-4 col-formlabel text-md-end text-start"><strong>Name:</strong></label>
                        <div class="col-md-6" style="line-height:35px;">
                            {{ $product->name }}
                        </div>
                    </div>
                    <div class="row">
                        <label for="quantity"
                            class="col-md-4 colform-label text-md-end text-start"><strong>Quantity:</strong></label>
                        <div class="col-md-6" style="line-height:35px;">
                            {{ $product->quantity }}
                        </div>
                    </div>
                    <div class="row">
                        <label for="price"
                            class="col-md-4 col-formlabel text-md-end text-start"><strong>Price:</strong></label>
                        <div class="col-md-6" style="line-height:35px;">
                            {{ $product->price }}
                        </div>
                    </div>
                    <div class="row">
                        <label for="description"
                            class="col-md-4 colform-label text-md-end textstart"><strong>Description:</strong></label>
                        <div class="col-md-6" style="line-height:35px;">
                            {{ $product->description }}
                        </div>
                    </div>
                    <div class="row">
                        <label for="image"
                            class="col-md-4 colform-label text-md-end textstart"><strong>Image:</strong></label>
                        <div class="col-md-6" style="line-height:35px;">
                            <img style="max-width:250px;max-height:250px;" src="{{ asset($product->fileUrl) }}" alt="">      
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>