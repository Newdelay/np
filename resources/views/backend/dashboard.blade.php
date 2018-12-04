@extends("backend.layouts.app")
@section('content')
    <section class="content-header">
        <h1>
            Dashboard
            <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="row">


            <div class="col-lg-6 col-12">


                <div class="row">
                    <div class="col-md-6 col-12">
                        <div class="box box-inverse bg-dark bg-hexagons-white pull-up">
                            <div class="box-body text-center">
                                <h2 class="mb-0 text-bold">XRP</h2>
                                <h4>Ripple</h4>
                                <ul class="flexbox flex-justified text-center mt-30 bb-1 border-gray pb-20">
                                    <li class="br-1 border-gray">
                                        <div>USD</div>
                                        <small class="font-size-18">11.153</small>
                                    </li>

                                    <li class="br-1 border-gray">
                                        <div>EUR</div>
                                        <small class="font-size-18">1.9232</small>
                                    </li>

                                    <li>
                                        <div>GBP</div>
                                        <small class="font-size-18">1.8202</small>
                                    </li>
                                </ul>
                                <ul class="flexbox flex-justified text-center mt-20">
                                    <li class="br-1 border-gray">
                                        <div>% 1h</div>
                                        <small class="font-size-18"><i class="fa fa-arrow-up text-success pr-5"></i>1.4
                                        </small>
                                    </li>

                                    <li class="br-1 border-gray">
                                        <div>% 24h</div>
                                        <small class="font-size-18"><i class="fa fa-arrow-up text-success pr-5"></i>3.29
                                        </small>
                                    </li>

                                    <li>
                                        <div>% 7d</div>
                                        <small class="font-size-18"><i class="fa fa-arrow-up text-success pr-5"></i>54.77
                                        </small>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="box box-inverse bg-yellow text-black bg-hexagons-dark pull-up">
                            <div class="box-body text-center">
                                <h2 class="mb-0 text-bold"><span class="text-black">ETH</span></h2>
                                <h4><span class="text-black">Ethereum</span></h4>
                                <ul class="flexbox flex-justified text-center mt-30 bb-1 border-dark pb-20">
                                    <li class="br-1 border-dark">
                                        <div class="text-black">USD</div>
                                        <small class="font-size-18"><span class="text-black">2.153</span></small>
                                    </li>

                                    <li class="br-1 border-dark">
                                        <div class="text-black">EUR</div>
                                        <small class="font-size-18"><span class="text-black">3.9232</span></small>
                                    </li>

                                    <li>
                                        <div class="text-black">GBP</div>
                                        <small class="font-size-18"><span class="text-black">3.8202</span></small>
                                    </li>
                                </ul>
                                <ul class="flexbox flex-justified text-center mt-20">
                                    <li class="br-1 border-dark">
                                        <div class="text-black">% 1h</div>
                                        <small class="font-size-18"><span class="text-black"><i
                                                        class="fa fa-arrow-up pr-5"></i>0.4</span></small>
                                    </li>

                                    <li class="br-1 border-dark">
                                        <div class="text-black">% 24h</div>
                                        <small class="font-size-18"><span class="text-black"><i
                                                        class="fa fa-arrow-up pr-5"></i>9.29</span></small>
                                    </li>

                                    <li>
                                        <div class="text-black">% 7d</div>
                                        <small class="font-size-18"><span class="text-black"><i
                                                        class="fa fa-arrow-up pr-5"></i>50.77</span></small>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>

    </section>
@endsection