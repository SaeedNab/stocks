@extends('user.layouts.dashboard ')
@section('content')
    <div class="col-12 col-lg-12">
        <!-- AREA CHART -->
        <div class="box">
            <div class="box-header with-border">
                <h4 class="box-title">زیر مجموعه ها</h4>

            </div>
            <div class="container" dir="rtl">
                <form action="/action_page.php">
                    <div class="row">
                        <div class="col-25" >
                        </div>
                        <div class="col-75">
                            <input type="text" id="fname" name="firstname" placeholder="مبلغ مورد نظر">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                        </div>
                        <div class="col-75">
                            <input type="text" id="lname" name="lastname" placeholder="شماره تماس" maxlength="11">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                        </div>
                        <div class="col-75">
                            <select id="country" name="country">
                                <option value="australia">6037</option>
                                <option value="canada">6868</option>
                                <option value="usa">86868</option>
                            </select>
                        </div>
                    </div>
                    <div class="row" dir="rtl">
                        <div class="col-25">
                        </div>
                        <div class="col-75">
                            <textarea id="subject" name="subject" placeholder="نوشتن توضیحات" style="height:200px"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <input type="submit" value="ارسال">
                    </div>
                </form>
            </div>
        </div>
        <!-- /.box -->

    </div>


    @endsection
