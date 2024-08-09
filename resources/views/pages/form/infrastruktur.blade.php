<div class="mt-5 max-w-4xl mx-auto p-6 bg-white shadow-md rounded-md">
    <h2 class="text-xl font-semibold mb-10">Kegiatan Sholat Wajib dan Kajian</h2>

    <hr class="mb-5">

    <form action="#" method="POST">
        <!-- Koordinasi Manajemen dengan Pengurus DKM -->
        <div class="mb-10">
            <label class="block text-gray-700 mb-2">Upload dokumen, foto, poster, screen shoot yang menunjukkan kegiatan shalat wajib dan kajian</label>
            <input type="file" name="dokumen" class="mb-10 block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:border file:border-gray-300 file:rounded file:text-sm file:font-semibold file:bg-gray-50 hover:file:bg-gray-100">

            <label class="text-gray-700 font-semibold mb-2">Pelaksanaan kegiatan shalat wajib 5 waktu berjamaah yang dikelola oleh DKM</label>
                <div class="flex items-center mb-2">
                    <input type="radio" name="kerjasama" value="belum ada" class="mr-2" required>
                    <label>Ada, 2 waktu sholat wajib berjamaah</label>
                </div>
                <div class="flex items-center mb-2">
                    <input type="radio" name="kerjasama" value="belum ada" class="mr-2" required>
                    <label>Ada, 3 waktu sholat wajib berjamaah</label>
                </div>
                <div class="flex items-center mb-2">
                    <input type="radio" name="kerjasama" value="ada, hanya menjadi peserta kegiatan YAA" class="mr-2">
                    <label>Ada, 4 waktu sholat wajib berjamaah</label>
                </div>
                <div class="flex items-center mb-2">
                    <input type="radio" name="kerjasama" value="ada, kerjasama dengan salah satu divisi di YAA" class="mr-2">
                    <label>Ada, 5 waktu sholat wajib berjamaah</label>
                </div>
        </div>

        <!-- Tanggapan dari Manajemen -->
        <div class="mb-10">
            <label class="block text-gray-700 mb-2">Pelaksanaan Kajian</label>
            <div class="flex flex-col">
                <label class="flex items-center">
                    <input type="radio" name="tanggapan" value="belum ada" class="mr-2">
                    Belum ada
                </label>
                <label class="flex items-center">
                    <input type="radio" name="tanggapan" value="ada tanggapan informal atau formal" class="mr-2">
                    Ada, tidak rutin
                </label>
                <label class="flex items-center">
                    <input type="radio" name="tanggapan" value="ada tanggapan informal atau formal" class="mr-2">
                    Ada, rutin bulanan
                </label>
                <label class="flex items-center">
                    <input type="radio" name="tanggapan" value="ada tanggapan informal atau formal" class="mr-2">
                    Ada, rutin mingguan
                </label>
            </div>
        </div>

        <div class="mb-10">
            <label>Improvement terkait peribadahan tahun ini</label>
        
            <div
            class="mb-10 overflow-hidden rounded-lg border border-gray-200 shadow-sm focus-within:border-blue-600 focus-within:ring-1 focus-within:ring-blue-600"
            >
            <textarea
                id="OrderNotes"
                class="w-full resize-none border-none align-top focus:ring-0 sm:text-sm"
                rows="4"
                placeholder="Sebutkan.."
            ></textarea>
            </div>
        </div>
    </form>
</div>

<div class="mt-5 max-w-4xl mx-auto p-6 bg-white shadow-md rounded-md">
    <h2 class="text-xl font-semibold mb-5">Partisipasi jamaah dalam aktivitas dan pengelolaan masjid</h2>

    <hr class="mb-5">

    <form action="#" method="POST">
        <!-- Kegiatan Bersama -->
        <div class="mb-10">
            <label class="block text-gray-700 mb-2">Ada kelompok ekstrakulikuler di bawah masjid/musala, misal: Tim Multimedia, Kelompok Tahsin, Kelompok Relawan , atau lainnya.</label>
            <div class="flex flex-col">
                <label>
                    <input type="radio" name="kegiatan" value="belum ada" class="mr-2">
                    Tidak ada
                </label>
                <label>
                    <input type="radio" name="kegiatan" value="kegiatan yang melibatkan sebagian kecil karyawan" class="mr-2">
                    Ada
                </label>
            </div>
        </div>
    </form>
</div>

