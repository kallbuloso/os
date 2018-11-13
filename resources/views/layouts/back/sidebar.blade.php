        <nav id="sidebar">
            <!-- Sidebar Scroll Container -->
            <div id="sidebar-scroll">
                <!-- Sidebar Content -->
                <!-- Adding .sidebar-mini-hide to an element will hide it when the sidebar is in mini mode -->
                <div class="sidebar-content">
                    <!-- Side Header -->
                    <div class="side-header side-content bg-white-op">
                    <!-- Layout API, functionality initialized in App() -> uiLayoutApi() -->
                    <button class="btn btn-link text-gray pull-right hidden-md hidden-lg" type="button" data-toggle="layout" data-action="sidebar_close">
                        <i class="fa fa-times"></i>
                    </button>
                    <!-- Themes functionality initialized in App() -> uiHandleTheme() -->
                    <div class="btn-group pull-right">

                    @include('layouts.default.themeCollor')

                    </div>
                        <a class="h5 text-white" href="{{ url('/') }}">
                            <i class="fa fa-circle-o-notch text-primary"></i> <span class="h4 font-w600 sidebar-mini-hide">E-<i>Lyder</i>.com</span>
                        </a>
                    </div>
                    <!-- END Side Header -->

                    <!-- Side Content -->
                    <div class="side-content">
                        <ul class="nav-main">
                            <li>
                                <a class="{{ request()->is('dashboard') ? 'active' : '' }}" href="{{ route('dashboard') }}"><i class="si si-speedometer"></i><span class="sidebar-mini-hide">Dashboard</span></a>
                            </li>
                            <li class="nav-main-heading"><span class="sidebar-mini-hide">Ordens de Serviços</span></li>
                            <li class="nav-main-heading"><span class="sidebar-mini-hide">Cadastros</span></li>
                            @include('customers::layouts.menu')
                        </ul>
                    </div>
                    <!-- END Side Content -->
                </div>
                <!-- Sidebar Content -->
            </div>
            <!-- END Sidebar Scroll Container -->
        </nav>