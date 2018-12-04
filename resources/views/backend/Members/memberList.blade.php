@extends("backend.layouts.app")
@section('content')
    <section class="content-header">
        <h1>
            {{ trans('backend/sidebar.members') }}
        </h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#"><i
                            class="fa fa-dashboard"></i> {{ trans('backend/sidebar.dashboard') }}</a></li>
            <li class="breadcrumb-item"><a href="/">{{ trans('backend/sidebar.myTeam') }}</a></li>
            <li class="breadcrumb-item active">{{ trans('backend/sidebar.myTeam') }}</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="box">

                    <!-- /.box-header -->
                    <div class="box-body no-padding">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <tr>
                                    <th>{{ trans('backend/members.fullName') }}</th>
                                    <th>{{ trans('backend/members.referenceCode') }}</th>
                                    <th>{{ trans('backend/members.email') }}</th>
                                    <th>{{ trans('backend/members.phone') }}</th>
                                    <th>{{ trans('backend/members.investment') }}</th>
                                    <th>{{ trans('backend/members.status') }}</th>
                                    <th>{{ trans('backend/members.actions') }}</th>
                                </tr>
                                @if($userlist!=null)
                                    @foreach($userlist as $userDetail)
                                        <tr>
                                            <td>{{ $userDetail->first_name." ".$userDetail->last_name }}</td>
                                            <td>{{ $userDetail->reference_code }}</td>
                                            <td>{{ $userDetail->email }}</td>
                                            <td>+{{ $userDetail->telephone }}</td>
                                            <td>{{ $userDetail->investment }}</td>
                                            <td>
                                                @if(empty($userDetail->status))
                                                    <span class="label label-warning">{{ trans('backend/general.pending') }}</span>
                                                @elseif($userDetail->status==1)
                                                    <span class="label label-info">{{ trans('backend/general.active') }}</span>
                                                @else
                                                    <span class="label label-info">{{ trans('backend/general.passive') }}</span>
                                                @endif

                                            </td>
                                            <td>

                                                <a href="/as" data-toggle="tooltip" title=""
                                                   data-original-title="{{ trans('backend/general.activate') }}"><i
                                                            class="mdi mdi-account-check"></i></a>
                                                <a href="/as" data-toggle="tooltip" title=""
                                                   data-original-title="{{ trans('backend/general.activate') }}"><i
                                                            class="mdi mdi-account-check"></i></a>


                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="7"> {{ trans('backend/general.noRecord') }}</td>
                                    </tr>
                                @endif
                            </table>
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>

            <nav class="my-3" aria-label="Page navigation">
                <ul class="pagination">
                    {{ $pagination->links() }}
                </ul>
            </nav>
        </div>
    </section>
    <!-- Main content -->


@endsection

@section("js")

@stop