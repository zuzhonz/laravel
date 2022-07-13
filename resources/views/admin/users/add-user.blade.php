@extends('layout.master')

@section('title', 'Đăng ký thông tin')

@section('content')
    <form action="{{ route('admin.add') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="">Name</label>
            <input type="text" name="name" class="form-control">
        </div>
      
        <div class="form-group">
            <label for="">Email</label>
            <input type="email" name="email" class="form-control">
        </div>

        <div class="form-group">
            <label for="">Address</label>
            <input type="text" name="address" class="form-control">
        </div>

        <div class="form-group">
            <label for="">Phone</label>
            <input type="text" name="phone" class="form-control">
        </div>

        <div class="form-group">
            <label for="">Age</label>
            <input type="number" name="age" class="form-control">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-success">Đăng ký</button>
        </div>

        <div class="form-group">
            {{-- <label for="">Status</label> --}}
            <input type="hidden"  name="status" value="1"  class="form-control">
        </div>

    </form>
@endsection