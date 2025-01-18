<x-sidebar>
    <div class="container">
        <h1>Tambah Booking</h1>

        <form action="{{ route('booking.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
            </div>
            <div class="mb-3">
                <label for="no_wa" class="form-label">No WA</label>
                <input type="text" class="form-control" id="no_wa" name="no_wa" required>
            </div>
            <div class="mb-3">
                <label for="tanggal_booking" class="form-label">Tanggal Booking</label>
                <input type="date" class="form-control" id="tanggal_booking" name="tanggal_booking" required>
            </div>
            <div class="mb-3">
                <label for="nama_brand" class="form-label">Brand</label>
                <input type="text" value="{{$products->brand->nama_brand}}"  class="form-control" id="nama_brand" name="nama_brand" readonly>
            </div>
            <div class="mb-3">
                <label for="jenis_kendaraan" class="form-label">Jenis Kendaraan</label>
                <input type="text" value="{{$products->jenis_kendaraan}}" class="form-control" id="jenis_kendaraan" name="jenis_kendaraan" readonly>
            </div>
            <div class="mb-3">
                <label for="nama_tipe" class="form-label">Tipe Product</label>
                <input type="text" value="{{$products->nama_tipe}}" class="form-control" id="nama_tipe" name="nama_tipe" readonly>
            </div>
            <div class="mb-3">
                <label for="harga" class="form-label">Harga</label>
                <input type="number" value="{{$products->harga}}" class="form-control" id="harga" name="harga" readonly>
            </div>
                <input type="hidden" value="{{$auth}}" class="form-control" id="email" name="email" readonly>
            <button type="submit" class="btn btn-primary">Booking</button>
            <a class="btn btn-warning" href="{{route('booking.index')}}">Kembali</a>
        </form>
    </div>
</x-sidebar>
