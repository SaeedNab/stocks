@extends('admin.layouts.dashboard ')
@section('content')
    <div class="container bg-white p-30">
        <h2>Contextual Classes</h2>
        <p>Contextual classes can be used to color table rows or table cells. The classes that can be used are: .active, .success, .info, .warning, and .danger.</p>
        <table class="table table-striped" id="table_id">
            <thead>
            <tr>
                <th>نام</th>
                <th>نام خانوادگی</th>
                <th>کد ملی</th>
                <th>شماره ی موبایل</th>
                <th>وضعیت</th>
                <th>مشاهده</th>
            </tr>
            </thead>
            <tbody>
            @foreach($admins->all() as $admin)
                <tr>
                    <td>{{$admin->name}}</td>
                    <td>{{$admin->family}}</td>
                    <td>{{$admin->nation_code}}</td>
                    <td>{{$admin->phone_number}}</td>
                    <td>فعال</td>
                    <td><a href="#" class="btn btn-lg"><i class="fa fa-address-card" aria-hidden="true"></i></a><a href="{{route('admin.admins.delete_admin',$admin->id)}}" class="btn btn-lg"><i class="fa fa-trash" aria-hidden="true"></i></a><a href="{{route('admin.admins.update_admin',$admin->id)}}" class="btn btn-lg"><i class="fa fa-edit" aria-hidden="true"></i></a> </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection
