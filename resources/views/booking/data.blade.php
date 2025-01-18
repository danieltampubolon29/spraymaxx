<x-sidebar>
    <x-header>Data Booking</x-header>
    <div class="container">
        <div class="table-responsive mt-4">
            <table id="table" class="table table-light table-striped table-hover table-bordered text-center">
                <thead>
                    <tr>
                        <th class="table-dark text-center">No</th>
                        <th class="table-dark text-center">Nama</th>
                        <th class="table-dark text-center">No WhatApp</th>
                        <th class="table-dark text-center">Tanggal Booking</th>
                        <th class="table-dark text-center">Nama Brand</th>
                        <th class="table-dark text-center">Jenis Kendaraan</th>
                        <th class="table-dark text-center">Tipe Kendaraan</th>
                        <th class="table-dark text-center">Harga</th>
                        <th class="table-dark text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($bookings as $booking)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$booking->nama}}</td>
                        <td>{{$booking->no_wa}}</td>
                        <td>{{$booking->tanggal_booking}}</td>
                        <td>{{$booking->nama_brand}}</td>
                        <td>{{$booking->jenis_kendaraan}}</td>
                        <td>{{$booking->nama_tipe}}</td>
                        <td>Rp {{ number_format($booking->harga, 0, ',', '.') }}</td>
                        <td>
                            <button 
                                class="btn btn-primary" 
                                data-bs-toggle="modal" 
                                data-bs-target="#viewModal-{{$loop->iteration}}">
                                Lihat
                            </button>

                            <!-- Modal -->
                            <div data-bs-backdrop="false" class="modal fade" id="viewModal-{{$loop->iteration}}" tabindex="-1" aria-labelledby="viewModalLabel-{{$loop->iteration}}" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="viewModalLabel-{{$loop->iteration}}">Detail Booking</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Print Invoice</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-sidebar>
