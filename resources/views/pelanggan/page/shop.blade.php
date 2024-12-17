@extends('pelanggan.layout.index')

@section('content')
    <div class="d-flex flex-column gap-4 mt-4">
        <div class="row">
            <!-- Sidebar Kategori -->
            <div class="col-md-3 col-12">
                <div class="card">
                    <div class="card-header">
                        Kategori
                    </div>
                    <div class="card-body">
                        <div class="accordion accordion-flush" id="accordionFlushExample">
                            <!-- Accordion for Categories -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseOne" aria-expanded="false"
                                        aria-controls="flush-collapseOne">
                                        Pria
                                    </button>
                                </h2>
                                <div id="flush-collapseOne" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <div class="d-flex flex-column gap-4">
                                            <div class="d-flex flex-row gap-3">
                                                <input type="checkbox" name="kategory" class="kategory" value="celana Pria">
                                                <span>Celana Pria</span>
                                            </div>
                                            <div class="d-flex flex-row gap-3">
                                                <input type="checkbox" name="kategory" class="kategory" value="baju Pria">
                                                <span>Baju Pria</span>
                                            </div>
                                            <div class="d-flex flex-row gap-3">
                                                <input type="checkbox" name="kategory" class="kategory"
                                                    value="aksesoris Pria">
                                                <span>Aksesoris Pria</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Wanita -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                        aria-controls="flush-collapseTwo">
                                        Wanita
                                    </button>
                                </h2>
                                <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <div class="d-flex flex-column gap-4">
                                            <div class="d-flex flex-row gap-3">
                                                <input type="checkbox" name="kategory" class="kategory"
                                                    value="celana Wanita">
                                                <span>Celana Wanita</span>
                                            </div>
                                            <div class="d-flex flex-row gap-3">
                                                <input type="checkbox" name="kategory" class="kategory" value="baju Wanita">
                                                <span>Baju Wanita</span>
                                            </div>
                                            <div class="d-flex flex-row gap-3">
                                                <input type="checkbox" name="kategory" class="kategory"
                                                    value="aksesoris Wanita">
                                                <span>Aksesoris Wanita</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Anak-anak -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseThree" aria-expanded="false"
                                        aria-controls="flush-collapseThree">
                                        Anak-anak
                                    </button>
                                </h2>
                                <div id="flush-collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <div class="d-flex flex-column gap-4">
                                            <div class="d-flex flex-row gap-3">
                                                <input type="checkbox" name="kategory" class="kategory"
                                                    value="celana anak-anak">
                                                <span>Celana Anak-anak</span>
                                            </div>
                                            <div class="d-flex flex-row gap-3">
                                                <input type="checkbox" name="kategory" class="kategory"
                                                    value="baju anak-anak">
                                                <span>Baju Anak-anak</span>
                                            </div>
                                            <div class="d-flex flex-row gap-3">
                                                <input type="checkbox" name="kategory" class="kategory"
                                                    value="aksesoris anak-anak">
                                                <span>Aksesoris Anak-anak</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Produk -->
            <div class="col-md-9 col-12">
                <div class="row" id="filterResult">
                    @if ($data->isEmpty())
                        <h1>Belum ada produk ...!</h1>
                    @else
                        @foreach ($data as $p)
                            <div class="col-md-4 col-sm-6 col-12">
                                <div class="card">
                                    <div class="card-header m-auto mt-3 mt-sm-4">
                                        <img src="{{ asset('storage/product/' . $p->foto) }}" alt="baju 1"
                                            class="img-fluid" style="height: 130px; object-fit: cover; padding: 0;">
                                    </div>
                                    <div class="card-body text-center">
                                        <p class="m-0" style="font-size: 14px;">{{ $p->nama_product }}</p>
                                        <p class="m-0"><i class="fa-regular fa-star"></i> 5+</p>
                                    </div>
                                    <div class="card-footer d-flex justify-content-between align-items-center">
                                        <p class="m-0" style="font-size: 14px; font-weight:600;">
                                            IDR {{ number_format($p->harga) }}</p>
                                        <button class="btn btn-outline-primary" style="font-size:24px">
                                            <i class="fa-solid fa-cart-plus"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>

                <!-- Pagination -->
                <div class="pagination d-flex justify-content-between mt-4">
                    <div class="showData">
                        Data ditampilkan {{ $data->count() }} dari {{ $data->total() }}
                    </div>
                    <div>
                        {{ $data->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
