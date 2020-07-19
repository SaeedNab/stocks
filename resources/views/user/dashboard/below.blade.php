@extends('user.layouts.dashboard ')
@section('content')
    <div class="col-12 col-lg-12">
        <!-- AREA CHART -->
        <div class="box">
            <div class="box-header with-border">
                <h4 class="box-title">زیر مجموعه ها</h4>

            </div>
            <div class="container bg-white p-30" >
                <h2>Hover Rows</h2>
                <p>The .table-hover class enables a hover state on table rows:</p>
                <table class="table table-striped" id="table_id">
                    <thead>
                    <tr>
                        <th>کد زیر مجموعه</th>
                        <th>تاریخ عضویت</th>
                        <th>مبلغ واریز شده</th>
                        <th>نام خانوادگی</th>
                        <th>پورسانت</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>John</td>
                        <td>Doe</td>
                        <td>john@example.com</td>
                        <td>john@example.com</td>
                        <td>john@example.com</td>

                    </tr>
                    <tr>
                        <td>Mary</td>
                        <td>Mary</td>
                        <td>Moe</td>
                        <td>Moe</td>
                        <td>Moe</td>


                    </tr>
                    <tr>
                        <td>July</td>
                        <td>July</td>
                        <td>Dooley</td>
                        <td>Dooley</td>
                        <td>Dooley</td>


                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- /.box -->

    </div>


    @endsection
