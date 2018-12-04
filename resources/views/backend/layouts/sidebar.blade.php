<section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
        <div class="ulogo">
            <a href="index.html">
                <!-- logo for regular state and mobile devices -->
                <span><b>Piwano </b></span>
            </a>
        </div>
        <div class="image">
            <img src="images/user2-160x160.jpg" class="rounded-circle" alt="User Image">
        </div>
        <div class="info">
            <p>{{ Sentinel::getUser()->first_name." ".Sentinel::getUser()->last_name}}</p>
            <a href="" class="link" data-toggle="tooltip" title=""
               data-original-title="{{trans('backend/general.setting')}}"><i class="ion ion-gear-b"></i></a>
            <a href="" class="link" data-toggle="tooltip" title=""
               data-original-title="{{trans('backend/general.email')}}"><i class="ion ion-android-mail"></i></a>
            <a href="{{ route('logout') }}" class="link" data-toggle="tooltip" title=""
               data-original-title="{{trans('backend/general.logout')}}"><i class="ion ion-power"></i></a>
        </div>
    </div>
    <!-- sidebar menu -->


    <ul class="sidebar-menu" data-widget="tree">


        <li class="nav-devider"></li>
        <li class="header nav-small-cap">{{ trans('backend/sidebar.myAccount') }}</li>
        @if(!empty(generalFunctionsHelper::settingMiddlewareMenu(Session::get('authList'),array('dashboard'))))

            <li {{ generalFunctionsHelper::selectActiveMenu(2,array(route('dashboard')),'active',1)}}>
                <a href="{{ route('dashboard') }}">
                    <i class="icon-home"></i> <span>{{ trans('backend/sidebar.dashboard') }}</span>
                    <span class="pull-right-container">

            </span>
                </a>
            </li>
        @endif

        @if(!empty(generalFunctionsHelper::settingMiddlewareMenu(Session::get('authList'),array('myProfile','getPassword'))))
            <li class="treeview {{ generalFunctionsHelper::selectActiveMenu(2,array(route('myProfile'),route('getPassword')),'active',0) }}">
                <a href="#">
                    <i class="icon-menu"></i> <span>{{ trans('backend/sidebar.myAccount') }}</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu  ">
                    @if(!empty(generalFunctionsHelper::settingMiddlewareMenu(Session::get('authList'),array('myProfile'))))
                        <li {{ generalFunctionsHelper::selectActiveMenu(2,array(route('myProfile')),'active',1) }} ><a
                                    href="{{ route('myProfile') }}">{{ trans('backend/sidebar.myProfile') }}</a></li>
                    @endif
                    <li><a href="/">{{ trans('backend/sidebar.e-Wallet') }}</a></li>
                    @if(!empty(generalFunctionsHelper::settingMiddlewareMenu(Session::get('authList'),array('getPassword'))))
                        <li {{ generalFunctionsHelper::selectActiveMenu(2,array(route('getPassword')),'active',1) }}><a
                                    href="{{ route('getPassword') }}">{{ trans('backend/sidebar.passwordChange') }}</a>
                        </li>
                    @endif
                    <li><a href="/">{{ trans('backend/sidebar.moreInvestment') }}</a></li>
                </ul>
            </li>
        @endif

        @if(!empty(generalFunctionsHelper::settingMiddlewareMenu(Session::get('authList'),array('getTeam','getMemberList'))))
            <li class="treeview {{ generalFunctionsHelper::selectActiveMenu(2,array(route('getTeam'),route('getMemberList')),'active',0) }}">
                <a href="#">
                    <i class="icon-people"></i>
                    <span>{{ trans('backend/sidebar.myTeam') }}</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="pages/members/members.html">{{ trans('backend/sidebar.settlementWaitMembers') }}</a>
                    </li>
                    <li><a href="pages/members/members-list.html">{{ trans('backend/sidebar.peddingWaitMembers') }}</a>
                    </li>
                    <li><a href="pages/members/member-profile.html">{{ trans('backend/sidebar.settlementTree') }}</a>
                    </li>
                    @if(!empty(generalFunctionsHelper::settingMiddlewareMenu(Session::get('authList'),array('getTeam'))))
                        <li {{ generalFunctionsHelper::selectActiveMenu(2,array(route('getTeam')),'active',1) }}><a
                                    href="{{ route('getTeam') }}">{{ trans('backend/sidebar.myTeam') }}</a>
                        </li>
                    @endif
                    @if(!empty(generalFunctionsHelper::settingMiddlewareMenu(Session::get('authList'),array('getMemberList'))))

                        <li {{ generalFunctionsHelper::selectActiveMenu(2,array(route('getMemberList')),'active',1) }}><a href="{{ route('getMemberList') }}">{{ trans('backend/sidebar.members') }}</a></li>
                    @endif



                </ul>
            </li>
        @endif


    </ul>
</section>