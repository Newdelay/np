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


            <div class="col-lg-12 col-12 text-center">
                {{ trans('backend/general.noAuthorized') }}
            </div>


        </div>

    </section>
@endsection