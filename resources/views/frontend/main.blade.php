@extends('frontend.app')

@section("content")
    <div class="main-content-wrapper" id="home">
        <section data-settings="particles-1"
                 class="main-section crumina-flying-balls particles-js bg-1 medium-padding120 responsive-align-center">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12">
                        <img class="responsive-width-50" src="img/main.png" alt="image">
                    </div>
                    <div class="col-lg-7 col-md-12 col-sm-12 col-xs-12">
                        <header class="crumina-module crumina-heading heading--h1 heading--with-decoration">
                            <h1 class="heading-title f-size-90 weight-normal no-margin">Cryptocurrency
                                <span class="weight-bold">investments</span></h1>
                            <h2 class="c-primary">Blockchain solutions</h2>
                        </header>
                        <a data-scroll href="#details"
                           class="btn btn--large btn--transparent btn--secondary">Details</a>
                    </div>
                </div>
            </div>
        </section>

        <section id="exchange">
            <div class="container">
                <div class="row medium-padding80">
                    <div id="details" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="crumina-module crumina-module-slider crumina-slider--info-boxes">
                            <div class="swiper-btn-wrap">
                                <div class="swiper-btn-next">
                                    <svg class="woox-icon icon-line-arrow-right">
                                        <use xlink:href="svg-icons/sprites/icons.svg#icon-line-arrow-right"></use>
                                    </svg>
                                </div>

                                <div class="swiper-btn-prev">
                                    <svg class="woox-icon icon-line-arrow-left">
                                        <use xlink:href="svg-icons/sprites/icons.svg#icon-line-arrow-left"></use>
                                    </svg>
                                </div>
                            </div>

                            <div class="swiper-container auto-height" data-show-items="5" data-prev-next="1">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="crumina-module crumina-info-box info-box--style2">
                                            <div class="info-box-thumb">
                                                <svg class="woox-icon" data-name="Layer 1" viewBox="0 0 26.97 35.33">
                                                    <path d="M14.05 35.33l-3.92-.98 1.2-4.84-1.38-.35L8.75 34l-3.93-.97 1.22-4.92-5.47-1.38L0 26.6l1.87-4.32.42.1c.64.18 1.35.36 1.75.46l.38.08a.99.99 0 0 0 .23.03c.1 0 .37 0 .54-.43L8.5 9.27c.03-.55-.29-.93-1-1.1l-.34-.1-1.8-.44-.5-.11 1.02-4.14.49.12 5.47 1.36L13.05 0l3.92.98-1.19 4.75c.47.1.94.21 1.4.33l1.18-4.73 3.93.98-1.22 4.9c2.93 1.06 6.45 2.97 5.82 7.19a5.24 5.24 0 0 1-3.07 4.4c2.45 1.67 3.1 4.03 1.99 7.2-1.13 3.24-3.37 4.75-7.04 4.75a20.42 20.42 0 0 1-3.49-.35zm-2.7-1.7l1.98.49 1.21-4.88.47.1a20.58 20.58 0 0 0 3.77.4c3.22 0 5.1-1.25 6.09-4.07 1.08-3.09.31-5.1-2.48-6.56l-1.2-.63 1.32-.3a4.22 4.22 0 0 0 3.4-3.93c.42-2.85-1.3-4.77-5.6-6.25l-.43-.15 1.2-4.82-1.99-.49-1.18 4.73-.48-.12c-.77-.2-1.57-.38-2.36-.56l-.5-.11 1.2-4.77-2-.5-1.2 4.85-.48-.11-5.48-1.36-.54 2.18c.9.2 1.4.32 1.66.42a2.08 2.08 0 0 1 1.75 2.23l-3.33 13.4a1.57 1.57 0 0 1-1.9 1.08c-.12-.01-.46-.08-1.8-.44L1.38 25.9l5.38 1.36.48.13-1.22 4.9 1.98.5 1.22-4.87.49.13c.8.22 1.58.42 2.35.61l.48.13zM16 26.45a20.76 20.76 0 0 1-5.02-.85l-1.05-.27 1.87-7.47.48.12.72.16c2.06.46 5.51 1.24 6.77 3.28a3.13 3.13 0 0 1 .35 2.48c-.29 1.17-1.24 2.55-4.12 2.55zm-4.86-1.84l.1.02a19.97 19.97 0 0 0 4.76.82c1.82 0 2.85-.58 3.15-1.79a2.13 2.13 0 0 0-.23-1.72c-1.04-1.68-4.36-2.42-6.14-2.82l-.25-.06zm6.18-7.82a16.35 16.35 0 0 1-4.06-.7l-.96-.24L14 8.98l.5.13.6.13c1.68.38 4.51 1 5.6 2.77a2.99 2.99 0 0 1 .33 2.38c-.27 1.1-1.14 2.4-3.7 2.4zm-3.81-1.66h.01a15.57 15.57 0 0 0 3.8.65c2.09 0 2.57-.94 2.74-1.65a2 2 0 0 0-.2-1.6c-.87-1.4-3.54-2-4.98-2.32l-.14-.03z"
                                                          data-name="Bitcoin BTC"/>
                                                </svg>
                                            </div>
                                            <div class="info-box-content">
                                                <h5 class="info-box-title">Bitcoin</h5>
                                                <ul class="pricing-tables-position pricing-tables-position--inline">
                                                    <li class="position-item">
                                                        <div class="currency-details-item">
                                                            <h6 class="title">Price: </h6>
                                                            <h6 class="value">$8,109.70</h6>
                                                        </div>
                                                    </li>
                                                    <li class="position-item">
                                                        <div class="currency-details-item">
                                                            <h6 class="title">Cap: </h6>
                                                            <h6 class="value">$136,657,260,244.00</h6>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <div class="growth">25.94%</div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="crumina-module crumina-info-box info-box--style2">
                                            <div class="info-box-thumb">
                                                <svg class="woox-icon" data-name="Layer 1" viewBox="0 0 22.62 36.84">
                                                    <g id="Ethereum_ETH" data-name="Ethereum ETH">
                                                        <path d="M32 15.52L41.93 32 32 37.86 22.07 32 32 15.52zm0-1.94L20.69 32.34 32 39.02l11.3-6.68L32 13.58z"
                                                              class="cls-1" transform="translate(-20.69 -13.58)"/>
                                                        <path d="M32 28.67l9.09 3.82L32 37.86l-9.09-5.37L32 28.67zm0-1.09l-11.31 4.76L32 39.02l11.3-6.68L32 27.58z"
                                                              class="cls-1" transform="translate(-20.69 -13.58)"/>
                                                        <path d="M39.78 37.73L32 48.7l-7.78-10.96 7.27 4.3.5.3.52-.3 7.27-4.3zm3.53-3.24L32 41.16 20.7 34.5 32 50.41l11.31-15.94z"
                                                              class="cls-1" transform="translate(-20.69 -13.58)"/>
                                                        <path d="M10.81 1.88h1v22.79h-1zM10.81 27.75h1v7.87h-1z"
                                                              class="cls-1"/>
                                                    </g>
                                                </svg>
                                            </div>
                                            <div class="info-box-content">
                                                <h5 class="info-box-title">Ethereum</h5>
                                                <ul class="pricing-tables-position pricing-tables-position--inline">
                                                    <li class="position-item">
                                                        <div class="currency-details-item">
                                                            <h6 class="title">Price:</h6>
                                                            <h6 class="value">$830.50</h6>
                                                        </div>
                                                    </li>
                                                    <li class="position-item">
                                                        <div class="currency-details-item">
                                                            <h6 class="title">Cap:</h6>
                                                            <h6 class="value">$80,945,193,726</h6>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <div class="growth">30.68%</div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="crumina-module crumina-info-box info-box--style2">
                                            <div class="info-box-thumb">
                                                <svg class="woox-icon" data-name="Layer 1" viewBox="0 0 32.69 20">
                                                    <g id="Dash_DASH" data-name="Dash DASH">
                                                        <path d="M38.42 42H16.27l1.84-6h19.37l2.72-8H20.86l1.84-6h21.73a4.34 4.34 0 0 1 1.87.53 2.84 2.84 0 0 1 1.4 1.38 3.9 3.9 0 0 1 .52 1.73 3.73 3.73 0 0 1-.28 2.1l-2.82 8.87a10.88 10.88 0 0 1-1 1.9 9.85 9.85 0 0 1-1.64 1.69 13.19 13.19 0 0 1-1.94 1.27l-.2.08a5.6 5.6 0 0 1-1.92.45zm-20.8-1h20.8a4.78 4.78 0 0 0 1.57-.4l.13-.05a12.63 12.63 0 0 0 1.73-1.14 8.86 8.86 0 0 0 1.45-1.48 10.09 10.09 0 0 0 .87-1.66L47 27.4a2.92 2.92 0 0 0 .22-1.64 3.05 3.05 0 0 0-.4-1.37 1.94 1.94 0 0 0-.92-.94 3.55 3.55 0 0 0-1.47-.44h-21l-1.22 4h19.38L38.2 37H18.85z"
                                                              class="cls-1" transform="translate(-15.57 -22)"/>
                                                        <path d="M28.13 35H15.57l1.83-6h12.43zm-11.21-1h10.45l1.13-4H18.16z"
                                                              class="cls-1" transform="translate(-15.57 -22)"/>
                                                    </g>
                                                </svg>

                                            </div>
                                            <div class="info-box-content">
                                                <h5 class="info-box-title">Dash</h5>
                                                <ul class="pricing-tables-position pricing-tables-position--inline">
                                                    <li class="position-item">
                                                        <div class="currency-details-item">
                                                            <h6 class="title">Price:</h6>
                                                            <h6 class="value">$554.26</h6>
                                                        </div>
                                                    </li>
                                                    <li class="position-item">
                                                        <div class="currency-details-item">
                                                            <h6 class="title">Cap:</h6>
                                                            <h6 class="value">$4,361,904,309</h6>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <div class="drop">- 6.38%</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="crumina-module crumina-info-box info-box--style2">
                                            <div class="info-box-thumb">
                                                <svg class="woox-icon" data-name="Layer 1" viewBox="0 0 27.248 29">
                                                    <path d="M25.451 29H1.081l2.288-8.436L0 21.964l1.443-5.43 3.38-1.234L8.898 0h9.805L15.69 11.341l4.275-1.567-1.342 5.393-4.36 1.653L12.65 23h14.6zM2.387 28h22.319l1.2-4H11.355l2.07-7.933 4.357-1.651.759-3.055-4.311 1.579L17.402 1H9.666L5.652 16.066 2.275 17.3l-.789 2.969 3.381-1.4z"
                                                          data-name="Litecoin LTC"/>
                                                </svg>
                                            </div>
                                            <div class="info-box-content">
                                                <h5 class="info-box-title">Litecoin</h5>
                                                <ul class="pricing-tables-position pricing-tables-position--inline">
                                                    <li class="position-item">
                                                        <div class="currency-details-item">
                                                            <h6 class="title">Price:</h6>
                                                            <h6 class="value">$152.51</h6>
                                                        </div>
                                                    </li>
                                                    <li class="position-item">
                                                        <div class="currency-details-item">
                                                            <h6 class="title">Cap:</h6>
                                                            <h6 class="value">$8,404,897,705</h6>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <div class="growth">31.14%</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="crumina-module crumina-info-box info-box--style2">
                                            <div class="info-box-thumb">
                                                <svg class="woox-icon" data-name="Layer 1" viewBox="0 0 29.098 31.372">
                                                    <path d="M22.248 31.372a6.778 6.778 0 0 1-3.427-.949 6.924 6.924 0 0 1-3.424-5.952 7.569 7.569 0 0 1 1.006-3.651 2.135 2.135 0 0 0-.763-2.736 1.891 1.891 0 0 0-2.717.761 6.955 6.955 0 0 1-2.657 2.774 6.788 6.788 0 0 1-6.842-.005 6.9 6.9 0 0 1 0-11.917 6.777 6.777 0 0 1 6.854 0 11.248 11.248 0 0 1 2.731 2.717 2.056 2.056 0 0 0 2.751.811 1.691 1.691 0 0 0 1.025-1.3 2.618 2.618 0 0 0-.274-1.455 7.517 7.517 0 0 1-1.113-3.631A6.94 6.94 0 0 1 18.821.885a6.483 6.483 0 0 1 3.386-.886 6.6 6.6 0 0 1 3.479.9 6.887 6.887 0 0 1-.013 11.9 7.892 7.892 0 0 1-3.78.893 1.967 1.967 0 1 0 0 3.933 7.566 7.566 0 0 1 3.771.887 6.889 6.889 0 0 1 .009 11.915 6.809 6.809 0 0 1-3.425.945zm-7.636-14.587a3.051 3.051 0 0 1 1.53.436 3.119 3.119 0 0 1 1.142 4.064 6.608 6.608 0 0 0-.89 3.186 5.923 5.923 0 0 0 2.93 5.09 5.753 5.753 0 0 0 5.84 0 5.89 5.89 0 0 0 0-10.186 6.6 6.6 0 0 0-3.274-.754 2.966 2.966 0 1 1 0-5.933 6.89 6.89 0 0 0 3.284-.761 5.887 5.887 0 0 0-.01-10.175 5.56 5.56 0 0 0-2.922-.755 5.616 5.616 0 0 0-2.9.741 5.943 5.943 0 0 0-2.943 5.1 6.61 6.61 0 0 0 1 3.163 3.6 3.6 0 0 1 .381 2.063 2.63 2.63 0 0 1-1.535 2.036 2.785 2.785 0 0 1-1.423.383 3.1 3.1 0 0 1-2.639-1.514 9.809 9.809 0 0 0-2.435-2.425 5.777 5.777 0 0 0-5.816.014 5.9 5.9 0 0 0 0 10.193 5.763 5.763 0 0 0 5.839 0 6.017 6.017 0 0 0 2.282-2.4 3.058 3.058 0 0 1 2.559-1.566z"
                                                          data-name="Ripple XRP"/>
                                                </svg>
                                            </div>
                                            <div class="info-box-content">
                                                <h5 class="info-box-title">Ripple</h5>
                                                <ul class="pricing-tables-position pricing-tables-position--inline">
                                                    <li class="position-item">
                                                        <div class="currency-details-item">
                                                            <h6 class="title">Price:</h6>
                                                            <h6 class="value">$0.785075</h6>
                                                        </div>
                                                    </li>
                                                    <li class="position-item">
                                                        <div class="currency-details-item">
                                                            <h6 class="title">Cap:</h6>
                                                            <h6 class="value">$30,625,160,124</h6>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <div class="growth">31.14%</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="medium-padding120 responsive-align-center">
            <form action="{{ route('register') }}" method="GET" id="form">
                <div class="container">
                    <div class="row bg-2">
                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 mb30">
                            <h2 id="demo" style="float:left;">$100</h2>
                            <h2 style="float:right;">$1000</h2>
                            <div class="slidecontainer">
                                <input type="range" min="100" max="1000" value="100" name="range" id="myRange">

                            </div>

                            <div class="forgot-block">
                                <div class="checkbox checkbox--style5">
                                    <label>
                                        <input type="checkbox" name="mn" checked>
                                        <p class="checknote">Masternode Masternode Masternode Masternode Masternode
                                            Masternode Masternode Masternode Masternode Masternode Masternode Masternode
                                            Masternode Masternode Masternode Masternode Masternode Masternode Masternode
                                            Masternode Masternode Masternode Masternode Masternode Masternode Masternode
                                            Masternode Masternode Masternode Masternode Masternode Masternode Masternode
                                            Masternode Masternode Masternode Masternode </p>
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


                        </div>
                        <div class="col-lg-6 col-md-12 col-lg-offset-0 col-sm-12 col-xs-12">
                            <div class="widget w-distribution-ends countdown-bg1">
                                <h5 class="title">{{ trans('general.exampleGain') }}</h5>

                                <div class="row">
                                    <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 mb30">
                                        <div class="form-group label-floating is-empty box">
                                            <h6>{{ trans('general.daily') }}</h6>
                                            <h4 class="daily">$0.13</h4>

                                        </div>
                                        <div class="form-group label-floating is-empty greenbox">
                                            <h4 class="master" id="masterdaily">+$0.13</h4>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 mb30">
                                        <div class="form-group label-floating is-empty box">
                                            <h6>{{ trans('general.monthly') }}</h6>
                                            <h4 class="monthly">$4.00</h4>
                                        </div>
                                        <div class="form-group label-floating is-empty greenbox">
                                            <h4 class="master" id="mastermonthly">+$0.13</h4>
                                        </div>
                                    </div>


                                    <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 mb30">
                                        <div class="form-group label-floating is-empty box">
                                            <h6>{{ trans('general.sixMonthly') }}</h6>
                                            <h4 class="sixmonthly">$24.00</h4>
                                        </div>
                                        <div class="form-group label-floating is-empty greenbox">
                                            <h4 class="master" id="mastersixmonthly">+$0.13</h4>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12 mb30">
                                    <button href="#"
                                            class="btn btn--large btn--primary full-width">{{ trans('general.buyButton') }}</button>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </section>


        <section class="medium-padding120 responsive-align-center" id="about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                        <header class="crumina-module crumina-heading heading--h2 heading--with-decoration">
                            <div class="heading-sup-title">Top-5 cryptocurrencies</div>
                            <h2 class="heading-title weight-normal">Statistics of currencies on
                                <span class="weight-bold">all your devices</span></h2>
                            <div class="heading-text">Investigationes demonstraverunt lectores legere elementum pulvinar
                                etiam non quam lacus suspendisse risus nec feugiat in fermentum laoreet sit amet cursus
                                quam adipiscing vitae proin sagittis.
                            </div>
                        </header>

                        <p>Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est
                            etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare
                            quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas
                            humanitatis
                            per laoreet sit amet cursus seacula qui mutationem consuetudium claritas est etiam processus
                            dynamicus.
                        </p>

                        <div class="btn-market-wrap mt60">
                            <a href="#" class="btn btn--market btn--apple btn--with-icon btn--icon-left">
                                <svg class="woox-icon icon-apple">
                                    <use xlink:href="svg-icons/sprites/icons.svg#icon-apple"></use>
                                </svg>
                                <div class="text">
                                    <span class="sup-title">download on</span>
                                    <span class="title">Apple Store</span>
                                </div>
                            </a>

                            <a href="#" class="btn btn--market btn--google btn--with-icon btn--icon-left">
                                <svg class="woox-icon icon-if-59-play-843782">
                                    <use xlink:href="svg-icons/sprites/icons.svg#icon-if-59-play-843782"></use>
                                </svg>
                                <div class="text">
                                    <span class="sup-title">download on</span>
                                    <span class="title">Google Play</span>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 mt30">
                        <img class="responsive-width-50" src="img/phone.png" alt="phone">
                    </div>
                </div>
            </div>
        </section>

        <section id="pricing">
            <div class="container">
                <div class="row medium-padding120">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="mCustomScrollbar scrollable-responsive-table ps ps--theme_default"
                             data-mcs-theme="dark" data-ps-id="8bebea86-308c-74de-1989-c76e333fc419">
                            <table class="pricing-tables-wrap-table">
                                <thead>
                                <tr>
                                    <th>Choose your package<span class="c-primary">.</span></th>
                                    <th colspan="3">Details<span class="c-primary">.</span></th>
                                    <th colspan="2">Price<span class="c-primary">.</span></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr class="crumina-module crumina-pricing-table pricing-table--style-table c-brown">
                                    <td>
                                        <div class="pricing-thumb">
                                            <img src="img/if_Bitcoin_2745023.png" class="woox-icon" alt="bitcoin">
                                            <h5 class="pricing-title">Bitcoin <span>BTC</span></h5>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="currency-details-item">
                                            <h6 class="title">Market Cap:</h6>
                                            <h6 class="value">$163.936.272.151 USD</h6>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="currency-details-item">
                                            <h6 class="title">Volume (24h):</h6>
                                            <h6 class="value">$9.758.550.000 USD</h6>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="currency-details-item">
                                            <h6 class="title">Circulating Supply:</h6>
                                            <h6 class="value">17.014.062 BTC</h6>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="price">
                                            <div class="price-sup-title">1 Bitcoin equals:</div>
                                            <div class="price-value">$9.635.34</div>
                                        </div>
                                    </td>

                                </tr>
                                <tr class="crumina-module crumina-pricing-table pricing-table--style-table c-blue">
                                    <td>
                                        <div class="pricing-thumb">
                                            <img src="img/if_etherium_eth_ethcoin_crypto_2844386.png" class="woox-icon"
                                                 alt="bitcoin">
                                            <h5 class="pricing-title">Ethereum <span>ETH</span></h5>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="currency-details-item">
                                            <h6 class="title">Market Cap:</h6>
                                            <h6 class="value">$91.926.166.165 USD</h6>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="currency-details-item">
                                            <h6 class="title">Volume (24h):</h6>
                                            <h6 class="value">$2.323.180.000 USD</h6>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="currency-details-item">
                                            <h6 class="title">Circulating Supply:</h6>
                                            <h6 class="value">97.730.789 ETH</h6>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="price">
                                            <div class="price-sup-title">1 Bitcoin equals:</div>
                                            <div class="price-value">$820.93</div>
                                        </div>
                                    </td>

                                </tr>
                                <tr class="crumina-module crumina-pricing-table pricing-table--style-table c-blue-light">
                                    <td>
                                        <div class="pricing-thumb">
                                            <img src="img/if_dash_dashcoin_2844383.png" class="woox-icon" alt="bitcoin">
                                            <h5 class="pricing-title">Dash <span>DASH</span></h5>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="currency-details-item">
                                            <h6 class="title">Market Cap:</h6>
                                            <h6 class="value">$3.980.830.982 USD</h6>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="currency-details-item">
                                            <h6 class="title">Volume (24h):</h6>
                                            <h6 class="value">$127.057.000 USD</h6>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="currency-details-item">
                                            <h6 class="title">Circulating Supply:</h6>
                                            <h6 class="value">8.051.338 DASH</h6>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="price">
                                            <div class="price-sup-title">1 Bitcoin equals:</div>
                                            <div class="price-value">$494.43</div>
                                        </div>
                                    </td>

                                </tr>
                                <tr class="crumina-module crumina-pricing-table pricing-table--style-table c-border-color">
                                    <td>
                                        <div class="pricing-thumb">
                                            <img src="img/if_litecion_ltc_lite_coin_crypto_2844390.png"
                                                 class="woox-icon" alt="bitcoin">
                                            <h5 class="pricing-title">Litecoin <span>LTC</span></h5>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="currency-details-item">
                                            <h6 class="title">Market Cap:</h6>
                                            <h6 class="value">$8.954.645.780 USD</h6>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="currency-details-item">
                                            <h6 class="title">Volume (24h):</h6>
                                            <h6 class="value">$616.044.000 USD</h6>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="currency-details-item">
                                            <h6 class="title">Circulating Supply:</h6>
                                            <h6 class="value">56.372.063 LTC</h6>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="price">
                                            <div class="price-sup-title">1 Bitcoin equals:</div>
                                            <div class="price-value">$158.85</div>
                                        </div>
                                    </td>

                                </tr>
                                <tr class="crumina-module crumina-pricing-table pricing-table--style-table c-blue-lighter">
                                    <td>
                                        <div class="pricing-thumb">
                                            <img src="img/if_ripple_xrp_coin_2844396.png" class="woox-icon"
                                                 alt="bitcoin">
                                            <h5 class="pricing-title">Ripple <span>XRP</span></h5>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="currency-details-item">
                                            <h6 class="title">Market Cap:</h6>
                                            <h6 class="value">$32.230.347.756 USD</h6>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="currency-details-item">
                                            <h6 class="title">Volume (24h):</h6>
                                            <h6 class="value">$681.224.000 USD</h6>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="currency-details-item">
                                            <h6 class="title">Circulating Supply:</h6>
                                            <h6 class="value">39.178.259.468 XRP</h6>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="price">
                                            <div class="price-sup-title">1 Bitcoin equals:</div>
                                            <div class="price-value">$0.822659</div>
                                        </div>
                                    </td>

                                </tr>
                                </tbody>
                                <tfoot>
                                <tr>
                                    <td colspan="6">NOTE! Ullamcorper sit amet risus nullam. Ac ut consequat semper
                                        viverra. Tristique senectus et netus et malesuada fames ac turpis.
                                    </td>
                                </tr>
                                </tfoot>
                            </table>
                            <div class="ps__scrollbar-x-rail" style="left: 0px; bottom: 0px;">
                                <div class="ps__scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                            </div>
                            <div class="ps__scrollbar-y-rail" style="top: 0px; right: 0px;">
                                <div class="ps__scrollbar-y" tabindex="0" style="top: 0px; height: 0px;"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="divider">
            </div>
        </section>

        <section class="bg-1">

            <div class="container">
                <div class="row medium-padding120">
                    <div class="crumina-module crumina-featured-block">
                        <div class="image-block">
                            <img src="img/pc.png" alt="phone">
                        </div>
                        <div class="text-block">
                            <header class="crumina-module crumina-heading heading--h2 heading--with-decoration">
                                <h2 class="heading-title weight-normal">Access
                                    <span class="weight-bold">analytical market & price data</span></h2>
                                <div class="heading-text">Investigationes demonstraverunt lectores legere elementum
                                    pulvinar etiam non quam lacus suspendisse risus nec feugiat in fermentum laoreet sit
                                    amet cursus.
                                </div>
                            </header>
                        </div>
                    </div>
                </div>

                <div class="row pb100">
                    <div class="col-lg-12 col-md-12 col0sm-12 col-xs-12">
                        <div class="crumina-module crumina-module-slider clients--slider navigation-center-both-sides">

                            <div class="swiper-btn-next">
                                <svg class="woox-icon icon-line-arrow-right">
                                    <use xlink:href="svg-icons/sprites/icons.svg#icon-line-arrow-right"></use>
                                </svg>
                            </div>

                            <div class="swiper-btn-prev">
                                <svg class="woox-icon icon-line-arrow-left">
                                    <use xlink:href="svg-icons/sprites/icons.svg#icon-line-arrow-left"></use>
                                </svg>
                            </div>

                            <div class="row">
                                <div class="col-lg-10 col-lg-offset-1 col-md-12 col-sm-12 col-xs-12">
                                    <div class="swiper-container" data-show-items="5" data-prev-next="1">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <a class="clients-item" href="#">
                                                    <img src="img/client1.png" class="" alt="logo">
                                                </a>
                                            </div>
                                            <div class="swiper-slide">
                                                <a class="clients-item" href="#">
                                                    <img src="img/client2.png" class="" alt="logo">
                                                </a>
                                            </div>
                                            <div class="swiper-slide">
                                                <a class="clients-item" href="#">
                                                    <img src="img/client3.png" class="" alt="logo">
                                                </a>
                                            </div>
                                            <div class="swiper-slide">
                                                <a class="clients-item" href="#">
                                                    <img src="img/client4.png" class="" alt="logo">
                                                </a>
                                            </div>
                                            <div class="swiper-slide">
                                                <a class="clients-item" href="#">
                                                    <img src="img/client5.png" class="" alt="logo">
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="divider">
            </div>

        </section>


    </div>
