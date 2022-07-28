@extends('layout.master')

@section('title', 'Đăng ký thông tin')

@section('content')
    <form action="{{isset($user->id) ? route('admin.users.update', ['user' => $user->id]) : route('admin.users.store') }}" method="POST" enctype="multipart/form-data" >
        @csrf
        @if (isset($user->id))
            @method('PUT')
        @endif

        <div class="form-group">
            <label for="">Name</label>
            <input type="text" name="name" class="form-control" value="{{ isset($user->name) ?  $user->name : '' }}">
        </div> 

        <div class="form-group">
            <label for="">User Name</label>
            <input type="text" name="username" class="form-control" value="{{ isset($user->username) ? $user->username : '' }}">
        </div>
      
        <div class="form-group">
            <label for="">Email</label>
            <input type="email" name="email" class="form-control" value="{{ isset($user->email) ? $user->email : '' }}" >
        </div>

        <div class="form-group">
            <label for="">Password</label>
            <input type="Password" name="password" class="form-control" value="{{ isset($user->password) ? $user->password : ''}}">
        </div>

        <div class="form-group">
            <label for="">Code</label>
            <input type="text" name="code" class="form-control" value="{{ isset($user->code) ? $user->code : $code }}">
        </div>

        <div class="form-group">
            <label for="formFile" class="form-label">Avatar</label>
            <input class="form-control" type="file" name="avatar" id="formFile">
             
          @if (isset($user->id))
            <img src="{{asset($user->avatar)}}" alt="..." width="150" class="img-thumbnail">  
           @endif
        </div> 
        
        




      <div class="form-group"> 
        <label for="formFile" class="form-label">Role</label>
        <select class="form-control" name="role">
            <option value="0">Open this select role </option>
            @foreach ($roles as $role)
            <option value="{{$role->id}}" {{isset($user->role) == $role->id ? 'selected' : ''  }} >{{$role->name}}</option>
            @endforeach
        </select>
      </div> 


      <div class="form-group">
        <label for="formFile" class="form-label">Status</label>
        <input class="form-control" type="number" name="status"  value="1"  >
    </div>

      
        

        <div class="form-group">
            <button type="submit" class="btn btn-success"> {{ isset($user->id) ? 'Update' : 'Create' }} </button>
        </div>


    </form>
@endsection