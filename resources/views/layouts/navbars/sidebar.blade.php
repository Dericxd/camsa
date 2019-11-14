<div class="sidebar" data-color="orange" data-background-color="black"
     data-image="{{ asset('material') }}/img/sidebar-1.jpg">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
    <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text logo-mini">
            CT
        </a>
        <a href="http://www.creative-tim.com" class="simple-text logo-normal">
            Creative Tim
        </a>
    </div>
    <div class="sidebar-wrapper ps-container ps-theme-default ps-active-y"
         data-ps-id="542b618d-7360-9463-92e2-45799a500852">
        <!--    Usuario loged   -->
        <div class="user">
            <div class="photo">
                <img src="http://i.pravatar.cc/200">
            </div>
            <div class="user-info">
                <a data-toggle="collapse" href="#collapseExample" class="username">
          <span>
            {{ auth()->user()->name }}
            <b class="caret"></b>
          </span>
                </a>
                <div class="collapse" id="collapseExample">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link" href="https://material-dashboard-pro-laravel.creative-tim.com/profile">
                                <span class="sidebar-mini"> MP </span>
                                <span class="sidebar-normal"> My Profile </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('profile.edit',auth()->user()->id) }}">
                                <span class="sidebar-mini"> EP </span>
                                <span class="sidebar-normal"> Edit Profile </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--    Usuario loged   -->

        <ul class="nav">
            <!--    Home    -->
            <li class="nav-item{{ $activePage == 'dashboard' ? ' active' : '' }}">
                <a class="nav-link" href="{{ route('home') }}">
                    <i class="material-icons">dashboard</i>
                    <p>{{ __('Dashboard') }}</p>
                </a>
            </li>
            <!--    Home    -->

            <!--    usuarios    -->
            <li class="nav-item {{ ($activePage == 'profile' || $activePage == 'user-management') ? ' active' : '' }}">
                <a class="nav-link" data-toggle="collapse" href="#userDrop" aria-expanded="false">
                    <i><img style="width:25px" src="{{ asset('material') }}/img/laravel.svg"></i>
                    <p>
                        {{ __('Gestión usuarios ') }}
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse " id="userDrop">
                    <ul class="nav">
                        <li class="nav-item{{ $activePage == 'profile' ? ' active' : '' }}">
                            <a class="nav-link" href="{{ route('profile.edit') }}">
                                <span class="sidebar-mini"> PU </span>
                                <span class="sidebar-normal">{{ __('User profile') }} </span>
                            </a>
                        </li>
                        <li class="nav-item{{ $activePage == 'user-management' ? ' active' : '' }}">
                            <a class="nav-link" href="{{ route('user.index') }}">
                                <span class="sidebar-mini"> GU </span>
                                <span class="sidebar-normal"> {{ __('Gestión de usuarios') }} </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <!--    usuarios    -->

            <!--    vehiculos   -->
            <li class="nav-item {{ ($activePage == 'create-vehicle' || $activePage == 'vehicle-management') ? ' active' : '' }}">
                <a class="nav-link" data-toggle="collapse" href="#carDrop" aria-expanded="false">
                    <i class="material-icons">local_shipping</i>
                    <p>
                        {{ __('Gestion vehiculos') }}
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse " id="carDrop">
                    <ul class="nav">
                        <li class="nav-item{{ $activePage == 'create-vehicle' ? ' active' : '' }}">
                            <a class="nav-link" href="{{ route('vehicles.create') }}">
                                <span class="sidebar-mini"> RV </span>
                                <span class="sidebar-normal">{{ __('Registrar vehiculo') }} </span>
                            </a>
                        </li>
                        <li class="nav-item{{ $activePage == 'vehicle-management' ? ' active' : '' }}">
                            <a class="nav-link" href="{{ route('vehicles.index') }}">
                                <span class="sidebar-mini"> GV </span>
                                <span class="sidebar-normal"> {{ __('Gestión vehiculos') }} </span>
                            </a>
                        </li>
                    </ul>
                </div>

            </li>
            <!--    vehiculos   -->

            <!--    conductores -->
            <li class="nav-item {{ ($activePage == 'create-driver' || $activePage == 'driver-management') ? ' active' : '' }}">
                <a class="nav-link" data-toggle="collapse" href="#driverDrop" aria-expanded="false">
                    <i class="material-icons">contacts</i>
                    <p>
                        {{ __('Gestion Conductores') }}
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse " id="driverDrop">
                    <ul class="nav">
                        <li class="nav-item{{ $activePage == 'create-driver' ? ' active' : '' }}">
                            <a class="nav-link" href="{{ route('drivers.create') }}">
                                <span class="sidebar-mini"> RD </span>
                                <span class="sidebar-normal">{{ __('Registrar conductor') }} </span>
                            </a>
                        </li>
                        <li class="nav-item{{ $activePage == 'driver-management' ? ' active' : '' }}">
                            <a class="nav-link" href="{{ route('drivers.index') }}">
                                <span class="sidebar-mini"> GD </span>
                                <span class="sidebar-normal"> {{ __('Gestión Conductor') }} </span>
                            </a>
                        </li>
                    </ul>
                </div>

            </li>
            <!--    conductores -->

            <!--    DSalidas    -->
            <li class="nav-item {{ ($activePage == 'create-dOut' || $activePage == 'dOut-management') ? ' active' : '' }}">
                <a class="nav-link" data-toggle="collapse" href="#outDrop" aria-expanded="false">
                    <i class="material-icons">vertical_align_top</i>
                    <p>
                        {{ __('Gestion Salidas') }}
                        <b class="caret"></b>
                    </p>
                </a>

                <div class="collapse " id="outDrop">
                    <ul class="nav">
                        <li class="nav-item{{ $activePage == 'create-dOut' ? ' active' : '' }}">
                            <a class="nav-link" href="{{ route('dispatchouts.create') }}">
                                <span class="sidebar-mini"> RS </span>
                                <span class="sidebar-normal">{{ __('Registrar Salida') }} </span>
                            </a>
                        </li>
                        <li class="nav-item{{ $activePage == 'dOut-management' ? ' active' : '' }}">
                            <a class="nav-link" href="{{ route('dispatchouts.index') }}">
                                <span class="sidebar-mini"> GS </span>
                                <span class="sidebar-normal"> {{ __('Gestión Salidas') }} </span>
                            </a>
                        </li>
                    </ul>
                </div>

            </li>
            <!--    DSalidas    -->

            <!--    DEntradas    -->
            <li class="nav-item {{ ($activePage == 'create-dIn' || $activePage == 'dIn-management') ? ' active' : '' }}">
                <a class="nav-link" data-toggle="collapse" href="#inDrop" aria-expanded="false">
                    <i class="material-icons">vertical_align_bottom</i>
                    <p>
                        {{ __('Gestion Entradas') }}
                        <b class="caret"></b>
                    </p>
                </a>

                <div class="collapse " id="inDrop">
                    <ul class="nav">
                        <li class="nav-item{{ $activePage == 'create-dIn' ? ' active' : '' }}">
                            <a class="nav-link" href="{{ route('dispatchins.create') }}">
                                <span class="sidebar-mini"> RE </span>
                                <span class="sidebar-normal">{{ __('Registrar Entrada') }} </span>
                            </a>
                        </li>
                        <li class="nav-item{{ $activePage == 'dIn-management' ? ' active' : '' }}">
                            <a class="nav-link" href="{{ route('dispatchins.store') }}">
                                <span class="sidebar-mini"> GE </span>
                                <span class="sidebar-normal"> {{ __('Gestión Entradas') }} </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <!--    DEntradas    -->

            <!--    Producto    -->
            <li class="nav-item {{ ($activePage == 'create-product' || $activePage == 'product-management') ? ' active' : '' }}">
                <a class="nav-link" data-toggle="collapse" href="#productDrop" aria-expanded="false">
                    <i class="material-icons">vertical_align_bottom</i>
                    <p>
                        {{ __('Gestion Producto') }}
                        <b class="caret"></b>
                    </p>
                </a>

                <div class="collapse " id="productDrop">
                    <ul class="nav">
                        <li class="nav-item{{ $activePage == 'create-product' ? ' active' : '' }}">
                            <a class="nav-link" href="{{ route('products.create') }}">
                                <span class="sidebar-mini"> RP </span>
                                <span class="sidebar-normal">{{ __('Registrar Producto') }} </span>
                            </a>
                        </li>
                        <li class="nav-item{{ $activePage == 'product-management' ? ' active' : '' }}">
                            <a class="nav-link" href="{{ route('products.index') }}">
                                <span class="sidebar-mini"> GP </span>
                                <span class="sidebar-normal"> {{ __('Gestión Productos') }} </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <!--    Producto    -->

            <!--    OGuias      -->
            <li class="nav-item{{ $activePage == 'language' ? ' active' : '' }}">
                <a class="nav-link" href="{{ route('language') }}">
                    <i class="material-icons">language</i>
                    <p>{{ __('RTL Support') }}</p>
                </a>
            </li>
            <!--    OGuias      -->

        </ul>
        <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 0px;">
            <div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div>
        </div>
        <div class="ps-scrollbar-y-rail" style="top: 0px; height: 656px; right: 0px;">
            <div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 455px;"></div>
        </div>
    </div>
    <div class="sidebar-background"
         style="background-image: url(https://material-dashboard-pro-laravel.creative-tim.com/material/img/sidebar-1.jpg) "></div>
</div>
