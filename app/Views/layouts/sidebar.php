<nav class="pcoded-navbar">
    <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
    <div class="pcoded-inner-navbar main-menu">
        <div class="">
            <div class="main-menu-header">
                <img class="img-50 img-radius align-center" src="/assets/material_able-main/assets/images/profile8.png" alt="User-Profile-Image">
                <div class="user-details">
                    <span>Mail<i class=""></i></span>
                </div>
            </div>


        </div>
        <div class="pcoded-navigation-label">Home</div>
        <ul class="pcoded-item pcoded-left-item">

            <li class="nav-link <?= \Config\Services::request()->uri->getSegment(1) == '' ? 'active' : '' ?>" aria-current="page" href="/">
                <a href="/" class="waves-effect waves-dark">
                    <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                    <span class="pcoded-mtext">Dashboard</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
        </ul>

        <div class="pcoded-navigation-label">Notes</div>
        <ul class="pcoded-item pcoded-left-item">
            <li class="nav-link <?= \Config\Services::request()->uri->getSegment(1) == 'notes' ? 'active' : '' ?>" href="/notes/create">
                <a href="/notes/create" class="waves-effect waves-dark">
                    <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                    <span class="pcoded-mtext">Create Note</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class="nav-link <?= \Config\Services::request()->uri->getSegment(1) == 'category' ? 'active' : '' ?>" href="/notes/category">
                <a href="/notes/category/" class="waves-effect waves-dark">
                    <span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i><b>FC</b></span>
                    <span class="pcoded-mtext">Note's Category</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
        </ul>
    </div>
</nav>