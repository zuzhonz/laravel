@extends('layout.master')
@section('content')
<div class="container">
    {{-- {{ dd($users) }} --}}
    <table class="table">
        <thead>
            <tr> 
              <td> <a class="btn btn-primary" href="{{route('admin.users.create')}}"> Create </a> </td>    
            </tr>
            <tr>
                <th>id</th>
                <th>Tên</th>
                <th>Email</th>
                <th>Họ tên</th> 
                <th>Ảnh Đại Diện</th>
                <th>Quyền Hạn</th>
                <th>Trạng thái</th>
               <th colspan="2"> Action </th> 
            </tr>
        </thead>
        <tbody>
             @foreach ($users as $item)
              <tr>
                <td> {{ $item->id }}</td>
                 <td> {{ $item->name }} </td>
                 <td> {{ $item->email }} </td>
                 <td> {{ $item->username }} </td>
                 <td>  <img src="{{ asset( $item->avatar) }}" height="100" width="100" alt=""> </td>
                 <td>
                    
                        @foreach ($roles as $role) 
                            @if($role->id == $item->role)
                             {{ $role->name }} 
                             @endif
                        @endforeach 
                       
                  </td>


                 <td> {{ $item->status == 1 ? 'Mở' : 'NA'  }} </td>
                 <td> 
                     <a  class="btn btn-success" href="{{route('admin.users.edit',['user'=> $item->id])}}">Update</a>
                 </td>
                 <td>
                    <form action="{{ route('admin.users.destroy', ['user' => $item->id]) }}" method="POST">
                        @csrf
                    
                        @method('DELETE')
                    
                        <button type="submit" class="btn btn-danger btn-block">Delete</button>
                    </form>
                 </td>

              </tr>
             @endforeach
        </tbody>
    </table>
    <div>
       {{$users->links()}}
    </div> <br>
</div>
@endsection