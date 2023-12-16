<x-app-layout>
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <div class="body-wrapper">
    <div class="container mt-5">
        @if (session('success'))
            <!-- Success alert code here -->
        @endif
        <livewire:keuangan-table/>
    </div>
    </div>
  </div>
</x-app-layout>