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

  .active{
    color:aqua;
  }

</style>


<section>
  <div class="flex justify-center">
      <div class="sm:hidden">
          <label for="Tab" class="sr-only">Tab</label>
          <select id="Tab" class="w-full rounded-md border-gray-200">
              <option value="administrasi" {{ $tab == 'administrasi' ? 'selected' : '' }}>Administrasi</option>
              <option value="program" {{ $tab == 'program' ? 'selected' : '' }}>Program</option>
              <option value="hubungan" {{ $tab == 'hubungan' ? 'selected' : '' }}>Hubungan</option>
          </select>
      </div>

      <div class="hidden sm:block">
          <div class="border-b border-gray-200">
              <nav id="tabNav" class="-mb-px flex gap-3">
                <a href="{{ route('form.show.tab', 'hubungan') }}" class="tab-link shrink-0 p-3 text-sm font-medium text-gray-500 hover:text-gray-700 {{ $tab == 'hubungan' ? 'text-sky-600 border-b-2 border-sky-600' : '' }}">
                    Hubungan DKM dengan YAA
                </a>
                <a href="{{ route('form.show.tab', 'hmanajemen') }}" class="tab-link shrink-0 p-3 text-sm font-medium text-gray-500 hover:text-gray-700 {{ $tab == 'hmanajemen' ? 'text-sky-600 border-b-2 border-sky-600' : '' }}">
                    Hubungan Manajemen Perusahaan dengan DKM & Jamaah
                </a>
                <a href="{{ route('form.show.tab', 'administrasi') }}" class="tab-link shrink-0 p-3 text-sm font-medium text-gray-500 hover:text-gray-700 {{ $tab == 'administrasi' ? 'text-sky-600 border-b-2 border-sky-600' : '' }}">
                    Administrasi
                </a>
                <a href="{{ route('form.show.tab', 'program') }}" class="tab-link shrink-0 p-3 text-sm font-medium text-gray-500 hover:text-gray-700 {{ $tab == 'program' ? 'text-sky-600 border-b-2 border-sky-600' : '' }}">
                    Program
                </a>
              </nav>
          </div>
      </div>
  </div>
  
  <div>
      @if($tab == 'administrasi')
          @include('pages.form.administrasi')
      @elseif($tab == 'program')
          @include('pages.form.program')
      @elseif($tab == 'hubungan')
          @include('pages.form.hubungan')
      @elseif($tab == 'hmanajemen')
          @include('pages.form.hmanajemen')
      @endif
  </div>
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