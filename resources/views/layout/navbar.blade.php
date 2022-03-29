<header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
    <a href="#" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">PeduliDiri</span>
    </a>
    </div><!-- End Logo -->

    <nav class="header-nav ms-auto">
    <ul class="d-flex align-items-center">
            <li>
                <a class="dropdown-item d-flex align-items-center" href="/user">
                    <i class="ri-account-circle-line"></i>
                <span>My Profile</span>
                </a>
            </li>
            @if (auth()->user()->role == 'user')
            <li>
                <a class="dropdown-item d-flex align-items-center" href="/perjalanan">
                    <i class="ri-run-line"></i>
                <span>Perjalanan</span>
                </a>
            </li>
            @endif
            @if (auth()->user()->role == 'admin')
            <li>
                <a class="dropdown-item d-flex align-items-center" href="/datauser">
                    <i class="ri-edit-line"></i>
                <span>Data User</span>
                </a>
            </li>
            @endif
            
            <li>
                <a class="dropdown-item d-flex align-items-center" href="/logout">
                <span>Sign Out</span>
                <i class="ri-arrow-right-circle-line"></i>
                </a>
            </li>

        
    </ul>
    </nav><!-- End Icons Navigation -->

</header>
