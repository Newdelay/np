@extends('frontend.app')

@section("content")

    <?php


    if (!empty($referenceCode)) {
        $lastReferenceCode = $referenceCode;
    } elseif (old('sponsor') !== null) {
        $lastReferenceCode = old('sponsor');
    } else {
        $lastReferenceCode = "";
    }
    ?>

    <section data-settings="particles-1"
             class="main-section crumina-flying-balls particles-js bg-1 medium-padding120 responsive-align-center">

        <div class="container">
            <form class="register-form form--dark" id="form" method="post" action="{{ route('newUserPost') }}">
                <div class="row pt80">

                    <div class="col-lg-7 col-md-8 col-sm-12 col-xs-12 mb30">

                        @csrf
                        <header class="crumina-module crumina-heading heading--h2 heading--with-decoration">
                            <h2 class="heading-title">{{ trans('frontend/register.formTitle') }}</h2>
                        </header>
                        <div class="form-group label-floating is-empty">
                            <label for="sponsor" style="display: inline-flex;">{{ trans('frontend/register.sponsor') }}
                                <span>*</span> </label>
                            <input class="form-control input--squared input--dark" name="sponsor" id="sponsor"
                                   type="text" value="{{ $lastReferenceCode }}">
                        </div>
                        <div class="form-group label-floating is-empty">
                            <div class="row">
                                <div class="col-lg-6">
                                    <label>{{ trans('frontend/register.name') }} <span>*</span></label>

                                    <input class="form-control input--squared input--dark" id="firstName"
                                           name="first_name" type="text" value="{{ old('first_name') }}">
                                </div>

                                <div class="col-lg-6">
                                    <label>{{ trans('frontend/register.surName') }} <span>*</span></label>

                                    <input class="form-control input--squared input--dark" id="lastName"
                                           name="last_name" type="text" value="{{ old('last_name') }}">
                                </div>
                            </div>

                        </div>
                        <div class="form-group label-floating is-empty">
                            <div class="row">
                                <div class="col-lg-6">
                                    <label for="username">{{ trans('frontend/register.username') }}
                                        <span>*</span></label>

                                    <input class="form-control input--squared input--dark" id="username" name="username"
                                           value="{{ old('username') }}"
                                           type="text">
                                </div>

                                <div class="col-lg-6">
                                    <label for="email">{{ trans('frontend/register.email') }} <span>*</span></label>

                                    <input class="form-control input--squared input--dark" name="email"
                                           value="{{ old('email') }}" id="email"
                                           type="text">
                                </div>
                            </div>
                        </div>


                        <div class="form-group label-floating is-empty">
                            <label>{{ trans('frontend/register.phoneNumber') }} <span>*</span></label>
                            <div class="row">
                                <div class="col-lg-4">
                                    <select style="width: 100%" name="country_code" id="country_code"
                                            class="woox--select woox--select--dark woox--select-squared language-switcher"
                                            data-minimum-results-for-search="Infinity"
                                            data-dropdown-css-class="language-switcher-dropdown woox--select-squared-dropdown-dark">
                                        <option @if(old('country_code')==90) selected="" @endif value="90">+90</option>
                                        <option @if(old('country_code')==380) selected="" @endif value="380">+380
                                        </option>
                                        <option @if(old('country_code')==49) selected="" @endif value="49">+49</option>
                                        <option @if(old('country_code')==7) selected="" @endif value="7">+7</option>
                                        <option @if(old('country_code')==1) selected="" @endif value="1">+1</option>
                                    </select>
                                </div>

                                <div class="col-lg-8">
                                    <input class="form-control input--squared input--dark" type="text" id="phone_no"
                                           name="phone_no" value="{{ old('phone_no') }}">
                                </div>
                            </div>
                        </div>
                        <div class="form-group label-floating is-empty">
                            <div class="row">
                                <div class="col-lg-6">
                                    <label>{{ trans('frontend/register.password') }} <span>*</span></label>
                                    <input class="form-control input--squared input--dark" name="password1"
                                           id="password1" type="password" value="">
                                </div>

                                <div class="col-lg-6">
                                    <label>{{ trans('frontend/register.confirmPassword') }} <span>*</span></label>
                                    <input class="form-control input--squared input--dark" name="password2"
                                           id="password2" type="password" value="">
                                </div>
                            </div>

                        </div>
                        <div class="form-group label-floating is-empty">
                            <div class="row">
                                <div class="col-lg-6">
                                    <label>{{ trans('frontend/register.country') }} <span>*</span></label>
                                    <select id="countryList" name="country"
                                            class="woox--select woox--select-squared woox--select--dark"
                                            data-dropdown-css-class="woox--select-squared-dropdown-dark">
                                        <option selected disabled
                                                value="">{{ trans('frontend/register.countryList') }}</option>
                                        @if($countryList != null)
                                            @foreach($countryList as $countryDetail)
                                                <option @php echo $countryDetail->id==old('country') ? "selected":"" @endphp value="{{ $countryDetail->id }}">{{ $countryDetail->name }}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>

                                <div class="col-lg-6">
                                    <label>{{ trans('frontend/register.city') }} <span>*</span></label>
                                    <select id="cityList" name="city" data-id="{{ old('city') }}"
                                            class="woox--select woox--select-squared woox--select--dark"
                                            data-dropdown-css-class="woox--select-squared-dropdown-dark">
                                        <option selected disabled
                                                value="">{{ trans('frontend/register.firstSelectCountry') }}</option>
                                    </select>
                                </div>
                            </div>
                        </div>


                        <div class="form-group label-floating is-empty">
                            <div class="row">
                                <div class="col-lg-4">
                                    <label>{{ trans('frontend/register.birthday') }} <span>*</span></label>
                                    <select id="bDay" name="bDay"
                                            class="woox--select woox--select-squared woox--select--dark"
                                            data-dropdown-css-class="woox--select-squared-dropdown-dark">
                                        <option selected disabled value="">{{ trans('frontend/register.day') }}</option>
                                        @for($i=1; $i<=31; $i++)
                                            <option @if(old('bDay')==$i) selected=""
                                                    @endif value="{{ $i }}">{{ $i }}</option>
                                        @endfor

                                    </select>
                                </div>

                                <div class="col-lg-4">
                                    <label> - </label>
                                    <select id="bMonth" name="bMonth"
                                            class="woox--select woox--select-squared woox--select--dark"
                                            data-dropdown-css-class="woox--select-squared-dropdown-dark">
                                        <option selected disabled
                                                value="">{{ trans('frontend/register.month') }}</option>
                                        @for($i=1; $i<=12; $i++)
                                            <option @if(old('bMonth')==$i) selected=""
                                                    @endif value="{{ $i }}">{{ $i }}</option>
                                        @endfor
                                    </select>
                                </div>

                                <div class="col-lg-4">
                                    <label> - </label>
                                    <select id="bYear" name="bYear"
                                            class="woox--select woox--select-squared woox--select--dark"
                                            data-dropdown-css-class="woox--select-squared-dropdown-dark">
                                        <option selected disabled
                                                value="">{{ trans('frontend/register.year') }}</option>
                                        @for($i=1970; $i<=2010; $i++)
                                            <option @if(old('bYear')==$i) selected=""
                                                    @endif value="{{ $i }}">{{ $i }}</option>
                                        @endfor
                                    </select>
                                </div>
                            </div>
                        </div>


                        <div class="checkbox checkbox--style3">
                            <label>{{ trans('frontend/register.contract') }} <span>*</span></label>
                            <div class="agreement">
                                <p>A non-disclosure agreement, also known as a confidentiality agreement, details what
                                    information should not be shared outside of the parties in the agreement. It may
                                    cover information or materials (such as photos) that cannot be shared with third
                                    parties.</p>
                                <p>An example of a non-disclosure agreement is a HIPAA confidentiality agreement. HIPAA
                                    laws mandate that patient information cannot be shared with third parties by a
                                    patient’s healthcare provider. Many medical offices will have these non-disclosure
                                    agreements for vendors, contractors, students, or other non-employees who work with
                                    them.</p>
                                <p>Confidentiality agreements may be used in many other cases, as well. If you are
                                    catering a celebrity event, for example, you might need a non-disclosure agreement
                                    stating that employees may not take or share photos or audio. Our non-disclosure
                                    agreement templates make it easy to make your own.</p>
                            </div>
                            <label class="agree" style="display:none;">
                                <input name="contract" type="checkbox" name="optionsCheckboxes10" @if(isset($inputs['masterNode']) AND !empty($inputs['masterNode'])) {{'checked'}} @endif>
                                {!!trans('frontend/register.contractIAggre',['url'=>1]) !!}
                            </label>

                        </div>

                        <button class="btn btn--large btn--green-light btn--with-icon btn--icon-right full-width">
                            {{ trans('frontend/register.submitButton') }}
                            <svg class="woox-icon icon-arrow-right">
                                <use xlink:href="svg-icons/sprites/icons.svg#icon-arrow-right"></use>
                            </svg>
                        </button>

                    </div>

                    <div class="col-lg-5 col-md-4 col-sm-12 col-xs-12 mb30">
                        <div class="row bg-2">
                            <div class="col-lg-12 col-md-12 col-lg-offset-0 col-sm-12 col-xs-12">
                                <div class="widget w-distribution-ends" style="padding: 20px;">
                                    <h2 id="demo" style="float:left;">${{ @$inputs['myRange'] }}</h2>
                                    <h2 style="float:right;">$1000</h2>
                                    <div class="slidecontainer">
                                        <input type="range" min="100" max="1000" value="{{ @$inputs['myRange'] }}"
                                               name="range" id="myRange">

                                    </div>

                                    <div class="forgot-block">
                                        <div class="checkbox checkbox--style5">
                                            <label>
                                                <input type="checkbox" name="mn" checked>
                                                <p class="checknote">Masternote</p>
                                            </label>
                                        </div>

                                    </div>

                                    <div class="forgot-block">
                                        <div class="checkbox checkbox--style5">
                                            <label>
                                                <input type="checkbox" name="bot" checked class="robot">
                                                <p class="checknote">Robot</p>
                                            </label>
                                        </div>

                                    </div>


                                    <h5 class="title">{{ trans('general.exampleGain') }}</h5>

                                    <div class="row">
                                        <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 mb30">
                                            <div class="form-group label-floating is-empty box">
                                                <h6>{{ trans('general.daily') }}</h6>
                                                <h4 class="daily">${{ @$boxes['boxDaily'] }}</h4>

                                            </div>
                                            <div class="form-group label-floating is-empty greenbox">
                                                <h4 class="master" id="masterdaily">+$0.13</h4>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 mb30">
                                            <div class="form-group label-floating is-empty box">
                                                <h6>{{ trans('general.monthly') }}</h6>
                                                <h4 class="monthly">${{ @$boxes['boxMonthly'] }}</h4>
                                            </div>
                                            <div class="form-group label-floating is-empty greenbox">
                                                <h4 class="master" id="mastermonthly">+$0.13</h4>
                                            </div>
                                        </div>


                                        <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 mb30">
                                            <div class="form-group label-floating is-empty box">
                                                <h6>{{ trans('general.sixMonthly') }}</h6>
                                                <h4 class="sixmonthly">${{ @$boxes['box6Monthly'] }}</h4>
                                            </div>
                                            <div class="form-group label-floating is-empty greenbox">
                                                <h4 class="master" id="mastersixmonthly">+$0.13</h4>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </form>
        </div>

    </section>


