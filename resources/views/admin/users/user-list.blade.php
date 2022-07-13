@extends('layout.master')
@section('content')
<div class="container">
    <div>Tên lớp: {{$class_name}}</div>
    {{-- {{var_dump($user_list)}} --}}
    {{-- {{dd($user_list)}} --}}
    <table class="table">
        <thead>
            <tr>
                <th>Tên</th>
                <th>Tuổi</th>
                <th>Địa chỉ</th>
                <th>SĐT</th>
                <th>Email</th>
                <th>Trạng thái</th>
            </tr>
        </thead>
        <tbody>
            {{-- bắt đầu với ký tự @ --}}
            @foreach ($user_list as $item)
                <tr>
                    <td>{{$item['name']}}</td>
                    <td>{{$item['age']}}</td>
                    <td>{{$item['address']}}</td>
                    <td>{{$item['phone']}}</td>
                    <td>{{$item['email']}}</td>
                    @if ($item['status'] === 1)
                        <td>Kích hoạt</td>
                    @else
                        <td>Không kích hoạt</td>
                    @endif
                    <td>{{$item['status'] ? 'Kích hoạt' : 'Không kích hoạt'}}</td>

                    <td> <Button class=""  >  </Button> </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection