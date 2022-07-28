@extends('layout.master')
@section('title','Danh sách sản phẩm')
@section('content')
<div class="container"> 
   {{-- Danh sách người dùng --}}
   <table class="table">
    <thead>
      <tr>
        <td >
        <a href="{{ route('admin.products.create') }}" type="button" class="btn btn-warning"> Create + </a>
        </td>
        <td>
          <form method="POST" action="{{ route('admin.products.search')}}">
            @csrf
            <div class="d-flex">
              <input class="form-control mr-2" name="name">
              <button type="submit" class="btn btn-primary"> Search </button>
            </div>
        </form>
        
      </td>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">NAME</th>
        <th scope="col">PRICE</th>
        <th scope="col">THUMBNAIL</th>
        <th scope="col">STATUS</th>
        <th colspan="2" >ACTION</th>
      </tr>
    </thead>
    <tbody>
      
        @foreach ($products as $item)
           <tr>
              <td> {{ $item->id}} </td>
              <td> {{ $item->name}} </td>
              <td> {{ $item->price}} </td>
              <td> <img src="{{asset($item->thumbnail_url)}}" width="150" alt=""> </td>
              <td> 
                <form method="post" class="delete_form" action="{{route('admin.products.status',$item->id)}}">
                   @method('PUT')
                   @csrf
                   <input type="hidden" name="status"  value="{{$item->status}}" >
                  <button type="submit" class="btn {{ $item->status == 1 ? "btn-success" : "btn-danger" }} "> {{ $item->status == 1 ? 'Còn hàng' : 'Hết hàng' }} </button>
                </form>
              </td>
              <td> 
                <form method="post" class="delete_form" action="{{route('admin.products.destroy',$item->id)}}">
                   @method('DELETE')
                   @csrf
                  <button type="submit" class="btn btn-danger"> Delete </button>
                </form>
              </td>
              <td>
                <a href="{{route('admin.products.edit',$item->id)}}" class="btn btn-success"> Update </a>

              </td>
           </tr>
        @endforeach
    </tbody>
  </table>
</div>
@endsection