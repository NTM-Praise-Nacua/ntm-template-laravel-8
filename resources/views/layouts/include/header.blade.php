<header class="top-header">
    <nav class="navbar">
        <!-- Mobile toggle -->
        <div class="mobile-toggle-icon">
            <span></span>
            <span></span>
            <span></span>
        </div>

        <!-- Right side -->
        <div class="top-navbar-right">
            <ul class="navbar-nav">
                
                <!-- User dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link" href="#">
                        <div class="user-setting">
                            <img
                                src="assets/images/avatars/avatar-1.png"
                                class="user-img"
                                alt="User avatar"
                            >
                        </div>
                    </a>

                    <ul class="dropdown-menu">
                        <!-- User info -->
                        <li>
                            <a class="dropdown-item" href="#">
                                <img
                                    src="assets/images/avatars/avatar-1.png"
                                    class="user-img"
                                    alt="User avatar"
                                >
                                <div>
                                    <h6 class="dropdown-user-name">Jhon Deo</h6>
                                    <small class="dropdown-user-designation">
                                        HR Manager
                                    </small>
                                </div>
                            </a>
                        </li>

                        <li><hr class="dropdown-divider"></li>

                        <li>
                            <a class="dropdown-item" href="#">
                                {{-- <i class="bi bi-person-fill"></i> --}}
                                <span>Profile</span>
                            </a>
                        </li>

                        <li>
                            <a class="dropdown-item" href="#">
                                {{-- <i class="bi bi-gear-fill"></i> --}}
                                <span>Setting</span>
                            </a>
                        </li>

                        <li><hr class="dropdown-divider"></li>

                        <li>
                            <a class="dropdown-item" href="#">
                                {{-- <i class="bi bi-lock-fill"></i> --}}
                                <span id="logoutbtn">Logout</span>
                                <form id="logoutform" action="{{ route('logout') }}" method="post">
                                    @csrf
                                </form>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>