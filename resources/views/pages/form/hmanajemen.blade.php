<div class="mt-5 max-w-4xl mx-auto p-6 bg-white shadow-md rounded-md">
    <h2 class="text-xl font-semibold mb-10">Koordinasi Manajemen dengan Pengurus DKM</h2>

    <hr class="mb-5">

    <form action="#" method="POST">
        <!-- Koordinasi Manajemen dengan Pengurus DKM -->
        <div class="mb-10">
            <label class="text-gray-700 font-semibold mb-2">Koordinasi Manajemen dengan Pengurus DKM</label>
                <div class="flex items-center mb-2">
                    <input type="radio" name="kerjasama" value="belum ada" class="mr-2" required>
                    <label>Belum ada</label>
                </div>
                <div class="flex items-center mb-2">
                    <input type="radio" name="kerjasama" value="belum ada" class="mr-2" required>
                    <label>Ada, hanya pelaporan dokumen</label>
                </div>
                <div class="flex items-center mb-2">
                    <input type="radio" name="kerjasama" value="ada, hanya menjadi peserta kegiatan YAA" class="mr-2">
                    <label>Ada, rapat tidak rutin dan pelaporan dokumen</label>
                </div>
                <div class="flex items-center mb-2">
                    <input type="radio" name="kerjasama" value="ada, kerjasama dengan salah satu divisi di YAA" class="mr-2">
                    <label>Ada, rapat rutin dan pelaporan dokumen</label>
                </div>
        </div>

        <!-- Tanggapan dari Manajemen -->
        <div class="mb-10">
            <label class="block text-gray-700 mb-2">Tanggapan dari Manajemen untuk Pelaporan yang Disampaikan</label>
            <div class="flex flex-col">
                <label class="flex items-center">
                    <input type="radio" name="tanggapan" value="belum ada" class="mr-2">
                    Belum ada
                </label>
                <label class="flex items-center">
                    <input type="radio" name="tanggapan" value="ada tanggapan informal atau formal" class="mr-2">
                    Ada tanggapan (informal atau formal)
                </label>
            </div>
        </div>

        <!-- Kegiatan Bersama -->
        <div class="mb-10">
            <label class="block text-gray-700 mb-2">Kegiatan Bersama antara DKM dengan Manajemen Perusahaan</label>
            <div class="flex flex-col">
                <label>
                    <input type="radio" name="kegiatan" value="belum ada" class="mr-2">
                    Belum ada
                </label>
                <label>
                    <input type="radio" name="kegiatan" value="kegiatan yang melibatkan sebagian kecil karyawan" class="mr-2">
                    Kegiatan yang melibatkan sebagian kecil karyawan (&lt;30%)
                </label>
                <label>
                    <input type="radio" name="kegiatan" value="kegiatan yang melibatkan sebagian besar karyawan" class="mr-2">
                    Kegiatan yang melibatkan sebagian besar karyawan (&gt;70%)
                </label>
                <label>
                    <input type="radio" name="kegiatan" value="kegiatan yang melibatkan sebagian besar karyawan dan masyarakat" class="mr-2">
                    Kegiatan yang melibatkan sebagian besar karyawan dan masyarakat
                </label>
            </div>
        </div>
    </form>
</div>

<div class="mt-5 max-w-4xl mx-auto p-6 bg-white shadow-md rounded-md">
    <form>
        <!-- Interaksi DKM dengan Jamaah -->
        <h2 class="text-xl font-bold mb-6">Interaksi DKM dengan Jamaah</h2>

        <hr class="mb-5">

        <!-- Upload Dokumen -->
        <div class="mb-10">
            <label class="block text-gray-700 mb-2">Upload Dokumen, Foto, Poster, Foto Screenshot, dan Lain-lain</label>
            <input type="file" name="dokumen" class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:border file:border-gray-300 file:rounded file:text-sm file:font-semibold file:bg-gray-50 hover:file:bg-gray-100">
        </div>

        <!-- Media Interaksi dan Komunikasi -->
        <div class="mb-10">
            <label class="block text-gray-700 mb-2">Media Interaksi dan Komunikasi dengan Jamaah</label>
            <div class="flex flex-col">
                <label>
                    <input type="radio" name="media_interaksi" value="belum ada" class="mr-2">
                    Belum ada
                </label>
                <label>
                    <input type="radio" name="media_interaksi" value="rutin update per bulan" class="mr-2">
                    Ada, rutin update per bulan
                </label>
                <label>
                    <input type="radio" name="media_interaksi" value="rutin update per minggu" class="mr-2">
                    Ada, rutin update per minggu
                </label>
                <label>
                    <input type="radio" name="media_interaksi" value="rutin update per hari" class="mr-2">
                    Ada, rutin update per hari
                </label>
            </div>
        </div>

        <!-- Memiliki Grup WhatsApp Jamaah -->
        <div class="mb-10">
            <label class="block text-gray-700 mb-2">Memiliki Grup WhatsApp Jamaah</label>
            <div class="flex flex-col">
                <label class="flex items-center">
                    <input type="radio" name="grup_whatsapp" value="update perminggu" class="mr-2">
                    Update per minggu
                </label>
                <label class="flex items-center">
                    <input type="radio" name="grup_whatsapp" value="anggota <10% karyawan muslim" class="mr-2">
                    Anggota &lt;10% karyawan muslim
                </label>
                <label class="flex items-center">
                    <input type="radio" name="grup_whatsapp" value="anggota 10-30% karyawan muslim" class="mr-2">
                    Anggota 10-30% karyawan muslim
                </label>
                <label class="flex items-center">
                    <input type="radio" name="grup_whatsapp" value="anggota >30% karyawan muslim" class="mr-2">
                    Anggota &gt;30% karyawan muslim
                </label>
            </div>
        </div>

        <div>
            <a href="{{ route('form.show.tab', 'program') }}" class="px-4 py-2 bg-blue-500 text-white rounded-md shadow-md"><i class="bi bi-arrow-left"></i>&nbsp; Sebelumnya</a>
            <a href="#" class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 shadow-md">Selanjutnya &nbsp;<i class="bi bi-arrow-right"></i></a>
        </div>    
    </form>
</div>