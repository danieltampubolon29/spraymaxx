<x-sidebar>
    <div class="dashboard-content p-2 bg-light d-flex justify-content-between align-items-center">
        <p class="me-3">Selamat Datang Di SPRAYMAXX</p> <!-- me-3 memberi margin kanan pada teks -->
        <img src="{{ asset('img/logo.webp') }}" class="ms-2"
            style="width: 60px; height: auto; border-radius: 50%;margin-right: 30px;">
    </div>
    <div class="container ">
        <h2 class="text-center mb-4">HISTORY BOOKING</h2>
        <!-- Responsive Table -->
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th>NO</th>
                        <th>Nama</th>
                        <th>Tanggal</th>
                        <th>Jenis Kendaraan</th>
                        <th>Merk</th>
                        <th>Type</th>
                        <th>Harga</th>
                        <th>AKSI</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Daniel</td>
                        <td>08 - 01 - 2024</td>
                        <td>Motor</td>
                        <td>Honda</td>
                        <td>Vario</td>
                        <td>Rp.1,100,000,-</td>
                        <td>
                            <button class="btn btn-primary btn-sm">Lihat</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</x-sidebar>
