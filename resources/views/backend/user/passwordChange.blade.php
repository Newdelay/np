@extends("backend.layouts.app")
@section('content')
    <section class="content-header">
        <h1>
            {{ trans('backend/sidebar.myProfile') }}
        </h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#"><i
                            class="fa fa-dashboard"></i> {{ trans('backend/sidebar.dashboard') }}</a></li>
            <li class="breadcrumb-item"><a href="/">{{ trans('backend/sidebar.myTeam') }}</a></li>
            <li class="breadcrumb-item active">{{ trans('backend/sidebar.myProfile') }}</li>
        </ol>
    </section>
    <section class="content">

        <div class="row">
            <div class="col-lg-3 col-12">

                <!-- Profile Image -->
                <div class="box bg-inverse bg-dark bg-hexagons-white">
                    <div class="box-body box-profile">
                        <img class="profile-user-img rounded-circle img-fluid mx-auto d-block"
                             src="../../../images/5.jpg" alt="User profile picture">
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
            <div class="col-lg-9 col-12">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="box pull-up">
                            <div class="box-body">
                                <div class="media align-items-center p-10">
                                    <span class="text-yellow">{{ trans('backend/user.sponsor') }}: </span> {{ $sponsorName ." (".$sponsorCode.")" }}
                                </div>
                                <div class="media align-items-center p-10">
                                    <span class="text-yellow">{{ trans('backend/user.investment') }}: </span>
                                    ${{ Sentinel::getUser()->investment }}
                                </div>
                                <div class="media align-items-center p-10">
                                    <span class="text-yellow">{{ trans('backend/user.investmentDate') }}: </span> {{ Sentinel::getUser()->investment_date }}
                                </div>

                                <div class="media align-items-center p-10">

                                    <div class="col-lg-8 pl-0">
                                        <input type="text" class="form-control" id="copyText"
                                               value="{{route('register',Sentinel::getUser()->reference_code)}}">
                                    </div>
                                    <div class="col-lg-4">
                                        <button type="button" id="copyButton" class="btn btn-block btn-warning btn-lg">
                                            KOPYALA
                                        </button>
                                    </div>


                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.nav-tabs-custom -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->

    </section>
    <!-- Main content -->
    <section class="content">
        <form action="{{ route('postPasswordChange') }}" method="post">
            @csrf
            <section class="bg-hexagons-dark">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="oldpassword">{{ trans('backend/user.oldPassword') }}:</label>
                            <input type="password" class="form-control" id="oldpassword" name="oldpassword"
                                   value=""></div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="password1">{{ trans('backend/user.password') }} :</label>
                            <input type="password" class="form-control" id="password1" name="password1"
                                   value=""></div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="password2">{{ trans('backend/user.confirmPassword') }} :</label>
                            <input type="password" class="form-control" id="password2" name="password2"
                                   value=""></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <button type="submit"
                                class="btn btn-block btn-warning btn-lg">{{ trans('backend/general.submit') }}</button>
                    </div>
                </div>

            </section>
            <!-- Step 2 -->
        </form>
    </section>


@endsection

@section('js')
    <script>

        $(document).ready(function () {
            toastr.options = {
                "debug": false,
                "positionClass": "toast-top-right",
                "onclick": null,
                "fadeIn": 300,
                "fadeOut": 1000,
                "timeOut": 5000,
                "extendedTimeOut": 1000,
                "progressBar": true,
            };


            $('#copyButton').bind("click", function () {

                var copyText = document.getElementById("copyText");

                copyText.select();
                document.execCommand("copy");
                if (document.execCommand("copy")) {
                    toastr.success("<?php echo trans('backend/user.copied'); ?>.", "");
                }
            });
        });

    </script>
@endsection