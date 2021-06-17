<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link @if(request()->routeIs('categories.*')) active @endif" aria-current="page" href="{{ route('categories.index') }}">
                <span data-feather="home"></span>
                Категории
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link @if(request()->routeIs('news.*')) active @endif" href="{{ route('news.index') }}">
                <span data-feather="file"></span>
                Новости
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link @if(request()->routeIs('review.*')) active @endif" href="{{ route('review.index') }}">
                <span data-feather="users"></span>
                Отзывы
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link @if(request()->routeIs('order.*')) active @endif" href="{{ route('order.index') }}">
                <span data-feather="shopping-cart"></span>
                Заказы
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link @if(request()->routeIs('profile.*')) active @endif" href="{{ route('profile.index') }}">
                <span data-feather="bar-chart-2"></span>
                Профили пользователей
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                <span data-feather="layers"></span>
                Integrations
                </a>
            </li>
        </ul>

        <!--<h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
            <span>Saved reports</span>
            <a class="link-secondary" href="#" aria-label="Add a new report">
                <span data-feather="plus-circle"></span>
            </a>
        </h6>
        <ul class="nav flex-column mb-2">
            <li class="nav-item">
                <a class="nav-link" href="#">
                <span data-feather="file-text"></span>
                Current month
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                <span data-feather="file-text"></span>
                Last quarter
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                <span data-feather="file-text"></span>
                Social engagement
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                <span data-feather="file-text"></span>
                Year-end sale
                </a>
            </li>
        </ul>-->
    </div>
</nav>