@endsection

@section('js')
    <script>
        $(document).ready(function () {

            $(".primary-menu li a").click(function () {
                var divs = $(this).attr("href");
                var target = divs.split("/");

                $('html, body').animate({
                    scrollTop: $(target[1]).offset().top
                }, 1000);
            });

        });
        var slider = document.getElementById("myRange");
        var output = document.getElementById("demo");

        output.innerHTML = slider.value; // Display the default slider value
        output.innerHTML = "$100";
        // Update the current slider value (each time you drag the slider handle)
        slider.oninput = function () {
            output.innerHTML = this.value + "$";
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

        function robots(){
            var robot = $(".robot")[0].checked;

            var robotpercent = 0;
            if(robot){
                $("#masterdaily").parent().fadeIn();
                $("#mastermonthly").parent().fadeIn();
                $("#mastersixmonthly").parent().fadeIn();

                robotpercent = $("#myRange").val() * 6 / 100;
                robotdaily = (robotpercent / 30).toFixed(2);
                robotmonthly = (robotpercent).toFixed(2);
                robotsixmonthly = (robotpercent * 6).toFixed(2);
            }
            else{
                $("#masterdaily").parent().fadeOut();
                $("#mastermonthly").parent().fadeOut();
                $("#mastersixmonthly").parent().fadeOut();
            }

            $("#masterdaily").html("+$"+robotdaily);
            $("#mastermonthly").html("+$"+robotmonthly);
            $("#mastersixmonthly").html("+$"+robotsixmonthly);

        }

        robots();


    </script>
@endsection