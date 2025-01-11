<x-sidebar>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h1 class="text-center">Data Booking</h1>
        <div class="text-right mb-3">
            {{-- <button class="btn btn-primary bookingBtn">Booking</button> --}}
            <a href="{{ route('booking.create') }}" class="btn btn-success">Create Booking</a>
        </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead class="thead-light">
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Jenis Kendaraan</th>
                                <th>Merk</th>
                                <th>Type</th>
                                <th>Tanggal Booking</th>
                                <th>Harga</th>
                            </tr>
                        </thead>
                        <tbody id="bookingTableBody">
                            <!-- Baris data pemesanan akan ditambahkan di sini -->
                            @foreach ($bookings as $booking)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{$booking->nama}} </td>
                                    <td>{{$booking->jenis_kendaraan}} </td>
                                    <td>{{$booking->merk}} </td>
                                    <td>{{$booking->type}} </td>
                                    <td>{{$booking->tanggal_booking}} </td>
                                    <td>{{$booking->harga}} </td>
                                    
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        
    </div>
</x-sidebar>