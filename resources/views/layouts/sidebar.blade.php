<!-- Sidebar Start -->
<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div>
        <div class="head">

            <div class="brand-logo d-flex align-items-center">
                <a href="./index.html" class="text-nowrap logo-img">
                    <img src="{{ asset('images/logo-wide.png') }}" width="100%" height="50" alt=""
                        style="border-radius: 10px" />
                </a>
                <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                    <i class="ti ti-x fs-8"></i>
                </div>
            </div>

        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar mt-5" data-simplebar="">
            <ul id="sidebarnav">
                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{ route('admission-notices.index') }}" aria-expanded="false">
                        <span>
                            <i class="fas fa-newspaper"></i>
                        </span>
                        <span class="hide-menu">Admission Notice</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{ route('admission-forms.index') }}" aria-expanded="false">
                        <span>
                            <i class="fas fa-newspaper"></i>
                        </span>
                        <span class="hide-menu">Admission Form</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{ route('news.index') }}" aria-expanded="false">
                        <span>
                            <i class="fas fa-newspaper"></i>
                        </span>
                        <span class="hide-menu">News</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{ route('events.index') }}" aria-expanded="false">
                        <span>
                            <i class="fas fa-newspaper"></i>
                        </span>
                        <span class="hide-menu">Events</span>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
<!--  Sidebar End -->
