<aside class="sidebar">
    <div class="p-2 logo text-center border-bottom">
        <span class="logo-text d-none d-md-block rounded p-1">
            <a class="link-underline link-underline-opacity-0 link-dark" href="{{ route('home') }}">
                <h5>{{ 'Nguyen-App' }} </h5>
            </a>
        </span>
        <span class="logo-icon d-block d-md-none  p-1">
            <a class="link-underline link-underline-opacity-0 link-dark" href="{{ route('home') }}">
                <h5>{{ 'N' }} </h5>
            </a>
        </span>
    </div>
    <ul class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link active" href="#" style="background-color: #e9ecef;">
                <i class="border rounded p-2 bg-dark-subtle fa-solid fa-house"></i>
                <span class="d-none d-md-inline">{{ 'Trang chủ' }} </span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="border rounded p-2 bg-dark-subtle fas fa-users"></i>
                <span class="d-none d-md-inline">{{ 'Người dùng' }} </span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="border rounded p-2 bg-dark-subtle fas fa-user-cog"></i>
                <span class="d-none d-md-inline">{{ 'Khách hàng' }} </span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="border rounded p-2 bg-dark-subtle fas fa-briefcase"></i>
                <span class="d-none d-md-inline">{{ 'Công việc' }} </span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="border rounded p-2 bg-dark-subtle fas fa-handshake"></i>
                <span class="d-none d-md-inline">{{ 'Đối tác' }} </span>
            </a>
        </li>
    </ul>
</aside>
