<div class="container-fluid d-flex justify-content-end align-items-center p-2 border-bottom content-header">
    <form class="d-flex me-3" role="search">
        <input class="form-control me-2" type="search" placeholder="Tìm kiếm" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Tìm</button>
    </form>
    <div class="dropdown me-2">
        <button class="btn btn-primary dropdown-toggle rounded-circle" type="button" id="userDropdown"
            data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fa-solid fa-bell"></i>
        </button>
        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
            <li>
                <a class="dropdown-item" href="#">
                    Thông báo 1
                </a>
            </li>
        </ul>
    </div>
    <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle rounded-circle" type="button" id="userDropdown"
            data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fas fa-user"></i>
        </button>
        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
            <li>
                <a class="dropdown-item" href="#">
                    <i class="fas fa-user"></i> Xem thông tin
                </a>
            </li>
            <li>
                <a class="dropdown-item" href="#">
                    <i class="fas fa-sign-out-alt"></i> Đăng xuất
                </a>
            </li>
        </ul>
    </div>
</div>
