@extends('admin.layouts.dashboard ')
@section('content')
    <div class="container bg-white p-30">

        <h2>ایجاد مدیر</h2>
        @if(count($errors)>0)
            @foreach($errors->all() as $error)
                <div class="alert alert-danger">{{$error}}</div>
            @endforeach
        @endif
        <form action="{{route('admin.admins.edit_admin',$admin->id)}}" class="was-validated" method="post">
            @csrf
            <div class="form-group">
                <label for="first_name">نام:</label>
                <input type="text" class="form-control" id="first_name" placeholder="Enter username" name="first_name" required value="{{old('first_name',$admin->name)}}">
                <div class="valid-feedback">صحیح</div>
                <div class="invalid-feedback">لطفا ایم فیلد را پر نمایید</div>
            </div>
            <div class="form-group">
                <label for="last_name">نام خانوادگی:</label>
                <input type="text" class="form-control" id="last_name" placeholder="Enter username" name="last_name" required value="{{old('last_name',$admin->family)}}">
                <div class="valid-feedback">صحیح</div>
                <div class="invalid-feedback">لطفا ایم فیلد را پر نمایید</div>
            </div>
            <div class="form-group">
                <label for="username">نام کاربری:</label>
                <input type="text" class="form-control" id="username" placeholder="Enter username" name="username" required value="{{old('username',$admin->username)}}">
                <div class="valid-feedback">صحیح</div>
                <div class="invalid-feedback">لطفا ایم فیلد را پر نمایید</div>
            </div>
            <div class="form-group">
                <label for="nation_code">کد ملی:</label>
                <input type="text" class="form-control" id="nation_code" placeholder="Enter username" name="nation_code" required value="{{old('nation_code',$admin->nation_code)}}">
                <div class="valid-feedback">صحیح</div>
                <div class="invalid-feedback">لطفا ایم فیلد را پر نمایید</div>
            </div>
            <div class="form-group">
                <label for="phone_number">شماره موبایل:</label>
                <input type="text" class="form-control" id="phone_number" placeholder="Enter username" name="phone_number" required value="{{old('phone_number',$admin->phone_number)}}">
                <div class="valid-feedback">صحیح</div>
                <div class="invalid-feedback">لطفا ایم فیلد را پر نمایید</div>
            </div>
            <div class="form-group">
                <label for="email">ایمیل:</label>
                <input type="text" class="form-control" id="email" placeholder="Enter username" name="email" required value="{{old('email',$admin->email)}}">
                <div class="valid-feedback">صحیح</div>
                <div class="invalid-feedback">لطفا ایم فیلد را پر نمایید</div>
            </div>


            <button type="submit" class="btn btn-primary">ایجاد</button>
        </form>
    </div>

@endsection
