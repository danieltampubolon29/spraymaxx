<x-sidebar>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h2>Product Create</h2>
            </div>
            <div class="card-body">
                <form action="{{ route('product.store') }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="jenis_kendaraan" class="form-label">Jenis Kendaraan</label>
                        <select class="form-select" id="jenis_kendaraan" name="jenis_kendaraan" required>
                            <option selected disabled>Pilih Jenis Kendaraan</option>
                            <option value="Motor">Motor</option>
                            <option value="Mobil">Mobil</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="merk" class="form-label">Merk</label>
                        <input required type="merk" class="form-control" id="merk" name="merk" placeholder="Masukkan Merk Kendaraan">
                    </div>
                    <div class="mb-3">
                        <label for="type" class="form-label">Type</label>
                        <input required type="text" class="form-control" id="type" name="type" placeholder="Masukkan Type Kendaraan">
                    </div>
                    <div class="mb-3">
                        <label for="harga" class="form-label">Harga</label>
                        <input required type="number" class="form-control" id="harga" name="harga" placeholder="Masukkan Harga">
                    </div>
                    <button type="submit" class="btn btn-primary float-end">Submit</button>
                    <a href="{{route('product.index')}}" class="btn btn-warning float-end me-3">Kembali</a>
                </form>
            </div>
            
        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

</x-sidebar>