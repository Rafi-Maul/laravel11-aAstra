<div class="mt-5 max-w-4xl mx-auto p-6 bg-white shadow-md rounded-md">
    <h2 class="text-xl font-semibold mb-10">Struktur Organisasi, Rencana Kegiatan & Budget</h2>

    <hr class="mb-5">

    <form action="#" method="POST">
        <!-- Koordinasi Manajemen dengan Pengurus DKM -->
        <div class="mb-10">
            <label class="text-gray-700 font-semibold mb-2">Yayasan Amaliah Astra sudah membuat sistem keuangan masjid online, Apakah DKM sudah menggunakan sistem ini?</label>
                <div class="flex items-center mb-2">
                    <input type="radio" name="sistem" value="ya" class="mr-2" >
                    <label class="font-thin">Ya</label>
                </div>
                <div class="flex items-center mb-2">
                    <input type="radio" name="sistem" value="tidak" class="mr-2" >
                    <label class="font-thin">Tidak</label>
                </div>
                <div class="flex items-center mb-2">
                    <input type="radio" name="sistem" value="belum tau" class="mr-2">
                    <label class="font-thin">Belum Tau</label>
                </div>
        </div>

        <p class="mb-5">Jika ada bagian informasi yang konfidensial, gambar boleh diburamkan.</p>

        <div class="mb-10">
            <div class="mb-2">
                <label class="block text-gray-700 mb-2">Upload file struktur pengurus masjid/ musala</label>
                <input type="file" name="dokumen" class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:border file:border-gray-300 file:rounded file:text-sm file:font-semibold file:bg-gray-50 hover:file:bg-gray-100">
            </div>
            <div class="mb-2">
                <label class="block text-gray-700 mb-2">Upload file rencana kegiatan (activity plan)</label>
                <input type="file" name="dokumen" class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:border file:border-gray-300 file:rounded file:text-sm file:font-semibold file:bg-gray-50 hover:file:bg-gray-100">
            </div>
            <div class="mb-2">
                <label class="block text-gray-700 mb-2">Upload file budget kegiatan</label>
                <input type="file" name="dokumen" class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:border file:border-gray-300 file:rounded file:text-sm file:font-semibold file:bg-gray-50 hover:file:bg-gray-100">
            </div>

            <label class="mt-5 mb-2 text-gray-700">DKM memiliki pengurus masjid dibawah umur 30 tahun</label>
            <div class="flex items-center mb-2">
                <input type="radio" name="sistem" value="belum tau" class="mr-2">
                <label class="font-thin">Tidak ada</label>
            </div>
            <div class="flex items-center mb-2">
                <input type="radio" name="sistem" value="belum tau" class="mr-2">
                <label class="font-thin">Ada</label>
            </div>
        </div>
    </form>
</div>

<div class="mt-5 max-w-4xl mx-auto p-6 bg-white shadow-md rounded-md">
    <h2 class="text-xl font-semibold mb-10">Laporan Keuangan</h2>

    <hr class="mb-5">

    <form action="#" method="POST">

        <div class="mb-10">
            <label class="block text-gray-700 mb-2">Laporan Keuangan Masjid/Musala</label>
            <div class="flex flex-col">
                <label class="font-thin">
                    <input type="radio" name="laporan" value="belum ada" class="mr-2">
                    Belum ada
                </label>
                <label class="font-thin">
                    <input type="radio" name="laporan" value="Ada, update lebih dari sebulan yang lalu" class="mr-2">
                    Ada, update lebih dari sebulan yang lalu
                </label>
                <label class="font-thin">
                    <input type="radio" name="laporan" value="Ada, rutin dilakukan evaluasi dan update perbulan" class="mr-2">
                    Ada, rutin dilakukan evaluasi dan update perbulan
                </label>
                <label class="font-thin">
                    <input type="radio" name="laporan" value="Ada, rutin update perbulan dan ada perlaporan ke jamaah" class="mr-2">
                    Ada, rutin update perbulan dan ada perlaporan ke jamaah
                </label>
            </div>
        </div>
    </form>
</div>

<div class="mt-5 max-w-4xl mx-auto p-6 bg-white shadow-md rounded-md">
    <h2 class="text-xl font-semibold mb-10">Laporan Tahunan</h2>

    <hr class="mb-5">

    <form>
        <div class="mb-10">
            <label class="block text-gray-700 mb-2">Laporan Kegiatan dan keuangan Tahunan</label>
            <!-- Upload Dokumen -->
            <label class="font-thin">
                <input type="radio" name="laporan" value="Belum Ada" class="mr-2">
                Belum Ada
            </label>
            <label class="font-thin">
                <input type="radio" name="laporan" value="Ada" class="mr-2">
                Ada
            </label>
        </div>

        <div class="mb-10">
            <label class="block text-gray-700 mb-2">Upload Laporan Tahunan</label>
            <input type="file" name="dokumen" class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:border file:border-gray-300 file:rounded file:text-sm file:font-semibold file:bg-gray-50 hover:file:bg-gray-100">
        </div>
        <div>
            <a href="{{ route('form.show.tab', 'program') }}" class="px-4 py-2 bg-blue-500 text-white rounded-md shadow-md"><i class="bi bi-arrow-left"></i>&nbsp; Sebelumnya</a>
            <a href="#" class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 shadow-md">Selanjutnya &nbsp;<i class="bi bi-arrow-right"></i></a>
        </div>
    </form>
</div>