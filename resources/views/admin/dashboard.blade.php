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
                            <th class="table-dark text-center">NAMA</th>
                            <th class="table-dark text-center">NO WHATSAPP</th>
                            <th class="table-dark text-center">TANGGAL</th>
                            <th class="table-dark text-center">NAMA BRAND</th>
                            <th class="table-dark text-center">JENIS KENDARAAN</th>
                            <th class="table-dark text-center">TYPE KENDARAAN</th>
                            <th class="table-dark text-center">HARGA</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($booking as $data)
                        <tr>
                            <td>{{$loop->iteration}} </td>
                            <td>{{$data->nama}} </td>
                            <td>{{$data->no_wa}} </td>
                            <td>{{$data->tanggal_booking}} </td>
                            <td>{{$data->nama_brand}} </td>
                            <td>{{$data->jenis_kendaraan}} </td>
                            <td>{{$data->harga}} </td>
                            <td>{{$data->email}} </td>
                        </tr>
                        @endforeach
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
