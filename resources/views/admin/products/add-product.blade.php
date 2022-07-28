@extends('layout.master')

@section('title', 'Thêm mới sản phẩm')

@section('content')
    <form action="{{isset($product->id) ? route('admin.products.update', ['product' => $product->id]) : route('admin.products.store') }}" method="POST" enctype="multipart/form-data" >
        @csrf
        @if (isset($product->id))
            @method('PUT')
        @endif

        <div class="form-group">
            <label for="">Name</label>
            <input type="text" name="name" class="form-control" value="{{ isset($product->name) ?  $product->name : '' }}">
        </div> 

        <div class="form-group">
            <label for="">Price</label>
            <input type="text" name="price" class="form-control" value="{{ isset($product->price) ?  $product->price : '' }}">
        </div> 

        <div class="form-group">
            <label for="formFile" class="form-label">Thumbnail</label>
            <input class="form-control" type="file" name="thumbnail_url" id="formFile">
             
          @if (isset($product->id))
            <img src="{{asset($product->thumbnail_url)}}" alt="..." width="150" class="img-thumbnail">  
           @endif
        </div> 
        
        

      <div class="form-group">
        <label for="formFile" class="form-label">Status</label>
        {{-- <input class="form-control" type="number" name="status"  value="1"  > --}}

        <select class="form-select" name="status" aria-label="Default select example">
          
            
           
            <option selected hidden > {{(isset($product->status) && $product->status == 2) ? 'NA' : 'Active'}} </option>


            <option  value="1">Active</option>

            <option value="2"> N/A </option>
          </select>
    </div>

        <div class="form-group">
            <button type="submit" class="btn btn-success"> {{ isset($product->id) ? 'Update' : 'Create' }} </button>
        </div>


    </form>
@endsection