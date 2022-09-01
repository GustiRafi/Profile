<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Home</div>
                <a class="nav-link" href="/dashboard">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>
                <div class="sb-sidenav-menu-heading">Menu</div>
                <a class="nav-link" href="/dashboard/intro">
                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                    Introduction
                </a>
                <a class="nav-link" href="/dashboard/about">
                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                    About
                </a>
                <a class="nav-link" href="/dashboard/sosmed">
                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                    Sosial Media
                </a>
                <a class="nav-link" href="/dashboard/alamat">
                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                    Address
                </a>
                <a class="nav-link" href="/dashboard/contact">
                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                    Contact
                </a>
                <a class="nav-link" href="/dashboard/skill">
                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                    My Skill
                </a>
                <a class="nav-link" href="/dashboard/project">
                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                    My Project
                </a>
                <a class="nav-link" href="/dashboard/certificate">
                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                    Certificate
                </a>
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            {{ auth()->user()->name }}
        </div>
    </nav>
</div>