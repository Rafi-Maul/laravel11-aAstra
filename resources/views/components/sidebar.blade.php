<style>
     .sidebar {
         width: 250px;
         transition: transform 0.3s ease-in-out;
         position: fixed;
         height: 100%;
         top: 0;
         left: 0;
         background-color: white;
         border-right: 1px solid #e0e0e0;
         overflow-y: auto;
    }
</style>

<div class="sidebar flex flex-col justify-between border-e bg-white overflow-y-auto">
  <div class="px-4 py-6">
    <div class="flex justify-center h-10 w-32 rounded-lg bg-gray-100 text-xs text-gray-600">
      <img src="https://vectorez.biz.id/wp-content/uploads/2023/12/Logo-Astra.png" alt="">
    </div>

    <ul class="mt-6 space-y-1">
      <li>
        <a
          href="#"
          class="sidebar-link block rounded-lg px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-700"
        >
          Informasi
        </a>
      </li>

      <li>
        <a
          href="/formulir"
          class="sidebar-link block rounded-lg px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-700"
        >
          Formulir
        </a>
      </li>

      <li>
        <a
          href="#"
          class="sidebar-link block rounded-lg px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-700"
        >
          Presenteasi
        </a>
      </li>

      <li>
        <details class="group [&_summary::-webkit-details-marker]:hidden">
          <summary
            class="flex cursor-pointer items-center justify-between rounded-lg px-4 py-2 text-gray-500 hover:bg-gray-100 hover:text-gray-700"
          >
            <span class="text-sm font-medium"> Account </span>

            <span class="shrink-0 transition duration-300 group-open:-rotate-180">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-5 w-5"
                viewBox="0 0 20 20"
                fill="currentColor"
              >
                <path
                  fill-rule="evenodd"
                  d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                  clip-rule="evenodd"
                />
              </svg>
            </span>
          </summary>

          <ul class="mt-2 space-y-1 px-4">
            <li>
              <a
                href="#"
                class="sidebar-link block rounded-lg px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-700"
              >
                Details
              </a>
            </li>

            <li>
              <a
                href="#"
                class="sidebar-link block rounded-lg px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-700"
              >
                Security
              </a>
            </li>

            <li>
              <form action="#">
                <button
                  type="submit"
                  class="w-full rounded-lg px-4 py-2 text-sm font-medium text-gray-500 [text-align:_inherit] hover:bg-gray-100 hover:text-gray-700"
                >
                  Logout
                </button>
              </form>
            </li>
          </ul>
        </details>
      </li>
    </ul>
  </div>

  <div class="sticky inset-x-0 bottom-0 border-t border-gray-100">
    <a href="#" class="flex items-center gap-2 bg-white p-4 hover:bg-gray-50">
      <img
        alt=""
        src="https://images.unsplash.com/photo-1600486913747-55e5470d6f40?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80"
        class="size-10 rounded-full object-cover"
      />

      <div>
        <p class="text-xs">
          <strong class="block font-medium">Eric Frusciante</strong>

          <span> eric@frusciante.com </span>
        </p>
      </div>
    </a>
  </div>
</div>


<script src="script.js">
  document.addEventListener('DOMContentLoaded', () => {
  const sidebarLinks = document.querySelectorAll('.sidebar-link');

  sidebarLinks.forEach((link) => {
    link.addEventListener('click', (event) => {
      event.preventDefault(); // Mencegah navigasi default

      // Hapus kelas aktif dari semua link
      sidebarLinks.forEach((l) => {
        l.classList.remove('bg-gray-100', 'text-gray-700');
        l.classList.add('text-gray-500');
      });

      // Tambahkan kelas aktif ke link yang diklik
      link.classList.add('bg-gray-100', 'text-gray-700');
      link.classList.remove('text-gray-500');
    });
  });
});

</script>