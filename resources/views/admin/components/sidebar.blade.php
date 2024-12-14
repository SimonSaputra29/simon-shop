<aside class="sidebar navbar navbar-expand-lg bg-dark d-flex flex-column gap-4 align-items-start mx-2 my-2 p-3 rounded">
    <h5 class="navbar-brand text-white">Toko Online Kita</h5>
    <div class="collapse navbar-collapse flex-grow-0 w-100" id="navbarNavDropdown">
        <ul class="navbar-nav flex-column gap-3 px-2">
            <li class="navbar-item rounded {{ Request::path() === 'admin/dashboard' ? 'bg-info' : '' }}">
                <a href="dashboard" class="text-white d-flex align-items-center gap-3 py-2 px-3 rounded">
                    <span class="material-icons">dashboard</span>
                    <p class="m-0 p-0">Dashboard</p>
                </a>
            </li>
            <li class="navbar-item rounded {{ Request::path() === 'admin/product' ? 'bg-info' : '' }}">
                <a href="product" class="text-white d-flex align-items-center gap-3 py-2 px-3 rounded">
                    <span class="material-icons">inventory</span>
                    <p class="m-0 p-0">Product</p>
                </a>
            </li>
            <li class="navbar-item rounded {{ Request::path() === 'admin/transaksi' ? 'bg-info' : '' }}">
                <a href="transaksi" class="text-white d-flex align-items-center gap-3 py-2 px-3 rounded">
                    <span class="material-icons">receipt_long</span>
                    <p class="m-0 p-0">Transaksi</p>
                </a>
            </li>
            <li class="navbar-item rounded {{ Request::path() === 'admin/report' ? 'bg-info' : '' }}">
                <a href="report" class="text-white d-flex align-items-center gap-3 py-2 px-3 rounded">
                    <span class="material-icons">analytics</span>
                    <p class="m-0 p-0">Report</p>
                </a>
            </li>
            <li class="navbar-item rounded {{ Request::path() === 'admin/user_management' ? 'bg-info' : '' }}">
                <a href="user_management" class="text-white d-flex align-items-center gap-3 py-2 px-3 rounded">
                    <span class="material-icons">people_alt</span>
                    <p class="m-0 p-0">User Management</p>
                </a>
            </li>
            <li class="navbar-item">
                <a href="logout" class="text-white d-flex align-items-center gap-3 py-2 px-3 rounded">
                    <span class="material-icons">logout</span>
                    <p class="m-0 p-0">Logout</p>
                </a>
            </li>
        </ul>
    </div>
</aside>
