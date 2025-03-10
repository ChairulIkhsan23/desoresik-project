@extends('layouts.app')

@section('title', 'Admin Dashboard')

@section('content')
<div class="container mx-auto p-6">
    <!-- Header Dashboard -->
    <h2 class="text-3xl font-bold text-gray-800">Dashboard Admin</h2>
    <p class="mt-1 text-gray-600">Selamat datang, <span class="font-semibold text-emerald-700">{{ auth()->user()->name }}</span>!</p>

    <!-- Statistik -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mt-6">
        <!-- Card Jumlah Pengguna -->
        <div class="bg-white p-4 shadow-md rounded-lg flex items-center justify-between">
            <div>
                <h3 class="text-lg font-semibold text-gray-800">Total Petugas</h3>
                <p class="text-2xl font-bold text-emerald-600">125</p>
            </div>
            <div class="bg-emerald-500 p-3 rounded-full text-white">
                <!-- <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-3-3h-2a3 3 0 00-3 3v2h5M9 20h5v-2a3 3 0 00-3-3H9a3 3 0 00-3 3v2h5M15 10h2a2 2 0 002-2V7a2 2 0 00-2-2h-2a2 2 0 00-2 2v1a2 2 0 002 2zM5 10h2a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v1a2 2 0 002 2z"/>
                </svg> -->
            </div>
        </div>

        <!-- Card Total Transaksi -->
        <div class="bg-white p-4 shadow-md rounded-lg flex items-center justify-between">
            <div>
                <h3 class="text-lg font-semibold text-gray-800">Lokasi TPS</h3>
                <p class="text-2xl font-bold text-emerald-600">30</p>
            </div>
            <div class="bg-emerald-500 p-3 rounded-full text-white">
                <!-- <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c2.28 0 4-1.72 4-4s-1.72-4-4-4S8 1.72 8 4s1.72 4 4 4zm0 2c-4.42 0-8 1.79-8 4v2h16v-2c0-2.21-3.58-4-8-4z"/>
                </svg> -->
            </div>
        </div>

        <!-- Card Laporan Masuk -->
        <div class="bg-white p-4 shadow-md rounded-lg flex items-center justify-between">
            <div>
                <h3 class="text-lg font-semibold text-gray-800">Laporan Masuk</h3>
                <p class="text-2xl font-bold text-emerald-600">45</p>
            </div>
            <div class="bg-emerald-500 p-3 rounded-full text-white">
                <!-- <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h11M9 21v-4M9 17H4a2 2 0 01-2-2V4a2 2 0 012-2h16a2 2 0 012 2v8M9 21h6"/>
                </svg> -->
            </div>
        </div>
    </div>

   <!-- Peta -->
   <div class="mt-8">
    <h3 class="text-xl font-semibold text-gray-800">Lokasi TPS</h3>
    <div id="map" class="w-full h-96 mt-4 rounded-lg shadow-md"></div>
</div>

@push('scripts')
<script>
    document.addEventListener("DOMContentLoaded", function() {
        var map = L.map('map').setView([-6.32531, 108.32153], 12);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; OpenStreetMap contributors'
        }).addTo(map);

        // Array titik lokasi TPS (latitude, longitude, dan nama)
        var tpsLocations = [
            { lat: -6.43022, lng: 108.30191, name: "TPA PECUK INDRAMAYU" },
            { lat: -6.35739, lng: 108.33284, name: "TPA PAPAN SEJAHTERA" },
            { lat: -6.32531, lng: 108.32153, name: "DINAS LH" }
        ];

        // Loop untuk menambahkan marker ke peta
        tpsLocations.forEach(function(tps) {
            L.marker([tps.lat, tps.lng])
                .addTo(map)
                .bindPopup(`<b>${tps.name}</b>`);
        });

        console.log("Leaflet Map with TPS Markers Loaded!");
    });
</script>
@endpush

    

    <!-- Tabel Data -->
    <div class="mt-8">
        <h3 class="text-xl font-semibold text-gray-800">Data Pengguna</h3>
        <div class="bg-white shadow-md rounded-lg mt-4 overflow-x-auto">
            <table class="w-full table-auto border-collapse">
                <thead class="bg-gray-200 text-gray-700">
                    <tr>
                        <th class="py-2 px-4 border">#</th>
                        <th class="py-2 px-4 border">Nama</th>
                        <th class="py-2 px-4 border">Email</th>
                        <th class="py-2 px-4 border">Role</th>
                        <th class="py-2 px-4 border">Aksi</th>
                    </tr>
                </thead>
                <tbody class="text-gray-700">
                    <tr>
                        <td class="py-2 px-4 border text-center">1</td>
                        <td class="py-2 px-4 border">Budi Santoso</td>
                        <td class="py-2 px-4 border">budi@example.com</td>
                        <td class="py-2 px-4 border text-center">Admin</td>
                        <td class="py-2 px-4 border text-center">
                            <button class="bg-red-500 text-white px-3 py-1 rounded-md hover:bg-red-600">Hapus</button>
                        </td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4 border text-center">2</td>
                        <td class="py-2 px-4 border">Siti Aisyah</td>
                        <td class="py-2 px-4 border">siti@example.com</td>
                        <td class="py-2 px-4 border text-center">Petugas</td>
                        <td class="py-2 px-4 border text-center">
                            <button class="bg-red-500 text-white px-3 py-1 rounded-md hover:bg-red-600">Hapus</button>
                        </td>
                    </tr>
                    <!-- Tambahkan lebih banyak data jika perlu -->
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
