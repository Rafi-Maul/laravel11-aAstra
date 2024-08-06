@extends('index')
@section('content')

<style>
    body {
    font-family: Arial, sans-serif;
    background-color: #f9f9f9;
  }

  .form-container {
    max-width: 600px;
    margin: auto;
    background: white;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  }

  h2 {
    text-align: center;
    margin-bottom: 20px;
  }

  .form-group {
    margin-bottom: 15px;
  }

  label {
    display: block;
    font-weight: bold;
    margin-bottom: 5px;
  }

  input[type="text"],
  input[type="number"],
  textarea,
  select {
    width: calc(100% - 20px);
    padding: 8px 10px;
    margin: 5px 0;
    border-radius: 4px;
    border: 1px solid #ddd;
  }

  textarea {
    resize: none;
  }

  button[type="submit"] {
    display: block;
    width: 100%;
    padding: 10px 15px;
    background-color: #4CAF50;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }

  button[type="submit"]:hover {
    background-color: #45a049;
  }

</style>

<section>
    <a href="#" class="block rounded-lg p-4 mb-5 shadow-sm shadow-indigo-100">
        <div class="flex flex-row items-center justify-between rounded-lg p-4 shadow-md mb-10">
            <img src="{{ asset('img/logo1.jpg') }}" alt="Deskripsi Gambar" class="w-40" style="heigh:200px">
            <img src="{{ asset('img/new1.png') }}" alt="Deskripsi Gambar" class="w-40" style="heigh:200px">
            <img src="{{ asset('img/logo3.jpeg') }}" alt="Deskripsi Gambar" class="w-40" style="heigh:200px">
            <img src="{{ asset('img/new2.png') }}" alt="Deskripsi Gambar" class="w-40" style="heigh:200px">
        </div>
        <iframe src="https://amaliah.id/AmaliahAstraAwards2023" style="height:800px;width:1000px;" title="Iframe"></iframe>  
        {{-- <div class="flex justify-center">
            <img
              alt=""
              src="{{ asset('img/center.png') }}"
              class=" w-3/4 rounded-md "
            />
        </div>
        <p class="font-semibold mt-5">Mulai Mengisi</p>
        <p class="mb-5">Isilah dengan data dan informasi yang benar serta dapat dipertanggungjawabkan</p> --}}
        <div class="form-container mb-10">
          <h2>Form Informasi Masjid/Musola</h2>
          <form id="mosqueForm">
            <!-- Kategori 1: Masjid -->
            <div class="form-group">
              <label>Kategori Masjid:</label><br>
              <input type="radio" name="masjidType" value="masjid besar" required> Masjid Besar<br>
              <input type="radio" name="masjidType" value="masjid sedang"> Masjid Sedang<br>
              <input type="radio" name="masjidType" value="musola"> Musola
            </div>
      
            <!-- Kategori 2: Area -->
            <div class="form-group">
              <label>Kategori Area:</label><br>
              <input type="radio" name="areaType" value="area kantor pusat & cabang" required> Area Kantor Pusat & Cabang<br>
              <input type="radio" name="areaType" value="area pabrik"> Area Pabrik<br>
              <input type="radio" name="areaType" value="area site"> Area Site
            </div>
      
            <!-- Nama Masjid/Musola -->
            <div class="form-group">
              <label for="namaMasjid">Nama Masjid/Musola:</label>
              <input type="text" id="namaMasjid" name="namaMasjid" required>
            </div>
      
            <!-- Kapasitas Masjid/Musola -->
            <div class="form-group">
              <label for="kapasitas">Kapasitas Masjid/Musola:</label>
              <input type="number" id="kapasitas" name="kapasitas" required>
            </div>
      
            <!-- Nama Pengurus Ketua DKM -->
            <div class="form-group">
              <label for="ketuaDkm">Nama Pengurus Ketua DKM:</label>
              <input type="text" id="ketuaDkm" name="ketuaDkm" required>
            </div>
      
            <!-- Nama Perusahaan -->
            <div class="form-group">
              <label for="perusahaan">Nama Perusahaan:</label>
              <select id="perusahaan" name="perusahaan" required>
                <option value="">-- Pilih Perusahaan --</option>
                <option value="astra honda">Astra Honda</option>
                <option value="toyota">Toyota</option>
                <option value="komatsu indonesia">Komatsu Indonesia</option>
              </select>
            </div>
      
            <!-- Induk Perusahaan -->
            <div class="form-group">
              <label for="indukPerusahaan">Induk Perusahaan:</label>
              <select id="indukPerusahaan" name="indukPerusahaan" required>
                <option value="">-- Pilih Induk Perusahaan --</option>
                <option value="fif grup">FIF Grup</option>
                <option value="pamapersada">Pamapersada</option>
                <option value="aal">AAL</option>
                <option value="aop grup">AOP Grup</option>
              </select>
            </div>
      
            <!-- Lini Bisnis -->
            <div class="form-group">
              <label for="liniBisnis">Lini Bisnis:</label>
              <select id="liniBisnis" name="liniBisnis" required>
                <option value="">-- Pilih Lini Bisnis --</option>
                <option value="otomotif">Otomotif</option>
                <option value="jasa keuangan">Jasa Keuangan</option>
              </select>
            </div>
      
            <!-- Alamat -->
            <div class="form-group">
              <label for="alamat">Alamat:</label>
              <textarea id="alamat" name="alamat" rows="4" required></textarea>
            </div>
      
            <!-- Kota/Kabupaten -->
            <div class="form-group">
              <label for="kotaKabupaten">Kota/Kabupaten:</label>
              <input type="text" id="kotaKabupaten" name="kotaKabupaten" required>
            </div>
      
            <!-- Provinsi -->
            <div class="form-group">
              <label for="provinsi">Provinsi:</label>
              <select id="provinsi" name="provinsi" required>
                <option value="">-- Pilih Provinsi --</option>
                <option value="jawa">Jawa</option>
                <option value="sumatera">Sumatera</option>
                <option value="sulawesi">Sulawesi</option>
                <option value="kalimantan">Kalimantan</option>
                <option value="papua">Papua</option>
              </select>
            </div>
      
            <!-- Submit Button -->
            <button type="submit">Submit</button>
          </form>
        </div>
        
        <div class="form-container mt-10">
          <h2>PIC Amaliah Astra Awards</h2>
          <form id="picForm">
            <!-- Nama Lengkap -->
            <div class="form-group">
              <label for="namaLengkap">Nama Lengkap:</label>
              <input type="text" id="namaLengkap" name="namaLengkap" required>
            </div>
      
            <!-- Jabatan di DKM -->
            <div class="form-group">
              <label for="jabatanDKM">Jabatan di DKM:</label>
              <input type="text" id="jabatanDKM" name="jabatanDKM" required>
            </div>
      
            <!-- No HP untuk WhatsApp -->
            <div class="form-group">
              <label for="noHp">No HP untuk WhatsApp:</label>
              <input type="text" id="noHp" name="noHp" required pattern="^[0-9]+$" title="Masukkan hanya angka">
            </div>
      
            <!-- Email -->
            <div class="form-group">
              <label for="email">Email:</label>
              <input type="email" id="email" name="email" required>
            </div>
      
            <!-- Submit Button -->
            <button type="submit">Submit</button>
          </form>
        </div>
      </a>
</section>
<script src="script.js">
  document.getElementById('mosqueForm').addEventListener('submit', function(event) {
  event.preventDefault();
  // Ambil data dari form
    const formData = new FormData(this);
    const data = {};
    formData.forEach((value, key) => (data[key] = value));

    // Tampilkan data ke konsol (bisa diganti dengan logika lain seperti mengirim data ke server)
    console.log(data);
    alert('Form submitted! Check console for data.');
  });
</script>
@endsection