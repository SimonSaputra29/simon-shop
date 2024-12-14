@extends('pelanggan.layout.index')

@section('content')
    <h4 class="text-center mt-md-5 mb-md-2 text-primary">About Us</h4>

    <div class="row mt-4 align-items-center">
        <div class="col-md-6">
            <div class="content-text">
                Selamat datang di Simon Store!

                Kami adalah toko online yang didedikasikan untuk memberikan pengalaman berbelanja terbaik dengan menyediakan
                produk-produk berkualitas tinggi dan harga yang bersaing. Sejak didirikan, kami berkomitmen untuk menawarkan
                pilihan barang yang beragam dan memenuhi kebutuhan pelanggan dari berbagai kalangan. </div>
        </div>
        <div class="col-md-6">
            <img src="{{ asset('assets/images/office-2.png') }}" class="img-fluid rounded shadow-lg" alt="Office Image">
        </div>
    </div>

    <div class="d-flex justify-content-lg-between mt-5 mb-4">
        <div class="d-flex align-items-center gap-4">
            <i class="fa fa-users fa-2x text-primary"></i>
            <p class="m-0 fs-5">+ 300 Pelanggan</p>
        </div>
        <div class="d-flex align-items-center gap-4">
            <i class="fas fa-home fa-2x text-success"> </i>
            <p class="m-0 fs-5">+500 Seller</p>
        </div>
        <div class="d-flex align-items-center gap-4">
            <i class="fas fa-shirt fa-2x text-warning"></i>
            <p class="m-0 fs-5">+ 300 Produk</p>
        </div>
    </div>

    <h4 class="text-center mt-md-5 mb-md-2 text-primary">Contact Us</h4>
    <hr class="mb-5">

    <div class="row">
        <!-- Lokasi Kami (Google Maps) -->
        <div class="col-md-6">
            <div class="card shadow-lg border-0">
                <div class="card-header text-center bg-primary text-white">
                    <h4>Lokasi Kami</h4>
                </div>
                <div class="card-body p-0">
                    <!-- Google Maps Embed -->
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!3m2!1sid!2sid!4v1734184670185!5m2!1sid!2sid!6m8!1m7!1s8w7zr-5MfeG4rbzjAfhtww!2m2!1d-6.569709483295036!2d106.7680914403131!3f96.90807881405144!4f-5.507299008619981!5f0.7820865974627469"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>

        <!-- Kritik dan Saran Form -->
        <div class="col-md-6">
            <div class="card shadow-lg border-0">
                <div class="card-header text-center bg-primary text-white">
                    <h4>Kritik dan Saran</h4>
                </div>
                <div class="card-body">
                    <p class="p-0 mb-5 text-lg-center text-muted">Kami sangat senang mendengar dari Anda! Jika Anda memiliki
                        pertanyaan, saran, atau membutuhkan bantuan terkait produk atau layanan kami, jangan ragu untuk
                        menghubungi kami. Kami siap membantu Anda!
                    </p>
                    <form action="#" method="POST">
                        <div class="mb-3 row">
                            <label for="email" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="email" placeholder="Masukkan email Anda"
                                    required>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="pesan" class="col-sm-2 col-form-label">Pesan</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" id="pesan" placeholder="Masukkan pesan Anda" required rows="4"></textarea>
                            </div>
                        </div>
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary hover-shadow mt-3">Kirim Pesan Anda</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>  
@endsection
