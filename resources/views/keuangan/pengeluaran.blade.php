<x-app-layout>
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <div class="body-wrapper">
    <div class="container-fluid">
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <div class="card">
                    <div class="card-body">
                        <form enctype="multipart/form-data" method="post" action="{{ route('pengeluaran.store') }}">
                            @csrf
                            <div class="mb-3">
                                <label for="tanggal" class="form-label">Tanggal</label>
                                <input type="date" class="form-control" id="tanggal" name="tanggal">
                            </div>
                            <div class="mb-3">
                                <label for="jenisPemasukan" class="form-label">Jenis Pengeluaran</label>
                                <input type="text" class="form-control" id="jenisPemasukan" name="jenisPengeluaran">
                            </div>
                            <div class="mb-3">
                                <label for="deskripsiPemasukan" class="form-label">Deskripsi Pemasukan</label>
                                <input type="text" class="form-control" id="deskripsiPemasukan" name="deskripsiPengeluaran">
                            </div>
                            <div class="mb-3">
                                <label for="nominal" class="form-label">Nominal</label>
                                <input type="text" class="form-control" id="nominal" name="nominal">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
  </div>
</x-app-layout>