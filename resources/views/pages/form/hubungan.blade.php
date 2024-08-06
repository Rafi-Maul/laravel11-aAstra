<div class="mt-4 max-w-4xl mx-auto p-6 bg-white shadow-md rounded-md">
    <h2 class="text-xl font-semibold mb-10">Hubungan dengan Yayasan Amaliah Astra</h2>
            
    <hr class="mb-5">
            
    <form action="" method="POST">

        <div class="mb-10">
            <label class="block text-gray-700 mb-2">
                Kerjasama dengan YAA
            </label>
            <div class="flex items-center mb-2">
                <input type="radio" name="kerjasama" value="belum ada" class="mr-2" required>
                <label>Belum ada</label>
            </div>
            <div class="flex items-center mb-2">
                <input type="radio" name="kerjasama" value="ada, hanya menjadi peserta kegiatan YAA" class="mr-2">
                <label>Ada, hanya menjadi peserta kegiatan YAA</label>
            </div>
            <div class="flex items-center mb-2">
                <input type="radio" name="kerjasama" value="ada, kerjasama dengan salah satu divisi di YAA" class="mr-2">
                <label>Ada, kerjasama dengan salah satu divisi di YAA (Sosial Religi, Layanan Amal, Kemitraan)</label>
            </div>
        </div>

        <p class="font-medium text-gray-700 my-5">Kegiatan Sinergi bersama YAA</p>

        <!-- Divisi Sosial Religi -->
        <div class="mb-10">
            <label class="block text-gray-700 mb-2">
                Divisi Sosial Religi (jika ada kerjasama)
            </label>
            <div class="flex items-center mb-2">
                <input type="checkbox" name="sosial_religi[]" value="astra gema islami" class="mr-2">
                <label>Astra Gema Islami</label>
            </div>
            <div class="flex items-center mb-2">
                <input type="checkbox" name="sosial_religi[]" value="amaliah astra awards" class="mr-2">
                <label>Amaliah Astra Awards</label>
            </div>
            <div class="flex items-center mb-2">
                <input type="checkbox" name="sosial_religi[]" value="workshop/seminar/diskusi/pelatihan masjid astra" class="mr-2">
                <label>Workshop/Seminar/Diskusi/Pelatihan Masjid Astra</label>
            </div>
            <div class="flex items-center mb-2">
                <input type="checkbox" name="sosial_religi[]" value="lainnya" class="mr-2">
                <label>Lainnya</label>
            </div>
        </div>

        <!-- Divisi Layanan Amal -->
        <div class="mb-10">
            <label class="block text-gray-700 mb-2">
                Divisi Layanan Amal (jika ada kerjasama)
            </label>
            <div class="flex items-center mb-2">
                <input type="checkbox" name="layanan_amal[]" value="payroll zakat/sedekah" class="mr-2">
                <label>Payroll Zakat/Sedekah</label>
            </div>
            <div class="flex items-center mb-2">
                <input type="checkbox" name="layanan_amal[]" value="qurban" class="mr-2">
                <label>Qurban</label>
            </div>
            <div class="flex items-center mb-2">
                <input type="checkbox" name="layanan_amal[]" value="gaspull/oneday" class="mr-2">
                <label>Gaspull/OneDay</label>
            </div>
            <div class="flex items-center mb-2">
                <input type="checkbox" name="layanan_amal[]" value="lainnya" class="mr-2">
                <label>Lainnya</label>
            </div>
        </div>

        <!-- Divisi Kemitraan -->
        <div class="mb-10">
            <label class="block text-gray-700 mb-2">
                Divisi Kemitraan (jika ada kerjasama)
            </label>
            <div class="flex items-center mb-2">
                <input type="checkbox" name="kemitraan[]" value="perawatan ac" class="mr-2">
                <label>Perawatan AC</label>
            </div>
            <div class="flex items-center mb-2">
                <input type="checkbox" name="kemitraan[]" value="umroh" class="mr-2">
                <label>Umroh</label>
            </div>
            <div class="flex items-center mb-2">
                <input type="checkbox" name="kemitraan[]" value="aqiqah" class="mr-2">
                <label>Aqiqah</label>
            </div>
            <div class="flex items-center mb-2">
                <input type="checkbox" name="kemitraan[]" value="lainnya" class="mr-2">
                <label>Lainnya</label>
            </div>
        </div>

        <!-- Divisi Administrasi dan Keuangan -->
        <div class="mb-10">
            <label class="block text-gray-700 mb-2">
                Divisi Administrasi dan Keuangan
            </label>
            <div class="flex items-center mb-2">
                <input type="checkbox" name="administrasi_keuangan[]" value="sudah menggunakan sistem aplikasi keuangan online YAA" class="mr-2">
                <label>Sudah menggunakan sistem aplikasi keuangan online YAA</label>
            </div>
            <div class="flex items-center mb-2">
                <input type="checkbox" name="administrasi_keuangan[]" value="lainnya" class="mr-2">
                <label>Lainnya</label>
            </div>
        </div>

        <!-- Berbagi Informasi di Amaliah.id -->
        <div class="mb-10">
            <label class="block text-gray-700 mb-2">
                Berbagi Informasi di Amaliah.id
            </label>
            <div class="flex items-center mb-2">
                <input type="radio" name="informasi_amaliah" value="belum ada" class="mr-2" required>
                <label>Belum ada</label>
            </div>
            <div class="flex items-center mb-2">
                <input type="radio" name="informasi_amaliah" value="ada, baru akun saja" class="mr-2">
                <label>Ada, baru akun saja</label>
            </div>
            <div class="flex items-center mb-2">
                <input type="radio" name="informasi_amaliah" value="ada, saat partisipasi di kabar ramadan AGI" class="mr-2">
                <label>Ada, saat partisipasi di Kabar Ramadan AGI</label>
            </div>
            <div class="flex items-center mb-2">
                <input type="radio" name="informasi_amaliah" value="rutin sepanjang tahun" class="mr-2">
                <label>Rutin sepanjang tahun</label>
            </div>
        </div>

        <!-- Improvement Kerjasama -->
        <div class="mb-10">
            <label class="block text-gray-700 mb-2">
                Improvement Kerjasama Tahun Ini dengan YAA
            </label>
            <textarea name="improvement_kerjasama" rows="4" class="w-full p-2 border rounded-md"></textarea>
        </div>

        <div class="text-right">
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md">Submit</button>
        </div>
    </form>
</div>
