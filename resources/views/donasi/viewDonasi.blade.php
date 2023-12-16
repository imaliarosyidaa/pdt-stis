<x-app-layout>
<div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <div class="body-wrapper">
<<<<<<< HEAD
=======
        <div class="ms-5 mt-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Donasi</li>
                </ol>
            </nav>
        </div>
        <!--End Breadcumb-->
>>>>>>> a3e262417d964660bea319c3c3519a212a2c76d4
    <div class="container mt-5">
        @if (session('success'))
            <!-- Success alert code here -->
        @endif
        <livewire:donation-table />
    </div>
    </div>
</div>
</x-app-layout>