@endsection
@section('js')
    <script>

        $(document).ready(function () {


            url = window.location.pathname;
            urlson = url.split('/');

            if (typeof (urlson[2]) != "undefined" && urlson[2] !== null) {

                $.ajax({
                    url: "/sponsorControl",
                    type: "POST",
                    data: {id: $("#sponsor").val(), _token: $("input[name=_token]").val()},
                }).done(function (r) {
                    $('.sponsor-data').remove();
                    if (r != 0) {
                        $('#sponsor').removeClass('input-error');
                        $('#sponsor').addClass('input-success');
                        $('label[for="sponsor"]').append("<a style='margin:5px; margin-top:-5px;' class='btn btn--mini btn--transparent btn--secondary full-width sponsor-data'>Sponsor: " + r + "</a>").fadeIn();
                    } else {
                        $('#sponsor').removeClass('input-success');
                        $('#sponsor').addClass('input-error');
                        $('label[for="sponsor"]').append("<a style='margin:5px; margin-top:-5px;' class='btn btn--mini btn--transparent btn--secondary full-width sponsor-data'>Sponsor Bulunamadı</a>").fadeIn();
                    }
                });
            }


            //$( "#sponsor" ).bind("change keyup keypress", function() {
            $("#sponsor").bind("change", function () {
                $.ajax({
                    url: "/sponsorControl",
                    type: "POST",
                    data: {id: $("#sponsor").val(), _token: $("input[name=_token]").val()},
                }).done(function (r) {
                    $('.sponsor-data').remove();
                    if (r != 0) {
                        $('#sponsor').removeClass('input-error');
                        $('#sponsor').addClass('input-success');
                        $('label[for="sponsor"]').append("<a style='margin:5px; margin-top:-5px;' class='btn btn--mini btn--transparent btn--secondary full-width sponsor-data'>Sponsor: " + r + "</a>").fadeIn();
                    } else {
                        $('#sponsor').removeClass('input-success');
                        $('#sponsor').addClass('input-error');
                        $('label[for="sponsor"]').append("<a style='margin:5px; margin-top:-5px;' class='btn btn--mini btn--transparent btn--secondary full-width sponsor-data'>Sponsor Bulunamadı</a>").fadeIn();
                    }
                });
            });


            $('#sponsor').change();


            $("#username").bind("change", function () {
                $.ajax({
                    url: "/usernameControl",
                    type: "POST",
                    data: {id: $("#username").val(), _token: $("input[name=_token]").val()},
                }).done(function (r) {
                    $('.username-data').remove();
                    if (r != 0) {

                        $('#username').removeClass('input-error');
                        $('#username').addClass('input-success');
                        //$('label[for="username"]').append("<a class='username-data'>available</a>").fadeIn();
                    } else {
                        $('#username').removeClass('input-success');
                        $('#username').addClass('input-error');
                        $('label[for="username"]').append("<a class='username-data' style='margin-left:5px; color:#ffba00;'>Not available</a>").fadeIn();
                    }
                });
            });

            $("#email").bind("change", function () {
                $.ajax({
                    url: "/emailControl",
                    type: "POST",
                    data: {id: $("#email").val(), _token: $("input[name=_token]").val()},
                }).done(function (r) {
                    $('.email-data').remove();
                    if (r != 0) {
                        $('#email').removeClass('input-error');
                        $('#email').addClass('input-success');
                    } else {
                        $('#email').removeClass('input-success');
                        $('#email').addClass('input-error');
                        $('label[for="email"]').append("<a class='email-data' style='margin-left:5px; color:#ffba00;'>Not available</a>").fadeIn();
                    }
                });
            });

            $("#firstName").bind("keyup keypress", function () {
                firstName = $("#firstName").val();
                if (firstName.length > 3) {
                    $('#firstName').removeClass('input-error');
                    $('#firstName').addClass('input-success');
                } else {
                    $('#firstName').removeClass('input-success');
                    $('#firstName').addClass('input-error');
                }
            });

            $("#lastName").bind("keyup keypress", function () {

                lastName = $("#lastName").val();
                if (lastName.length > 3) {
                    $('#lastName').removeClass('input-error');
                    $('#lastName').addClass('input-success');

                } else {
                    $('#lastName').removeClass('input-success');
                    $('#lastName').addClass('input-error');
                }
            });


            $("#phone_no").bind("keyup keypress", function () {
                phoneCode = $("#phone_no").val();
                if (phoneCode.length > 3) {
                    $('#phone_no').removeClass('input-error');
                    $('#phone_no').addClass('input-success');
                    $('#country_code').removeClass('input-error');
                    $('#country_code').addClass('input-success');
                } else {
                    $('#phone_no').removeClass('input-success');
                    $('#phone_no').addClass('input-error');
                    $('#country_code').removeClass('input-success');
                    $('#country_code').addClass('input-error');
                }
            });


            $("#country_code").bind("change", function () {
                $('.select2').eq(1).addClass('input-success');
            });

            $("#bDay").bind("change", function () {

                $('.select2').eq(4).addClass('input-success');
            });


            $("#bMonth").bind("change", function () {
                $('.select2').eq(5).addClass('input-success');
            });


            $("#bYear").bind("change", function () {
                $('.select2').eq(6).addClass('input-success');
            });


            $('#password1, #password2').bind("keyup keypress", function () {

                password1 = $("#password1").val();
                password2 = $("#password2").val();
                if (password1 === password2) {
                    $('#password1').removeClass('input-error');
                    $('#password1').addClass('input-success');
                    $('#password2').removeClass('input-error');
                    $('#password2').addClass('input-success');
                } else {
                    $('#password1').removeClass('input-success');
                    $('#password1').addClass('input-error');
                    $('#password2').removeClass('input-success');
                    $('#password2').addClass('input-error');
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
                    $('.select2').eq(2).addClass('input-success');
                    $('.select2').eq(3).addClass('input-success');
                    $('#cityList').find("option").remove();
                    $('#cityList').append(r);
                });
            });

            if ($('#countryList').val() != null) {
                $('#countryList').change();
            }


            $(".agreement").scroll(function (event) {

                if ($(".agreement").scrollTop() > 200) {
                    $(".agree").fadeIn();
                } else {
                    $(".agree").fadeOut();
                }


            });

            var slider = document.getElementById("myRange");
            var output = document.getElementById("demo");

            output.innerHTML = slider.value; // Display the default slider value
            output.innerHTML = "$<?php echo $inputs['myRange']?>";
            // Update the current slider value (each time you drag the slider handle)
            slider.oninput = function () {
                output.innerHTML = "$" + this.value;
            };

            var x = document.getElementById("myRange").step = "10";

            $("#form").change(function () {
                robots();
                var dolars = $("#myRange").val();
                var monthly = (dolars * 4) / 100;
                var daily = (monthly / 30);
                var sixmonthly = monthly * 6;

                $(".daily").html("$" + daily.toFixed(2));
                $(".monthly").html("$" + monthly.toFixed(2));
                $(".sixmonthly").html("$" + sixmonthly.toFixed(2));

            });

            function robots() {
                var robot = $(".robot")[0].checked;

                var robotpercent = 0;
                if (robot) {
                    $("#masterdaily").parent().fadeIn();
                    $("#mastermonthly").parent().fadeIn();
                    $("#mastersixmonthly").parent().fadeIn();

                    robotpercent = $("#myRange").val() * 6 / 100;
                    robotdaily = (robotpercent / 30).toFixed(2);
                    robotmonthly = (robotpercent).toFixed(2);
                    robotsixmonthly = (robotpercent * 6).toFixed(2);
                } else {
                    $("#masterdaily").parent().fadeOut();
                    $("#mastermonthly").parent().fadeOut();
                    $("#mastersixmonthly").parent().fadeOut();
                }

                $("#masterdaily").html("+$" + robotdaily);
                $("#mastermonthly").html("+$" + robotmonthly);
                $("#mastersixmonthly").html("+$" + robotsixmonthly);

            }

            robots();


        });

    </script>
@endsection