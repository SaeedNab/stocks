@extends('admin.layouts.dashboard ')
@section('content')
    <div class="container">
        <h2>Contextual Classes</h2>
        <p>Contextual classes can be used to color table rows or table cells. The classes that can be used are: .active, .success, .info, .warning, and .danger.</p>
        <table class="table">
            <thead>
            <tr>
                <th>نام</th>
                <th>نام خانوادگی</th>
                <th>کد ملی</th>
                <th>شماره ی موبایل</th>
                <th>وضعیت</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users->all() as $user)
            <tr>
                <td>{{$user->name}}</td>
                <td>{{$user->family}}</td>
                <td>{{$user->nation_code}}</td>
                <td>{{$user->phone_number}}</td>
                <td><a href="#" class="btn btn-sm btn-danger">رد کردن</a><a href="#" class="btn btn-sm btn-success">تایید کردن</a></td>
            </tr>
@endforeach
            </tbody>
        </table>
    </div>

    @endsection
