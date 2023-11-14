<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-left">
    <div class="sidebar-brand-icon">
        {{-- <i class="fas fa-house-user"></i> --}}
        <img src={{url('storage/image/LogoWeb.jpg')}}>
    </div>
    <div class="sidebar-brand-text">Nyepatu</div>
</a>

<!-- Divider -->
<hr class="sidebar-divider">
@if (Auth::user()->group_id == 1)
    <!-- Heading User -->
    <div class="sidebar-heading">
        User
    </div>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#userhome" aria-expanded="true"
            aria-controls="userhome">
            <i class="fas fa-home"></i>
            <span>Home</span>
        </a>
        <div id="userhome" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Home:</h6>
                <a class="collapse-item" href="/home">Home</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-store"></i>
            <span>Transaction</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">User Transaction:</h6>
                <a class="collapse-item" href="/cart">Shopping Cart</a>
                <a class="collapse-item" href="/orderList">Order List</a>
            </div>
        </div>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider">
@endif
@if (Auth::user()->group_id == 2)
    <!-- Heading Laundry Sepatu -->
    <div class="sidebar-heading">
        Laundry Sepatu
    </div>

    <li class="nav-item">
        <a class="nav-link collapsed" href="/home" data-toggle="collapse" data-target="#laundryhome"
            aria-expanded="true" aria-controls="laundryhome">
            <i class="fas fa-home"></i>
            <span>Home</span>
        </a>
        <div id="laundryhome" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Home:</h6>
                <a class="collapse-item" href="/home">Home</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#transactionCollapsePages"
            aria-expanded="true" aria-controls="transactionCollapsePages">
            <i class="fas fa-list-ul"></i>
            <span>Transaction</span>
        </a>
        <div id="transactionCollapsePages" class="collapse" aria-labelledby="headingPages"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Transaction:</h6>
                <a class="collapse-item" href="/laundryorder">Order List</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
            aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-th-large"></i>
            <span>Service</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Service:</h6>
                <a class="collapse-item" href="/laundryservice">Service List</a>
                <a class="collapse-item" href="/laundryservice/create">Add Service</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">
@endif
<!-- Nav Item - Admin -->
@if (Auth::user()->group_id == 3 || Auth::user()->group_id == 4)
    <!-- Heading -->
    <div class="sidebar-heading">
        Admin
    </div>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#adminhome"
            aria-expanded="true" aria-controls="adminhome">
            <i class="fas fa-home"></i>
            <span>Home</span>
        </a>
        <div id="adminhome" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Home:</h6>
                <a class="collapse-item" href="/home">Home</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse"
            data-target="#adminTransactionCollapsePages" aria-expanded="true"
            aria-controls="adminTransactionCollapsePages">
            <i class="fas fa-fw fa-folder"></i>
            <span>Transaction</span>
        </a>
        <div id="adminTransactionCollapsePages" class="collapse" aria-labelledby="headingPages"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Transaction:</h6>
                <a class="collapse-item" href="/order">Order List</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">
@endif

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>
