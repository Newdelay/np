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
        <form action="{{ route('myProfilePost') }}" method="post">
            @csrf
            <section class="bg-hexagons-dark">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="firstName5">{{ trans('backend/user.identity') }}:</label>
                            <input type="text" class="form-control" id="firstName5" name="identity"
                                   value="{{ Sentinel::getUser()->identity }}"></div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="lastName1">{{ trans('backend/user.phone') }} :</label>
                            <input type="text" class="form-control" id="lastName1" name="telephone"
                                   value="{{ Sentinel::getUser()->telephone }}"></div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="lastName1">{{ trans('backend/user.birthday') }} :</label>
                            <input type="text" class="form-control" id="lastName1" name="birtday"
                                   value="{{ date('d/m/Y', strtotime(Sentinel::getUser()->birthday))}}"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="firstName5">{{ trans('backend/user.firstName') }}:</label>
                            <input disabled type="text" class="form-control" id="firstName5" name="first_name"
                                   value="{{ Sentinel::getUser()->first_name }}"></div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="lastName1">{{ trans('backend/user.lastName') }} :</label>
                            <input disabled type="text" class="form-control" id="lastName1" name="last_name"
                                   value="{{ Sentinel::getUser()->last_name }}"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="phoneNumber1">{{ trans('backend/user.username') }} :</label>
                            <input type="text" class="form-control" id="phoneNumber1" name="username"
                                   value="{{ Sentinel::getUser()->username }}"></div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="phoneNumber1">{{ trans('backend/user.eMail') }} :</label>
                            <input type="tel" class="form-control" id="phoneNumber1" name="email"
                                   value="{{ Sentinel::getUser()->email }}"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="phoneNumber1">{{ trans('backend/user.country') }} :</label>
                            <select class="custom-select form-control" id="countryList" name="country">
                                @if(isset($countryList) AND !empty($countryList))
                                    @foreach($countryList as $countryDetail)
                                        @if(!empty($countryDetail->status))
                                            <option @php echo $countryDetail->id==Sentinel::getUser()->country ? 'selected':'' @endphp value="{{ $countryDetail->id }}">{{ $countryDetail->name }}</option>
                                        @endif
                                    @endforeach
                                @endif
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="phoneNumber1">{{ trans('backend/user.city') }} :</label>
                            <select class="custom-select form-control" id="cityList"
                                    data-id="{{Sentinel::getUser()->city}}" name="city">
                                <option value="">Select Counrty</option>
                            </select>
                        </div>
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

            $('#countryList').bind("change", function () {
                $.ajax({
                    url: "/cityList",
                    type: "POST",
                    data: {
                        id: $("#countryList option:selected").val(),
                        ciyt_id: $("#cityList").attr('data-id'),
                        _token: $("input[name=_token]").val()
                    },
                }).done(function (r) {
                    $('#cityList').find("option").remove();
                    $('#cityList').append(r);
                });
            });

            if ($('#countryList').val() != null) {
                $('#countryList').change();
            }

        });

    </script>
@endsection