@inject('request', 'Illuminate\Http\Request')
<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <ul class="sidebar-menu">

             

            <li class="{{ $request->segment(1) == 'home' ? 'active' : '' }}">
                <a href="{{ url('/') }}">
                    <i class="fa fa-home"></i>
                    <span class="title">Go to Site</span>
                </a>
            </li>

            @can('user_management_access')
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-users"></i>
                    <span>@lang('global.user-management.title')</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    @can('permission_access')
                    <li>
                        <a href="{{ route('admin.permissions.index') }}">
                            <i class="fa fa-briefcase"></i>
                            <span>@lang('global.permissions.title')</span>
                        </a>
                    </li>@endcan
                    
                    @can('role_access')
                    <li>
                        <a href="{{ route('admin.roles.index') }}">
                            <i class="fa fa-briefcase"></i>
                            <span>@lang('global.roles.title')</span>
                        </a>
                    </li>@endcan
                    
                    @can('user_access')
                    <li>
                        <a href="{{ route('admin.users.index') }}">
                            <i class="fa fa-user"></i>
                            <span>@lang('global.users.title')</span>
                        </a>
                    </li>@endcan
                    
                </ul>
            </li>@endcan
            
            @can('gestaoconteudo_access')
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-gears"></i>
                    <span>@lang('global.gestaoconteudo.title')</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    @can('categoria_access')
                    <li>
                        <a href="{{ route('admin.categorias.index') }}">
                            <i class="fa fa-list-alt"></i>
                            <span>@lang('global.categorias.title')</span>
                        </a>
                    </li>@endcan
                    
                    @can('banner_access')
                    <li>
                        <a href="{{ route('admin.banners.index') }}">
                            <i class="fa fa-camera"></i>
                            <span>@lang('global.banner.title')</span>
                        </a>
                    </li>@endcan
                    
                    @can('video_access')
                    <li>
                        <a href="{{ route('admin.videos.index') }}">
                            <i class="fa fa-video-camera"></i>
                            <span>@lang('global.video.title')</span>
                        </a>
                    </li>@endcan
                    
                    @can('atividade_access')
                    <li>
                        <a href="{{ route('admin.atividades.index') }}">
                            <i class="fa fa-th-list"></i>
                            <span>@lang('global.atividades.title')</span>
                        </a>
                    </li>@endcan
                    
                    @can('cliente_access')
                    <li>
                        <a href="{{ route('admin.clientes.index') }}">
                            <i class="fa fa-user"></i>
                            <span>@lang('global.clientes.title')</span>
                        </a>
                    </li>@endcan
                    
                    @can('depoimento_access')
                    <li>
                        <a href="{{ route('admin.depoimentos.index') }}">
                            <i class="fa fa-quote-left"></i>
                            <span>@lang('global.depoimentos.title')</span>
                        </a>
                    </li>@endcan
                    
                    @can('info_access')
                    <li>
                        <a href="{{ route('admin.infos.index') }}">
                            <i class="fa fa-adn"></i>
                            <span>@lang('global.infos.title')</span>
                        </a>
                    </li>@endcan
                    
                </ul>
            </li>@endcan
            

            

            



            <li class="{{ $request->segment(1) == 'change_password' ? 'active' : '' }}">
                <a href="{{ route('auth.change_password') }}">
                    <i class="fa fa-key"></i>
                    <span class="title">@lang('global.app_change_password')</span>
                </a>
            </li>

            <li>
                <a href="#logout" onclick="$('#logout').submit();">
                    <i class="fa fa-arrow-left"></i>
                    <span class="title">@lang('global.app_logout')</span>
                </a>
            </li>
        </ul>
    </section>
</aside>

