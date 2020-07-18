@extends('admin.layouts.auth')
@section('content')

    <div class="container h-p100">
        <div class="row align-items-center justify-content-md-center h-p100">
            <div class="col-12">
                <div class="row no-gutters justify-content-md-center">
                    <div class="col-lg-4 col-md-5 col-12">
                        <div class="content-top-agile h-p100">
                            <h2>Get started <br> with Us</h2>
                            <p class="text-white">Sign in to start your session</p>

                            <div class="text-center text-white">
                                <p class="mt-20">- Sign With -</p>
                                <p class="gap-items-2 mb-20">
                                    <a class="btn btn-social-icon btn-outline btn-white" href="#"><i class="fa fa-facebook"></i></a>
                                    <a class="btn btn-social-icon btn-outline btn-white" href="#"><i class="fa fa-twitter"></i></a>
                                    <a class="btn btn-social-icon btn-outline btn-white" href="#"><i class="fa fa-google-plus"></i></a>
                                    <a class="btn btn-social-icon btn-outline btn-white" href="#"><i class="fa fa-instagram"></i></a>
                                </p>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-5 col-md-5 col-12">
                        <div class="p-40 bg-white content-bottom h-p100">
                            @if(count($errors)>0)
                                @foreach($errors->all() as $error)
                                    <div class="alert alert-danger">{{$error}}</div>
                                @endforeach
                            @endif
                            @if(session('wrong_details'))
                                <div class="alert alert-danger">{{session('wrong_details')}}</div>
                            @endif
                            <form action="{{route('admin.auth.login')}}" method="post" class="form-element">
                                @csrf
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-info border-info"><i class="ti-user"></i></span>
                                        </div>
                                        <input type="text" class="form-control pl-15" placeholder="کد ملی" name="username">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-info border-info"><i class="ti-lock"></i></span>
                                        </div>
                                        <input type="password" class="form-control pl-15" placeholder="کلمه عبور" name="password">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="checkbox">
                                            <input type="checkbox" id="basic_checkbox_1" >
                                            <label for="basic_checkbox_1">ذخیره کلمه عبور</label>
                                        </div>
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-6">
                                        <div class="fog-pwd text-right">
                                            <a href="{{route('admin.auth.forget_password')}}"><i class="ion ion-locked"></i> فراموشی کلمه ی عبور</a><br>
                                        </div>
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-12 text-center">
                                        <button type="submit" class="btn btn-info btn-block margin-top-10">ورود</button>
                                    </div>
                                    <!-- /.col -->
                                </div>
                            </form>

                            <div class="text-center">
                                <p class="mt-15 mb-0">حساب کاربری ندارید؟ <a href="auth_register.html" class="text-info ml-5">ثبت نام</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- jQuery 3 -->

@endsection
