<x-sidebar>
    <x-header>Pricelist</x-header>

    <div class="container">

        <div class="table-responsive mt-4">
            <table id="table" class="table table-light table-striped table-hover table-bordered text-center">
            <thead>
                <tr>
                    <th class="table-dark text-center">No</th>
                    <th class="table-dark text-center">Brand</th>
                    <th class="table-dark text-center">Jenis Kendaraan</th>
                    <th class="table-dark text-center">Tipe Kendaraan</th>
                    <th class="table-dark text-center">Harga</th>
                    <th class="table-dark text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $product->brand->nama_brand }}</td>
                        <td>{{ $product->jenis_kendaraan }}</td>
                        <td>{{ $product->nama_tipe }}</td>
                        <td>Rp {{ number_format($product->harga, 0, ',', '.') }}</td>
                        <td>
                            <a class="btn btn-primary" href="{{ route('booking.show', $product->id) }}">Booking</a>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
    </div>
</x-sidebar>
