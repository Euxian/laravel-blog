<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
                    <span data-feather="home" class="align-text-bottom"></span>
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/blog*') ? 'active' : '' }}" aria-current="page" href="/dashboard/blog">
                    <span data-feather="file-text" class="align-text-bottom"></span>
                    Blog
                </a>
            </li>
        </ul>
    </div>
</nav>