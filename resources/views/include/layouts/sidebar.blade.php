<div class="sticky">
    <div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
    <div class="app-sidebar">
        <div class="side-header">
            <a class="header-brand1" href="index.html">
                {{-- icon sash --}}
                <img src="../assets/images/brand/logo.png" class="header-brand-img desktop-logo" alt="logo">
                <img src="../assets/images/brand/logo-1.png" class="header-brand-img toggle-logo" alt="logo">
                <img src="../assets/images/brand/logo-2.png" class="header-brand-img light-logo" alt="logo">
                <img src="../assets/images/brand/logo-3.png" class="header-brand-img light-logo1" alt="logo">
            </a>
            <!-- LOGO -->
        </div>
        <div class="main-sidemenu">
            <div class="slide-left disabled" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191"
                    width="24" height="24" viewBox="0 0 24 24">
                    <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z" />
                </svg></div>

            <ul class="side-menu">

                <li class="sub-category">
                    <h3>Main</h3>
                </li>

                <li class="slide">
                    <a class="side-menu__item has-link active" data-bs-toggle="slide" href="dashboard"><i
                            class="side-menu__icon fe fe-home"></i><span class="side-menu__label">Dasboard</span></a>
                </li>

                <li class="sub-category">
                    <h3>MASTER</h3>
                </li>

                <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)">
                        <i class="side-menu__icon fe fe-users"></i><span class="side-menu__label">Data Pekerja</span>
                        <i class="angle fe fe-chevron-right"></i>
                    </a>
                    <ul class="slide-menu">
                        <li class="side-menu-label1"><a href="javascript:void(0)">DATA PEKERJA</a></li>
                        <li><a href="/data/" class="slide-item"> List Data</a></li>
                        <li><a href="/cetak/" class="slide-item"> Export Data</a></li>
                    </ul>
                </li>

                <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)">
                        <i class="side-menu__icon fe fe-folder"></i><span class="side-menu__label">E Document</span>
                        <i class="angle fe fe-chevron-right"></i><i class="angle fe fe-chevron-right hor-angle"></i>
                    </a>
                    <ul class="slide-menu">
                        <li class="side-menu-label1"><a href="javascript:void(0)"></a></li>
                        <li><a href="/document/show" class="slide-item"> List Document</a></li>
                        <li><a href="/document/index" class="slide-item"> Unggah Document</a></li>
                    </ul>
                </li>

                @can('admin')

                <li class="sub-category">
                    <h3>Management Users</h3>
                </li>

                <li class="slide">
                    <a class="side-menu__item has-link" data-bs-toggle="slide" href="/user"><i
                            class="side-menu__icon fe fe-user"></i><span class="side-menu__label">List
                            Account</span></a>
                </li>

                <li class="slide">
                    <a class="side-menu__item has-link" data-bs-toggle="slide" href="/register"><i
                            class="side-menu__icon fe fe-user-plus"></i>
                        <span class="side-menu__label">Create Account</span></a>
                </li>

                @endcan



                <li class="sub-category">
                    <h3>General</h3>
                </li>

                <li class="slide">
                    <a class="side-menu__item has-link" data-bs-toggle="slide" href="/profile"><i class="side-menu__icon fe fe-settings"></i><span
                            class="side-menu__label">Settings</span></a>
                </li>
                
                <li class="slide">
                    <a class="side-menu__item has-link" data-bs-toggle="slide" href=""><i class="side-menu__icon fe fe-log-out"></i>
                        <span class="side-menu__label">Logout</span></a>
                </li>

            </ul>
            <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191"
                    width="24" height="24" viewBox="0 0 24 24">
                    <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z" />
                </svg></div>
        </div>
    </div>

</div>
