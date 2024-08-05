@extends('index')
@section('content')

<style>
    body {
    font-family: Arial, sans-serif;
    background-color: #f9f9f9;
    padding: 20px;
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

  .active{
    color:aqua;
  }

</style>


<section>
    <div class="flex justify-center">
        <div class="sm:hidden">
          <label for="Tab" class="sr-only">Tab</label>
      
          <select id="Tab" class="w-full rounded-md border-gray-200">
            <option>Settings</option>
            <option>Messages</option>
            <option>Archive</option>
            <option selected>Notifications</option>
          </select>
        </div>
      
        <div class="hidden sm:block">
          <div class="border-b border-gray-200">
            <nav id="tabNav" class="-mb-px flex gap-3">
              <a href="#" class="tab-link shrink-0 border border-transparent p-3 text-sm font-medium text-gray-500 hover:text-gray-700">
                Hubungan DKM dengan YAA
              </a>
      
              <a href="#" class="tab-link shrink-0 border border-transparent text-wrap p-3 text-sm font-medium text-gray-500 hover:text-gray-700">
                Hubungan Manajemen Perusahaan dengan DKM & Jamaah
              </a>
      
              <a href="#" class="tab-link shrink-0 border border-transparent p-3 text-sm font-medium text-gray-500 hover:text-gray-700">
                Program Sosial
              </a>
      
              <a href="#" class="tab-link shrink-0 border border-transparent p-3 text-sm font-medium text-gray-500 hover:text-gray-700">
                Administrasi dan Keuangan Sosial
              </a>

              <a href="#" class="tab-link shrink-0 rounded-t-lg border border-gray-300 border-b-white p-3 text-sm font-medium text-sky-600">
                Peribah dan Infrastruktur
              </a>
            </nav>
          </div>
        </div>
    </div>
      
    <a href="#" class="block rounded-lg p-4 mb-5 shadow-sm shadow-indigo-100">
        <div class="flex flex-row items-center justify-between rounded-lg p-4 shadow-md mb-10">
            <img src="{{ asset('img/logo1.jpg') }}" alt="Deskripsi Gambar" class="w-40" style="heigh:200px">
            <img src="{{ asset('img/new1.png') }}" alt="Deskripsi Gambar" class="w-40" style="heigh:200px">
            <img src="{{ asset('img/logo3.jpeg') }}" alt="Deskripsi Gambar" class="w-40" style="heigh:200px">
            <img src="{{ asset('img/new2.png') }}" alt="Deskripsi Gambar" class="w-40" style="heigh:200px">
        </div>
        <div class="flex justify-center">
            <img
              alt=""
              src="{{ asset('img/center.png') }}"
              class=" w-3/4 rounded-md "
            />
        </div>
        <p class="font-semibold mt-5">Mulai Mengisi</p>
        <p class="mb-5">Isilah dengan data dan informasi yang benar serta dapat dipertanggungjawabkan</p>
      </a>
</section>
<script src="script/js">
 const navLinkEls = document.querySelectorAll('.tab-link');

 navLinkEls.forEach(navLinkEls => {
    navLinkEls.addEventListener('click', () => {
        navLinkEls.classList.add('active');
    });
 });


</script>
@endsection