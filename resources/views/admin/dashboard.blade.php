<x-sidebar>
    <x-header>Dashboard</x-header>

        <div class="container">
            <h2 class="text-center mb-4">DATA BOOKING</h2>
            <!-- Responsive Table -->
            <div class="table-responsive">
                <table id="table" class="table table-light table-striped table-hover table-bordered text-center">
                    <thead>
                        <tr>
                            <th class="table-dark text-center">NO</th>
                            <th class="table-dark text-center">TANGAL</th>
                            <th class="table-dark text-center">NAMA</th>
                            <th class="table-dark text-center">NO TELEPON</th>
                            <th class="table-dark text-center">JENIS KENDARAAN</th>
                            <th class="table-dark text-center">MERK</th>
                            <th class="table-dark text-center">TYPE KE</th>
                            <th class="table-dark text-center">HARGA</th>
                            <th class="table-dark text-center">AKSI</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>
                                <button class="btn btn-primary btn-sm">Edit</button>
                                <button class="btn btn-danger btn-sm">Delete</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <script>
            $(document).ready(function() {
                $('#table').DataTable({
                    "paging": true,
                    "lengthChange": true,
                    "searching": true,
                    "ordering": true,
                    "info": true
                });
            });
        </script>
</x-sidebar>
