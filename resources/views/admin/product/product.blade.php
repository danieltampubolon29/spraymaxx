<x-sidebar>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h2>Product Details</h2>
                <a href="{{ route('product.create') }}" type="button"
                    class="mb-3 btn btn-primary float-end">{{ __('Tambah Product') }} </a>
            </div>
            <div class="card-body table-responsive">
                <table id="table" class="table table-light table-striped table-hover table-bordered text-center">
                    <thead class="table-dark">
                        <tr>
                            <th>NO</th>
                            <th>Jenis Kendaraan</th>
                            <th>Merk</th>
                            <th>Type</th>
                            <th>Harga</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $data)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $data->jenis_kendaraan }}</td>
                                <td>{{ $data->merk }}</td>
                                <td>{{ $data->type }}</td>
                                <td>{{ $data->harga }}</td>
                                <td>
                                    <form action="{{ route('product.delete', $data->id) }}" method="post"
                                        id="delete-form-{{ $data->id }}">
                                        @csrf
                                        @method('delete')
                                        <a href="{{ route('product.edit', $data->id) }}"
                                            class="btn btn-warning">Edit</a>
                                        <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                            data-bs-target="#confirmModal" onclick="setDeleteId({{ $data->id }})">
                                            Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="confirmModal" tabindex="-1" aria-labelledby="confirmModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="confirmModalLabel">Konfirmasi Hapus</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Apakah Anda yakin ingin menghapus produk ini?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-danger" onclick="confirmDelete()">Hapus</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        let deleteFormId = null;

        function setDeleteId(id) {
            deleteFormId = id;
        }

        function confirmDelete() {
            if (deleteFormId) {
                document.getElementById(`delete-form-${deleteFormId}`).submit();
            }
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</x-sidebar>
