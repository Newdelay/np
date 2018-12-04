@extends("backend.layouts.app")
@section('content')
    <section class="content-header">
        <h1>
            {{ trans('backend/sidebar.myTeam') }}
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
            <div class="col-lg-12 col-md-12 col-12">

                @if(isset($userList[Sentinel::getUser()->id]) AND !empty($userList[Sentinel::getUser()->id]))
                    <ul class="myteam">
                        @foreach($userList[Sentinel::getUser()->id] as $userDetail)
                            <li data-id="{{ $userDetail->id }}">
                                @if(isset($userList[$userDetail->id]))
                                    <i class="fa fa-plus fa-2x plus"></i>
                                @else
                                    <i class="fa fa-plus fa-2x minus"></i>
                                @endif
                                <span class="avatarx"><img
                                            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTNDTY_vOTdz8iNjdwFOn0E4an9WlZem_AfIG494Dg-2IocL6hj"/></span>
                                <span class="name">{{ $userDetail->first_name." ".$userDetail->last_name." (". $userDetail->reference_code .")" }}</span>
                                <div class="menu">
                                    <a href="#"> <span class="fa fa-list"></span> </a>
                                    <a href="#"> <span class="fa fa-star"></span> </a>
                                    <a href="#"> <span class="fa fa-send"></span> </a>
                                    <a href="#"> <span class="fa fa-check"></span> </a>
                                    <a href="#"> <span class="fa fa-square"></span> </a>

                                </div>
                                <span class="status"></span>
                            </li>
                        @endforeach
                    </ul>
                @endif
            </div>


        </div>
        <!-- /.row -->

    </section>
    <!-- Main content -->


@endsection

@section("js")

    <script>

        $(document).ready(function () {


            $(".myteam").on("click", "li", function (evt) {

                var index = $("li").index(this);
                var base_url = window.location.origin;
                var icon = $("li").eq(index);

                var id = $(this).data("id");

                if (icon[0].childNodes[1].className == 'fa fa-plus fa-2x plus') {
                    icon[0].childNodes[1].className = "fa fa-minus fa-2x plus";

                    $.ajax({
                        url: base_url + "/backoffice/findteam/" + id,
                        type: "get",
                        beforeSend: function () {
                            $(icon[0].childNodes[1]).parent().after("<img class='spinnerx' src='https://media.giphy.com/media/3oEjI6SIIHBdRxXI40/giphy.gif' width=50px>");
                        },
                        success: function (r) {

                            //$(icon[0].childNodes[1]).parent().after(r);
                            $('li[data-id=' + id + ']').after(r);

                            // $(icon[0].childNodes[1]).parent().after('<ul class="subteam" data-id='+index+'><li> <i class="fa fa-plus fa-2x plus"></i> <span class="avatarx"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTNDTY_vOTdz8iNjdwFOn0E4an9WlZem_AfIG494Dg-2IocL6hj"/></span> <span class="name">Alt Menu</span><div class="menu"> <a href="#"> <span class="fa fa-list"></span> </a> <a href="#"> <span class="fa fa-star"></span> </a> <a href="#"> <span class="fa fa-send"></span> </a> <a href="#"> <span class="fa fa-check"></span> </a> <a href="#"> <span class="fa fa-square"></span> </a></div> <span class="status"></span></li></ul>');

                            $(".spinnerx").remove();
                        }
                    });


                } else {
                    icon[0].childNodes[1].className = "fa fa-plus fa-2x plus";

console.log(id);
                    //$(".subteam").find('[data-id=' + id + ']').remove();
                    $('ul[data-id=' + id + ']').remove()


                }


            });

        });

    </script>

@stop