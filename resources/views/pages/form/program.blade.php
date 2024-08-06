<div class="mt-5 max-w-4xl shadow-md mx-auto p-6 bg-white rounded-md">
    <h2 class="text-xl font-semibold mb-10">Program Sosial yang dikelola DKM</h2>
            
    <hr class="mb-5">
            
    <form action="" method="POST">

        <div class="mb-10">
            <label class="block text-gray-700 mb-2">
                Bentuk program sosial yang dikelola oleh DKM
            </label>
            <div class="flex items-center mb-2">
                <input type="radio" name="kerjasama" value="belum ada" class="mr-2" required>
                <label>Bantuan sosial sesekali, dilaksanakan insidental (ex. Bantuan bencana)</label>
            </div>
            <div class="flex items-center mb-2">
                <input type="radio" name="kerjasama" value="ada, hanya menjadi peserta kegiatan YAA" class="mr-2">
                <label>Bantuan sosial dimomen-momen tertentu (ex.Santunan di PHBI dll)</label>
            </div>
            <div class="flex items-center mb-2">
                <input type="radio" name="kerjasama" value="ada, kerjasama dengan salah satu divisi di YAA" class="mr-2">
                <label>Bantuan sosial dan program pemberdayaan (program non pemberdayaan masih mendominasi)</label>
            </div>
            <div class="flex items-center mb-2">
                <input type="radio" name="kerjasama" value="ada, kerjasama dengan salah satu divisi di YAA" class="mr-2">
                <label>Bantuan pemberdayaan 4 pilar (pendidikan, eknomi, lingkungan dan kesehatan)</label>
            </div>
        </div>

        <div class="mb-10">
            <label>Sebutkan dan jelaskan 3 program sosial unggulan dan dokumentasi/laporan ( file bisa upload lebih banyak)</label>
        
            <div
            class="mb-10 overflow-hidden rounded-lg border border-gray-200 shadow-sm focus-within:border-blue-600 focus-within:ring-1 focus-within:ring-blue-600"
            >
            <textarea
                id="OrderNotes"
                class="w-full resize-none border-none align-top focus:ring-0 sm:text-sm"
                rows="4"
                placeholder="Sebutkan dan Jelaskan Program.."
            ></textarea>
            </div>
        </div>

        <!-- Upload Dokumen -->
        <div class="mb-10">
            <label class="block text-gray-700 mb-2">Upload dokumen, poster, foto screen shoot dan lain-lain yang menunjukkan bukti program sosial</label>
            <input type="file" name="dokumen" class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:border file:border-gray-300 file:rounded file:text-sm file:font-semibold file:bg-gray-50 hover:file:bg-gray-100">
        </div>
    </form>
</div>

<div class="mt-5 max-w-4xl mx-auto p-6 bg-white shadow-md rounded-md">
    <form>
        <h2 class="text-xl font-bold mb-6">Informasi Penerima Manfaat</h2>

        <hr class="mb-5">
        <!-- Divisi Sosial Religi -->
        <div class="mb-10">
            <label class="block text-gray-700 mb-2">
                Penerima manfaat program sosial
            </label>
            <div class="flex items-center mb-2">
                <input type="radio" name="informasi" class="mr-2">
                <label>Belum ada Penerima Manfaat</label>
            </div>
            <div class="flex items-center mb-2">
                <input type="radio" name="informasi" class="mr-2">
                <label>Ring 1 perusahaan</label>
            </div>
            <div class="flex items-center mb-2">
                <input type="radio" name="informasi" class="mr-2">
                <label>Di luar Ring 1 perusahaan</label>
            </div>
            <div class="flex items-center mb-2">
                <input type="radio" name="informasi" class="mr-2">
                <label>Ring 1 perusahaan dan di luar ring 1 perusahaan</label>
            </div>
        </div>

        <div class="mb-10">
            <label>Jumlah penerima manfaat</label>
            <select name="penerima" id="">
                <option value="Tiada">Tiada</option>
                <option value="<100">&lt;100</option>
                <option value="100">100-1000</option>
                <option value="1000">1000-5000</option>
                <option value="5000">&gt;5000</option>
            </select>
        </div>

        <!-- Divisi Layanan Amal -->
        <div class="mb-10">
            <label class="block text-gray-700 mb-2">
                Sumber Pembiayaan
            </label>
            <div class="flex items-center mb-2">
                <input type="checkbox" name="sumbangan" value="Kotak amal masjid" class="mr-2">
                <label>Kotak amal masjid</label>
            </div>
            <div class="flex items-center mb-2">
                <input type="checkbox" name="sumbangan" value="Sumbangan jamaah atau karyawan via transferurban" class="mr-2">
                <label>Sumbangan jamaah atau karyawan via transfer</label>
            </div>
            <div class="flex items-center mb-2">
                <input type="checkbox" name="sumbangan" value="Sumbangan dari perusahaan" class="mr-2">
                <label>Sumbangan dari perusahaan</label>
            </div>
            <div class="flex items-center mb-2">
                <input type="checkbox" name="sumbangan" value="Sumbangan via digital(Qris, dll)" class="mr-2">
                <label>Sumbangan via digital(Qris, dll)</label>
            </div>
            <div class="flex items-center mb-2">
                <input type="checkbox" name="sumbangan" value="Sumbangan via Payroll" class="mr-2">
                <label>Sumbangan via Payroll</label>
            </div>
            <div class="flex items-center mb-2">
                <input type="checkbox" name="sumbangan" value="lainnya" class="mr-2">
                <label>Lainnya..</label>
            </div>
        </div>
    </form>
</div>

<div class="mt-5 max-w-4xl mx-auto p-6 bg-white rounded-md">
    <form>
        <h2 class="text-xl font-semibold mb-10">Improvement</h2>

        <hr class="mb-5">

        <div class="mb-10">
            <label>Jelaskan improvement dalam melaksanakan program sosial</label>
        
            <div
            class="mb-10 overflow-hidden rounded-lg border border-gray-200 shadow-sm focus-within:border-blue-600 focus-within:ring-1 focus-within:ring-blue-600"
            >
            <textarea
                id="OrderNotes"
                class="w-full resize-none border-none align-top focus:ring-0 sm:text-sm"
                rows="4"
                placeholder="Jelaskan.."
            ></textarea>
            </div>
        </div>

        <div class="mb-10">
            <label class="block text-gray-700 mb-2">
                Jelaskan dengan Sebutkan Program yang sesuai dengan Astra Sustainability Aspiration
            </label>
            <div class="flex items-center mb-2">
                <input type="checkbox" name="improvement" value="hemat air" class="mr-2">
                <label>Hemat Air</label>
            </div>
            <div class="flex items-center mb-2">
                <input type="checkbox" name="improvement" value="hemat listrik" class="mr-2">
                <label>Hemat Listrik</label>
            </div>
            <div class="flex items-center mb-2">
                <input type="checkbox" name="improvement" value="pengelolaan sampah" class="mr-2">
                <label>Pengelolaan Sampah</label>
            </div>
            <div class="flex items-center mb-2">
                <input type="checkbox" name="improvement" value="lainnya" class="mr-2">
                <label>Lainnya</label>
            </div>
        </div>

        <div class="mb-10">
            <label class="block text-gray-700 mb-2">Upload dokumen, poster, foto screen shoot dan lain-lain yang menunjukkan bukti Astra Sustainability Aspiration</label>
            <input type="file" name="dokumen" class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:border file:border-gray-300 file:rounded file:text-sm file:font-semibold file:bg-gray-50 hover:file:bg-gray-100">
        </div>
    </form>
</div>
