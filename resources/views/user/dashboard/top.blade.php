@extends('user.layouts.dashboard ')
@section('content')
    <div class="col-12 col-lg-12">
        <!-- AREA CHART -->
        <div class="box">
            <div class="box-header with-border">
                <h4 class="box-title">معرف</h4>

            </div>
            <div class="col-6 alert alert-success m-30">@if(\Illuminate\Support\Facades\Auth::user()->intro_code != null){{\Illuminate\Support\Facades\Auth::user()->intro_code}}@else شما کد معرف وارد نکرده اید. @endif</div>

        </div>
        <!-- /.box -->

    </div>


    @endsection
