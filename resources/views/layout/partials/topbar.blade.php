<!-- Topbar -->
<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

    <!-- Sidebar Toggle (Topbar) -->
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
    </button>

    <!-- Topbar Search -->
    <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
        <div class="input-group">
            <input type="text" class="form-control bg-gray-200 border-0 small" placeholder="Procurar por..." aria-label="Search" aria-describedby="basic-addon2">
            <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                    <i class="fas fa-search fa-sm"></i>
                </button>
            </div>
        </div>
    </form>

    <!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto">

        <!-- Nav Item - Contacts Search -->
        <li class="nav-item mx-1">
            <a class="nav-link" href="#" title="Procurar contacto" data-toggle="modal" data-target="#modalContacts">
                <i class="fas fa-phone fa-fw"></i>
            </a>
        </li>

        <!-- Nav Item - Report Bug -->
        <li class="nav-item mx-1 ml-2">
            <a class="nav-link" href="{{route("report")}}" title="Reportar problema">
                <i class="fas fa-bug fa-fw"></i>
            </a>
        </li>


        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
        <li class="nav-item dropdown no-arrow d-sm-none">
            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" title="Notificações">
                <i class="fas fa-search fa-fw"></i>
            </a>
            <!-- Dropdown - Messages -->
            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                    <div class="input-group">
                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="button">
                                <i class="fas fa-search fa-sm"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </li>

        <!-- Nav Item - Alerts -->
        <li class="nav-item dropdown no-arrow mx-1">
            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
                <!-- Counter - Alerts -->
                @if (count($allNotifications))
                <span class="badge badge-danger badge-counter">{{count($allNotifications)>3?'3+':count($allNotifications)}}</span>
                @endif
            </a>
            <!-- Dropdown - Alerts -->
            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header">
                    Centro de notificações
                </h6>
                @if (count($notifications))
                @foreach ($notifications as $notification)
                <a class="dropdown-item d-flex align-items-center" href="{{route("bugreport.show", $notification->data["idReport"])}}">
                    <div class="mr-3">
                        @if ($notification->data["subject"] == "BugReport")
                        <div class="icon-circle bg-danger">
                            <i class="fas fa-bug text-white"></i>
                        </div>
                        @endif
                    </div>
                    <div>
                        <div class="small text-gray-500">{{date('d/m/Y', strtotime($notification->created_at))}}</div>
                        <span class="font-weight-bold">O(A) {{$notification->data["name"]}} enviou um pedido de ajuda!</span>
                    </div>
                </a>
                @endforeach
                @if (count($allNotifications)>3)
                <a class="dropdown-item text-center small text-gray-500" href="#">Ver mais</a>
                @endif
                @else
                <p class="text-center mt-3 text-gray-800">wow, such empty :(</p>
                @endif
            </div>
        </li>

        <div class="topbar-divider d-none d-sm-block"></div>

        <!-- Nav Item - User Information -->
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                    @if (Auth()->user()->tipo == "admin")
                    {{Auth()->user()->admin->nome.' '.Auth()->user()->admin->apelido}}
                    @elseif (Auth()->user()->tipo == "agente")
                    {{Auth()->user()->agente->nome.' '.Auth()->user()->agente->apelido}}
                    @else
                    {{Auth()->user()->cliente->nome.' '.Auth()->user()->cliente->apelido}}
                    @endif
                </span>
                @if(Auth()->user()->admin->fotografia)
                    <img class="img-profile rounded-circle" src="{{Storage::disk('public')->url('admin-photos/').Auth()->user()->admin->fotografia}}" alt="Imagem de apresentação">
                    @elseif(Auth()->user()->admin->genero == 'F')
                        <img class="img-profile rounded-circle" src="{{Storage::disk('public')->url('default-photos/F.jpg')}}" alt="Imagem de apresentação">
                        @else
                        <img class="img-profile rounded-circle" src="{{Storage::disk('public')->url('default-photos/M.jpg')}}" alt="Imagem de apresentação">
                        @endif
            </a>
            <!-- Dropdown - User Information -->
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                    Profile
                </a>
                <a class="dropdown-item" href="#">
                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                    Settings
                </a>
                <a class="dropdown-item" href="#">
                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                    Activity Log
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#modalLogout">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Logout
                </a>
            </div>
        </li>

    </ul>

</nav>
<!-- End of Topbar -->
