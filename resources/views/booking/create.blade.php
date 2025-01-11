<x-sidebar>
<h4>Booking</h4>

        <form action=" {{ route('booking.store')}}" method="post">
            @csrf
            <label>Nama</label>
            <input type="text" name="nama" class="form-control mb-2">
            <label>Tanggal Booking</label>
            <input type="date" name="tanggal_booking" class="form-control mb-2">
            <label for="jenis_kendaraan" class="form-label">Jenis Kendaraan</label>
            <select class="form-select" id="jenis_kendaraan" name="jenis_kendaraan" required>
                <option selected disabled>Pilih Jenis Kendaraan</option>
                <option value="Motor">Motor</option>
                <option value="Mobil">Mobil</option>
            </select>
            <label>Merk</label>
            <input type="text" name="merk" class="form-control mb-2">
            <label>Type</label>
            <input type="text" name="type" class="form-control mb-2">
            <label>Harga</label>
            <input type="number" name="harga" class="form-control mb-2">

            <button type="submit" class="btn btn-primary">Booking</button>
            <a href="{{ route('booking.dashboard') }}" class="btn btn-secondary">Kembali</a>
        </form>
</x-sidebar>