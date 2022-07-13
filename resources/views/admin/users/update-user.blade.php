@extends('layout.master')

@section('title', 'Cập nhật thông tin')

@section('content')
    <form action="" method="GET">
      
        @foreach ($list as $item)

        @if ($old_name == $item['name'] )
    
        <div class="form-group">
            <label for="">Name</label>
            <input type="text" name="name" class="form-control" value="{{$item['name']}}"  >
        </div>
      
        <div class="form-group">
            <label for="">Email</label>
            <input type="email" name="email" class="form-control" value="{{$item['email']}}" >
        </div>

        <div class="form-group">
            <label for="">Address</label>
            <input type="text" name="address" class="form-control" value="{{$item['address']}}" >
        </div>

        <div class="form-group">
            <label for="">Phone</label>
            <input type="text" name="phone" class="form-control" value="{{$item['phone']}}" >
        </div>

        <div class="form-group">
            <label for="">Age</label>
            <input type="number" name="age" class="form-control" value="{{$item['age']}}" >
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-success">Cập Nhật</button>
        </div>

        <div class="form-group">
            {{-- <label for="">Status</label> --}}
            <input type="hidden"  name="status" value="1"  class="form-control">
        </div>
        
        @endif




        @endforeach

        {{-- @if (  == $old_name )
            
        <div class="alert alert-danger" role="alert">
            thông báo không tìm thấy tên !!
        </div>

        @endif --}}


          

          
    </form>
@endsection