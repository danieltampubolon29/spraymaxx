<x-sidebar>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h2>Product Edit</h2>
            </div>
            <div class="card-body">
                <form action="{{ route('product.update', $product->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="jenis_kendaraan" class="form-label">Jenis Kendaraan</label>
                        <select class="form-select" id="jenis_kendaraan" name="jenis_kendaraan" required>
                            <!-- Opsi default dengan value yang dipilih -->
                            <option value="{{ $product->jenis_kendaraan }}" selected>
                                {{ $product->jenis_kendaraan }}
                            </option>
                            <!-- Opsi lain, hanya ditampilkan jika tidak sama dengan nilai yang dipilih -->
                            @if($product->jenis_kendaraan !== 'Mobil')
                                <option value="Mobil">Mobil</option>
                            @endif
                            @if($product->jenis_kendaraan !== 'Motor')
                                <option value="Motor">Motor</option>
                            @endif
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="merk" class="form-label">Merk</label>
                        <input required type="merk" value="{{ $product->merk }}" class="form-control" id="merk"
                            name="merk">
                    </div>
                    <div class="mb-3">
                        <label for="type" class="form-label">Type</label>
                        <input required type="text" value="{{ $product->type }}" class="form-control" id="type"
                            name="type">
                    </div>
                    <div class="mb-3">
                        <label for="harga" class="form-label">Harga</label>
                        <input required type="number" value="{{ $product->harga }}" class="form-control" id="harga"
                            name="harga">
                    </div>
                    <button type="submit" class="btn btn-primary float-end">Edit</button>
                    <a href="{{ route('product.index') }}" class="btn btn-warning float-end me-3">Kembali</a>
                </form>
            </div>

        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

</x-sidebar>