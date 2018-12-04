@extends('frontend.app')

@section("content")

    <section data-settings="particles-1"
             class="main-section crumina-flying-balls particles-js bg-1 medium-padding120 responsive-align-center">
        <div class="container">
            <div class="row pt80">

                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mb30">
                    <form class="login-form form--dark" method="post" action="{{ route('postPasswordResetToken',$token) }}">
                        @csrf
                        <header class="crumina-module crumina-heading heading--h2 heading--with-decoration">
                            <h3 class="heading-title">{{ trans('general.newPassword') }}</h3>

                        </header>
                        <label for="password1" class="input-label">{{ trans('frontend/register.password') }}<abbr class="required"
                                                                                                        title="required">*</abbr></label>
                        <div class="input-with-icon input-icon--right">
                            <input class="input--dark input--squared" id='password1' name="password1"
                                   type="password" >
                            <svg class="woox-icon icon-padlock">
                                <use xlink:href="svg-icons/sprites/icons.svg#icon-padlock"></use>
                            </svg>
                        </div>
                        <label for="password2" class="input-label">{{ trans('frontend/register.confirmPassword') }}<abbr class="required"
                                                                                                        title="required">*</abbr></label>
                        <div class="input-with-icon input-icon--right">
                            <input class="input--dark input--squared" id='password2' name="password2"
                                   type="password" >
                            <svg class="woox-icon icon-padlock">
                                <use xlink:href="svg-icons/sprites/icons.svg#icon-padlock"></use>
                            </svg>
                        </div>
                        <div class="forgot-block">
                            <button class="btn btn--large btn--primary btn--with-icon btn--icon-right full-width">
                                {{ trans('general.send') }}
                                <svg class="woox-icon icon-arrow-right">
                                    <use xlink:href="svg-icons/sprites/icons.svg#icon-arrow-right"></use>
                                </svg>
                            </button>
                        </div>
                    </form>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mb30">
                    <div class="tabs tabs--style1">
                        <ul role="tablist">

                            <li role="presentation" class="tab-control active">
                                <a href="#tab-1" role="tab" data-toggle="tab" class="control-item">
                                    <h6 class="tab-title">Bitcoin</h6>
                                </a>
                            </li>
                            <li role="presentation" class="tab-control">
                                <a href="#tab-2" role="tab" data-toggle="tab" class="control-item">
                                    <h6 class="tab-title">Ethereum</h6>
                                </a>
                            </li>
                            <li role="presentation" class="tab-control">
                                <a href="#tab-3" role="tab" data-toggle="tab" class="control-item">
                                    <h6 class="tab-title">Dash</h6>
                                </a>
                            </li>

                        </ul>

                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade active" id="tab-1">
                                <h4 class="tab-content-title">Bitcoin <span>BTC</span></h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. At lectus urna duis convallis.
                                    Condimentum id venenatis a condimentum vitae sapien pellentesque. Arcu cursus vitae
                                    congue mauris rhoncus aenean vel. Sed nisi lacus sed viverra tellus in hac habitasse
                                    platea.</p>
                                <p>Egestas quis ipsum suspendisse ultrices gravida.</p>
                                <a class="action-link" href="#">Go to Coin Market
                                    <svg class="woox-icon icon-arrow-right-line">
                                        <use xlink:href="svg-icons/sprites/icons.svg#icon-arrow-right-line"></use>
                                    </svg>
                                </a>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="tab-2">
                                <h4 class="tab-content-title">Ethereum <span>ETH</span></h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. At lectus urna duis convallis.
                                    Condimentum id venenatis a condimentum vitae sapien pellentesque. Arcu cursus vitae
                                    congue mauris rhoncus aenean vel. Sed nisi lacus sed viverra tellus in hac habitasse
                                    platea.</p>
                                <p>Egestas quis ipsum suspendisse ultrices gravida.</p>
                                <a class="action-link" href="#">Go to Coin Market
                                    <svg class="woox-icon icon-arrow-right-line">
                                        <use xlink:href="svg-icons/sprites/icons.svg#icon-arrow-right-line"></use>
                                    </svg>
                                </a>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="tab-3">
                                <h4 class="tab-content-title">Dash <span>Dash</span></h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. At lectus urna duis convallis.
                                    Condimentum id venenatis a condimentum vitae sapien pellentesque. Arcu cursus vitae
                                    congue mauris rhoncus aenean vel. Sed nisi lacus sed viverra tellus in hac habitasse
                                    platea.</p>
                                <p>Egestas quis ipsum suspendisse ultrices gravida.</p>
                                <a class="action-link" href="#">Go to Coin Market
                                    <svg class="woox-icon icon-arrow-right-line">
                                        <use xlink:href="svg-icons/sprites/icons.svg#icon-arrow-right-line"></use>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


@endsection
@section('js')
    <script>

        $(document).ready(function () {
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


        });

    </script>
@endsection