<div class="mt-5 max-w-4xl mx-auto p-6 bg-white shadow-md rounded-md">
    <form>
        <!-- Interaksi DKM dengan Jamaah -->
        <h2 class="text-xl font-bold mb-6">Pengelolaan Kebersihan dan Kerapian</h2>

        <hr class="mb-5">

        <div class="mb-5">
            <label class="block text-gray-700 mb-2">Apakah ada petugas khusus yang rutin melakukan pekerjaan kebersihan</label>
            <div class="flex flex-col">
                <label>
                    <input type="radio" name="media_interaksi" value="belum ada" class="mr-2">
                    Tidak ada
                </label>
                <label>
                    <input type="radio" name="media_interaksi" value="rutin update per bulan" class="mr-2">
                    Ada, tetapi tidak rutin
                </label>
                <label>
                    <input type="radio" name="media_interaksi" value="rutin update per minggu" class="mr-2">
                    Ada setiap minggu
                </label>
                <label>
                    <input type="radio" name="media_interaksi" value="rutin update per hari" class="mr-2">
                    Ada setiap hari
                </label>
            </div>
        </div>

        <div class="mb-10">
            <label class="text-gray-700 font-semibold mb-2">Monitoring pekerjaan kebersihan Masjid/Musala secara berkala</label>
                <div class="flex items-center mb-2">
                    <input type="radio" name="kerjasama" value="belum ada" class="mr-2" required>
                    <label>Tidak ada</label>
                </div>
                <div class="flex items-center mb-2">
                    <input type="radio" name="kerjasama" value="belum ada" class="mr-2" required>
                    <label>Ada, setiap dua minggu</label>
                </div>
                <div class="flex items-center mb-2">
                    <input type="radio" name="kerjasama" value="ada, hanya menjadi peserta kegiatan YAA" class="mr-2">
                    <label>Ada, setiap minggu</label>
                </div>
                <div class="flex items-center mb-2">
                    <input type="radio" name="kerjasama" value="ada, kerjasama dengan salah satu divisi di YAA" class="mr-2">
                    <label>Ada, setiap hari</label>
                </div>
        </div>
    </form>
</div>

<div class="mt-5 max-w-4xl mx-auto p-6 bg-white shadow-md rounded-md">
    <h2 class="text-xl font-semibold mb-10">Kondisi Fasilitas dan Infrastruktur</h2>

    <hr class="mb-5">

    <form action="#" method="POST">

        <!-- Memiliki Grup WhatsApp Jamaah -->
        <div class="mb-10">
            <label class="block text-gray-700 mb-2">Upload foto tampak depan Masjid/Musala</label>
            <input type="file" name="dokumen" class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:border file:border-gray-300 file:rounded file:text-sm file:font-semibold file:bg-gray-50 hover:file:bg-gray-100">

            <label class="block text-gray-700 mb-2">Upload foto tempat wudhu</label>
            <input type="file" name="dokumen" class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:border file:border-gray-300 file:rounded file:text-sm file:font-semibold file:bg-gray-50 hover:file:bg-gray-100">

            <label class="block text-gray-700 mb-2">Upload foto ruangan shalat</label>
            <input type="file" name="dokumen" class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:border file:border-gray-300 file:rounded file:text-sm file:font-semibold file:bg-gray-50 hover:file:bg-gray-100">

            <label class="block text-gray-700 mb-2">Upload foto kamar mandi</label>
            <input type="file" name="dokumen" class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:border file:border-gray-300 file:rounded file:text-sm file:font-semibold file:bg-gray-50 hover:file:bg-gray-100">
        </div>
        
        <div class="mb-10">
            <label>Improvement tahun ini dalam pengelolaan fasilitas dan Infraktruktur</label>
        
            <div
            class="mb-10 overflow-hidden rounded-lg border border-gray-200 shadow-sm focus-within:border-blue-600 focus-within:ring-1 focus-within:ring-blue-600"
            >
            <textarea
                id="OrderNotes"
                class="w-full resize-none border-none align-top focus:ring-0 sm:text-sm"
                rows="4"
                placeholder="Sebutkan.."
            ></textarea>
            </div>
        </div>

        <div>
            <a href="{{ route('form.show.tab', 'program') }}" class="px-4 py-2 bg-blue-500 text-white rounded-md shadow-md"><i class="bi bi-arrow-left"></i>&nbsp; Sebelumnya</a>
            <a href="#" class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 shadow-md">Selanjutnya &nbsp;<i class="bi bi-arrow-right"></i></a>
        </div>    
    </form>
</div>