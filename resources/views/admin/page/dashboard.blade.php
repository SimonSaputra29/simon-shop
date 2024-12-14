@extends('admin.layout.index')

@section('content')
    <div class="d-flex flex-wrap gap-3">
        <!-- Total Product Card -->
        <div class="card shadow-sm border-0" style="width: 250px;">
            <div class="card-body">
                <div class="d-flex gap-2 align-items-center justify-start">
                    <span class="material-icons p-2 rounded-circle" style="font-size: 24px; color: #fff; background-color: #A6FF96">
                        inventory
                    </span>
                    <h5 class="p-0 m-0" style="color: #333;">Total Product</h5>
                </div>
                <span class="fs-2 p-0 m-0" style="font-weight: bold;">{{ $totalProduct }}</span>
            </div>
        </div>

        <!-- Total Stock Card -->
        <div class="card shadow-sm border-0" style="width: 250px;">
            <div class="card-body">
                <div class="d-flex gap-2 align-items-center justify-start">
                    <span class="material-icons p-2 rounded-circle" style="font-size: 24px; color: #fff; background-color: #F78CA2">
                        view_in_ar
                    </span>
                    <h5 class="p-0 m-0" style="color: #333;">Total Stock</h5>
                </div>
                <span class="fs-2 p-0 m-0" style="font-weight: bold;">{{ $sumStock }}</span>
            </div>
        </div>

        <!-- Transaction Card -->
        <div class="card shadow-sm border-0" style="width: 250px;">
            <div class="card-body">
                <div class="d-flex gap-2 align-items-center justify-start">
                    <span class="material-icons p-2 rounded-circle" style="font-size: 24px; color: #fff; background-color: #7ED7C1">
                        shopping_cart
                    </span>
                    <h5 class="p-0 m-0" style="color: #333;">Transaksi</h5>
                </div>
                <span class="fs-2 p-0 m-0" style="font-weight: bold;">{{ $dataTransaksi }}</span>
            </div>
        </div>

        <!-- Penghasilan Card -->
        <div class="card shadow-sm border-0" style="width: 250px;">
            <div class="card-body">
                <div class="d-flex gap-2 align-items-center justify-start">
                    <span class="material-icons p-2 rounded-circle" style="font-size: 24px; color: #fff; background-color: #F4F27E">
                        payments
                    </span>
                    <h5 class="p-0 m-0" style="color: #333;">Penghasilan</h5>
                </div>
                <span class="fs-2 p-0 m-0" style="font-weight: bold;">{{ number_format($dataPenghasilan / 1000000, 2) . ' Jt' }}</span>
            </div>
        </div>
    </div>

    <!-- Chart -->
    <div class="card mt-3 shadow-sm border-0">
        <canvas id="myChart" style="height: 50vh;"></canvas>
    </div>

    <!-- Stock terbatas and Product terlaris Tables -->
    <div class="d-flex flex-row gap-3 mt-4">
        <!-- Stock Terbatas -->
        <div class="card shadow-sm border-0 rounded" style="width: 50%;">
            <div class="card-header" style="background-color: #f1f1f1; font-weight: bold;">
                Stock Terbatas
            </div>
            <div class="card-body">
                <table class="table table-responsive table-striped" style="font-size: 12px;">
                    <thead>
                        <tr>
                            <th>Product</th>
                            <th>Inbound Date</th>
                            <th>Stock</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Dynamic rows will go here -->
                    </tbody>
                </table>
                <div class="pagination d-flex justify-content-between mt-2">
                    <!-- Pagination content here -->
                </div>
            </div>
        </div>

        <!-- Product Terlaris -->
        <div class="card shadow-sm border-0 rounded" style="width: 50%;">
            <div class="card-header" style="background-color: #f1f1f1; font-weight: bold;">
                Product Terlaris
            </div>
            <div class="card-body">
                <table class="table table-responsive table-striped" style="font-size: 12px;">
                    <thead>
                        <tr>
                            <th>Product</th>
                            <th>Inbound Date</th>
                            <th>Stock</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Dynamic rows will go here -->
                    </tbody>
                </table>
                <div class="pagination d-flex justify-content-between mt-2">
                    <!-- Pagination content here -->
                </div>
            </div>
        </div>
    </div>

    <!-- Chart Script -->
    <script>
        const ctx = document.getElementById('myChart');

        new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                datasets: [{
                    label: 'Transaksi',
                    data: [12, 19, 3, 5, 2, 3, 12, 19, 3, 5, 2, 3],
                    borderWidth: 2,
                    fill: false,
                    borderColor: 'rgb(75, 192, 192)',
                    tension: 0.1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                        grid: {
                            color: '#ddd'
                        }
                    },
                    x: {
                        grid: {
                            color: '#ddd'
                        }
                    }
                }
            }
        });
    </script>
@endsection
