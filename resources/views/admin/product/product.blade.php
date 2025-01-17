<x-sidebar>
    <x-header>Product Page</x-header>
    <div class="container ">
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
            <div class="d-flex justify-content-between mb-3 mt-3">
                <a class="btn btn-warning" href="{{ route('brand.index') }}">Brand</a>
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createModal">Tambah Product</button>
        </div>
        <div class="table-responsive">
            <table id="table" class="table table-light table-striped table-hover table-bordered text-center">
                <thead>
                    <tr>
                        <th class="table-dark text-center">No</th>
                        <th class="table-dark text-center">Nama Brand</th>
                        <th class="table-dark text-center">Jenis Kendaraan</th>
                        <th class="table-dark text-center">Tipe Product</th>
                        <th class="table-dark text-center">Harga</th>
                        <th class="table-dark text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($product as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->brand ? $item->brand->nama_brand : 'Tidak ada Brand   ' }}</td>
                            <td>{{ $item->jenis_kendaraan }}</td>
                            <td>{{ $item->nama_tipe }}</td>
                            <td>{{ $item->harga }}</td>
                            <td>
                                <button class="btn btn-warning btn-sm" data-bs-toggle="modal"
                                    data-bs-target="#editModal{{ $item->id }}">Edit</button>
                                <button class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                    data-bs-target="#deleteModal{{ $item->id }}">Hapus</button>
                            </td>
                        </tr>

                        <!-- Modal Edit -->
                        <div class="modal fade" id="editModal{{ $item->id }}" tabindex="-1"
                            aria-labelledby="editModalLabel{{ $item->id }}" aria-hidden="true"
                            data-bs-backdrop="false">
                            <div class="modal-dialog">
                                <form action="{{ route('product.update', $item->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="editModalLabel{{ $item->id }}">Edit Product
                                            </h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="mb-3">
                                                <label for="brand_id" class="form-label">Pilih Brand</label>
                                                <select name="brand_id" id="brand_id" class="form-control" required>
                                                    <option value="">Pilih Brand</option>
                                                    @foreach ($brand as $b)
                                                        <option value="{{ $b->id }}"
                                                            {{ $item->brand_id == $b->id ? 'selected' : '' }}>
                                                            {{ $b->nama_brand }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label for="jenis_kendaraan" class="form-label">Jenis Kendaraan</label>
                                                <input type="text" name="jenis_kendaraan" id="jenis_kendaraan"
                                                    class="form-control" value="{{ $item->jenis_kendaraan }}" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="nama_tipe" class="form-label">Tipe Product</label>
                                                <input type="text" name="nama_tipe" id="nama_tipe"
                                                    class="form-control" value="{{ $item->nama_tipe }}" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="harga" class="form-label">Harga</label>
                                                <input type="number" name="harga" id="harga" class="form-control"
                                                    value="{{ $item->harga }}" required>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Batal</button>
                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <!-- Modal Delete -->
                        <div data-bs-backdrop="false" class="modal fade" id="deleteModal{{ $item->id }}"
                            tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="deleteModalLabel">Konfirmasi Hapus</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Apakah Anda yakin ingin menghapus Product
                                        <strong>{{ $item->nama_tipe }}</strong>?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Batal</button>
                                        <form action="{{ route('product.destroy', $item->id) }}" method="POST"
                                            class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Hapus</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- Modal Tambah -->
    <div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="createModalLabel" aria-hidden="true"
        data-bs-backdrop="false">
        <div class="modal-dialog">
            <form action="{{ route('product.store') }}" method="POST">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="createModalLabel">Tambah Merk</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="brand_id" class="form-label">Pilih Kendaraan</label>
                            <select name="brand_id" id="brand_id" class="form-control" required>
                                <option value="">Pilih Brand</option>
                                @foreach ($brand as $item)
                                    <option value="{{ $item->id }}">{{ $item->nama_brand }}</option>
                                @endforeach
                            </select>

                        </div>
                        <div class="mb-3">
                            <label for="jenis_kendaraan" class="form-label">Jenis Kendaraan</label>
                            <input type="text" name="jenis_kendaraan" id="jenis_kendaraan" class="form-control"
                                required>
                        </div>
                        <div class="mb-3">
                            <label for="nama_tipe" class="form-label">Tipe Product</label>
                            <input type="text" name="nama_tipe" id="nama_tipe" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="harga" class="form-label">Harga</label>
                            <input type="number" name="harga" id="harga" class="form-control" required>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

</x-sidebar>
