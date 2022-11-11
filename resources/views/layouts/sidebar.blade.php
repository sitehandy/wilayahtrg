<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('dashboard') }}">
        <img src="{{ asset('themes/assets/images/tm-logo.png') }}" class="img-fluid" style="max-height: 40px">
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>DASHBOARD</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        MODULE
    </div>

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCpe"
            aria-expanded="true" aria-controls="collapseCpe">
            <i class="fas fa-folder-open"></i>
            <span>CPE REPLACEMENT</span>
        </a>
        <div id="collapseCpe" class="collapse" aria-labelledby="headingUtilities"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Menu:</h6>
                <a class="collapse-item" href="{{ route('cpe.index') }}">Reporting</a>
                <a class="collapse-item" href="{{ route('cpe.create') }}">Add New</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSite"
            aria-expanded="true" aria-controls="collapseSite">
            <i class="fas fa-flag-checkered"></i>
            <span>SITE SURVEY</span>
        </a>
        <div id="collapseSite" class="collapse" aria-labelledby="headingUtilities"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Menu:</h6>
                <a class="collapse-item" href="{{ route('site.index') }}">Reporting</a>
                <a class="collapse-item" href="{{  route('site.create') }}">Add New</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseInventory"
            aria-expanded="true" aria-controls="collapseInventory">
            <i class="fas fa-folder-open"></i>
            <span>INVENTORY</span>
        </a>
        <div id="collapseInventory" class="collapse" aria-labelledby="headingUtilities"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Menu:</h6>
                <a class="collapse-item" href="{{ route('inventories.index') }}">Reporting</a>
                <a class="collapse-item" href="{{  route('inventories.create') }}">Add New</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Heading -->
    <div class="sidebar-heading">
        MANAGEMENT
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUsers"
            aria-expanded="true" aria-controls="collapseUsers">
            <i class="fas fa-fw fa-users"></i>
            <span>USERS</span>
        </a>
        <div id="collapseUsers" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Menu:</h6>
                <a class="collapse-item" href="{{ route('users.index') }}">View All</a>
                <a class="collapse-item" href="{{ route('users.create') }}">Add New</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBrands"
            aria-expanded="true" aria-controls="collapseBrands">
            <i class="fas fa-fw fa-tags"></i>
            <span>BRAND</span>
        </a>
        <div id="collapseBrands" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Menu:</h6>
                <a class="collapse-item" href="{{ route('brands.index') }}">View All</a>
                <a class="collapse-item" href="{{ route('brands.create') }}">Add New</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseDevices"
            aria-expanded="true" aria-controls="collapseDevices">
            <i class="fas fa-fw fa-phone"></i>
            <span>DEVICE TYPES</span>
        </a>
        <div id="collapseDevices" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Menu:</h6>
                <a class="collapse-item" href="{{ route('devices.index') }}">View All</a>
                <a class="collapse-item" href="{{ route('devices.create') }}">Add New</a>
            </div>
        </div>
    </li>


    <li class="nav-item">
        <a class="nav-link" href="{{ route('logout') }}">
            <i class="fas fa-sign-out-alt"></i>
            <span>LOGOUT</span></a>
    </li>

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
