<x-sidebar>
    <x-header>Brand Page</x-header>
    <div class="container">
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        
        <div class="d-flex justify-content-between mb-3 mt-3">
            <a class="btn btn-warning" href="{{ route('product.index') }}">Product</a>
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createModal">Tambah Brand</button>
        </div>
        
        <div class="table-responsive">
        <table id="table" class="table table-light table-striped table-hover table-bordered text-center">
            <thead>
                <tr>
                    <th class="table-dark text-center">No</th>
                    <th class="table-dark text-center">Nama Brand</th>
                    <th class="table-dark text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($brand as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->nama_brand }}</td>
                        <td>
                            <!-- Button Edit -->
                            <button class="btn btn-warning btn-sm" data-bs-toggle="modal"
                                data-bs-target="#editModal{{ $item->id }}">Edit</button>

                            <!-- Button Hapus -->
                            <button class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                data-bs-target="#deleteModal{{ $item->id }}">Hapus</button>
                        </td>
                    </tr>

                    <!-- Modal Edit -->
                    <div class="modal fade" id="editModal{{ $item->id }}" tabindex="-1"
                        aria-labelledby="editModalLabel" aria-hidden="true" data-bs-backdrop="false">
                        <div class="modal-dialog">
                            <form action="{{ route('brand.update', $item->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="editModalLabel">Edit Brand</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <label for="nama_brand" class="form-label">Nama Brand</label>
                                            <input type="text" name="nama_brand" id="nama_brand" class="form-control"
                                                value="{{ $item->nama_brand }}" required>
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
                    <div data-bs-backdrop="false" class="modal fade" id="deleteModal{{ $item->id }}" tabindex="-1"
                        aria-labelledby="deleteModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="deleteModalLabel">Konfirmasi Hapus</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Apakah Anda yakin ingin menghapus brand <strong>{{ $item->nama_brand }}</strong>?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Batal</button>
                                    <form action="{{ route('brand.destroy', $item->id) }}" method="POST"
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
            <form action="{{ route('brand.store') }}" method="POST">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="createModalLabel">Tambah Brand</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="nama_brand" class="form-label">Nama Brand</label>
                            <input type="text" name="nama_brand" id="nama_brand" class="form-control" required>
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
