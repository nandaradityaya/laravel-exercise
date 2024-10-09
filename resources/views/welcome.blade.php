@extends('layouts.sidebar')

@section('content')

<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <div class="row align-items-center">
            <div class="col-lg-3 col-xl-2">
              <a type="button"
                data-bs-toggle="modal" data-bs-target="#modalAddNew"
                class="btn btn-primary mb-3 mb-lg-0"
                ><i class="bx bxs-plus-square"></i>New Product</a
              >
            </div>
            <div class="col-lg-9 col-xl-10">
              <form class="float-lg-end" method="GET" action="{{ route('front.index') }}">
                <div class="row row-cols-lg-2 row-cols-xl-auto g-2">
                    <div class="col">
                        <div class="position-relative">
                            <input
                                type="text"
                                class="form-control ps-5"
                                placeholder="Search Product..."
                                name="q"
                                value="{{ request()->query('q') }}"
                            />
                            <span
                                class="position-absolute top-50 product-show translate-middle-y"
                            >
                                <i class="bx bx-search"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </form>
            
            </div>
          </div>
        </div>
      </div>
    </div>
</div>

<div class="d-flex align-items-center gap-3 justify-content-center mb-4">
  <a href="{{ route('front.index') }}" class="btn {{ request()->is('/') ? 'btn-primary' : 'btn-outline-primary' }} mb-3 mb-lg-0">All</a>
  @forelse ($categories as $category)
      <a href="{{ route('category.filter', $category->id) }}" class="btn {{ request()->is('category/' . $category->id) ? 'btn-primary' : 'btn-outline-primary' }} mb-3 mb-lg-0">{{ $category->name }}</a>
  @empty
      <p>Tidak ada Kategori</p>
  @endforelse
</div>

@if(session('success'))
    <div class="alert border-0 border-start border-5 border-success alert-dismissible fade show py-2" id="success-alert">
        <div class="d-flex align-items-center">
            <div class="font-35 text-success"><i class="bx bxs-check-circle"></i></div>
            <div class="ms-3">
                <h6 class="mb-0 text-success">Success</h6>
                <div>{{ session('success') }}</div>
            </div>
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

@if(session('error'))
<div class="alert border-0 border-start border-5 border-danger alert-dismissible fade show py-2" id="error-alert">
    <div class="d-flex align-items-center">
        <div class="font-35 text-danger"><i class="bx bxs-x-circle"></i></div>
        <div class="ms-3">
            <h6 class="mb-0 text-danger">Error</h6>
            <div>{{ session('error') }}</div>
        </div>
    </div>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

<div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 row-cols-xl-4 row-cols-xxl-5 product-grid">
  @forelse ($products as $product)
      <div class="col">
        <div class="card">
          <img src="{{ Storage::url($product->thumbnail) }}" class="card-img-top" alt="..." />
          <div class="card-body">
            <div class="clearfix mb-3">
                <h6 class="card-title cursor-pointer float-start">{{ $product->name }}</h6>
                <p class="mb-0 float-end fw-bold">
                  <span class="me-2 text-secondary">Rp {{ number_format($product->price, 0, ',', '.') }}</span>
                </p>
            </div>
            <div class="d-flex justify-content-center align-items-center gap-3">
              <a href="" class="btn btn-outline-warning mb-3 mb-lg-0" data-bs-toggle="modal" data-bs-target="#modalEdit{{ $product->id }}">Edit</a>
              <a href="" class="btn btn-outline-danger mb-3 mb-lg-0" data-bs-toggle="modal" data-bs-target="#modalDelete{{ $product->id }}">Delete</a>
            </div>
          </div>
        </div>
      </div>
  @empty
      <p>Tidak ada produk dalam kategori ini.</p>
  @endforelse
</div>

  @forelse ($products as $product)
      <!-- Modal Box Edit -->
      <div class="modal fade" id="modalEdit{{ $product->id }}" tabindex="-1"
        aria-labelledby="modalEditLabel{{ $product->id }}" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content radius-8">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalEditLabel{{ $product->id }}">Edit product</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>

                <form method="POST" action="{{ route('products.update', $product->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" value="{{ $product->name }}" name="name">
                        </div>
                        <div class="mb-3">
                          <label class="form-label">Category</label>
                          <select class="form-select" name="category_id">
                            <option value="">Choose Category</option>
                            @forelse ($categories as $category)
                              <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @empty
                                
                            @endforelse
                          </select>
                        </div>
                        <div class="mb-3">
                            <label for="price" class="form-label">Price</label>
                            <input id="price" type="number" class="form-control" value="{{ $product->price }}" name="price">
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Photo Product</label>
                            <input class="form-control mb-2" type="file" id="formFile" name="thumbnail">
                            <img src="{{ Storage::url($product->thumbnail) }}" width="100" alt="thumbnail product wisesa consulting">
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea type="text" class="form-control rich-text" id="description" name="description" rows="3">{{ $product->description }}</textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary radius-6"
                            data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary radius-6">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal Box Delete -->
    <div class="modal fade" id="modalDelete{{ $product->id }}" tabindex="-1" aria-labelledby="modalDeleteLabel{{ $product->id }}" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalDeleteLabel{{ $product->id }}">Delete Data</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Are you sure you want to delete this product?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary radius-8" data-bs-dismiss="modal">Cancel</button>
                    <form method="POST" action="{{ route('products.destroy', $product) }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger radius-8">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
  @empty
    
  @endforelse


  <div class="modal fade" id="modalAddNew" tabindex="-1"
    aria-labelledby="modalAddNewLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content radius-8">
            <div class="modal-header">
                <h5 class="modal-title" id="modalAddNewLabel">Add New Product</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <form method="POST" action="{{ route('products.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Nama..." name="name">
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Category</label>
                      <select class="form-select" name="category_id">
                        <option value="">Choose Category</option>
                        @forelse ($categories as $category)
                          <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @empty
                            
                        @endforelse
                      </select>
                    </div>
                    <div class="mb-3">
                        <label for="harga" class="form-label">Price</label>
                        <input type="number" class="form-control" id="harga" placeholder="Harga..." name="price">
                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Photo Product</label>
                        <input class="form-control" type="file" id="formFile" name="thumbnail">
                    </div>
                    
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea type="text" class="form-control rich-text" id="description" placeholder="Description..." name="description" rows="3"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary radius-6"
                        data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary radius-6">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection