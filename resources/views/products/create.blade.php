@extends('layouts.dashboard')

@section('content')
    <div class="d-sm-flex text-center justify-content-between align-items-center mb-4">
        <h3 class="mb-sm-0 mb-1 fs-18">Create Product</h3>
        <ul class="ps-0 mb-0 list-unstyled d-flex justify-content-center">
            <li>
                <a href="index.html" class="text-decoration-none">
                    <i class="ri-home-2-line" style="position: relative; top: -1px;"></i>
                    <span>Home</span>
                </a>
            </li>
            <li>
                <span class="fw-semibold fs-14 heading-font text-dark dot ms-2">Create Product</span>
            </li>
        </ul>
    </div>
    
            <div class="card bg-white border-0 rounded-10 mb-4">
                <div class="card-body p-4">
                    <h3 class="fs-18 mb-4 border-bottom pb-20 ">Create Product</h3>
                    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group mb-4">
                                    <label class="label">Product Title</label>
                                    <div class="form-group position-relative">
                                        <input type="text" name="name" class="form-control text-dark ps-5 h-58"
                                            placeholder="Enter Product Tilte">
                                        <i
                                            class="ri-edit-2-line position-absolute top-50 start-0 translate-middle-y fs-20 text-gray-light ps-20"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group mb-4">
                                    <label class="label">Product slug</label>
                                    <div class="form-group position-relative">
                                        <textarea class="form-control ps-5 text-dark"  name="slug" placeholder="Some demo slug ... " cols="30" rows="5"></textarea>
                                        <i
                                            class="ri-information-line position-absolute top-0 start-0 fs-20 text-gray-light ps-20 pt-2"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group mb-4">
                                    <label class="label">Product Description</label>
                                    <div class="form-group position-relative">
                                        <textarea id="summernote" class="form-control ps-5 text-dark" name="description" placeholder="Some demo Description ... " cols="30" rows="5"></textarea>
                                        <i
                                            class="ri-information-line position-absolute top-0 start-0 fs-20 text-gray-light ps-20 pt-2"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group mb-4">
                                    <label class="label">Product Price</label>
                                    <div class="form-group position-relative">
                                        <input type="number" name="price" class="form-control ps-5 text-gray-light h-58"
                                            placeholder="Enter price">
                                        <i
                                            class="ri-money-dollar-circle-line position-absolute top-50 start-0 translate-middle-y fs-20 text-gray-light ps-20"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group mb-4">
                                    <label class="label">Product old Price</label>
                                    <div class="form-group position-relative">
                                        <input type="number" name="old_price" class="form-control ps-5 text-gray-light h-58" placeholder="Enter old price">
                                        <i class="ri-money-dollar-circle-line position-absolute top-50 start-0 translate-middle-y fs-20 text-gray-light ps-20"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group mb-4">
                                    <label class="label">Product In Stocks</label>
                                    <div class="form-group position-relative">
                                        <input type="number" name="quantity" class="form-control ps-5 text-gray-light h-58"
                                            placeholder="Number In Stock">
                                        <i
                                            class="ri-checkbox-circle-line position-absolute top-50 start-0 translate-middle-y fs-20 text-gray-light ps-20"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <label class="label">Categories</label>
                                <div class="form-group position-relative mb-3">
                                   
                                    <select name="category_id" id="category_id" aria-label="Default select example" class="form-select form-control text-gray-light h-58 ps-5">
                                        @foreach ($Categorys as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                    
                                    </select>
                                    <i
                                        class="ri-calendar-2-line position-absolute top-50 start-0 translate-middle-y fs-20 text-gray-light ps-20"></i>
                                </div>
                            </div>
                            <style>
                                .dx {
                                    flex-wrap: wrap-reverse;
                                }
                            </style>
                            <div class="col-lg-12">
                                <div class="form-group mb-4">
                                    <label class="label">options</label>
                                    <div class="form-group position-relative">
                                        <div class="row">
                                           
                                            @foreach ($options as $item)
                                             <div class="form-check col-2 justify-content-between align-items-center ">
                                                &nbsp;&nbsp;&nbsp;  <input name="options[]" class="form-check-input" type="checkbox"
                                                        value="{{ $item->id }}" id="{{ $item->id }}">
                                                        <label class="form-check-label" for="{{ $item->id }}">
                                                        {{ $item->name }}
                                                    </label>
                                                </div>
                                                &nbsp;&nbsp;&nbsp;
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                           
                            <div class="col-lg-12">
                                <div class="form-group mb-4">
                                    <label class="label">sizes</label>
                                    <div class="form-group position-relative">
                                        <div class="row">
                                           
                                            @foreach ($sizes as $item)
                                             <div class="form-check col-2 justify-content-between align-items-center ">
                                                &nbsp;&nbsp;&nbsp;  <input name="sizes[]" class="form-check-input" type="checkbox"
                                                        value="{{ $item->id }}" id="{{ $item->id }}">
                                                        <label class="form-check-label" for="{{ $item->id }}">
                                                        {{ $item->name }}
                                                    </label>
                                                </div>
                                                &nbsp;&nbsp;&nbsp;
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group mb-4">
                                    <label class="label">Product Image</label>
                                    <div class="form-control h-100 text-center position-relative p-4 p-lg-5">
                                        <div class="product-upload">
                                            <label for="file-upload" class="file-upload mb-0">
                                                <span
                                                    class="d-inline-block wh-110 bg-body-bg rounded-10 position-relative ">
                                                    <i class="ri-camera-line wh-38 bg-gray-div7 d-inline-block text-gray-light rounded-circle position-absolute bottom-0 end-0"
                                                        style="right: -10px !important; bottom: -10px !important;"></i>
                                                </span>
                                            </label>
                                            <input id="file-upload"  name="photo" type="file">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group mb-4">
                                    <label class="label">Product Gallery</label>
                                    <div class="form-control h-100 text-center position-relative p-4 p-lg-5">
                                        <div class="product-upload">
                                            <label for="file-Gallery" class="file-upload mb-0">
                                                <i class="ri-upload-cloud-2-line fs-2 text-gray-light"></i>
                                                <span class="d-block fw-semibold text-body">Drop files here or click to
                                                    upload.</span>
                                            </label>
                                            <input id="file-Gallery"  name="images[]" multiple type="file">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary py-3 px-5 fw-semibold text-white">Create
                                        Product</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
     
    <script>
        $('#summernote').summernote({
            placeholder: 'Some demo Description ... ',
            tabsize: 2,
            height: 100
        });
    </script>
@endsection
