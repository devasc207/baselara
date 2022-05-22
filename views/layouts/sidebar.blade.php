<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" aria-current="page" href="/">
                    <span data-feather="home" class="align-text-bottom"></span>
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('/sektoral') ? 'active' : '' }}" href="/sektoral">
                    <span data-feather="layers" class="align-text-bottom"></span>
                    Sektoral
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('/rencanakerja') ? 'active' : '' }" href="/rencanakerja">
                    <span data-feather="file" class="align-text-bottom"></span>
                    Rencana Kerja
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span data-feather="users" class="align-text-bottom"></span>
                    Pantau SP2DK
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span data-feather="bar-chart-2" class="align-text-bottom"></span>
                    Kepatuhan SPT Tahunan
                </a>
            </li>
        </ul>

    </div>
</nav>