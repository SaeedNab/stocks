@extends('user.layouts.auth')
@section('content')
    <div class="container h-p100" style="text-align: center">
        <div class="row align-items-center justify-content-md-center h-p100">
            <div class="col-12">
                <div class="row no-gutters justify-content-md-center">
                    <div class="col-lg-4 col-md-5 col-12">
                        <div class="content-top-agile h-p100">
                            <h2>Get started <br> with Us</h2>
                            <p class="text-white">Register a new membership</p>

                            <div class="text-center text-white">
                                <p class="mt-20">- Register With -</p>
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
                        <div class="p-40 bg-white content-bottom">
                            @if(count($errors)>0)
                                @foreach($errors->all() as $error)
                                    <div class="alert alert-danger">{{$error}}</div>
                                @endforeach
                            @endif
                            <form action="{{route('user.auth.register')}}" method="post" class="form-element">
                                @csrf
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-info border-info"><i class="ti-user"></i></span>
                                        </div>
                                        <input type="text" class="form-control pl-15" placeholder="نام" name="name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-info border-info"><i class="ti-user"></i></span>
                                        </div>
                                        <input type="text" class="form-control pl-15" placeholder="نام خانوادگی" name="last_name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-info border-info"><i class="ti-email"></i></span>
                                        </div>
                                        <input type="email" class="form-control pl-15" placeholder="ایمیل" name="email">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-info border-info"><i class="ti-lock"></i></span>
                                        </div>
                                        <input type="text" class="form-control pl-15" placeholder="شماره ملی" name="nation_code">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-info border-info"><i class="ti-lock"></i></span>
                                        </div>
                                        <input type="text" class="form-control pl-15" placeholder="شماره تماس" name="phone_number">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="checkbox">
                                            <input type="checkbox" id="basic_checkbox_1" >
                                            <label for="basic_checkbox_1">با قوانین موافقم <a href="#" class="text-warning"></a></label>
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
                                <p class="mt-15 mb-0">قبلا ثبت نام کرده اید؟<a href="{{route('user.auth.login_form')}}" class="text-danger ml-5"> ورود</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
