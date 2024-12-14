<nav class="mb-3 d-flex justify-content-lg-between bg-white p-3 rounded shadow-sm">
    <div class="d-flex flex-column">
        <ol class="breadcrumb mb-1">
            <li class="breadcrumb-item active"><a href="#" class="text-decoration-none">{{ $name }}</a></li>
        </ol>
        <span class="h5 m-0">{{ $name }}</span>
    </div>
    <div class="d-flex align-items-center gap-3">
        <div class="icon-notif">
            <span class="material-icons" style="font-size: 24px;">
                notifications
            </span>
        </div>
        <div class="d-flex gap-2 align-items-center">
            <img src="{{ asset('storage/user/'. Auth::user()->foto) }}" class="rounded-circle" style="width: 50px; height: 50px; object-fit: cover;" alt="User Profile Picture">
            <div class="d-flex flex-column">
                <p class="m-0" style="font-weight: 700; font-size: 14px;">{{ Auth::user()->name }}</p>
                <p class="m-0" style="font-size: 12px;">{{ Auth::user()->email }}</p>
            </div>
        </div>
    </div>
</nav>
